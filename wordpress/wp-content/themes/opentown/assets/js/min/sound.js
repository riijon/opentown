var playrecord=0;$("#refresh1").on("click",function(){console.log(playrecord),playrecord%2!=0?$(this).stop():($(this).is(":animated")||($(".complete").remove(),0===playrecord&&$("#refresh2").after("<div class='play_desc pending'>playing.</div>")),$(".start").remove(),$(this).rotate(-1440,{duration:18e3,easing:"linear",complete:function(){$(".pending").remove(),$(this).after("<div class='play_desc complete'>restart.</div>")}})),playrecord++}),function(e,o){"use strict";o.fn.useSound=function(e,r){var n=o(r),t=n[0].currentTime=0;this.on(e,function(){return console.log(n[0].currentTime),n[0].currentTime>t?(n[0].pause(),t=n[0].currentTime):n[0].play(),!1})}}(0,this.jQuery),$("#soundbtn").useSound("click","#btnsound");