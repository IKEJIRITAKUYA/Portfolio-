<?php get_header() ;?>

<main class="content">

      <!-- mv -->
      <div class="mv">
        <div class="mv-container">
          <h1>TAKUYA IKEJIRI</h1>
          <h2>Portfolio Site</h2>
        </div>
      </div>
      <!-- /mv -->

      <!-- works -->
      <section class="works section" id="works">
        <div class="container">
          <h2 class="title">WORKS</h2>
          <div class="works-list">
            <a class="works-item" href="works-1.html">
              <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/works/html1.png" alt="html1" /></div>
              <p class="works-name">コーポレートサイト</p>
              <p class="works-info">HTML/CSS/JavaScript/jQuery/レスポンシブ対応</p>
            </a>
            <a class="works-item" href="works-3.html">
              <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/works/wordpress1.png" alt="WordPress" /></div>
              <p class="works-name">美容室のHP</p>
              <p class="works-info">WordPress</p>
            </a>
            <a class="works-item" href="works-6.html">
              <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/works/wordpress2.png" alt="WordPress2" /></div>
              <p class="works-name">大学のHP</p>
              <p class="works-info">WordPress/PHP</p>
            </a>
          </div>
        </div>
      </section>
      <!-- /works -->

      <!-- sevice -->
      <section class="sevice section" id="sevice">
        <div class="container">
          <h2 class="title">SERVICE</h2>
          <div class="sevice-list">
            <div class="sevice-item">
              <h3 class="sevice-name">ディレクション</h3>
              <p class="sevice-text-p">DIRECTION</p>
              <div class="sevice-img"><img src="<?php echo get_template_directory_uri(); ?>/img/sevice/keybo-do.png" alt="html1" /></div>
              <p class="sevice-info">お客様の要望をヒアリングし、現状の問題点を洗い出し、効果的なプランを作成いたします。制作ではデザインに入る前の事前の準備が特に重要になります。何が必要で何が必要でないのかを判断し、費用対効果の高いWebサイトを作るための土台を作ります。</p>
            </div>
            <div class="sevice-item">
              <h3 class="sevice-name">ウェブデザイン</h3>
              <p class="sevice-text-p">WEB DESIGN</p>
              <div class="sevice-img"><img src="<?php echo get_template_directory_uri(); ?>/img/sevice/PCmaus.png" alt="WordPress" /></div>
              <p class="sevice-info">ヒアリングに基づいたプランに沿って、デザインを作成いたします。人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。インターフェースの重要性が増す中でデザインの役割を理解し、そのプランに最適な提案をさせていただきます。</p>
            </div>
            <div class="sevice-item">
              <h3 class="sevice-name">コーディング</h3>
              <p class="sevice-text-p">CODING</p>
              <div class="sevice-img"><img src="<?php echo get_template_directory_uri(); ?>/img/sevice/keybo-do.png" alt="WordPress2" /></div>
              <p class="sevice-info">デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。スマートフォンサイト、ワードプレスを使用した更新性の高いサイト、Javascriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。</p>
            </div>
          </div>
        </div>
      </section>
      <!-- /sevice -->

      <!-- skill -->
      <section class="skill section" id="skill">
        <div class="container">
          <h2 class="title">SKILL</h2>
          <div class="skill-list">
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skills/html.png" alt="html"></p>
              <div class="skill-body">
                <h3 class="skill-name">HTML/CSS</h3>
                <p class="skill-text">
                  スマホで見ても表示崩れのないレスポンシブ対応も可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skills/wordpress.png" alt="wordpress"></p>
              <div class="skill-body">
                <h3 class="skill-name">WordPress</h3>
                <p class="skill-text">
                  WordPress製の店舗HP・企業HP・メディアサイトなど、Webサイトを0から構築することが可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skills/js.png" alt="javascript"></p>
              <div class="skill-body">
                <h3 class="skill-name">JavaScript</h3>
                <p class="skill-text">
                  お問い合わせフォームや自動スクロールなど動きのあるWebサイトを作る事が可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skills/photoshop.png" alt="photoshop"></p>
              <div class="skill-body">
                <h3 class="skill-name">Adobe Photoshop</h3>
                <p class="skill-text">
                  Webサイトに必要不可欠なクリエイティブバナーを作ることが可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skills/jquery.png" alt="jquery"></p>
              <div class="skill-body">
                <h3 class="skill-name">jQuery</h3>
                <p class="skill-text">
                  Webサイトにフェードイン・フェードアウトなどリッチな動きをつけることが可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skills/xd.png" alt="adobexd"></p>
              <div class="skill-body">
                <h3 class="skill-name">Adobe XD</h3>
                <p class="skill-text">
                  Webサイトのデザインやワイヤーフレームを作ることが可能です。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /skill -->

      <!-- about -->
      <section class="about section" id="about">
        <div class="container">
          <h2 class="title">ABOUT</h2>
          <img class="photograph" src="<?php echo get_template_directory_uri(); ?>/img/beauty_1696653889867.jpeg" alt="">
          <div class="profile">
            <div class="profile-body">
              <p>池尻 拓也 (イケジリ タクヤ)</p>
              <h2>
                TAKUYA IKEJIRI
              </h2>
              <h3>あなたのビジョンをお実現します。<br>&emsp;&emsp;&emsp;&emsp;あなたのホームページを 低価格、高品質で提供します。</h3>
              <p>埼玉県在住。フリーランスとしてWeb制作をしております。<br>現在、個人店様・中小企業のお客様向けに、ホームページ作成などを行っています。
                「ホームページを作ってみたい」
                「デザインはあるけど、コーディングができない」
                「既存の静的サイトをWordPress化したい」
                「簡単な修正をしたいけど、どうすればいいかわからない」
                このようなお悩みは私にお任せください。<br>
                『お客様の成功をサポートすること』を大切にしておりますので、お客様と認識の不一致が無いように、コミュニケーションを密にとり、お客様の求めているものを忠実に再現し提供いたします。<br>
                お気軽にお問い合わせください。
              </p>
              
            </div>
          </div>
        </div>
      </section>
      <!-- /about -->

      <!-- contact -->
      <section class="contact section" id="contact">
        <div class="container">
          <h2 class="title">CONTACT</h2>
          <?php echo do_shortcode('[mwform_formkey key="16"]'); ?>
      </section>
      <!-- /contact -->
      <div class="page-top" id="js-page-top">
        <span class="material-icons-outlined">expand_less</span>
      
    </main>

    <?php get_footer() ;?>