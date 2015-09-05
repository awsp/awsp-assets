String.prototype.replaceLast = function (needle, target) {
  return this.replace(new RegExp(needle + '$'), target); 
};
