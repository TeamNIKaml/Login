<?php
	class View
	{
		
	
	
		public static function register($id)
		{
			echo'	<html>
			<body BACKGROUND="resources\BACK.JPG">
			<form  method = "post" action="process_register.php" >
					<div style="margin:2%;">
					<div style="width:50%;"><i><u><b> User Profile </b></u></i> :- </div>
					<div style="margin:15px 0 50px 50px;width:50%;">
					<table>
					<tr>
					<td><label>id:</label></td>
					<td><input type="text"  name="id" value='.$id.' readonly ></td>
				</tr>
				<tr>
				<td><label>Name:</label></td>
				<td><input type="text"  name="name"></td>				
				</tr>
				<tr>
				<td><label>password:</label></td>
				<td><input type="password"  name="password"></td>				
				</tr>
					</table>
					</div>
					<div style="width:50%;"><i><u><b>Set security question to reset password </b></u></i> :- </div>
					<div style="margin:15px 0 50px 50px;width:50%;">
					<table>
					<tr>
					<td>SecurityQuestion:</td><td><textarea rows="4" cols="40"  type="text" name="question" ></textarea></td>
					</tr>
					<tr>
					<td>Answer:</td><td><textarea rows="4" cols="40"  type="text" name="answer"> </textarea></td>
					</tr>
					</table>
					</div>
				<input type="hidden"   name="id" value='.$id.'>	
				<input type="submit" value="Submit" >
				<input type ="reset" value="CLEAR" >
				</div>
				</div>
				</form>
				</body>
			</html>';		
		}
	
		public static function display_question($question,$id)
		{
					echo'<html>
					<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
					<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
					<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
					<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
					<head>

						<link rel="stylesheet" href="css/base.css">
						<link rel="stylesheet" href="css/skeleton.css">
						<link rel="stylesheet" href="css/layout.css">
						
					</head>
					<body>

						<div class="notice">
							<a href="" class="close">close</a>
						</div>
						<div class="container">
							
							<div class="form-bg">
								<form action="process_answer.php"  method="post" >
									<h2>'.$question.'</h2>
									<p><input type="text"   name="answer" placeholder="Enter your answer"></p>
									<p><input type="hidden"   name="id" value='.$id.'></p>
									<input type="submit"></button>
								<form>
							</div>
							<p class="forgot">Forgot your password? <a href="forgot_password.php">Click here to reset it.</a></p>

						</div><!-- container -->
						
					</body>
					</html>';
		}
	
		public static function user_id()
		{
					echo'<html>
					<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
					<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
					<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
					<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
					<head>

						<link rel="stylesheet" href="css/base.css">
						<link rel="stylesheet" href="css/skeleton.css">
						<link rel="stylesheet" href="css/layout.css">
						
					</head>
					<body>

						<div class="notice">
							<a href="" class="close">close</a>
						</div>
						<div class="container">
							
							<div class="form-bg">
								<form action="process_id.php"  method="post" >
									<h2>ForgotPassword</h2>
									<p><input type="text"   name="id" placeholder="Enter your id"></p>
									<input type="submit"></button>
								<form>
							</div>
							<p class="forgot">Forgot your password? <a href="forgot_password.php">Click here to reset it.</a></p>

						</div><!-- container -->
						
					</body>
					</html>';
		}
	
	
		public static function login()
		{
		
				
		
			require_once 'openid.php';
			$openid = new LightOpenID("http://localhost:9999/Login_Poc/");

			$openid->identity = 'https://www.google.com/accounts/o8/id';
			$openid->required = array(
			  'namePerson/first',
			  'namePerson/last',
			  'contact/email',
			);
			$openid->returnUrl = 'http://localhost:9999/Login_Poc/google.php';



		
		
		
					echo'<html>
					<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
					<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
					<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
					<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
					<head>

						<link rel="stylesheet" href="css/base.css">
						<link rel="stylesheet" href="css/skeleton.css">
						<link rel="stylesheet" href="css/layout.css">
						
					</head>
					<body>

						<div class="notice">
							<a href="" class="close">close</a>
						</div>
						
						<div class="container">
						
							<div class="form-bg">
								<form action="login.php"  method="post" >
									<h2>Login</h2>
									<p><input type="text"   name="name" placeholder="Username"></p>
									<p><input type="password" name="password" placeholder="Password"></p>
									<input type="button" value="Register" onclick="JavaScript:window.location.assign(\'register.php\');"></button>
									<button type="submit"></button>
									
								<form>
							
							</div>		
							<p class="forgot">Forgot your password? <a href="security_question.php">Click here to reset it.</a></p>						
							<p class="forgot">
								<a href="fb.php"><img src = "resources/fb.png"></a>&nbsp;&nbsp;
								<a href='.$openid->authUrl().'><img src = "resources/google.png"></a>
							</p>
						
						</div><!-- container -->
						
					</body>
					</html>';
		}
		public static function forgot_password($id)
		{
					echo'<html>
					<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
					<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
					<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
					<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
					<head>

						<link rel="stylesheet" href="css/base.css">
						<link rel="stylesheet" href="css/skeleton.css">
						<link rel="stylesheet" href="css/layout.css">
						
					</head>
					<body>

						<div class="notice">
							<a href="" class="close">close</a>
						</div>
						<div class="container">
							
							<div class="form-bg">
								<form action="process_password.php"  method="post" >
									<h2>ResetPassword</h2>
									<p><input type="password"   name="password1" placeholder="New Password"></p>
									<p><input type="password" name="password2" placeholder="Confirm Password"></p>
									<p><input type="hidden" name="id" value='.$id.'></p>
									<input type="submit">
								<form>
							</div>
							</div><!-- container -->
						
					</body>
					</html>';
		}
		
		public static function edit($id)
		{
			include 'profile.php';	
		$profile = new Profile;
		$profile->select_id($id);

		echo"	<html>
					<body BACKGROUND=\"resources\BACK.JPG\">
					<form  method = 'post' action='add.php?id=$profile->id' >";
					echo '
							<div style="margin:2%;">
							<div style="width:50%;"><i><u><b> User Profile </b></u></i> :- </div>
							<div style="margin:15px 0 50px 50px;width:50%;">
							<table>
							<tr>
							<td><label>Firstname:</label></td>
							<td><input type="text"  name="fname" value ='. $profile->firstname.'></td>
						</tr>
						<tr>
						<td><label>LastName:</label></td>
						<td><input type="text"  name="lname" value ='.$profile->lastname.'></td>				
						</tr>
						<tr>
						<td><label>Age:</label></td>
						<td><input type="text"  name="age" value ='.$profile->age.'></td>				
						</tr>
						<tr>
						<td><label>DOB:</label></td>
						<td><input type="date"  name="dob" value ='. $profile->dob.'></td>				
						</tr>
						<tr>
						<td><label>Sex:</label></td>
						<td><select name="sex">
							<option value ='. $profile->sex.'>Male</option>
								<option value="Female">Female</option></select></td>				
						</tr>
						<tr>
						<td><label>PhoneNumber:</label></td>
						<td><input type="text"  name="phone" value ='. $profile->phone.'></td>				
						</tr>
							</table>
							</div>
							<div style="width:50%;"><i><u><b>ADDRESS </b></u></i> :- </div>
							<div style="margin:15px 0 50px 50px;width:50%;">
							<table>
							<tr>
							<td>Permanent Address:</td><td><textarea rows="4" cols="40"  type="text" name="paddress" >'. $profile->permenent.'</textarea></td>
							</tr>
							<tr>
							<td>Current Address:</td><td><textarea rows="4" cols="40"  type="text" name="caddress" >'. $profile->current.' </textarea></td>
							</tr>
							<tr>
							<td>Office Address:</td><td><textarea rows="4" cols="40"  type="text" name="oaddress" >' .$profile->office.'</textarea> </td>
							</tr>
							</table>
							</div>
							<div style="margin:-614px 0 100px;width:50%;float:right"><i><u><b>Job Details </b></u></i> :-</div>
							<div style="margin:-560px -60px 100px 100px;width:50%;float:right">
							<table>
							<tr>
						<td><label>Company:</label></td>
						<td><input type="text"  name="company" value ='.$profile->company.'></td>				
						</tr>
						<tr>
						<td><label>Designation:</label></td>
						<td><input type="text"  name="designation" value ='.$profile->designation.'></td>				
						</tr>
						<tr>
						<td><label>Experience:</label></td>
						<td><input type="text"  name="experience" value =' .$profile->experience.'></td>				
						</tr>
						<tr>
						<td><label>Skills:</label></td>
						<td><input type="text"  name="skill" value ='. $profile->skills.'></td>				
						</tr>
							</table>
							</div>
							<div>
							<input type="submit" value="Submit" >
							<input type ="reset" value="CLEAR" >
							</div>
							</div>
							</form>
							</body>
			</html>';
		}
		public static function add()
		{
				echo'	<html>
			<body BACKGROUND="resources\BACK.JPG">
			<form  method = "post" action="add.php" >
					<div style="margin:2%;">
					<div style="width:50%;"><i><u><b> User Profile </b></u></i> :- </div>
					<div style="margin:15px 0 50px 50px;width:50%;">
					<table>
					<tr>
					<td><label>Firstname:</label></td>
					<td><input type="text"  name="fname" ></td>
				</tr>
				<tr>
				<td><label>LastName:</label></td>
				<td><input type="text"  name="lname"></td>				
				</tr>
				<tr>
				<td><label>Age:</label></td>
				<td><input type="text"  name="age"></td>				
				</tr>
				<tr>
				<td><label>DOB:</label></td>
				<td><input type="date"  name="dob"></td>				
				</tr>
				<tr>
				<td><label>Sex:</label></td>
				<td><select name="sex">
					<option value="Male">Male</option>
						<option value="Female">Female</option></select></td>				
				</tr>
				<tr>
				<td><label>PhoneNumber:</label></td>
				<td><input type="text"  name="phone"></td>				
				</tr>
					</table>
					</div>
					<div style="width:50%;"><i><u><b>ADDRESS </b></u></i> :- </div>
					<div style="margin:15px 0 50px 50px;width:50%;">
					<table>
					<tr>
					<td>Permanent Address:</td><td><textarea rows="4" cols="40"  type="text" name="paddress" ></textarea></td>
					</tr>
					<tr>
					<td>Current Address:</td><td><textarea rows="4" cols="40"  type="text" name="caddress"> </textarea></td>
					</tr>
					<tr>
					<td>Office Address:</td><td><textarea rows="4" cols="40"  type="text" name="oaddress"></textarea> </td>
					</tr>
					</table>
					</div>
					<div style="margin:-614px 0 100px;width:50%;float:right"><i><u><b>Job Details </b></u></i> :-</div>
					<div style="margin:-560px -60px 100px 100px;width:50%;float:right">
					<table>
					<tr>
				<td><label>Company:</label></td>
				<td><input type="text"  name="company"></td>				
				</tr>
				<tr>
				<td><label>Designation:</label></td>
				<td><input type="text"  name="designation"></td>				
				</tr>
				<tr>
				<td><label>Experience:</label></td>
				<td><input type="text"  name="experience"></td>				
				</tr>
				<tr>
				<td><label>Skills:</label></td>
				<td><input type="text"  name="skill"></td>				
				</tr>
				</table>
				</div>
				<div>
				<input type="submit" value="Submit" >
				<input type ="reset" value="CLEAR" >
				</div>
				</div>
				</form>
				</body>
			</html>';
		}
		public static function popup($id)
		{
			include 'profile.php';	
		$profile = new Profile;
		$profile->select_id($id);

		echo"	<html>
					<body>	";
					echo '
						<div style="margin:2%;">
						<div style="width:50%;"><i><u><b> User Profile </b></u></i> :- </div>
						<div style="margin:15px 0 50px 50px;width:50%;">
						<table>
						<tr>
						<td><label>Firstname:</label></td>
						<td><input type="text" readonly name="fname" value ='. $profile->firstname.' ></td>
						</tr>
						<tr>
						<td><label>LastName:</label></td>
						<td><input type="text"  name="lname" readonly value ='.$profile->lastname.' ></td>				
						</tr>
						<tr>
						<td><label>Age:</label></td>
						<td><input type="text"  name="age" readonly value ='.$profile->age.' ></td>				
						</tr>
						<tr>
						<td><label>DOB:</label></td>
						<td><input type="text"  name="age" readonly value ='.$profile->dob.' ></td>	
						</tr>
						<tr>
						<td><label>Sex:</label></td>
						<td><input type="text"  name="age" readonly value ='.$profile->sex.' ></td>	
						</tr>
						<tr>
						<td><label>PhoneNumber:</label></td>
						<td><input type="text"  name="phone" readonly value ='. $profile->phone.' ></td>				
						</tr>
							</table>
							</div>
							<div style="width:50%;"><i><u><b>ADDRESS </b></u></i> :- </div>
							<div style="margin:15px 0 50px 50px;width:50%;">
							<table>
							<tr>
							<td>Permanent Address:</td><td><textarea rows="4" cols="40"  type="text" name="paddress" readonly >'. $profile->permenent.'</textarea></td>
							</tr>
							<tr>
							<td>Current Address:</td><td><textarea rows="4" cols="40"  type="text" name="caddress" readonly >'. $profile->current.' </textarea></td>
							</tr>
							<tr>
							<td>Office Address:</td><td><textarea rows="4" cols="40"  type="text" name="oaddress" readonly>' .$profile->office.'</textarea> </td>
							</tr>
							</table>
							</div>
							<div style="margin:-614px 0 100px;width:50%;float:right"><i><u><b>Job Details </b></u></i> :-</div>
							<div style="margin:-560px -60px 100px 100px;width:50%;float:right">
							<table>
							<tr>
						<td><label>Company:</label></td>
						<td><input type="text"  name="company" readonly value ='.$profile->company.' ></td>				
						</tr>
						<tr>
						<td><label>Designation:</label></td>
						<td><input type="text"  name="designation" readonly value ='.$profile->designation.'></td>				
						</tr>
						<tr>
						<td><label>Experience:</label></td>
						<td><input type="text"  name="experience" readonly value =' .$profile->experience.' ></td>				
						</tr>
						<tr>
						<td><label>Skills:</label></td>
						<td><input type="text"  name="skill" readonly value ='. $profile->skills.' ></td>				
						</tr>
							</table>
							</div>
							<div>
							<button onclick="JavaScript:window.close()">close</button>
							</div>
							</div>
							</body>
			</html>';
		}
		public static function gridview($grid_id)
		{
			include 'profile.php';
			$profile = new Profile;
			$id = explode('.', $grid_id);
			if($id[0] == 'd')
			{
				$profile->id = $id[1];
				$profile->delete();
			}
			echo'<html>
				<body >
				<div style="width:100%; height:5%"><i><u><b> List of users </b></u></i> :- </div>
				<form>
				<div style="margin:2%;width:50%;">
				<table border="2">
				<tbody><tr><th>FirstName</th>
					<th>LastName</th>
					<th>PhoneNumber</th>
					<th>Edit</th>
					<th>View</th>
					<th>Delete</th>
					</tr>';
			$list_of_profile = array();
			$list_of_profile = $profile->select();
			foreach ($list_of_profile as &$value)
			{				
				echo "<tr>
							<td>".$value->firstname."</td>
							<td>".$value->lastname."</td>
							<td>".$value->phone."</td>
							<td>&nbsp;
							<a href='add_profile.php?id=$value->id'>Edit</a></td>
								<td>&nbsp;
									<script type='text/javascript'>
									function newPopup(url) {
										popupWindow = window.open(
											url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									}
									</script>
									<a href=\"JavaScript:newPopup('popup.php?id=$value->id');\">View</a>
								</td>
								<td>&nbsp;<a href='gridview.php?id=d.$value->id'>delete</a></td>
						</tr>";
						
			}
			echo'</tbody></table>
				</div>
				</body>
				</html>';
		}
		public static function menu()
		{
				include_once "session.php";
				$session = new session;
				echo '	<TABLE NAME="DISPLAY" BORDER="0" CELLPADDING="0%" CELLSPACING="0%"  ALIGN="CENTER"  WIDTH="100%" > 
				<FONT COLOR="#FA3838">
				<TD BACKGROUND="resources\g.jpg"></TD><TR>
				<!--<TD BGCOLOR="#D0F0FF"></TD><TR>
				<TD BGCOLOR="#A1DEFF"></TD><TR>-->
				<TD>
				<TABLE NAME="BASETABLE" WIDTH=100% CELLPADDING="0%" CELLSPACING="0%"  ALIGN="CENTER" BGCOLOR="#CDC69C"  STYLE="COLOR: WHITE; FONT-FAMILY:Constantia; FONT-SIZE: 18pt;" BACKGROUND="resources\g.jpg">
				<TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<TABLE NAME="MENU" BORDER="0" CELLPADDING="2%" CELLSPACING="2%"  ALIGN="CENTER" BGCOLOR="#CDC69C"  STYLE="COLOR: WHITE; FONT-FAMILY:Constantia; FONT-SIZE: 18pt;" BACKGROUND="resources\g.jpg">
				<TR>&nbsp;&nbsp;
				<TD >&nbsp;&nbsp;|<A HREF="logout.php" >Logout</A>|</TD>
				</TR>
				</TABLE>
				</TD><TR>
				</TABLE>
				</TD>
				</TABLE>';
		}
		public static function home_message($user)
		{
			echo "Welcome  ".$user;
				}
		public static function background_image($image)
		{
			echo	"<body BACKGROUND=$image>";
		}
		
			
	}
	
?>