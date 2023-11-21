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
    <div class="container d-flex justify-content-center">
        <form class="col-5 border ms-5" action="result.php" method="get">
            <label for="name" class="col me-2 ms-5">Name</label>
            <input type="text" name="name" id="" class="col-6 ms-5" placeholder="Your name" style="margin-left: 135px!important;">
            <label for="club" class="col me-3 mt-2 ms-5 ">Club You Want To Apply</label>
            <select name="club" id="" class="col-6">
                <option value="Music Club">Music</option>
                <option value="Dance Club">Dance</option>
                <option value="Chat Tea Club">Chat Tea</option>
                <option value="Muray Thai Fight">Muray Thai</option>
            </select>
            <label for="time" class="col ms-5 me-2 mt-2">Best Time for You</label>
            <div class="row">

                <input type="radio" class="col-1 ms-5 mt-2" name="time" id="" value="Saturday Morning">
                <label for="time" class="col-9">Saturday Morning</label>
            </div>
            <div class="row">

                <input type="radio" class="col-1 ms-5 mt-2" name="time" id="" value="Saturday Afternoon">
                <label for="time" class="col-9">Saturday Afternoon</label>
            </div>

            <div class="row">
                <input type="radio" class="col-1 ms-5 mt-2" name="time" id="" value="Sunday Afternoon">
                <label for="time" class="col-9">Sunday Afternoon</label>
            </div>
            <div class="row ms-5">
                <div class="col">
                    <label for="skill" class="col mt-2">Your Skills :</label>
                </div>
                <input class="mt-4" type="checkbox" name="skill[]" id="" value="The best coder">The best coder
                <input type="checkbox" name="skill[]" id="" value="A super star">A super star
                <input type="checkbox" name="skill[]" id="" value="Singer">Singer
                <input type="checkbox" name="skill[]" id="" value="Good in arts">Good in arts
                <input type="checkbox" name="skill[]" id="" value="A crazy dancer">A crazy dancer
                <input type="checkbox" name="skill[]" id="" value="Good in design">Good in design
                <input type="checkbox" name="skill[]" id="" value="The best eater">The best eater
                <input type="submit" class="col-11 bg-warning boder boder-info " name="sub" id="" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>