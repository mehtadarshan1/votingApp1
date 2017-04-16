<html lang="en">
    <head>
        <meta charset="utf-8">
        <script language="javascript" src="view/script.js"></script>
        <script language="javascript" src="view/jquery.php"></script>
        <link rel="stylesheet" type="text/css" href="view/style.css">
        <title>Voting Page</title>
    </head>
    <body>

        <div class="container">

        	<ul class="tabs">
                <li class="tab-link current" data-tab="tab-1">Voting App</li>
                <li class="tab-link" data-tab="tab-2">About</li>
            </ul>

            <div id="tab-1" class="tab-content current">
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
			</div>

			<div id="tab-2" class="tab-content">
                <object type="text/html" data="https://cs.utm.utoronto.ca/~esteeror/voting2/about.php" width="100%" height="70%"></object> 
            </div>

		</div>
        <footer>

        	<h1>Logout</h1>
            <form method='post'>
            	<input type="submit" name="logout" value="logout" />
            </form>
        	
        </footer>
    </body>
</html>