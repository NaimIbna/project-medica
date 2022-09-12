<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medica</title>
</head>

<body>
    <?php

    include_once("../classes/db/DB_CONNECTION.class.php");
    include_once("../classes/entities/Patient.class.php");
    include_once("../classes/entities/Doctor.class.php");
    include_once("../classes/entities/Caregiver.class.php");
    include_once("../classes/entities/Hospital.class.php");
    include_once("../classes/entities/Technician.class.php");


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

    function validate($conn, $username, $password, $user_role)
    {
        $statement = $conn->prepare('select * from MEDICA_USER where username=:username and password=:password and user_role=:user_role');
        $statement->bindParam(':username', $username, PDO::PARAM_STR, 30);
        $statement->bindParam(':password', $password, PDO::PARAM_STR, 30);
        $statement->bindParam(':user_role', $user_role, PDO::PARAM_STR, 10);


        $statement->execute();

        if ($row_temp = $statement->fetch()) {
            $special_id = $row_temp->SPECIAL_ID;
            $statement = $conn->prepare('select * from ' . $user_role . ' where ' . $user_role . '_ID=' . $special_id);
            $statement->execute();
            if ($row = $statement->fetch()) {
                if ($user_role == "Patient") {
                    $current_user = new Patient($row);
                    $_SESSION["Patient"] = json_encode($current_user);
                } elseif ($user_role == "Doctor") {
                    $current_user = new Doctor($row);
                    $_SESSION['Doctor'] = json_encode($current_user);
                } elseif ($user_role == "Caregiver") {
                    $current_user = new Caregiver($row);
                    $_SESSION['Caregiver'] = json_encode($current_user);
                } elseif ($user_role == "Technician") {
                    $current_user = new Technician($row);
                    $_SESSION['Technician'] = json_encode($current_user);
                } elseif ($user_role == "Hospital") {
                    $current_user = new Hospital($row);
                    $_SESSION['Hospital'] = json_encode($current_user);
                }
            } else {
                echo "Critical error -> " . $user_role . " not found.";
            }
        }
    }




    $conn = new DB_CONNECTION("medica_admin", "medica_admin");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_role = $_POST['user_role'];

    if (checkIfUserExists($conn, $username) == true) {
        validate($conn, $username, $password, $user_role);
        header("Location: ../static/dashboard.php");
        // die();
    } else {
        echo "Invalid Credentials";
    }






    ?>

</body>

</html>