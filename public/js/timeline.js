
function next(){
    var $bar = $(".ProgressBar");
    if ($bar.children(".is-current").length > 0) {
        $bar.children(".is-current").removeClass("is-current").addClass("is-complete").next().addClass("is-current");
    } else {
        $bar.children().first().addClass("is-current");
    }
}

function previous(){
    var $bar = $(".ProgressBar");
    if ($bar.children(".is-current").length > 0) {
        $bar.children(".is-current").removeClass("is-current").prev().removeClass("is-complete").addClass("is-current");
    } else {
        $bar.children(".is-complete").last().removeClass("is-complete").addClass("is-current");
    }
}

var NowProcessing = 2;
var i = 0;
function change(){
    if(i%2==0){
        next();
        i++;
    }
    else{
        previous();
        i=0;
    }
}

$(document).ready(function() { 
    
    $(function () {
        for(var j=0;j<NowProcessing;j++){
            next();
        }
        setInterval(function(){change(i)},2000);
    });
    
    $(function () {
        var austDay = new Date();
        austDay = new Date(2019, 5 - 1, 19);
        $('#timer_js').countdown({until: austDay, 
        layout: '{dn} 天 {hn} 小時 {mn} 分 {sn} 秒'});
    });
    
});
