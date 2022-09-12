<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Patient Dashboard</title>
    <!-- Google icon font -->
    <link href="resources/material-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet"  type="text/css" href="resources/fontawesome-free-5.13.0-web/css/all.css">
    <!-- Minified CSS -->
    <link rel="stylesheet" href="resources/materialize.min.css">
    <!-- Customized CSS -->
    <link rel="stylesheet" href="resources/stylesheet.css">
    <style>
       
    </style>
</head>
<body class="french-pink">

    <!-- NavBar & SideNav-->
    <div id="navigation">
        <div class="navbar-fixed" id="navbar">
            <nav class="nav-wraper white"><!-- transparent vs white -->
                <div class="container">
                    <div class="brand-logo">
                        <span class="custom-logo"></span>
                        <a href="#" class="red-text text-darken-2 blackjack">Medica</a>
                    </div>
                    <a href="#" class="sidenav-trigger hide-on-med-and-up" data-target="sidenav">
                        <i class="material-icons black-text">menu</i>
                    </a>
                </div>
                <ul class="hide-on-med-and-down right">
                    <li><a href="#" class="waves-effect black-text"><b>Home</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>About</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>Contact us</b></a></li>
                    <li><a class="waves-effect black-text" onclick="showActivities()"><b>Activities</b></a></li>
                    <li><a class="waves-effect black-text" onclick="showSearchBar()"><b>Search</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>Profile</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>Sign out</b></a></li>
                </ul>
                <ul class="hide-on-large-only hide-on-small-only left">
                    <li><a href="#" class="waves-effect black-text"><i class="material-icons">home</i></a></li>
                    <li><a href="#" class="waves-effect black-text"><i class="material-icons">info</i></a></li>
                    <li><a href="#" class="waves-effect black-text"><i class="material-icons">phone</i></a></li>
                </ul>
                <ul class="hide-on-large-only right">
                    <li><a class="waves-effect black-text" onclick="showActivities()"><i class="material-icons">apps</i></a></li>
                    <li><a class="waves-effect black-text" onclick="showSearchBar()"><i class="material-icons">search</i></a></li>
                    <li><a href="#" class="waves-effect hide-on-small-only black-text"><i class="material-icons">account_circle</i></a></li>
                </ul>
            </nav>
        </div>
        <ul class="sidenav" id="sidenav">
            <div>
            <li><a href="#" class="waves-effect">Home</a></li>
            <li><a href="#" class="waves-effect">About</a></li>
            <li><a href="#" class="waves-effect">Contact us</a></li>
            <li><a href="#" class="waves-effect">Profile</a></li>
            <li><a href="#" class="waves-effect">Sign out</a></li>
            <li>
                <a href="#" class="waves-effect dropdown-trigger" data-target="activities-dropdown">Activities</a>
                <ul id='activities-dropdown' class='dropdown-content'>
                    <li><a href="#!"><i class="fas fa-id-card green-text text-darken-1"></i>Medical Card</a></li>
                    <li><a href="#!"><i class="fas fa-stethoscope grey-text text-darken-2"></i>Doctor List</a></li>
                    <li><a href="#!"><i class="fas fa-file-medical grey-text text-darken-4"></i>Prescriptions</a></li>
                    <li><a href="#!"><i class="fas fa-pills maya-blue-text"></i>Pharmacy</a></li>
                    <li><a href="#!"><i class="fas fa-first-aid red-text text-darken-2"></i>Emergency</a></li>
                    <li><a href="#!"><i class="fas fa-ambulance maastricht-blue-text"></i>Ambulance</a></li>
                    <li><a href="#!"><i class="fas fa-tint red-text text-darken-1"></i>Blood Donor</a></li>
                    <li><a href="#!"><i class="fas fa-user-nurse french-pink-text"></i>Caregiver</a></li>
                    <li><a href="#!"><i class="fas fa-handshake blue-text"></i>My Appointments</a></li>
                    <li><a href="#!"><i class="fas fa-history pink-text text-lighten-2"></i>Caregiver History</a></li>
                    <li><a href="#!"><i class="fas fa-notes-medical lime-text text-darken-4"></i>Donor History</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>


    <!-- Activities shortcut & Search bar -->
    <div class="row">
        <div class="col fixed s19 m6 l5 xl4 offset-s3 offset-m6 offset-l7 offset-xl8 z-depth-2 white scale-transition scale-out" id="activities-shortcut">
            <div class="row">

            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-tint red-text text-darken-1"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-stethoscope grey-text text-darken-2"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-user-nurse french-pink-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Blood Donor
                </div>
                <div class="col s4 m4 l4 center">
                    Doctor List
                </div>
                <div class="col s4 m4 l4 center">
                    Caregiver
                </div>
            </div>
            <div class="row">
                <!-- empty space -->
            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-ambulance maastricht-blue-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-pills maya-blue-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large red darken-2 waves-effect waves-light pulse">
                        <i class="fas fa-first-aid white-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Ambulance
                </div>
                <div class="col s4 m4 l4 center">
                    Pharmacy
                </div>
                <div class="col s4 m4 l4 center">
                    Emergency
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <!-- empty space -->
            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-file-medical grey-text text-darken-4"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-handshake blue-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-id-card green-text text-darken-1"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Prescriptions
                </div>
                <div class="col s4 m4 l4 center">
                    <span class="hide-on-med-and-down">My</span> Appointments
                </div>
                <div class="col s4 m4 l4 center">
                    Medical Card
                </div>
            </div>
            <div class="row">
                <!-- empty space -->
            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-notes-medical lime-text text-darken-4"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-history pink-text text-lighten-2"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-sync aquamarine-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Donor History
                </div>
                <div class="col s4 m4 l4 center">
                    Caregiver History
                </div>
                <div class="col s4 m4 l4 center">
                    Update Profile
                </div>
            </div>
        </div>
        <nav class="col fixed s12 m6 l5 xl4 offset-m6 offset-l7 offset-xl8 z-depth-2 white scale-transition scale-out" id="search-bar">
            <div class="nav-wrapper">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons  french-pink-text">search</i></label>
                        <i class="material-icons white french-pink-text right" onclick="hideSearchBar()">close</i>
                    </div>
                </form>
            </div>
        </nav>
    </div>


    <!-- Cards -->
    <div class="container row">
        <div class="col s12 m6 l3 car">
            <div class="card center card-height-720 z-depth-3">
                <div class="card-image overflow-hidden">
                </div>
                <div class="card-content">
                    <span class="card-title">Course of Medication</span>
                    <p>
                        
                    </p>
                </div>
                <div class="card-action center">
                    <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                        <i class="material-icons left">chevron_right</i>
                        Explore
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col s12 m6 l5 no-padding">
            <div class="col s12">
                <div class="card center card-height-400 z-depth-3">
                    <div class="card-image overflow-hidden">
                        
                    </div>
                    <div class="card-content">
                        <span class="card-title">Recent Tests</span>
                        <p>
                            
                        </p>
                    </div>
                    <div class="card-action center">
                        <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                            <i class="material-icons left">chevron_right</i>
                            Explore
                        </a>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="card center card-height-300 z-depth-3">
                    <div class="card-image overflow-hidden">
                        
                    </div>
                    <div class="card-content">
                        <span class="card-title">Upcoming Appointments</span>
                        <p>
                            
                        </p>
                    </div>
                    <div class="card-action center">
                        <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                            <i class="material-icons left">chevron_right</i>
                            Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m12 l4 no-padding">
            <div class="col s12 m6 l12">
                <div class="card center card-height-400 z-depth-3">
                    <div class="card-image overflow-hidden">
                        
                    </div>
                    <div class="card-content">
                        <span class="card-title">Recent Appointments</span>
                        <p>
                            
                        </p>
                    </div>
                    <div class="card-action center">
                        <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                            <i class="material-icons left">chevron_right</i>
                            Explore
                        </a>
                    </div>
                </div>
            </div>
    
    
            <div class="col s12 m6 l12">
                <div class="card center card-height-300 z-depth-3">
                    <div class="card-image overflow-hidden">
                        
                    </div>
                    <div class="card-content">
                        <span class="card-title">Commitment with Blood Donor</span>
                        <p>
                            
                        </p>
                    </div>
                    <div class="card-action center">
                        <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                            <i class="material-icons left">chevron_right</i>
                            Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Production jQuery -->
    <script src="resources/jquery-3.4.1.min.js"></script>

    <!-- Minified JavaScript -->
    <script src="resources/materialize.min.js"></script>
    
    <!-- Utilities -->
    <script src="resources/Utilities.js"></script>
</body>
</html>