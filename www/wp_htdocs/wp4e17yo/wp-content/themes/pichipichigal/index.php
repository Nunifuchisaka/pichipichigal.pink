<?php get_header(); ?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    get_template_part('content');
  endwhile;
else :
  get_template_part( 'none' );
endif;
?>

<section class="section_1 l_mg-t_40px">
  <h1 class="section_1__h1">がいよう</h1>
  <div class="section_1__1">
    <p>ドラクエライバルズを楽しむためのエンジョイギルドです。ベテラン以上の肩書の人は全員知り合いです。</p>
  </div>
</section>

<section class="section_1 l_mg-t_40px">
  <h1 class="section_1__h1">はじめてのかたへ</h1>
  <div class="section_1__1">
    <p>準備中です。アンケート結果次第。</p>
  </div>
</section>

<section class="section_1 l_mg-t_40px">
  <h1 class="section_1__h1">ぎゃるのみんなへ</h1>
  <div class="section_1__1">
    <p>いい感じのデッキができたらゲーム内のギルド機能で共有お願いします！</p>
  </div>
</section>

<section class="section_1 l_mg-t_40px">
  <h1 class="section_1__h1">そのた</h1>
  <div class="section_1__1">
    <p>・安心安全なギルドを目指します。2017年11月9日時点では承認は知り合いの知り合いまででお願いします。</p>
    <p>・<a href="https://twitter.com/nunifuchisaka">ギルドマスターのTwitterはこちら</a></p>
  </div>
</section>

<section class="section_1 l_mg-t_40px">
  <h1 class="section_1__h1">ちゅうい</h1>
  <div class="section_1__1">
    <p>出会い行為は即脱退です。</p>
    <p>万が一問題が発生した場合はサブマスターや他メンバーと協議の上対処いたします。</p>
  </div>
</section>

<?php get_footer();
