<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Profile Details - Technician</title>
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
                <li><a href="#!"><i class="fas fa-folder-plus red-text text-accent-2"></i>Add A Report</a></li>
                <li><a href="#!"><i class="fas fa-user-plus blue-text"></i>Register New Patient</a></li>
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
                      <i class="fas fa-folder-plus red-text text-accent-2"></i>
                  </a>
              </div>
              <div class="col s4 m4 l4 center">
                  <a href="" class="btn-large white waves-effect waves-light">
                      <i class="fas fa-user-plus blue-text"></i>
                  </a>
              </div>
              <div class="col s4 center">
                <a href="" class="btn-large white waves-effect waves-light">
                    <i class="fas fa-sync aquamarine-text"></i>
                </a>
            </div>
              <div class="col s4 center">
                    Add <span class="hide-on-med-and-down"> New</span> Report
              </div>
              <div class="col s4 center">
                    Register <span class="hide-on-med-and-down">A</span> New Patient
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
                    <i class="material-icons left">verified_user</i>Technician Id:
                  </span>
                  <span id="profile-data">Foxtrot</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="fas fa-address-card little left"></i><span style="width:5px; padding:2.5px;"></span>NID:
                  </span>
                  <span id="profile-data">India</span>
                </div>
                <div class="input-field col s12 m6">
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
                  <a class="btn" onclick="document.querySelector('#profile-detail').className='hide'; document.querySelector('#UpdateTechnicianForm').className='show'">
                    <i class="material-icons left">sync</i>Update Profile
                  </a>
                </div>
              </div>

              <form id="UpdateTechnicianForm" class="hide">
                <!-- name -->
                <div class="input-field col s12 m6">
                    <input id="name" name="name" type="text">
                    <label for="name">
                      <i class="material-icons left blue-text">person</i>
                      Name
                    </label>
                </div>
                <!-- Technician Id -->
                <div class="input-field col s12 m6">
                  <input id="technician_id" name="technician_id" type="number">
                  <label for="technician_id">
                    <i class="material-icons left blue-text">verified_user</i>
                    Technician Id
                  </label>
                </div>
                <!-- NID -->
                <div class="input-field col s12 m6">
                  <input id="nid" name="nid" type="text">
                  <label for="nid" class="">
                    <i class="fas fa-address-card little left blue-text"></i>
                    NID
                  </label>
                </div>
                <!-- Hospital Id -->
                <div class="input-field col s12 m6">
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
                      onclick="document.querySelector('#UpdateTechnicianForm').className='hide'; document.querySelector('#profile-detail').className='show';">
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
      document.getElementById('UpdateTechnicianForm').addEventListener('submit', (e) => {
        e.preventDefault();
      })
    </script>
</body>
</html>