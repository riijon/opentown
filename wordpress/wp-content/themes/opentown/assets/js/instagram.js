$(function(){
  var $container = $(".instagram");
  var html = "";

  $.ajax({
    url: "/instagram.php",//PHPファイルURL
    type:"POST",
    dataType: "json"
  }).done(function(data){
    //通信成功時の処理
    console.log('instagram connect');
    $.each(data.data,function(i,item){
      var imgurl = item.images.low_resolution.url; //低解像度の画像のURLを取得
      var link = item.link; //リンクを取得
      html += "<div class='item'><a href='" + link + "' target='_blank'><img src='" + imgurl + "'></a></div>";
    });
  }).fail(function(){
    //通信失敗時の処理
    console.log('instagram fail');
    html = "<li>画像を取得できまへん。</li>";
  }).always(function(){
    //通信完了時の処理
    console.log('instagram done');
    $container.html(html);
  });
});