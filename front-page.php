<?php
get_header();//ヘッダ-を表示
?>
<div id="firstview">
  <div id="bg">
    <div id="gradient1"></div>
      <div id="gradient2"></div>
        <div id="gradient3"></div>
          <div id="gradient4"></div>
            <div id="gradient5"></div>
              <div id="gradient6"></div>
                <div id="gradient7"></div>
                  <div id="gradient8"></div>
                    <div id="gradient9"></div>
                <dev class="fvtitle">Interaction.</div>
                </div>
  </div>
</header>

<main>
    <section class="contents" id="Contents">
      <div class="wrap">
      <p>目次　Contents</p>
      <ul>
        <li><a href="#Concept">-ポートフォリオのコンセプト</a></li>
        <li><a href="#Art01">-作品01.UXデザイン課題 「学生が使う割り勘アプリ」</a></li>
        <li><a href="#Art02">-作品02.映像作家「名嘉真　法久」さまのWebサイト制作</a></li>
        <li><a href="#Profile">-自己紹介</a></li>
      </ul>
    </div>
    </section>
    <section class="concept" id="Concept">
      <div class="wrap">
        <h2>-ポートフォリオのコンセプト</h2>
        <p>タイトルとしたInteractionは、交流、相互作用などの意味を持っています。</p>
        <p>私は美大卒でも、デザインの専門学校を卒業しているわけでもありません。しかし、むしろそれを活かして、大学では多くを学びました。</p>
        <p>毎年の必修科目である文芸表現を根として、編集、詩作、歌詞創作、マーケティング企画、デザイン、Web表現、動画などの講義を、実に幅広く取って、学生時代を過ごしています。</p>
        <p>加えて、高校時代にゲームプログラミングを専攻していました。幅広いメディアを学んだことで、反応する画面の表現や、反応そのものをデザインしたいと考え、このコンセプトにしました。</p>
        <h2>-なめらかな等差グラデーション</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ColorGuide.png" alt="alt">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gradi.png" alt="alt">
        <p>トップページのイメージ、アクセントの色はグラデーションから作成しています。感覚で決めた色合いではなく、ある色とある色の中間色を分割することによって、均一に色と色が交差し、なめらかに交流するさまを表しました。</p>
        <p>グラデーションが持っていた質感を損なわいまま、削ぎ落とされた色でもなめらかに見えるように、等差で色を取っています。</p>
        <h2>-奥へと道が続いているようなアニメーション</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/move01.png" alt="alt">
        <p>JavaScriptによってカーソルの位置を取得し、スタイルを書き換えています。初期位置は中央となっていますが……</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/move02.png" alt="alt">
        <p>マウスカーソルを端に寄せると、四角形が動きます。縦軸と横軸、四角形のサイズに合わせて値が変わるようにしています。これによって、小さい四角形は、より大きい四角形をはみ出さないように動きます。</p>
        <p>反応、交流といったテーマを表す方法として、上記のようにアニメーションを実装しました。</p>
      </div>
    </section>
    <section class="art01" id="Art01">
      <div class="arttitle"><div class="flexcontainer"><p>-UXデザイン課題 「学生が使う割り勘アプリ」</p><p>ContentNo.1</p></div></div>
      <div class="topview">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01/topPhoto.jpg" alt="alt">
        <div class="mockup">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01/iPhonemockup.png" alt="alt">
        </div>
        <p class="copy">ゲームのようにたのしく割り勘できるアプリ</p>
    </div>

    <div class="wrap">
      <h2>-楽しんで割り勘できるアプリ</h2>
      <p>私は「ゲーム化によって、楽しく効率化する割り勘アプリ」をコンセプトとして、スマホ向けアプリケーション『わるれっと』をデザインしました。</p>
      <p>「わるれっと」には、主に3つの機能を設定したことで、課題要件に対応したアプリの画面と遷移を制作しました。</p>

      <div class="flexicon">
          <div class="iconitems"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/01/calc.png" alt="alt"></div>
          <div class="iconitems"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/01/roulette.png" alt="alt"></div>
          <div class="iconitems"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/01/money.png" alt="alt"></div>
          <p>支払う金額を自動で計算する</p>
          <p>ルーレットによって、</br>あまりを支払う人を決定できる</p>
          <p>キャッシュレス割り勘できる</p>
      </div>
      <h2>-ルーレットでゲーム化し、コミュニケーションを効率よく</h2>
      <div class="flexcontainer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01/mock01.png" alt="alt">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01/mock02.png" alt="alt">
      </div>
      <p>私は割り勘を行う際の課題はコミュニケーションであり、あまりをどう決めて支払うかだと考えました。</p>
      <p>学生時代に、とくに初対面の3〜5人での飲み会で困った経験があります。帰る直前に、どう払うかレジ前で話し合いになりました。その場ではぴったりの割り勘として決まりましたが、一円単位で割り勘するのは時間がかかり、結局、主催者が多く支払っていました。</p>
      <p>わるれっとでは選ばれた人は勝ち残り、最後まで選ばれなかった人が敗者となって、あまり金額を支払います。この機能によって、公平性を保ったまま割り勘できます。</p>
      <p>ルーレットによるゲーム化によって、割り勘する際の円滑なコミュニケーションを助けます。</p>
      <h2>-銀行口座と連携し、支払いも効率化</h2>
      <div class="flexcontainer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01/mock03.png" alt="alt">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01/mock04.png" alt="alt">
      </div>
      <p>円にあるそれぞれの欠片を選択すると、設定したユーザーのバーコードと、読み取りボタン（カメラが起動しバーコードを読み取るため）が表示されます。</p>
      <p>ユーザーはここから、同じ「わるれっと」を入れている人が表示しているバーコードを読み取ったり、読み取ってもらったりします。支払いを行う際にも、銀行口座の情報を入力することで、アプリ内で直接行えます。</p>
      <p>以上の機能によって、「わるれっと」は、たのしく割り勘できるアプリとして、学生の課題を解決します。</p>
  </section>
  <section class="art02" id="Art02">
    <div class="arttitle"><div class="flexcontainer"><p>-映像作家「名嘉真　法久」さまのWebサイト制作</p><p>ContentNo.2</p></div></div>
    <div class="topview">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02/nakamaWeb.jpg" alt="alt">
      <p class="copy">ポップだけどチープじゃないWebサイト</p>
  </div>
  <div class="wrap">
    <h2>-ひとめ見ただけで作風が伝わるように</h2>
    <p>サイト制作にあたっての課題は「一人の映像作家の作風を、どうすればWebページから伝えられるか」でした。</p>
    <p>閲覧者として、依頼を送りたいと考えている人たちと、Web上から名前を検索して辿り着いた人たちを想定しています。それぞれに対して、アピールできるWebサイトにしたいと感じていました。</p>
    <h2>-サイトの要件を整理</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02/pagelist.png" alt="alt">
    <p>必須ページの中で、分量があるものはWorks(制作実績)のみだったので、他のページはランディングページのようにひとまとめにし、Worksページだけを独立させる構成にしました。Worksの一部をトップページに表示させることで、遷移せずにほしい情報にアクセスできるようデザインしています。</p>
    <h2>-ファーストビューのロゴ制作</h2>
    <div class="flexcontainer">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02/01.jpg" alt="alt">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02/02.jpg" alt="alt">
    </div>
    <p>トップページに配置するロゴは、ネオン風を提案しました。</p>
    <p>いただいた制作実績のリストにレトロ風のものが多く、テイストを合わせることで、作家性をより強調できると考えたためです。屋号の「ナカマオフィス」を使ってほしいとのご要望があり、アルファベットでロゴを制作しています。色合いは味のある暗めのオレンジと、コントラストをつくるために明るい緑を選択しました。</p>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02/03.jpg" alt="alt">
    <p>テキストだけでは、作家性はもちろん、映像作家であることすら伝わらないことが課題でした。</p>
    <p>そこで、フィルムとハサミのモチーフを追加し、映像作家であることを補足しています。ロゴは高評価を得て、トップページに採用することを快諾していただきました。</p>
    <p>背景の追加も行い、最初のイメージが固まったことで、サイト全体が目指すべきデザインの方向性も定まりました。</p>
    <h2>-ポップだけどチープじゃない</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02/04.jpg" alt="alt">
    <p>とくにこだわったのは、トップページのWorks欄です。角を丸くし、グレーのドロップシャドウをかけることで「古いテレビが暗がりで光っている」ように見えます。</p>
    <div class="gif"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/02/sample.gif" alt="alt"></div>
    <p>また、リンクにマウスを置いた際、色が分かれ文字がブレるようにアニメーションを入れています。ドットタッチのフォントもページ全体で使用しました。一貫して「作風を伝えること」をテーマに、ポップだけどチープじゃないサイトを設計しています。</p>
    <p>実際のページは、<a href="https://nakamanorihisa.jp">こちら</a>から確認できます。</p>
</section>
  <section class="profile" id="Profile">
  	<?php
  		$page_id = get_page_by_path('profile'); // profileスラッグの固定ページを取得
    	$page_id = $page_id->ID; // 投稿オブジェクトからIDを取得
  		$page = get_post($page_id, 'OBJECT', 'raw'); //指定のページIDから情報を取得
  		$page_include = apply_filters( 'the_content',$page->post_content); //ページの本文をフィルターフックで整形
  	?>
    <div class="wrap">
    <h2>-自己紹介</h2>
    <div class="flexcontainer">
			<div class="icon">
				<img src="<?php if (has_site_icon()) echo get_site_icon_url(); //サイトアイコンがあるなら表示 ?>" alt="alt">
			</div>
			<div class="name">
				<h3>イシダ　カズキ</h3>
				<h1>石田　一樹</h1>
			</div>
    <div class="contact">
        <p>080-5969-9566</p>
        <p>1721005sh@odai.tais.ac.jp</p>
      </div>
		</div>
		<?php
			echo $page_include;
		?>
  </div>
  </div>
</section>
</main>

<?php
get_footer();//フッターを表示
?>
