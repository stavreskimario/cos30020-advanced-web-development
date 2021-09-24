<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        include('./includes/header.inc');
        $page = "home";
    ?>
</head>

<body>

	<header id="navigation-bar">
        <?php include('./includes/nav.inc');
        ?>
    </header>
   
    <section id="breadcrumbs-section">
      <nav aria-label="breadcrumbs">
          <ol aria-label = "breadcrumbs">
              <li class = "breadcrumbs-item"><a href="index.php">Home Page</a></li>
          </ol>
      </nav>  
    </section>
<?php
    // Sanitise data
	function sanitise_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	}

	//  Check if it is submitted by payment form submission
	if (!isset($_POST["postButton"])) {		//blocks direct URL access
		header("location:postjobform.php");
		exit();
	}

	/***** Form Validation *****/
	$error_msg="";	//error message variable
	 $filename = "../../data/jobposts/jobs.txt";
	 $dir = "../../data/jobposts";
//	$filename = "./data/jobs.txt";
//	$dir = "./data";

	//Position ID
	if (!isset($_POST["position-id"])) {

	}
	else{
		$positionID=$_POST["position-id"];
		$positionID=sanitise_input($positionID);
		if ($positionID=="") {
			$error_msg .= "<p>Please enter the position ID.</p>";
		}
		else if (!preg_match("/[P]{1}\d{4}/",$positionID)) {
			$error_msg .= "<p>Position ID must start with capital P followed by 4 numbers.</p>";
		}
		else if (file_exists($dir) && is_readable($filename)) {
            $handle = fopen($filename, "r");
			$contents = file_get_contents($filename);
			//escape special characters
			$pattern = preg_quote($positionID, '/');
			//match whole line
			$pattern = "/^.*$pattern.*\$/m";
            if(preg_match_all($pattern, $contents)){
				$error_msg .= "<p>Position ID is not unique.</p>";
			}
            fclose($handle);
        }
	}

	//JobTitle
	if (!isset($_POST["title"])) {

	}
	else{
		$title=$_POST["title"];
		$title=sanitise_input($title);
		if ($title=="") {
			$error_msg .= "<p>Please enter the job title.</p>";
		}
		else if (!preg_match("/^[a-zA-Z0-9,.! ]{1,20}$/",$title)) {
			$error_msg .= "<p>Title can only contain max 20 alphanumeric characters including spaces, comma, period (full stop), and exclamation
			point. Other characters or symbols are not allowed.</p>";
		}
	}

	//JobDescription
	if (!isset($_POST["description"])) {

	}
	else{
		$description=$_POST["description"];
		$description=sanitise_input($description);
		if ($description=="") {
			$error_msg .= "<p>Please enter a description.</p>";
		}
		else if (strlen($description) > 260) {
			$error_msg .= "<p>Description must be less than 260 characters in length.</p>";
		}
	}

	//Job Closing Date
	if (!isset($_POST["date"])) {

	}
	else{
		$date=$_POST["date"];
		if ($date=="") {
			$error_msg .= "<p>Please choose a closing date.</p>";
		}
	}

	// Employment type
	if (!isset($_POST["position"])) {
		$error_msg .= "<p>Please choose a position.</p>";
	}
	else {
		$position=$_POST["position"];  // array
		if ($position=="") {
			$error_msg .= "<p>Please choose a position.</p>";
		}
	}

	if (!isset($_POST["contract"])) {
		$error_msg .= "<p>Please choose a contract option.</p>";
	}
	else {
		$contract=$_POST["contract"];
		if ($contract=="") {
			$error_msg .= "<p>Please choose a contract option.</p>";
		}
	}

	if (!isset($_POST["application"])) {
		$appString="";
		$error_msg .= "<p>Please choose an application option.</p>";
	}
	else {
		$application=$_POST["application"];  // array
		$appString=implode(",",$application); //make the array a comma-separated string
		$appString=sanitise_input($appString);
	}

	// State
	if (!isset($_POST["location"])) {
		$error_msg .= "<p>Please choose a location</p>";
	}
	else{
		$location=$_POST["location"];
		if ($location==" -- select -- ") {
			$error_msg .= "<p>Please select your location.</p>";
		}
  }

  	//Error msg code
	if ($error_msg!=""){
    echo "<div class='alert alert-danger' role='alert'>";
    echo $error_msg;
    echo "</div>";
  	} else {
		umask(0007);
		if (!file_exists($dir)) {
			mkdir($dir, 02770);
		}
		$handle = fopen($filename, "a");
		if (is_writable($filename)) {   //check if writable
		$positionID = addslashes($positionID);
		$title = addslashes($title);
		$description = addslashes($description);
		$date = addslashes($date);
		$position = addslashes($position);
		$contract = addslashes($contract);
		$appString = addslashes($appString);
		$location = addslashes($location);
		$savedata = $positionID . "\t" . $title . "\t" . $description . "\t" . $date . "\t" . $position . "\t" . $contract . "\t" . $appString . "\t" . $location . "\r\n";
		if (fwrite($handle, $savedata) === false) { //checks if the write has failed
			echo"<p class='alert alert-danger'>Your job could not be posted. File not writable.</p>";
		} else { //if the write was successful
			echo"<p class='alert alert-success'>Thank you for posting your job.</p>";
			fclose($handle); // close text file
		}
		} else {
			echo"<p class='alert alert-danger'>Your job could not be posted. File not writable.</p>";
			fclose($handle); // close text file
		}
	}

?>

	<section id="success">
		<div class="container text-center">
			<a href="index.php" class="btn btn-primary">Return to homepage</a>
			<a href="postjobform.php" class="btn btn-primary">Return to Post Job Vacancy Page</a>
		</div>
	</section>
	<!-- Footer -->
	<footer>
		<?php 
		include('./includes/footer.inc') 
		?>
	</footer>
    
</body>
</html>