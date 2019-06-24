<!DOCTYPE html>
<html>
<head>
	<title>Librarian Profile</title>
	<link rel="stylesheet" type="text/css" href="librarian_homepage.css">
</head>
<body>
	<header id="header"><h1>Welcome To Library Management System </h1></header><br/><br/>

	<fieldset id="fieldset">
		<legend id="legend">Librarian Dashboard</legend>
		<h3 id="hello">Hello Mr.Gazi</h3>
		<div style="overflow:auto">
            <div class="menu">
               <a href="index.php">Registration</a>
               <a href="crud_oop(pdo)/index.php"><i>View all Books in library</i></a>
               <a href="index.php"><i>View Student's</i></a>
               <a href="index.php"><i>View Facultie's</i> </a>
            </div>

            <div class="right">
            	<img src="img\Admin.jpg" alt="Admin Profile" height="200px" width="200px">
            </div>
            <div id="logout">
			    <a href="home.html"><input type="submit" name="logout" value="logout"></a>
		    </div>
		</div>

		
	</fieldset>

</body>
</html>