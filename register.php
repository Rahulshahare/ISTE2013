<?php require_once("connection/connection.php"); ?>
<?php require_once("connection/function.php"); ?>
<?php
$event = $_POST['event'];
$group = $_POST['grp_name'];
$member = $_POST['members'];
$college  = $_POST['college_name'];
$dept = $_POST['Dept_name'];
$year = $_POST['year'];
$contact = $_POST['contact'];
$email = $_POST['email'];


?>
<?php
	$query = "INSERT INTO user VALUES (
				'$event', '$group', '$member', '$college', '$dept', '$year', $contact, '$email'
			)";
	$result = mysql_query($query, $connection);
	if ($result) {
		// Success!
		?>
		<div id="apDiv1">
  <div class="SUCESS">REGISTRATION SUCCESSFUL</div>
  <div class="IMG">
  <p>Hello Guys</p>
  <h4>
  <?php  echo " $member"; ?> </h4>
  <p>INNOVISION2K13</p>
    <p>WELCOMES YOU</p>
    <p>You are successfully register for</p>
   <strong>
    <?php echo "$event";?> </strong>
  <p>Keep Visiting your email, we will contact you soon at</p>
  <h4>
 <?php  echo " $email"; ?> </h4>
 <h4>
  <?php echo "$contact"; ?>
  </h4>
    Please wait,the page will redirect after<div id="cntDisp"/>sec.
  </div>
</div>
<?php
	} else { ?>
		<div id="apDiv1">
  <div class="SUCESS">REGISTRATION FAILS</div>
             <h3>Due to some errors your registration fail.</h3>
             
  <div class="IMG">
  Please wait,the page will redirect after<div id="cntDisp"/>sec.
  </div>
  <?php
	}
?>

<?php mysql_close($connection); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<style type="text/css">
#apDiv1 {
	
	width:60%;
	margin-left:20%;
	margin-right:20;
	top:30px;
	bottom:30px;
	padding:50px;
	z-index: 1;
	border:1px thin rgba(24,24,24,1);
	border-radius:10px;
}
#apDiv1 {
	background-color: rgba(246,246,246,1);
	-webkit-box-shadow: 3px 1px 30px #030303;
-moz-box-shadow:    3px 1px 30px #030303;
box-shadow:         3px 1px 30px #030303;
}
#apDiv1 .SUCESS {
	font-size: 30px;
	text-align: center;
	background:rgba(66,66,66,0.9);
	border:10px solid rgba(3,3,3,0.7);
	border-radius:5px;
	font-family:"Satisfy Regular";
}
#apDiv1 .IMG {
	font-size: 25px;
	text-align: center;
}
</style>
 <script type="text/javascript" language="javascript">


        window.onload = function() 


        {


            Redirect();


        }


 


        var cnt = 10;


        function Redirect()


        {                        


            if (cnt > 0){


                document.getElementById("cntDisp").innerHTML = 


                cnt + " seconds left..";                


                cnt = cnt - 1;


                setTimeout("Redirect()", 1000);


            }


            else {


                document.getElementById("cntDisp").innerHTML =


                "redirecting...";


                window.open("index.html", "_self");


            }


        }        


    </script>
</head>
<body>

</body>
</html>
