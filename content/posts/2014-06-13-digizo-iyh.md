---
title: USBメモリやHDD内の音楽や動画をWIFIで共有してiPhoneで再生するアダプタを買った！
author: 魚住 惇
type: post
date: 2014-06-13T03:16:43+00:00
url: /digizo-iyh-9064.html
thumbnail: /wp-content/uploads/2014/06/mini1402626742.jpg
scc_follow_count_feedly:
  - 37
categories:
  - 商品レビュー

---
<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/mini1402626742.jpg" alt="Mini1402626742" title="mini1402626742.jpg" border="0" width="600" height="450" /><!--more-->

こんにちは、[ジュン@jun3010me][1]です。

今回は、プリンストンが販売する、USBストレージをWIFIで共有するアダプタ「デジ蔵」を購入してみました  
(\`･ω･´)

これ、めっちゃ使えるので結構気に入っています  
(\*´Д｀\*)

## 開封！

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/mini1402626999.jpg" alt="Mini1402626999" title="mini1402626999.jpg" border="0" width="600" height="450" /> 

パッケージに付属していたのは、本体とMicroUSBケーブル、マニュアルです。

### 本体が小さい！

このデジ蔵の本体、とにかく小さくてビックリしました。



寸法的には、これくらい

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/mini1402627090.jpg" alt="Mini1402627090" title="mini1402627090.jpg" border="0" width="600" height="450" />  
5cm×5cm！すんごい小さいです！



<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/mini1402627067.jpg" alt="Mini1402627067" title="mini1402627067.jpg" border="0" width="600" height="450" />  
ダンボーminiというモバイルバッテリーと比べても、これだけ小さいということがわかります。



<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/mini1402627176.jpg" alt="Mini1402627176" title="mini1402627176.jpg" border="0" width="600" height="450" />  
側面は、WIFIのスイッチと電源コネクタとLAN端子があります。

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/mini1402627212.jpg" alt="Mini1402627212" title="mini1402627212.jpg" border="0" width="600" height="450" />  
他の面には、USB端子とリセットボタンが付いています。

## ちょっと詳しい話

このWIFIアダプタ、どういう仕組みなのかというと、  
USBで接続されたストレージをSambaで共有する組み込みPCなんです。  
WIFIルータとして機能し、iPhoneやタブレットなどをWIFIを通して接続することで、  
共有フォルダにアクセスできるわけです。  
恐らく、RaspberryPiでも同じことができるとは思いますが、  
デジ蔵の方がコンパクトなんですよね。  


また、WIFIルータとして機能していながら、WAN側を既存のWIFIアクセスポイントに接続できる為、  
デジ蔵をモバイルルーターに接続すれば、デジ蔵に接続したiPhoneはインターネットにも接続できるわけですね。

### 内蔵バッテリー無し

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/mini1402627830.jpg" alt="Mini1402627830" title="mini1402627830.jpg" border="0" width="600" height="450" />  
こいつ、実はバッテリーを内蔵していないので、モバイルバッテリーやACアダプタを通して給電してやる必要があるんです。  
僕はモバイルバッテリーで給電することにしました。

## iPhoneを接続してみる

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/2014-06-13_00_22_52.png" alt="2014 06 13 00 22 52" title="2014-06-13_00_22_52.png" border="0" width="338" height="600" />  
iPhoneをWIFIで接続してみることにします。  
電源スイッチは無いので、モバイルバッテリーから給電を開始すると自動で電源が入ります。  
しばらくすると、WIFIの画面にShAirDiskというAPが出てきます。  
こいつに接続します。

### 専用アプリを使う

<span class="appIcon"><img decoding="async" class="appIconImg" height="60" src="http://a1349.phobos.apple.com/us/r30/Purple/v4/46/d8/e4/46d8e44c-934e-e7e7-0cd7-076bc5ca8d35/iphone.png" style="float:left;margin: 0px 15px 15px 5px;" /></span>  
<span class="appName"><b><a href="https://itunes.apple.com/jp/app/shairdisk/id767318900?mt=8&#038;uo=4&#038;at=11l7gE" target="itunes_store">ShAirDisk</a></b></span>  
<span class="appCategory">カテゴリ: 写真／ビデオ, ユーティリティ</span>  
<span class="badgeS" style="display:inline-block; margin:6px"><a href="https://itunes.apple.com/jp/app/shairdisk/id767318900?mt=8&#038;uo=4&#038;at=11l7gE" target="itunes_store" style="display:inline-block;overflow:hidden;background:url(http://linkmaker.itunes.apple.com/htmlResources/assets//images/web/linkmaker/badge_appstore-sm.png) no-repeat;width:61px;height:15px;@media only screen{background-image:url(http://linkmaker.itunes.apple.com/htmlResources/assets//images/web/linkmaker/badge_appstore-sm.svg);}"></a></span><br style="clear:both;" />

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/2014-06-13-00.23.04.png" alt="2014 06 13 00 23 04" title="2014-06-13 00.23.04.png" border="0" width="338" height="600" />  
すると、USBで接続したHDDが表示されました！

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/2014-06-13-00.24.21.png" alt="2014 06 13 00 24 21" title="2014-06-13 00.24.21.png" border="0" width="600" height="338" />  
おおお！MP4動画が再生できたああああ！  
ヽ(=´▽\`=)ﾉ

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/2014-06-13_07_32_26.png" alt="2014 06 13 07 32 26" title="2014-06-13_07_32_26.png" border="0" width="338" height="600" />  
しかし、中には再生できない形式がありました。  
ん〜これは残念。



### 他のアプリから接続してみる

このアダプタは、Sambaが起動しているので、  
専用アプリ以外からでも接続が可能です。

専用アプリだと、再生できないファイル形式があったり、  
再生できたとしても、映像が途切れたりしていました。

そこで、Samba接続に対応している中で、動画の対応形式が多いアプリを探してみることにしました。  
その結果、

<span class="appIcon"><img decoding="async" class="appIconImg" height="60" src="http://a1706.phobos.apple.com/us/r30/Purple4/v4/83/bc/20/83bc20d7-d644-4e4e-6096-513f83f15d2d/Icon.png" style="float:left;margin: 0px 15px 15px 5px;" /></span>  
<span class="appName"><b><a href="https://itunes.apple.com/jp/app/vidon-player-mkv-avi-wma-mp4/id679482348?mt=8&#038;uo=4&#038;at=11l7gE" target="itunes_store">VidOn Player- MKV, AVI, WMA, MP4, FTP, UPnP, DLNA and sambaに対応する無料のHDムービーとストリーミングメディアプレーヤー</a></b></span>  
<span class="appCategory">カテゴリ: エンターテインメント, 写真／ビデオ</span>  
<span class="badgeS" style="display:inline-block; margin:6px"><a href="https://itunes.apple.com/jp/app/vidon-player-mkv-avi-wma-mp4/id679482348?mt=8&#038;uo=4&#038;at=11l7gE" target="itunes_store" style="display:inline-block;overflow:hidden;background:url(http://linkmaker.itunes.apple.com/htmlResources/assets//images/web/linkmaker/badge_appstore-sm.png) no-repeat;width:61px;height:15px;@media only screen{background-image:url(http://linkmaker.itunes.apple.com/htmlResources/assets//images/web/linkmaker/badge_appstore-sm.svg);}"></a></span><br style="clear:both;" />

このプレイヤーを見つけました  
(\`･ω･´)

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/2014-06-13-06.13.27.png" alt="2014 06 13 06 13 27" title="2014-06-13 06.13.27.png" border="0" width="338" height="600" />  


デジ蔵にWIFI接続すると、10.10.10.0/24のプライベートIPが割り当てられて、  
デジ蔵本体は10.10.10.254を名乗っています。  
なので、他のアプリからは、10.10.10.254にSamba接続すればいいわけです。  
ちなみに、Samba接続する時のユーザ名は「admin」です。



<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/2014-06-13-07.07.13.png" alt="2014 06 13 07 07 13" title="2014-06-13 07.07.13.png" border="0" width="600" height="338" />  
よっしゃ！結構多くの動画が再生できるようになりました！  
ヽ(=´▽\`=)ﾉ

## 実際に使ってみた感想

少し使ってみた感想を、ここに細かく書きたいと思います。  


### 対応する動画ファイル

上で説明したVidOnというプレイヤーだと、mkvやMPEG2-TS、MP4など、僕が扱っている動画ファイルの殆どを再生することができました。

めっちゃ満足してます。  
ただ、特に生TSファイルを再生しようとなると、WIFIの転送速度が追いつかないことがあったので、  
<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/211af23b6e755a38c7639dc6d2843883.png" alt="スクリーンショット 2014 06 13 10 51 34" title="スクリーンショット 2014-06-13 10.51.34.png" border="0" width="600" height="523" />  
ブラウザから「http://10.10.10.254/」にアクセスして設定画面を開き、WIFIの設定でモードを「11n」で固定しちゃいました。  
nに対応しているiPhoneなのに、b/gで接続するのは非常に勿体ないですよね。

こして転送速度を上げることで、生TSも止まることなく再生できました。

### 車で活用！

僕の愛車フィットには、アプリユニット(SPH-DA99)が積んであります。

ここでiPhoneやiPadを使って動画を再生することで、  
長距離ドライブを楽しくさせていたんですが、  
手持ちのiPadでも容量が64GBと限られている為、動画が沢山入らないんです。



<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/06/2014-06-13-09.36.36.jpg" alt="2014 06 13 09 36 36" title="2014-06-13 09.36.36.jpg" border="0" width="450" height="600" /> 

そこで、2TBのHDDをデジ蔵に繋いで、車内で使ってみました。

結構快適です！ヽ(=´▽\`=)ﾉ

HDDにもっと動画を入れるぞーーー  
(｀･ω･´)ゞ

### 買って良かった！

一言で言うと、買って良かったです！  
Amazonで3600円前後で買えるので、  
**スマホに容量を沢山入れたい！けど容量が足りない！</p> 

</b>

と悩んでいた人におすすめなアイテムだと思います  
(｀･ω･´)ゞ

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00JPZTARU/jn050191-22/ref=nosim/" rel="nofollow" target="_blank"><img decoding="async" src="http://ecx.images-amazon.com/images/I/4111m%2Bj7qCL._SL160_.jpg" style="border: none;" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00JPZTARU/jn050191-22/ref=nosim/" rel="nofollow" target="_blank">プリンストン デジゾウシリーズ ワイヤレスモバイルストレージ デジ蔵 ShAirDisk PTW-WMS1</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
      プリンストンテクノロジー 2014-04-30
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a href="http://www.amazon.co.jp/gp/search?keywords=%83f%83W%91%A0&#038;__mk_ja_JP=%83J%83%5E%83J%83i&#038;tag=jn050191-22" rel="nofollow" target="_blank" title="アマゾン" >Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a href="http://hb.afl.rakuten.co.jp/hgc/11e849bc.34cdbdf2.11e849bd.aca19015/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F%25E3%2583%2587%25E3%2582%25B8%25E8%2594%25B5%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" rel="nofollow" target="_blank" title="楽天市場" >楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left">
  </div>
</div>

 [1]: https://twitter.com/jun3010me