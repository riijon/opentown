var playrecord = 0;
$('#refresh1').on('click', function () {
  console.log(playrecord);

  if( ( playrecord % 2 ) !== 0 ) {
    $(this).stop();
  }else{
    if (!$(this).is(':animated')) {
      $(".complete").remove();
      if(playrecord === 0){
        $("#refresh2").after("<div class='play_desc pending'>playing.</div>");
      }
    }
    $(".start").remove();
    $(this).rotate(1440, {
      duration: 18000,
      easing: 'linear',
      complete: function() {
        $(".pending").remove();
        $(this).after("<div class='play_desc complete'>restart.</div>");
      }
    });
  }
  playrecord ++;
});

(function (window, $) {
  'use strict';

  $.fn.useSound = function (_event, _id) {
    var se = $(_id);
    se[0].currentTime = 0;
    var nowTime = 0;
    this.on(_event, function(){
      console.log(se[0].currentTime);
      if(se[0].currentTime > nowTime){
        se[0].pause();
        nowTime = se[0].currentTime;
      }else{
        se[0].play();
      }
      return false;
    });
  };

})(this, this.jQuery);


//Execute
$('#soundbtn').useSound('click', '#btnsound');