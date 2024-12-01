<?php

$hasBack = true;
include "templates/header.php";

$role = "Medical Test Information";
$account_list = account()->list("role='$role' and isDeleted=0");

$urinalysisList = urinalysis()->list();
$cbcList = cbc()->list();
$lipidList = lipid()->list();
?>
 <div class="container mt-5">

        <!-- Nav Tabs -->
        <ul class="nav nav-tabs" id="testInfoTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="urinalysis-tab" data-bs-toggle="tab" href="#urinalysis" role="tab" aria-controls="urinalysis" aria-selected="true">Urinalysis</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="cbc-tab" data-bs-toggle="tab" href="#cbc" role="tab" aria-controls="cbc" aria-selected="false">CBC</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="lipid-tab" data-bs-toggle="tab" href="#lipid" role="tab" aria-controls="lipid" aria-selected="false">Lipid Profile</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3" id="testInfoTabsContent">
            <!-- Urinalysis Tab -->
            <div class="tab-pane fade show active" id="urinalysis" role="tabpanel" aria-labelledby="urinalysis-tab">
                <h4>Urinalysis Results</h4>
                <!-- Table for Patient List -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Test Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($urinalysisList as $row): 
                            $pat = account()->get("Id=$row->patientId");
                            ?>
                            <tr>
                                <td><?=$pat->firstName;?> <?=$pat->lastName;?></td>
                                <td><?=$row->dateAdded;?></td>
                                <td><a href="urinalysis-detail.php?patientId=<?=$row->Id?>" class="btn btn-info btn-sm">View Info</a></td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- Add more patients here -->
                    </tbody>
                </table>
            </div>

            <!-- CBC Tab -->
            <div class="tab-pane fade" id="cbc" role="tabpanel" aria-labelledby="cbc-tab">
                <h4>CBC Test Results</h4>
                <!-- Table for Patient List -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Test Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cbcList as $row): 
                            $pat = account()->get("Id=$row->patientId");
                            ?>
                            <tr>
                                <td><?=$pat->firstName;?> <?=$pat->lastName;?></td>
                                <td><?=$row->dateAdded;?></td>
                                <td><a href="cbc-detail.php?patientId=<?=$row->Id?>" class="btn btn-info btn-sm">View Info</a></td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- Add more patients here -->
                    </tbody>
                </table>
            </div>

            <!-- Lipid Profile Tab -->
            <div class="tab-pane fade" id="lipid" role="tabpanel" aria-labelledby="lipid-tab">
                <h4>Lipid Profile Test Results</h4>
                <!-- Table for Patient List -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Test Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($lipidList as $row): 
                            $pat = account()->get("Id=$row->patientId");
                            ?>
                            <tr>
                                <td><?=$pat->firstName;?> <?=$pat->lastName;?></td>
                                <td><?=$row->dateAdded;?></td>
                                <td><a href="lipid-detail.php?patientId=<?=$row->Id?>" class="btn btn-info btn-sm">View Info</a></td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- Add more patients here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include "templates/footer.php";?>