<?php
$subheading_text = "Error encountered";
$summary_text = "Invalid request has been detected. Please be sure to provide correct information.";

if (isset($_POST['attach_report'])) {
    $stmt = $db->prepare("INSERT INTO Report VALUES ('" . $_POST["report_id"] . "', '" . $_POST["test_name"] . "', '" . $_POST["referred_by"] . "', '" . $_POST["diagnosed_by"] . "', '" . $_POST["impression"] . "', '" . $_POST["file1"] . "', '" . $_POST["patient_id"] . "', '" . $technician->technician_id . "', '" . $_POST["report_date"] . "')");
    $stmt->execute();
    $subheading_text = "Successfully Attached";
    $summary_text = "A test report on " . $_POST["test_name"] . "has been linked with Patient ID " . $_POST["patient_id"];
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
