function adjust() {
  var style = this.currentStyle || window.getComputedStyle(this);
  var boxSizing = style.boxSizing === 'border-box'
      ? parseInt(style.borderBottomWidth, 10) +
        parseInt(style.borderTopWidth, 10)
      : 0;
  this.style.height = '';
  this.style.height = (this.scrollHeight + boxSizing) + 'px';
};

var textarea = document.getElementById("description");
if ('onpropertychange' in textarea) { // IE
  textarea.onpropertychange = adjust;
} else if ('oninput' in textarea) {
  textarea.oninput = adjust;
}
setTimeout(adjust.bind(textarea));