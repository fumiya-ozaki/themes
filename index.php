<?php get_header();?>
  <nav class="nav-breadcrumb" id="graphic">
    <ul>
      <li class="now"><img class="image1" src="<?php echo get_template_directory_uri();?>/images/graphic1.png" width="860" height="300" alt="「ペンギンのすみか」が4月25日にオープン！遊びに来てね！"></li>
      <li><img class="image2" src="<?php echo get_template_directory_uri();?>/images/graphic2.png" width="860" height="300" alt="ZOO LOGICALにパンダが登場！5月10日から6月29日まで"></li>
      <li><img class="image3" src="<?php echo get_template_directory_uri();?>/images/graphic3.png" width="860" height="300" alt="トラさんが「みんなの来場を待ってるよ！」と言っている。"></li>
    </ul>
  </nav>

  <div class="contents">
    <main>
      <section>
        <h2>お知らせ</h2>
        <ul class="contents-news">
          <li><time datetime="2014-07-25">2014年07月25日</time>動物園にライオンがやってきます。</li>
          <li><time datetime="2014-05-10">2014年05月10日</time>緊急企画「パンダ展」を開催します。</li>
          <li><time datetime="2014-04-25">2014年04月25日</time>ゴールデンウィーク展「ペンギンのライフスタイル」を開催します。</li>
        </ul>
      </section>
    </main>
<?php get_sidebar(); ?>
  </div>

<?php get_footer();