<?php
    $subheading_text="Error encountered";
    $summary_text="Invalid request has been detected. Please be sure to provide correct information.";
    if(isset($_POST["save_feedback"]))
    {
        $stmt = $db->prepare('INSERT INTO Feedback VALUES (' . $_POST["feedback_id"] . ', ' . $_POST["date1"] . ', ' . $_POST["rating"] . ', ' . $_POST["comment1"] . ', ' . $patient->patient_id . ')'); $stmt->execute();
        $stmt = $db->prepare('INSERT INTO F_P (Feedback_id, Doctor_id) VALUES (' . $_POST["feedback_id"] . ', ' . $_POST["doctor_id"] . ')'); $stmt->execute();
        $stmt = $db->prepare('UPDATE Doctor SET Rating = (SELECT AVG(Feedback.Rating) FROM Feedback JOIN F_P USING (Feedback_id) JOIN DOCTOR USING (Doctor_id) WHERE Doctor_id =' . $_POST["doctor_id"] .') WHERE Doctor_id = ' . $_POST["doctor_id"]); $stmt->execute();
        $subheading_text="Rating saved";
        $summary_text="Thank you for your co-operation.";
    }
    
    echo '<h6 class="text-muted card-subtitle mb-2">' . $subheading_text . '</h6>
    <div style="padding-top: 15px;">
        <div>
            <p>' . $summary_text . '</p>
        </div>
    </div>';
?>