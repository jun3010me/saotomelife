---
title: PCからのPing応答が途絶えたらAlexaに喋らせる仕組みをRaspberry Piで組んだ
author: 魚住 惇
type: post
date: 2021-10-03T09:42:18+00:00
excerpt: Raspberry PiとAlexaを連携させて、サーバー監視を行う仕組みを作ってみました。
url: /raspberry-pi-alexa-node-red-22045.html
thumbnail: /wp-content/uploads/2021/10/357CECFE-03CE-4D6F-A8DD-8A7D141E66FC.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 'ガジェット&amp;PC'

---
NetflixだのYoutubeだののこの時代に、未だにPCでテレビ番組の録画を続けています。魚住惇です。

録画サーバーとして動かしている自作PCをリビングのテレビ台付近に置き、そこをもうすぐ2歳になる息子が入らないようにケージで囲っていました。 しかしそのケージ内に見事侵入に成功した息子は、何故かOAタップの録画マシンの電源が挿してある部分のスイッチのみをオフにするという芸当を披露しました。

なんでそこだけ。

息子がケージ内に侵入したのは午前中、僕が気づいたのはその日の夜のことでした。つまり妻のゆかさんなら、ケージへの侵入は止められなくても、電源を再び入れることは可能なはず。

というわけで、録画用に使っている自作PCの電源が落ちている時だけ、何らかの方法でゆかさんに状況を伝えるためのシステムが必要となったのです。

そこで今回挑戦してみたのが、RaspberryPiとAlexaを組み合わせた仕組みづくりでした。

## 今回使ったもの<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/10/IMG_2728.jpeg" alt="" class="wp-image-22059"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

今回の仕組みづくりのために用意するものは、RaspberryPiというシングルボードコンピュータと、Alexaです。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B07PFFMQ64?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/41jhkggC-aL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B07PFFMQ64?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener">Echo Dot (エコードット)第3世代 &#8211; スマートスピーカー with Alexa、チャコール</a>
        <p>
        </p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=Alexa&tag=jun3010me-22" target="_blank" rel="noopener">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FAlexa%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DAlexa" vcptn="kaereba&quot;" target="_blank" rel="noopener">Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&pid=884909937" width="1" height="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B095K5WTQ2?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/41cbLhFeb9S._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B095K5WTQ2?tag=jun3010me-22&linkCode=ogi&th=1&psc=1" target="_blank" rel="noopener">Raspberry Pi 4 Model B 8GB 技適マーク入 正規品！ラズベリーパイ4 モデルB 8GB Raspberrypi財団パッケージ</a>
        <p>
        </p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=Raspberry Pi 4 Model B&tag=jun3010me-22" target="_blank" rel="noopener">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FRaspberry Pi 4 Model B%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DRaspberry Pi 4 Model B" vcptn="kaereba&quot;" target="_blank" rel="noopener">Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&pid=884909937" width="1" height="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

欲を言うとRaspberryPiの最新版は4なんですけど、我が家にあるのがZeroという初代RaspberryPiの性能でフリスクサイズまで小型化されたものだったので、今回はそれを流用しました。

ガジェット好きとして、興味がそそられるかどうかは別として、「シングルボードコンピュータって、なんの意味があるの？仮想マシンで良くない？」というのが僕のこれまでの持論でした。

でも今回の仕組みづくりは、対象のPCの電源が落ちてしまった場合のセーフティーネット作りです。そのPC内で仮想マシンを作ってしまっては、肝心な時に役に立たないわけです。

しかもRaspberryPiはUSB電源で動いてくれる優れもの。しかもデフォルトだとファンレスです。僕自身、今回の仕組みが必要だと思った時に、「あー、こういう時にラズパイって必要になるんか」と実感しました。<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2021/10/IMG_2729.jpeg" alt="" class="wp-image-22060"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

ちなみに、ラズパイ本体のGPIO端子にスピーカーを直接付けても良かったんですけど、調べてみるとビープ音を鳴らすだけでも抵抗やらトランジスタやらが必要そうだったので、ラズパイ本体から鳴らすのは断念しました。

僕が持っているラズパイがZeroじゃなくて普通サイズのものだったら、イヤホン端子がついているから楽なんですけどね。

じゃあ他に何か使えるスピーカーはないのかと考えた結果、Alexaと連携してAlexaにしゃべってもらう仕組みを作った方が面白そうなんじゃないかと考えたわけです。

ただこのRaspberryPiとAlexaを繋げて喋ってもらうっていうのが、今回の最大の難関でした。

## Raspberry PiとAlexaを連携して喋らせる<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="667" src="/wp-content/uploads/2021/10/e1744794997df11437bece75906fa4f4-1024x667.png" alt="" class="wp-image-22062"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

本当なら接続方法などを全てまとめると親切なんだと思いますが、ちょっと長すぎる道のりだったのでざっくり書きます。

手順としてはこんな感じ

  1. RaspberryPiにNode-REDをインストール
  2. Node-REDでnode-red-contrib-alexa-remote2v2をインストール
  3. node-red-contrib-alexa-remote2v2のalexa-cookie.jsとproxy.jsをAmazon.co.jp仕様に修正
  4. Alexaとの連携作業

この流れでの作業が必要でした。

### 作業1 RaspberryPiにNode-REDをインストールする<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="748" src="/wp-content/uploads/2021/10/IMG_1551-1024x748.png" alt="" class="wp-image-22063"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

一応、Raspberry Piを最新の状態にしておきました。

`$sudo apt update $sudo apt full-upgrade $sudo apt clean`

aptからインストールする方法もあるらしいですが、今回はこちらの方法でインストールしました。

`$bash <(curl -sL https://raw.githubusercontent.com/node-red/linux-installers/master/deb/update-nodejs-and-nodered)`<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://nodered.jp/docs/getting-started/raspberrypi">}}
</div></figure> 

### 作業2 Node-REDでnode-red-contrib-alexa-remote2v2をインストール<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="691" src="/wp-content/uploads/2021/10/e5069f32769bbc8f300a4509af8a5f71-1024x691.jpeg" alt="" class="wp-image-22064"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

このNode-REDというアプリは、ブラウザベースでNode.jsをブロックを繋ぎながらスクリプトを組み立てられるものです。 これに、Alexa操作系のブロックを追加します。

今回インストールしたものは、「node-red-contrib-alexa-remote2v2」です。v2がついていないものも検索すると出てきますが、そっちだとうまく動きませんでした。v2という別配信の最新バージョンを使うことで、今回は動作できました。<figure class="wp-block-embed is-type-wp-embed is-provider-hatena-blog wp-block-embed-hatena-blog">

<div class="wp-block-embed__wrapper">
</div></figure> 

### Amazon.co.jp仕様に修正<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="729" src="/wp-content/uploads/2021/10/73b2e9e033e41a63e593c54e186cd16d-1024x729.jpeg" alt="" class="wp-image-22065"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

特に苦労したのがここからの作業でした。

このNode-REDとAlexaを連携させるための記事をQiitaなどで漁っていたのですが、どれも2020年頃に書かれたものでした。それ以前だと「node-red-contrib-alexa-remote2」のままでも使えたらしいんですが、2020年ごろからAmazonの仕様が変わって、それに合わせてjsのコードを書き換える必要が出てきたと書かれていました。

ただその記事も2020年、つまり記事執筆時点では1年前の記事です。僕がラズパイとAlexaの連携をやろうと思ったのが遅かったのか、最近書かれた記事が見つかりませんでした。ので、ここからはちょっと試行錯誤しました。

結果、**「node-red-contrib-alexa-remote2v2」に、参考にさせていただいた修正内容が施されたalexa-cookie.jsとproxy.jsをGitHubから拝借することで無事動かせました。**<figure class="wp-block-embed is-type-wp-embed is-provider-hatena-blog wp-block-embed-hatena-blog">

<div class="wp-block-embed__wrapper">
</div></figure> <figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://github.com/ueponx/alexa-cookie2">}}
</div></figure> 

### Alexaとの連携作業<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://dream-soft.mydns.jp/blog/developper/smarthome/2020/06/1699/">}}
</div></figure> 

あとは簡単です。ここに書いてある通りに日本のAmazonのURLなどを設定するだけで、無事連携することできました。

## Pingが通らなかったらAlexaの音声でお知らせ<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="667" src="/wp-content/uploads/2021/10/e1744794997df11437bece75906fa4f4-1024x667.jpeg" alt="" class="wp-image-22066"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

ま、いっか。プライベートIPくらい。

今回組んだ仕組みは画像の通りです。 1分ごとに録画マシンのIPアドレス宛にPingを送り、その結果Pingの応答がなかった場合、Alexaにこちらで設定した通りのセリフを喋ってもらうという流れです。

どんなセリフが良いのか考えたんですが、Twitterに貼った通り、まぁこれなら、ゆかさんも気づくだろうという内容にしました。<figure class="wp-block-embed is-type-rich is-provider-twitter wp-block-embed-twitter">

<div class="wp-block-embed__wrapper">
  <blockquote class="twitter-tweet" data-width="500" data-dnt="true">
    <p lang="ja" dir="ltr">
      この前、いっちゃんがOAタップの場所まで入り込んで、PT3の録画マシンの電源を落としちゃったことがあったから、対策してみた。<br />RaspberryPi Zero WHにNode-REDを入れて5分毎にpingで生存確認。<br />もしpingが帰って来なかったら、家中のアレクサからゆかさんに音声でお知らせ。<br />これで一安心や😌 <a href="https://t.co/QIEw9PHoKe">pic.twitter.com/QIEw9PHoKe</a>
    </p>&mdash; 魚住惇📖『逆境に負けない 学校DX物語』 (@jun3010me) 
    <a href="https://twitter.com/jun3010me/status/1444444273055698945?ref_src=twsrc%5Etfw">October 2, 2021</a>
  </blockquote>
</div></figure> 

<div class="wp-block-snow-monkey-blocks-balloon smb-balloon">
  <div class="smb-balloon__person">
    <div class="smb-balloon__figure">
      <img decoding="async" loading="lazy" width="150" height="150" src="/wp-content/uploads/2019/01/yomes-150x150.jpg" alt="" class="wp-image-15657"  sizes="(max-width: 150px) 100vw, 150px" />
    </div>
    <div class="smb-balloon__name">
      ゆか
    </div>
  </div>
  <div class="smb-balloon__body">
    <p>
      これもう、Alexaに喋らせるんじゃなくて、メール配信で良くない？
    </p>
  </div>
</div>

と言われました。ごもっともです。ただちょっと、遊び心を入れてみたかったのですよ。

## 他にも応用できるかも

例えば、時間指定でWebにある天気の文字列を正規表現で拾い、読み上げさせたり、雨が降るタイミングで教えさせたり。 それか他のセンサー類と組み合わせて、アレクサに「いらっしゃいませ」と言わせたり。考えれば考えるほどいろいろできそうです。

何より Node.jsのコードを書かなくても、それとなく仕組みが使えるNode-REDが素晴らしいですね。便利です。

Alexaにもっと仕事をさせたい方は参考にしていただければ幸いです。