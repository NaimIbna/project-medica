<?php
$subheading_text = "Error encountered";
$summary_text = "Invalid request has been detected. Please be sure to provide correct information.";

if (isset($_POST['hire_caregiver'])) {
    $stmt = $db->prepare("SELECT * FROM Caregiver WHERE Caregiver_id = '" . $_POST["caregiver_id"] . "' AND Caregiver_name = '" . $_POST["caregiver_name"] . "'");
    $stmt->execute();
    if ($stmt->fetchAll()) {
        $stmt = $db->prepare('INSERT INTO H_C (Hospital_id, Caregiver_id) VALUES (' . $hospital->hospital_id . ', ' . $_POST["caregiver_id"] . ")");
        $stmt->execute();
        $subheading_text = "Caregiver Hired";
        $summary_text = "Caregiver ID " . $_POST["caregiver_id"] . " has been successfully hired for " . $hospital->hospital_name;
    }
} else if (isset($_POST['hire_doctor'])) {
    $stmt = $db->prepare("SELECT * FROM Doctor WHERE Doctor_id = '" . $_POST["doctor_id"] . "' AND Doctor_name = '" . $_POST["doctor_name"] . "'");
    $stmt->execute();
    if ($stmt->fetchAll()) {
        $stmt = $db->prepare('UPDATE Hospital SET Doctor_id = ' . $_POST["doctor_id"] . ' WHERE Hospital_id= ' . $hospital->hospital_id);
        $stmt->execute();
        $subheading_text = "Doctor Hired";
        $summary_text = "Doctor ID " . $_POST["doctor_id"] . " has been successfully hired for " . $hospital->hospital_name;
    }
} else if (isset($_POST['hire_technician'])) {
    $stmt = $db->prepare("SELECT * FROM Technician WHERE Technician_id = '" . $_POST["technician_id"] . "' AND Technician_name = '" . $_POST["technician_name"] . "'");
    $stmt->execute();
    if ($stmt->fetchAll()) {
        $stmt = $db->prepare('INSERT INTO H_T (Hospital_id, Technician_id) VALUES (' . $hospital->hospital_id . ', ' . $_POST["technician_id"] . ")");
        $stmt->execute();
        $subheading_text = "Technician Hired";
        $summary_text = "Technician ID " . $_POST["technician_id"] . " has been successfully hired for " . $hospital->hospital_name;
    }
}
echo '
    <div class="row">
        <div class="col-xl-12">
            <div class="card" style="margin: 15px;">
                <div class="card-body shadow">
                    <h4 class="card-title" style="font-weight: 500;font-size: 20px;">' . $subheading_text  . '</h4>
                    <h6 class="text-muted card-subtitle mb-2"></h6>
                    <div style="padding-top: 15px;">
                    <p> ' . $summary_text . ' </p>
                    </div>
                </div>
            </div>
        </div>
    </div>';
