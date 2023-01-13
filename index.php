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
    $nameofwork = $_REQUEST['nameofwork'];
    $slct1 = $_REQUEST['slct1'];
    $slct2 = $_REQUEST['slct2'];
    $syno = $_REQUEST['syno'];
    $date = $_REQUEST['date'];
    $descriptionofwork = $_REQUEST['descriptionofwork'];
    mysqli_query($conn,"insert into new_post(nameofwork,slct1,slct2,syno,date,descriptionofwork,user_id)value('$slct1','$slct2','$nameofwork','$syno','$date','$descriptionofwork','$id')");
 }




?>


<!DOCTYPE html>
<html>
<?php require_once "home2.php"; ?>

<head>
	<title>Tour Dairy</title>

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


<form action="#" method="REQUEST">
  <br>
<tr>
            Name of secretariat : <span style="padding-left:40px;"></span>
<select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
  <option value="">Select Secreatariat</option>
  <option value="Agaduru">Agaduru</option>
  <option value="Buchupalli">Buchupalli</option>
  <option value="Madur">Madur</option>
  <option value="Inagaluru">Inagaluru</option>
  <option value="Gotur">Gotur</option>
  <option value="Thondur">Thondur</option>
  <option value="Mallela">Mallela</option>
  <option value="Santhakovvuru">Santhakovvuru</option>

</select>
<hr />
Name of Revenue Village :
<select id="slct2" name="slct2"></select>
<hr />
   <tr>
   <td>Name of Work :<span style="padding-left:34px;"></span></td>
    <td>
     <select name="nameofwork" required>
      <option selected hidden value="">Select Work</option>
      <option value="F-Line">F-Line</option>
      <option value="Patta Sub-Division">Patta Sub-Division</option>
      <option value="Resurvey">Resurvey</option>
      <option value="Govt Work">Govt Work</option>
      <option value="land Acquistion">Land Acquisition</option>
      <option value="Others">Others</option>
     </select>
    </td>
   </tr>
  <br>
	 <br>
   <label>Survey No :<span style="padding-left:70px;"></span></label><input type="text" name="syno" size="3">
   <br>
   <br>
   <label>Date of Work:<span style="padding-left:50px;"></span></label><input type="date" name="date">
   <br>
   <br>
   <label>Remarks :<span style="padding-left:70px;"></span></label><input type="text" name="descriptionofwork">
	

  <input type="submit"  name="submit"  value="Submit">
</form> 


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
    <h7>© Copyrights by  2022  Vinay jras., All Rights Reserved.</h7>
</div>
</body>
</html>