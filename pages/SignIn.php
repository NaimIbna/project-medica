<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>

<body>
    <form id='signUp' method="POST" action="http://localhost/project_medica/signin.php">
        <input name='username' placeholder="Username">
        <input name='password' placeholder="Password">
        <br>
        I want to sign in as a:
        <br>
        <input type="radio" name='user_role' value="Patient"> Patient
        <br>
        <input type="radio" name='user_role' value="Doctor"> Doctor
        <br>
        <input type="radio" name='user_role' value="Caregiver"> Caregiver
        <br>
        <input type="submit" value="Sign in">


    </form>
</body>

</html>