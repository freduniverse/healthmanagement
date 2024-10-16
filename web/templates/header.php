<!-- https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index.html -->
<?php
session_start();
include_once("../config/database.php");
include_once("../config/Models.php");
$user = $_SESSION["admin_session"];

if (isset($user)) {

  $username = $user["username"];
  $account = account()->get("username='$username'");
  $role = $account->role;

}
else{
  header("Location: login.php");
}


$page = get_query_string("page", "patients");
$pageTitle = "List of Patients";
if ($page=="newAppointment") {
    $pageTitle = "Create new appointment";
}
if ($page=="newLabTest") {
    $pageTitle = "Create new Laboratory Test";
}

?>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health Management Information System </title>
    <link rel="shortcut icon" type="image/png" href="templates/favicon.png" />
    <link rel="stylesheet" href="templates/assets/css/styles.min.css" />
    <link rel="stylesheet" href="templates/assets/css/custom.css" />

    <!-- product form -->
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>


    <link rel="stylesheet" href="templates/assets/form/select2.min.css">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" crossorigin="anonymous"></script>

    <!-- for angular js  -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.3.0.min.js"></script>

</head>

<body ng-app="myApp" ng-controller="myCtrl">

    <!--  Header End -->
    <div class="container mt-5">


        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <img src="templates/logo.png" style="height:80px">
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-between top-buttons mb-4">
            <?php if ($hasBack): ?>
                <a href="./" class="btn btn-warning"> <i class="bi bi-arrow-left"></i> </a>
                
            <h4><?=$pageTitle?></h4>
            <?php else: ?>
                <div>&nbsp;</div>
            <?php endif; ?>

            <div>
                <b><?=$role?>:</b> <?=$account->firstName;?> <?=$account->firstName;?> | <a
                    href="processAuth.php?action=user-logout">Log out</a>
            </div>
        </div>