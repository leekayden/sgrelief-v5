<?php

  
error_reporting(1);

$env = "dev";

if ($env = "dev") {
    $conn = new mysqli("localhost","root","","jobportal");

}
else {
    $conn = new mysqli("localhost","jobportal","qCyc54^16","jobportal");
}

?>

