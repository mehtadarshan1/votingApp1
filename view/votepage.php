<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
        <title>Voting Page</title>
    </head>
    <body>
    	<h1>Vote on 309 Exam Cancellation </h1>
		<?php echo $_SESSION['username']; ?>'s preference for extension:
		<form method='post'>
			<input type="radio" name="my_choice" value="extend" > Cancel the Exam! Everyone gets a 3.9 GPA<br>
			<input type="radio" name="my_choice" value="dontextend" > No don't cancel the Exam! I wanna die!<br>
			<input type="submit" name="submit" value="vote" />
		</form>
		<?php echo(view_errors($errors)); ?>
		<?php echo $_SESSION['update']; ?>

		<h2>Current Vote Results</h2>
	        <table border='1'>
	        	<tr>
	        		<th>Vote</th>
	        		<th>Count</th>
	        	</tr>
	        	<tr>
	        		<td>extend</td>
	        		<td><?php echo $_SESSION['extend']?></td>
	        	</tr>
	        	<tr>
	        		<td>dontextend</td>
	        		<td><?php echo $_SESSION['dontextend']?></td>
	        	</tr>
	        </table>

        <footer>

        	<h1>Logout</h1>
            <form method='post'>
            	<input type="submit" name="logout" value="logout" />
            </form>
        	
        </footer>
    </body>
</html>