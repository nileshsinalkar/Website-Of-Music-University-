

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<title>MUSIC</title>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function checkName(input) {

    // Check if input contains a digit
    if (/\d/.test(input.value)) {
        alert('Name contains a number');

        // Remove all digit characters
        input.value = input.value.replace(/\d/gi, '');
    }

    // Check if input is empty
    if (input.value === ' ') {
        alert('Name is empty');
    }

    return true;
}
</script>
<style>
.loginform{
	width:100%;
    font-family: 'Roboto';
    background-color:white;
	margin-bottom:0px;padding-bottom:0px;
	overflow:hidden;
z-index:-1;
}
input[type=date], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}

input[type=list], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=number], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=int], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=text], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box; }
	
	input[type=password], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box; }
	
input[type=submit] {
    width:100%;
    background-color: black;
    color: white;
    padding: 10px 20px;
    margin: 8px 0; 
    border: none; 
    border-radius: 2px;
    cursor: pointer; }
.li{float:right;}
.li a:link{
color:gray;
text-decoration:none; }
.li a:visited{
color:gray;
text-decoration:none; }
.li a:active{
color:gray;
text-decoration:none; }
.li a:hover{
color:green;
text-decoration:none; }	
</style>

</head>
<body>

<div class="top">
<div class="logo">
<a href="index.php"><img src="image/muslogo1.jpg" style="width:50px;height:50px;"></a>
</div>
<div class="mu">
<a href="index.php">WONDER UNIVERSITY</a>
</div>
</div>
<div class="nav">
<p>    <ul>
        <li class="dropdown">
    <span style="font-size:25px;cursor:pointer;color:white;" onclick="openNav()">&#9776; </span>
	<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
    <a href="">QUICK LINKS</a>
    <a href="form.php">Admission</a>
	<a href="audition.php">Audition</a>
    <a href="applyforjob.php">Apply for job</a>
	<a href="faq.html">FAQ</a>
    <a href="contact.html">Contact</a>
    </div>
	    </li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Admission</a>
            <div class="dropdown-content">
                <a href="form.php">Graduation</a>
                <a href="form.php">Postgraduation</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Student</a>
            <div class="dropdown-content">
                <a href="form.php">Forms and Applications</a>
                <a href="scholarship.php">Scholarship</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Faculty</a>
            <div class="dropdown-content">
                <a href="directory.html">Directory</a>
                <a href="applyforjob.php">Apply for job</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Areas Of Study</a>
            <div class="dropdown-content">
                <a href="classicalguitar.html">Classical Guitar</a>
				<a href="conducting.html">Conducting</a>
                <a href="jazz.html">Jazz</a>
                <a href="piano.html">Piano</a>
                <a href="string.html">String</a>
                <a href="voice.html">Voice</a>
                <a href="brass.html">Brass</a>
                <a href="woodwind.html">Woodwinds</a>
				<a href="organ.html">Organ</a>
				<a href="musiceduacation.html">Music Eduacation</a>
				<a href="theory.html">Theory</a>
				<a href="musicology.html">Musicology</a>
				</div>
        </li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Giving</a>
            <div class="dropdown-content">
                <a href="prize.html">Prizes</a>
			    <a href="audition.php">Audition</a>
            </div>
        </li>
        <li  class="dropdown">
            <a href="#" class="dropbtn">About Us</a>
            <div class="dropdown-content">
                <a href="mission.html">Mission</a>
                <a href="tution.html">Tuition & Fees</a>
                <a href="facilities.html">Facilities</a>
                <a href="problems.php">Report Problem</a>
            </div>
        </li>
		
<li class="dropdown" style="float:right;">
   <img src="image/login.jpg" width="20" height="20"><a href="login.php">LOGIN</a>
   <img src="image/signin.jpg" width="20" height="20"><a href="signup.php">SIGN UP</a></li>
    </ul>
    
    </p>

    </div>


<div class="loginform">
<div class="box1">
<h3 >Login</h3>

<form method="post" action="login1.php">

<input type="text" name="username" required/>
<br>
Username
<br><br>
<input type="password"  name="password" required/>
<br>
Password
<br><br>
<div class="li">
<p><a href="signup.php">SIGN UP?</a></p>
</div>
<input type="submit" value="SUBMIT">

</form>
</div>
</div>


<div class="bottom">
<div id="topimg">
<a href="#top"><img src="image/top.png" style="width:40px;height:40px;"></a>
</div>
<br><br><br>
<div class="st">
<a href="https://www.facebook.com/universityofutahschoolofmusic?fref=ts"><img src="image/facebook.jpg" style="width:50px;height:50px;"></a>
<a href="https://plus.google.com/u/0/"><img src="image/googleplus.jpg" style="width:50px;height:50px;"></a>
<a href="https://www.instagram.com/juilliardschool/"><img src="image/instagram.jpg" style="width:50px;height:50px;"></a>
<a href="https://twitter.com/juilliardschool"><img src="image/twitter.jpg" style="width:50px;height:50px;"></a>
</div>


<div class="end">
<p><a href="privacypolicy.html"> | Privacy Policy | </a><a href="disclaimer.html"> | Disclaimer | </a><a href="contact.html"> | Contact us | </a></p>

</div>

</div>

</body>
</html>