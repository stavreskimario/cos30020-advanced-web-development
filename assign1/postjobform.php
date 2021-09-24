<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Header -->
    <?php include('./includes/header.inc'); 
        $page = "enquiry";
        $date = date('Y-m-d');
    ?>
</head>
<body>
<header id="navigation-bar">
        <?php 
        include('./includes/nav.inc');
        ?>
    </header>

    <section id="breadcrumbs-section">
      <nav aria-label="breadcrumbs">
          <ol aria-label = "breadcrumbs">
              <li class = "breadcrumbs-item"><a href="index.php">Home Page</a></li>
          </ol>
      </nav>  
    </section>

    <!-- Main Body -->
    <section id="contact-section">
        <div class="container">
            <h2>Job Vacancy Posting System</h2>
            <form class="jobpost-form" id="enquireForm" method="post" action="postjobprocess.php" novalidate>
                <div class="form-group">
                    <label for="position-id">Position ID:</label>
                    <input class="form-control" type="text" name="position-id" id="position-id" pattern="[A-Za-z]+"
                        maxlength="5" size="25" required="required" />
                </div>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input class="form-control" type="text" name="title" id="title" pattern="[A-Za-z]+" maxlength="25"
                        size="25" required="required" />
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" class="form-control"
                        placeholder="Your description here..."></textarea>
                </div>
                <div class="form-group">
                    <label for="date">Closing Date:</label>
                    <input id="date" name="date" type="date" value="<?php echo $date ?>" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label for="full-time">Employment type:</label><br />

                    <input type="radio" value="Full Time" name="position" id="full-time" required="required" />
                    <label for="full-time">Full-Time</label>

                    <input type="radio" value="Part Time" name="position" id="part-time" required="required" />
                    <label for="part-time">Part-Time</label>
                </div>
                <div class="form-group">
                    <label for="ongoing">Contract:</label><br />

                    <input type="radio" value="Ongoing" name="contract" id="ongoing" required="required" />
                    <label for="ongoing">Ongoing</label>

                    <input type="radio" value="Fixed Term" name="contract" id="fixed-term" required="required" />
                    <label for="fixed-term">Fixed-Term</label>
                </div>
                <div class="form-group">
                    <label for="post">Application sent By:</label><br />

                    <input type="checkbox" value="Post" name="application[]" id="post" />
                    <label for="post">Post</label>

                    <input type="checkbox" value="Email" name="application[]" id="email" />
                    <label for="mail">Email</label>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
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
                <button type="submit" name="postButton" class="btn btn-primary">Post</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                <a href="index.php" class="btn btn-primary">Return to homepage</a>
            </form>
        </div>
    </section>
    
    <footer>
      <?php 
      include('./includes/footer.inc') 
      ?>
   </footer>
</body>
</html>