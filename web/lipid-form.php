<?php
  $pageTitle = "Patient Form";
  $hasBack = true;
include "templates/header.php";


$patientId = $_GET["patientId"];
?>

<div class="container mt-5">
    <div class="card rounded-card">
        <div class="card-body">
            <form action="process.php?action=lipid-form" method="POST">
            <input type="hidden" name="patientId" value="<?=$patientId?>">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="section-title">
                            <tr>
                                <th rowspan="2" class="align-middle">Analytes</th>
                                <th colspan="2">S.I. Units</th>
                                <th colspan="2">(MG/DL)</th>
                            </tr>
                            <tr>
                                <th>Result</th>
                                <th>Normal Range</th>
                                <th>Result</th>
                                <th>Normal Range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>T. Cholesterol</td>
                                <td><input type="text" class="form-control" name="tCholesterolResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="tCholesterolStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="tCholesterolResultMgDl"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="tCholesterolStatusMgDl" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>HDL-Cholesterol</td>
                                <td><input type="text" class="form-control" name="hdlCholesterolResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="hdlCholesterolStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="hdlCholesterolResultMgDl"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="hdlCholesterolStatusMgDl" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Triglyceride</td>
                                <td><input type="text" class="form-control" name="triglycerideResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="triglycerideStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="triglycerideResultMgDl"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="triglycerideStatusMgDl" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>LDL-Cholesterol</td>
                                <td><input type="text" class="form-control" name="ldlCholesterolResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="ldlCholesterolStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="ldlCholesterolResultMgDl"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="ldlCholesterolStatusMgDl" class="form-select">
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