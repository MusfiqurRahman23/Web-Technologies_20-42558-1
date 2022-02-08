
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php</title>
  <link rel="stylesheet" href="styles.css">
   <style type="styles/css">
    .red{
        color: red;
    }
</style>
</head>
<body>
 
<?php

$nameErr = $emailErr = $dobErr =  $genderErr =  $degreeErr= $bgErr= "";
$name = $email = $dob = $gender = $degree = $dob = $bg = "";

if(isset ($_POST['Submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $degree = $_POST['degree'];
    $bg = $_POST['bd'];   
	if(empty($n)){
		$nameErr = "Please Enter Your Name";
	}
	else{
		if(!preg_match("/^[a-zA-Z- ]*$/", $name)){
		$nameErr =" Text contain a-z, A-Z, period, only. Please Re-enter Your Name";
		$name = "";
	     }
	    else{
	     	if(str_word_count($name)<2){
	     		$nameErr = "Name should contains at least two words";
	     		$name = "";
	     	}
	     }
	}
	if(empty($email)){
		$emailErr = "Please Enter Your Email";
	}
	else{
		if(!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/", $email)){
		$emailErr = "Invalid Email.";
		$email = "";
	     }
	}
	if(empty($dob)){
		$dobErr = "Please choose your birth date ";
	}
	else{
		if($dob<1953-01-01 && $dob>1998-12-31){
       $dobErr = "Enter your valid birth date "; 
		}
	}
	

	if(empty($g)){
		$genderErr = "Please select one option";
	}

	if(count($d)<2){ 
        $degreeErr = "Please select two of them ";
 	 }
 	
 	if(empty($bd)){
		$bgErr = "Please select one option";
	}
 }	
?>


<div Class="fieldset">
       
<form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend>  <b>NAME</b> </legend>
        
        <input type="text" name="name"
        <span class="red"></span>
		<br><br>
        <span class="underline">______________________</span>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>EMAIL</b> </legend>
        <input type="text" name="email" <span class="red"></span><br><br>
        <span class="underline">______________________</span>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>DATE OF BIRTH</b></legend>
        <label for="birthday"></label>
  <input type="date" id="birthday" name="birthday">
  <span class="underline">______________________</span>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>GENDER</b> </legend><br>
        <input type="radio" name="gender" value = "Male" >Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
        <span style="color: red"><br></span>
   
        <span class="underline">______________________</span>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>DEGREE</b> </legend>
        <label for="fname"></label>
        <input type="checkbox" id="ssc" name="ssc" value="ssc">SSC<br>
        <input type="checkbox" id="hsc" name="hsc" value="hsc">HSC<br>
        <input type="checkbox" id="bsc" name="bsc" value="bsc">BSC<br>
        <input type="checkbox" id="msc" name="msc" value="msc">MSC<br>
        <br><br>
       
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>   <b>BLOOD GROUP</b> </legend>
        <label for="bg"></label>
  <select name="bg" id="bg">
    <option value="op"></option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="a+">A+</option>
    <option value="a-">A-</option>
    <option value="ab+">AB+</option>
    <option value="ab-">AB-</option>
    <option value="b+">B+</option>
    <option value="b-">B-</option>
  </select>
  
  <br><br>
        <input type="submit" name "send"> 
    </fieldset>
    <br>
    
</div>
</form>
<?php

echo "<h1>$name</h1>" ;
echo "<br>";
echo "$email";
echo "<br>";
echo "$dob"; 
echo "<br>";
echo "$gender"; 
echo "<br>";
foreach ($degree as $key => $value) {
echo $value . " ";
 }
echo "<br>";
echo "$bg"; 
?>
</body>
</html>