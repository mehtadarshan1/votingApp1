<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
        <title>Voting Page</title>
    </head>
    <body>

        <?php echo(view_errors($errors)); ?>
        <?php echo(view_errors($debug)); ?>

        <footer>
        <h1>Logout</h1>
            <form method='post'>
            	<input type="submit" name="logout" value="logout" />
            </form>
        </footer>
    </body>
</html>