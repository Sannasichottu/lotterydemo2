<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="assets/css/style.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Font Awesome CDN link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
</head>

<body>
    <div class="card1">
        Tabs
    </div>
    <div class="card1 mt-2">
        Home
    </div>
    <div class="card1" id="card1">
        <div class="row" style="margin-top:40%">
            <div class="col-12" align="center">
                <span id="time"><b>00: 00: 00</b></span>
            </div>
        </div>
    </div>
    <div class="play_btn">
        <a class="btn btn-warning text-light button" href="play.php" style="width:130px"><b>PLAY</b></a>
    </div>



    <?php
    include_once('footer.php');
    ?>
</body>

</html>