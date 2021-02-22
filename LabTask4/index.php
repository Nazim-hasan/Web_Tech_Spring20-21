<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confirmPassword="";
	$err_confirmPassword="";
	$email="";
	$err_email="";
	$gender="";
	$err_gender="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$dob="";
	$err_dob="";
	$hearus="";
	$err_hearus="";
	$bio="";
	$err_bio="";


	error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
 ini_set('log_errors', '0'); ini_set('error_log', './');
 if(isset($_POST["submit"]))
 {
	 if(empty($_POST["name"]))
	 {
		 $err_name="[Username Required]";
	 }
	 elseif(htmlspecialchars($_POST["name"]))
	 {
		 $err_name=["HTML KeyWords Used"];
	 }
	 else
	 {
		 $name=$_POST["name"];
	 }
	 if(htmlspecialchars($_POST["uname"]))
	 {
		 $err_uname=["HTML KeyWords Used"];
	 }

	 elseif(empty($_POST["uname"]))
	 {
		 $err_uname="[Username Required]";
	 }
	 elseif(strlen($_POST["uname"])<6)
	 {
		 $err_uname="[Username must be 6 charachters long]";
	 }
	 elseif(strpos($_POST["uname"]," "))
	 {
		 $err_uname="[Username should not contain white space]";
	 }
	 else
	 {
		 $uname=$_POST["uname"];
	 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif(htmlspecialchars($_POST["pass"]))
		 {
			 $err_pass=["HTML KeyWords Used"];
		 }
		 elseif (strlen($_POST["uname"])<8) {
		 	$err_pass=["[Password must be 8 charachters long"];
		 }
		 elseif(!strpos($_POST["pass"],"#"))
		 {
			 $err_pass="[Password should contain special character]";
		 }
		 elseif(!is_numeric($_POST["pass"]))
		 {
			 $err_pass="[Password should contain Numeric values]";
		 }
		 elseif(!ctype_upper($_POST["pass"]))
		 {
			 $err_pass="[Password should contain UpperCase values]";
		 }
		 elseif(!ctype_lower($_POST["pass"]))
		 {
			 $err_pass="[Password should contain LowerCase values]";
		 }

		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
		 }
		 else
		 {
			 $pass=$_POST["pass"];


			 if(htmlspecialchars($_POST["email"]))
			 {
				 $err_email=["HTML KeyWords Used"];
			 }
			 elseif(empty($_POST["email"]))
			 {
				 $err_email="[Email Required]";
			 }
			 elseif(!strpos($_POST["email"],"@") && strpos($_POST["pass"],"."))
			 {
				 $err_email=["Valid Email needed"];
			 }


		 }
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 if(!isset($_POST["Hobbies"]))
		 {
			 $err_Hobbies="[At least one option must be selected]";
		 }
		 elseif(count($_POST["Hobbies"])<2)
		 {
			 $err_Hobbies="[At least 2 options need to be selected]";
		 }
		 else
		 {

			 $Hobbies=$_POST["Hobbies"];
		 }
		 if(!isset($_POST["profession"]))
		 {
			 $err_profession="[This field can not be skipped]";
		 }
		 else
		 {
			 $profession=$_POST["profession"];
		 }
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[Bio Required]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];

         }

	 }
		?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend><h1>Club Member Registration</h1></legend>
		<form action="" method="post">
			<table>
				<tr>
					<td><span><p>Name</p></span></td>
					<td>: <input type="text" name="name" value="<?php echo $name;?>">
					<span><?php echo $err_name;?></span></td>

				</tr>
				<tr>
					<td><span><p>Username: </p></span></td>
					<td>: <input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><p>Password: </p></span></td>
					<td>: <input type="text" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>

				<tr>
					<td><span><p>Confirm Password: </p></span></td>
					<td>: <input type="text" name="confirmPassword" value="<?php echo $confirmPassword;?>">
					<span><?php echo $err_confirmPassword;?></span></td>
				</tr>

				<tr>
					<td><span><p>Email: </p></span></td>
					<td>: <input type="text" name="email" value="<?php echo $email;?>">
					<span><?php echo $err_email;?></span></td>
				</tr>



				<tr>
					<td><span><p>Phone: </p></span></td>
					<td>: <input type="text" size="6" placeholder="code" name="phone" value="<?php echo $phone;?>">-<td><input type="text" placeholder="Number" name="phone" value="<?php echo $phone;?>">
					<span><?php echo $err_email;?></span></td>
				</tr>


				<tr>
					<td><span><p>Address: </p></span></td>
					<td>: <input type="text" placeholder="Street Address" name="Address" value="<?php echo $address;?>">
					<tr>
						<td></td>
						<td> <input type="text" placeholder="city" size="6" name="Address" value="<?php echo $address;?>"></td>
						<td> <input type="text" placeholder="State" name="Address" value="<?php echo $address;?>"></td>
					</tr>
					<tr>
						<td></td>
						<td> <input type="text" placeholder="Postal/Zip Code" name="Address" value="<?php echo $address;?>"></td></tr>
					<span><?php echo $err_address;?></span></td>
				</tr>

				<tr>
					<td><span><p>Birth Date: </p></span></td>
					<td>
						<select name="dob">
							<option disabled selected>Day</option>
							<?php
							for($i=1;$i<=31;$i++)
							{
								echo "<option>$i</option>";
							}
							?>
							
							</select>
				<span><?php echo "&nbsp".$err_profession;?></span>
				</td>
				<td>
					<select name="dob">
						<option disabled selected>Month</option>
						<option>LOOP</option>
						</select>
			<span><?php echo "&nbsp".$err_profession;?></span>
			</td>
			<td>
				<select name="dob">
					<option disabled selected>Year</option>
					<option>LOOP</option>
					</select>
		<span><?php echo "&nbsp".$err_profession;?></span>
		</td>
	</tr>

			<tr>
					<td><span><p>Gender</p></span></td>
					<td>: <input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>


				<tr>
					<td><span><p>Where did you hear about us?</p></span></td>
					<td><input type="checkbox" name="hearus[]" value="Google"><span>Google</span>
					    <input type="checkbox" name="hearus[]" value="Blog Post"><span>Blog Post</span>
						<input type="checkbox" name="hearus[]" value="News Article"><span>News Article</span>
						<span><?php echo "&nbsp  ".$err_hearus;?></span></td>
				</tr>

				<tr>
	 				<td><span><p>Bio</p></span></td>
					 <td>: <textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>



			</table>


			<br>
			<input type="submit" name="submit" value="register">
		</form>
	</fieldset>
	</body>
</html>
