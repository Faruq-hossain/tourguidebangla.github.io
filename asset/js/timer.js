var timeLeft = 5;
var elem = document.getElementById("time");

var timerId = setInterval(countdown, 1000);

function countdown() {
  if (timeLeft == -1) {
    clearTimeout(timerId);
    doSomething();
  } else {
    elem.innerHTML = timeLeft;
    timeLeft--;
  }
}
