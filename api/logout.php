<?php
session_start();
session_unset();
header("Location: ../static/sign_in.php");
