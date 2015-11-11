// WYSIWYG editor for contract copy
tinymce.init({
  selector: "#contract_html",
  content_css : "http://vileworks.com/contract/generator/css/editor-style.css",
  min_height: 300,
  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table contextmenu paste"
  ],
  toolbar: "code undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent"
});

// Set UNIX timestamp as file_name
unix = Math.round(+new Date()/1000);
// unix += '.php';
//$('#signature-form small em').html(unix);
$('#file_name').val(unix);

// Put the various data in the same form as download button
$('#signature-form').submit(function(){
  tinyMCE.triggerSave(); // Put tinyMCE contents back in textarea!
  $('#contract_html_capture').val( $('#contract_html').val() );
  $('#signature_capture').val( $('#signature').jSignature('getData') );
  $('#client_email_capture').val( $('#client_email').val() );
  $('#dev_email_capture').val( $('#dev_email').val() );
});

// jSignature
$('#signature').jSignature();
var $sigdiv = $('#signature');
var datapair = $sigdiv.jSignature('getData', 'svgbase64');

// Disable submit if signature is left empty
$('#submit').attr('disabled','disabled');
$('#signature').bind('change', function(e) {
  $('#submit').removeAttr('disabled');
  // Redundant if tinyMCE is used
  // $("#signature_capture").val($('#signature').jSignature('getData'));
});
// Redundant if tinyMCE is used
// $('#html_capture').val($('#input-html').val());
// $('#input-html').bind('input propertychange', function(e) {
//   $('#html_capture').val($(this).val()).attr('type','text');
// });

// Reset sigature button
$('#reset').click(function(e){
  $('#signature').jSignature('clear');
  var data = $('#signature').jSignature('getData');
  $('#signature_capture').val('');
  e.preventDefault();
});

// Set a random name for the file to be downloaded
// randomFileName = 'contract-'+makeId() +'.php';
// $('#signature-form small em').html(randomFileName);
// $('#file_name').val(randomFileName);
// function makeId() {
//   var text = "";
//   var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
//   for( var i=0; i < 5; i++ )
//     text += possible.charAt(Math.floor(Math.random() * possible.length));
//   return text;
// }


// Print preview of external demo page
$('#print-preview').click(function(e){
  printPage('../demo.html');
  e.preventDefault();
});
//From https://developer.mozilla.org/en-US/docs/Printing#Print_an_external_page_without_opening_it
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
function setPrint () {
  this.contentWindow.__container__ = this;
  this.contentWindow.onbeforeunload = closePrint;
  this.contentWindow.onafterprint = closePrint;
  this.contentWindow.focus(); // Required for IE
  this.contentWindow.print();
}
function closePrint () {
  document.body.removeChild(this.__container__);
}

// Nice Scroll
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

// Scroll Snap to editor
$(document).scrollsnap({
  snaps: '#mceu_13',
  proximity: 85
});

// Lazy Load
$('img, svg').lazyload();
