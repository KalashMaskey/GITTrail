<?php

$entryConnection = mysqli_connect('localhost', 'root', '', 'dataentry');

    if(isset($_POST['submit'])){
        global $entryConnection;

        $brand = $_POST['brand'];
        $start= $_POST['start'];

        $query = " INSERT INTO records (brand, start) VALUES ('$brand , '$start') ";


    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practical Session 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
    crossorigin="anonymous"></script>

</head>
<body>

<br>

<div class="container">
        <form action="entry.php" method="post">
            <div class="entry-group">
                <label for="name">Brand <br> </label>
                <input type="text" name="brandname" class="entry-group">
            </div>
<br>
            <div class="entry-group">
                <label for="date">Month  </label>
                <input type="date" name="month" id="text">
            </div>
<br>
            <div class="entry-group">
                
                <label for="currency">Start Time <br> </label>
                <input type="currency" name="startTime">
            </div>
<br>
            <div class="entry-group">

                <label for="number">Seconds <br></label>
                <input type="number" name="seconds" id="">
            </div>
<br>
            <div class="entry-group">
                <label for="text">Programme <br></label>
                <input type="text" name="text" id="">
            </div>
<br>
            <div class="entry-group">
                <label for="text">Position <br></label>
                <input type="text" name="text" id="">
            </div>
<br>
            <input class="btn btn-primary" type = "submit"name="submit" value="Submit">
        </form>

</div>

</body>
</html>