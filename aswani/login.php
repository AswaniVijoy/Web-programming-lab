<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
<center>
<h1>Registration form</h1>
<form id="form" method="post" action="#">
    <table border="1px solid black " width="50%" height=50%">
        <tr>
            <td>FIRST NAME</td>
            <td><input type="text" id="fname" maxlength="30" required> (max 30 characters)</td>
        </tr>
        <tr>
            <td>LAST NAME</td>
            <td><input type="text" id="lname" maxlength="30"> (max 30 characters)</td>
        </tr>
        <tr>
            <td>DATE OF BIRTH</td>
            <td>
            <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
            <select>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            </select>
            <select>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>EMAIL ID</td>
            <td><input type="email" id="email"></td>
        </tr>
        <tr>
            <td>MOBILE NUMBER</td>
            <td><input type="tel" id="phone"> (10 digit number)</td>
        </tr>
        <tr>
            <td>GENDER</td>
            <td>
                <input type="radio" name="RADIO"> male
                <input type="radio" name="RADIO"> female
            </td>
        </tr>
        <tr>
            <td>ADDRESS</td>
            <td><textarea name="ADDRESS" rows="4" cols="50"></textarea></td>
        </tr>
        <tr>
            <td>CITY</td>
            <td><input type="text" maxlength="30"> (max 30 characters)</td>
        </tr>
        <tr>
            <td>PIN CODE</td>
            <td><input type="number" maxlength="6"> (6 digit number)</td>
        </tr>
        <tr>
            <td>STATE</td>
            <td><input type="text" maxlength="30"> (max 30 characters)</td>
        </tr>
        <tr>
            <td>COUNTRY</td>
            <td><input type="text" value="India"></td>
        </tr>
        <tr>
            <td>HOBBIES</td>
            <td>
                Drawing <input type="checkbox" name="drawing">
                Singing <input type="checkbox" name="singing">
                Dancing <input type="checkbox" name="dancing">
                Sketching <input type="checkbox" name="sketching"> <br>
                Other <input type="checkbox">
                      <input type="text">
            </td>
        </tr>
        <tr>
            <td>QUALIFICATION</td>
            <td>
            <table style="text-align:center">
            <tr>
            <td>SI.NO.EXAMINATION</td>
            <td>Board</td>
            <td>Percentage</td>
            <td>Year of passing</td>
            <tr>
            <tr>
            <td>1  CLASS X</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            </tr>
            <tr>
            <td>2  CLASS XII</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            </tr>
            <tr>
            <td>3  Graduation</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            </tr>
            <tr>
            <td>4  Masters</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            </tr>
            <tr>
            <td></td>
            <td> (10 char max) </td>
            <td> (upto 2 decimal) </td>
            </tr>
            </table>
            </td>      
        </tr>
        <tr>
            <td>COURSES APPLIED FOR </td>
            <td>
                MCA <input type="radio" value="main">
                M . Tech <input type="radio" value="main">
                M Sc <input type="radio" value="main">
                Ph.D <input type="radio" value="main">
            </td>
        </tr>
        <tr>
            <td>TYPE YOUR PASSWORD</td>
            <td><input type="password" maxlength="30"> (max 30 characters)</td>
        </tr>
        <tr>
        <td>UPLOAD YOUR PHOTO</td>
        <td><input type="file"> </td>
        </tr>
        <tr>
        <td>DATE OF TC</td>
        <td><input type="date"></td>
        </tr>
        <tr style="text-align:center">
        <td colspan=2><input type="submit" name="login" value="LOGIN">
        
        </tr>
    </table>
    </form>
    </center>
    <script>
const form=document.getElementById("form");

form.addEventListener('submit',(e)=>{
e.preventDefault();

const fname=document.getElementById("fname").value;
const lname=document.getElementById("lname").value;
const email=document.getElementById("email").value;
const phone=document.getElementById("phone").value;


// firstname and lastname validation
function namevalidation(){
if ((fname.trim() === "") || (lname.trim()==="") ){
        alert("The Names cannot be empty");
        return false;
    }
    const npattern = /^[A-Za-z\s]+$/;
    if ((!npattern.test(fname))|| (!npattern.test(lname))) {
        alert("Name can only contain letters and spaces");
        return false;
    }
 

    return true;

//email validation
function emailvalidation(){
if (email.trim() === "") {
        alert("Email cannot be empty");
        return false;
    }

     const epattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!epattern.test(email)) {
        alert("Invalid email format");
        return false;
    }

    return true;
}



//mobile number validation
function phonevalidation(){
if (phone.trim() === "") {
        alert("phone cannot be empty");
        return false;
    }

     const ppattern = /^\d{10}$/;
    if (!ppattern.test(phone) ) {
        alert("Invalid phone number");
        return false;
    }
return true;

}

if(namevalidation() && phonevalidation() && emailvalidation() )
{
alert("Registration success");
form.submit();

}



});

</script>
</body>
<?php
$con=new mysqli("localhost","root"," ","userdb");
if(isset($_POST['login'])){
$email=&_POST['email'];
$password=&_POST['password'];
$res=$con->query("select * from table where email=('$email' and password='$password')")
	if($res->num_row>0){
	echo"<script> alert ('login successfull')</script>";
	header("location:");
	}
	else
	{
	echo"<script> alert ('login successfull')</script>";
	}
}
}
?>
</html>
