<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oracle</title>
</head>

<body>
    <?php
    include "./connection2.php";
    include "./classes/Patient.class.php";

    $DB = new DB_CONNECTION("medica_admin", "medica_admin");
    $connection = $DB->conn;
    $statement = $connection->prepare("select * from patient");
    $statement->execute();
    while ($row = $statement->fetch()) {
        $patient = new Patient($row);
        var_dump($patient);
        echo "<hr>";
    }

    ?>
</body>

</html>