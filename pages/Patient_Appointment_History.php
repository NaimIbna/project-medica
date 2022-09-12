<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title><span class="hide-on-med-and-down">My</span> Appointments</title>
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


    <!-- Collections -->
    <div class="container">
        <ul class="collection maya-blue" id="all-appointment">
            <li class="collection-header center no-padding">
                <h4 class="white-text">
                    <i class="fas fa-user-md"></i>
                    <i class="fas fa-user-clock"></i>
                    Appointment History
                </h4>
            </li>
            <li class="collection-item avatar">
                <div class="row">
                    <div class="col s10 m12">
                        <i class="material-icons right tiny">
                            star_borderstar_borderstar_borderstar_borderstar_border
                        </i>
                    </div>
                    <div class="col s7 xl6 valign-wrapper">
                        <!--img src="resources/doc1.png" class="circle responsive-img right" alt=""-->
                        <i class="fas fa-user-md small circle"></i>
                        <p>
                            Doctor Name
                            <br>
                            Specialization
                            <br>
                            Hospital name
                        </p>
                    </div>
                    <div class="col s5 xl6 valign-wrapper">
                        <p>
                            Consultancy date
                            <br>
                            Venue/Chamber Address
                            <br>
                            <a>Prescription Link</a>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    <!-- Production jQuery -->
    <script src="resources/jquery-3.4.1.min.js"></script>

    <!-- Minified JavaScript -->
    <script src="resources/materialize.min.js"></script>
    
    <!-- Utilities -->
    <script src="resources/Utilities.js"></script>

    <script>

        class Appointment
        {
            constructor()
            {
                this.docName="Mike Uniform November Sierra"
                this.docSpec="Psychotherapist"
                this.hospital="Arkham Asylum"
                this.date="13.04.2020 Mon"
                this.venue="16/4 Indira Rd, Farmgate, Tejgaon, Dhaka"
                this.prescriptionLink="#!"
            }
        };

        let obj = Doctor List;
        let array= [1,2,3,4,5,6,7,8];

        //Faizlami ends here

        let collection = document.querySelector('#all-appointment');
        array.forEach(elem => {
            let str =
            `
            <li class="collection-item avatar">
                <div class="row">
                    <div class="col s10 m12">
                        <i class="material-icons right tiny">
                            ${lettuceRate(Math.random() * 7) /*Put some freakin rating over here*/}
                        </i>
                    </div>
                    <div class="col s7 xl6 valign-wrapper">
                        <img srcset="resources/doc${elem}.png" class="circle responsive-img">
                        <p>
                            ${obj.docName}
                            <br>
                            ${obj.docSpec}
                            <br>
                            ${obj.hospital}
                        </p>
                    </div>
                    <div class="col s5 xl6 valign-wrapper">
                        <p>
                            ${obj.date}
                            <br>
                            ${obj.venue}
                            <br>
                            <a href="${obj.prescriptionLink}">Prescription Link</a>
                        </p>
                    </div>
                </div>
            </li>
            `;
            collection.innerHTML+=str;
        });
        
        function lettuceRate(val)
        {
            let str="";
            for(var i=0; i<5; i++)
            {
                if(val>=1)
                {
                    str+="grade";
                    val--;
                }
                else if(val>=0.5)
                {
                    str+="star_half";
                    val=val-0.5;
                }
                else
                {
                    str+="star_border";
                }
            }
            console.log(str);
            return str;
        }

    </script>
</body>
</html>