<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">FILE TRANSFER PORTAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
           if($_SESSION['usertype']=="user"){
            echo "
<li class='nav-item active'>
        <a class='nav-link' href='user_dashboard.php'>Home</a>
      </li>
            ";
           }
      ?>

    </ul>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../main/logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
