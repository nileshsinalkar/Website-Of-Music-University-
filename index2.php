
<!DOCTYPE html>
<html>
<head>

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
	<a href="picgallery.html">Photo Gallery</a>
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


    <div class="image1">
        <img border="0" src="image/yoyo1.jpg" width="100%" height="550" >
		<p>Music Is Moonlight In Gloomy Night Of Life.</p>
    </div>


<div class="contact">
<p style="font-size:35px; padding-left:10px; font-weight:;">-Get In Touch-
<img src="image/touch.jpg" style="width:60px;height:60px; "></p>
<img src="image/location.jpg" style="width:18px;height:18px;"> Wonder University, Nerul, Navi Mumbai- 400706<br>
<img src="image/phone.jpg" style="width:18px;height:18px;"> Phone: +912227709574<br>
<img src="image/email.jpg" style="width:18px;height:18px;"> Email: wonderuniversity@gmail.com
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