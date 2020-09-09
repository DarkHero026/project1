<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Week 1 les 2 forms sign up</title>
    </head>
    <body>
        <main>
            <form class="signup-form" action="signup2.php" method="post">
                <input type="text" name="fName" placeholder="First name" required><br>
                <input type="text" name="mName" placeholder="Middle name optional*" required><br>
                <input type="text" name="lName" placeholder="Last name" required><br>
                <input type="email" name="email" placeholder="E-mail" required><br>
                <input type="text" name="userName" placeholder="Username" required><br>
                <input type="password" name="pass" placeholder="Password" required><br>
                <input type="password" name="rPass" placeholder="Confirm password" required><br>
                <button type="submit" name="submit">Sign up</button>
            </form>
        </main>
    </body>
</html>
