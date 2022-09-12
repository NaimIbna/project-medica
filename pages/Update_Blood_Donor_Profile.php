<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Profile Details - Blood Donor</title>
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
                <li><a href="#!"><i class="fas fa-hands-helping red-text text-darken-1"></i>Blood Donor</a></li>
                <li><a href="#!"><i class="fas fa-pills maya-blue-text"></i>Pharmacy</a></li>
                <li><a href="#!"><i class="fas fa-ambulance maastricht-blue-text"></i>Ambulance</a></li>
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
            <div class="col s4 center">
                <a href="" class="btn-large white waves-effect waves-light">
                    <i class="fas fa-hands-helping red-text text-darken-1"></i>
                </a>
            </div>
            <div class="col s4 center">
                <a href="" class="btn-large white waves-effect waves-light">
                    <i class="fas fa-sync aquamarine-text"></i>
                </a>
            </div>
            <div class="col s4 center offset-s1 pull-s1">
                Donation History
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
                    <i class="material-icons left">person</i>Name:
                  </span>
                  <span id="profile-data">Alpha</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">verified_user</i>Donor Id:
                  </span>
                  <span id="profile-data">Foxtrot</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">invert_colors</i>Blood Group:
                  </span>
                  <span id="profile-data">Echo</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">location_on</i>Region:
                  </span>
                  <span id="profile-data">Echo</span>
                </div>
                <div class="input-field col s12 m6">
                  <span class="blue-text">
                    <i class="material-icons left">calendar_today</i>DoB:
                  </span>
                  <span id="profile-data">Charlie</span>
                </div>
                <div class="input-field col s12 center">
                  <a class="btn" onclick="document.querySelector('#profile-detail').className='hide'; document.querySelector('#UpdateBloodDonorForm').className='show'">
                    <i class="material-icons left">sync</i>Update Profile
                  </a>
                </div>
              </div>

              <form id="UpdateBloodDonorForm" class="hide">
                <!-- name -->
                <div class="input-field col s12 m6">
                  <input id="name" name="name" type="text">
                  <label for="name">
                    <i class="material-icons left blue-text">person</i>
                    Name
                  </label>
                </div>
                <!-- Donor Id-->
                <div class="input-field col s12 m6">
                  <input id="donor_id" name="donor_id" type="text" disabled>
                  <label for="donor_id">
                    <i class="material-icons left blue-text">verified_user</i>
                    Donor Id
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
                <!-- Region -->
                <div class="input-field col s12 m6">
                  <input id="region" name="region" type="text">
                  <label for="region">
                    <i class="material-icons left blue-text">location_on</i>
                    Region
                  </label>
                </div>
                <!-- Last donation date -->
                <div class="input-field col s12 m6">
                  <input id="last_donation_date" name="last_donation_date" type="date">
                  <label for="last_donation_date" class="">
                    <i class="material-icons left blue-text">calendar_today</i>
                    Last donation date
                  </label>
                </div>
                <!-- buttons -->
                <br>

                <div class="row">
                  <div class="col s12 no-padding">
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
                        onclick="document.querySelector('#UpdateBloodDonorForm').className='hide'; document.querySelector('#profile-detail').className='show';">
                          <i class="material-icons left">close</i>
                          Don't update
                        </button>
                    </div> 
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
      document.getElementById('UpdateBloodDonorForm').addEventListener('submit', (e) => {
        e.preventDefault();
      })
    </script>
</body>
</html>