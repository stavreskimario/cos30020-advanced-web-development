<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" title="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if ($page == "home") { echo "active"; } ?>">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?php if ($page == "about") { echo "active"; }?>">
        <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item <?php if ($page == "enquiry") { echo "active"; }?>">
        <a class="nav-link" href="postjobform.php">Post a Job</a>
        </li>
        <li class="nav-item <?php if ($page == "search") { echo "active"; }?>">
        <a class="nav-link" href="searchjobform.php">Search</a>
        </li>
    </ul>
    </div>
</nav>