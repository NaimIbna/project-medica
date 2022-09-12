<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>
        <?php echo $_GET["Title"] ?>
    </title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="d-xl-flex justify-content-xl-center align-items-xl-center" style="height: 100%;width: 100%;margin: 25% 0 0 0;">
        <div class="row d-lg-flex d-xl-flex justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center">
            <div class="col-lg-8 col-xl-12 d-lg-flex d-xl-flex justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                <div class="alert alert-success d-flex d-lg-flex justify-content-center justify-content-lg-center align-items-lg-center" role="alert">
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-11"><span class="d-lg-flex justify-content-lg-center align-items-lg-start"><strong><?php echo $_GET["Heading"] ?></strong><br><br></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <?php echo $_GET["Message"] ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        setTimeout(() => {
            window.location.href = "../dashboard.php";
        }, 2500);
    </script>
</body>

</html>