<?php

    include "../server.php";

    $monthlyStats = "SELECT 
       MONTH(order_date) AS monthly,
       SUM(order_total_amount) AS monthly_sales 
       FROM order_number_table 
       WHERE order_status = 'Completed'
       AND EXTRACT(YEAR FROM order_date) = YEAR('2024-09-21 22:40:10') 
       GROUP BY monthly
       ORDER BY monthly ASC";

    $res = $conn->query($monthlyStats);

    $allData = [];

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $allData[] = [
                'monthly' => $row['monthly'],
                'monthly_sales' => $row['monthly_sales'],
            ];
        }
    }

    echo json_encode($allData);

    $conn->close();
    
?>