---
title: WordPressのプラグイン「Redirection」がnginx下で動かない時の対処法
author: 魚住 惇
type: post
date: 2019-05-10T03:00:00+00:00
excerpt: WordPressのプラグイン「Redirection」が上手く動かない時の対処法を紹介します
url: /wordpress-redirection-nginx-16531.html
thumbnail: /wp-content/uploads/2019/05/30df1b79928c1f2f555fc29c3820f268.png
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1557457207
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1126683308748824576";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1126683308748824576";s:5:"pDate";s:19:"2019-05-10 03:00:08";}}";'
categories:
  - ブログ考察

---
最近、カテゴリやタグの整理をしていました。タグを付けて整理していたものをカテゴリ化していました。大変ありがたいことに、タグのページへの被リンクがあったので、リダイレクトを設定しようと考えました。

しかし、Redirectionを始め、WordPressのプラグインでのリダイレクトがうまくいきませんでした。

今回は、プラグインでのリダイレクトが動作しなかった際に設定した内容についてお話します。

## サーバの設定ファイルに直接設定を書けば良いじゃん

そもそもこの作業が面倒で、プラグインなんかに頼っているわけなんですけどね。それが動かないので仕方ありません。これはもう、サーバの設定ファイルを直接書き換えるしかありませんわ。

しかしどうやって？という方におすすめなのが、転送ルールをRedirectionというプラグインで作成しておいて、設定ファイル形式でエクスポートする方法です。

### 転送ルールを作成する

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1252" height="305" src="/wp-content/uploads/2019/05/853cfcfe2c9a617964b49051f9469212.png" alt="" class="wp-image-16527"  sizes="(max-width: 1252px) 100vw, 1252px" /></figure>
</div>

僕が今回実際に設定した内容がこちらです。これまで「スクールプランニングノート」という単語をタグとして登録していましたが、カテゴリとして扱いたくなったので、カテゴリとして新たに登録しました。タグのURLは日本語のままにしていたので、URLが変わります。それをリダイレクトしようと考えました。

ソースURLに元のURLを設定して、ターゲットURLに転送先のURLを指定しました。

本来なら、これで動くはずなんですけどね、僕の環境下では動きませんでした。なので、次の手です。

### nginx形式でエクスポートする

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="715" height="529" src="/wp-content/uploads/2019/05/0dda32504409ca7e8209d9ab5f4a1865.png" alt="" class="wp-image-16528"  sizes="(max-width: 715px) 100vw, 715px" /></figure>
</div>

Redirectionのページを開いた時の、上に表示されたメニューから「インポート/エクスポート」に移動すると、設定したリダイレクトの内容をエクスポートできます。

ここでエクスポートする時に、Nginxのリライトルールとして表示をします。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="688" height="332" src="/wp-content/uploads/2019/05/d05fbbe11b934257a585c02f11299c9f.png" alt="" class="wp-image-16529"  sizes="(max-width: 688px) 100vw, 688px" /></figure>
</div>

すると、ここにサーバの設定ファイルに記述すべき内容が出てきます。

まぁnginxに詳しい人は、これも普通に自分で書いちゃうんでしょうけどね、僕は「**あ、これを貼るだけなんだ。便利だな。**」と思えるのでこっちの方が助かります。

あとはこの内容を既存の設定ファイルに追記するだけです。

設定ファイルは特に場所を変更していないなら、「/etc/nginx/conf.d」の中にあると思います。

ちなみに、ApacheでWordPressを動かしている人向けに、.htaccess用の記述もエクスポートできます。このプラグインにはこういう使い方もあったんですね。

## 感想

本当なら、この作業が嫌でプラグインを頼っているはずです。でも、それが動かない時は仕方ない。別のプラグインを試してもだめなら、サーバの設定ファイルを直接書き換えちゃいましょう。

この方法が、困っている方の助けになりますように。