  <!-- Nav bar from bootstrap -->

  <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
  <script>
       $(document).ready(function(){
          $('.dropdown-toggle').dropdown()
      });
  </script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">HOSPITAL REVIEW SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Review
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="register.php">Post a review</a>
          <a class="dropdown-item" href="reviewtimeline.php">Timeline</a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Emergency Blood Post
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="postblood.php">Post a blood post</a>
          <a class="dropdown-item" href="bloodtimeline.php">See all blood post</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="bloodbank.php">Local Blood Bank's</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="map.php">Map</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
  </div>
</nav>


<!-- Nav bar from bootstrap end -->
