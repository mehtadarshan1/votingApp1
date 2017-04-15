<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
        <title>Voting Page</title>
    </head>
    <body>
    	<h1>Vote on 309 extension</h1>
		<?php echo $_SESSION['username']; ?>'s preference for extension:
		<form method='post'>
			<input type="radio" name="my_choice" value="extend" > Extend for 24 hours with 20% penalty  <br>
			<input type="radio" name="my_choice" value="dontextend" > No extension. Due midnight April 17 <br>
			<input type="submit" name="submit" value="vote" />
		</form>

		<h2>Current Vote Results</h2>
	        <table border='1'>
	        	<tr>
	        		<th>Vote</th>
	        		<th>Count</th>
	        	</tr>
	        	<tr>
	        		<td>extend</td>
	        		<td>1</td>
	        	</tr>
	        	<tr>
	        		<td>dontextend</td>
	        		<td>2</td>
	        	</tr>
	        </table>

        <footer>

        	<h1>Logout</h1>
            <form method='post'>
            	<input type="submit" name="logout" value="logout" />
            </form>
        	
        	<?php echo(view_errors($errors)); ?>
        	<?php echo(view_errors($debug)); ?>
        </footer>
    </body>
</html>