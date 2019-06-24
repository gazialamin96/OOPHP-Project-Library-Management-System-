<?php
	$filepath = realpath(dirname(__FILE__));
	include_once $filepath.'/../lib/Session.php';
	Session::init();
?>

<!DOCTYPE html>
<html>
<head>
	<title>login register system</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css"/>
	<script src="inc/jquery.min.js"></script>
	<script src="inc/bootstrap.min.js"></script>
</head>

<?php
	
	if (isset($_GET['action']) && $_GET['action'] == "logout") {
		Session::destroy();
	}

?>

<body style="background: rgba(0,123,255,.5);">
	<div class="container">
		



		<nav style="background: rgba(0,123,255,.5)!important;    margin-top: 20px;" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Login Register System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div style="padding-left: 10em;" class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
    	<?php
						$id = Session::get("id");
						$userlogin = Session::get("login");
						if ($userlogin == true) {
		?>

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php?id=<?php echo $id;?>">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="view_all_issuedbook.php">All books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="student_previous_issued_book.php">Previous Issued books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="student_present_issued_books.php">Present Issued books</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="">Late Fines</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="?action=logout">Logout</a>
      </li>
      <?php }else{?>
      	<li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="register.php">Register</a>
      </li>
      <?php }?>
    </ul>
  </div>
</nav>
