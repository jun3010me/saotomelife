---
title: 学校のコンピュータ室にScratchを手っ取り早く導入する方法
author: 魚住 惇
type: post
date: 2019-03-03T06:52:46+00:00
excerpt: 学校のコンピュータ室にScratchを楽に導入する方法を紹介します
url: /scratch-pcroom-15900.html
thumbnail: /wp-content/uploads/2019/03/UNADJUSTEDNONRAW_thumb_57a4-1.jpg
snap_isAutoPosted:
  - 1551595968
wp-seo-meta-robots:
  - 'a:0:{}'
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:406:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1102099761157439488";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1102099761157439488";s:5:"pDate";s:19:"2019-03-03 06:53:54";}}";'
categories:
  - 教師のiPad仕事術

---
あと僅かで平成30年度が終わります。僕は今年度の情報の授業にて、プログラミング教育を実践しました。使用した言語というか、アプリは「Scratch」です。フローチャートをゼロから教えなくとも、日本語のブロックでプログラミングができるビジュアルプログラミングアプリの代表格です。

当然、授業を行うコンピュータ室にScratchをインストールする必要があるので、授業前に生徒が使うパソコン全台で作業する必要が出てきます。

今回はなるべく手間をかけずに、数十台のパソコンにScratchを導入する為に実践した内容についてお話します。

## Scratchのオフライン版を使う

Scratchはブラウザからサイトにアクセスするだけで気軽にプログラミングが体験できるのがメリットです。しかし、学校のコンピュータ室は復元ソフトなどを導入しているため、ブラウザのバージョンが古いままの環境で固定されている場合が結構多いです。

MicrosoftはWindows IT Pro Blogで、「IE(Internet Explorer)は技術的負債をもたらすので、使用を止めよう」という感じのことを述べています。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://techcommunity.microsoft.com/t5/Windows-IT-Pro-Blog/The-perils-of-using-Internet-Explorer-as-your-default-browser/ba-p/331732">}}
</div></figure> <figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://japanese.engadget.com/2019/02/08/internet-explorer-ie/">}}
</div></figure> 

ただ、学校に導入されているパソコンの多くはIEが標準ブラウザとして設定されたまま(というかむしろ設定を変えてない)なので、数年前からウェブサイトが正しく表示されなかったり、ウェブアプリがそもそも動かなかったりします。

今回導入するScratchも例外ではないので、僕はオフライン版のインストールを全力でおすすめします。

## オフライン版Scratchのインストール方法

Scratchのオフライン版を配付しているページよりインストーラをダウンロードして、インストールします。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://scratch.mit.edu/download">}}
</div></figure> 

ブラウザからアクセスするより手間ですが、この方がブラウザの不具合に巻き込まれることなくScratchを実行できます。

※今回、画面のスクショを取るためにVmwareにWindows10を急遽インストールしました。ランセンス認証前なのであしからず
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="805" src="/wp-content/uploads/2019/03/UNADJUSTEDNONRAW_thumb_579f.jpg" alt="" class="wp-image-15898"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 
<figure class="wp-block-image"><img decoding="async" loading="lazy" width="1024" height="805" src="/wp-content/uploads/2019/03/UNADJUSTEDNONRAW_thumb_57a3.jpg" alt="" class="wp-image-15893"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure> 

インストーラのダウンロードが終わり、実行すると、さらっとインストールが実行され、Scratchが起動してきます。
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="805" src="/wp-content/uploads/2019/03/UNADJUSTEDNONRAW_thumb_57a1.jpg" alt="" class="wp-image-15897"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

デスクトップにもショートカットが作成されているのがわかると思います。

### インストールを楽に行う工夫

さて、コンピュータ室のパソコン全てでインストーラを実行すれば良いわけなんですが、ちょっと面倒だなと思う人向けに、インストール作業を楽にする方法を書きます。

先ほどインストールしたScratchのショートカットのプロパティを開くと、どこにインストールしたのかがわかります。
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="805" src="/wp-content/uploads/2019/03/UNADJUSTEDNONRAW_thumb_57a0.jpg" alt="" class="wp-image-15894"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

ここを見ると、「**C:¥Users¥ユーザ名¥AppData¥Local¥Programs¥**」にScratchのプログラム本体があることがわかります。
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="805" src="/wp-content/uploads/2019/03/UNADJUSTEDNONRAW_thumb_57a2.jpg" alt="" class="wp-image-15895"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

実際にアクセスしてみると、**scratch-desktop**というフォルダがあり、その中にScratchのファイルがありました。

この<span class="smb-highlighter">「scratch-desktop」フォルダを、他のパソコンのDドライブなどにコピー</span>すれば、わざわざインストーラを実行しなくてもScratchの環境が整うわけです。

復元ソフトの多くはCドライブに行われた変更をシャットダウン時に無かったことにする設定だと思いますが、DドライブにScratchをフォルダごとコピーしておけば、復元から真逃れるのでおすすめです。

## ようこそScratchの世界へ
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="805" src="/wp-content/uploads/2019/03/UNADJUSTEDNONRAW_thumb_57a4.jpg" alt="" class="wp-image-15896"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

Scratchのことを、ただの小学生向けビジュアルプログラミングとして見ている人の、なんと多い事か。

ほら、この画像のとおり、入力した値が素数かどうかを判定するプログラムだって、この通り組めますよ。

プログラミングの世界へようこそ。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/%E3%81%A7%E3%81%8D%E3%82%8B%E3%82%AD%E3%83%83%E3%82%BA-%E5%AD%90%E3%81%A9%E3%82%82%E3%81%A8%E5%AD%A6%E3%81%B6-Scratch-%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0%E5%85%A5%E9%96%80-%E3%81%A7%E3%81%8D%E3%82%8B%E3%82%AD%E3%83%83%E3%82%BA%E3%82%B7%E3%83%AA%E3%83%BC%E3%82%BA-%E7%AB%B9%E6%9E%97-%E6%9A%81-ebook/dp/B073PSH2LJ?SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&#038;tag=jun3010me-22&#038;linkCode=xm2&#038;camp=2025&#038;creative=165953&#038;creativeASIN=B073PSH2LJ" target="_blank" rel="noopener noreferrer"><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/51nwWdraHKL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/%E3%81%A7%E3%81%8D%E3%82%8B%E3%82%AD%E3%83%83%E3%82%BA-%E5%AD%90%E3%81%A9%E3%82%82%E3%81%A8%E5%AD%A6%E3%81%B6-Scratch-%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0%E5%85%A5%E9%96%80-%E3%81%A7%E3%81%8D%E3%82%8B%E3%82%AD%E3%83%83%E3%82%BA%E3%82%B7%E3%83%AA%E3%83%BC%E3%82%BA-%E7%AB%B9%E6%9E%97-%E6%9A%81-ebook/dp/B073PSH2LJ?SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&#038;tag=jun3010me-22&#038;linkCode=xm2&#038;camp=2025&#038;creative=165953&#038;creativeASIN=B073PSH2LJ" target="_blank" rel="noopener noreferrer">できるキッズ　子どもと学ぶ　Scratch　プログラミング入門 できるキッズシリーズ</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://192.168.11.200:8000/pochipochi.php" rel="nofollow noopener noreferrer" target="_blank">ポチポチ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=Scratch　プログラミング入門&#038;tag=jun3010me-22" target="_blank" rel="noopener noreferrer">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FScratch　プログラミング入門%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener noreferrer">楽天市場</a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>