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
              <li class = "breadcrumbs-item"><a href="index.php">Home</a></li>
          </ol>
      </nav>  
    </section>
    <?php

	function sanitise_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	}

	if (!isset($_GET["searchButton"])) {		//block any direct URL access
		header("location:searchjobform.php");
		exit();
	}
	$error_msg = "";
	$filename = "../../data/jobposts/jobs.txt";

	if (isset($_GET["title"])) {
		$title=$_GET["title"];
		$contract="";
		$position="";
		$appString="";
		$location="";

		if (isset($_GET["contract"])) {
			$contract=$_GET["contract"];
		}

		if (isset($_GET["application"])) {
			$application=$_GET["application"];  // array
			$appString=implode(",",$application);
		}

		if (isset($_GET["position"])) {
			$position=$_GET["position"];
		}

		if (isset($_GET["location"])) {
			$location=$_GET["location"];
		}
		if ($location==" Select ") {
			$location .= "";
		}
		if (is_readable($filename)) {
			$alldata = array();
			$handle = fopen($filename, "r");
			while ( !feof($handle) ) {
				$onedata = fgets($handle);
				if ($onedata != "") {
					$data = explode('	', $onedata);
					$alldata[] = $data;
				}

			}
			fclose($handle);
        } else {
			$error_msg = "<p>The file doesn't exist.</p>";
		}
	}
	else{
		$error_msg = "<p>Title is empty.</p>";
	}

 	//Error msg
	if ($error_msg!=""){
    echo "<div class='alert alert-danger' role='alert'>";
    echo $error_msg;
    echo "</div>";
	} else { ?>
	<section id="success">
		<div class="container">
			<div class="row search-results">
				<h2 style="flex: 1;">Search Results</h2>

				<?php
				$matches = 0;
				for($resultsnumber = 0; $resultsnumber < sizeof($alldata); $resultsnumber++) {
					if (!empty($title)) {
						if (strpos(trim(strtolower($alldata[$resultsnumber][1])), trim(strtolower($title))) === false) {
							continue;
						}
					}

					if (!empty($position)) {
						if (trim(strtolower($alldata[$resultsnumber][4])) != trim(strtolower($position))) {
							continue;
						}
					}

					if (!empty($contract)) {
						if (trim(strtolower($alldata[$resultsnumber][5])) != trim(strtolower($contract))) {
							continue;
						}
					}

					if (!empty($appString)) {
						if (trim(strtolower($alldata[$resultsnumber][6])) != trim(strtolower($appString))) {
							continue;
						}
					}

					if (!empty($location)) {
						if (trim(strtolower($alldata[$resultsnumber][7])) != trim(strtolower($location))) {
							continue;
						}
					}
					$date = new DateTime($alldata[$resultsnumber][3]);
					$now = new DateTime();
					if($date < $now) {

					}
					else {
						echo '
						<div id="results-card-col" class="searchresult-col">
						<div id="result-card-head" class="searchresult-head">
						<p>Job Title:</p>
					   	<h3>'.$alldata[$resultsnumber][1].'</h3>
						</div>
						<div class="searchresult-content">
					   	<p><b>Position ID:</b> '.$alldata[$resultsnumber][0].'</p>
					  	<p><b>Position Description:</b> '.$alldata[$resultsnumber][2].'</p>
					   	<p><b>Closing Date:</b> '.date("d/m/Y", strtotime($alldata[$resultsnumber][3])).'</p>
					   	<p><b>Position</b> '.$alldata[$resultsnumber][4].'</p>
					   	<p><b>Contract:</b> '.$alldata[$resultsnumber][5].'</p>
					   	<p><b>Application By:</b> '.$alldata[$resultsnumber][6].'</p>
					   	<p><b>Location:</b> '.$alldata[$resultsnumber][7].'</p>
						</div>
						</div>';
						$matches++;
					}
					
				}
				?>

			</div>
			<?php
			if ($matches < 1) {
				echo "<div class='alert alert-danger' role='alert'>";
				echo "<p>No matching vacancies found.</p>";
				echo "</div>";
			}
			?>
		</div>

		<div class="container text-center">
			<a href="index.php" class="btn btn-primary">Return to homepage</a>
			<a href="searchjobform.php" class="btn btn-primary">Search again</a>
		</div>
	</section>

	<?php } ?>

	<!-- Footer -->
	<footer>
		<?php 
		include('./includes/footer.inc') 
		?>
	</footer>
</body>
</html>