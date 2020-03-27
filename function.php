<?php

include("connection.php");
function insert($con){
    $id = $_GET["id"];
    $name = $_GET["Name"];
    $email = $_GET["Email"];
    $password = $_GET["Pass"];
    $dob = $_GET["dob"];
    $gen = $_GET["Gender"];
    
    if($id!= "" && $name!= "" && $email!= "" && $password!= "" && $dob!= "" && $gen!= "")
    {
        $query = "insert into info values('$id','$name','$email','$password','$dob','$gen')";
        $is_inserted = mysqli_query($con,$query);
    if($is_inserted)
    {
        echo "<script>alert('Data Inserted Successfully')</script)";
    }
    else{
        echo "<script>alert('fill all fields')</script)";
    }
}
}
function Delete($con)
{
    $id = $_GET["id"];
    $query = "delete from info where ID =$id";
    $is_deleted = mysqli_query($con,$query);
if($is_deleted)
{
    echo "<script>alert('Data Deleted Successfully')</script>";
}
}
function get_data($con)
{
    $id = $_GET["id"];
    $query = "select * from info where id=$id";
    $run_query = mysqli_query($con , $query);
    $Name;
    $email;
    $pass;
    $do;
    $gen;
    while($rd = mysqli_fetch_array($run_query))
    {
        $Name = $rd["Name"];
        $email = $rd["Email"];
        $pass = $rd["Pass"];
        $do = $rd["Date_birth"];
        $gen = $rd["Gender"];        
    }
    
         echo "<input type = 'text' value='$Name' class='name' >";
         echo "<input type = 'text' value = '$email' >";
         echo "<input type = 'text' value = '$pass' >";
         echo "<input type = 'text' value = '$do' >";
         echo "<input type = 'text' value = '$gen' >";
            


}
function Update($con)
{
    $id = $_GET["id"];
    $name = $_GET["Name"];
    $email = $_GET["Email"];
    $password = $_GET["Pass"];
    $dob = $_GET["dob"];
    $gen = $_GET["Gender"];
    $query = "update info set Name='$name', Email='$email',Pass='$password',Date_birth='$dob', Gender='$gen' where id='$id'";
    $is_updated = mysqli_query($con , $query); 
    if($is_updated)
    {
        echo "<script>alert('Data Updated Successfully')</script>";
    }
    
}
?>


