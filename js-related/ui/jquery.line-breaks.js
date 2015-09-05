$.fn.convertLineBreaks = function() {
  this.each(function() {
    $(this).on("keypress", function(e) {
      var br, range, selection, textNode;
      if (e.keyCode === 13) {
        e.preventDefault();
        if (window.getSelection) {
          selection = window.getSelection();
          range = selection.getRangeAt(0);
          br = document.createElement("br");
          textNode = document.createTextNode("\u00a0");
          range.insertNode(br);
          range.collapse(false);
          range.insertNode(textNode);
          range.selectNodeContents(textNode);
          selection.removeAllRanges();
          range.deleteContents();
          selection.addRange(range);
          return false;
        }
      }
    });
  });
};

var $editField = $('p[contenteditable=true]');

$editField.convertLineBreaks();

$editField.on("keyup", function () {
  $("div").html($editField.html())
});
