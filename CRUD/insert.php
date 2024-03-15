<?php
    $user="root";
    $password="";


 $connect = mysqli_connect('localhost', '$user', '$password', 'database') or die("Connection failed:" .mysqli_connect_error());
 // Check connection
 if (!$connect) {
   die("Connection failed: " . mysqli_connect_error());
 }   

 if($)
 {

 }
$age = $POST_['age'];
$firstname = $POST_['firstname'];

$check_db = "SELECT * FROM database WHERE firstname = '$firstname'";
$run_db = mysqli_query($connect, $check_db);
if(mysqli_num_row($run_db) == 0)
{
    
}













while(mysqli_fetch_row($run_db))
{
    $person_id = "$row[0]";
}
if($person_id == "")
{
    if($age <= 5)
    {
       $query_add = "INSERT INTO database VALUES ('', '$firstname', '$middlename', '$lastname', '$age', '$address', '$gender', '$contact')";
       $query_run = mysqli_query($connect, $query_add);
    }
}
else
{
    Already Added to the database!
}

$query_del = "DELETE FROM database WHERE firs";



?>