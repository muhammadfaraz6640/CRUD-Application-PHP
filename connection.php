<?php

$server_name = "localhost";
$sname = "root";
$spassword = "";
$dbname = "personal_data";

$con = mysqli_connect($server_name,$sname,$spassword,$dbname);
/*if($con)
{?>
    <script>alert("connection is established")</script>;
<?php
}
else{
    die("connection is not established ".mysqli_connect_error());
}*/
?>