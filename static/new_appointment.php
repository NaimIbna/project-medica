<?php
session_start();
include "./helpers/Patient/doctor_search_result_cards.inc.php";
include "../static/Reusables/head.inc.php";
include "../static/Reusables/navbar.inc.php";
?>

<!DOCTYPE html>
<html>
<?php head("New appointment") ?>

<body>
    <?php navbar("Patient") ?>

    <div class="container" style="padding: 30px;width: 1351px;">
        <div class="row">
            <div class="col-xl-4">
                <form action="../api/search_doctors.php" method="POST">
                    <div class="card shadow-sm">
                        <div class="card-body bg-light shadow-sm">
                            <div class="row">
                                <div class="col-xl-8 d-xl-flex justify-content-xl-center align-items-xl-center">
                                    <h4 class="text-center text-dark d-xl-flex justify-content-xl-center align-items-xl-start" style="padding: 20px;color: #ffffff;font-size: 25px;">Filter results</h4>
                                </div>
                                <div class="col-xl-4 text-center d-xl-flex justify-content-xl-center align-items-xl-center"><button class="btn btn-primary d-xl-flex align-items-xl-start" type="submit">Filter</button></div>
                            </div>
                            <div class="card" style="margin: 15px;">
                                <div class="card-body shadow">
                                    <h6 class="text-muted card-subtitle mb-2">Search by name</h6><input class="border rounded" name="doc_name" type="text" style="width: 100%;">
                                </div>
                            </div>
                            <div class="card" style="margin: 15px;">
                                <div class="card-body shadow">
                                    <h6 class="text-muted card-subtitle mb-2">Designation</h6>
                                    <div style="padding-top: 15px;"><select name="doc_designation">
                                            <option value="undefined">Select Designation</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Associate Professor">Associate Professor</option>
                                            <option value="14">Assistant Professor</option>
                                            <option value="Senior Consultant">Senior Consultant</option>
                                            <option value="Consultant">Consultant</option>
                                            <option value="Medical Officer">Medical Officer</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="card" style="margin: 15px;">
                                <div class="card-body shadow">
                                    <h6 class="text-muted card-subtitle mb-2">Specialization</h6>
                                    <div style="padding-top: 15px;">
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Cardiologist" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Cardiologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Dermatologist" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Dermatologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Endocrinologist" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Endocrinologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Gastrologist" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Gastrologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Gynecologist" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Gynecologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Hepatologist" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Hepatologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Nephrologist" id="formCheck-7"><label class="form-check-label" for="formCheck-7">Nephrologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Neurologist" id="formCheck-8"><label class="form-check-label" for="formCheck-8">Neurologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Oncologist" id="formCheck-9"><label class="form-check-label" for="formCheck-9">Oncologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Opthalmologist" id="formCheck-10"><label class="form-check-label" for="formCheck-10">Opthalmologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Otoloaryngologist" id="formCheck-11"><label class="form-check-label" for="formCheck-11">Otoloaryngologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Pathologist" id="formCheck-12"><label class="form-check-label" for="formCheck-12">Pathologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Psychiatrist" id="formCheck-13"><label class="form-check-label" for="formCheck-13">Psychiatrist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Pulmonologist" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Pulmonologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Radiologist" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Radiologist</label></div>
                                        <div class="form-check"><input name="doc_specialization" class="form-check-input" type="radio" value="Urologist" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Urologist</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="margin: 15px;">
                                <div class="card-body shadow">
                                    <h6 class="text-muted card-subtitle mb-2">Min. Rating</h6>
                                    <div style="padding-top: 15px;">
                                        <div class="form-check"><input class="form-check-input" name="doc_rating" type="radio" id="formCheck-21" value="5" name="Rating"><label class="form-check-label" for="formCheck-21">★★★★★</label></div>
                                        <div class="form-check"><input class="form-check-input" name="doc_rating" type="radio" id="formCheck-20" name="Rating" value="4"><label class="form-check-label" for="formCheck-20">★★★★</label></div>
                                        <div class="form-check"><input class="form-check-input" name="doc_rating" type="radio" id="formCheck-19" name="Rating" value="3"><label class="form-check-label" for="formCheck-19">★★★</label></div>
                                        <div class="form-check"><input class="form-check-input" name="doc_rating" type="radio" id="formCheck-17" name="Rating" value="2"><label class="form-check-label" for="formCheck-17">★★</label></div>
                                        <div class="form-check"><input class="form-check-input" name="doc_rating" type="radio" id="formCheck-18" name="Rating" value="1"><label class="form-check-label" for="formCheck-18">★</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-xl-8">
                <div class="card shadow-sm">
                    <div class="card-body bg-light shadow-sm">
                        <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Search Results</h4>
                        <?php
                        include_once("../classes/db/DB_CONNECTION.class.php");
                        $db = new DB_CONNECTION("medica_admin", "medica_admin");
                        if (isset($_SESSION['Doctor_Search_Results'])) {
                            $array_results = json_decode($_SESSION['Doctor_Search_Results']);
                            for ($i = 0; $i < count($array_results); $i++) {
                                $stmt = $db->prepare("select c.chamber_ID, c.fee, c.day, c.opening_time, c.closing_time, c.REGION, c.MAP_URL from doctor d, D_C r, Chamber c where d.DOCTOR_ID=r.DOCTOR_ID AND c.CHAMBER_ID=r.CHAMBER_ID AND d.DOCTOR_ID='" . $array_results[$i]->doctor_id . "'");
                                $stmt->execute();
                                $chambers = $stmt->fetchAll();

                                generate_doctor_card($array_results[$i]->doctor_id, $array_results[$i]->doctor_name, $array_results[$i]->specialization, $array_results[$i]->designation, $array_results[$i]->qualification, $array_results[$i]->rating, $chambers);
                            }
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>