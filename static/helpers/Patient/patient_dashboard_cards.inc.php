<?php

function generate_appointment_card($doctor_name, $region, $sl_no, $eta, $time)
{
    echo '
    <div class="card" style="margin: 15px;">
    <div class="card-body shadow">
        <h4 class="card-title" style="font-weight: 500;font-size: 20px;">' . $doctor_name . '</h4>
        <h6 class="text-muted card-subtitle mb-2"></h6>
        <div style="padding-top: 15px;">
            <p><b>Chamber location: </b>' .  $region  . '  </p>
            <p><b>Serial no.: </b>' .  $sl_no  . '  </p>
            <p><b>ETA: </b>' .  $eta  . ' <strong>~</strong> ' . $time . ' </p>
        </div>
    </div>
    </div>
    ';
}

function generate_prescription_card($doctor_name, $medicine, $notes, $prescribed_tests)
{

    $list_of_medicine = explode(",", $medicine);


    echo '
    <div class="card" style="margin: 15px;">
    <div class="card-body shadow">
        <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Prescribed by ' .  $doctor_name  . '</h4>
        <h6 class="text-muted card-subtitle mb-2"></h6>
        <div style="padding-top: 15px;">
            <p><b>Medicine:</b></p>
            <ul>
        ';
    for ($i = 0; $i < count($list_of_medicine); $i++) {
        echo '<li>' . $list_of_medicine[$i] . '</li>';
    }
    echo '           </ul>


            <p><b>Notes: </b>' .  $notes  . '</p>
            <p><b>Prescribed tests: </b>' . $prescribed_tests . '</p>
        </div>
    </div>
    </div>
    ';
}
