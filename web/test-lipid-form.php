<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cholesterol Report Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form>
            <div class="card">
                <div class="card-body">
                    <div class="row text-center mb-4">
                        <div class="col-md-6">
                            <h6>S.I. UNITS</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>NORMAL VALUE (mg/dl)</h6>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Test</th>
                                <th>Results</th>
                                <th>Normal Range</th>
                                <th>Results</th>
                                <th>Normal Range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- T. CHOLESTEROL -->
                            <tr>
                                <td>T. CHOLESTEROL</td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                            </tr>
                            <!-- HDL - CHOLESTEROL -->
                            <tr>
                                <td rowspan="2">HDL - CHOLESTEROL</td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                            </tr>
                            <!-- TRIGLYCERIDE -->
                            <tr>
                                <td rowspan="2">TRIGLYCERIDE</td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                            </tr>
                            <!-- LDL - CHOLESTEROL -->
                            <tr>
                                <td rowspan="2">LDL - CHOLESTEROL</td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                                <td><input type="text" class="form-control" placeholder="Results"></td>
                                <td><input type="text" class="form-control" placeholder="Normal Range"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
