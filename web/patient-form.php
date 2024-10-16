<?php
  $pageTitle = "Patient Form";
  $hasBack = true;
include "templates/header.php";


?>


<div class="container">
    <div class="card" style="margin: 0px 50px">
        <div class="card-body">
            <form action="process.php?action=patient-save" method="post">
                <div class="row">
                    <div class="col-4 mt-3">
                        <b>Username</b>
                        <input type="text" name="username" id="form-username" class="form-control mt-2" required>
                    </div>
                    <div class="col-4 mt-3">
                        <b>Password</b>
                        <input type="text" name="password" id="form-password" class="form-control mt-2" required>
                    </div>
                    <div class="col-5 mt-3">
                        <b>First Name</b>
                        <input type="text" name="firstName" id="form-firstName" class="form-control mt-2" required>
                    </div>
                    <div class="col-5 mt-3">
                        <b>Last Name</b>
                        <input type="text" name="lastName" id="form-lastName" class="form-control mt-2" required>
                    </div>
                    <div class="col-4 mt-3">
                        <b>Birth Day</b>
                        <input type="date" name="birthday" id="form-birthday" class="form-control mt-2" required>
                    </div>
                    <div class="col-4 mt-3">
                        <b>Sex</b>
                        <select name="sex" id="form-sex" class="form-select mt-2">
                            <option value="">--Select--</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="col-5 mt-3">
                        <b>Phone Number</b>
                        <input type="text" name="phone" id="form-phone" class="form-control mt-2" required>
                    </div>
                    <div class="col-5 mt-3">
                        <b>Email</b>
                        <input type="text" name="email" id="form-email" class="form-control mt-2" required>
                    </div>
                    <div class="col-8 mt-3">
                        <b>Address</b>
                        <input type="text" name="address" id="form-address" class="form-control mt-2" required>
                    </div>
                    <div class="col-4 mt-3">
                        <b>City</b>
                        <input type="text" name="city" id="form-city" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mt-3">
                        <button class="btn btn-primary" type="submit" name="form-type" value="add">Save to database</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include "templates/footer.php"; ?>