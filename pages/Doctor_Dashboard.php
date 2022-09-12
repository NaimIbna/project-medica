 <?php

    include "./helpers/Patient/patient_dashboard_cards.inc.php";
    include_once("../classes/entities/Doctor.class.php");
    $patient = json_decode($_SESSION["Doctor"]);
    ?>


 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie-edge">
     <title>Doctor Dashboard</title>
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

 <body class="french-pink">

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

     <!-- Cards -->
     <div class="container row">

         <div class="col s12">
             <ul class="collapsible white z-depth-3">
                 <li>
                     <div class="collapsible-header">
                         <div class="col s2 xl1 valign-wrapper">
                             <img src="resources/fas_fa-user-md.png" class="circle responsive-img right" alt="">
                         </div>
                         <div class="col s10 xl11 valign-wrapper">
                             <p>
                                 Doctor Name
                                 <br>
                                 Specialization
                                 <br>
                                 Hospital Name
                             </p>
                         </div>
                     </div>
                     <div class="collapsible-body">
                         <div class="row">
                             <div class="col s12">
                                 <ul class="tabs">
                                     <li class="tab col s6 l3"><a class="active" href="#description-tab">Description</a></li>
                                     <li class="tab col s6 l3"><a href="#consultancy-tab">Consultancy</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="row">
                             <div id="description-tab" class="col s12">
                                 <b>Designation :</b> Text-1
                                 <br>
                                 <b>Specialization :</b> Text-2
                                 <br>
                                 <b>Experiences :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae quas dicta rerum reiciendis ipsa accusantium eligendi, dolore in sequi ad veniam minima doloribus, maiores magnam odit soluta numquam dignissimos!
                                 <br>
                                 <b>Qualification :</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia officia nobis voluptas deleniti incidunt perspiciatis debitis dolorem fugiat quam, fugit vero laborum dignissimos assumenda consequuntur. Officiis repellendus dolores quos laboriosam!
                             </div>
                             <div id="consultancy-tab" class="col s12">
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
         <div class="col s12 m6 l5 offset-l1">
             <div class="card card-height-600 z-depth-3">
                 <div class="card-content center maya-blue">
                     <span class="card-title white-text small">
                         <b>Today's <br class="hide-on-small-only hide-on-extra-large-only"> plans</b>
                     </span>
                 </div>
                 <div class="card-content">
                     <p>
                         Quod dolorem voluptates nobis voluptas aliquid ut molestiae, dolore temporibus facilis ipsam voluptate? Aliquam, officia quas? Quaerat consequuntur quod dolor nesciunt est?
                         Atque, laboriosam. Quo exercitationem doloremque atque delectus aperiam eveniet veritatis aliquid nisi deserunt rem, architecto dolorum aspernatur quasi maiores sunt nostrum commodi?
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
         <div class="col s12 m6 l5">
             <div class="card card-height-600 z-depth-3">
                 <div class="card-content center maya-blue">
                     <span class="card-title white-text small">
                         <b>Tomorrow's <br class="hide-on-small-only hide-on-extra-large-only"> plans</b>
                     </span>
                 </div>
                 <div class="card-content">
                     <p>
                         Officiis atque deleniti eius voluptatibus mollitia commodi voluptates odio alias saepe possimus, ut porro nostrum tempore asperiores quas? A delectus molestiae iusto!
                         Possimus expedita quia modi id necessitatibus dolor architecto reprehenderit repellat ipsa illum, soluta quibusdam tempora minus unde sit nemo saepe aperiam dolorem?
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
         <div class="col s12 scrollspy" id="new-prescription">
             <ul class="collapsible white z-depth-3">
                 <li>
                     <div class="collapsible-header">
                         <div class="col s12 card no-padding">
                             <div class="card-content center maya-blue">
                                 <span class="card-title white-text small">
                                     <i class="fas fa-file-medical small"></i><b>Create <span class="hide-on-small-only">a new</span> prescription</b>
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div class="collapsible-body">
                         <form id="createNewPrescription">

                             <div class="col xl5 l6 m7 s12 input-field">
                                 <input type="text" name="Patient_id" id="Patient_id"></input>
                                 <label for="Patient_id">
                                     <i class="material-icons teal-text text-darken-1 left">verified_user</i>
                                     Patient Id
                                 </label>
                             </div>
                             <div class="row">
                                 <div class="col s12">
                                     <ul class="tabs">
                                         <li class="tab col s4">
                                             <a href="#notes-tab" class="active">
                                                 <i class="fas fa-pen"></i>
                                                 Notes
                                             </a>
                                         </li>
                                         <li class="tab col s4">
                                             <a href="#medicine-tab">
                                                 <i class="fas fa-pills"></i>
                                                 Medicines
                                             </a>
                                         </li>
                                         <li class="tab col s4">
                                             <a href="#test-tab">
                                                 <i class="fas fa-folder-plus"></i>
                                                 Tests
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="row">
                                 <div id="notes-tab" class="col s12">
                                     <textarea class="col xl5 l6 m8 s12" style="height: 200px" placeholder="Medical Notes" id="notes"></textarea>
                                 </div>
                                 <div id="medicine-tab" class="col s12">
                                     <div class="col s12 no-padding">
                                         <a class="btn col xl5 l6 m8 s10 offset-s1 maya-blue waves-effect" id="" onclick="">
                                             <i class="fas fa-paste"></i>
                                             Continue prev. medicines
                                         </a>
                                     </div>
                                     <div class="row">
                                         <!-- Empty space -->
                                     </div>
                                     <ul class="col xl5 l6 m8 s12" id="medicine-list">
                                         <li>
                                             <div class="row input-field valign-wrapper">
                                                 <input class="col s10" type="text" id="new-medicine"></input>
                                                 <label for="new-medicine">
                                                     <i class="fas fa-pills maya-blue-text small left"></i>
                                                     Medicine name
                                                 </label>
                                                 <a class="btn-floating btn-small green darken-1 waves-effect waves-light right" id="add-btn" onclick="addListElem()">
                                                     <i class="material-icons white-text">add</i>
                                                 </a>
                                             </div>
                                         </li>
                                         <div id="display-medicine-list">
                                             <!-- Medicine name will be appended here -->
                                         </div>
                                     </ul>
                                 </div>
                                 <div id="test-tab" class="col s12">
                                     <ul class="col xl5 l6 m8 s12" id="test-list">
                                         <li>
                                             <div class="row input-field valign-wrapper">
                                                 <div class="col s12">
                                                     <select multiple>
                                                         <option value="" disabled>Select option(s)</option>
                                                         <option value="Amniocentesis">Amniocentesis</option>
                                                         <option value="Angiography">Angiography</option>
                                                         <option value="Biopsy">Biopsy</option>
                                                         <option value="Blood Test">Blood Test</option>
                                                         <option value="Bone Marrow Test">Bone Marrow Test</option>
                                                         <option value="Bronchoscopy">Bronchoscopy</option>
                                                         <option value="Calcium Test">Calcium Test</option>
                                                         <option value="Colonoscopy">Colonoscopy</option>
                                                         <option value="CT Scan">CT Scan</option>
                                                         <option value="ECG">Electrocardiography</option>
                                                         <option value="Endoscopy">Endoscopy</option>
                                                         <option value="Liver function test">Liver function test</option>
                                                         <option value="MRI">Magnetic Resonance Imaging</option>
                                                         <option value="Tomology">Tomology</option>
                                                         <option value="Ultrasonography">Ultrasonography</option>
                                                         <option value="Urine test">Urine Test</option>
                                                         <option value="X-ray">X-ray</option>
                                                     </select>
                                                     <label class="blue-text">
                                                         <i class="fas fa-notes-medical left" style="font-size: 1.5rem !important"></i>
                                                         Prescribed Tests
                                                     </label>
                                                 </div>
                                             </div>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                             <button type="submit" class="btn green darken-3 white-text waves-effect waves-light">
                                 <i class="material-icons left">done_all</i>
                                 Done
                             </button>
                             <button type="button" class="btn red darken-3 white-text waves-effect waves-light" onclick="clrPrescription()">
                                 <i class="material-icons left">backspace</i>
                                 Reset
                             </button>
                         </form>
                     </div>
                 </li>
             </ul>
         </div>
     </div>



     <!-- Production jQuery -->
     <script src="resources/jquery-3.4.1.min.js"></script>

     <!-- Minified JavaScript -->
     <script src="resources/materialize.min.js"></script>

     <!-- Utilities -->
     <script src="resources/Utilities.js"></script>

     <script>
         document.getElementById('createNewPrescription').addEventListener('submit', (e) => {
             e.preventDefault();

             /*///////////////////////////////////////////////////////////////////
             
             Use -
                 
                 document.querySelectorAll('#medicine') 
             or,
                 document.getElementsByName('medicine')
             
             to select the 'medicine' array. Assign it to a variable (suppose,
             let array) for convenience. Here, just like some regular arrays, 
             without exceeding bounds, we can put-

                 array[index]
                 
             to access an element. In our case, the property/attribute-
             
                 array[index].innerText 

             holds the value/record/data we need. Iterative loops like-
                 
                 array.forEach( elem => { some code} )
             or, for( let i=0; i<array.length; i++ ) { some code }

             will also work just fine. I hope this helps.

             ///////////////////////////////////////////////////////////////////*/

         })

         document.getElementById('new-medicine').addEventListener('keypress', (e) => {
             if (e.key === 'Enter' || e.key === '\n')
                 addListElem();
         })

         let listIndex = 1;

         function addListElem() {

             let inputField = document.getElementById('new-medicine')
             let val = inputField.value;
             if (val == "") {
                 console.log("Empty field");
                 return;
             }

             let Div = document.getElementById('display-medicine-list');
             let ButtonId = "rmv-btn-" + listIndex++;

             Div.innerHTML +=
                 `
            <li class="row blue-text valign-wrapper">
                <div class="col s10 no-padding">
                    <i class="fas fa-pills maya-blue-text small left"></i>
                    <span class="medicine black-text" id="medicine" name="medicine" value="${val}">${val}<span>
                </div>
                <div class="col s2 no-padding">
                    <a class="btn-floating btn-small red waves-effect waves-light right" id="${ButtonId}" onclick="removeListElem('${ButtonId}')">
                        <i class="material-icons white-text">remove</i>
                    </a>
                </div>
            </li>
            `;

             inputField.value = "";
             console.log("Item added");

         }

         function removeListElem(ButtonId) {
             setTimeout(function() {
                 let List = document.getElementById(ButtonId).parentElement.parentElement;
                 //List.className = "hide";
                 List.innerHTML = "";
                 console.log('Item removed');
             }, 505);
         }

         function clrPrescription() {

             if (confirm("The prescription form will now be cleared.")) {

                 //Clearing notes
                 document.getElementById('notes').value = "";

                 //Clearing medicine
                 document.getElementById('display-medicine-list').innerHTML = "";
                 listIndex = 1;

                 //Clearing prescribed tests
                 let Option = document.getElementsByTagName('OPTION');
                 for (let i = 0; i < Option.length; i++)
                     if (Option[i].selected)
                         Option[i].selected = false;

                 //Display toast
                 M.toast({
                     html: 'The form is cleared.',
                     displayLength: 1500,
                     classes: 'rounded',
                     inDuration: 0,
                     outDuration: 0
                 });

             }

         }
     </script>
 </body>

 </html>