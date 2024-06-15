<link rel="stylesheet" href="css/bootstrap.css">
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">E-Learning</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a> </li>
        <li><a href="#">Profil</a> </li>
        <li><a href="#">Tentang Kami</a> </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"> Login</a> </li>
        <li><a href="<?php echo $logoutAction ?>"> Logout</a> </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Download <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="pdf/Sesi-01-DesainWeb.pdf">Desain Web 01</a> </li>
            <li><a href="pdf/Sesi-02-DesainWeb.pdf">Desain Web 02</a> </li>
            <li><a href="pdf/Sesi-03-DesainWeb.pdf">Desain Web 03</a> </li>
            <li><a href="pdf/Sesi-04-DesainWeb.pdf">Desain Web 04</a> </li>
            <li><a href="#">Lain-lain</a> </li>
            <li class="divider"></li>
            <li><a href="#">Pemrograman Visual</a> </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
