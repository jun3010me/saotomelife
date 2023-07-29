---
title: eGPUとRADEON RX5700XTでMac mini 2018をゲーミングPC化した
author: 魚住 惇
type: post
date: 2020-02-11T15:07:51+00:00
excerpt: Mac mini 2018にAKiTiO Nodeを接続して、Radeon RX5700XTを積んで夢のゲーミングPCを完成させました
url: /macmini2018-akitio-node-rx5700xt-17565.html
thumbnail: /wp-content/uploads/2020/02/ec7f1aaba6ef08db62501cec05452994.jpeg
snap_isAutoPosted:
  - 1581433681
wp-seo-meta-robots:
  - 'a:0:{}'
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1227248287310209025";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1227248287310209025";s:5:"pDate";s:19:"2020-02-11 15:09:27";}}";'
categories:
  - Mac
  - 商品レビュー

---
マインクラフトにはまりました。Education版はMac版がリリースされているのに、統合版だけMac版がありません。憤りを感じますね。

それなら、WindowsのゲーミングPCを用意してしまえ！となったわけです。

僕のメインマシンはMac mini 2018。Skylakeで組んだ自作マシンがあるにはあるんですが、PT3で地デジ録画するのと、動画のエンコード専用機として、別室に置いてあります。つまりMac miniでゲームをするか、別でマシンを一式組むという選択肢がある状態です。別マシンを組むのも良かったんですけど、ちょっと予算オーバーなところがあったり、できたらMac miniを有効活用したい。

というわけで、今回はeGPUボックスの良い出物が手に入ったので、Mac mini 2018をゲーミングPCに仕立ててみました。

## 外付け拡張ボックス「AKiTiO Node」

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="960" src="/wp-content/uploads/2020/02/IMG_2920.jpeg" alt="" class="wp-image-17556"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

今回購入したのは、Thunderbolt 3に対応しているグラフィックボード専用の外付け拡張ボックス「AKiTiO Node」です。

Mac mini 2018にはThunderbolt 3端子が4ポート用意されています。そこにこの拡張ボックスを接続することで、自作PCパーツのグラフィックボード(略してグラボ)を認識させてしまおうというわけです。

<div class="wp-block-snow-monkey-blocks-alert smb-alert">
  <div class="smb-alert__title">
    <i class="fas fa-exclamation-circle"></i><strong>Appleが推奨しているeGPUボックス</strong>
  </div>
  <div class="smb-alert__body">
    <p>
      Appleの公式サイトにて使用を推奨しているRX5700用eGPUボックスは、次の2つです。
    </p>
    <p>
      <strong>Sonnet eGFX Breakaway Box 650W</strong>
    </p>
    <p>
      <strong>Razer Core X</strong>
    </p>
    <p>
    </p>
    <p>
      ですが、AKiTiO Nodeの500Wでもグラボ用の電源が確保できて、サブ電源の端子も足りていました。
    </p>
    <p>
      もしAppleが推奨していない製品を購入することに不安がある方は、上記2つのeGPUボックスを検討してみてください。ただしお値段はやや高めです。
    </p>
  </div>
</div>

このeGPUボックス、Amazonでは35000円くらいで売られています。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <figure><a href="https://www.amazon.co.jp/Node%EF%BC%88500W%EF%BC%89-Thunderbolt-%E3%82%B0%E3%83%A9%E3%83%95%E3%82%A3%E3%83%83%E3%82%AF%E3%83%9C%E3%83%BC%E3%83%89%E5%B0%82%E7%94%A8-%E5%A4%96%E4%BB%98%E3%81%91%E6%8B%A1%E5%BC%B5%E3%83%9C%E3%83%83%E3%82%AF%E3%82%B9%EF%BC%88macOS%EF%BC%86Windows-%E3%82%A2%E3%83%9F%E3%83%A5%E3%83%AC%E3%83%83%E3%83%88%E3%82%AA%E3%83%AA%E3%82%B8%E3%83%8A%E3%83%AB%E3%83%9E%E3%83%8B%E3%83%A5%E3%82%A2%E3%83%AB%E4%BB%98%E3%81%8D%EF%BC%89/dp/B0811DDMTX?SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&tag=jun3010me-22&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B0811DDMTX" target="_blank" rel="noopener noreferrer"><img decoding="async" style="border: none;" src="https://images-fe.ssl-images-amazon.com/images/I/4127wMI73lL._SL160_.jpg" /></a></figure>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/Node%EF%BC%88500W%EF%BC%89-Thunderbolt-%E3%82%B0%E3%83%A9%E3%83%95%E3%82%A3%E3%83%83%E3%82%AF%E3%83%9C%E3%83%BC%E3%83%89%E5%B0%82%E7%94%A8-%E5%A4%96%E4%BB%98%E3%81%91%E6%8B%A1%E5%BC%B5%E3%83%9C%E3%83%83%E3%82%AF%E3%82%B9%EF%BC%88macOS%EF%BC%86Windows-%E3%82%A2%E3%83%9F%E3%83%A5%E3%83%AC%E3%83%83%E3%83%88%E3%82%AA%E3%83%AA%E3%82%B8%E3%83%8A%E3%83%AB%E3%83%9E%E3%83%8B%E3%83%A5%E3%82%A2%E3%83%AB%E4%BB%98%E3%81%8D%EF%BC%89/dp/B0811DDMTX?SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&tag=jun3010me-22&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B0811DDMTX" target="_blank" rel="noopener noreferrer">AKiTiO Node（500W） Thunderbolt 3対応 グラフィックボード専用 外付け拡張ボックス（macOS＆Windows 10対応/アミュレットオリジナルマニュアル付き）</a> 
        
        <p>
          &nbsp;
        </p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://192.168.11.200:8000/" target="_blank" rel="nofollow noopener noreferrer">ポチポチ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=AKiTiO Node&tag=jun3010me-22" target="_blank" rel="noopener noreferrer">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FAKiTiO Node%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener noreferrer">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DAKiTiO Node;vcptn=kaereba" target="_blank" rel="noopener noreferrer">Yahooショッピング<figure><img decoding="async" loading="lazy" style="display: none !important;" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&pid=884909937" width="1" height="1" border="0" /></figure></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
      &nbsp;
    </div>
  </div>
</div>

パソコン本体を別で購入するくらいなら、この価格で箱を買って、Mac miniを有効活用する方が、安上がりです。

ちなみにApple公式でもeGPUボックスにRadeon Pro 580を内蔵した「Blackmagic eGPU 」やRadeon RX Vega 56を内蔵した「Blackmagic eGPU Pro」が2年前に発売しましたが、グラボの世代的や性能的に考えて、価格が見合っていません。かなり割高商品と言えます。

3万円台のeGPUボックスを購入して、自分でグラボを取り付ける方が安く済みます。

ちなみに、一番安く購入できるのは、AKiTiOシリーズなどのThunderbolt3拡張パーツを専門的に取り扱っているAMULETというメーカーの販売サイトのアウトレットセールのページです。

<div class="wp-block-snow-monkey-blocks-alert smb-alert">
  <div class="smb-alert__title">
    <i class="fas fa-exclamation-circle"></i><strong>2020年5月現在</strong>
  </div>
  <div class="smb-alert__body">
    <p>
      下記サイトのeGPUボックスの格安品は全て売り切れて、適正価格に戻っています
    </p>
  </div>
</div><figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://ssl.amulet.co.jp/shop/price_list.php?cate=outlet">}}
</div></figure> 

中古ではあるものの、Amazonで35000円で売っている**AKiTiO Nodeが税込み9800円**で購入できます。2019年の年末頃は27000円くらいで売られていたんですけどね、記事執筆時である2020年2月現在はキャンペーン特別大特価と書かれています。

僕はこの価格になったことに驚いて、即買いしました。良い買い物でした。自分が購入してからtwitterにこうツイートしたところ、翌日には売り切れていました。<figure class="wp-block-embed-twitter wp-block-embed is-type-rich is-provider-twitter">

<div class="wp-block-embed__wrapper">
  <blockquote class="twitter-tweet" data-width="500" data-dnt="true">
    <p lang="ja" dir="ltr">
      Macでも動作するThunderbolt3のeGPUボックス、AKiTiO Node(Proではない)が9800円で売られてるのを発見した。これでMac miniのグラフィックを強化できる。<a href="https://t.co/BBG2WtfH0q">https://t.co/BBG2WtfH0q</a>
    </p>&mdash; 魚住惇📖『逆境に負けない 学校DX物語』 (@jun3010me) 
    <a href="https://twitter.com/jun3010me/status/1223897686589370368?ref_src=twsrc%5Etfw">February 2, 2020</a>
  </blockquote>
</div></figure> 

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="515" height="382" src="/wp-content/uploads/2020/02/5f611cce746276318854f2186016fc71.png" alt="" class="wp-image-17554"  sizes="(max-width: 515px) 100vw, 515px" /></figure>
</div>

このサイト何気に凄いのは、アウトレットセールのページが少し古典的なHTMLっぽいところ。限定数5点と書かれていますが、僕がチェックしている限りでは在庫が復活した形跡があります。これ手作業でHTML書き換えてんのかな。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="960" src="/wp-content/uploads/2020/02/IMG_2921.jpeg" alt="" class="wp-image-17553"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

そして届いたのがこれです。Proモデルではない、ノーマルのAKiTiO Nodeです。

Amazonで売られているのは電源が500Wにグレードアップしてあるモデルですし、そもそもAKiTiO Node Proというモデルも販売されていますが、きっとよっぽどハイエンドなグラボでも使わない限り電力が足りない！なんてことはないだろうって思っているので後悔はしていません。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="960" src="/wp-content/uploads/2020/02/IMG_2923.jpeg" alt="" class="wp-image-17561"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

開けてみると、SFX電源と基板と12cmファンが出てきました。結構シンプルな作りです。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="960" src="/wp-content/uploads/2020/02/IMG_2924.jpeg" alt="" class="wp-image-17555"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

SFX電源から伸びているケーブルは、基板用のPCI-e補助電源と、グラボに接続するための補助電源端子(8ピン2つ)です。最近のハイエンドグラボって補助電源を2つ使う仕様がほとんどですが、それが使えるようになっています。

## RADEON RX5700XT 8GB GDDR6

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="960" src="/wp-content/uploads/2020/02/IMG_2927.jpeg" alt="" class="wp-image-17560"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

そして今回eGPUに積むために購入したグラボは、「**SAPPHIRE NITRO＋ RADEON RX5700 XT 8G GDDR6**」です。

PT3マシンにはRX560を載せていますが、ベンチマークの数値で言うとお世辞にもゲームを快適にプレイすることができません。ので、今回は数年に1回の買い物と考えて奮発しました。

ここ数週間のPCパーツの動きとしては、RX5500XTやRX5600XTが発売されて、ASUSやASRock、MSIらがそれぞれモデルを揃えているところです。本当はお金をケチって5500XTあたりで良いか？とも考えたんですが、それならRX560で我慢するわってなるだろうし、<span class="smb-highlighter">正直5600XTにお金を出すくらいなら、もう少し足してRX5700にするわ！</span>って考えます。

で、気づいたらミドルハイエンドのRX5700XTをポチっていました。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <figure><a href="https://www.amazon.co.jp/SAPPHIRE-RADEON-%E3%82%B0%E3%83%A9%E3%83%95%E3%82%A3%E3%83%83%E3%82%AF%E3%82%B9%E3%83%9C%E3%83%BC%E3%83%89-11293-03-40G-VD7077/dp/B07Y22PDBG?psc=1&SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&tag=jun3010me-22&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B07Y22PDBG" target="_blank" rel="noopener noreferrer"><img decoding="async" style="border: none;" src="https://images-fe.ssl-images-amazon.com/images/I/51AVyfgk%2BsL._SL160_.jpg" /></a></figure>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/SAPPHIRE-RADEON-%E3%82%B0%E3%83%A9%E3%83%95%E3%82%A3%E3%83%83%E3%82%AF%E3%82%B9%E3%83%9C%E3%83%BC%E3%83%89-11293-03-40G-VD7077/dp/B07Y22PDBG?psc=1&SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&tag=jun3010me-22&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B07Y22PDBG" target="_blank" rel="noopener noreferrer">SAPPHIRE NITRO+ RADEON RX 5700 XT 8G グラフィックスボード 11293-03-40G VD7077</a> 
        <p>
          &nbsp;
        </p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://192.168.11.200:8000/" target="_blank" rel="nofollow noopener noreferrer">ポチポチ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=SAPPHIRE NITRO  RADEON RX 5700 XT&tag=jun3010me-22" target="_blank" rel="noopener noreferrer">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FSAPPHIRE NITRO  RADEON RX 5700 XT%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener noreferrer">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DSAPPHIRE NITRO  RADEON RX 5700 XT;vcptn=kaereba" target="_blank" rel="noopener noreferrer">Yahooショッピング<figure><img decoding="async" loading="lazy" style="display: none !important;" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&pid=884909937" width="1" height="1" border="0" /></figure></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
      &nbsp;
    </div>
  </div>
</div>

実はこのグラボをチョイスしたのも、ちゃんとした理由があります。2020年2月現在、<span class="smb-highlighter">Radeon RX5700シリーズを購入すると、バイオハザード RE:3のライセンスコードが無料で貰えるキャンペーン</span>というのが行われているんですよ。

<div class="wp-block-snow-monkey-blocks-alert smb-alert">
  <div class="smb-alert__title">
    <i class="fas fa-exclamation-circle"></i><strong>2020年5月現在</strong>
  </div>
  <div class="smb-alert__body">
    <p>
      本キャンペーンは5月30日まで延長されています。
    </p>
  </div>
</div>
<figure class="wp-block-image">

<img decoding="async" src="https://amd-heroes.jp/sp/radeon_2020vol1/images/game_index.png" alt="キャンペーン公式サイトより画像を拝借しました。" /> <figcaption>キャンペーン公式サイトより画像を拝借しました。</figcaption></figure> 

僕はこうみえて大のバイオハザードファンで、下手くそではあるものの、初代バイオからこれまでの作品をプレイしてきました。バイオ3のリメイクを100％購入します。それならゲームがタダになる分、グラボにお金を回そうと考えたわけです。そう考えたらRX5700でお茶を濁すよりも潔いですよね。

それと、SAPPHIRE製のRX5700だけ、このキャンペーン対象外だったのも理由の1つです。玄人志向のRX5700を買うくらいなら、SAPPHIREのRX5700XTにしますよ僕なら。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="960" src="/wp-content/uploads/2020/02/IMG_2928.jpeg" alt="" class="wp-image-17557"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

とはいえ3連ファンがどかっと載っているグラボを購入するのは人生で初めてで、結構大興奮でした。これが1つ5万円するグラボか。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="960" src="/wp-content/uploads/2020/02/IMG_2929.jpeg" alt="" class="wp-image-17563"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

背面もカッコいいです。お高いグラボってこういう見た目なのね。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="960" src="/wp-content/uploads/2020/02/IMG_2930.jpeg" alt="" class="wp-image-17552"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

画面出力の端子はDPが2ポートとHDMIが2ポートです。流石にVGAとかDVI端子は載っていませんね。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="960" src="/wp-content/uploads/2020/02/IMG_2931.jpeg" alt="" class="wp-image-17562"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

このグラボ、ゲーミング用途なだけあって、暗闇で七色に光るLEDが搭載されていました。箱の中に入れてしまうので僕としてはあまり興味をそそられることはありませんでしたが、**これがきっかけでグラボを購入したことが嫁にばれてしまい、修羅場となりました。**

## BootCampで利用する際の注意点

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="568" height="194" src="/wp-content/uploads/2020/02/1c09b6c54f6cfc02e3440b6368444345.png" alt="" class="wp-image-17559"  sizes="(max-width: 568px) 100vw, 568px" /></figure>
</div>

動作確認として、手始めにCatalinaが起動した状態で接続してみると、あっけなく認識しました。AKiTiO NodeでもRX5700XTを認識して、使用することができました。

問題はBootCampを使ってMacにWindows10をインストールして、そのWindows上でeGPUを使用する場合です。これがなかなか曲者な挙動で、用途は限定的です。

僕が実際に遭遇したトラブルから学んだのは次の3つです。

  * Windows10は1809を使う
  * eGPUだけをディスプレイに接続しないと表示がバグる
  * ブート画面がeGPU経由だと表示されない

### Windows10は1809を使う

まじで苦労しました。RX560だったらWindows10の最新版である1909を使っても特に問題がないんですが、RX5700XTをeGPU経由で使う時に限ってグラボが認識しませんでした。今回参考にさせていただいたこちらのサイトで1809なら認識したという情報を得て、やっとこさ使えるようになりました。<figure class="wp-block-embed-wordpress wp-block-embed is-type-wp-embed is-provider-hatena-blog">

<div class="wp-block-embed__wrapper">
</div></figure> 

ただし、1809を入れたからといってそのままであってもグラボを認識することができませんでした。1909にアップグレードしないように、1909以外のアップデートを適用する必要がありました。本当に面倒くさかった。

ちなみにWindows10の1809などの過去のバージョンをダウンロードする際は、専用のツールが必要です。その点に関してはこちらのサイトを参考にしました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://www.pasoble.jp/windows/10/download-past-version.html">}}
</div></figure> 

### eGPUだけをディスプレイに接続しないと表示がバグる

そして、Windowsで厄介なのが、内蔵グラフィックスと外部グラフィックスを混在した状態だとうまく起動しない問題。これはMacに限らず、自作PC界隈ではよくあるトラブルです。

Macのまま使うのであれば、インテル内蔵グラフィックスとeGPUを上手く使い分けてくれます。けど、Mac mini本体から直接ディスプレイに接続したままeGPUをThunderbolt3ケーブルで接続してWindowsを起動しようとすると、表示がバグっていつまで経ってもデスクトップが表示されませんでした。USBを抜き差しすると効果音が鳴ったので起動自体はしているはずですが、画面には何も映りませんでした。

これを解決するためには、**BootCampでWindowsを起動する際は、画面出力をeGPUだけにする**必要がありました。

調べて見ると、eGPUを接続した時の挙動をうまく制御して起動してくれるEFIが非公式で配付されていました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://egpu.io/forums/mac-setup/automate-egpu-efi-egpu-boot-manager-for-macos-and-windows/">}}
</div></figure> 

個人的にはこれの導入に失敗したらOSが起動すらしてくれなくなるんじゃ？と考えたので、ブートローダー書き換えは今回は見送りました。

### ブート画面がeGPU経由だと表示されない

そこで3つ目に困ったことの話に繋がるわけですが、これがまた厄介です。2020年2月現在のCatalinaでは、<span class="smb-highlighter">eGPU経由で接続したディスプレイにブート画面が表示されない</span>んですよ。BootCampのWindowsにしろ、そのままMacを立ち上げるにしろ、ブート画面を見るためには内蔵グラフィックスの画面出力が必要です。でも内蔵グラフィックスとeGPUを両方とも使う構成で電源を入れても、Windowsは正常に起動しません。

つまり、<span class="smb-highlighter">ちゃんとOSが起動してくるまで、信じて待つしかない</span>わけです。デスクトップやログイン画面が表示されたら、起動成功で一安心。逆にいつまで経っても起動してこないと、電源を入れ直したり、eGPUなしで起動するかを確認する目に遭います。

Catalinaって、Beta版ではブート画面がeGPU経由でも表示できた！と一時話題になったんですけどね、僕の環境が悪いのか、Catalina 10.15.3ではeGPU経由ではブート画面が表示されません。

## FF15ベンチは「やや快適」

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1920" height="1080" src="/wp-content/uploads/2020/02/345cb7731ea9570f146a31b0417471c1.png" alt="" class="wp-image-17551"  sizes="(max-width: 1920px) 100vw, 1920px" /></figure>
</div>

Mac mini 2018＋RX5700XTという環境では、FF15ベンチで「5374」でした。7500くらいいくと思ったんですけどね、eGPUだとどうしても100％パフォーマンスが出るわけではなさそうです。7割ほどの性能でしょうか。

FFやるならRADEONよりもNVIDIAに最適化されているので、どうしても2060と比べてベンチ結果が落ちますが、今回はMacでもその恩恵を受けたいと思ったのでRADEONにしました。ので、個人的にはまぁまぁ満足でした。

## 感想

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1920" height="1080" src="/wp-content/uploads/2020/02/e3c7793b2224ea0e05a09a817e067df1.png" alt="" class="wp-image-17558"  sizes="(max-width: 1920px) 100vw, 1920px" /></figure>
</div>

ちょっと難ありかなと思うものの、例えこれからサブマシンを組むことになったとしてもグラボそのものは使い回せますし、BootCampのWindowsでもゲームが十分楽しめました。今現在Steam版のバイオ7を試しにプレイしてみていますがかなり快適です。PS4と全然違うわ。

eGPUってトラブルが多かったり、そこまで使ってみた事例が日本のサイトに載っていなかったりしたので、問題を解決するのに結構苦労しました。この記事が同じトラブルに見舞われた方の参考になれば幸いです。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <figure><a href="https://www.amazon.co.jp/SAPPHIRE-RADEON-%E3%82%B0%E3%83%A9%E3%83%95%E3%82%A3%E3%83%83%E3%82%AF%E3%82%B9%E3%83%9C%E3%83%BC%E3%83%89-11293-03-40G-VD7077/dp/B07Y22PDBG?psc=1&SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&tag=jun3010me-22&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B07Y22PDBG" target="_blank" rel="noopener noreferrer"><img decoding="async" style="border: none;" src="https://images-fe.ssl-images-amazon.com/images/I/51AVyfgk%2BsL._SL160_.jpg" /></a></figure>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/SAPPHIRE-RADEON-%E3%82%B0%E3%83%A9%E3%83%95%E3%82%A3%E3%83%83%E3%82%AF%E3%82%B9%E3%83%9C%E3%83%BC%E3%83%89-11293-03-40G-VD7077/dp/B07Y22PDBG?psc=1&SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&tag=jun3010me-22&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B07Y22PDBG" target="_blank" rel="noopener noreferrer">SAPPHIRE NITRO+ RADEON RX 5700 XT 8G グラフィックスボード 11293-03-40G VD7077</a> 
        
        <p>
          &nbsp;
        </p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://192.168.11.200:8000/" target="_blank" rel="nofollow noopener noreferrer">ポチポチ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=SAPPHIRE NITRO  RADEON RX 5700 XT&tag=jun3010me-22" target="_blank" rel="noopener noreferrer">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FSAPPHIRE NITRO  RADEON RX 5700 XT%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener noreferrer">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DSAPPHIRE NITRO  RADEON RX 5700 XT;vcptn=kaereba" target="_blank" rel="noopener noreferrer">Yahooショッピング<figure><img decoding="async" loading="lazy" style="display: none !important;" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&pid=884909937" width="1" height="1" border="0" /></figure></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
      &nbsp;
    </div>
  </div>
</div>