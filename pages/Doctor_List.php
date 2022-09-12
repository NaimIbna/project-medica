<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Doctors</title>
    <!-- Google icon font -->
    <link href="resources/material-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="resources/fontawesome-free-5.13.0-web/css/all.css">
    <!-- Minified CSS -->
    <link rel="stylesheet" href="resources/materialize.min.css">
    <!-- Customized CSS -->
    <link rel="stylesheet" href="resources/stylesheet.css">

    <style>

    </style>
</head>

<body>

    <!-- NavBar & SideNav-->
    <div id="navigation">
        <div class="navbar-fixed" id="navbar">
            <nav class="nav-wraper white">
                <!-- transparent vs white -->
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
                    <li><a href="#" class="waves-effect black-text"><b>Sign in</b></a></li>
                    <li><a href="#sign-up-modal" class="waves-effect black-text modal-trigger"><b>Sign up</b></a></li>
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
                <li><a href="#" class="waves-effect">Sign in</a></li>
                <li><a href="#sign-up-modal" class="waves-effect modal-trigger">Sign up</a></li>
                <li>
                    <a href="#" class="waves-effect dropdown-trigger" data-target="activities-dropdown">Activities</a>
                    <ul id='activities-dropdown' class='dropdown-content'>
                        <li><a href="#!"><i class="fas fa-tint red-text text-darken-1"></i>Blood Donor</a></li>
                        <li><a href="#!"><i class="fas fa-stethoscope grey-text text-darken-2"></i>Appointment</a></li>
                        <li><a href="#!"><i class="fas fa-user-nurse french-pink-text"></i>Caregiver</a></li>
                        <li><a href="#!"><i class="fas fa-ambulance maastricht-blue-text"></i>Ambulance</a></li>
                        <li><a href="#!"><i class="fas fa-pills maya-blue-text"></i>Pharmacy</a></li>
                        <li><a href="#!"><i class="fas fa-first-aid red-text text-darken-2"></i>Emergency</a></li>

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
                    Appointment
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


    <!-- Sign in & Sign up modal -->
    <div id="sign-up-modal" class="modal">
        <div class="modal-content row">
            <div class="card z-depth-5 col s12 container">
                <div class="box-header center">
                    <div class="row"></div>
                    <h4>Sign Up</h4>
                </div>
                <form id="UpdatePatientForm" action="/updatePatient" method="post">
                    <!-- id -->
                    <div class="input-field col s12 m6">
                        <input id="birth_reg" name="birth_reg" type="number">
                        <label for="birth_reg">
                            <i class="material-icons left blue-text">verified_user</i>
                            Birth Reg No
                        </label>
                    </div>
                    <!-- name -->
                    <div class="input-field col s12 m6">
                        <input id="patient_name" name="patient_name" type="text">
                        <label for="patient_name">
                            <i class="material-icons left blue-text">person</i>
                            Patient Name
                        </label>
                    </div>
                    <!-- dob -->
                    <div class="input-field col s12 m6">
                        <label for="patient_dob" class="">
                            <i class="material-icons left blue-text">calendar_today</i>
                            DoB
                        </label>
                        <input id="patient_dob" name="patient_dob" type="date">
                    </div>

                    <!-- Blood Grp -->
                    <div class="input-field col s12 m6">
                        <input id="blood_group" name="blood_group" type="text">
                        <label for="blood_group">
                            <i class="material-icons left blue-text">invert_colors</i>
                            Blood Group
                        </label>
                    </div>
                    <!-- phone -->
                    <div class="input-field col s12 m6">
                        <input id="phone_number" name="phone_number" type="number">
                        <label for="phone_number">
                            <i class="material-icons left blue-text">phone</i>
                            Contact
                        </label>
                    </div>
                    <!-- email -->
                    <div class="input-field col s12 m6">
                        <input id="email" name="email" type="email">
                        <label for="email">
                            <i class="material-icons left blue-text">email</i>
                            Email
                        </label>
                    </div>
                    <!-- address -->
                    <div class="input-field col s12 m6">
                        <input id="address" name="address" type="text">
                        <label for="address">
                            <i class="material-icons left blue-text">home_work</i>
                            Residential Address
                        </label>
                    </div>
                    <!-- passport -->
                    <div class="input-field col s12 m6">
                        <input id="passport_number" name="passport_number" type="text">
                        <label for="passport_number">
                            <i class="material-icons left blue-text">chrome_reader_mode</i>
                            Passport No
                        </label>
                    </div>

                    <!-- health issues -->
                    <div class="input-field col s12 m6">
                        <input id="health_issues" name="health_issues" type="text">
                        <label for="health_issues">
                            <i class="material-icons left blue-text">add_box</i>
                            Health Issues
                        </label>
                    </div>
                    <!-- other  -->
                    <div class="input-field col s12 m6">
                        <input id="other_info" name="other_info" type="text">
                        <label for="other_info">
                            <i class="material-icons left blue-text">description</i>
                            Other Info
                        </label>
                    </div>
                    <!-- buttons -->
                    <div class="row ">
                        <div class="col s12 center">
                            <div class="row">
                                <button type="submit" class="btn-large green waves-effect waves-light">
                                    <i class="material-icons left">done</i>
                                    Save changes
                                </button>
                            </div>

                            <div class="row">
                                <button id="cancel" style="width: 2 rem" class="btn-large red waves-effect waves-light">
                                    <i class="material-icons left">close</i>
                                    Don't update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div -->
    </div>

    <div class="container white black-text">
        <ul class="collapsible">
            <li>
                <div class="row">
                    <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/doc1.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s7 xl8 valign-wrapper">
                            <p>
                                line-1
                                <br>
                                line-2
                                <br>
                                line-3
                            </p>
                        </div>
                        <div class="col s3 valign-wrapper">
                            <i class="material-icons right tiny">gradegradegradegradegrade</i>
                        </div>
                    </div>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6 m4 l3"><a class="active" href="#description-tab-1">Description</a></li>
                                <li class="tab col s6 m4 l3"><a href="#consultancy-tab-1">Consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="description-tab-1" class="col s12">
                            <b>Designation :</b> Text-1
                            <br>
                            <b>Specialization :</b> Text-2
                            <br>
                            <b>Experiences :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae quas dicta rerum reiciendis ipsa accusantium eligendi, dolore in sequi ad veniam minima doloribus, maiores magnam odit soluta numquam dignissimos!
                            <br>
                            <b>Qualification :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia officia nobis voluptas deleniti incidunt perspiciatis debitis dolorem fugiat quam, fugit vero laborum dignissimos assumenda consequuntur. Officiis repellendus dolores quos laboriosam!

                        </div>
                        <div id="consultancy-tab-1" class="col s12">
                            <b>Venue :</b> Mirpur-12
                            <br>
                            <b>Time :</b> 4PM-10PM [Sun-Wed]
                            <br>
                            <b>Fee :</b> 200Tk only
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/doc2.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s7 xl8 valign-wrapper">
                            <p>
                                line-1
                                <br>
                                line-2
                                <br>
                                line-3
                            </p>
                        </div>
                        <div class="col s3 valign-wrapper">
                            <i class="material-icons right tiny">gradegradegradegradegrade</i>
                        </div>
                    </div>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6 m4 l3"><a class="active" href="#description-tab-2">Description</a></li>
                                <li class="tab col s6 m4 l3"><a href="#consultancy-tab-2">Consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="description-tab-2" class="col s12">
                            <b>Designation :</b> Professor
                            <br>
                            <b>Specialization :</b> Neurology
                            <br>
                            <b>Experiences :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae quas dicta rerum reiciendis ipsa accusantium eligendi, dolore in sequi ad veniam minima doloribus, maiores magnam odit soluta numquam dignissimos!
                            <br>
                            <b>Qualification :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia officia nobis voluptas deleniti incidunt perspiciatis debitis dolorem fugiat quam, fugit vero laborum dignissimos assumenda consequuntur. Officiis repellendus dolores quos laboriosam!

                        </div>
                        <div id="consultancy-tab-2" class="col s12">
                            <b>Venue :</b> Mirpur-12
                            <br>
                            <b>Time :</b> 4PM-10PM [Sun-Wed]
                            <br>
                            <b>Fee :</b> 200Tk only
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/doc3.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s7 xl8 valign-wrapper">
                            <p>
                                line-1
                                <br>
                                line-2
                                <br>
                                line-3
                            </p>
                        </div>
                        <div class="col s3 valign-wrapper">
                            <i class="material-icons right tiny">gradegradegradegradegrade</i>
                        </div>
                    </div>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6 m4 l3"><a class="active" href="#description-tab-3">Description</a></li>
                                <li class="tab col s6 m4 l3"><a href="#consultancy-tab-3">Consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="description-tab-3" class="col s12">
                            <b>Designation :</b> Text-1
                            <br>
                            <b>Specialization :</b> Text-2
                            <br>
                            <b>Experiences :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae quas dicta rerum reiciendis ipsa accusantium eligendi, dolore in sequi ad veniam minima doloribus, maiores magnam odit soluta numquam dignissimos!
                            <br>
                            <b>Qualification :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia officia nobis voluptas deleniti incidunt perspiciatis debitis dolorem fugiat quam, fugit vero laborum dignissimos assumenda consequuntur. Officiis repellendus dolores quos laboriosam!

                        </div>
                        <div id="consultancy-tab-3" class="col s12">
                            <b>Venue :</b> Mirpur-12
                            <br>
                            <b>Time :</b> 4PM-10PM [Sun-Wed]
                            <br>
                            <b>Fee :</b> 200Tk only
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/doc4.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s7 xl8 valign-wrapper">
                            <p>
                                line-1
                                <br>
                                line-2
                                <br>
                                line-3
                            </p>
                        </div>
                        <div class="col s3 valign-wrapper">
                            <i class="material-icons right tiny">gradegradegradegradegrade</i>
                        </div>
                    </div>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6 m4 l3"><a class="active" href="#description-tab-4">Description</a></li>
                                <li class="tab col s6 m4 l3"><a href="#consultancy-tab-4">Consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="description-tab-4" class="col s12">
                            <b>Designation :</b> Professor
                            <br>
                            <b>Specialization :</b> Neurology
                            <br>
                            <b>Experiences :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae quas dicta rerum reiciendis ipsa accusantium eligendi, dolore in sequi ad veniam minima doloribus, maiores magnam odit soluta numquam dignissimos!
                            <br>
                            <b>Qualification :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia officia nobis voluptas deleniti incidunt perspiciatis debitis dolorem fugiat quam, fugit vero laborum dignissimos assumenda consequuntur. Officiis repellendus dolores quos laboriosam!

                        </div>
                        <div id="consultancy-tab-4" class="col s12">
                            <b>Venue :</b> Mirpur-12
                            <br>
                            <b>Time :</b> 4PM-10PM [Sun-Wed]
                            <br>
                            <b>Fee :</b> 200Tk only
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/doc5.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s7 xl8 valign-wrapper">
                            <p>
                                line-1
                                <br>
                                line-2
                                <br>
                                line-3
                            </p>
                        </div>
                        <div class="col s3 valign-wrapper">
                            <i class="material-icons right tiny">gradegradegradegradegrade</i>
                        </div>
                    </div>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6 m4 l3"><a class="active" href="#description-tab-5">Description</a></li>
                                <li class="tab col s6 m4 l3"><a href="#consultancy-tab-5">Consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="description-tab-5" class="col s12">
                            <b>Designation :</b> Text-1
                            <br>
                            <b>Specialization :</b> Text-2
                            <br>
                            <b>Experiences :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae quas dicta rerum reiciendis ipsa accusantium eligendi, dolore in sequi ad veniam minima doloribus, maiores magnam odit soluta numquam dignissimos!
                            <br>
                            <b>Qualification :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia officia nobis voluptas deleniti incidunt perspiciatis debitis dolorem fugiat quam, fugit vero laborum dignissimos assumenda consequuntur. Officiis repellendus dolores quos laboriosam!

                        </div>
                        <div id="consultancy-tab-5" class="col s12">
                            <b>Venue :</b> Mirpur-12
                            <br>
                            <b>Time :</b> 4PM-10PM [Sun-Wed]
                            <br>
                            <b>Fee :</b> 200Tk only
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/doc6.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s7 xl8 valign-wrapper">
                            <p>
                                line-1
                                <br>
                                line-2
                                <br>
                                line-3
                            </p>
                        </div>
                        <div class="col s3 valign-wrapper">
                            <i class="material-icons right tiny">gradegradegradegradegrade</i>
                        </div>
                    </div>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6 m4 l3"><a class="active" href="#description-tab-6">Description</a></li>
                                <li class="tab col s6 m4 l3"><a href="#consultancy-tab-6">Consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="description-tab-6" class="col s12">
                            <b>Designation :</b> Professor
                            <br>
                            <b>Specialization :</b> Neurology
                            <br>
                            <b>Experiences :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae quas dicta rerum reiciendis ipsa accusantium eligendi, dolore in sequi ad veniam minima doloribus, maiores magnam odit soluta numquam dignissimos!
                            <br>
                            <b>Qualification :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia officia nobis voluptas deleniti incidunt perspiciatis debitis dolorem fugiat quam, fugit vero laborum dignissimos assumenda consequuntur. Officiis repellendus dolores quos laboriosam!

                        </div>
                        <div id="consultancy-tab-6" class="col s12">
                            <b>Venue :</b> Mirpur-12
                            <br>
                            <b>Time :</b> 4PM-10PM [Sun-Wed]
                            <br>
                            <b>Fee :</b> 200Tk only
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/doc7.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s7 xl8 valign-wrapper">
                            <p>
                                line-1
                                <br>
                                line-2
                                <br>
                                line-3
                            </p>
                        </div>
                        <div class="col s3 valign-wrapper">
                            <i class="material-icons right tiny">gradegradegradegradegrade</i>
                        </div>
                    </div>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6 m4 l3"><a class="active" href="#description-tab-7">Description</a></li>
                                <li class="tab col s6 m4 l3"><a href="#consultancy-tab-7">Consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="description-tab-7" class="col s12">
                            <b>Designation :</b> Text-1
                            <br>
                            <b>Specialization :</b> Text-2
                            <br>
                            <b>Experiences :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae quas dicta rerum reiciendis ipsa accusantium eligendi, dolore in sequi ad veniam minima doloribus, maiores magnam odit soluta numquam dignissimos!
                            <br>
                            <b>Qualification :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia officia nobis voluptas deleniti incidunt perspiciatis debitis dolorem fugiat quam, fugit vero laborum dignissimos assumenda consequuntur. Officiis repellendus dolores quos laboriosam!

                        </div>
                        <div id="consultancy-tab-7" class="col s12">
                            <b>Venue :</b> Mirpur-12
                            <br>
                            <b>Time :</b> 4PM-10PM [Sun-Wed]
                            <br>
                            <b>Fee :</b> 200Tk only
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="collapsible-header">
                        <div class="col s2 xl1 valign-wrapper">
                            <img src="resources/doc8.png" class="circle responsive-img right" alt="">
                        </div>
                        <div class="col s7 xl8 valign-wrapper">
                            <p>
                                line-1
                                <br>
                                line-2
                                <br>
                                line-3
                            </p>
                        </div>
                        <div class="col s3 valign-wrapper">
                            <i class="material-icons right tiny">gradegradegradegradegrade</i>
                        </div>
                    </div>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6 m4 l3"><a class="active" href="#description-tab-8">Description</a></li>
                                <li class="tab col s6 m4 l3"><a href="#consultancy-tab-8">Consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="description-tab-8" class="col s12">
                            <b>Designation :</b> Professor
                            <br>
                            <b>Specialization :</b> Neurology
                            <br>
                            <b>Experiences :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae quas dicta rerum reiciendis ipsa accusantium eligendi, dolore in sequi ad veniam minima doloribus, maiores magnam odit soluta numquam dignissimos!
                            <br>
                            <b>Qualification :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia officia nobis voluptas deleniti incidunt perspiciatis debitis dolorem fugiat quam, fugit vero laborum dignissimos assumenda consequuntur. Officiis repellendus dolores quos laboriosam!

                        </div>
                        <div id="consultancy-tab-8" class="col s12">
                            <b>Venue :</b> Mirpur-12
                            <br>
                            <b>Time :</b> 4PM-10PM [Sun-Wed]
                            <br>
                            <b>Fee :</b> 200Tk only
                        </div>
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
</body>

</html>