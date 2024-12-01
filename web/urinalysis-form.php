<?php
  $pageTitle = "Patient Form";
  $hasBack = true;
include "templates/header.php";

$patientId = $_GET["patientId"];


?>


<div class="container mt-5">
    <div class="card rounded-card">
        <div class="card-body">
            <form action="process.php?action=urinalysis-form" method="POST">
                <input type="hidden" name="patientId" value="<?=$patientId?>">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <!-- Physical Section -->
                        <thead class="section-title">
                            <tr>
                                <th colspan="3">Physical</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Color</td>
                                <td><input type="text" class="form-control" name="colorResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="colorStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Appearance</td>
                                <td><input type="text" class="form-control" name="appearanceResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="appearanceStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>pH</td>
                                <td><input type="text" class="form-control" name="phResult" placeholder="Result"></td>
                                <td>
                                    <select name="phStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Specific Gravity</td>
                                <td><input type="text" class="form-control" name="specificGravityResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="specificGravityStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                        <!-- Chemical Section -->
                        <thead class="section-title">
                            <tr>
                                <th colspan="3">Chemical</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Protein</td>
                                <td><input type="text" class="form-control" name="proteinResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="proteinStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Glucose</td>
                                <td><input type="text" class="form-control" name="glucoseResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="glucoseStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ketones</td>
                                <td><input type="text" class="form-control" name="ketonesResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="ketonesStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Blood</td>
                                <td><input type="text" class="form-control" name="bloodResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="bloodStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Bilirubin</td>
                                <td><input type="text" class="form-control" name="bilirubinResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="bilirubinStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Leukocytes</td>
                                <td><input type="text" class="form-control" name="leukocytesResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="leukocytesStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                        <!-- Microscopic Section -->
                        <thead class="section-title">
                            <tr>
                                <th colspan="3">Microscopic</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pus Cells</td>
                                <td><input type="text" class="form-control" name="pusCellsResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="pusCellsStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Red Blood Cells</td>
                                <td><input type="text" class="form-control" name="redBloodCellsResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="redBloodCellsStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Epithelial Cells</td>
                                <td><input type="text" class="form-control" name="epithelialCellsResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="epithelialCellsStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Mucus Threads</td>
                                <td><input type="text" class="form-control" name="mucusThreadsResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="mucusThreadsStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Bacteria</td>
                                <td><input type="text" class="form-control" name="bacteriaResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="bacteriaStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include "templates/footer.php"; ?>