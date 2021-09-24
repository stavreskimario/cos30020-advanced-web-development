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
    <!-- Breadcrumbs -->
    <section id="breadcrumbs-section">
      <nav aria-label="breadcrumbs">
          <ol aria-label = "breadcrumbs">
              <li class = "breadcrumbs-item"><a href="index.php">Home Page</a></li>
          </ol>
      </nav>  
    </section>

    <section id="about">
        <div class="about-left container">
            <div class="row">
                <h2 style = "flex: 1;"> Job Vacancy Posting System</h2>
                <div class = "content-about">
                    <p>Name: Mario Stavreski</p>
                    <p>Student ID: 103055993</p>
                    <p>Email: <a href="mailto:103055993@student.swin.edu.au">103055993@student.swin.edu.au</a></p>
                    <p>I declare  that  this  assignment  is  my  individual  work.  I  have  not  worked collaboratively nor have I copied from any other student’s work or from any other source.</p>
                </div>
                <div class = "row"></div>
                <a href="postjobform.php" class = "btn btn-primary">Post Job Vacancy </a>
                <a href="about.php" class = "btn btn-primary"> About </a>
                <a href="searchjobform.php" class = "btn btn-primary"> Search for a Job </a>
            </div>
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