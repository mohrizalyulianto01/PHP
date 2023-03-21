<?php
error_reporting(0);
extract($_POST);

$result = 'none';
// true && true = true
// false && true = false
// false && false = false

// true || true = true
// true || false = true
// false || false = false
if(pow($first, 2) == (pow($second, 2) + pow($third, 2)) || pow($second, 2) == (pow($first, 2) + pow($third, 2)) || pow($third, 2) == (pow($first, 2) + pow($second, 2))){
    $result = 'Segitiga siku-siku';
}
if(pow($first, 2) < (pow($second, 2) + pow($third, 2)) || pow($second, 2) < (pow($first, 2) + pow($third, 2)) || pow($third, 2) < (pow($first, 2) + pow($second, 2))){
    $result = 'Segitiga lancip';
}
if(pow($first, 2) > (pow($second, 2) + pow($third, 2)) || pow($second, 2) > (pow($first, 2) + pow($third, 2)) || pow($third, 2) > (pow($first, 2) + pow($second, 2))){
    $result = 'Segitiga tumpul';
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <form action="sudut.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Sisi 1</label>
                <input type="number" class="form-control" name="first">
            </div>
            <div class="form-group">
                <label for="">Sisi 2</label>
                <input type="number" class="form-control" name="second">
            </div>
            <div class="form-group">
                <label for="">Sisi 3</label>
                <input type="number" class="form-control" name="third">
            </div>
            <button type="submit" class="btn btn-info">Submit Form</button>
        </form>
        <div class="form-group">
            <label for="fullname">Result</label>
            <input type="text" class="form-control" value="<?php echo $result ?>">
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>