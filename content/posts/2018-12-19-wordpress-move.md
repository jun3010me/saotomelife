---
title: WordPressの引っ越しをiPadとTerminalのみで行う手順
author: 魚住 惇
type: post
date: 2018-12-19T03:00:52+00:00
url: /wordpress-move-15337.html
thumbnail: /wp-content/uploads/2018/12/1D73737F-8E47-4EBC-9ED6-1A023911F8C3.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1545188455
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:406:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1075224435689308166";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1075224435689308166";s:5:"pDate";s:19:"2018-12-19 03:00:57";}}";'
categories:
  - iOS
tags:
  - iPad活用

---
今回、さくらのクラウドをやめて、さくらのVPSを使うことにしました。ただ、さくらのクラウド内でなら、同じSSDやHDDを他のサーバに使うことができますが、さくらのクラウドから別のクラウドサーバや別のVPSなどのサービスに移行しようとしたい時などはそうはいきません。また、データベースを移行するためだけにphpmyadminを用意するのもかえって面倒臭い。  
それならコマンドで全て済ましてしまえ！と思ったのです。

## WordPressディレクトリをtarで圧縮する

wordpressがインストールされているディレクトリの中身を全て圧縮します。ディレクトリをそのまま圧縮しても良いと思いますが、KUSANAGIの場合はディレクトリの所有者や権限なども振ってあるはずなので、中身を1つのファイルに圧縮する方が後腐れなくて楽です。

<pre class="wp-block-code"><code>tar zcvf 181219wordpress.tar.gz *</code></pre>

## SQLファイルのバックアップ

mysqldumpでダンプする内容をsqlファイルにリダイレクトします。僕は大体いつも181217wordpress.sqlみたいなファイル名でリダイレクトしています。そうすればいつ取ったバックアップなのか判断できます。

<pre class="wp-block-code"><code>mysqldump -h localhost -u ユーザ名 -p データベース名 > 181219wordpress.sql</code></pre>

ちなみに作成した2つのファイルは、この後で新サーバからsftp接続してgetするので、kusanagiユーザのホームディレクトリにmvしておくのが楽です。  
以上でバックアップ完了です。

## 移行先のKUSANAGIでWordPressの初期設定をして中身を消す

僕はさくらのクラウドでKUSANAGIを使ってWordPressを動かしています。サーバの設定などを一括で設定できるし、ページの表示速度がめちゃ早いのでさくらのクラウドに実装されてからずっと愛用しています。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="MdwkqmsvaA">
    <a href="https://kusanagi.tokyo/">超高速CMS実行環境「KUSANAGI」</a>
  </blockquote>
</div></figure> 

で、限りなく同じサイトの設定で真っ新なWordPressを、移行先のサーバでセットアップしておきます。セットアップが終わったら、即座にwordpressディレクトリの中身を全部消します。良いんです消して。その場所でtarを解凍しますから。

<pre class="wp-block-code"><code>cd wordpressインストール先のディレクトリ
rm *
(-rfオプションを付ける場合は自己責任で）</code></pre>

## sftpで移行元からダウンロードする

tarで圧縮したディレクトリそのもののバックアップと、mysqldumpで吐き出したsqlファイルを移行元からダウンロードします。ftpクライアントとかで一度ローカルを経由すると時間がかかります。どうせならサーバ直でいきましょうよ。それならSSHのプロトコルを使ったsftpが良いです。

<pre class="wp-block-code"><code>sftp kusanagi@旧サーバのIPアドレス or ドメイン名
(ポート番号を変更している場合は -Pで指定する。僕は22番から絶対に変更する)

get さっき用意したtarやらsqlやら</code></pre>

## ダウンロードしたファイルを展開する

ダウンロードが終わったら、tarのファイルをさっき中身を全部消したディレクトリで解凍します。そうすれば、移行前と同じファイル群が展開できています。

<pre class="wp-block-code"><code>tar -xvf 181219wordpress.tar.gz</code></pre>

それと、SQLファイルはmysql コマンドでインポートします。

<pre class="wp-block-code"><code>mysql -u root -p データベース名 &lt; 181219wordpress.sql</code></pre>

## コマンドはええぞ！

そこそこの知識が必要で、コマンドを打つことが楽しくないとできないと言われていますが、僕はそんなに抵抗がないんですよね。

それに、本当はAll-in-One WP Migrationとかでサクサクらくらくバックアップを取りたいんですけど、このブログのディレクトリは3GBを超えていますし、SQLファイルだってそのままだと421MBあるわけですよ。phpmyadminもびっくりして受け付けてくれませんよ。zipで圧縮したら80MBくらいにはなりましたけど、ブラウザからインポートとかとても怖くてできない。

僕はもう4年ほどこの方法でサーバの移行作業を行なっています。  
コマンドだけでやれるので本当に楽です。最近はさくらのVPSもお試し期間の転送速度を上げてくれたので、ますます気に入りました。  
容量が許す限り、cronでスケジューリングするのも良いですね。

CodaとiPadとHHKBBTがあれば、これも出先から全部やれちゃいます。良い時代になったもんだホント。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B01DVRXF0A/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/41YmO-VVJnL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B01DVRXF0A/jn050191-22/" target="_blank" >PFU Happy Hacking Keyboard Professional BT 無刻印/墨 PD-KB600BN</a>
        
        <div class="kaerebalink-powered-date">
          posted with <a href="https://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        PFU 2016-04-12
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=PD-KB600BN&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FPD-KB600BN%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DPD-KB600BN&#038;vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://itunes.apple.com/jp/app/coda/id500906297?mt=8&uo=4&at=11l7ge"><img decoding="async" loading="lazy" src="https://is5-ssl.mzstatic.com/image/thumb/Purple128/v4/2a/f1/de/2af1de87-8879-9f6a-8194-6be1fcc701be/source/512x512bb.jpg" alt="Coda" class="pochi_img" width="150" height="150" /></a>
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://itunes.apple.com/jp/app/coda/id500906297?mt=8&uo=4&at=11l7ge">Coda</a>
      </div>
      <div class="pochi_price">
        3,000円
      </div>
      <div class="pochi_seller">
        <a href="https://itunes.apple.com/jp/developer/panic-inc/id403388568?uo=4&at=11l7ge">Panic, Inc.</a>
      </div>
      <div class="pochi_time">
        (2018.12.19時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" rel="nofollow noopener noreferrer" target="_blank">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
    </div>
  </div>
</div>