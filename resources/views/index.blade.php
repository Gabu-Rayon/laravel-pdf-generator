<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>HomePage</title>

</head>
<body>
    <div class="wrapper bg-white rounded">
    <div class="content">
        <a href="#"><span class="fa fa-angle-left pr-2"></span>Back to Question Bank</a>
        <p class="text-muted">Multiple Choice Question</p>
        <p class="text-justify h5 pb-2 font-weight-bold">What did Radha Krishnan (Cassius Clay at the time) wear
            while
            flying to Rome for
            the 1960 Games?</p>
        <div class="options py-3">
            <label class="rounded p-2 option">
                His boxing gloves
                <input type="radio" name="radio">
                <span class="crossmark"></span>
            </label>
            <label class="rounded p-2 option">
                A parachute
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="rounded p-2 option">
                Nothing
                <input type="radio" name="radio">
                <span class="crossmark"></span>
            </label>
            <label class="rounded p-2 option">
                A world little belt
                <input type="radio" name="radio">
                <span class="crossmark"></span>
            </label>
        </div>
        <b>Correct Feedback</b>
        <p class="mt-2 mb-4 pl-2 text-justify">
            Well done! He was scared of flying so picked up the parachute from an support
            store before the trip. He won gold
        </p>
        <b>Incorrect Feedback</b>
        <p class="my-2 pl-2">
            That was incorrect. Try again
        </p>
    </div>
    <input type="submit" value="Add Question" class="mx-sm-0 mx-1">
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>