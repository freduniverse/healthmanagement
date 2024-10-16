<?php
  $hasBack = false;
include "templates/header.php";


?>


<div class="row justify-content-center">

    <!-- Patient  -->
    <?php if ($role=="Patient"): ?>
    <div class="col-3">
        <div class="card clickable web-option" onclick="location.href='lab-result-list.php'">
            <div class="card-body text-center">
                <h5>Lab Test Result</h5>
            </div>
        </div>
    </div>

    <div class="col-3">
    <div class="card clickable web-option" onclick="location.href='appointment-list.php'"> 
            <div class="card-body text-center">
                <h5>Appointment History</h5>
            </div>
        </div>
    </div>

    <?php endif; ?>
    <?php if ($role=="Laboratory"): ?>
    <div class="col-3">
    <div class="card clickable web-option" onclick="location.href='patient-list.php?page=newLabTest'"> 
            <div class="card-body text-center">
                <h5>Lab Test Form</h5>
            </div>
        </div>
    </div>


    <div class="col-3">
    <div class="card clickable web-option" onclick="location.href='lab-result-list.php'">
            <div class="card-body text-center">
                <h5>Lab Test History</h5>
            </div>
        </div>
    </div>


    <?php endif; ?>
    <?php if ($role=="Doctor" || $role=="Secretary"): ?>


    <div class="col-3">
    <div class="card clickable web-option" onclick="location.href='patient-list.php'">
            <div class="card-body text-center">
                <h5>Patients</h5>
            </div>
        </div>
    </div>




    <div class="col-3">
    <div class="card clickable web-option" onclick="location.href='patient-form.php'">
            <div class="card-body text-center">
                <h5>New Patient Form</h5>
            </div>
        </div>
    </div>




    <div class="col-3">
    <div class="card clickable web-option" onclick="location.href='patient-list.php?page=newAppointment'">
            <div class="card-body text-center">
                <h5>Patient Appointment Form</h5>
            </div>
        </div>
    </div>



    <div class="col-3">
    <div class="card clickable web-option" onclick="location.href='appointment-list.php'">
            <div class="card-body text-center">
                <h5>Appointment History</h5>
            </div>
        </div>
    </div>



    <?php endif; ?>
    <?php if ($role=="Admin"): ?>


    <div class="col-3">
        <div class="card clickable web-option" onclick="location.href='accounts.php?role=Doctor'">
            <div class="card-body text-center">
                <h5>Doctor</h5>
            </div>
        </div>
    </div>





    <div class="col-3">
        <div class="card clickable web-option" onclick="location.href='accounts.php?role=Secretary'">
            <div class="card-body text-center">
                <h5>Secretary</h5>
            </div>
        </div>
    </div>





    <div class="col-3">
        <div class="card clickable web-option" onclick="location.href='accounts.php?role=Laboratory'">
            <div class="card-body text-center">
                <h5>Laboratory</h5>
            </div>
        </div>
    </div>




    <div class="col-3">
        <div class="card clickable web-option" onclick="location.href='accounts.php?role=Admin'">
            <div class="card-body text-center">
                <h5>Admin</h5>
            </div>
        </div>
    </div>



    <?php endif; ?>


</div>


<?php include "templates/footer.php"; ?>