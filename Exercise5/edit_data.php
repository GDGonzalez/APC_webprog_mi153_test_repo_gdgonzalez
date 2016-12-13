<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET
			   first_name ='$first_name',
			   last_name ='$last_name',
			   user_city ='$city_name',
			   user_email ='$email',
			   phone_num ='$number'
			   WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
	body{
			background-color: lightblue;
	}
	
	#bodyINDEX{
					margin-top:50px;
					}

		#tableINDEX{
					width:80%;
					font-family:Tahoma, Geneva, sans-serif;
					font-weight:bolder;
					color:black;
					margin-bottom:80px;	
					}

		#tableINDEX a{
					font-family: Arial, sans-serif;
					text-decoration:none;
					color:#008CBA;
					}
					 
		#tableINDEX,td,th{
					border-collapse:collapse;
					border:solid white 1px;
					padding:20px;
					}
					 
		#tableINDEX td input{
					width:97%;
					height:35px;
					border:dashed #00a2d1 1px;
					padding-left:15px;
					font-family:Verdana, Geneva, sans-serif;
					box-shadow:0px 0px 0px rgba(1,0,0,0.2);
					outline:none;
					}
					 
		#tableINDEX td input:focus{
					box-shadow:solid 1px 1px 1px rgba(1,0,0,0.2);
					outline:none;
					}
					 
		#tableINDEX td button{
					border:solid #f9f9f9 0px;
					box-shadow:1px 1px 1px rgba(1,0,0,0.2);
					outline:none;
					background:#00a2d1;
					padding:9px 15px 9px 15px;
					color:#f9f9f9;
					font-family:Arial, Helvetica, sans-serif;
					font-weight:bolder;
					border-radius:3px;
					width:49.5%;
					}
					 
		#tableINDEX td button:active{
					position:relative;
					top:1px;
					}
	</style>
</head>
<body id="bodyINDEX">
<center>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center" id = "tableINDEX">
	
	<tr>
    <td align="center"><a>// EDIT DATA HERE //</a></td>
    </tr>
	
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
	
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
	
    <tr>
    <td><input type="text" name="city_name" placeholder="City" value="<?php echo $fetched_row['user_city']; ?>" required /></td>
    </tr>
	
	<tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['user_email']; ?>"/></td>
    </tr>
	
	<tr>
    <td><input type="text" name="number" placeholder="Number" value="<?php echo $fetched_row['phone_num']; ?>"/></td>
    </tr>
	
    <tr>
    <td>
	
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>