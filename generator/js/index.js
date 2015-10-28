tinymce.init({
  selector: "#input-html",
  content_css : "http://vileworks.com/contract/generator/css/editor-style.css", 
  min_height: 300,
  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table contextmenu paste"
  ],
  toolbar: "code undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent"
});

$('#html_capture').val($('#input-html').val());
$('#input-html').bind('input propertychange', function(e) { 
  alert('textarea changed');
  $('#html_capture').val($(this).val()).attr('type','text');
});
$('form').submit(funtion(){
  alert('submit');
});

$('#signature').jSignature();
var $sigdiv = $('#signature');
var datapair = $sigdiv.jSignature('getData', 'svgbase64');

// Submit
$('#submit').attr('disabled','disabled');
$('#signature').bind('change', function(e) {
  var data = $('#signature').jSignature('getData');
  $("#signature_capture").val(data);
  $('#submit').removeAttr('disabled');
});

$('#reset').click(function(e){
  $('#signature').jSignature('clear');
  var data = $('#signature').jSignature('getData');
  $('#signature_capture').val('');
  e.preventDefault();
});



randomFileName = 'contract-'+makeId() +'.php'; 
$('#signature-form small em').html(randomFileName); 
$('#file_name').val(randomFileName); 
function makeId() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  for( var i=0; i < 5; i++ )
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  return text;
}

$('#print-preview').click(function(e){
  printPage('../demo.php');
  e.preventDefault();
});
function closePrint () {
  document.body.removeChild(this.__container__);
}
function setPrint () {
  this.contentWindow.__container__ = this;
  this.contentWindow.onbeforeunload = closePrint;
  this.contentWindow.onafterprint = closePrint;
  this.contentWindow.focus(); // Required for IE
  this.contentWindow.print();
}
function printPage (sURL) {
  var oHiddFrame = document.createElement("iframe");
  oHiddFrame.onload = setPrint;
  oHiddFrame.style.visibility = "hidden";
  oHiddFrame.style.position = "fixed";
  oHiddFrame.style.right = "0";
  oHiddFrame.style.bottom = "0";
  oHiddFrame.src = sURL;
  document.body.appendChild(oHiddFrame);
}

$('body').niceScroll({
  cursoropacitymin: 0.5,
  cursoropacitymax: 1,
  cursorwidth: "15px",
  cursorborder: "1px solid rgba(255,255,255,0.5)", // css definition for cursor border
  cursorborderradius: "3px", // border radius in pixel for cursor
  scrollspeed: 60, // scrolling speed
  mousescrollstep: 60, // scrolling speed with mouse wheel (pixel)
  bouncescroll: true
});

$(document).scrollsnap({
  snaps: '#mceu_13',
  proximity: 85
});

// Lazy Load
//$('img, svg').lazyload();
