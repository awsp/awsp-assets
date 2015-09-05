if (! String.prototype.random) {
  String.prototype.random = function (length) {
    length = length || 8;
    return (Math.random() +1).toString(36).substr(2, length);
  }
}
