$(function(){var a=$(".instagram"),l="";$.ajax({url:"/instagram.php",type:"POST",dataType:"json"}).done(function(a){console.log("instagram connect"),$.each(a.data,function(a,n){var i=n.images.low_resolution.url,o=n.link;l+="<div class='item'><a href='"+o+"' target='_blank'><img src='"+i+"'></a></div>"})}).fail(function(){console.log("instagram fail"),l="<li>画像を取得できまへん。</li>"}).always(function(){console.log("instagram done"),a.html(l)})});