<?php

if(isset($_GET['id'])){
    $pid = $_GET['id'];
    session_start();
    if(isset($_SESSION['sid'])){
        include 'connect.php';
        $sid = $_SESSION['sid'];
        
        $sql = "select * from jobsapplied where pid='$pid' and sid='$sid';";
        $result=$conn->query($sql);
        $count=$result->num_rows;
            if($count>0){
                header('location: index.php?msg=dup');
                die();
            }
        
        $sql = "INSERT INTO `jobsapplied` "
                . "(`id`, `date`, `pid`, `sid`, `status`) "
                . "VALUES (NULL, CURRENT_DATE(), '$pid', '$sid', 'sent');";
        if ($conn->query($sql) === TRUE) {
       
                header('location: index.php?msg=success');
                
            }else{
                header('location: index.php?msg=failed');
            }
    }else{
        header('location:login.php?msg=login');
    }
}

?>