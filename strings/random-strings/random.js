var randomChars = function (length) {
  if (typeof length === 'undefined') {
    length = 8;
  }
  return (Math.random() +1).toString(36).substr(2, length);
};
