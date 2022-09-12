<?php
function navbar($user_type)
{
    switch ($user_type) {
        case 'Patient':
            echo '<nav class="navbar navbar-light navbar-expand-md navigation-clean">
                    <div class="container"><a class="navbar-brand" href="./dashboard.php">Project Medica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="./dashboard.php">Dashboard</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="./patient_reports.php">My Reports</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link text-danger" href="../api/logout.php">Logout</a></li>

                            </ul>
                        </div>
                    </div>
                </nav>';
            break;
        case 'Doctor':
            echo '<nav class="navbar navbar-light navbar-expand-md navigation-clean">
                    <div class="container"><a class="navbar-brand" href="./dashboard.php">Project Medica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="./dashboard.php">Dashboard</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link text-danger" href="../api/logout.php">Logout</a></li>

                            </ul>
                        </div>
                    </div>
                </nav>';
            break;
        case 'Caregiver':
            echo '<nav class="navbar navbar-light navbar-expand-md navigation-clean">
                    <div class="container"><a class="navbar-brand" href="./dashboard.php">Project Medica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="./dashboard.php">Dashboard</a></li>
                                <li class="nav-item" role="presentation"><button class="btn btn-danger" type="button"><a class="text-white" href="#">Emergency</a></button></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">More</a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" role="presentation" href="./caregiver_profile.php">Update Info</a>
                                        <a class="dropdown-item text-danger" role="presentation" href="../api/logout.php">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>';
            break;
        case 'Technician':
            echo '<nav class="navbar navbar-light navbar-expand-md navigation-clean">
                    <div class="container"><a class="navbar-brand" href="./dashboard.php">Project Medica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="./dashboard.php">Dashboard</a></li>
                                <li class="nav-item" role="presentation"><button class="btn btn-danger" type="button"><a class="text-white" href="#">Emergency</a></button></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">More</a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" role="presentation" href="./technician_profile.php">Update Info</a>
                                        <a class="dropdown-item text-danger" role="presentation" href="../api/logout.php">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>';
            break;
        case 'Hospital':
            echo '<nav class="navbar navbar-light navbar-expand-md navigation-clean">
                    <div class="container"><a class="navbar-brand" href="./hospital_dashboard.php">Project Medica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="./dashboard.php/#admit-or-release">Admit/Release Patient</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="./dashboard.php/#dispatch">Dispatch Caregiver</a></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Hire...</a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" role="presentation" href="./hire_doctor.php">Doctor</a>
                                        <a class="dropdown-item" role="presentation" href="./hire_caregiver.php">Caregiver</a>
                                        <a class="dropdown-item" role="presentation" href="./hire_technician.php">Technician</a>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation"><button class="btn btn-danger" type="button"><a class="text-white" href="#">Emergency</a></button></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">More</a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" role="presentation" href="./hospital_profile.php">Update Info</a>
                                        <a class="dropdown-item text-danger" role="presentation" href="../api/logout.php">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>';
            break;
        default:
            echo '<nav class="navbar navbar-light navbar-expand-md navigation-clean">
                    <div class="container"><a class="navbar-brand" href="./index.php">Project Medica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Browse Doctor</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Browse Hospital</a></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Account</a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" role="presentation" href="../api/signup.php">Sign Up</a>
                                        <a class="dropdown-item text-danger" role="presentation" href="../api/signin.php">Sign In</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>';
            break;
    }
}
