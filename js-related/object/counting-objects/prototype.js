if (! Object.prototype.size) {
  Object.prototype.size = function () {
    return Object.keys(this).length;
  }
}
