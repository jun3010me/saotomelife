---
title: HHKBにルブを行うと、かなり滑らかな打ち心地になった
author: 魚住 惇
type: post
date: 2022-12-13T15:03:37+00:00
url: /blog-hhkb-lube-23166.html
thumbnail: /wp-content/uploads/2022/12/IMG_4157.jpeg
wp-seo-meta-description:
  - HHKBにルブを施す手順や、打ち心地についてまとめました。
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 'ガジェット&amp;PC'
tags:
  - HHKB

---
こんにちは、HHKBエバンジェリストの魚住惇です。

先日行われたHHKBミートアップvol.6の際に、同じエバンジェリスト仲間のDanielさんから「ルブをやってみるといいよ」という話を聞きました。

自作キーボード界隈で、キースイッチを分解して潤滑油を塗る行為のことを”ルブ”と呼んでいます。これをHHKBでやってしまおうというお話です。<figure class="wp-block-embed is-type-rich is-provider-twitter wp-block-embed-twitter">

<div class="wp-block-embed__wrapper">
  <blockquote class="twitter-tweet" data-width="500" data-dnt="true">
    <p lang="ja" dir="ltr">
      <a href="https://twitter.com/hashtag/HHKB%E3%83%9F%E3%83%BC%E3%83%88%E3%82%A2%E3%83%83%E3%83%97?src=hash&ref_src=twsrc%5Etfw">#HHKBミートアップ</a> でお会いした <a href="https://twitter.com/dhoboy?ref_src=twsrc%5Etfw">@dhoboy</a> さんに、Topre軸のルブの効果について詳しく教えてもらった。更に、僕がルブしやすいように解説動画まで作ってくれた🥹<br />ダニエルさん、なんていい人や☺️ <a href="https://t.co/z5Bjdy4ddL">pic.twitter.com/z5Bjdy4ddL</a>
    </p>&mdash; 魚住惇📖『逆境に負けない 学校DX物語』 (@jun3010me) 
    <a href="https://twitter.com/jun3010me/status/1602070439135969280?ref_src=twsrc%5Etfw">December 11, 2022</a>
  </blockquote>
</div></figure> 

Twitterでも呟きましたが、なんとDanielさん、僕のためだけに「Jun-san HHKB Lube Guide」という動画をYouTubeに投稿してくださったんですよ。もちろん限定公開。これはもう、「この動画を見ながらやるっきゃねぇ！」という気分になったわけです。

なので今回は、静電容量無節点方式を採用しているHHKBを分解してルブをやってみたので、方法や感想などをまとめたいと思います。

<div class="wp-block-snow-monkey-blocks-alert smb-alert">
  <div class="smb-alert__title">
    <i class="fa-solid fa-exclamation-circle"></i><strong>HHKBを自分で分解すると、PFUのサポートが受けられなくなります</strong>
  </div>
  <div class="smb-alert__body">
    <p>
      分解の過程で封シールを剥がす必要があるので、PFU社からのサポートが受けられなくなります。それでもやってみたいという方は、くれぐれも自己責任でお願いします。
    </p>
  </div>
</div>

## 用意したもの

今回購入したものを紹介する前に、Danielさんがお勧めしている潤滑剤を紹介します。動画で話してくれていた内容では、

**純正のラバードームなら、GPL 205 G0  
deskeys製のラバードームなら、Tribosys 3203か3204のどちらか**

という結論が出ていました。あくまでDanielさんの手の感覚だと思いますが、僕が自宅で使っているHHKBはdeskeysのラバードームに交換しているので、先人の知恵に習ってTribosys 3204を購入することにしました。

この3種類の潤滑剤は、遊舎工房で購入できます。<figure class="wp-block-embed is-type-link is-provider-埋め込み wp-block-embed-埋め込み">

<div class="wp-block-embed__wrapper">
  <a href="https://shop.yushakobo.jp/products/lubricants?variant=37665260929185">潤滑剤</a>
</div><figcaption class="wp-element-caption">遊舎工房の販売ページ</figcaption></figure> 

それから、塗るための筆も用意しました。100均でもいいと思いますが、たまたまガンプラ用にとプラモ売り場で買った筆があったのでそれを使うことにしました。

細めの筆なら割となんでも良いと思います。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B000BMUONU?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/21uWLE79OAL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B000BMUONU?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener">タミヤ メイクアップ材シリーズ No.29 面相筆 (短) 87029</a>
        <p>
        </p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=タミヤ メイクアップ材シリーズ No.29 面相筆 (短) 87029&tag=jun3010me-22" target="_blank" rel="noopener">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2Fタミヤ メイクアップ材シリーズ No.29 面相筆 (短) 87029%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3Dタミヤ メイクアップ材シリーズ No.29 面相筆 (短) 87029" vcptn="kaereba&quot;" target="_blank" rel="noopener">Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&pid=884909937" width="1" height="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

あとはドライバーセットがあれば、HHKBが分解できます。もちろん既にドライバーが家にあるのなら、新たに購入する必要はありません。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B096PHZQ2M?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/41izsV86eQL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B096PHZQ2M?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener">精密ドライバーセット 特殊ドライバー 磁石付き,トルクス マイナス 三角 六角 プラス 星型 y字ドライバー switch カメラ スマホ 修理 ペン型 差し替えドライバー 時計 メガネ mac ps4 hdd パソコン iphone 分解工具 S2素材</a>
        <p>
        </p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=精密ドライバーセット&tag=jun3010me-22" target="_blank" rel="noopener">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F精密ドライバーセット%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3D精密ドライバーセット" vcptn="kaereba&quot;" target="_blank" rel="noopener">Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&pid=884909937" width="1" height="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

以上が今回の作業のために用意したものでした。僕はドライバーセットと筆は既に持っていたので、ミートアップの翌日に遊舎工房で3204を購入してから愛知県に帰宅しました。

## 作業内容

では実際に作業を行った内容を、時系列で紹介します。

### 分解
<figure class="wp-block-image">

<img decoding="async" src="/wp-content/uploads/2022/12/IMG_4152.jpeg" alt="HHKBのキートップを取り外している様子" /> </figure> 

まず最初に、キートップを全て取り外しました。ルブを行うためには、キートップを外したときに見える黒い軸部分の部品を本体から取り外す必要があります。

なので分解の前段階として、キートップを全て外す必要がありました。
<figure class="wp-block-image">

<img decoding="async" src="/wp-content/uploads/2022/12/IMG_4153.jpeg" alt="ケーブルが見えたので、抜く" /> </figure> 

キートップを取り外した後、本体裏面の3本のネジを取り外して、パカっと開けました。ちなみにこの段階で、封シールを取ることになるので、今後はPFU社のサポートを受けられなくなります。（ここ重要

なので今後調子が悪くなってしまったときに、メーカー保証を当てにするのなら、今回の作業はやめた方が良いと思います。

メーカー保証云々よりも、今よりも快適なHHKBの世界をご覧になりたい方のみ、ネジを取り外して、写真に出てきたフレキシブルケーブルを取り外します。
<figure class="wp-block-image">

<img decoding="async" src="/wp-content/uploads/2022/12/IMG_4154.jpeg" alt="基板のネジを外す" /> </figure> 

そして出てきた大きな基板を固定しているネジを、全て取り外します。
<figure class="wp-block-image">

<img decoding="async" src="/wp-content/uploads/2022/12/IMG_4155.jpeg" alt="ラバードームを取りはずすと、軸が見えてくる" /> </figure> 

そして出てきたのが、この黒い円柱の形をした部品です。これがいわゆる「Topre軸」と呼ばれている部品です。
<figure class="wp-block-image">

<img decoding="async" src="/wp-content/uploads/2022/12/IMG_4157.jpeg" alt="HHKBにルブをしている" /> </figure> 

軸を取り外すと、軸を支えていたレール部分が見えてきます。

### 潤滑剤を筆で塗る<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="729" src="/wp-content/uploads/2022/12/IMG_4157-1-1-1024x729.jpeg" alt="HHKBでルブを施す箇所" class="wp-image-23169"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

この黄色で塗った部分に、筆を使って潤滑剤を塗っていくわけです。<figure class="wp-block-embed is-type-rich is-provider-twitter wp-block-embed-twitter">

<div class="wp-block-embed__wrapper">
  <blockquote class="twitter-tweet" data-width="500" data-dnt="true">
    <p lang="ja" dir="ltr">
      左が未ルブ、右側がルブ済 <a href="https://t.co/2TpQp8RJd6">pic.twitter.com/2TpQp8RJd6</a>
    </p>&mdash; 魚住惇📖『逆境に負けない 学校DX物語』 (@jun3010me) 
    <a href="https://twitter.com/jun3010me/status/1602618002012110848?ref_src=twsrc%5Etfw">December 13, 2022</a>
  </blockquote>
</div></figure> 

実際に塗ってみると、塗る前と比べて動きが滑らかになっているのがわかります。

塗りすぎると、滑りが逆に悪くなり、反対側から押しても重力で下に下がらなくなります。そこまで塗ると、塗りすぎです。逆に塗る量が少ないと滑りが悪いままになってしまうので、文字通りの”適量”というのを塗りながら探っていく必要があります。

僕は今回、最初の3つくらいで分量を変えながら塗ってみて、塗る前に潤滑剤をどれくらい筆に付けるのかを試行錯誤しました。自分が思う”適量”が見つかるまでは時間がかかりますが、それさえ終わってしまえばあとは単純な流れ作業でした。

潤滑剤を全部の軸に塗るのはそこそこ時間がかかりました。Shiftキーやスペースキーに付いているスタビライザーの部分にも、ふんだんに塗りたくりました。中には作業をされる際に、一度に全ての軸受けに潤滑剤を塗る人もいるかもしれません。ただ僕はどの溝に潤滑剤を塗ったのか、見た目だけでは判別できなくなりそうだったので、塗り終わった部分に軸を取り付ける作業を1つ1つやりました。

あとは塗り終わったら、分解とは逆の手順でラバードームを取り付けて、ネジ止めして元通りに戻したところで作業完了です。

分解して作業してから組み立てるまで、およそ1時間30分ほどかかりました。分解している間は当然HHKBは一時使えなくなるので、ドラマや映画、Podcastなどを再生しながら作業すると捗るんじゃないかなと思います。

## ルブをしたHHKBの打ち心地

ではここで、ルブ済みHHKBでしばらくタイピングした感想を書こうと思います。

**もうね、最高です。**この一言に尽きますよ。

全体的にかなり滑らかな押し心地になりました。指で軸を押した後にはスプリングで押し返すわけですが、<span style="background-image: linear-gradient(transparent 60%, rgba(252, 185, 0, 0.5) 60%)" class="sme-highlighter">特に押した時の感触がかなりスムーズ</span>になりました。

この感触がまた独特で、かなり病みつきになります。自分が求めていた打ち心地はこれなんだ！ということを思い知らされました。

それに、スタビライザーにも塗りたくったおかげで、スペースキーを連打しても音が響かなくなりました。

この感覚、以前にもどこかで味わったような気がして、どことなく懐かしい気分になりました。

そう、HHKB Lite2を使っていて、それから初めてProfessional2に触れてみた、静電容量無節点方式のキーボードに初めて触った時の感動。

**ルブ済みのHHKBを触ると、まるで生まれて初めて静電容量無節点方式のキーボードを触った時の、あの感動に似たような想いが押し寄せてきました。**

テストがてらいくつかのキーを押すだけではあまり実感できなくて、ルブ済みHHKBを使って文章を書いてみたところで、そのインパクトの強さを目の当たりにしました。

<span style="background-image: linear-gradient(transparent 60%, rgba(252, 185, 0, 0.5) 60%)" class="sme-highlighter">これが”ルブ”、なんて恐ろしい。</span>新しいHHKBの世界を見ました。こんな感触を知ってしまったら、もう潤滑剤を塗ってないキーボードを使いたくなくなってしまう。所持している全てのHHKBを分解してルブしたい。

使うたびに脳汁ブシャー状態で、ずっと触れていたい。ずっとタイピングしていたいっていう気にさせてくれるHHKBが出来上がってしまいました。

部活の生徒や妻のゆかさんにも試しに触ってもらいましたが、触った人全員が、押した感触が滑らかだという感覚に共感してくれました。

そしてどことなく、キーの荷重が軽くなった気がしてきます。今回新たにラバードームを交換したわけじゃないのにね、十分に軽く感じるようになりました。

ラバードームの交換だけで満足していた自分が本当に恥ずかしい。潤滑剤を塗ることで、滑らかさが増すとともに、キーを押し込んだときに発生していた微妙なグラつきも解消されて、かなり快適なキーボードへと生まれ変わりました。

こりゃあかんわ。だもんで自作キーボード界隈の人たちはルブをやるんだが。

ルブの魅力、伝わりました？伝わりましたよね？再度忠告しますが、分解することで、PFU社からのサポートが受けられなくなります。この記事をご覧になって挑戦しようと思ったとしても、最後は自己責任でお願いします。

でもね、それでもこの打ち心地は、HHKBをそのまま使っていては決して味わうことのできない滑らかさです。リスクがあるチャレンジですが、新たなHHKBの世界を見たいという方の助けとなれば幸いです。

最後の方は特に画像も用意せずに感想をダラダラと書いてしまいました。ここまでお読みいただきありがとうございました。

そしてありがとう、Danielさん。新たな沼に足を踏み入れてしまったよ。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B0BFH695TJ?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/31jhBSIpu9L._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B0BFH695TJ?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener">PFU キーボード HHKB Professional HYBRID Type-S 英語配列／雪</a>
        <p>
        </p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=HHKB Professional HYBRID Type-S&tag=jun3010me-22" target="_blank" rel="noopener">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FHHKB Professional HYBRID Type-S%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DHHKB Professional HYBRID Type-S" vcptn="kaereba&quot;" target="_blank" rel="noopener">Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&pid=884909937" width="1" height="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>