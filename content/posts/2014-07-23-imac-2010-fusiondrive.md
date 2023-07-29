---
title: iMac 2010にFusionDriveを導入する手順を書く
author: 魚住 惇
type: post
date: 2014-07-23T06:11:13+00:00
url: /imac-2010-fusiondrive-9268.html
thumbnail: /wp-content/uploads/2014/07/mini14060915461.jpg
scc_follow_count_feedly:
  - 37
categories:
  - Mac

---
<img decoding="async" loading="lazy" title="mini1406091546.jpg" src="/wp-content/uploads/2014/07/mini1406091546.jpg" alt="iMac2010にFusionDriveを導入する記事の表紙" width="600" height="450" border="0" />

<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

先日、念願のiMacを入手しました！  
ヽ(=´▽\`=)ﾉ

2010年モデルで、USB3.0も搭載していませんが、まだまだ現役で使える機種です  
(\`･ω･´)

しかし、SSD非搭載で、Macの動作に引っかかりを感じたので、  
内蔵DVDドライブを120GBのSSDに付け替えて、  
FusionDriveを構築することにしました。 

## FusionDriveって？

> Fusion Drive は、フラッシュストレージのパフォーマンスとハードディスクの容量を組み合わせた、Mac mini (Late 2012) および iMac (Late 2012 以降) コンピュータ向けの新しいストレージオプションです。
> 
> <p class="origin">
>   <a href="http://support.apple.com/kb/HT5446?viewlocale=ja_JP" target="new">Mac mini (Late 2012), iMac (Late 2012 and later)：Fusion Drive について</a>
> </p>

 

FusionDriveというのは、Macの中で、データを保存しているHDDという部品にSSDという部品を足して、1つの保存領域に見せる機能です。

HDDは大容量ですが、スピードが遅く、SSDはスピードが速くても容量が大きいとコストがかかります。

この2つの良いところ取りをしようというわけですね。

ただし、iMac2010の21.5インチモデルでは、DVDドライブを取り外さないとSSDを取り付けられないので、DVDを外付けにしてもよいという前提で作業していきます。

## 用意するもの

作業を始める前に、用意するものをここにメモっておこうと思います。 

### 吸盤

<img decoding="async" loading="lazy" title="mini1406092292.jpg" src="/wp-content/uploads/2014/07/mini1406092292.jpg" alt="カインズの吸盤" width="600" height="450" border="0" /> 

ディスプレイを取り外す為に、吸盤が必要です。  
僕はカインズホームで購入しましたが、Amazonではしっかりした吸盤が売られています。

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B001S7M5QG/jn050191-22/ref=nosim/" rel="nofollow" target="_blank"><img decoding="async" style="border: none;" src="http://ecx.images-amazon.com/images/I/41FzGcMGZML._SL160_.jpg" alt="" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B001S7M5QG/jn050191-22/ref=nosim/" rel="nofollow" target="_blank">スリーアキシス(three axis) バキュームリフターミニ2個組 最大耐荷重2kg 15901</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
      ミツトモ製作所
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a title="アマゾン" href="http://www.amazon.co.jp/gp/search?keywords=%8Bz%94%D5&__mk_ja_JP=%83J%83%5E%83J%83i&tag=jn050191-22" rel="nofollow" target="_blank">Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a title="楽天市場" href="http://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F%25E5%2590%25B8%25E7%259B%25A4%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" rel="nofollow" target="_blank">楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left;">
     
  </div>
</div>

### 精密ドライバーセット

iMacを分解する際、プラスドライバー以外にも、特殊な形をしているネジを外します。

この際、多様なネジに対応できるよう、セットを用意することをおすすめします。 

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B007RJ9KUS/jn050191-22/ref=nosim/" rel="nofollow" target="_blank"><img decoding="async" style="border: none;" src="http://ecx.images-amazon.com/images/I/41Jyu1ESYSL._SL160_.jpg" alt="" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B007RJ9KUS/jn050191-22/ref=nosim/" rel="nofollow" target="_blank">45in1精密ドライバーセットAC6089A（延長バー、グリップ付き）工具セット/トルクス(穴無し)ヘクスローブ/ソケット/六角棒/Y型/三角ビット/五角/ペンタローブ/プラス/マイナス</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
      アカウント株式会社
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a title="アマゾン" href="http://www.amazon.co.jp/gp/search?keywords=%90%B8%96%A7%83h%83%89%83C%83o%81%5B&__mk_ja_JP=%83J%83%5E%83J%83i&tag=jn050191-22" rel="nofollow" target="_blank">Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a title="楽天市場" href="http://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F%25E7%25B2%25BE%25E5%25AF%2586%25E3%2583%2589%25E3%2583%25A9%25E3%2582%25A4%25E3%2583%2590%25E3%2583%25BC%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" rel="nofollow" target="_blank">楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left;">
     
  </div>
</div>

 

### エアダスター

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B0019SZZVQ/jn050191-22/ref=nosim/" rel="nofollow" target="_blank"><img decoding="async" style="border: none;" src="http://ecx.images-amazon.com/images/I/51akPn7S6ML._SL160_.jpg" alt="" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B0019SZZVQ/jn050191-22/ref=nosim/" rel="nofollow" target="_blank">サンワサプライ エアダスター(逆さOKエコタイプ) CD-31SET</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
      サンワサプライ 2008-05-01
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a title="アマゾン" href="http://www.amazon.co.jp/gp/search?keywords=%83G%83A%83_%83X%83%5E%81%5B&__mk_ja_JP=%83J%83%5E%83J%83i&tag=jn050191-22" rel="nofollow" target="_blank">Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a title="楽天市場" href="http://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F%25E3%2582%25A8%25E3%2582%25A2%25E3%2583%2580%25E3%2582%25B9%25E3%2582%25BF%25E3%2583%25BC%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" rel="nofollow" target="_blank">楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left;">
     
  </div>
</div>

長年使ったiMacを分解すると、結構ホコリまみれになっているものです。  
エアダスターで、容赦なくホコリを吹き飛ばしていきましょう。

### セカンドHDDアダプタ

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00FCMC95K/jn050191-22/ref=nosim/" rel="nofollow" target="_blank"><img decoding="async" style="border: none;" src="http://ecx.images-amazon.com/images/I/415zp2QLMLL._SL160_.jpg" alt="" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00FCMC95K/jn050191-22/ref=nosim/" rel="nofollow" target="_blank">MacLab. 光学ドライブをHDDやSSDに置き換えるためのキット セカンドHDDアダプター (9.5mm厚のSlimlineSATAドライブを搭載したノートPC対応)【相性保証付き】</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
       
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a title="アマゾン" href="http://www.amazon.co.jp/gp/search?keywords=%83Z%83J%83%93%83hHDD%83A%83_%83v%83%5E%81%5B&__mk_ja_JP=%83J%83%5E%83J%83i&tag=jn050191-22" rel="nofollow" target="_blank">Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a title="楽天市場" href="http://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F%25E3%2582%25BB%25E3%2582%25AB%25E3%2583%25B3%25E3%2583%2589HDD%25E3%2582%25A2%25E3%2583%2580%25E3%2583%2597%25E3%2582%25BF%25E3%2583%25BC%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" rel="nofollow" target="_blank">楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left;">
     
  </div>
</div>

スリムドライブの部分に2.5インチのHDDやSSDを取り付ける為のアダプタです。  
特にこの部品がないと、SSDの取り付けができません。

それでは、早速オペを開始します  
(\`･ω･´)

## iMacを分解する

まず、iMacを分解していきます。

### ディスプレイカバーを外す

<img decoding="async" loading="lazy" title="mini1406092760.jpg" src="/wp-content/uploads/2014/07/mini1406092760.jpg" alt="吸盤を取り付ける" width="600" height="450" border="0" />  
ディスプレイ部分の右上と左上に、吸盤を取り付けます。

このディスプレイのガラスは、磁石の力でひっついているので、  
吸盤を引っ張っていくと・・・！

<img decoding="async" loading="lazy" title="mini1406092858.jpg" src="/wp-content/uploads/2014/07/mini1406092858.jpg" alt="吸盤の力で外れる" width="600" height="450" border="0" />  
こんな感じに簡単に外れるわけです。

### ディスプレイ部品を取り外す

<img decoding="async" loading="lazy" title="mini1406093012.jpg" src="/wp-content/uploads/2014/07/mini1406093012.jpg" alt="次に外すネジの場所" width="600" height="450" border="0" />  
続いて、ディスプレイ部品を取り外すので、  
赤で囲った部分のネジを外していきます。

ネジを外したら、ゆっくりとディスプレイ部品を上に上げます。  
<img decoding="async" loading="lazy" title="mini1406093118.jpg" src="/wp-content/uploads/2014/07/mini1406093118.jpg" alt="接続されたケーブルがある" width="600" height="450" border="0" />  
ここで注意です。  
ディスプレイを接続しているケーブルが何本かあるので、  
ゆっくり上げながら、ケーブルを外していきます。

<img decoding="async" loading="lazy" title="mini1406093228.jpg" src="/wp-content/uploads/2014/07/mini1406093228.jpg" alt="取り外し完了！" width="600" height="450" border="0" />  
これでHDDやDVDドライブが見えてきました。  
ここまで取り外せば、取り替え作業が行えます。  
分解完了です  
(\`･ω･´) 

## DVDスリムドライブをSSDに交換する

### スリムドライブを取り外す

<img decoding="async" loading="lazy" title="mini1406093378.jpg" src="/wp-content/uploads/2014/07/mini1406093378.jpg" alt="iMacの中のDVDスリムドライブ" width="600" height="450" border="0" />  
分解した後のこのDVDスリムドライブの部分。  
これをSSDに交換していきます。

と、その前に、このドライブに張り付いている、これ、  
<img decoding="async" loading="lazy" title="mini1406093753.jpg" src="/wp-content/uploads/2014/07/mini1406093753.jpg" alt="実は温度計" width="600" height="450" border="0" />  
これ実は、スリムドライブの温度を測る、温度計です。

外したまま放っておくのは勿体ないので、 

<img decoding="async" loading="lazy" title="mini1406093825.jpg" src="/wp-content/uploads/2014/07/mini1406093825.jpg" alt="温度計をHDDに貼った" width="600" height="450" border="0" />  
HDDに貼っておきました。 

### SSDに取り替える

このスリムドライブをネジを外して取り外すと、

<img decoding="async" loading="lazy" title="mini1406093427.jpg" src="/wp-content/uploads/2014/07/mini1406093427.jpg" alt="スリムSATA端子" width="600" height="450" border="0" />  
この端子が出てきます。  
これは、普通のSATA端子とは違って、スリムラインSATAと言われています。  
スリムドライブの接続に使われている専用のSATA端子です。

これにSSDを取り付ける為のアダプタが、

<img decoding="async" loading="lazy" title="mini1406093541.jpg" src="/wp-content/uploads/2014/07/mini1406093541.jpg" alt="HDDアダプタ" width="600" height="450" border="0" />  
これです。

このアダプタは、本当はMacBookProのスリムドライブ部分にHDDやSSDを取り付ける為の部品なんですが、端子の変換コネクタが日本で売っていない為、こいつを使うことにしました。

<img decoding="async" loading="lazy" title="mini1406093648.jpg" src="/wp-content/uploads/2014/07/mini1406093648.jpg" alt="SSDをアダプタに取り付けた" width="600" height="450" border="0" />  
こんな感じに、SSDをアダプタに取り付けました。

で、実はこのHDDアダプタ、iMacにうまくネジで固定できないんですね。

まぁSSDだし、固定できればいいっしょ！という考えのもと、今回は、

<img decoding="async" loading="lazy" title="mini1406094041.jpg" src="/wp-content/uploads/2014/07/mini1406094041.jpg" alt="ガムテープで固定" width="600" height="450" border="0" />  
ケーブルを接続した後、ガムテープで固定しました笑

これで取り付け作業完了です！  
ヽ(=´▽\`=)ﾉ

あとは、元通りにディスプレイを取り付けていきます。

ディスプレイ固定様のネジが余らないよう、  
気をつけてくださいね！ 

## FusionDriveを構築する

それではこれより、本体で設定作業を行います。

HDDとSSDを1つに見せる作業を行う為、  
HDDやSSDの中身がフォーマットされます。

HDDの中に大切なデータがある際は、  
必ずTimeMachine等でバックアップを取ったり、  
他の場所に移してください。 

### Macをリカバリーモードで起動する

<img decoding="async" loading="lazy" title="mini1406094475.jpg" src="/wp-content/uploads/2014/07/mini1406094475.jpg" alt="リカバリーモードで起動する" width="600" height="448" border="0" />  
「command」キーと「R」キーを押しながらMacを起動します。

そして、メニューの「ユーティリティー」→「ターミナル」を起動します。

ここで、少しコマンドを入力していきます 

<pre>-bash-3.2# diskutil list
/dev/disk0
   #:                       TYPE NAME                    SIZE       IDENTIFIER
   0:      GUID_partition_scheme                        *120.0 GB   disk0
   1:                        EFI EFI                     209.7 MB   disk0s1
   2:                  Apple_HFS ssd120gb                119.7 GB   disk0s2
/dev/disk1
   #:                       TYPE NAME                    SIZE       IDENTIFIER
   0:      GUID_partition_scheme                        *1.0 TB     disk1
   1:                        EFI EFI                     209.7 MB   disk1s1
   2:                  Apple_HFS Macintosh HD            999.3 GB   disk1s2
   3:                 Apple_Boot Recovery HD             650.0 MB   disk1s3
/dev/disk2
   #:                       TYPE NAME                    SIZE       IDENTIFIER
   0:     Apple_partition_scheme                        *1.3 GB     disk2
   1:        Apple_partition_map                         30.7 KB    disk2s1
   2:                  Apple_HFS OS X Base System        1.3 GB     disk2s2
/dev/disk3
   #:                       TYPE NAME                    SIZE       IDENTIFIER
   0:                            untitled               *524.3 KB   disk3
/dev/disk4
   #:                       TYPE NAME                    SIZE       IDENTIFIER
   0:                            untitled               *524.3 KB   disk4</pre>

このコマンドで、接続されているHDDやSSDを確認します。  
僕の場合は、disk0にSSDの120GB、disk1に1TBのHDDが接続されています。

そして、FusionDriveを作成します。 

<pre>-bash-3.2# diskutil cs create FusionDrive disk0 disk1←先ほどのディスク2つを指定する
Started CoreStorage operation
Unmounting disk0
Repartitioning disk0
Unmounting disk
Creating the partition map
Rediscovering disk0
Adding disk0s2 to Logical Volume Group
Unmounting disk1
Repartitioning disk1
Unmounting disk
Creating the partition map
Rediscovering disk1
Adding disk1s2 to Logical Volume Group
Creating Core Storage Logical Volume Group
Switching disk0s2 to Core Storage
Switching disk1s2 to Core Storage
Waiting for Logical Volume Group to appear
Discovered new Logical Volume Group "4A37ACD5-32B1-49BD-BBDB-420F60D1B829"
Core Storage LVG UUID: 4A37ACD5-32B1-49BD-BBDB-420F60D1B829
Finished CoreStorage operation</pre>

これでFusionDriveの作成が完了しました。

確認すると、こんな感じ。 

 

<pre>-bash-3.2# diskutil cs list
CoreStorage logical volume groups (1 found)
|
+-- Logical Volume Group <strong>4A37ACD5-32B1-49BD-BBDB-420F60D1B829</strong>
    =========================================================
    Name:         FusionDrive
    Status:       Online
    Size:         1119551062016 B (1.1 TB)
    Free Space:   1114056515584 B (1.1 TB)
    |
    +-＜ Physical Volume 85AF1931-CF3C-4703-92B5-2D408E575C84
    |   ----------------------------------------------------
    |   Index:    0
    |   Disk:     disk0s2
    |   Status:   Online
    |   Size:     119690149888 B (119.7 GB)
    |
    +-＜ Physical Volume 9EBCFA42-20D1-4011-BA4A-9383EE741C75
        ----------------------------------------------------
        Index:    1
        Disk:     disk1s2
        Status:   Online
        Size:     999860912128 B (999.9 GB)
</pre>

ここで表示された「Logical Volume Group」の右側の羅列を、コピーしておきます。

<pre>-bash-3.2# <strong>diskutil coreStorage createVolume 4A37ACD5-32B1-49BD-BBDB-420F60D1B829 jhfs+ iMacHD 100%</strong>
The Core Storage Logical Volume Group UUID is 4A37ACD5-32B1-49BD-BBDB-420F60D1B829
Started CoreStorage operation
Waiting for Logical Volume to appear
Formatting file system for Logical Volume
Initialized /dev/rdisk14 as a 1 TB case-insensitive HFS Plus volume with a 90112k journal
Mounting disk
Core Storage LV UUID: 58E01FD7-04FB-4455-A2D3-6C53330204D6
Core Storage disk: disk14
Finished CoreStorage operation</pre>

このコマンドで、先ほどのIDを使いました。また、  
「iMacHD」と書かれた部分は、任意の名前に変更しても構いません。

以上でFusionDriveの作成が完了しました！  
お疲れ様でした！  
ヽ(=´▽\`=)ﾉ

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/07/62ae32adfa36a91dfd9f1a9b9944ccab.png" alt="FusionDrive完成！" title="スクリーンショット_2014-07-23_15_03_07.png" border="0" width="344" height="600" />  
Mavericksをインストールして見ると、  
容量が1TBよりも多くなっていることが確認できました。  
1TB+120GBの値になっていますね。

## 感想

うん！HDDだけの時よりも確実に速くなってます！  
やっぱりレスポンスは大事ですね！！！  
(\*´ω｀\*)

サクサク快適！  
FusionDrive非搭載のMacでも導入可能な自作FusionDrive、  
興味のある方は是非やってみてください！  
(\`･ω･´)

(このブログを見て作業し、ディスプレイ部品が割れてしまって、当方は責任を負えませんからね！)

## このiMacの提供者様紹介

実はこのiMac、僕が学生時代から通っている理容室で働く美容師さんより、破格で譲ってもらいました。

その理容室の名は、「AI理容室」です  
(\`･ω･´)

いつもお洒落な髪型に仕上げてくださるAI理容室、  
愛知県小牧市にございます。

ご近所にお住まいの方は、是非ご利用くださいな！  
ヽ(=´▽\`=)ﾉ

<a href="http://www.wb.commufa.jp/airiyou/" target="_blank"><img decoding="async" loading="lazy" class="alignleft" align="left" border="0" src="http://capture.heartrails.com/150x130/shadow?http://www.wb.commufa.jp/airiyou/" alt="" width="150" height="130" /></a><a style="color:#0070C5;" href="http://www.wb.commufa.jp/airiyou/" target="_blank">AI理容室</a><a href="http://b.hatena.ne.jp/entry/http://www.wb.commufa.jp/airiyou/" target="_blank"><img decoding="async" border="0" src="http://b.hatena.ne.jp/entry/image/http://www.wb.commufa.jp/airiyou/" alt="" /></a><br style="clear:both;" />

 [1]: https://twitter.com/jun3010me