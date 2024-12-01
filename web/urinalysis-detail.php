<?php

$hasBack = true;
include "templates/header.php";

$role = "Patient";
$account_list = account()->list("role='$role' and isDeleted=0");
?>
 <div class="container mt-5">
        <h1 class="mb-4">Urinalysis Details</h1>
        <p class="text-secondary">This page provides a detailed breakdown of the selected urinalysis test results across physical, chemical, and microscopic categories.</p>

        <div class="card">
            <div class="card-header bg-primary text-white">
                Urinalysis Record #1
            </div>
            <div class="card-body">
                <h5 class="card-title">Test Results</h5>
                <!-- Physical Section -->
                <h6 class="mt-3">Physical</h6>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Color</th>
                            <td>Yellow</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Appearance</th>
                            <td>Clear</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>pH</th>
                            <td>6.5</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Specific Gravity</th>
                            <td>1.025</td>
                            <td>Normal</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Chemical Section -->
                <h6 class="mt-4">Chemical</h6>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Protein</th>
                            <td>Negative</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Glucose</th>
                            <td>Negative</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Ketones</th>
                            <td>Trace</td>
                            <td>Semi-normal</td>
                        </tr>
                        <tr>
                            <th>Blood</th>
                            <td>Negative</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Bilirubin</th>
                            <td>Negative</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Leukocytes</th>
                            <td>Negative</td>
                            <td>Normal</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Microscopic Section -->
                <h6 class="mt-4">Microscopic</h6>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Pus Cells</th>
                            <td>0-2</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Red Blood Cells</th>
                            <td>0-1</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Epithelial Cells</th>
                            <td>Occasional</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Mucus Threads</th>
                            <td>None</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th>Bacteria</th>
                            <td>Few</td>
                            <td>Semi-normal</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Buttons -->
                <div class="mt-4">
                    <a href="urinalysis_list.php" class="btn btn-secondary">Back to List</a>
                    <a href="urinalysis_modify.php?id=1" class="btn btn-warning">Modify</a>
                    <a href="urinalysis_delete.php?id=1" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>


<?php include "templates/footer.php";?>