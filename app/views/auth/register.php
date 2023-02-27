<html>
<head>
    <title>Register Form</title>
</head>
<body>
    <h1>Register Form</h1>
    <form action="<?= BASEURL; ?>/auth/register" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number">
        <input type="hidden" id="register" name="register" value="register">
        <br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
