$('#left-button').click(function() {
      event.preventDefault();
      $('#content').animate({
        scrollLeft: "-=150px"
      }, "fast");
});
   
$('#right-button').click(function() {
      event.preventDefault();
      $('#content').animate({
        scrollLeft: "+=150px"
      }, "fast");
});
   

$('#left-button1').click(function() {
      event.preventDefault();
      $('#content1').animate({
        scrollLeft: "-=150px"
      }, "fast");
});
   
$('#right-button1').click(function() {
      event.preventDefault();
      $('#content1').animate({
        scrollLeft: "+=150px"
      }, "fast");
});
   
$('#left-button2').click(function() {
      event.preventDefault();
      $('#content').animate({
        scrollLeft: "-=500px"
      }, "fast");
});
   
$('#right-button2').click(function() {
      event.preventDefault();
      $('#content2').animate({
        scrollLeft: "+=150"
      }, "fast");
});
   
