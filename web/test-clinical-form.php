<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-header {
            background-color: #f8f9fa;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h4 class="text-center mb-4">Laboratory Results</h4>
        <form>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-header">
                        <th rowspan="2">Analyte</th>
                        <th colspan="2">Conventional Units</th>
                        <th colspan="2">S.I. Units</th>
                    </tr>
                    <tr class="table-header">
                        <th>Result</th>
                        <th>Normal Range</th>
                        <th>Result</th>
                        <th>Normal Range</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td>BLOOD UREA NITROGEN</td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
                        <td>CREATININE</td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr>
                        <td>URIC ACID</td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr>
                        <td>ALT (SGPT)</td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                    </tr>
                    <!-- Row 5 -->
                    <tr>
                        <td>AST (SGOT)</td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Result">
                        </td>
                        <td>
                            <input type="text" class="form-control" value="100-200" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
