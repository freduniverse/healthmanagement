<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

    case 'account-save':
        account_save();
        break;

    case 'account-delete':
        account_delete();
        break;

    case 'patient-save':
        patient_save();
        break;

    case 'appointment-save':
        appointment_save();
        break;

    case 'urinalysis-form':
        urinalysis_form();
        break;

    case 'cbc-form':
        cbc_form();
        break;

    case 'lipid-form':
        lipid_form();
        break;

    default:
}

function lipid_form()
{
    $model = lipid();

    $model->obj["patientId"] = $_POST["patientId"];
    $model->obj["dateAdded"] = "NOW()";
// Save form fields
    $model->obj["tCholesterolResult"] = $_POST["tCholesterolResult"];
    $model->obj["tCholesterolStatus"] = $_POST["tCholesterolStatus"];
    $model->obj["tCholesterolResultMgDl"] = $_POST["tCholesterolResultMgDl"];
    $model->obj["tCholesterolStatusMgDl"] = $_POST["tCholesterolStatusMgDl"];
    $model->obj["hdlCholesterolResult"] = $_POST["hdlCholesterolResult"];
    $model->obj["hdlCholesterolStatus"] = $_POST["hdlCholesterolStatus"];
    $model->obj["hdlCholesterolResultMgDl"] = $_POST["hdlCholesterolResultMgDl"];
    $model->obj["hdlCholesterolStatusMgDl"] = $_POST["hdlCholesterolStatusMgDl"];
    $model->obj["triglycerideResult"] = $_POST["triglycerideResult"];
    $model->obj["triglycerideStatus"] = $_POST["triglycerideStatus"];
    $model->obj["triglycerideResultMgDl"] = $_POST["triglycerideResultMgDl"];
    $model->obj["triglycerideStatusMgDl"] = $_POST["triglycerideStatusMgDl"];
    $model->obj["ldlCholesterolResult"] = $_POST["ldlCholesterolResult"];
    $model->obj["ldlCholesterolStatus"] = $_POST["ldlCholesterolStatus"];
    $model->obj["ldlCholesterolResultMgDl"] = $_POST["ldlCholesterolResultMgDl"];
    $model->obj["ldlCholesterolStatusMgDl"] = $_POST["ldlCholesterolStatusMgDl"];

// Save to database
    $model->create();

}

function cbc_form()
{
    $model = cbc();

    $model->obj["patientId"] = $_POST["patientId"];
    $model->obj["dateAdded"] = "NOW()";

// Save form fields
    $model->obj["bloodUreaNitrogenResult"] = $_POST["bloodUreaNitrogenResult"];
    $model->obj["bloodUreaNitrogenStatus"] = $_POST["bloodUreaNitrogenStatus"];
    $model->obj["creatinineResult"] = $_POST["creatinineResult"];
    $model->obj["creatinineStatus"] = $_POST["creatinineStatus"];
    $model->obj["uricAcidResult"] = $_POST["uricAcidResult"];
    $model->obj["uricAcidStatus"] = $_POST["uricAcidStatus"];
    $model->obj["altSgptResult"] = $_POST["altSgptResult"];
    $model->obj["altSgptStatus"] = $_POST["altSgptStatus"];
    $model->obj["astSgotResult"] = $_POST["astSgotResult"];
    $model->obj["astSgotStatus"] = $_POST["astSgotStatus"];

// S.I. Unit fields
    $model->obj["bloodUreaNitrogenResultSi"] = $_POST["bloodUreaNitrogenResultSi"];
    $model->obj["bloodUreaNitrogenStatusSi"] = $_POST["bloodUreaNitrogenStatusSi"];
    $model->obj["creatinineResultSi"] = $_POST["creatinineResultSi"];
    $model->obj["creatinineStatusSi"] = $_POST["creatinineStatusSi"];
    $model->obj["uricAcidResultSi"] = $_POST["uricAcidResultSi"];
    $model->obj["uricAcidStatusSi"] = $_POST["uricAcidStatusSi"];
    $model->obj["altSgptResultSi"] = $_POST["altSgptResultSi"];
    $model->obj["altSgptStatusSi"] = $_POST["altSgptStatusSi"];
    $model->obj["astSgotResultSi"] = $_POST["astSgotResultSi"];
    $model->obj["astSgotStatusSi"] = $_POST["astSgotStatusSi"];

// Save to database
    $model->create();

}

function urinalysis_form()
{

    $model = urinalysis();

    $model->obj["patientId"] = $_POST["patientId"];
    $model->obj["dateAdded"] = "NOW()";
    // Physical
    $model->obj["colorResult"] = $_POST["colorResult"];
    $model->obj["colorStatus"] = $_POST["colorStatus"];
    $model->obj["appearanceResult"] = $_POST["appearanceResult"];
    $model->obj["appearanceStatus"] = $_POST["appearanceStatus"];
    $model->obj["phResult"] = $_POST["phResult"];
    $model->obj["phStatus"] = $_POST["phStatus"];
    $model->obj["specificGravityResult"] = $_POST["specificGravityResult"];
    $model->obj["specificGravityStatus"] = $_POST["specificGravityStatus"];

    // Chemical
    $model->obj["proteinResult"] = $_POST["proteinResult"];
    $model->obj["proteinStatus"] = $_POST["proteinStatus"];
    $model->obj["glucoseResult"] = $_POST["glucoseResult"];
    $model->obj["glucoseStatus"] = $_POST["glucoseStatus"];
    $model->obj["ketonesResult"] = $_POST["ketonesResult"];
    $model->obj["ketonesStatus"] = $_POST["ketonesStatus"];
    $model->obj["bloodResult"] = $_POST["bloodResult"];
    $model->obj["bloodStatus"] = $_POST["bloodStatus"];
    $model->obj["bilirubinResult"] = $_POST["bilirubinResult"];
    $model->obj["bilirubinStatus"] = $_POST["bilirubinStatus"];
    $model->obj["leukocytesResult"] = $_POST["leukocytesResult"];
    $model->obj["leukocytesStatus"] = $_POST["leukocytesStatus"];

    // Microscopic
    $model->obj["pusCellsResult"] = $_POST["pusCellsResult"];
    $model->obj["pusCellsStatus"] = $_POST["pusCellsStatus"];
    $model->obj["redBloodCellsResult"] = $_POST["redBloodCellsResult"];
    $model->obj["redBloodCellsStatus"] = $_POST["redBloodCellsStatus"];
    $model->obj["epithelialCellsResult"] = $_POST["epithelialCellsResult"];
    $model->obj["epithelialCellsStatus"] = $_POST["epithelialCellsStatus"];
    $model->obj["mucusThreadsResult"] = $_POST["mucusThreadsResult"];
    $model->obj["mucusThreadsStatus"] = $_POST["mucusThreadsStatus"];
    $model->obj["bacteriaResult"] = $_POST["bacteriaResult"];
    $model->obj["bacteriaStatus"] = $_POST["bacteriaStatus"];

    // Save the data
    $model->create();
}

function account_delete()
{

    $Id = $_GET["Id"];
    $model = account();
    $model->obj["isDeleted"] = 1;
    $model->update("Id=$Id");

    header('Location: ' . $_GET["url"] . '&success=Account Successfully Deleted');
}

function account_save()
{
    #Process to save to the database

    $model = account();
    $model->obj["username"] = $_POST["username"];
    $model->obj["firstName"] = $_POST["firstName"];
    $model->obj["lastName"] = $_POST["lastName"];
    $model->obj["role"] = $_POST["role"];
    $model->obj["dateAdded"] = "NOW()";

    if ($_POST["form-type"] == "add") {
        $model->obj["password"] = $_POST["password"];
        $model->create();
    }

    if ($_POST["form-type"] == "edit") {
        $Id = $_POST["Id"];
        $model->update("Id=$Id");
    }

    header('Location: accounts.php?role=' . $_POST["role"]);
}

function patient_save()
{
    #Process to save to the database

    $model = account();
    $model->obj["username"] = $_POST["username"];
    $model->obj["firstName"] = $_POST["firstName"];
    $model->obj["lastName"] = $_POST["lastName"];
    $model->obj["birthday"] = $_POST["birthday"];
    $model->obj["sex"] = $_POST["sex"];
    $model->obj["phone"] = $_POST["phone"];
    $model->obj["email"] = $_POST["email"];
    $model->obj["address"] = $_POST["address"];
    $model->obj["city"] = $_POST["city"];
    $model->obj["role"] = "Patient";
    $model->obj["dateAdded"] = "NOW()";

    if ($_POST["form-type"] == "add") {
        $model->obj["password"] = $_POST["password"];
        $model->create();
    }

    if ($_POST["form-type"] == "edit") {
        $Id = $_POST["Id"];
        $model->update("Id=$Id");
    }

    header('Location: index.php?success=Added new patient');
}

function appointment_save()
{
    #Process to save to the database

    $model = appointment();
    $model->obj["doctorId"] = $_POST["doctorId"];
    $model->obj["patientId"] = $_POST["patientId"];
    $model->obj["dateAdded"] = "NOW()";
    $model->obj["purpose"] = $_POST["purpose"];

    if ($_POST["form-type"] == "add") {
        $model->create();
    }

    if ($_POST["form-type"] == "edit") {
        $Id = $_POST["Id"];
        $model->update("Id=$Id");
    }

    header('Location: index.php?success=Added new appointment');
    // print_r($_POST);
}
