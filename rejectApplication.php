<?php

include 'authorizeEmployer.php';
if(isset($_GET['id'])){
    $aip = $_GET['id'];  //application id
   
    
        include 'connect.php';
      
        
        $sql = "update jobsapplied set status='Rejected' where id='$aip';";
        $result=$conn->query($sql);
        header('location: ViewApplicants.php');
}else{     
                header('location: main.php?msg=dup');
}
                die();
            
        
       
    


?>