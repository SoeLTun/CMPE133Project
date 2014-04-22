<?php session_start(); ?>
<html>
<head>
<title>Edit Profile</title>
<link rel="stylesheet" type="text/css" href="style_editprofile.css">
</head>
<body style=" background-color: lightgray;">
<h1 class="editprofile"><img class="small-logo" src="sjsu6.png" style="width: 88px; height: 88px; float:left; 
background-color:gray; margin-left:30px;margin-bottom:10px; ">Mentor Web</h1>
<br>
<form >
<h2 class="editprofile1"style="  blue; font-size: 20pt;font-style: italic;
	 font-family: cursive;font-weight: bold; margin-left:550px;}"> Edit Profile</h2>
<div class="editprofile">

<form class="editprofile" method="post" action="changePassword.php">
<p class="editprofile">
Old Password: <input class="editprofile1" type="password" name="oldpassword" style="margin-left:36px;"><br><br>
New Password: <input class="editprofile1" type="password" name="newpassword" style="margin-left:32px;"><br><br>
Re-enter Password: <input class="editprofile1"  type="password" name="repeatnewpassword">
<input class="editprofile" type="submit" value="Submit" name="passwordsubmit" ></p><br>
</form>

<?php
$paid = false; //remove this line, change next to if ($_SESSION['paid'] == false)
if (!$paid) {
    echo '<p class ="editprofile">Would you like to become a premium member<br> and remove all limits on mentors and mentees?</p>';
    echo '<form action="subscribe.php"><input class="editprofile" type="submit" value="Subscribe"style="margin-left:300px;" ></form>'; 
} else { // change to else if ($_SESSION['paid'] == true)
    $creditCardLastFourDigits = 1111; //change to grab credit card info
    echo '<p class ="editprofile">Credit Card: ************'.$creditCardLastFourDigits.'</p>';
    echo '<input class ="editprofile" type="button" onlick="changeCreditCard.php" value="Change">';
}
?>

<p class="editprofile">Email: 
<?php 
$email = 'someemail@email.com';
echo $email;
?>
</p>
<form class="editprofile" method="post" action="changeEmail.php">
New email: <input class="editprofile1" type="text" name="email"style="margin-left:36px;">
<input class="editprofile" type="submit" value="Submit" name="submit">
</form>

<p class="editprofile">Interests:</p><br>
<?php
//some php code to get current interests into an array
//for each intetersts in array
//    echo 'interestString';
//    echo '<input type="button" onclick="deleteInterest($interest)" value="Delete" />
?>

<p class="editprofile">Job Description:
<?php
$jobDescription = 'myjob';
// set job description
echo $jobDescription;
?>
</p>
<form class="editprofile" method="post" action="changeJobDescription.php">
New Job Description: <input class="editprofile1" type="text" name="jobdescription">
<input class="editprofile" type="submit" value="Submit" name="submit">
</form>

<p class="editprofile">SkypeID: 
<?php
$skypeid = 'myskypeid';
// set $skypeid to get skypeID
echo $skypeid;
?>
</p>
<form class="editprofile" method="post" action="changeSkypeID.php">
New Skype ID: <input class="editprofile1" type="text" name="newskypeid"style="margin-left:36px;">
<input class="editprofile" type="submit" value="Submit" name="submit">
</form>

<p class="editprofile">My Mentees:</p>
<!-- 
list mentees with buttons to remove from both parties and inform 
<input class="editprofile" type="button" onclick="deleteMentorOrMentee.php" value="Delete">
-->
<p class="editprofile">My Mentors:</p>
<!-- 
list mentees with buttons to remove from both parties and inform 
use button after each <input class="editprofile" type="button" onclick="deleteMentorOrMentee.php" value="Delete">
-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['passwordsubmit'])){
    	echo 'password submitted';
    }
}
function deleteInterest($interest) {
    echo 'interest deleted!';
    header('Refresh: 3; URL=http://localhost/index.php');
}
?>
</div><br>
</form>
<br><br><br>
</body>
</html>
