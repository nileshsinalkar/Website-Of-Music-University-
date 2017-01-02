

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


.main1 {
margin-top:5%;
    margin-left:28%;
    width:40%;
    background-color:lightgray;
    padding: 20px;
}
.loginform{
	width:100%;
    font-family: 'Roboto';
    background-color:black;
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

<div class="loginform">
<div class="main1">
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
<p><a href="signup.php">SIGN IN</a> | <a href="index2.php">SKIP</a></p>
</div>
<input type="submit" value="SUBMIT">

</form>
</div>
</div>


</body>
</html>