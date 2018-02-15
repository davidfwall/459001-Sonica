function clock() { 

$(".clock").each(function(){
	var timezone = $(this).data('timezone');
  var h = $(this).find(".hour");
  var m = $(this).find(".minute");
       
  var t = moment.tz(timezone),
      a = t.minutes() * 6,
      o = t.hours() % 12 / 12 * 360 + (a / 12);
  h.css("transform", "rotate(" + o + "deg)");
  m.css("transform", "rotate(" + a + "deg)");
 
 	var ampm = t.format("a");
	$(this).addClass(ampm);
});
  
}
function refreshClock() {
  clock(), setTimeout(refreshClock, 1000)
}
refreshClock();