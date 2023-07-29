---
title: AppStoreからアプリアイコンの画像を取得するショートカット
author: 魚住 惇
type: post
date: 2019-06-12T03:00:00+00:00
excerpt: アプリのアートワークを取得するショートカットを作成しました
url: /appstore-artwork-shortcut-16764.html
thumbnail: /wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5cac.jpg
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1560308408
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1138642117893414913";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1138642117893414913";s:5:"pDate";s:19:"2019-06-12 03:00:11";}}";'
categories:
  - iOS
tags:
  - iPad活用

---
iPad活用セミナーの後に開かれた飲み会で、はるぅな@haruna1221さんがちらっと見せてくれたショートカットがあります。

アプリのアイコンを取得してくれるショートカット

はるなさんはこのショートカットを、セミナーで使うスライドにアプリのアイコンを挿入するために活用していたそうです。僕はそのショートカットの存在をしった時は、「ふーん、そういうことも出来るのね」なんて感じに思っていました。

でも今になって、欲しい！って思うようになったんですよ。

あの時は中身を見せてもらうことも、ファイルとしてもらうこともしていなかったしなぁ。

というわけで、自分で作ってみることにしました。

## 参考にしたサイト

「アプリアイコン取得　ショートカット」で検索してみると、次のサイトが出てきました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://hinari.jp/review/app/how-to-get-application-icon-using-shortcut-application/">}}
</div></figure> 

今回のショートカットを作成するにあたり、大変参考になりました。ただ、ここで公開されているショートカットをそのまま僕のiPadで実行しようとすると、何故か画像が取得できずにエラーが出てしまいました。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="1029" src="/wp-content/uploads/2019/06/568c5a2921c183bc2e0880680bde2b42.jpeg" alt="" class="wp-image-16761"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

原因を探ってみると、AppStoreのアプリのURLを引き渡してからアートワークを取得する部分で失敗している様子でした。つまり、AppStoreでアプリのページを開いて、そこの共有からショートカットに引き渡すやり方だと失敗するわけです。

## アプリ名を検索してアイコンを取得するショートカット

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="768" height="1024" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5ca9.jpg" alt="" class="wp-image-16758"  sizes="(max-width: 768px) 100vw, 768px" /></figure>
</div>

あの時の飲み会でははるなさんは何て言ってたっけ・・・、そうだ、アプリ名で検索してアイコンを取得しているっておっしゃっていたな。ということで、ショートカットを起動すると検索窓が開き、アプリ名を入力すると候補のアプリのアイコンを取得してくれるショートカットを作成しました。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5ca5.jpg" alt="" class="wp-image-16756"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

検索ワードを入力するためのボックスを開いて入力を要求し、変数に入れます。その内容でAppStoreで検索してヒットしたものをアプリアイコンっていうアルバムに保存するという仕組みです。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5ca7.jpg" alt="" class="wp-image-16757"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

ちなみにこれ、そのアプリ名で検索しても他のアプリが検索結果に出てしまうこともあるので、検索ワードでヒットするアプリ5個分のアイコンを取得するように設定しました。狙ったアプリ以外の画像も保存されますが、それは後で消すからまぁいいや。

使ってみたい方はこちら↓よりダウンロードしてください。

<div class="wp-block-buttons aligncenter is-layout-flex">
  <div class="wp-block-button">
    <a class="wp-block-button__link" href="https://www.icloud.com/shortcuts/d9254587b1054d4791e7453da22f48b6">アプリアイコンをその場で検索して取得する</a>
  </div>
</div>

## ショートカットを組むのがめっちゃ楽しい

今回のこのショートカットを作る作業、やってみると分かると思いますが、めちゃくちゃ楽しいんですよ。人によるんですかねこういうの。そりゃ思ったように動かないとストレスなんですけどね。

「プログラムは思ったようには動かない。書いた通りに動くのだ」っていう有名な言葉があります。まさにこの通りですよ。

コードを書くのではなく、ブロックで組めるのが尚良いですね。指でぽいぽいって動かしながら内容を書いていくのが、iPadだと尚更やりやすい。

そして何より動いた時の脳内アドレナリンどっぱどぱ状態で「きたああああああ！」ってなるあの感覚を一度覚えてしまったら、もうその快感が忘れられないわけですよ。あれ、僕なにかオカシイこと言いましたか？

ともかくこのiPadが自分の手によってどんどん便利になっていくっていう感覚が素晴らしい。これを読んだ方はショートカットアプリで自分が自動化したい内容を是非ワンタップで実現させてみてください。

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://apps.apple.com/jp/app/%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%82%AB%E3%83%83%E3%83%88/id915249334?uo=4&at=11l7gE"><img decoding="async" loading="lazy" class="pochi_img" src="https://is5-ssl.mzstatic.com/image/thumb/Purple113/v4/5d/d9/fe/5dd9fe9e-a4ac-483e-3b71-d19d9fe43209/source/512x512bb.jpg" alt="ショートカット" width="150" height="150" /></a> 
    
    <p>
       
    </p>
    
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://apps.apple.com/jp/app/%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%82%AB%E3%83%83%E3%83%88/id915249334?uo=4&at=11l7gE">ショートカット</a>
      </div>
      <div class="pochi_price">
        無料
      </div>
      <div class="pochi_seller">
        <a href="https://apps.apple.com/jp/developer/apple/id284417353?mt=12&uo=4&at=11l7gE">Apple</a>
      </div>
      <div class="pochi_time">
        (2019.06.12時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" target="_blank" rel="nofollow noopener noreferrer">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
       
    </div>
  </div>
</div>