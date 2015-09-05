var randomRangedNumber - function (maximum, minimum) {
  var randomNumber = Math.floor(Math.random() * (maximum - minimum + 1)) + minimum;
  return randomNumber;
};
