Number.prototype.pad = function(size) {
  var s = String(this);
  while (s.length < (size || 2)) { s = "0" + s; }
  return s;
};

function getCountDownRemain(countToDate) {
  var remainMilli = countToDate - Date.now();
  var milliTimer = remainMilli % 1000;
  var remainSeconds = Math.floor(remainMilli / 1000);
  var secondTimer = remainSeconds % 60;
  var remainMinutes = Math.floor(remainSeconds / 60);
  var minuteTimer = remainMinutes % 60;
  var remainHours = Math.floor(remainMinutes / 60);
  var hourTimer = remainHours % 24;
  var remainDays = Math.floor(remainHours / 24);
  var dayTimer = remainDays;

  return [dayTimer, hourTimer, minuteTimer, secondTimer, milliTimer];
}


let randomInt = (min, max) => Math.floor(Math.random() * (max -  min) + 1) + min;

export {getCountDownRemain, randomInt};
