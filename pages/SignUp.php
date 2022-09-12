<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <form id='signUp' method="POST" action="http://localhost/project_medica/signup.php">
        <input name='username' placeholder="Username">
        <input name='password' placeholder="Password">
        <input name='special_id' placeholder="Patient/Doctor/Caregiver ID">
        <br>
        Account type:
        <br>
        <input type="radio" name='user_role' value="Patient"> Patient
        <br>
        <input type="radio" name='user_role' value="Doctor"> Doctor
        <br>

        <input type="radio" name='user_role' value="Caregiver"> Caregiver
        <br>
        <input type="submit" value="Sign Up">

    
    </form>
</body>
</html>