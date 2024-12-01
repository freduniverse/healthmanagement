<?php

$hasBack = true;
include "templates/header.php";

$role = "Patient";
$account_list = account()->list("role='$role' and isDeleted=0");
?>



<div class="container mt-5">
        <h1 class="mb-4">Lipid Profile Information</h1>
        <p class="text-secondary">Below are the recorded results for the Lipid Profile test.</p>

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
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
                        <td>5.0 mmol/L</td>
                        <td>Normal</td>
                        <td>190 mg/dL</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>HDL-Cholesterol</td>
                        <td>1.5 mmol/L</td>
                        <td>Normal</td>
                        <td>58 mg/dL</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>Triglyceride</td>
                        <td>1.4 mmol/L</td>
                        <td>Semi-normal</td>
                        <td>124 mg/dL</td>
                        <td>Semi-normal</td>
                    </tr>
                    <tr>
                        <td>LDL-Cholesterol</td>
                        <td>3.0 mmol/L</td>
                        <td>Abnormal</td>
                        <td>116 mg/dL</td>
                        <td>Abnormal</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="lipid_list.php" class="btn btn-secondary">Back to List</a>
            <a href="lipid_modify.php?id=1" class="btn btn-warning">Modify</a>
            <a href="lipid_delete.php?id=1" class="btn btn-danger">Delete</a>
        </div>
    </div>

<?php include "templates/footer.php";?>