<?php

    include "../server.php";

    $weeklyStats = "SELECT 
       DAY(order_date) AS day,
       SUM(order_total_amount) AS weekly_sales 
       FROM order_number_table 
       WHERE order_status = 'Completed' 
       AND EXTRACT(MONTH FROM order_date) = MONTH('2024-12-16')
       GROUP BY day
       ORDER BY day ASC;";


    $res = $conn->query($weeklyStats);

    $allData = [];

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $allData[] = $row['weekly_sales'];
        }
    }

    echo json_encode($allData);

   // echo $allData;

    $conn->close();
    
?>