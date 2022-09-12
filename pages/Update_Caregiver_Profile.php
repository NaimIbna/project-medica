<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Profile Details - Caregiver</title>
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
                <li><a href="#!"><i class="fas fa-ambulance maastricht-blue-text"></i>Ambulance</a></li>
                <li><a href="#!"><i class="fas fa-pills maya-blue-text"></i>Pharmacy</a></li>
                <li><a href="#!"><i class="fas fa-first-aid red-text text-darken-2"></i>Emergency</a></li>
                <li><a href="#!"><i class="fas fa-hand-holding-medical french-pink-text"></i>Commitment History</a></li>
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
              <div class="col s4 center">
                  <a href="" class="btn-large white waves-effect waves-light">
                      <i class="fas fa-hand-holding-medical french-pink-text"></i>
                  </a>
              </div>
              <div class="col s4 center">
                  <a href="" class="btn-large white waves-effect waves-light">
                      <i class="fas fa-sync aquamarine-text"></i>
                  </a>
              </div>
              <div class="col s4 center offset-s1 pull-s1">
                  Commitment History
              </div>
              <div class="col s4 center pull-s1">
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
                    <i class="fas fa-user-nurse little left" style="padding-left:4px"></i><span style="width:5px; padding:2.5px;"></span>Name:
                  </span>
                  <span id="profile-data">Alpha</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">category</i>Type of Service:
                  </span>
                  <span id="profile-data">Bravo</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="fas fa-venus-mars little left"></i><span style="width:2px; padding:1px;"></span>Gender:
                  </span>
                  <span id="profile-data">Charlie</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">verified_user</i>Caregiver Id:
                  </span>
                  <span id="profile-data">Foxtrot</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">phone_in_talk</i>Contact:
                  </span>
                  <span id="profile-data">Delta</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">location_on</i>Area:
                  </span>
                  <span id="profile-data">Echo</span>
                </div>
                <div class="input-field col s12 m6 push-m6">
                  <span class="blue-text">
                    <i class="material-icons left">live_help</i>Alailable for service:
                  </span>
                  <span id="profile-data">Hotel</span>
                </div>
                <div class="input-field col s12 m6 pull-m6">
                  <span class="blue-text">
                    <i class="material-icons left">beenhere</i>Hospital Id:
                  </span>
                  <span id="profile-data">Juliet</span>
                </div>
                <div class="input-field col s12 m6">
                    <span class="blue-text">
                      <i class="material-icons left">local_hospital</i>Hospital Name:
                    </span>
                    <span id="profile-data">Juliet</span>
                </div>
                <div class="input-field col s12">
                    <span class="blue-text">
                        <i class="material-icons left">apartment</i>Hospital Address:
                    </span>
                    <span id="profile-data">13, Rd 69, House 420, Kilo, Lima, Mike, November, Oscar - 666</span>
                </div>
                <div class="input-field col s12">
                    <span class="blue-text">
                        <i class="material-icons left">location_on</i>Map URL:
                    </span>
                    <span id="profile-data">13, Rd 69, House 420, Kilo, Lima, Mike, November, Oscar - 666</span>
                </div>
                <div class="input-field col s12 center">
                  <a class="btn" onclick="document.querySelector('#profile-detail').className='hide'; document.querySelector('#UpdateCaregiverForm').className='show'">
                    <i class="material-icons left">sync</i>Update Profile
                  </a>
                </div>
              </div>

              <form id="UpdateCaregiverForm" class="hide">
                <!-- name -->
                <div class="input-field col s12 m6">
                    <input id="name" name="name" type="text">
                    <label for="name">
                      <i class="fas fa-user-nurse little left blue-text"></i>
                      Name
                    </label>
                </div>
                <!-- Type of Service -->
                <div class="input-field col s12 m6">
                  <select id="type_of_service" name="type_of_service">
                    <option value="" disabled selected>Select an option</option>
                    <option value="Certified nurse assistant">CNA - Certified nurse assistant</option>
                    <option value="Licensed practical nurse">LPN - Licensed practical nurse</option>
                    <option value="Licensed vocational nurse">LVN - Licensed vocational nurse</option>
                    <option value="Registered nurse">RN - Registered nurse</option>
                    <option value="Certified nurse-midwife">CNM - Certified nurse-midwife</option>
                    <option value="Advanced practice registered nurse">APRN - Advanced practice registered nurse</option>
                    <option value="Certified registered nurse anesthetist">CRNA - Certified registered nurse anesthetist</option>
                    <option value="Doctor of nursing practice">DNP - Doctor of nursing practice</option>
                  </select>
                  <label for="type_of_service">
                    <i class="material-icons little left blue-text">category</i>
                    Type of Service
                  </label>
                </div>
                <!-- Gender -->
                <div class="input-field col s12 m6">
                  <select id="gender" name="gender">
                    <option value="" disabled selected>Select an option</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Trasgender">Transgender</option>
                    <option value="Bisexual">Bisexual</option>
                    <option value="Other">Other</option>
                  </select>
                  <label for="gender">
                    <i class="fas fa-venus-mars little left blue-text"></i>
                    Gender
                  </label>
                </div>
                <!-- Caregiver Id -->
                <div class="input-field col s12 m6">
                  <input id="caregiver_id" name="caregiver_id" type="text" disabled>
                  <label for="caregiver_id">
                      <i class="material-icons left blue-text">verified_user</i>
                      Caregiver Id
                  </label>
              </div>
                <!-- Contact -->
                <div class="input-field col s12 m6">
                  <input id="contact" name="contact" type="number">
                  <label for="contact">
                    <i class="material-icons left blue-text">phone_in_talk</i>
                    Contact
                  </label>
                </div>
                <!-- Area -->
                <div class="input-field col s12 m6">
                  <input id="area" name="area" type="text">
                  <label for="area">
                    <i class="material-icons left blue-text">location_on</i>
                    Area
                  </label>
                </div>
                <!-- Available for Service -->
                <div class="input-field col s12 m6 push-m6">
                    <!-- select id="available_for_service" name="available_for_service">
                      <option value="" disabled selected>Select an option</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select-->
                    <label for="available_for_service">
                      <span style="width:3px; padding:1.5px;"></span>
                      <input type="checkbox" id="available_for_service" name="available_for_service">
                      <span>
                        Available for Service
                      </span>
                    </label>
                </div>
                <div class="input-field col s12 hide-on-med-and-up">
                  <div class="row">
                    <!-- empty space -->
                  </div>
                </div>                
                <!-- Hospital Id -->
                <div class="input-field col s12 m6 pull-m6">
                  <input id="hospital_id" name="hospital_id" type="text">
                  <label for="hospital_id">
                    <i class="material-icons left blue-text">beenhere</i>
                    Hospital Id
                  </label>
                </div>
                <!-- Hospital Name -->
                <div class="input-field col s12 m6">
                    <input id="hospital_name" name="hospital_name" type="text">
                    <label for="hospital_name">
                        <i class="material-icons left blue-text">local_hospital</i>
                        Hospital Name
                    </label>
                </div>
                <!-- Address -->
                <div class="input-field col s12 ">
                    <input id="address" name="address" type="text">
                    <label for="address">
                      <i class="material-icons left blue-text">apartment</i>
                      Hospital Address
                    </label>
                </div>
                <!-- Map URL -->
                <div class="input-field col s12 ">
                    <input id="map_url" name="map_url" type="text">
                    <label for="map_url">
                      <i class="material-icons left blue-text">location_on</i>
                      Map URL
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
                      onclick="document.querySelector('#UpdateCaregiverForm').className='hide'; document.querySelector('#profile-detail').className='show';">
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
      document.getElementById('UpdateCaregiverForm').addEventListener('submit', (e) => {
        e.preventDefault();
      })
    </script>
</body>
</html>