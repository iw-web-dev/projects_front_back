<?php
    echo "<link rel='stylesheet' href='style.css'>";
    $username="root";  
    $password="";  
    $hostname = "localhost:3306";

    $dbhandle = mysqli_connect($hostname, $username, $password)  
        or die("Unable to connect to MySQL"); 

    $selected = mysqli_select_db($dbhandle, "project")  
        or die("Could not select examples");

    $result = mysqli_query($dbhandle,"select * from clients;");

    $clients = array();

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  
        $row_array['name'] = $row['name'];
        $row_array['phone'] = $row['phone'];
        array_push($clients,$row_array);  
    } 

    echo '<div class="info">Текст1</div>';
    
    echo '<table><thead><tr><th>Имя</th><th>Телефон</th></tr></thead><tbody>';
    foreach($clients as $client){
        echo '<tr>';
        echo '<td>'.$client['name'].'</td>';
        echo '<td>'.$client['phone'].'</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
?>