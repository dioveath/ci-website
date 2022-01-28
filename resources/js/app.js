// require('./bootstrap');

const {getCountDownRemain} = require('./utils');


const releaseDate = new Date("2021", "7", "30");

setInterval(()=> {
  
  var cdr = getCountDownRemain(releaseDate);

  var dayTimer = document.getElementById("dayTimer");
  var hourTimer = document.getElementById("hourTimer");
  var minuteTimer = document.getElementById("minuteTimer");
  var secondTimer = document.getElementById("secondTimer");

  dayTimer.innerHTML = cdr[0].pad(2);
  hourTimer.innerHTML = cdr[1].pad(2);
  minuteTimer.innerHTML = cdr[2].pad(2);
  secondTimer.innerHTML = cdr[3].pad(2);  

}, 1000);


