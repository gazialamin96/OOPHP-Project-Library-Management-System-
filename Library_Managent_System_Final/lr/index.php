<?php
	include 'inc/header.php';
	include 'lib/User.php';
	Session::checkSession();
	$user = new User();
?>

<?php
	$loginmsg = Session::get("loginmsg");
	if (isset($loginmsg)) {
		echo $loginmsg;
	}
	Session::set("loginmsg", NULL);
?>
		<div style="padding-top: 50px;" class="panel panel-default">
			<div class="panel-heading">
				<h2>
					<span class="pull-right">
						<strong>Welcome! </strong>
							<?php
								$username = Session::get("username");
								if (isset($username)) {
									echo $username;
								}
							?>
					</span>
				<h2/>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<tr>
						<th>No</th>
				        <th>Book Name</th>
				        <th>Author Name</th>
				        <th>Price</th>
				        <th>Quantity</th>
				        <th>Action</th>
					</tr>

					<tr>
						<td>1</td>
						<td>Introduction to Database</td>
						<td>Al-Amin</td>
						<td>50</td>
						<td>60</td>
						<td>
							<a class="btn btn-primary" href="">
								View
							</a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Object Oriented Programming II</td>
						<td>Al-Amin</td>
						<td>90</td>
						<td>60</td>
						<td>
							<a class="btn btn-primary" href="">
								View
							</a>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Introduction to Programming</td>
						<td>Al-Amin</td>
						<td>110</td>
						<td>70</td>
						<td>
							<a class="btn btn-primary" href="">
								View
							</a>
						</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Introduction to Accounting</td>
						<td>Masud</td>
						<td>50</td>
						<td>60</td>
						<td>
							<a class="btn btn-primary" href="">
								View
							</a>
						</td>
					</tr>

					
				</table>
			</div>
		</div>

		<?php

			include 'inc/footer.php';

		?>