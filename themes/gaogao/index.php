<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>ガオガオ</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
  <link rel="stylesheet" href="./css/style.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <script src="./index.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
  
  <?php wp_head(); ?>
</head>
<body>

  <header id="header">
    <div class="header-in">   
      <div class="header-logo">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
        </a>
      </div>

      <div id="nav-toggle">
        <div>
            <span></span>
            <span></span>
            <span></span>
        </div>
      </div>

    <div id="gloval-nav">
        <nav>
            <ul class="global-list">
                <li class="global-item"><a href="#mission">Mission</a></li>
                <li class="global-item"><a href="#service">Service</a></li>
                <li class="global-item"><a href="#information">Information</a></li>
                <li class="global-item"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
  </div>

  <div class="header-img">
    <img src="<?php echo get_template_directory_uri(); ?>/images/Top-image.jpg" alt="">
  </div>
  </header>

  <section class="mission" id="mission">
    <div class="section-title">
      <img src="<?php echo get_template_directory_uri(); ?>/images/mission.svg" alt="">
    </div>
    <div class="mission-wrap">
      <div class="mission-content">
        <p>
        IT技術を駆使し、顧客体験を最適化し <br>
        企業と顧客の新しい関係性を構築します。 <br>
        ブランド体験そのものを変革することで、<br>
        顧客行動の変化を生み出し、<br>
        市場の開拓・拡大を実現します。
        </p>
      </div>
      
    </div>
  </section>

  <section class="service" id="service">
    <div class="service_bg"></div>
    <div class="section-title">
      <img src="<?php echo get_template_directory_uri(); ?>/images/service.svg" alt="">
    </div>
      <ul class="service_list">
        <li class="service_list_item">
          <span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Service01.jpg" alt="">
          </span>
          <div class="service-disc">
            <h3>広告代理業</h3>
            <p class="service-disc_content">IT技術を最大限に活用し利益率の高い顧客を判断、最適な広告運用を提供します。</p>
          </div>
        </li>
        <li class="service_list_item">
          <span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Service02.jpg" alt="">
          </span>
          <div class="service-disc">
            <h3>情報提供サービス</h3>
            <p class="service-disc_content">SNSやオウンドメディアなどを駆使し、顧客に最適なブランド体験を提供します。</p>
          </div>
        </li>
        <li class="service_list_item">
          <span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Service03.jpg" alt="">
          </span>
          <div class="service-disc">
            <h3>マーケティング</h3>
            <p class="service-disc_content">IT技術とガオガオのノウハウを活かし、マーケティング効果の最大化を目指します。</p>
          </div>
        </li>
      </ul>
  </section>

  <section class="information" id="information">
    <div class="section-title">
      <img src="<?php echo get_template_directory_uri(); ?>/images/information.svg" alt="">
    </div>

    <div class="information_main">
      <div class="information_main_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.1576202206998!2d139.681810615266!3d35.500380580236815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185dfb985c3ca1%3A0xc0d162d3a32429b4!2z44CSMjMwLTAwNDgg56We5aWI5bed55yM5qiq5rWc5biC6ba06KaL5Yy65pys55S66YCa77yU5LiB55uu77yR77yX77yQ4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1586761347964!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="information_main_list">
        <ul>
          <li>会社名：株式会社ガオガオ</li>
          <li>所在地：神奈川県横浜市鶴見区本町通4-170-10-1F</li>
          <li>アドレス：</li>
          <li>資本金：300万円</li>
          <li>代表取締役社長：山下　泰由樹</li>
          <li>従業員：3人</li>
        </ul>
      </div>
    </div>

  </section>

  <section class="contact" id="contact">
    <div class="section-title">
      <img src="<?php echo get_template_directory_uri(); ?>/images/contact.svg" alt="">
    </div>
    <form>
      <table>
        <tbody>
          <tr>
            <th>お名前</th>
            <td>
              <input type="text" placeholder="鈴木　一郎">
            </td>
          </tr>
          <tr>
            <th>フリガナ</th>
            <td>
              <input type="text" placeholder="スズキ　イチロウ">
            </td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>
              <input type="text" placeholder="01-2345-6789">
            </td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>
              <input type="text" placeholder="suzuki@exanple.com">
            </td>
          </tr>
          <tr>
            <th>お問い合わせ内容</th>
            <td>
              <textarea name="contents" rows="10" placeholder="お問い合わせ内容を記載してください。"></textarea>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
    <div class="btnarea">
      <input class="btn" type="submit" value="送信">
    </div>
  </section>

  <footer>
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon.png" alt="">
      <p>Copyright © ガオガオ All Rights Reserved.</p>
    </div>
    <div id="page_top">
      <a href="#header"></a>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>