<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Profile Details - Doctor</title>
    <!-- Google icon font -->
    <link href="resources/material-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet"  type="text/css" href="resources/fontawesome-free-5.13.0-web/css/all.css">
    <!-- Minified CSS -->
    <link rel="stylesheet" href="resources/materialize.min.css">
    <!-- Customized CSS -->
    <link rel="stylesheet" href="resources/stylesheet.css">
    
    <style>
        .tabs .indicator
        {
            background-color: #4fc3f7;
        }
        .tabs .tab a
        {
            color:#2196f3;
            background-color: white;
        }
            .tabs .tab a:focus,.tabs .tab a:focus.active, .tabs .tab a.active
        {
            background-color:#e8eaf6; color:#2196f3;
        }
        .tabs .tab a:hover.active
        {
            color:#64b5f6;
            background-color:#e8eaf6;
        }
        .tabs .tab a:hover
        {
            color:#64b5f6;
            background-color: white;
        }
        .tabs .tab.disabled a, .tabs .tab.disabled a:hover
        {
            color:#00b0ff;
        }
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
                    <li><a href="#!"><i class="fas fa-file-medical grey-text text-darken-2"></i>New Prescription</a></li>
                    <li><a href="#!"><i class="fas fa-handshake blue-text"></i>My Consultancies</a></li>
                    <li><a href="#!"><i class="fas fa-notes-medical lime-text text-darken-4"></i>Patient's Medical History</a></li>
                    <li><a href="#!"><i class="fas fa-id-card green-text text-darken-1"></i>Medical Card</a></li>
                    <li><a href="#!"><i class="material-icons tiny french-pink-text text-lighten-2 left">update</i>Update My Routine</a></li>
                    <li><a href="#!"><i class="fas fa-sync aquamarine-text"></i>Update Profile</a></li>
                    
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
                <div class="col s4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-ambulance maastricht-blue-text"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-pills maya-blue-text"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    <a href="" class="btn-large red darken-2 waves-effect waves-light pulse">
                        <i class="fas fa-first-aid white-text"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    Ambulance
                </div>
                <div class="col s4 center">
                    Pharmacy
                </div>
                <div class="col s4 center">
                    Emergency
                </div>
            </div>

            <hr>

            <div class="row">
                <!-- empty space -->
            </div>
            <div class="row">
                <div class="col s4 center">
                    <a href="#new-prescription" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-file-medical grey-text text-darken-4"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-notes-medical lime-text text-darken-4"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <!--i class="fas fa-history french-pink-text"></i-->
                        <i class="material-icons small french-pink-text text-lighten-2">update</i>
                    </a>
                </div>
                <div class="col s4 center">
                    New Prescription
                </div>
                <div class="col s4 center">
                    Patient's Medical History
                </div>
                <div class="col s4 center">
                    Update My Routine
                </div>
            </div>
            <div class="row">
                <!-- empty space -->
            </div>
            <div class="row">
                <div class="col s4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-handshake blue-text"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-id-card green-text text-darken-1"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    <a href="" class="btn-large white waves-effect waves-light">
                        <i class="fas fa-sync aquamarine-text"></i>
                    </a>
                </div>
                <div class="col s4 center">
                    My Consultancies
                </div>
                <div class="col s4 center">
                    Medical Card
                </div>
                <div class="col s4 center">
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
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s6"><a class="active description-tab" href="#description-tab" onclick="tabUnison('.form-description-tab')">Description</a></li>
                            <li class="tab col s6"><a class="consultancy-tab" href="#consultancy-tab" onclick="tabUnison('.form-consultancy-tab')">Consultancy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="description-tab" class="col s12">
                        <div class="input-field col s12 m6">
                            <span class="blue-text">
                              <!--i class="material-icons left">person</i-->
                              <i class="fas fa-user-md little left" style="padding-left:4px"></i><span style="width:5px; padding:2.5px;"></span> Name:
                            </span>
                            <span id="profile-data">Alpha</span>
                        </div>
                          <div class="input-field col s12 m6">
                            <span class="blue-text">
                                <i class="fas fa-award little left" style="padding-left:5px"></i><span style="width:6px; padding:3px;"></span> Designation:
                            </span>
                            <span id="profile-data">Charlie</span>
                        </div>
                        <div class="input-field col s12 m6">
                            <span class="blue-text">
                                <i class="fas fa-stethoscope little left" style="padding-left:5px"></i><span style="width:3px; padding:1.5px;"></span> Specialization:
                            </span>
                            <span id="profile-data">Bravo</span>
                        </div>
                        <div class="input-field col s12 m6">
                            <span class="blue-text">
                              <i class="material-icons left">verified_user</i> Doctor Id:
                            </span>
                            <span id="profile-data">Foxtrot</span>
                        </div>
                        <div class="input-field col s12">
                            <span class="blue-text">
                                <i class="fas fa-graduation-cap little left" style="padding-left:3px"></i><span style="width:1px; padding:0.5px;"></span> Qualification:
                            </span>
                            <span id="profile-data">Charlie</span>
                        </div>
                    </div>
                    <div id="consultancy-tab" class="col s12">
                        <div class="input-field col s12 m6">
                            <span class="blue-text">
                              <i class="material-icons left">beenhere</i> Chamber Id:
                            </span>
                            <span id="profile-data">Alpha</span>
                        </div>
                        <div class="input-field col s12 m6">
                            <span class="blue-text">
                              <i class="material-icons left">event_note</i> Day:
                            </span>
                            <span id="profile-data">Mon, Tue, Wed</span>
                        </div>
                        <div class="input-field col s12 m6">
                            <span class="blue-text">
                              <i class="material-icons left">schedule</i> Time:
                            </span>
                            <span id="profile-data">4:30 PM - 11:00PM</span>
                        </div>
                        <div class="input-field col s12 m6">
                            <span class="blue-text">
                              <i class="material-icons left">local_atm</i> Fee:
                            </span>
                            <span id="profile-data">Tk 200.00</span>
                        </div>
                        <div class="input-field col s12 m6">
                            <span class="blue-text">
                              <i class="material-icons left">location_city</i> Location:
                            </span>
                            <span id="profile-data">Rd 666, Hell's Gate</span>
                        </div>
                        <div class="input-field col s12">
                            <span class="blue-text">
                              <i class="material-icons left">location_on</i> Map URL:
                            </span>
                            <span id="profile-data">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta sunt alias voluptas a quibusdam nesciunt consequuntur</span>
                        </div>
                    </div>
                </div>
                <div class="input-field col s12 center">
                  <a class="btn" onclick="document.querySelector('#profile-detail').className='hide'; document.querySelector('#UpdatePatientForm').className='show'">
                    <i class="material-icons left">sync</i>Update Profile
                  </a>
                </div>
              </div>

              <form id="UpdatePatientForm" class="hide">
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s6"><a class="active form-description-tab" href="#form-description-tab" onclick="tabUnison('.description-tab')">Description</a></li>
                            <li class="tab col s6"><a class="form-consultancy-tab" href="#form-consultancy-tab" onclick="tabUnison('.consultancy-tab')">Consultancy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="form-description-tab" class="col s12">
                        <!-- Name -->
                        <div class="input-field col s12 m6">
                            <input id="name" name="name" type="text">
                            <label for="name">
                                <i class="fas fa-user-md little left blue-text"  style="padding-left: 5px;"></i>
                                <span style="width:4px; padding:2px"></span>
                                Name
                            </label>
                        </div>
                        <!-- Designation -->
                        <div class="input-field col s12 m6">
                            <select id="designation" name="designation" type="text">
                                <option value="" disabled selected>Select an option</option>
                                <option value="Professor">Professor</option>
                                <option value="Associate Professor">Associate Professor</option>
                                <option value="Assistant Professor">Assistant Professor</option>
                                <option value="Senior Consultant">Senior Consultant</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Medical Officer">Medical Officer</option>
                            </select>
                            <label for="designation">
                                <i class="fas fa-award little left blue-text"  style="padding-left: 5px;"></i>
                                <span style="width:5px; padding:2.5px"></span>
                                Designation
                            </label>
                        </div>
                        <!-- Specialization -->
                        <div class="input-field col s12 m6">
                            <select id="specialization" name="specialization">
                                <option value="" disabled selected>Select an option</option>
                                <option value="Cardiologist">Cardiologist</option>
                                <option value="Dermatologist">Dermatologist</option>
                                <option value="Endocrinologist">Endocrinologist</option>
                                <option value="Gastroenterologist">Gastroenterologist</option>
                                <option value="Gynecologist">Gynecologist</option>
                                <option value="Hepatologist">Hepatologist</option>
                                <option value="Nephrologist">Nephrologist</option>
                                <option value="Neurologist">Neurologist</option>
                                <option value="Oncologist">Oncologist</option>
                                <option value="Ophthalmologist">Ophthalmologist</option>
                                <option value="Otolaryngologist">Otolaryngologist</option>
                                <option value="Pathologist">Pathologist</option>
                                <option value="Psychiatrist">Psychiatrist</option>
                                <option value="Pulmonologist">Pulmonologist</option>
                                <option value="Radiologist">Radiologist</option>
                                <option value="Urologist">Urologist</option>
                            </select>
                            <label for="specialization">
                                <i class="fas fa-stethoscope tiny left blue-text" style="padding-left: 2.5px;"></i>
                                Specialization
                            </label>
                        </div>
                        <!-- Doctor Id-->
                        <div class="input-field col s12 m6">
                            <input id="doctor_id" name="doctor_id" type="text" disabled>
                            <label for="doctor_id">
                                <i class="material-icons left blue-text">verified_user</i>
                                Doctor Id
                            </label>
                        </div>
                        <!-- Qualification -->
                        <div class="input-field col s12">
                            <input id="qualification" name="qualification" type="text">
                            <label for="qualification">
                                <i class="fas fa-graduation-cap little left blue-text"  style="padding-left: 2.5px;"></i>
                                Qualification
                            </label>
                        </div>
                    </div>
                    <div id="form-consultancy-tab" class="col s12">
                        <!-- Chamber Id -->
                        <div class="input-field col s11 m5">
                            <input id="chamber_id" name="chamber_id" type="text" disabled>
                            <label for="chamber_id">
                                <i class="material-icons left blue-text">beenhere</i>
                                Chamber Id
                            </label>
                        </div>
                        <!-- Remove Btn -->
                        <div class="input-field col s1" style="padding:8px 0 0 0">
                            <a class="btn-floating btn-small red darken-1 waves-effect waves-light left" id="rmv-btn" onclick="">
                                <i class="material-icons white-text">remove</i>
                            </a>
                        </div>
                        <!-- Day -->
                        <div class="input-field col s12 m6">
                            <select multiple id="day" name="day">
                                <option value="" disabled>Select option(s)</option>
                                <option value="Sun">Sun</option>
                                <option value="Mon">Mon</option>
                                <option value="Tue">Tue</option>
                                <option value="Wed">Wed</option>
                                <option value="Thu">Thu</option>
                                <option value="Fri">Fri</option>
                                <option value="Sat">Sat</option>
                            </select>
                            <label for="day">
                                <i class="material-icons left little blue-text">event_note</i>
                                Day
                            </label>
                        </div>
                        <!-- Opening time -->
                        <div class="input-field col s12 m6">
                            <input id="opening_time" name="opening_time" type="time">
                            <label for="opening">
                                <i class="material-icons left blue-text">schedule</i>
                                Opening time
                            </label>
                        </div>
                        <!-- Closing time -->
                        <div class="input-field col s12 m6">
                            <input id="closing_time" name="closing_time" type="time">
                            <label for="closing_time">
                                <i class="material-icons left blue-text">schedule</i>
                                Closing time
                            </label>
                        </div>
                        <!-- Fee -->
                        <div class="input-field col s12 m6">
                            <input id="fee" name="fee" type="number">
                            <label for="fee">
                                <i class="material-icons left blue-text">local_atm</i>
                                Fee
                            </label>
                        </div>
                        <!-- Location -->
                        <div class="input-field col s12 m6">
                            <input id="location" name="location" type="text">
                            <label for="location">
                                <i class="material-icons left blue-text">location_city</i>
                                Location
                            </label>
                        </div>
                        <!-- Map URL -->
                        <div class="input-field col s12">
                            <input id="map_url" name="map_url" type="text">
                            <label for="map_url">
                                <i class="material-icons left blue-text">location_on</i>
                                Map URL
                            </label>
                        </div>
                    </div>
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

        let tabClickFlag = false;
        function tabUnison(str)
        {
            
            if(tabClickFlag)
                return;
            
            tabClickFlag=true;
            //console.log(str);
            
            var element=document.querySelector(str);
            var event;
            
            if(document.createEvent){
                event = document.createEvent("HTMLEvents");
                event.initEvent("click", true, true);
                event.eventName = "click";
                element.dispatchEvent(event);
            } else {
                event = document.createEventObject();
                event.eventName = "click";
                event.eventType = "click";
                element.fireEvent("on" + event.eventType, event);
            }
            
            tabClickFlag=false;

        }

    </script>
</body>
</html>