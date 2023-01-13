<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style22222.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #6665ee;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    @media only screen and (max-width: 600px) {
  scrool-left {
    background-color: lightblue;
  }
}
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#"><h5>Welcome</h5><?php echo $fetch_info['name'] ?><h6>Village Surveyor</h6></a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <div class="navlist">
    <ul>
    <li><a href="resurveydpr.php">Tour Dairy</a></li> 
    <li><a href="">Re-Survey DPR</a></li> 
    </ul>
    </div>
    <style>
    .navbar h5{
        margin-top: -10px;
        color: orange;

    }
   .scroll-left {
    height: 50px;	
    overflow: hidden;
    position: relative;
    margin-top: 150px;
    background: yellow;
    color: black;
    border: 1px solid orange;
   }
   .scroll-left p {
    position: absolute;
    width: 100%;
    height: 100%;
    margin: 0;
    line-height: 50px;
    text-align: center;
    /* Starting position */
    transform:translateX(100%);
    /* Apply animation to this element */
    animation: scroll-left 30s linear infinite;
   }
       /* Move it (define the animation) */
       @keyframes scroll-left {
        0%   {
        transform: translateX(100%); 		
        }
        100% {
        transform: translateX(-100%); 
        }
       }
       #myBtn {
  display: none;
  position: fixed;
  bottom: 80px;
  right: 25px;
  z-index: 99;
  font-size: 15px;
  border: none;
  outline: none;
  background-color: orangered;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
       </style>
   <div class="container">
      <h2>Staff Details</h2>
      <div class="row">
         <div class="column">
         <a href=""><img src="IMG_0372.JPG" alt="">BANDI VINAYKUMAR REDDY </a>
         <a href="">Village Surveyor</a>
         </div>
         <div class="column">
            <a href=""><img src="IMG_0413.JPG" alt="">BANDI SAIRAM REDDY</a>
            <a href="">V.R.O</a>
         </div>
         <div class="column">
            <a href=""><img src="IMG_0123.JPG" alt="">KOMMA JITHENDRA KUMAR REDDY</a>
            <a href="">Village Surveyor</a>
         </div>
      </div>
   </div>    
<div class="scroll-left">
       <p>Welcome Thondur  Mandal Village Surveyors... </p>
       </div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<div class="copy">
    <h7>© Copyright 2022  B.V.K.R., All Rights Reserved.</h7>
</div>
</body>
</html>