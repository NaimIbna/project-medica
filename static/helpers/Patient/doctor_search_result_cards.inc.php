<?php
include_once("../classes/entities/Chamber.class.php");

function generate_chamber($chamber)
{
    echo '
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">' . $chamber->region . '</h5>
            <div>
                <p style="margin:0px 0px 5px 0px"> <b>Available on: </b>' . $chamber->day . '</p>
                <p style="margin:0px 0px 5px 0px"> <b>Time: </b>' . $chamber->opening_time . ' - ' . $chamber->closing_time . '</p>
                <p style="margin:0px 0px 5px 0px"> <b>Map url: </b>' . $chamber->map_url . '</p>
                <p style="margin:0px 0px 5px 0px"> <b>Fee: </b>' . $chamber->fee . '</p>
            </div>
        </div>
    </div>';
}




function generate_doctor_card($doctor_id, $doctor_name, $specialization, $designation, $qualification, $rating, $chambers)
{



    echo '
    <div class="card" style="margin: 15px;">
        <div class="card-body shadow">
            <div style="padding-top: 15px;">
                <div class="row">
                    <div class="col-xl-3"><img class="rounded-circle border border-dark" src="assets/img/blank-profile-picture-973460_1280.jpg" style="width: 150px;"></div>
                    <div class="col">
                        <h6 class="text-muted mb-2">' . $doctor_name . ' </h6>
                        <p> ' . $specialization . '<br>' . $designation . ' </p>
                        <p>' . $qualification .  '</p>
                    </div>
                    <div class="col-xl-3" style="padding: 0px;padding-right: 15px;">
                        <h6 class="text-right text-muted mb-2">Rating: ' . $rating . '<br><br></h6>
                        <div class="text-center"><a href="./helpers/Patient/confirm_appointment_redirection.php?id=' . $doctor_id . '"><button class="btn btn-primary text-center" type="button" style="width: 139.891px;">Make Appointment</button></a></div>
                    </div>
                    <div class="col-xl-12">
                        <div class="text-right"><a class="btn btn-light" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">Show Chambers</a>
                            <div class="collapse text-left" id="collapse-1">
                                <p><strong>Chamber(s):</strong><br></p>';

    for ($i = 0; $i < count($chambers); $i++) {
        generate_chamber(new Chamber($chambers[$i]));
    }



    echo '</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    ';
}
