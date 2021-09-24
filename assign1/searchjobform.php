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

    <section id="contact-section">
		<div class="table-responsive">
			<h2>Search</h2>
			<?php
	
			?>
		</div>
	</section>
	<section id="searchForm"> <!-- Form -->
		<div class="container">
			<form action="searchjobprocess.php" method="GET">
				<div class="form-group">
					<label for="title">Job Title:</label>
					<input class="form-control" type="text" name="title" id="title" size="20" required="required" />
				</div>
				<div class="form-group">
					<label for="full-time">Employment type:</label><br />

					<input type="radio" value="Full Time" name="position" id="full-time" />
					<label for="full-time">Full Time</label>

					<input type="radio" value="Part Time" name="position" id="part-time" />
					<label for="part-time">Part Time</label>
				</div>
				<div class="form-group">
					<label for="ongoing">Contract:</label><br />

					<input type="radio" value="Ongoing" name="contract" id="ongoing" />
					<label for="ongoing">Ongoing</label>

					<input type="radio" value="Fixed Term" name="contract" id="fixed-term" />
					<label for="fixed-term">Fixed Term</label>
				</div>
				<div class="form-group">
					<label for="post">Application Type:</label><br />

					<input type="checkbox" value="Post" name="application[]" id="post" />
					<label for="post">Post</label>

					<input type="checkbox" value="Email" name="application[]" id="email" />
					<label for="mail">Email</label>
				</div>
				<div class="form-group">
					<label for="location">Location:</label>
					<select class="form-control" id="location" name="location">
						<option disabled selected value> Select State </option>
                        <option value="ACT">Australian Capital Territory</option>
                        <option value="NSW">New South Wales</option>
                        <option value="NT">Northern Territory</option>
                        <option value="QLD">Queensland</option>
                        <option value="SA">South Australia</option>
                        <option value="TAS">Tasmania</option>
                        <option value="VIC">Victoria</option>
                        <option value="WA">Western Australia</option>
					</select>
				</div>
				<button type="submit" name="searchButton" class="btn btn-primary">Search</button>
				<a href="index.php" class="btn btn-primary">Return To Home</a>
			</form>
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