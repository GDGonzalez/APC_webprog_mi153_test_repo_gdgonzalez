<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Project: Blog</title>
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
																				  window.location.href='mypage.php?delete_id='+id;
																				 }
																				}
																				</script>
	<style>
		
        h3{ color: black;
            text-indent: 20px;} 
        h1{ color:rgb(30, 52, 161); }
        
        a{ text-decoration:none; }
        
        p{ text-indent:50px; }
        
        body{
			font-family:sans-serif;
            text-align:justify;
			filter: invert(0%);
			background-color: lightblue;
			}
                
        #dogPic{
			position: absolute;
			border: 8px solid white;
            top:75px;
            left:82%;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}
                
        #divContent{
					background-color: lightblue;
					width: 170px;
					border: 8px solid white;
					padding: 5px;
					margin: 18px;
					box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
					}
                
        #divBody{
				background-color: lightblue;
				width: 1200px;
				border: 14px solid white;
				padding: 34px;
				margin-left: auto;
				margin-right: auto;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				}
				
		.button{
				display: block;
				background-color: #008CBA;
				border: none;
				color: white;
				padding: 0px 25px;
				text-align: center;
				text-decoration: none;
				font-size: 15px;
				margin:0 auto;
				border-radius: 12px;
				border: 2px solid #e7e7e7;
				transition-duration: 0.4s;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				}
				
		#dinoButton{
					background-color: #e7e7e7;
					color: black;
					padding: 0px 10px;
					border: 2px solid #008CBA;
					}
					
		#invertButton{ 
					position: absolute;
					top: 10px;
					right: 25px;
					display: block;
					background-color: rgb(255, 191, 64);
					border: none;
					color: rgb(116, 139, 184);
					padding: 2px -3px;
					text-align: center;
					text-decoration: none;
					font-size: 15px;
					margin:0 auto;
					border-radius: 50px;
					border: 3px outset white;
					transition-duration: 0.4s;
		}
		
		#normalButton{ 
					position: absolute;
					top: 40px;
					right: 25px;
					display: block;
					background-color: rgb(255, 191, 64);
					border: none;
					color: rgb(116, 139, 184);
					padding: 2px -3px;
					text-align: center;
					text-decoration: none;
					font-size: 15px;
					margin:0 auto;
					border-radius: 50px;
					border: 3px outset white;
					transition-duration: 0.4s;
					}
					
		#phpDIV{
				text-align: center;
				/*display: none;*/
				width: 1200px;
				border: 14px solid white;
				padding: 34px;
				margin-left: auto;
				margin-right: auto;
				margin-top: 25px;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}
			
		#headerLink{
				text-decoration: none;
				text-align: center;
				font-family: Arial, sans-serif;
				font-size: 350%
			}
		
		#headerLinkk{
				
				text-decoration: none;
				text-align: center;
				font-family: Arial, sans-serif;
				color: #008CBA;
				font-style: italic;
				font-weight: bold;
			}
			
		#formButton{
					position: absolute;
					top: 10px;
					left: 25px;
					display: block;
					background-color: rgb(255, 191, 64);
					border: none;
					color: rgb(116, 139, 184);
					padding: 2px -3px;
					text-align: center;
					text-decoration: none;
					font-size: 15px;
					margin:0 auto;
					border-radius: 50px;
					border: 3px outset white;
					transition-duration: 0.4s;
					}
		
		/* CSS FOR INDEX.PHP PORTION */
		
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
	
    <body id = "bodyID">
    
        <div id="headerLink"><a href = "http://gonzalezgabrield.blogspot.com/" id="headerLinkk">Gab's blog</div>

        <div id = "divContent">
		
        <h3>Contents</h3>
        
        <ul>
            <li><a href="#welcome-blog">Welcome to Me</a></li>
				
			<li><a href="#jurrasic">Jurrasic Thoughts</a></li>
		</ul>
		
		</div>
		
		<a href = "http://www.golden-retriever.com/" target = "_blank">
        <img id ="dogPic" src="https://www.kasandbox.org/programming-images/animals/retriever.png" alt="gab" width="200">
        </a>
		
		<div id = "divBody">
		
			<button onclick = "toggle_div('welcomeToMeButton')" id = "welcomeToMeButton" class = "button"><h2 id="welcome-blog" align= center>Welcome To Me</h2></button>
				<p></p>
			
				<div id="blog1"></div>

			
			<button id = "dinoButton" class = "button"><h2 id="jurrasic" align = center>Jurrasic Thoughts</h2></button>
				<p></p>
				
				<div id="blog2"></div>
				
			
        
		</div>	
		
		<button id = "invertButton" class = "xbutton">invert colors</button>
		<button id = "normalButton" class = "xbutton" onclick = "reloadPage()">reload page</button>
		
		<!-- Button to fill out a PHP form.
			 When clicked once, it loads the form.
			 Clicked twice, it hide the form
			 ESSENCIALLY A TOGGLE BUTTON-->
		<button onclick="toggle_phpDIV('phpDIV');" id = "formButton">Fill out a form</button>
		
		<!-- index.php portion -->
		<div id="phpDIV">
									
		
 <center>

<div id="bodyPHP">
 <div id="content">
    <table align="center" id="tableINDEX">
    <tr>
    <th colspan="5"><a href="add_data.php">/ / A d d   D a t a   H e r e / /</a></th>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
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

<!-- ADD_DATA.PHP -->
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="mypage.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
										
		</div>

		
    </body>
	
	<script>
	
	//First Button
	var welcomeToMeButtonEl = document.getElementById("welcomeToMeButton");
	var blog1El = document.getElementById("blog1");
	var clicked = function(){
		blog1El.innerHTML = "<h3>June of 2015</h3><p>Woahohoho! Hello there my dear readers (that may not even exist). Before I start and continue this blog of mine, I would like to introduce myself.</p> <p>My name is Gabriel Joseph De la Pasion Gonzalez. 'Gab' for short. 'For short'... yeah, most people really prefer nicknames with a single syllable. 'Cholo' becomes 'Cho', 'Richard' becomes 'Chard', 'Raphael' becomes 'L' for crying out loud! So I guess my nickname's no problem for you. ANYWAYS, I graduated from Sacred Heart Academy of Pasig. Try to guess where that's from. Kidding! Pasig of course. During our first day of school, our professors asked us to introduce ourselves and mention what high school we graduated from. I noticed right away that the vast majority of my fellow block mates graduated from schools far from Pasig, particularly schools from Pasay, Makati, Paranaque, etc. I kinda felt out of place because I was like the only one who lives in Pasig City. Continuing my introduction, I am 17 years old, born on December 26, in Makati City, to my mother: Anne Margrette De la Pasion Gonzalez, and to my father: Jesus V. Gonzalez. Funny how he's named after God's son when he barely has any of His characteristics. Sorry, I went off topic. Furthermore, I have 2 younger siblings, Miguel and Martin Gonzalez, 15 and 9 respectively. They both live in Pasig and study in my Alma Matter. Well, I guess that's all you have to know about my family background.</p> <p>I am currently a student of Asia Pacific College, the BEST school... in Humabon St. as a wise man once told me. I believe that it is one of the excelling colleges when it comes to IT education. On par with De la Salle University and Ateneo de Manila University as I would like to believe. I saw it on multiple sites! So it must have some degree of legitimacy. Being a freshman in my first term, I am really enjoying my course so far. My course? Well, Information Technology of course! BSIT-MI or Bachelor of Science in Information Technology specialization of Mobile and Internet Technology. To be honest, I would've preferred BS-MIS or Bachelor of Science in Management Information Systems. Unfortunately, I did not pass DLSU to get the privilege of taking that course. So I instead took IT here in APC for a lot of reasonable factors. First, LOCATION. Location is very important in choosing a college. The location of your school from your house could greatly affect and impact your daily life. Choosing a college far away from your home could mean that you'll have to spend hours of your precious life in public transportation. Which is generally not preferred by most people. My primary reason for choosing APC was because of the location. I'm blessed to have a family living in Magallanes with a house that so happens to have a spare room for me to inhabit during the weekdays. That means that it only takes roughly 9-11 minutes to get to class. Amazing right?! Okay. Second reason why I chose APC is because of the rich and excellent IT education that the school offers. I'v read it online, talked to certain human resource agents, and talked to alumni's of the school to get this important piece of knowledge. A college known for rich IT education minutes away from where you stay? Why not, right!?</p> <p>This year I plan to aim high. I want a really high GPA but for a person with almost non-existent study habits, this would be a very tough challenge. But I believe that with the right determination and focus, even a student like me could get a 3.0-4.0 GPA! I really really really want this. The feeling of receiving high grades is soooo self-satisfying and it brings your confidence up. Work hard, play hard. Before, I'd spend most of my time enjoying life without really setting my priorities. Priorities such as study habits and what not. This year I plan to change that. With more time focusing on academics and studies but of course, still keeping a inset social life with people. Hanging out and socializing is also as important as academics. Because what good is all your knowledge for if you cannot even interact properly with other people? I believe that there should always be a balance of both. A Ying and a Yang. Just be focused on your goals and never lose track of your priorities. But never not have fun. Its always a balance, and I can't stress that enough. We study hard, for a good promising future, then we work hard, then play hard. You can't get without giving. You reap what you sow. I am motivated by the life style I want to have once I graduate college. I dream of earning as much as my Tito. The Tito that strongly suggested that I take IT (since I couldn't push through with Aviation). He is an IT Director and earns roughly half a million a month. I want to be able to live that kind of life. Because with that kind of occupation and salary, I would finally be able to bless others the way others blessed me. To give back. To give back to people I owe a lot of thankfulness to. I really want to be a blessing to other and to shower other people with their wishes. So hopefully, in the future, I will reach this goal of mine. But of course, I wouldn't be able to do that without God and His guidance and Word.</p>";
		}
	welcomeToMeButtonEl.addEventListener("click", clicked);
	
	//Second Button
	var dinoButtonEl = document.getElementById("dinoButton");
	var blog2El = document.getElementById("blog2");
	var clicked2 = function(){
		blog2El.innerHTML = "<h3>July of 2015</h3><p>The Jurassic Park trilogy has always been one of my favorite childhood films EVER. Growing up, I've always been in love and fascinated by dinosaurs. Steven Spielberg's Jurassic Park and The Lost World:	Jurassic Park mesmerized my captivation in a beautifully immersive depiction of the Jurassic Park novels. Jurassic Park will always be one of my top favorite films. Watching it for the first time when I was around 6-7 years old, JP was frightening, scary, thrilling, heart pumping, and yet beautiful. The first dinosaur that we encounter in the film is a caged Velociraptor. That opening scene was intense. The frightening sounds that the raptor made while pulling a poor working to his unfortunate death. That's what the Jurassic Park movies are all about. To remind you of how dangerous yet beautiful these untamable creatures really are.</p> <p>Jurassic Park focuses on a theme park featuring cloned dinosaurs created by InGen. Sparing no expense, John Hammond was the proud founder of the Park and all scientific research for the cloning of the dinosaurs. How did they possible cook up such creations? Well, the movie gives a very good explanation as to how they've made dino-cloning a reality. First, they extract the dino-blood from a mosquito, A mosquito? Yes, a mosquito encased in an amber stone for millions of years. With the blood collected, they were able to create dinosaurs with their DNA, but need frog DNA as well to fill in the gap's in the dino-dna. When I first watched the film, I did not pay attention to anything they said. I was only interested with seeing the velociraptors and Rexy. Not only years later that when I watched the movie again, that I understood the plot and everything else going on. I still personally find this film one of the greatest. The dino's, the thrill and suspense of watching the movie. All that makes me love Jurassic Park so much. The most thrilling scene for me was the Kitchen scene with the 2 kids and the velociraptors. How frightened I was when the raptor learned how to open a door!! Guess who comes to the rescue at the end? No other than Rexy! The only Tyrannosaurus Rex in the movie. Who did't love it when the T-rex defeated the infamous raptors? I know I did. A perfect ending, in my opinion. The movie did not disappoint. Instead, it kept me wanting more.</p>";
	}
	dinoButtonEl.addEventListener("click", clicked2);
	
	//Invert Color Button
	var invertEl = document.getElementById("invertButton");
	var bodyScript = document.getElementById("bodyID")
	var clicked3 = function(){
		bodyScript.style.filter = "invert(100%)"
	}
	invertEl.addEventListener("click", clicked3);
	
	
	
	/*Normal Color Button
	var normalButtonEl = document.getElementById("normalButton");
	var clickedv = function(){
		bodyScript.style.filter = "invert(0%)"
	}
	normalButtonEl.removeEventListener("click", clickedv);*/
	function reloadPage(){
		location.reload();
	}
	
	//form button script
	function toggle_phpDIV(id){
		
		var divEl = document.getElementById(id);
		
		if(divEl.style.display == 'block')
			divEl.style.display = 'none';
		else
			divEl.style.display = 'block';
	}
	//end of form button script
	
	</script>
</html>