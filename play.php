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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
</head>

<body>
  <div class="card1">
    <a href="home.php" class="text-dark"><i class="fa-solid fa-arrow-left"></i></a>
    <span class="ms-3">Play</span>
  </div>
  <a href="home.php" class="btn btn-primary rounded m-2">Back</a>

  <div class="card5 mt-3">
    <div class="row">
      <div class="col-12" align="center">
        <span><b>5 in 1 Game</b></span>
      </div>
    </div>
  </div>
  <div style="margin-top:100px">
    <div class="swiper">
      <div class="swiper-wrapper">
       
      <div class="swiper-slide">
          <div class="overlay">
            <h5 id="swiper_content">1 DIGIT</h5>
            <div class="lottery-container">
              <div class="lottery-card" id="lottery1">
                <div class="discount">1 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer1"></div>
                <button class="play-button">PLAY</button>
              </div>
              <div class="lottery-card" id="lottery1">
                <div class="discount">3 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer2"></div>
                <button class="play-button">PLAY</button>
              </div>
            </div>
            <div class="lottery-container" style="margin-top: -27px;">
              <div class="lottery-card" id="lottery1">
                <div class="discount">6 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer3"></div>
                <button class="play-button">PLAY</button>
              </div>
              <div class="lottery-card" id="lottery1">
                <div class="discount">8 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer4"></div>
                <button class="play-button">PLAY</button>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="overlay">
            <h2 id="swiper_content">2 DIGIT</h2>
            <div class="lottery-container">
              <div class="lottery-card" id="lottery1">
                <div class="discount">1 pm</div>
                <!-- <img src="assets/images/win.png" alt="win" > -->
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer1"></div>
                <button class="play-button">PLAY</button>
              </div>
              <div class="lottery-card" id="lottery1">
                <div class="discount">3 pm</div>
                <!-- <img src="assets/images/win.png" alt="win"> -->
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer2"></div>
                <button class="play-button">PLAY</button>
              </div>
            </div>
            <div class="lottery-container" style="margin-top: -27px;">
              <div class="lottery-card" id="lottery1">
                <div class="discount">6 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer3"></div>
                <button class="play-button">PLAY</button>
              </div>
              <div class="lottery-card" id="lottery1">
                <div class="discount">8 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer4"></div>
                <button class="play-button">PLAY</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- <div class="swiper-slide">
          <div class="overlay">
            <h5 id="swiper_content">1 DIGIT</h5>
            <div class="lottery-container">
              <div class="lottery-card" id="lottery1">
                <div class="discount">1 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer1"></div>
                <button class="play-button">PLAY</button>
              </div>
              <div class="lottery-card" id="lottery1">
                <div class="discount">3 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer2"></div>
                <button class="play-button">PLAY</button>
              </div>
            </div>
            <div class="lottery-container" style="margin-top: -27px;">
              <div class="lottery-card" id="lottery1">
                <div class="discount">6 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer3"></div>
                <button class="play-button">PLAY</button>
              </div>
              <div class="lottery-card" id="lottery1">
                <div class="discount">8 pm</div>
                <img src="assets/images/win.png" alt="win">
                <div class="win-prize">Win Prize: ₹10,000</div>
                <div class="price"><b>₹ 10.45</b> <del class="text-danger"><b> ₹ 11.00</b></del> /Ticket
                </div>
                <div class="timer" id="timer4"></div>
                <button class="play-button">PLAY</button>
              </div>
            </div>
          </div>
        </div> -->


      <!-- <div class="swiper-slide">
        <div class="overlay">
          <h2 id="swiper_content">4 DIGIT</h2>
        </div>
      </div> -->
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>