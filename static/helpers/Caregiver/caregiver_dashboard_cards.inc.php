<?php

//TODO: DURATION CALCULATION

function generate_caregiver_card($schedule)
{

    echo '
    <div class="card" style="margin: 15px;">
        <div class="card-body shadow">
            <h6 class="text-muted card-subtitle mb-2"></h6>
            <div style="padding-top: 15px;">
                <p><b>Patient Name: </b>' . $schedule->PATIENT_NAME  . '</p>
                <p><b>Patient Contact No: </b>' . $schedule->CONTACT_NO  . '</p>
                <p><b>Patient Address: </b>' . $schedule->ADDRESS  . '</p>
                <p><b>Days Remaining: </b>' . round($schedule->DAYS_REMAINING)  . '</p>
                <p><b>Health Issues: </b>' . $schedule->HEALTH_ISSUES  . '</p>
            </div>
        </div>
    </div>
    ';
}
