<?php get_header(); ?>

<div class="wrapper">
  <div class="member">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/member.png" alt="">
  </div>
  <section id="about">
    <div class="left">
      <video src="<?php echo get_template_directory_uri(); ?>/assets/img/movie/MVI_5273_1.mp4" autoplay loop muted playsinline><p>
        動画を再生するにはvideoタグをサポートしたブラウザが必要です。</p></video>
      <img class="tv" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/poster.png" alt="">
    </div>
    <div class="right">
      <div class="description mt24">
        <h2>OPEN TOWN</h2>
        <p class="w80 mauto">仙台の本町でデザイン、アパレル販売、撮影キャスティング、イベント運営などの業務を行なっております。</p>
      </div>
    </div>
  </section>
  <section id="work">
    <div class="left music">
      <a id="soundbtn">
        <img id="refresh1" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/record.png" alt="refresh" width="200px">
        <img id="refresh2" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rekodoplyer.png" alt="refresh" width="200px">
        <div class="play_desc start">start.</div>
      </a>
    </div>
    <div class="right">
      <div class="description">
        <h2 class="fs30">WORK</h2>
        <ul>
          <li class="fs25"><a href="/works">Design/Photo/Movie/Web</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="service">
    <h2 class="service-title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_02.svg" alt="">
    </h2>
    <div class="container">
      <div class="item">
        <a href="http://spacehc.info" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/space_hc.jpg" alt=""></a>
        <p>仙台の本町1丁目にあるイベントスペースです。簡単なホームパーティーからヨガ、ワークショップなど幅広くお使い頂けます。</p>
      </div>
      <div class="item">
        <a href="http://spacehc.info" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_hc.jpg" alt=""></a>
        <p>仙台の本町1丁目にある撮影スタジオです。機材貸し出し、カラー背景などもご用意致しております。</p>
      </div>
      <div class="item">
        <a href="http://highcolorh.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/highcolorh.jpg" alt=""></a>
        <p>SNAP/SALON/LIFE/MUSIC MUG.</p>
      </div>
    </div>
    <div class="container">
      <div class="item">
        <a href="https://www.instagram.com/shop__hc/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/shop_hc.jpg" alt=""></a>
        <p>国内のブランド、古着、雑貨を取扱うセレクトショップ。</p>
      </div>
      <div class="item">
        <a href="https://www.instagram.com/amerie_thenail/" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ameri_the_nail.jpg" alt=""></a>
        <p>映画「アメリ」をコンセプトにしたワンカラージェル専門店。アメリのように、あなたの人生にこっそりおジャマして かわいいのお手伝いをします。</p>
      </div>
      <div class="item">
        <a href="https://www.instagram.com/plateplace/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/plate_place.jpg"
                                                                             alt=""></a>
        <p>TechnoやHouseを中心に自分たちの好きな音楽や、人に聴いてほしいと思うレコードを取り揃えてるレコードショップ。</p>
      </div>
    </div>
  </section>
  <section id="news">
    <h2 class="service-title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/instagram.svg" alt=""></h2>
    <div class="container instagram"></div>
  </section>
</div>

<?php get_footer();