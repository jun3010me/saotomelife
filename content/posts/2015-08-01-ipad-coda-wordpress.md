---
title: iPad上でブログがいじれるアプリ「Coda」が素晴らしい
author: 魚住 惇
type: post
date: 2015-08-01T05:17:43+00:00
url: /ipad-coda-wordpress-10989.html
thumbnail: /wp-content/uploads/2015/08/slooProImg_20150801141742.jpg
categories:
  - iOS

---
<img decoding="async" loading="lazy" alt="Codaの記事の表紙" src="/wp-content/uploads/2015/08/slooProImg_20150801141741.jpg" width="600" height="450" class="slooProImg" />  
<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

最近、iPadでブログを更新する環境を整えてきました。  
<span class="b">だってMacBookPro重いし</span>

そりゃMacは便利なんですけど、iPadで同じことが出来るのであれば、  
そっちの方が手軽というもの。

タブレットでできることが増える方が、スマートな気がするんです。

で、少し前から「CodaのiOS版リリースやー！」みたいな記事を  
結構いろんなブログで見たんです。

<div class="pochireba" style="text-align:left;font-size:small;padding:20px 0;/zoom: 1;overflow: hidden;">
  <a href="https://itunes.apple.com/jp/app/coda-for-ios-webkodoeditadiet/id500906297?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" ><img decoding="async" loading="lazy" src="http://is5.mzstatic.com/image/pf/us/r30/Purple7/v4/51/1e/3a/511e3a94-2493-3bbe-7f5d-7634eaede888/AppIcon60x60_U00402x.png" alt="Coda for iOS (WebコードエディタDiet Codaの名前が変わりました！)" width="60" height="60" style="float:left;margin:0 15px 0 0;width:60px;height:60px;" class="pochi_img" /></a></p> 
  
  <div class="pochi_info" style="text-align:left;/zoom: 1;overflow: hidden;">
    <div class="pochi_name">
      <a href="https://itunes.apple.com/jp/app/coda-for-ios-webkodoeditadiet/id500906297?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" >Coda for iOS (WebコードエディタDiet Codaの名前が変わりました！)</a>&nbsp;(1,200円)
    </div>
    <div class="pochi_seller">
      <a href="https://itunes.apple.com/jp/artist/panic-inc./id403388568?uo=4&#038;at=11l7ge" target="_blank" >Panic, Inc.</a>&nbsp;<a href="https://itunes.apple.com/jp/app/coda-for-ios-webkodoeditadiet/id500906297?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" style="width:100px;color:#ffffff;background:#298CDA;font-size:10px;font-weight:bold;text-align:center;display:inline;text-decoration:none;border:0px;padding:5px;border-radius:10px;background:-moz-linear-gradient(rgba(85,182,237,0.5), rgba(41,140,218,1));background:-webkit-gradient(linear, 100% 0%, 100% 100%, from(rgba(85,182,237,0.5)), to(rgba(41,140,218,1)));white-space: nowrap;">iTunes で見る</a>
    </div>
    <div class="pochi_time" style="font-size:x-small;display:inline;">
      (2015.08.01時点)
    </div>
    <div class="pochi_post" style="font-size:x-small;">
      posted with <a href="http://pochireba.com" rel="nofollow" target="_blank">ポチレバ</a>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left">
  </div>
</div>

ただ、記事の内容を見ても「リリースじゃああ！」みたいな紹介記事ばかりで、  
Codaというアプリの存在を知らない自分にとっては、  
それで何が出来るか、じぇんじぇんわからんかったんです。

まぁ2400円が半額の1200円！とかやっていたんで、  
さぞかし凄いアプリなんだろうなぁ。  
開発系の人には必須なんだろうなぁ。くらいのイメージでした。

でもね。使ってみてわかった。  
これ、WordPressのテーマをいじったりするのに、  
すんごい使えます。  
(\`･ω･´)ゞ

## まずはサイトを登録

詳細は省略しますけど、まずはサイトを登録します。  
<img decoding="async" loading="lazy" alt="全般の設定" src="/wp-content/uploads/2015/08/slooProImg_20150801141739.jpg" width="600" height="450" class="slooProImg" /> 

そしてこれが、サイトを置いてるサーバにファイルをアップロードする設定。  
自分の場合はさくらのクラウドにSFTPでファイルを転送しているので、  
SFTPで設定しました。  
もちろん、普通にFTPの設定もできます。  
<img decoding="async" loading="lazy" alt="ファイルアップロードの設定" src="/wp-content/uploads/2015/08/slooProImg_20150801141737.jpg" width="600" height="450" class="slooProImg" /> 

そしてこれ、SSHの接続設定  
<img decoding="async" loading="lazy" alt="SSHの設定画面" src="/wp-content/uploads/2015/08/slooProImg_20150801141736.jpg" width="600" height="450" class="slooProImg" /> 

凄いねCodaって。SSHのクライアントまで備えているんですね。

正しく設定すれば、サーバ上にあるCSSを、  
リモートで更新できるわけですね。

ただし、このままではファイルをいじっても  
反映されないことがわかったので、  
少しサーバの設定を変更しました。

### サーバ側の設定

今、当ブログはさくらのクラウドでCentOSを動かして、  
その上でnginx+php-fpmを起動している上で動いています。

つまり、nginxやphp-fpmのプロセスを起動しているのは  
nginxというユーザで、サイト上からWordPressにログインして  
スタイルシートをいじる権限は、nginxが持っている。

しかし、このユーザnginxってのは、  
ログインシェルが指定されていない為にログインできない。  
という理由があるので、  
普段SSHでログインするために使っているアカウントをCodaで設定しても、  
そのままサイトがいじれるわけではないんですね。

そこで、nginxに対してログインシェルを指定して、  
パスワードを設定しておきます。

<pre class="console">#usermod -s /bin/bash nginx
#passwd nginx
</pre>

これでログイン可能となりました。  
あとは、ホームディレクトリの場所を、wordpressディレクトリの近くにしました。

<pre class="console">#usermod -d /var/www/hogehoge nginx
</pre>

ただし、ホームディレクトリの変更は、プロセスが起動している間にはできないので、  
一度nginxとphp-fpmを落としてから、コマンドを実行し、  
すぐにプロセスを起動させました。

この部分は、こちらのサイトを参考にさせていただきました。  
<a href="http://ja.amimoto-ami.com/2013/11/11/how-to-ssh-as-nginx-user/" target="_blank">nginx ユーザとして ssh 接続できるようにするには? | 超高速 WordPress AMI 網元</a>

## iPadでWordPressのテーマをいじれる素敵！！

iPadからWordPressのテーマのスタイルシートを直接いじれる！  
素敵！

<img decoding="async" loading="lazy" alt="Codaでスタイルシートを開いた" src="/wp-content/uploads/2015/08/slooProImg_20150801141734.jpg" width="600" height="450" class="slooProImg" /> 

iPadからSSH接続して、サーバもいじれる！  
素敵！

<img decoding="async" loading="lazy" alt="" src="/wp-content/uploads/2015/08/slooProImg_20150801141732.jpg" width="600" height="450" class="slooProImg" /> 

[speech\_bubble type=“In-flat&#8221; subtype=&#8221;R1&#8243; icon=&#8221;umadere200.png&#8221;]いろんなことがiPadで完結するスマートさは素晴らしい！[/speech\_bubble]

ほんと、便利な世の中となりましたね！  
みなさんも需要に合わせて、トライしてみてくださいな！

<div class="pochireba" style="text-align:left;font-size:small;padding:20px 0;/zoom: 1;overflow: hidden;">
  <a href="https://itunes.apple.com/jp/app/coda-for-ios-webkodoeditadiet/id500906297?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" ><img decoding="async" loading="lazy" src="http://is5.mzstatic.com/image/pf/us/r30/Purple7/v4/51/1e/3a/511e3a94-2493-3bbe-7f5d-7634eaede888/AppIcon60x60_U00402x.png" alt="Coda for iOS (WebコードエディタDiet Codaの名前が変わりました！)" width="60" height="60" style="float:left;margin:0 15px 0 0;width:60px;height:60px;" class="pochi_img" /></a></p> 
  
  <div class="pochi_info" style="text-align:left;/zoom: 1;overflow: hidden;">
    <div class="pochi_name">
      <a href="https://itunes.apple.com/jp/app/coda-for-ios-webkodoeditadiet/id500906297?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" >Coda for iOS (WebコードエディタDiet Codaの名前が変わりました！)</a>&nbsp;(1,200円)
    </div>
    <div class="pochi_seller">
      <a href="https://itunes.apple.com/jp/artist/panic-inc./id403388568?uo=4&#038;at=11l7ge" target="_blank" >Panic, Inc.</a>&nbsp;<a href="https://itunes.apple.com/jp/app/coda-for-ios-webkodoeditadiet/id500906297?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" style="width:100px;color:#ffffff;background:#298CDA;font-size:10px;font-weight:bold;text-align:center;display:inline;text-decoration:none;border:0px;padding:5px;border-radius:10px;background:-moz-linear-gradient(rgba(85,182,237,0.5), rgba(41,140,218,1));background:-webkit-gradient(linear, 100% 0%, 100% 100%, from(rgba(85,182,237,0.5)), to(rgba(41,140,218,1)));white-space: nowrap;">iTunes で見る</a>
    </div>
    <div class="pochi_time" style="font-size:x-small;display:inline;">
      (2015.08.01時点)
    </div>
    <div class="pochi_post" style="font-size:x-small;">
      posted with <a href="http://pochireba.com" rel="nofollow" target="_blank">ポチレバ</a>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left">
  </div>
</div>

この記事は <a href="https://itunes.apple.com/jp/app/surupuro-for-ios-buroguedita/id436676299?mt=8&#038;uo=4&#038;at=11l7gE" target="_blank">するぷろ for iOS.</a>を使って書いてみました。

 [1]: https://twitter.com/jun3010me