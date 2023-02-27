<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="<?= BASEURL; ?>/auth/login" method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="checkbox" id="remember_me" name="remember_me">
        <label for="remember_me">Remember Me</label>
        <input type="hidden" id="login" name="login" value="login">
        <br><br>
        <input type="submit" value="Login">
    </form>
    <a href="<?= BASEURL; ?>/auth/register">Register</a>
</body>
</html>
