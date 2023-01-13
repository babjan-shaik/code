
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
     
      <div class="row">
         
      </div>
   </div>    

</body>
</html>
</body>
</html>