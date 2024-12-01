<?php

$hasBack = true;
include "templates/header.php";

$role = "Patient";
$account_list = account()->list("role='$role' and isDeleted=0");
?>

<div class="container mt-5">
        <h1 class="mb-4">Complete Blood Count (CBC) Information</h1>
        <p class="text-secondary">Below are the recorded results for the Complete Blood Count (CBC) test.</p>

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th rowspan="2" class="align-middle">Analytes</th>
                        <th colspan="2">Conventional Units</th>
                        <th colspan="2">S.I. Units</th>
                    </tr>
                    <tr>
                        <th>Result</th>
                        <th>Status</th>
                        <th>Result</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BLOOD UREA NITROGEN</td>
                        <td>18 mg/dL</td>
                        <td>Normal</td>
                        <td>6.43 mmol/L</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>CREATININE</td>
                        <td>1.2 mg/dL</td>
                        <td>Semi-normal</td>
                        <td>106 μmol/L</td>
                        <td>Semi-normal</td>
                    </tr>
                    <tr>
                        <td>URIC ACID</td>
                        <td>6.5 mg/dL</td>
                        <td>Abnormal</td>
                        <td>386 μmol/L</td>
                        <td>Abnormal</td>
                    </tr>
                    <tr>
                        <td>ALT (SGPT)</td>
                        <td>25 U/L</td>
                        <td>Normal</td>
                        <td>0.42 μkat/L</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>AST (SGOT)</td>
                        <td>22 U/L</td>
                        <td>Normal</td>
                        <td>0.37 μkat/L</td>
                        <td>Normal</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="cbc_list.php" class="btn btn-secondary">Back to List</a>
            <a href="cbc_modify.php?id=1" class="btn btn-warning">Modify</a>
            <a href="cbc_delete.php?id=1" class="btn btn-danger">Delete</a>
        </div>
    </div>

<?php include "templates/footer.php";?>