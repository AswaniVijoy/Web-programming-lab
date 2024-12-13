<?php
session_start()
$email=$_session['email']
?>

<?php
$con=new mysqli("localhost","root","","student1")
$sel=$con->query("select * from student2 where email='$email'")
if($sel->num_rows>0){
while($result=mysqli_fetch_array($sel]){
$email=$result['email']
$name=$result['name']
$course=$result['course']
$phn=$result['phn']
echo
"<tr>
<td>$name</td>
<td>$email</td>
<td>$phn</td>
<td>$course</td>"
}
?>
