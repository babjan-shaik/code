<?php
include('dbConfig.php');

if (!isset($_SESSION['USER_ID'])) {
	header("location:login.php");
	die();
}
 ?>

<?php 

$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn,"select * from news_user where email = '$user'");
$row =mysqli_fetch_array($query);
$id = $row['id'];

/*echo "$id";*/

 if (isset($_REQUEST['submit'])) 
 {
 	 $title =   $_REQUEST['title'];
 	 $content = $_REQUEST['content'];
    $nameofwork = $_REQUEST['nameofwork'];
    $slct1 = $_REQUEST['slct1'];
    $slct2 = $_REQUEST['slct2'];
    $syno = $_REQUEST['syno'];
    $date = $_REQUEST['date'];
    $descriptionofwork = $_REQUEST['descriptionofwork'];
    mysqli_query($conn,"insert into new_post(title,content,nameofwork,slct1,slct2,syno,date,descriptionofwork,user_id)value('$title','$content','$slct1','$slct2','$nameofwork','$syno','$date','$descriptionofwork','$id')");
 }




?>


<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
  <script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Agaduru"){
		var optionArray = ["|","Udavagandla|Udavagandla","Agaduru|Agaduru"];
	} else if(s1.value == "Madur"){
		var optionArray = ["|","Jalaparthi|Jalaparthi","Madur|Madur","Saidapuram|Saidapuram","Gundlamadugu|Gundlamadugu"];
	} else if(s1.value == "Inagaluru"){
		var optionArray = ["|","Thelluru|Thelluru","Inagaluru|Inagaluru"];
	}
 else if(s1.value == "Gotur"){
		var optionArray = ["|","Gotur|Gotur","Thimmapurampeta|Thimmapurampeta","Yadavakunta|Yadavakunta"];
	}
  else if(s1.value == "Santhakovvuru"){
		var optionArray = ["|","Santhakovvuru|Santhakovvuru"];
	}
  else if(s1.value == "Thondur"){
		var optionArray = ["|","Thondur|Thondur"];
	}
  else if(s1.value == "Buchupalli"){
		var optionArray = ["|","Buchupalli|Buchupalli","Bhadrampalli|Bhadrampalli"];
	}
  else if(s1.value == "Gotur"){
		var optionArray = ["|","Gotur|Gotur","Thimmapurampeta|Thimmapurampeta","Yadavakunta|Yadavakunta"];
	}
  else if(s1.value == "Mallela"){
		var optionArray = ["|","Mallela|Mallela"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
</head>
<body>


 
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
    <a class="navbar-brand" href="#"><h5>Welcome</h5><?php echo $_SESSION['UNSER_NAME'] ?><h6>Village Surveyor</h6></a>
  
    </nav>
    <div class="navlist">
    <ul>
    <li><a href="index.php">Tour Dairy</a></li> 
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
    <h7>© Copyrights by 2022  Vinay jras., All Rights Reserved.</h7>
</div>
</body>
</html>
</body>
</html>