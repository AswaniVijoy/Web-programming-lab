<?php
session_start()
$con=new mysqli("localhost","root","","student1")
if(isset($_POST['submit'])){
$email=$_POST['email']
$password=$_POST['password']
$res=$con->query("select * from student2 where email='$email' and password='$password' ")
if($res->num_rows>0){
$rows=mysqli_fetch_array($res)
$session['email']$rows['email']
echo"<script>alter(login successful)</script>"
header("location:dashboard.php")
}
else{
echo"<script>alter(login unsuccessful)</script>"
}
}
