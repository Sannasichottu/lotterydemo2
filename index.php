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
        Results
    </div>
    <div class="card2 mt-3">
        <div class="row">
            <div class="col-6 mt-4" align="center">
                <span id="live_heading" onclick="live()" class="text-light"><b>LIVE</b></span>
            </div>
            <div class="col-6 mt-4" align="center">
                <span id="finished_heading" onclick="finished()" class="text-light"><b>FINISHED</b></span>
            </div>
        </div>
        <div class="row" style="margin-top:90%">
            <div class="col-12" align="center">
                <span id="live" class="text-light"><b>Live results go here</b></span>
                <span id="finished" class="text-light" style="display:none"><b>Finished results go here</b></span>
            </div>
        </div>
    </div>
    <?php
    include_once('footer.php');
    ?>
    <script>
        function live() {
            document.getElementById('live').style.display = "block";
            document.getElementById('finished').style.display = "none";

            var spanElement = document.getElementById("live_heading");
            spanElement.style.textDecoration = "underline"; // Add underline
            spanElement.style.fontWeight = "bold"; // Ensure the text is bold

            document.getElementById('finished_heading').style.textDecoration="none";
        }


        function finished() {
            document.getElementById('finished').style.display = "block";
            document.getElementById('live').style.display = "none";

            var spanElement = document.getElementById("finished_heading");
            spanElement.style.textDecoration = "underline"; // Add underline
            spanElement.style.fontWeight = "bold"; // Ensure the text is bold

            document.getElementById('live_heading').style.textDecoration="none";
        }
    </script>
</body>

</html>