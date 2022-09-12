<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medica</title>
</head>

<body>

    <?php

    function checkIfUserExists($conn, $username)
    {
        $statement = $conn->prepare('select * from MEDICA_USER where username=:username');
        $statement->bindParam(':username', $username, PDO::PARAM_STR, 30);
        $statement->execute();
        if ($statement->fetch()) {
            return true;
        }
        return false;
    }

    include "./classes/db/DB_CONNECTION.class.php";

    $conn = new DB_CONNECTION("medica_admin", "medica_admin");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_role = $_POST['user_role'];
    $special_id = $_POST['special_id'];

    if (checkIfUserExists($conn, $username) == false) {
        $statement = $conn->prepare('insert into MEDICA_USER (username, password, user_role, special_id) values (:username, :password, :user_role, :special_id)');
        $statement->bindParam(':username', $username, PDO::PARAM_STR, 30);
        $statement->bindParam(':password', $password, PDO::PARAM_STR, 30);
        $statement->bindParam(':user_role', $user_role, PDO::PARAM_STR, 10);
        $statement->bindParam(':special_id', $special_id, PDO::PARAM_STR, 20);
        $statement->execute();
        header("Location: ../pages/Landing_Page.php");
        die();
    } else {
        echo "User already exists";
    }






    ?>

</body>

</html>