

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
.signupform{
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
    box-sizing: border-box;
}
input[type=email], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
	font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=password], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=submit] {
    width:100%;
    background-color: black;
    color: white;
    padding: 10px 20px;
    margin: 8px 0; 
    border: none; 
    border-radius: 2px;
    cursor: pointer;
}
.si{float:right;}
.si a:link{
color:gray;
text-decoration:none; }
.si a:visited{
color:gray;
text-decoration:none; }
.si a:active{
color:gray;
text-decoration:none; }
.si a:hover{
color:green;
text-decoration:none; }	

.area{
background-color:white;
font-family:'Quicksand';

overflow:hidden;
z-index:-1;
padding-left:10%;padding-right:10%;}
.image{margin-left:27%;}
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
<div class="area">
<h2 style="text-align:center;">Eligibility Requirements</h2><hr>
<br><br>
*Students who receive a scholarship, fellowship, or other financial aid administered by the Wonder University are required by state law to certify that they are eligible to receive the scholarship as a U.S. citizen or a citizen of another country who is lawfully present in the U.S. If students do not know whether they are in the U.S. lawfully, they should seek the advice of an immigration attorney before filing a scholarship/financial aid application.<br><br>

Prior to the disbursement of any scholarship/financial aid, the Wonder University is required by law to verify the recipient's citizenship status or lawful presence in the U.S. with the Department of Homeland Security (DHS). Once the University submits a student's information to DHS for verification, this federal agency may have the legal right to share the information with other government agencies.<br><br>

I certify under penalty of perjury that I am either a U.S. citizen or a citizen of another country who is lawfully present within the U.S. I understand that my lawful presence within the U.S. will be verified through the Department of Homeland Security prior to an award of this scholarship/financial aid.<br><br>
</div>
<br>
<div class="signupform">
<div class="box1">
<h3 >SCHOLARSHIP</h3>
<div class="si">
<p><a href="login.php">Login before submitting this form</a></p>
</div>
<form   method="post" action="scholarship1.php">
   
<input type="text" name="firstname" onChange="checkName(this)" required/>
<br>
First Name
<br><br>
<input type="text" name="lastname" onChange="checkName(this)" required/>
<br>
Last Name
<br><br>
<select type="list" name="gender" required/>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<br>
Gender
<br><br>
<input type="email" name="email" required/>
<br>    
Email  
<br><br>
<input type="number" name="phone" min="7000000000" max="9999999999" required/>
<br>    
Phone  
<br><br>
<select type="list" name="income" required/>
<option value="<5k"> <5k </option>
<option value="<10"> <10k </option>
<option value="<20k"> <20k </option>
<option value="<40k"> <40k </option>
<option value="<80k"> <80k </option>
<option value=">80k"> >80k </option>
</select>
<br>
Family-Income
<br><br>

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