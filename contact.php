<?php
require 'dbConfig.php';
include('index33.html');

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];

  $languages = $_POST["languages"];
  $language = "";
  foreach($languages as $row){
    $language .= $row . ",";
  }

  $query = "INSERT INTO tb_data VALUES('', '$name', '$age', '$country', '$gender', '$language')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
    <br>
     <br>
<br>
     <br>

    <form class="" action="" method="post" autocomplete="off">
      <label for="">Name</label>
      <input type="text" name="name" required value="">
      <label for="">Age</label>
      <input type="number" name="age" required value="">
      <label for="">Country</label>
      <select class="" name="country" required>
        <option value="" selected hidden>Select Country</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="India">India</option>
      </select>
      <label for="">Gender</label>
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female"> Female
      <label for="">Languages</label>
      <input type="checkbox" name="languages[]" value="English">English
      <input type="checkbox" name="languages[]" value="Chinese">Chinese
      <input type="checkbox" name="languages[]" value="Spanish">Spanish
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </body>
  <style>
   .copy {
   margin-left: 500px;
}
   .scroll-left {
    height: 50px;	
    overflow: hidden;
    position: relative;
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
       </style>
       
       
       <div class="scroll-left">
       <p>Welcome Thondur  Surveyors... </p>
       </div>
       <div class="copy">
   
<h7>© Copyrights by  2022  Vinay jras., All Rights Reserved.</h7>
</div>
</body>
</html>
