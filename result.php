<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <img src="https://t4.ftcdn.net/jpg/02/67/11/55/360_F_267115523_nhJWtLVlhtYtqGkfVOIzhOCAjQRrejVI.jpg" alt="" style="height: 200px;">
        <?php
        $check = isset($_GET["name"]);
        if ($check) {
            $name = $_GET["name"];
            echo "<h1>Hello you $name !!!</h1><br>";
        }
        $check = isset($_GET["club"]);
        if ($check) {
            $club = $_GET["club"];
            echo "We received your application for the " . $club . "<br>";
        }
        $check = isset($_GET["skill"]) ? $_GET["skill"] : $skills = [];
        if ($check) {
            $skills = $_GET["skill"];
            echo "You are a crazy ";
            foreach ($skills as $i) {
                echo $i . " and ";
            }
        }
        $check = isset($_GET["time"]);
        echo  "<br>";
        if ($check) {
            $time = $_GET["time"];
            echo "You will be available on " . $time;
        }
        ?>
    </div>
</body>

</html>