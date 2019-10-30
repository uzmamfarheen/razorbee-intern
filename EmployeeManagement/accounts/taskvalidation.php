<?php
     $conn = mysqli_connect('localhost','root','','employee');
     $date = date('Y-m-d');
     $task= $_POST['task'];
     echo $task;

    //  $query = "INSERT INTO tasktable (date,task) VALUES (5,$_POST['task'])";

    $result = mysqli_query($conn,"insert into tasktable(date,task) values ('$date','$task')");
    
?>