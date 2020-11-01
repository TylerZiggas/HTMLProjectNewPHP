<!DOCTYPE html>
<html lang="en">
<head>
    <?php define("title", "Registration"); ?>
    <meta charset="UTF-8">
    <title>Umbrella Registration Page</title>
    <link href="./CSS/stylesheet.css" rel="stylesheet" type="text/css"/>
    <link href="./CSS/background.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <?php include 'inputValidate.php'?>
    <div class="navbar navbar-fixed-top">
        <img src="./IMG/topbarlogo.jpg"  align="left" width=50 height=50 alt="Umbrella Corporation ™"/>
        <a href="index.php">Home</a>
        <a class="current" href="registration.php">Registration</a>
        <a href="animation.php">Animation</a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidenav">
        <div id="top">
            <br/>
            <h1><b>Register to Help Umbrella Today!</b></h1>
            <h2>Our Business Is Life Itself</h2>
        </div>
    </div>
    <form method="POST" id="form" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidenav">
        <div id="registration">
            <div id="userDiv">
                <label for="username" class="identify-text">Username: *</label><br/>
                <input id="username" type="text" name="username" class="form-text" placeholder="WeLoveRaccoonCity" value="<?php echo $username;?>"/><br/>
                <span id="userErr" class="error"><?php echo $userErr;?></span>
            </div>
            <div id="passDiv">
                <label for="password" class="identify-text">Password: *</label><br/>
                <input id="password" type="password" name="password" class="form-text" placeholder="ABC123$d" value="<?php echo $password;?>"/><br/>
                <span id="passErr" class="error"><?php echo $passErr;?></span>
            </div>
            <div id="verPassDiv">
                <label for="repeatPassword" class="identify-text">Repeat Password:  *</label><br/>
                <input id="repeatPassword" type="password" name="repeatPassword" class="form-text" placeholder="ABC123$d" value="<?php echo $repeatPassword;?>"/><br/>
                <span id="verPassErr" class="error"><?php echo $verPassErr;?></span>
            </div>
            <div id ="firstDiv">
                <label for="firstName" class="identify-text">First Name:  *</label><br/>
                <input id="firstName" type="text" name="firstName" class="form-text" placeholder="Leon" value="<?php echo $firstName;?>"/><br/>
                <span id="firstErr" class="error"><?php echo $firstErr;?></span>
            </div>
            <div id="lastDiv">
                <label for="lastName" class="identify-text">Last Name:  *</label><br/>
                <input id="lastName" type="text" name="lastName" class="form-text" placeholder="Kennedy" value="<?php echo $lastName;?>"/><br/>
                <span id="lastErr" class="error"><?php echo $lastErr;?></span>
            </div>
            <div id="add1Div">
                <label for="address1" class="identify-text">Address Line 1:  *</label><br/>
                <input id="address1" type="text" name="address1" class="form-text" placeholder="123 Arklay Drive" value="<?php echo $address1;?>"/><br/>
                <span id="add1Err" class="error"><?php echo $add1Err;?></span>
            </div>
            <div id="add2Div">
                <label for="address2" class="identify-text">Address Line 2:</label><br/>
                <input id="address2" type="text" name="address2" class="form-text" placeholder="(Optional)" value="<?php echo $address2;?>"/><br/>
                <span id="add2Err" class="error"><?php echo $add2Err;?></span>
            </div>
            <div id="cityDiv">
                <label for="city" class="identify-text">City:  *</label><br/>
                <input id="city" type="text" name="city" class="form-text" placeholder="Raccoon City" value="<?php echo $city;?>"/><br/>
                <span id="cityErr" class="error"><?php echo $cityErr;?></span>
            </div>
            <div id="stateDiv">
                <label for="state">State:  *</label><br/>
                <select id="state" name="state"/>
                    <option value="AL" <?php if ($state == "AL") {echo "selected";}?>>Alabama</option>
                    <option value="AK" <?php if ($state == "AK") {echo "selected";}?>>Alaska</option>
                    <option value="AZ" <?php if ($state == "AZ") {echo "selected";}?>>Arizona</option>
                    <option value="AR" <?php if ($state == "AR") {echo "selected";}?>>Arkansas</option>
                    <option value="CA" <?php if ($state == "CA") {echo "selected";}?>>California</option>
                    <option value="CO" <?php if ($state == "CO") {echo "selected";}?>>Colorado</option>
                    <option value="CT" <?php if ($state == "CT") {echo "selected";}?>>Connecticut</option>
                    <option value="DE" <?php if ($state == "DE") {echo "selected";}?>>Delaware</option>
                    <option value="FL" <?php if ($state == "FL") {echo "selected";}?>>Florida</option>
                    <option value="GA" <?php if ($state == "GA") {echo "selected";}?>>Georgia</option>
                    <option value="HI" <?php if ($state == "HI") {echo "selected";}?>>Hawaii</option>
                    <option value="ID" <?php if ($state == "ID") {echo "selected";}?>>Idaho</option>
                    <option value="IL" <?php if ($state == "IL") {echo "selected";}?>>Illinois</option>
                    <option value="IN" <?php if ($state == "IN") {echo "selected";}?>>Indiana</option>
                    <option value="IA" <?php if ($state == "IA") {echo "selected";}?>>Iowa</option>
                    <option value="KS" <?php if ($state == "KS") {echo "selected";}?>>Kansas</option>
                    <option value="KY" <?php if ($state == "KY") {echo "selected";}?>>Kentucky</option>
                    <option value="LA" <?php if ($state == "LA") {echo "selected";}?>>Louisiana</option>
                    <option value="ME" <?php if ($state == "ME") {echo "selected";}?>>Maine</option>
                    <option value="MD" <?php if ($state == "MD") {echo "selected";}?>>Maryland</option>
                    <option value="MA" <?php if ($state == "MA") {echo "selected";}?>>Massachusetts</option>
                    <option value="MI" <?php if ($state == "MI") {echo "selected";}?>>Michigan</option>
                    <option value="MN" <?php if ($state == "MN") {echo "selected";}?>>Minnesota</option>
                    <option value="MS" <?php if ($state == "MS") {echo "selected";}?>>Mississippi</option>
                    <option value="MO" <?php if ($state == "MO") {echo "selected";}?>>Missouri</option>
                    <option value="MT" <?php if ($state == "MT") {echo "selected";}?>>Montana</option>
                    <option value="NE" <?php if ($state == "NE") {echo "selected";}?>>Nebraska</option>
                    <option value="NV" <?php if ($state == "NV") {echo "selected";}?>>Nevada</option>
                    <option value="NH" <?php if ($state == "NH") {echo "selected";}?>>New Hampshire</option>
                    <option value="NJ" <?php if ($state == "NJ") {echo "selected";}?>>New Jersey</option>
                    <option value="NM" <?php if ($state == "NM") {echo "selected";}?>>New Mexico</option>
                    <option value="NY" <?php if ($state == "NY") {echo "selected";}?>>New York</option>
                    <option value="NC" <?php if ($state == "NC") {echo "selected";}?>>North Carolina</option>
                    <option value="ND" <?php if ($state == "ND") {echo "selected";}?>>North Dakota</option>
                    <option value="OH" <?php if ($state == "OH") {echo "selected";}?>>Ohio</option>
                    <option value="OK" <?php if ($state == "OK") {echo "selected";}?>>Oklahoma</option>
                    <option value="OR" <?php if ($state == "OR") {echo "selected";}?>>Oregon</option>
                    <option value="PA" <?php if ($state == "PA") {echo "selected";}?>>Pennsylvania</option>
                    <option value="RI" <?php if ($state == "RI") {echo "selected";}?>>Rhode Island</option>
                    <option value="SC" <?php if ($state == "SC") {echo "selected";}?>>South Carolina</option>
                    <option value="SD" <?php if ($state == "SD") {echo "selected";}?>>South Dakota</option>
                    <option value="TN" <?php if ($state == "TN") {echo "selected";}?>>Tennessee</option>
                    <option value="TX" <?php if ($state == "TX") {echo "selected";}?>>Texas</option>
                    <option value="UT" <?php if ($state == "UT") {echo "selected";}?>>Utah</option>
                    <option value="VT" <?php if ($state == "VT") {echo "selected";}?>>Vermont</option>
                    <option value="VA" <?php if ($state == "VA") {echo "selected";}?>>Virginia</option>
                    <option value="WA" <?php if ($state == "WA") {echo "selected";}?>>Washington</option>
                    <option value="WV" <?php if ($state == "WV") {echo "selected";}?>>West Virginia</option>
                    <option value="WI" <?php if ($state == "WI") {echo "selected";}?>>Wisconsin</option>
                    <option value="WY" <?php if ($state == "WY") {echo "selected";}?>>Wyoming</option>
            </select><br/>
            </div>
            <div id="zipDiv">
                <label for="zip" class="identify-text">Zip Code:  *</label><br/>
                <input id="zip" type="text" name="zip" class="form-text" placeholder="73110" value="<?php echo $zip;?>"/><br/>
                <span id="zipErr" class="error"><?php echo $zipErr;?></span>
            </div>
            <div id="phoneDiv">
                <label for="phone" class="identify-text">Phone Number:  *</label><br/>
                <input id="phone" type="text" name="phone" class="form-text" placeholder="314-955-3233" value="<?php echo $phone;?>"/><br/>
                <span id="phoneErr" class="error" ><?php echo $phoneErr;?></span>
            </div>
            <div id="emailDiv">
                <label for="email" class="identify-text">Email:  *</label><br/>
                <input id="email" type="text" name="email" class="form-text" placeholder="KennedyLeon@gmail.com" value="<?php echo $email;?>"/><br/>
                <span id="emailErr" class="error"><?php echo $emailErr;?></span>
            </div>
            <div id="genderDiv">
                <label for="male" id="gender">Gender:  *</label><br/>
                <input type="radio" name="gender" id="male" value="male" <?php if ($gender=="male") {echo "checked";}?>/><label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female" <?php if ($gender=="female") {echo "checked";}?>/><label for="female">Female</label><br/>
                <input type="radio" name="gender" id="other" value="other" <?php if ($gender=="other") {echo "checked";}?>/><label for="other">Other</label><br/>
                <span id="genderErr" class="error"><?php echo $genderErr;?></span>
            </div>
            <div id="maritalDiv">
                <label for="single" id="marital">Martial Status:  *</label><br/>
                <input type="radio" name="marital" id="single" value="single" <?php if ($marital=="single") {echo "checked";}?>/><label for="single">Single</label>
                <input type="radio" name="marital" id="married" value="married" <?php if ($marital=="married") {echo "checked";}?>/><label for="married">Married</label><br/>
                <input type="radio" name="marital" id="widowed" value="widowed" <?php if ($marital=="widowed") {echo "checked";}?>/><label for="widowed">Widowed</label>
                <input type="radio" name="marital" id="divorced" value="divorced" <?php if ($marital=="divorced") {echo "checked";}?>/><label for="divorced">Divorced</label><br/>
                <span id="maritalErr" class="error"><?php echo $maritalErr;?></span>
            </div>
            <div id="birthDiv">
                <label for="birthday">Date of Birth:  *</label><br/>
                <input id="birthday" type="date" name="birthday"  value="<?php echo $birthday;?>"/><br/>
                <span id="birthdayErr" class="error"><?php echo $birthdayErr;?></span><br/><br/>
            </div>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset" />
        </div>
    </div>
    </form>

    <?php
        if($_POST['submit']=="Submit") {
    			if ($isValid) {
    				?>
    				<form id="hiddenForm" name="hiddenForm"
    					method="POST" action="confirmation.php">
    					<?php
    						foreach($_POST as $key => $value) {
    							?>
    							<input name="<?php echo $key;?>"
    								value="<?php echo $value;?>"
    								type="hidden"/>
    							<?php
    						}
    					?>
    				</form>
    				<script>
    					document.createElement('form').submit.call(document.getElementById('hiddenForm'));
    				</script>
    				<?php
    			}
    	}
    		?>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidenav">
        <div id="bottom">
            <a href="https://twitter.com/RE_Games" target="_blank" title="RE_Games" style="color:gainsboro">Twitter</a><br/><br/>
            <a href="https://www.youtube.com/user/ResidentEvil" target="_blank" title="ResidentEvil" style="color:gainsboro">Youtube</a><br/><br/>
            <a href="https://www.instagram.com/re_games/" target="_blank" title="re_games" style="color:gainsboro">Instagram</a><br/><br/>
            <a href="https://www.capcom.com/us/" target="_blank" title="capcom" style="color:gainsboro">Capcom</a><br/><br/>
            <a href="https://www.evilresource.com/resident-evil-2-remake/files/guide-pamphlet" target="_blank" title="Pamphlet" style="color:gainsboro">Synopsis</a><br/><br/>
            <a href="https://residentevil.fandom.com/wiki/Raccoon_City" target="_blank" title="Wiki" style="color:gainsboro">Raccoon Citys History</a>
            <img align="right" width=34% height=34% src="./IMG/bottomlogo.png" alt="Umbrella Corporation ™"/><br/>
        </div>
    </div>
</body>
</html>