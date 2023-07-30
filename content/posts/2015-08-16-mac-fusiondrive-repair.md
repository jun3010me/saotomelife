---
title: Macの自作FusionDriveが吹っ飛んだ時の修理方法
author: 魚住 惇
type: post
date: 2015-08-16T11:28:47+00:00
url: /mac-fusiondrive-repair-11050.html
thumbnail: /wp-content/uploads/2015/08/thumb_IMG_1785_1024.jpg
categories:
  - Mac
  - 商品レビュー

---
<img decoding="async" loading="lazy" title="thumb_IMG_1785_1024.jpg" src="/wp-content/uploads/2015/08/thumb_IMG_1785_1024.jpg" alt="iMacの中身のSSD部分" width="512" height="384" border="0" /><!--more-->

こんにちは、[ジュン@jun3010me][1]です。

今から丁度1年ほど前に、2010年モデルのiMacを入手し、  
光学ドライブをSSDに換装してFusionDriveを組んでいました。  
****

<a href="http://jun3010.me/imac-2010-fusiondrive-9268.html" target="_blank">iMac 2010にFusionDriveを導入する手順を書く | No:9268 | 早乙女珈琲店</a>

&nbsp;

****

しかしですね、最近TimeMachineのバックアップが失敗することが多いなー  
なんて思っていた矢先、

<span class="ll">起動しなくなりました！<br /> (´；ω；｀)</span>

ぎゃー！iMacが死んだ！どうしよどうしよ！

なんていうことがあったので、急遽修理することにしました。

あああ・・・また嫌な出費だよ・・・・

## FusionDriveは関わるストレージが壊れたら全てがおしゃか！

上記リンク記事にてFusionDriveを組んだときは、  
120GBのSSD＋1TBのHDDという構成でした。

このFusionDriveが壊れたということは、  
論理ドライブが何かの拍子に破損したか、  
SSDかHDDのどちらかのストレージが物理的に逝った可能性があります。

今回の場合はというと、  
<img decoding="async" loading="lazy" title="thumb_IMG_1784_1024.jpg" src="/wp-content/uploads/2015/08/thumb_IMG_1784_1024.jpg" alt="SSDの画面" width="512" height="384" border="0" />  
YosemiteインストールUSBからディスクユーティリティを起動してみると、  
SSDが8.4MBしか認識されていない！！

これは明らかに<span class="b">SSDの異常</span>です。

原因はこれか！

しかし、この時点でFusionDriveは既に解除され、  
1TBのHDDはフォーマットすらしていない状態となっていました。

つまり、<span class="futoaka">SSDかHDDのどちらかが逝った時点でFusionDriveのデータが吹っ飛んだ</span>ということです。

この時点で、HDDだけにYosemiteをインストールするのか、  
新たなSSDを購入するのかを選択することとなりました。

### SanDiskのSSD240GBを購入

<img decoding="async" loading="lazy" title="thumb_IMG_1
<br />
783_1024.jpg" src="/wp-content/uploads/2015/08/thumb_IMG_1783_1024.jpg" alt="SanDiskのSSD" width="512" height="384" border="0" /> 

今回購入したのは、SanDisk製のSSDです。

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00NPIYMLW/jn050191-22/ref=nosim/" target="_blank"><img decoding="async" style="border: none;" src="http://ecx.images-amazon.com/images/I/31v0sfns8JL._SL160_.jpg" alt="" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00NPIYMLW/jn050191-22/ref=nosim/" target="_blank">SanDisk SSD UltraII 240GB 2.5インチ [国内正規品]メーカー3年保証付 SDSSDHII-240G-J25</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" target="_blank" rel="nofollow">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
      サンディスク 2014-09-26
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a href="http://www.amazon.co.jp/gp/search?keywords=SanDisk%20SSD%20UltraII%20240GB&__mk_ja_JP=%83J%83%5E%83J%83i&tag=jn050191-22" target="_blank">Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FSanDisk%2520SSD%2520UltraII%2520240GB%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank">楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left;">
  </div>
</div>

そこそこの価格で、結構良い性能で、  
まぁこれかなという感じ。

ほいで、SSDを換装して再度YosemiteUSBで起動してみると、

<img decoding="async" loading="lazy" title="thumb_IMG_1786_1024.jpg" src="/wp-content/uploads/2015/08/thumb_IMG_1786_1024.jpg" alt="SanDiskは認識している" width="512" height="384" border="0" />  
Oh!ちゃんと認識している！(\*´Д｀\*)

これで、SATAケーブルやマザーボードの不具合ではないことが確認できましたね。

あとは、去年書いた記事を参考にして、FusionDriveを作成していきます。  
****

<a href="http://jun3010.me/imac-2010-fusiondrive-9268.html" target="_blank">iMac 2010にFusionDriveを導入する手順を書く | No:9268 | 早乙女珈琲店</a>

&nbsp;

****

<img decoding="async" loading="lazy" title="thumb_IMG_1787_1024.jpg" src="/wp-content/uploads/2015/08/thumb_IMG_1787_1024.jpg" alt="FusionDrive完成" width="512" height="384" border="0" />  
ほい！FusionDriveが組めましたー。

&nbsp;

## セットアップ後にTimeMachineからデータ転送

びば！TimeMachine!!!  
ヽ(=´▽\`=)ﾉ

ドラ○もんじゃないけどタイムマシン大好き！  
(\*´Д｀\*)

バックアップ大事！本当に大事！  
(´；ω；｀)

今回の教訓は、まじでこれ。  
TimeMachineにバックアップしておいて本当によかった。

<img decoding="async" loading="lazy" title="thumb_IMG_1790_1024.jpg" src="/wp-content/uploads/2015/08/thumb_IMG_1790_1024.jpg" alt="Yosemiteのインストール" width="512" height="384" border="0" /> 

さて、無事にFusionDriveが認識したところで、  
インストールしていきましょかね！  
(\`･ω･´)

本当は、Yosemiteをインストールする前の状態で、  
TimeMachineから復元しようとも思ったんですが、  
思うようにマウントできなかったので、

1度Yosemiteをインストールしてから、  
アプリケーションやデータを転送することにしました。

<img decoding="async" loading="lazy" title="thumb_IMG_1791_1024.jpg" src="/wp-content/uploads/2015/08/thumb_IMG_1791_1024.jpg" alt="MacにTimeMachineから転送" width="512" height="384" border="0" /> 

Yosemiteをインストールして初期設定をしている時に、  
他のマシンからデータを転送するかどうか聞いてきます。

そこでTimeMachineからデータを転送すると、  
アプリからデータからアプリの設定まで引き付いてくれるんです。  
(\*´Д｀\*)

Windowsじゃ面倒なことも、  
Macだと全自動でやってくれる。

本当に助かります。待ってるだけなんですから。

## 今回得た教訓

バックアップ大事！  
(\`･ω･´)

<span class="b">TimeMachineは必須！</span>

<span class="ll"><span class="futoaka">バックアップはいつか必ず役に立つ！<br /> (`･ω･´)</span></span>

Mac使いのみなさん、タイムカプセルを買いましょう！

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00DCM3VXQ/jn050191-22/ref=nosim/" target="_blank"><img decoding="async" style="border: none;" src="http://ecx.images-amazon.com/images/I/31PWp3-pIgL._SL160_.jpg" alt="" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00DCM3VXQ/jn050191-22/ref=nosim/" target="_blank">APPLE AirMac Time Capsule &#8211; 3TB ME182J/A</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" target="_blank" rel="nofollow">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
      アップル 2013-06-11
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a href="http://www.amazon.co.jp/gp/search?keywords=ME182J%2FA&__mk_ja_JP=%83J%83%5E%83J%83i&tag=jn050191-22" target="_blank">Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FME182J%252FA%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank">楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left;">
  </div>
</div>

・・・高いね(´･ω･\`)

ネットワークだと、バックアップに時間がかかる事も多いので、  
手軽にバックアップをやっていきたい！という方は  
ポータブルHDDを使うことをオススメします。  
(\`･ω･´)

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00E055Y7K/jn050191-22/ref=nosim/" target="_blank"><img decoding="async" style="border: none;" src="http://ecx.images-amazon.com/images/I/51iYKS%2BtnvL._SL160_.jpg" alt="" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00E055Y7K/jn050191-22/ref=nosim/" target="_blank">WD ポータブルHDD My Passport Ultra 2TB 3年保証 USB 3.0 暗号化 パスワード保護 WDBMWV0020BTT-PESN</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" target="_blank" rel="nofollow">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
      Western Digital 2013-09-10
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a href="http://www.amazon.co.jp/gp/search?keywords=My%20Passport%20Ultra%202TB&__mk_ja_JP=%83J%83%5E%83J%83i&tag=jn050191-22" target="_blank">Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FMy%2520Passport%2520Ultra%25202TB%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank">楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left;">
  </div>
</div>

こいつでTimeMachineを使う為には、Mac用にフォーマットする必要があるので、  
気になる方は、こちら↓の記事をご覧ください。  
(\`･ω･´)  
****

<a href="http://jun3010.me/wd-my-passport-ultra-2tb-iyh-5755.html" target="_blank">TimeMachineに！写真のバックアップに！とにかくデータが沢山入る大容量ポータブルHDD！WD My Passport Ultra 2.0TB チタニウムを購入した！ | No:5755 | 早乙女珈琲店</a>

&nbsp;

****  
皆さん、バックアップはとっておいた方が良いですよ！  
ヽ(=´▽\`=)ﾉ

 [1]: https://twitter.com/jun3010me