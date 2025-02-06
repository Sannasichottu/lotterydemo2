var swiper = new Swiper(".swiper", {
    effect: "cards",
    grabCursor: true,
    initialSlide: 2,
    speed: 500,
    loop: true,
    rotate: true,
    mousewheel: {
    invert: false,
  },
});


// Digit

function startCountdown(elementId, targetHour) {
  function updateTimer() {
      let now = new Date();
      let targetTime = new Date();
      targetTime.setHours(targetHour, 0, 0, 0);
      if (now > targetTime) {
          targetTime.setDate(targetTime.getDate() + 1);
      }
      let timeLeft = Math.floor((targetTime - now) / 1000);
      let hours = Math.floor(timeLeft / 3600);
      let minutes = Math.floor((timeLeft % 3600) / 60);
      let seconds = timeLeft % 60;
      document.getElementById(elementId).innerHTML = `
          <div class="time-box">${String(hours).padStart(2, '0')}</div>
         <h3 style="margin-top:18px">:</h3>
          <div class="time-box">${String(minutes).padStart(2, '0')}</div>
         <h3 style="margin-top:18px">:</h3>
          <div class="time-box">${String(seconds).padStart(2, '0')}</div>
      `;
      setTimeout(updateTimer, 1000);
  }
  updateTimer();
}
startCountdown("timer1", 13);
startCountdown("timer2", 15);
startCountdown("timer3", 18);
startCountdown("timer4", 20);


startCountdown("timer1.1", 13);
startCountdown("timer2.1", 15);
startCountdown("timer3.1", 18);
startCountdown("timer4.1", 20);


startCountdown("timer1.2", 13);
startCountdown("timer2.2", 15);
startCountdown("timer3.2", 18);
startCountdown("timer4.2", 20);

startCountdown("timer1.3", 13);
startCountdown("timer2.3", 15);
startCountdown("timer3.3", 18);
startCountdown("timer4.3", 20);