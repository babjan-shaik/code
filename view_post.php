<?php
include('dbConfig.php');
include('add2.php');

if (!isset($_SESSION['USER_ID'])) {
	header("location:login.php");
	die();
}



$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn,"select * from news_user where email = '$user'");
$rowr =mysqli_fetch_array($query);
$id = $rowr['id'];


$query1 = mysqli_query($conn,"select * from new_post where user_id = '$id'");
$result = mysqli_num_rows($query1);

 ?>
 <center>
<h1>Tour Dairy </h1>

</center>
<hr>
<center>
 <br><br>


 <table  border="1px">
 	<tr>
 		<td><b>Name of Screteriat</b></td>
 		<td><b>Name of Revenue Village</b></td>
		 <td><b>Name of Work</b></td>
 		<td><b>Date of Work</b></td>
		 <td><b>Survey No</b></td>
 		<td><b>Description of Work</b></td>

 	</tr>

 	<?php 
    for($i=1; $i<=$result;$i++)
{
     $row =  mysqli_fetch_array($query1)
 	?>




 	<tr>
 		
		 <td><?php  echo $row['slct1']?></td>
		 <td><?php  echo $row['nameofwork']?></td>
		 <td><?php  echo $row['slct2']?></td>
		 
		 <td><?php  echo $row['date']?></td>
		 <td><?php  echo $row['syno']?></td>
		 <td><?php  echo $row['descriptionofwork']?></td>
		 <td>
							
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
 	</tr>
 <?php } ?> 
 </table>
 <div class="scroll-left">
       <p>Welcome Thondur  Mandal  Surveyors... </p>
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

</center>