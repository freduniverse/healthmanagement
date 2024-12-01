<?php
  $pageTitle = "Patient Form";
  $hasBack = true;
include "templates/header.php";


$patientId = $_GET["patientId"];
?>

<div class="container mt-5">
    <div class="card border-1">
        <div class="card-header bg-light text-center">
            <strong>Laboratory Results</strong>
        </div>
        <div class="card-body">
            <form action="process.php?action=cbc-form" method="POST">
            <input type="hidden" name="patientId" value="<?=$patientId?>">
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
                                <th>Normal Range</th>
                                <th>Result</th>
                                <th>Normal Range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BLOOD UREA NITROGEN</td>
                                <td><input type="text" class="form-control" name="bloodUreaNitrogenResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="bloodUreaNitrogenStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="bloodUreaNitrogenResultSi"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="bloodUreaNitrogenStatusSi" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>CREATININE</td>
                                <td><input type="text" class="form-control" name="creatinineResult"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="creatinineStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="creatinineResultSi"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="creatinineStatusSi" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>URIC ACID</td>
                                <td><input type="text" class="form-control" name="uricAcidResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="uricAcidStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="uricAcidResultSi"
                                        placeholder="Result"></td>
                                <td>
                                    <select name="uricAcidStatusSi" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>ALT (SGPT)</td>
                                <td><input type="text" class="form-control" name="altSgptResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="altSgptStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="altSgptResultSi" placeholder="Result">
                                </td>
                                <td>
                                    <select name="altSgptStatusSi" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>AST (SGOT)</td>
                                <td><input type="text" class="form-control" name="astSgotResult" placeholder="Result">
                                </td>
                                <td>
                                    <select name="astSgotStatus" class="form-select">
                                        <option value="">--Select--</option>
                                        <option>Normal</option>
                                        <option>Semi-normal</option>
                                        <option>Abnormal</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="astSgotResultSi" placeholder="Result">
                                </td>
                                <td>
                                    <select name="astSgotStatusSi" class="form-select">
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