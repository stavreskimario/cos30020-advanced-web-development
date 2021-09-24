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

    <?php 
    $php_version = phpversion(); 
    if ($php_version < 6) {
      $comment = "PHP is outdated.";
    }
    else {
      $comment = "PHP is up to date!";
    }

    
  ?>
    <section id="features">
   <div class="container">
        <h2>PHP Version</h2>
        <p>The version of PHP installed on this server is: <?php echo $php_version;?></p>
        <p><?php echo $comment; ?></p> 
    </div>
    <div class="container">
        <h2>What tasks you have not attempted or not completed?</h2>
        <p>I attempted and completed every task.</p>
    </div>
    <div class="container">
        <h3>Features: Bootstrap</h3>
        <p>Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. 
          One of the enhancements I have used in my assignment is Bootstrap. I've utilised Bootstrap on all of my sites to create a fluid layout utilising the grid system, and I've also used some of Bootstrap's components, such as the nav bar, 
          to improve the user experience and make it easier for me to develop these elements than if I did it myself.</p>
    </div>

    <div class="container">
        <h3> 
            What discussion points did you participated on in the unit’s discussion board for 
            Assignment 1? If you did not participate, state your reason 
        </h3>
        <p> I did not participate in any discussions for Assignment 1 in the unit's discussion board. </p>
    </div>

    <br/>
    <a href="index.php" class = "btn btn-primary"> Home Page </a>


  </section>

  <footer>
    <?php 
      include('./includes/footer.inc') 
    ?>
  </footer>
</body>
</html>