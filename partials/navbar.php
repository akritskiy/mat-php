<nav id="navbar" class="navbar navbar-expand-sm navbar-dark">
  <div class="container">
    <a href="index.php" id="brand" class="navbar-brand">matchisuru</a>
    
    <div class="collapse navbar-collapse">
      <ul class="nav navbar ml-auto">
        <?php
        if (isset($_SESSION['uid'])) {
          echo  '<form action="controllers/logout.php" method="POST">
                  <li class="nav-item"><button type="submit" name="logout" class="btn btn-outline-light">logout</button></li>
                </form>';
        }
        else {
          echo  '<li class="nav-item"><a href="login.php">login</a></li>
                <li class="nav-item"><a href="register.php">register</a></li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>