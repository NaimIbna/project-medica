<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Profile Details - Patient</title>
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
<body class="light-green lighten-5">

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
            <!-- empty space -->
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


    <!-- Update Form Start -->
    <section class="update-form">
        <div class="container row">
            <div class="card z-depth-2 col s12 container green lighten-5">
              <div class="box-header center">
                  <div class="row"></div>
                  <h4><b><i class="fas fa-users" style="color: #5a5858af;"></i> User Profile</b></h4>
              </div>
              <div id="profile-detail">
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">person</i>Name:
                  </span>
                  <span id="profile-data">Alpha</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">fingerprint</i>Birth Reg<span class="hide-on-small-only">istration</span> No:
                  </span>
                  <span id="profile-data">Bravo</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">calendar_today</i>DoB:
                  </span>
                  <span id="profile-data">Charlie</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">update</i>Age:
                  </span>
                  <span id="profile-data">Delta</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">invert_colors</i>Blood Group:
                  </span>
                  <span id="profile-data">Echo</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">verified_user</i>Patient Id:
                  </span>
                  <span id="profile-data">Foxtrot</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">phone_in_talk</i>Contact:
                  </span>
                  <span id="profile-data">Golf</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">email</i>Email:
                  </span>
                  <span id="profile-data">Hotel</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="fas fa-address-card little left"></i><span style="width:5px; padding:2.5px;"></span>NID:
                  </span>
                  <span id="profile-data">India</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">flight</i>Passport No:
                  </span>
                  <span id="profile-data">Juliet</span>
                </div>
                <div class="input-field col s12">
                  <span class="blue-text">
                    <i class="material-icons left">home_work</i>Residential Address:
                  </span>
                  <span id="profile-data">13, Rd 69, House 420, Kilo, Lima, Mike, November, Oscar - 666</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">local_hospital</i>Health Issues:
                  </span>
                  <ul style="padding:0 10px">
                    <li>Papa</li>
                    <li>Quebec</li>
                    <li>Romeo</li>
                    <li>Sierra</li>
                  </ul>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">description</i>Other Info:
                  </span>
                  <span id="profile-data">Tango Uniform Victor Whisky Xray Yankee Zulu</span>
                </div>
                <div class="input-field col s12 center">
                  <a class="btn" onclick="document.querySelector('#profile-detail').className='hide'; document.querySelector('#UpdatePatientForm').className='show'">
                    <i class="material-icons left">sync</i>Update Profile
                  </a>
                </div>
              </div>

              <form id="UpdatePatientForm" class="hide">
                <!-- name -->
                <div class="input-field col s12 m6">
                    <input id="name" name="name" type="text">
                    <label for="name">
                      <i class="material-icons left blue-text">person</i>
                      Name
                    </label>
                </div>
                <!-- Birth Id -->
                <div class="input-field col s12 m6">
                  <input id="birth_reg_no" name="birth_reg_no" type="number">
                  <label for="birth_reg_no">
                    <i class="material-icons left blue-text">fingerprint</i>
                    Birth Reg<span class="show-on-large-only">istration</span> No
                  </label>
                </div>
                <!-- dob -->
                <div class="input-field col s12 m6">
                  <input id="dob" name="dob" type="date">
                  <label for="dob" class="">
                    <i class="material-icons left blue-text">calendar_today</i>
                    DoB
                  </label>
                </div>

                <!-- Age -->
                <div class="input-field col s12 m6">
                    <input id="age" name="age" type="text" disabled>
                    <label for="age">
                        <i class="material-icons left blue-text">update</i>
                        Age
                    </label>
                </div>
    
                <!-- Blood Grp -->
                <div class="input-field col s12 m6">
                  <select id="blood_group" name="blood_group">
                    <option value="" disabled selected>Select an option</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                  </select>
                  <label for="blood_group">
                    <i class="material-icons little left blue-text">invert_colors</i>
                    Blood Group
                  </label>
                </div>
                <!--Patient Id-->
                <div class="input-field col s12 m6">
                  <input id="patient_id" name="patient_id" type="text" disabled>
                  <label for="patient_id">
                    <i class="material-icons left blue-text">verified_user</i>
                    Patient Id
                  </label>
                </div>
                <!-- phone -->
                <div class="input-field col s12 m6">
                  <input id="phone_number" name="phone_number" type="number">
                  <label for="phone_number">
                    <i class="material-icons left blue-text">phone_in_talk</i>
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
                <!--NID-->
                <div class="input-field col s12 m6">
                    <input id="nid" name="nid" type="text">
                    <label for="nid">
                        <i class="fas fa-address-card little left blue-text"></i>
                        NID
                    </label>
                </div>                
                <!-- passport -->
                <div class="input-field col s12 m6">
                  <input id="passport_id" name="passport_number" type="text">
                  <label for="passport_id">
                    <i class="material-icons left blue-text">flight</i>
                    Passport No
                  </label>
                </div>
                <!-- address -->
                <div class="input-field col s12">
                    <input id="address" name="address" type="text">
                    <label for="address">
                      <i class="material-icons left blue-text">home_work</i>
                      Residential Address
                    </label>
                  </div>
    
                <!-- health issues -->
                <div class="input-field col s12 m6">
                  <select multiple id="health_issues" name="health_issues">
                    <option value="" disabled>Select option(s)</option>
                    <option value="High Blood Pressure">High Blood Pressure</option>
                    <option value="Low Blood Pressure">Low Blood Pressure</option>
                    <option value="Asthma">Asthma</option>
                    <option value="Diabetes Mellitus">Diabetes Mellitus</option>
                    <option value="Allergy">Allergy</option>
                    <option value="Overweight">Overweight</option>
                    <option value="Obesity">Obesity</option>
                    <option value="Tobacco">Tobacco / Smoker</option>
                    <option value="Fatty liver">Fatty liver</option>
                    <option value="Paralysis">Paralysis</option>
                    <option value="Parkinson">Parkinson</option>
                    <option value="Epilepsy">Epilepsy</option>
                  </select>
                  <label for="health_issues">
                    <i class="material-icons little left blue-text">local_hospital</i>
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
                <br>

                <div class="row ">
                  <div class="col s12 m6 center">
                      <button type="submit" class="btn green waves-effect waves-light">
                        <i class="material-icons left">done</i>
                        Save changes
                      </button>
                  </div>
                  <div class="col s12 hide-on-med-and-up">
                    <div class="row">
                      <!-- Empty space -->
                    </div>
                  </div>
                  <div class="col s12 m6 center">
                      <button type="button" class="btn red waves-effect waves-light"
                      onclick="document.querySelector('#UpdatePatientForm').className='hide'; document.querySelector('#profile-detail').className='show';">
                        <i class="material-icons left">close</i>
                        Don't update
                      </button>
                  </div>                    
                </div>
              </form>
            </div>
        </div>
    </section>
    <!-- Update Form End -->
    

    <!-- Production jQuery -->
    <script src="resources/jquery-3.4.1.min.js"></script>

    <!-- Minified JavaScript -->
    <script src="resources/materialize.min.js"></script>
    
    <!-- Utilities -->
    <script src="resources/Utilities.js"></script>

    <script>
      document.getElementById('UpdatePatientForm').addEventListener('submit', (e) => {
        e.preventDefault();
      })
    </script>
</body>
</html>