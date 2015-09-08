var a = [1, 2, 3, 4];
var r = [];
function async(item, callback) {
  setTimeout(function () {
    callback(item * 3)
  }, 1000);
}

function final() {
  console.log('Done', r);
}

a.forEach(function (b) {

  async(b, function (result) {
    r.push(result);
    if (r.length === a.length) {
      final();
    }
  });

});
