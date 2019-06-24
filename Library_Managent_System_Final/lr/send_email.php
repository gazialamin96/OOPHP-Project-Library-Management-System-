<!DOCTYPE html>
<html>
<head>
	<title>Send Email for Issud Book</title>
	<link rel="stylesheet" type="text/css" href="send_email.css">
</head>
<body id="fieldset1">
	<header id="header"><h1>Send Email for return book to library</h1></header><br/><br/>
	<form>
		<fieldset id="fieldset">
			<legend id="legend"></legend>
			<table>
		        <tr>
		        	<td  class="color">Please Enter Email Address : </td>
			        <td><input type="email" name="email" value="" required></td>
		        </tr>

		        <tr>
					<td class="color">Short Description : </td>
					<td><textarea name="message" id="back_to_library"></textarea></td>
				</tr>

				<tr>
					<td colspan="2" id="send_email"><input type="submit" name="send_email" value="Send Email"></td>
				</tr>
	        </table>
		</fieldset>
	</form>
</body>
</html>