<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
        <title>Login</title>
    </head>
    <body>
        <main>
            <h1>Login</h1>
            <form method='post'>
                <fieldset>
                        <legend>Login</legend>
                    <p> <label for="user">User</label> <input type="text" name="user"></input> </p>
                    <p> <label for="password">Password</label> <input type="password" name="password" > </input> </p>
                    <p> <input type="submit" name="submit" value="login" />
                </fieldset>
            </form>
        </main>

        <?php echo(view_errors($errors)); ?>
        <footer>
        </footer>
    </body>
</html>