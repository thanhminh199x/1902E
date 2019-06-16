<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="get.php" methor="GET" role="'form">
        <legend>Get files</legend>
        <div class="form-group">
            <label for="">chiều cao</label>
            <input type="number" class="form-control" id=""placeholder="Nhập chiều cao" name="height">
        </div>
        <div class="form-group">
            <label for="">cân nặng</label>
            <input type="number" class="form-control" id=""placeholder="nhập cân nặng" name="weight">
        </div>
        <div class="form-group">
            <label for="">BMI</label>
            <input type="number" class="form-control" id=""placeholder="BMI" name="BMI">
        </div>


    </form>
    </div>
<h1>tính BMI</h1>
<?php
if (isset($_GET) && isset($_GET["chiều cao"]) && isset($_GET["cân nặng"])) {
    echo "<pre>chiều cao là :" ;
    print_r($_GET);
    echo "</pre>cân nặng là :";
}
?>
</body>
</html>
