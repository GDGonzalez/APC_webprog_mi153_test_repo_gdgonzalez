<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 include_once 'dbconfig.php';

 // delete condition
 if(isset($_GET['delete_id']))
 {
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
 }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>

<script type="text/javascript">
	function edt_id(id)
	{
	if(confirm('Sure to edit ?'))
	{
	window.location.href='edit_data.php?edit_id='+id;
	}
	}
	function delete_id(id)
	{
	if(confirm('Sure to Delete ?'))
	{
	window.location.href='index.php?delete_id='+id;
	}
}
	</script>

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
<body>
<center>

<div id="bodyPHP">
 <div id="content">
    <table align="center" id="tableINDEX">
    <tr>
    <th colspan="7"><a href="mypage.php">/ / Back to Homepage / /</a></th>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
	<th>Email Address</th>
	<th>Phone Number</th>
    <th colspan="2">Operations</th>
    </tr>
	
 <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($con, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>