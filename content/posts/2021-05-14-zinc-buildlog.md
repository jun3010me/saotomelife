---
title: 自作キーボード Zinc ビルドログ
author: 魚住 惇
type: post
date: 2021-05-13T21:38:14+00:00
excerpt: 自作キーボードのビルドログです。
url: /zinc-buildlog-21234.html
thumbnail: /wp-content/uploads/2021/05/4A2D33ED-9E28-468E-81C3-85D5F59FB5A6_1_105_c.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 商品レビュー

---
生きることにこだわりを。魚住惇です。

今回はこだわりらいふNewsLetterで話してきた自作キーボード沼の過程でZincというキーボードに出会い、組み立てることができたので、ビルドログとして記事にします。

## Zincを選んだ理由

NewsLetterにも書いたんですが、まず僕の指がロウスタッガードのレイアウトに慣れ親しみ過ぎてしまって、カラムスタッガードに馴染めなかったことが挙げられます。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://kodawari.substack.com/p/3-?r=hlrq6&utm_campaign=post&utm_medium=web&utm_source=copy">}}
</div></figure> 

僕の本心としては、<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">カラムスタッガードに類する変態キーボードたちを使いこなしたいという思いがある</span>のですが、どうも僕の運指が一般的なロウスタッガードから離れられないなと判断しました。 また、格子状のオーソリニアは試したことがありませんが、ロウスタッガードの左上から右下に動かす流れに指が慣れてしまっている以上、オーソリニアを試すことを先送りしました。

この段階で候補に残ったのが、Zincと7sProです。ただし、HHKB型分割キーボードは2年前に既にChoco60を作ってしまったので、どうせお金を出すならと思いZincにしました。

でもほんと、自作キーボードを作っていると、他にも色々と作ってみたくなります。本当に沼。<span style="text-decoration: underline;">是非案件を受けたいです。キーボード製作者の方、ご連絡をお待ちしています。キットをお送りいただければビルドログを書きます。</span>

肝心なZincの在庫ですが、ずっと在庫なし状態が続いていました。ので、作者の[モンスクオブファンク][1]さんにお願いして、予備パーツを元に在庫を復活させていただき、注文しました。 ありがとうございました。

## Zincの組み立てに必要なもの

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/46A67AFB-8BEA-4F86-A447-6702B472FD1F_1_105_c.jpeg" alt="" class="wp-image-21237"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

Zincの商品ページには、キットに含まれているものと、別途購入する必要があるものが紹介されています。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="576" src="/wp-content/uploads/2021/05/4BEF0D9D-89A9-478A-B5ED-8703DF961B31_1_105_c-1024x576.jpeg" alt="" class="wp-image-21238"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

<blockquote class="wp-block-quote is-style-default">
  <p>
    基板
  </p>
  <p>
    アクリルトッププレート
  </p>
  <p>
    ボトムプレート
  </p>
  <p>
    フットプレート大
  </p>
  <p>
    フットプレート小
  </p>
  <p>
    スペーサー・ネジ類
  </p>
  <p>
    クッションシール
  </p>
  <p>
    TRRSジャック
  </p>
  <p>
    リセットスイッチ
  </p>
  <p>
    ダイオード
  </p>
  
  <cite>https://booth.pm/ja/items/1451314</cite>
</blockquote>

そしてこちらが別途購入が必要なものです。

<blockquote class="wp-block-quote">
  <p>
    Cherry MX互換スイッチ 48個（Cherry製、Gateron製、Kailh製など好みのもの←遊舎工房さん、TALP KEYBOARDさんに扱いあり）
  </p>
  <p>
    キーキャップ 48個（←TALP KEYBOARDさんに扱いあり）
  </p>
  <p>
    Pro Micro 2個（コンスルー推奨←遊舎工房さん、TALPキーボードさんに取扱あり）
  </p>
  <p>
    RGB YS-SK6812MINI-E 48個（オプション←遊舎工房さんに取扱あり）
  </p>
  <p>
    RGB LED WS2812B 12個（オプション）
  </p>
  <p>
    TRSケーブル（3.5mmステレオミニケーブル）
  </p>
  <p>
    USBケーブル（Micro USB Bタイプ⇔USB Aタイプなど）
  </p>
  
  <cite>https://booth.pm/ja/items/1451314</cite>
</blockquote>

僕は既にChoco60を組み立てたので、キーキャップとTRSケーブル、USBケーブルを使い回すことにしました。 もし必要な方は、[遊舎工房][2]さんや[TALP KEYBOARD][3]さんから購入すると良いと思います。

### キースイッチ

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/5F13F25A-4E28-4C5E-90C9-C212EA7D4F8E_1_105_c.jpeg" alt="" class="wp-image-21239"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

今回僕が選んだキースイッチは、Kailh BOX Silent スイッチです。遊舎工房さんから購入しました。<figure class="wp-block-embed is-type-link is-provider-埋め込み wp-block-embed-埋め込み">

<div class="wp-block-embed__wrapper">
  <a href="https://shop.yushakobo.jp/products/kailh-box-silent-switch">Kailh BOX Silent スイッチ</a>
</div></figure> 

  
我が家では子供が小さく、妻もうるさいタイプ音が苦手なことからサイレントなスイッチに限られました。  
また、僕自身がHHKBの45gやREALFORCEの35gに慣れてしまっているので、それ以上に重たい押下圧を避けました。Kailh BOX Silent スイッチは押下圧が35gだったので、リアフォに近い感覚だと判断して購入しました。  
組み上げてしばらく打ち込んでみた感覚でいうと、概ね満足しています。  
本当はタクタイル感があると良いなと思ったんですが、タクタイルで軽いスイッチが見つかりませんでした。(もしくは高価すぎて)

### Mill-Max ソケット

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/FE8F60D3-7418-4207-9BEC-78CEA93552F5_1_105_c.jpeg" alt="" class="wp-image-21240"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

ベリリウム銅とも呼ばれているマリオに出てくる土管のような形をしたパーツです。  
これはキースイッチのホットスワップ化に使います。  
最近の自作キーボードキットではキーソケットに対応しホットスワップ化を実現しているものが増えてきましたが、Zincはキースイッチを直接はんだ付けする基板だったため購入しました。<figure class="wp-block-embed is-type-link is-provider-埋め込み wp-block-embed-埋め込み">

<div class="wp-block-embed__wrapper">
  <a href="https://shop.yushakobo.jp/collections/accessory/products/a0500mm">Mill-Max ソケット 0305シリーズ (金メッキ/3.94mm)</a>
</div></figure> 

### ProMicro2つ

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/F7B09455-D7FD-4E95-9F6D-6995FE435F3D_1_105_c.jpeg" alt="" class="wp-image-21241"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

キーボードを制御するために必要なチップが取り付けられたProMicroがZincには2つ必要です。遊舎工房さんで2つ、コンスルー付きのを買いました。<figure class="wp-block-embed is-type-link is-provider-埋め込み wp-block-embed-埋め込み">

<div class="wp-block-embed__wrapper">
  <a href="https://shop.yushakobo.jp/collections/keyboard-parts/products/promicro-spring-pinheader">Pro Micro （コンスルー付き）</a>
</div></figure> 

### エポキシ接着剤

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/B4310E4B-B26B-4DCC-9A61-7B38E9919CCA_1_105_c.jpeg" alt="" class="wp-image-21242"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

2つの液体を混ぜ合わせることで接着剤を作る、エポキシ接着剤を買いました。これはProMicroのMicroUSB端子にケーブルの抜き差しをすることで端子がもげる問題を回避するためです。  
僕はChoco60の時に抜いたケーブルの端子にProMicroにあるべきUSB端子がちぎれた状態でくっついて絶望した過去があります。  
そんな経験をした僕が声高らかに言います。マグネットケーブルにしないなら、絶対に絶対にやった方がいい。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B000TGAR3K?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/41UVC1I1T4L._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B000TGAR3K?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener">セメダイン 5分硬化型エポキシ系接着剤 ハイスーパー5 80gセット CA-186</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=セメダイン 5分硬化型エポキシ系接着剤 ハイスーパー5&#038;tag=jun3010me-22" target="_blank" rel="noopener">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2Fセメダイン 5分硬化型エポキシ系接着剤 ハイスーパー5%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3Dセメダイン 5分硬化型エポキシ系接着剤 ハイスーパー5 "vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

### LED

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/9EEF80F4-6CA6-4345-8F95-2DD2A33749EA_1_105_c-1.jpeg" alt="" class="wp-image-21244"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

Zincは基板の表と裏にLEDをはんだ付けすることで、光らせることができます。キーボードが光る。男のロマンです。要不要じゃじゃないんです。ロマンです。

Zincの必要な部品の中に、

  * RGB YS-SK6812MINI-E 48個（オプション←遊舎工房さんに取扱あり）
  * RGB LED WS2812B 12個（オプション）

とあったんですが、このYS-SK6812MINI-Eという遊舎工房さんで取り扱ってるLEDの在庫が切れていたので、秋月電子さんで**SK6812MINI-Eを50個**ほど購入しました。 このLED、似た型番のSK6812MINIとは互換性がないため、購入時は型番の確認が必要です。**SK6812MINI-EとYS-SK6812MINI-Eはデータシートを見る限り同じ部品っぽかった**ので、こちらにしました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://akizukidenshi.com/catalog/g/gI-15478/">}}
</div></figure> 

WS2812BについてはZincの販売を委託しているBoothでも作者から購入できますし、遊舎工房さんや秋月電子さんから購入できます。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://akizukidenshi.com/catalog/g/gI-07915/">}}
</div></figure> 

## はんだ付け前の作業

それでは基板にダイオードをはんだ付けしましょう！と言いたいところですが、実際の作業より前にやっておくことがあります。

### エポキシ接着剤でProMicroを補強

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/74F597E6-3987-4C7A-95C9-F3B7E62BBF17_1_105_c.jpeg" alt="" class="wp-image-21247"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

先ほど紹介したエポキシ接着剤を適量出して、混ぜます。今回は爪楊枝を使いました。  
ぐるぐるかき混ぜて、その時に爪楊枝に付着した分をProMicroのMicroUSB端子の金具の外側にちょんっと付けました。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/E1563B21-54A7-43DC-881F-0E8E175FA939_1_105_c-1.jpeg" alt="" class="wp-image-21249"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

もげたら困る部分を中心に塗りたくりました。  
USBの端子部分と、コネクタをはんだ付けしてある両サイドの部分を固めてみました。  
ProMicroの両端の端子につかないように気をつけたつもりです。

固まるのに時間がかかるため、最初にこの作業をやっておく必要がありました。

### Mill-Maxソケットをキースイッチにセット

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/931232C4-25D2-4440-9C5C-D992B81DA2A7_1_105_c-1.jpeg" alt="" class="wp-image-21252"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

これがソケットです。指に乗っけてみても、かなり小さいことがわかります。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/DB3B55C0-4D41-4B87-AE6A-DA1B1DB9A90F_1_105_c-1.jpeg" alt="" class="wp-image-21254"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

これをキースイッチの端子に入れ込みます。土管の口の部分(太くなっている部分)がキースイッチ側です。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/A0C93437-2BB2-473D-8C8C-4A83983AAA50_1_105_c.jpeg" alt="" class="wp-image-21255"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

この作業をキースイッチの数分やりました。Zincは48個のキーがあるので合計96個刺しました。  
逆さにするとソケットが落ちることがあるので、キースイッチをなるべく横向き、裏向きにして置いておくと良いです。

## はんだ付け

ここでいよいよはんだ付けです。

### ダイオードのはんだ付け

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/2C84544E-53CA-4645-873E-73CA1E763451_1_105_c.jpeg" alt="" class="wp-image-21257"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

ダイオードは電流の向きを一方にする部品です。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/8432E84B-B6D6-4C9D-BD4F-0773BF59D0A5_1_105_c.jpeg" alt="" class="wp-image-21258"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

付属のダイオードには向きがあり、中央に黒い線、片方には緑の線が入っています。  
これを基板の三角形の先に横線が入っている方に緑の線がくるように差し込みます。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/6CB94520-E7AD-452A-BEE8-BC2FB6786C97_1_105_c.jpeg" alt="" class="wp-image-21259"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

基板の中にあるダイオードの部分に全部差し込むとこんな感じです。これを裏返してはんだ付けします。僕ははんだ付けする前に、ダイオードを差し込んだ後に少し斜めに折っておきました。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/CCEE17F2-5F20-44A7-989E-1928FD2390D4_1_105_c-1.jpeg" alt="" class="wp-image-21261"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

それでも多少はグラグラしてしまうので、ダイオード本体をマスキングテープで固定しました。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/1857E0A4-5ACE-4441-9E23-AFE37E6A7566_1_105_c.jpeg" alt="" class="wp-image-21262"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

そして裏返した状態ではんだ付けしていきます。  
基板の金色の部分をはんだごてで温めて、そこにそっとはんだを流し込む感じです。

### Mill-Maxソケットのはんだ付け

このタイミングでアクリル板の内容を確認します。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="768" height="1024" src="/wp-content/uploads/2021/05/C08E5F8B-B2A1-4562-85DA-A43EA3257BBC_1_105_c.jpeg" alt="" class="wp-image-21263"  sizes="(max-width: 768px) 100vw, 768px" /></figure>
</div>

一番上のものがキースイッチをはめ込むもの、その下に基板、2枚目、3枚目、4枚目という順番です。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/5DD7C1F2-6E13-44DE-8F97-F9AFCD2B3990_1_105_c-1.jpeg" alt="" class="wp-image-21265"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

ここで必要なのは5mネジとナットとスペーサーです。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/3C53F417-64CC-41A2-A1C0-67012981E9FD_1_105_c.jpeg" alt="" class="wp-image-21266"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

一番上のアクリル板の表面を剥がして、裏面にスペーサーをセットしつつ表面からネジで固定します。  
固定した後、スペーサーに透明の輪っかみたいな部品を取り付けます。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/7E3CAB4A-B11A-4A02-B08E-8BF3CA1F8B31_1_105_c.jpeg" alt="" class="wp-image-21267"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

このアクリル板のスペーサーが出ている側に基板をはめ込んで、アクリル板側からキースイッチを差し込んでいきます。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/D1F39890-AD12-4DE1-A930-C3F0D783A3A2_1_105_c-1.jpeg" alt="" class="wp-image-21269"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

キースイッチを差し込んだ後で裏返して、Mill-Maxソケットを基板にはんだ付けしていきます。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/506B8326-FCDB-411A-9ACC-E71A339491C9_1_105_c.jpeg" alt="" class="wp-image-21270"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

それと、ソケットが少し長くてProMicroと干渉してしまうので、ソケットの先端をニッパで切り落としました。

そのままニッパでバチッと切るのではなく、力を入れたか入れないかくらいの微力でソケットに負荷をかけてニッパを回転させて切り込みを徐々に入れていく感じに落とします。

### LEDのはんだ付け

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/64F127AD-BD44-4C6F-A271-188D41E34CE5_1_105_c.jpeg" alt="" class="wp-image-21271"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

さぁ、いよいよLEDのはんだ付けです。

自作キーボードのLED関連の情報を集めていると、**非常にシビア**だということがわかりました。まず、**270度を超える温度でLEDが壊れる**という事実。 そして、**それを恐れてはんだ付けを軽めにしてしまうと、一見はんだ付けはできているのに通電しないというLEDトラブルあるある**。

僕が愛用しているはんだごて、先端の温度が何度になるのかわからないもので、しかも注意書きを見ると「先端が300度を超える」と書かれていたので、内心しまった！と思っていました。 幸い<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">僕が使っているはんだが、通常のはんだより細くて融点が170度のもの</span>だったので、それが溶けた瞬間を狙って功を奏しました。

このLEDどれくらい小さいのかというと、

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/A64BC148-B3C0-49C2-A1FC-4298A39324B7_1_105_c.jpeg" alt="" class="wp-image-21272"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

これくらい小さいです。1Uのキーキャップと比べると、本当に小さい。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/B0005FF2-A01E-4D65-8D2D-DBD5D94A57D5_1_105_c-1.jpeg" alt="" class="wp-image-21275"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

これを基板の、LEDの場所にはめ込んでいきます。僕は指では辛かったのでピンセットではめ込みました。Zincの基板ではSK6812MINI-Eの場所の1箇所に印が付いているので、その部分に先端が斜めにカットされた部分がくるようにセットしました。  
こういう工夫が基板にしてあると、本当に助かります。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/361967E4-6BD0-490F-94AB-088F07EBCB5E_1_105_c-1.jpeg" alt="" class="wp-image-21277"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

それが終わった後、WS2812Bのはんだ付けです。こっちが足がないタイプのLEDなので、予備はんだをつけるかどうか迷ったんですが、基板にWS2812Bを置いて、ちょっとだけ見える基板の金色部分にそっとはんだを流しすようにしました。

そうそう、僕はこのタイミングで、イヤホン端子のパーツをしれっとはんだ付けしておきました。この部品をはんだ付けするのが、今回一番楽ちんでした。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/F822A396-6A99-4DE0-9CE2-3BF4C115674C_1_105_c.jpeg" alt="" class="wp-image-21278"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

ちなみにZincの場合、そのままでは全てLEDが光りません。表も裏も両方光らせる場合は、この写真にある通り、「ExtraLED」の部分にはんだを塗ってショートさせる必要があります。

### ProMicroに使うコンスルーのはんだ付け

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/431F2727-D3F7-43DB-BB46-F4DDEAA7375C_1_105_c.jpeg" alt="" class="wp-image-21280"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

ProMicroには、両サイドに穴がたくさん開いている場所があります。ここに、コンスルーを差し込んで、はんだ付けします。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/F48419AF-17A2-486C-8464-0E3DA2A2678B_1_105_c-1.jpeg" alt="" class="wp-image-21282"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

僕は過去に向きを2回も向きを間違えたことがあります。  
ZincもChoco60も、この向きでした。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/6701B3C2-6ACA-455E-8EBA-CAF3B0441934_1_105_c.jpeg" alt="" class="wp-image-21283"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

みなさん間違えないようにしてください。Zincではこの向きですよ。  
向きを間違えてはんだ付けしてしまい、僕のように何度も遊舎工房さんに注文しないように。

### ProMicroにQMK Firmwareを書き込む

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/78E0F4DE-BF4C-48E5-A512-7D62B30B4FAB_1_105_c.jpeg" alt="" class="wp-image-21284"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

Zinc用のQMK Firmwareは、QMKをGitからCloneしてコンパイルすると出来上がります。  
ただしそれが面倒な場合は、作者が運営しているDiscordに**zinc\_rev1\_via.hex**というファイルが上がっているので、それをそのままQMK Toolboxで書き込むのが簡単です。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://discord.com/invite/scD6N3V">}}
</div></figure> <figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://github.com/qmk/qmk_toolbox/releases">}}
</div></figure> 

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="783" height="615" src="/wp-content/uploads/2021/05/be5219ebf28286f896fddfd2ca3c1071.png" alt="" class="wp-image-21287"  sizes="(max-width: 783px) 100vw, 783px" /></figure>
</div>

QMK ToolboxのリストからZinc defaultを選んでも良いんですが、何故かLEDがうまく光りませんでした。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/213646DC-20CC-440B-9A6D-478D513701B6_1_105_c.jpeg" alt="" class="wp-image-21288"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

リセットスイッチを押して**zinc\_rev1\_via.hex**を書き込んだ途端、LEDが強く光だします。すごく眩しい。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/5B388BA3-DBB7-4785-83FD-2E2B8A538060_1_105_c.jpeg" alt="" class="wp-image-21289"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

表面の色に連動して、裏面も無事光りました。

これね、ここまでくるのに、何時間かかったことか。 LEDが1つだけ光っていなかったり、とあるLEDより後のものが全部消えていたり、数時間悩む苦労がありました。 光具合が変なLEDを見つけて交換したこともありました。 ほとんどの場合、壊れることを恐れずにちゃんとはんだ付けを行うことで、無事に光りました。

### 残りのアクリル板をねじ止めする

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/A7FE7342-83FB-4939-9ED8-BDCC39247065_1_105_c.jpeg" alt="" class="wp-image-21291"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

ここまで来たらアクリル板を基板にねじ止めする作業です。

穴が空いているものを基板の裏に合わせて、その上に半分の大きさの板、その上に細長い板を重ねました。 基板からの距離に合わせて、使うネジの大きさを長くしていきました。それと四隅にもスペーサーを取り付けて、ねじ止めしていきます。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/05F213D9-39EA-43A0-98AC-0DE8C74BDBA2_1_105_c-1.jpeg" alt="" class="wp-image-21294"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

Zincに付属しているネジは、長さの他にも種類があります。  
こちらが表面が平らなネジです。これは裏面に使います。

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/BED0CA9D-656A-4AD9-ABDB-8AC9F67D0671_1_105_c.jpeg" alt="" class="wp-image-21295"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

そしてこれが表面が膨らんでいるネジです。表面の4箇所に使います。  
膨らんでいる方のネジが少し高価らしく、こっちの方がZincが綺麗に見えます。

### キーキャップを取り付けて完成！

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="683" src="/wp-content/uploads/2021/05/4A2D33ED-9E28-468E-81C3-85D5F59FB5A6_1_105_c-1024x683.jpeg" alt="" class="wp-image-21296"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

あぁ、美しい。  
LEDのパターンは予め登録されたものが利用できるようになっています。RGB関連のキーを押してみることで、明るさや色、光るパターンなどを調整できます。

キースイッチについては、35gが心地よくて、しかもサイレントなので音も目立たず、快適にタイプできます。僕は軽めのキーが好きだなぁと再認識しました。

## 全体を通した感想

<div class="wp-block-image">
  <figure class="aligncenter size-large"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/05/F2295967-CFD9-47F2-B8DE-3211AE02AEC5_1_105_c.jpeg" alt="" class="wp-image-21298"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

この配色、クリスマスですね。

さて、作業時間ですが、**普通に組み立てるだけなら4時間ほどで終わる**と思います。 ただ今回は、温度がシビアなはんだ付けや、QMKのデフォルトファームウェアを書き込んだだけではLEDが光らなかったりと、LED関係のことに時間が取られました。<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">二晩ほどかかりました</span>。 ぶっ通しで2徹したわけではありませんが、最初に組み上げるのに夜中から朝までかかり、LEDのチェックやリマップでもう一晩かかりました。1歳児がいるので夜中しかはんだ付けができないという理由もありました。

それと、ProMicroを最初は普通の端子をはんだ付けしてしまい、LEDやキーソケットがはんだ付けできない状態になってしまいました。結果、作者のモンスクオブファンクさんから基板とダイオードを補修部品として追加で購入することにもなりました。

_モンスクオブファンクさん、ご対応いただきありがとうございました。_

とりあえず、ものは完成しました。ただし配列の設定やレイヤー切り替え時に必要な秒数など、細かい設定を詰めていく必要があります。 この辺りの話は、newsletterで語ることにしましょう。

Zincを初めて組み立てる方の参考になれば幸いです。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://booth.pm/ja/items/1451314">}}
</div></figure>

 [1]: https://twitter.com/monksoffunkjp?s=21
 [2]: https://yushakobo.jp/
 [3]: https://talpkeyboard.net/