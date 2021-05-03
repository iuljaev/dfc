function countdown(){
    var now = new Date();

    // =============== COUTNDOWN OPTION ============= //

    var targetdate = new Date("January 01, 2015 17:50:00");
    
    // ========== END COUNTDOWN OPTION ============== //
    
    var timedifference = targetdate.getTime() - now.getTime();




    var s = Math.floor(timedifference / 1000);
    var m = Math.floor(s / 60);
    var h = Math.floor(m / 60);
    var day = Math.floor(h/24);

    s %=60;
    m %= 60;
    h %= 24;

    if(h<10){
        h = "0" + h;
    }
    if(m<10){
        m = "0" + m;
    }

    if(s < 10) {
        s = "0" + s;
    }    
    if(day<10){
        day = "0" + day;
    }
    $('#countdown').html(day + ":" + h + ":" + m + ":" + s);
     var timer = setTimeout('countdown()',1000);

    if (timedifference <= 0) {
        clearTimeout(timer);
    	$('#countdown').html("00:00:00:00");
    }

}
$(document).ready(function(){
	countdown();
});

