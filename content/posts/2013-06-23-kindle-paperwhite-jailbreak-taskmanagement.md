---
title: Kindle PaperwhiteをJailbreakしたらタスク管理が捗った
author: 魚住 惇
type: post
date: 2013-06-23T05:45:31+00:00
url: /kindle-paperwhite-jailbreak-taskmanagement-3565.html
thumbnail: /wp-content/uploads/2013/07/2013-06-23-10.48.06.jpg
twitter_id:
  - 348678196415320064
views:
  - 217
scc_follow_count_feedly:
  - 37
categories:
  - Kindle

---
<img decoding="async" loading="lazy" title="2013-06-23 10.48.06.jpg" src="/wp-content/uploads/2013/06/2013-06-23-10.48.06.jpg" alt="2013 06 23 10 48 06" width="225" height="300" border="0" />

<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

**KindlePaperwhite3G**を使い始めて3日目となりました。

KindlePaperwhiteって、何かGeekなこと出来ないかなぁと思って調べていたら、

 

なんと、**Jailbreakしてrootが取れる**じゃないですか！！

 

iPhone5とiPadminiを脱獄(Jailbreak)したり、

Android端末はとりあえずroot権限を持っておきたい僕として、是非ともチャレンジしたい！

 

と、思ったんですが、今回参考にしたこちらのサイト↓によると

<p style="font-size: 18px;">
  ・<a href="http://netbuffalo.doorblog.jp/archives/4300886.html" target="_blank">Kindle Paperwhiteを脱獄（Jailbreak）・スクリーンセーバーをカスタマイズする方法</a>
</p>

 

・・・、ふむ、スクリーンセーバーをカスタマイズね。

どうやら、カスタマイズしようにも、電子ブックリーダーなだけに、

**カスタマイズする項目があまりない**んですよね。

 

スクリーンセーバーというのは、こういうやつです。

<img decoding="async" loading="lazy" title="2013-06-23 09.49.12.jpg" src="/wp-content/uploads/2013/06/2013-06-23-09.49.12.jpg" alt="2013 06 23 09 49 12" width="450" height="600" border="0" /> 

モノクロの画像が表示されます。

 

電子ペーパーってやつは電気が流れていなくても表示が可能な為、 **こう見えてもスリープ中**なんです。

そこで僕は、

 

**ひらめいた！！<span style="font-size: 19px;">ここにチェックリストを表示しっぱなし</span>にすればいいんや！！ヽ(=´▽\`=)ﾉ**

 

となったわけです(｀･ω･´)ゞ

 

## Jailbreak方法のおさらい

今回は、こちらのサイトを参考にしました。

<p style="font-size: 18px;">
  ・<a href="http://netbuffalo.doorblog.jp/archives/4300886.html" target="_blank">Kindle Paperwhiteを脱獄（Jailbreak）・スクリーンセーバーをカスタマイズする方法</a>
</p>

 

## 1.Jailbreakに必要なファイルを用意する

このサイトから「kpw_jb.zip」をダウンロードし、解凍します。

<p style="font-size: 18px;">
  ・<a href="http://www.mobileread.com/forums/showthread.php?t=198446" target="_blank">K5 Kindle Paperwhite Jailbreak (5.2.0 &#8211; 5.3.1, 5.3.4, 5.3.5) &#8211; MobileRead Forums</a>
</p>

解凍すると、こんなファイルが出てきます。

<img decoding="async" loading="lazy" title="スクリーンショット 2013-06-23 6月23日日956.png" src="/wp-content/uploads/2013/06/a424fe2676787cc3b6b48ba10c9603cb.png" alt="スクリーンショット 2013 06 23 6月23日日956" width="141" height="107" border="0" /> 

 

この中で、

**Jailbreak.mobiをKindleのdocumentsフォルダの中へ**、

**Jailbreak.shとMOBI8_DEBUGをKindleの直下へ**と、 それぞれコピーします。

 

## 2.Kindleで操作する

すると、Kindleの画面にこんな本が表示されます↓

 <img decoding="async" loading="lazy" title="2013-06-23_09.57.14.jpg" src="/wp-content/uploads/2013/06/2013-06-23_09.57.14.jpg" alt="2013 06 23 09 57 14" width="305" height="400" border="0" />

おう、見るからに怪しいぞ笑

 

この本をタッチすると、この画面がでます↓

<img decoding="async" loading="lazy" title="2013-06-23 09.57.29.jpg" src="/wp-content/uploads/2013/06/2013-06-23-09.57.29.jpg" alt="2013 06 23 09 57 29" width="450" height="600" border="0" /> 

指示通り、JAILBREAKをタッチすると、

次の画面で画面の長押しを指示してきます↓

<img decoding="async" loading="lazy" title="2013-06-23 09.57.46.jpg" src="/wp-content/uploads/2013/06/2013-06-23-09.57.46.jpg" alt="2013 06 23 09 57 46" width="450" height="600" border="0" /> 

 

あとは待っていれば、スクリプトが頑張って作業してくれます<img decoding="async" loading="lazy" title="2013-06-23 09.58.10.jpg" src="/wp-content/uploads/2013/06/2013-06-23-09.58.10.jpg" alt="2013 06 23 09 58 10" width="600" height="450" border="0" />

 

無事に完了すると、本のリストにlogが残ります。

なんと親切なんだろう笑

<img decoding="async" loading="lazy" title="2013-06-23 09.59.01.jpg" src="/wp-content/uploads/2013/06/2013-06-23-09.59.01.jpg" alt="2013 06 23 09 59 01" width="450" height="600" border="0" /> 

 

JailBreakの作業自体はこれで完了です。

続いて、MacからKindleへSSH接続して、

コマンドを叩きましょう。

 

 

## 3.MacからSSH接続する

Kindleには、USB端子をNICとして認識させる方法があるので、

それを利用してSSH接続を試みます。

 

その為にまず、「ENABLE_DIAGS」というファイル名のファイル(中身は空でOK)を用意し、

Kindleの直下に入れます。

<img decoding="async" loading="lazy" title="スクリーンショット 2013-06-23 6月23日日1000.png" src="/wp-content/uploads/2013/06/29080e9ddd7f44ea00950b67ec84698d.png" alt="スクリーンショット 2013 06 23 6月23日日1000" width="248" height="200" border="0" /> 

 

そして、Kindleを再起動するとデバッグ画面が表示されます↓

<img decoding="async" loading="lazy" title="2013-06-23_10.03.13.jpg" src="/wp-content/uploads/2013/06/2013-06-23_10.03.13.jpg" alt="2013 06 23 10 03 13" width="450" height="600" border="0" /> 

おおー！！なんかハックしてる感がバンバンに出てますね！

僕はこういうデバッグ画面を見るとワクワクします笑

 

この画面から、**N)Misc individual diagnostics→U)Utilities→Z)Enable USBnetをタッチ**します

<img decoding="async" loading="lazy" title="2013-06-23_10.04.03.jpg" src="/wp-content/uploads/2013/06/2013-06-23_10.04.03.jpg" alt="2013 06 23 10 04 03" width="600" height="296" border="0" />  

 

すると、USB接続に、IPアドレスが割り当てられました

<img decoding="async" loading="lazy" title="2013-06-23_10.04.36.jpg" src="/wp-content/uploads/2013/06/2013-06-23_10.04.36.jpg" alt="2013 06 23 10 04 36" width="450" height="600" border="0" /> 

 

ここから1つ前の画面に戻ると、

Macの環境設定のネットワークに、新しい接続が追加されています↓

<img decoding="async" loading="lazy" title="スクリーンショット 2013-06-23 6月23日日1007.png" src="/wp-content/uploads/2013/06/a6961cf8def97b135e319cbfdb37057f.png" alt="スクリーンショット 2013 06 23 6月23日日1007" width="600" height="521" border="0" /> 

 

 

DHCPでIPアドレスを取得する設定になっているので、

手動に変更し、さっきKindleで割り当てられたIPアドレスと同一ネットワークで他のアドレスに変更します↓

<img decoding="async" loading="lazy" title="スクリーンショット 2013-06-23 6月23日日1008.png" src="/wp-content/uploads/2013/06/cf5683c51168b4762c3c5eaee96776ca.png" alt="スクリーンショット 2013 06 23 6月23日日1008" width="425" height="204" border="0" /> 

僕は192.168.15.1/24にしました。

 

## 4.KindleにSSH接続して作業する

ターミナルを起動して、
```
$ **<span style="color: #ff2600;">ssh root@192.168.15.244</span>**
```
を実行し、KindleにSSH接続します。

パスワードは**「<span style="color: #ff2600;">mario</span>」**です。

 

あとは赤い文字の通りにコマンドを実行していきましょう。
```
root@192.168.15.244&#8217;s password:  
#################################################  
\# N O T I C E \* N O T I C E \* N O T I C E #  
#################################################  
Rootfs is mounted read-only. Invoke mntroot rw to  
switch back to a writable rootfs.  
#################################################  
[root@[192\_168\_15_244] root]# <span style="color: #ff2600;"><b>mntroot rw</b></span>  
system: I mntroot:def:Making root filesystem writeable  
[root@[192\_168\_15_244] root]# <span style="color: #ff2600;"><b>mount /dev/mmcblk0p1 /mnt/base-mmc</b></span>  
[root@[192\_168\_15_244] root]# **<span style="color: #ff2600;">cp -pr /mnt/base-mmc/usr/share/blanket/screensaver /mnt/us/screensaver</span>**  
[root@[192\_168\_15_244] root]# <span style="color: #ff2600;"><b>mv /mnt/base-mmc/usr/share/blanket/screensaver /mnt/base-mmc/usr/share/blanket/screensaver.org</b></span>  
[root@[192\_168\_15_244] root]# <span style="color: #ff2600;"><b>ln -sfn /mnt/us/screensaver /mnt/base-mmc/usr/share/blanket/screensaver</b></span>  
[root@[192\_168\_15_244] root]# **<span style="color: #ff2600;">umount /mnt/base-mmc</span>**  
[root@[192\_168\_15_244] root]# <span style="color: #ff2600;"><b>exit</b></span>  
Connection to 192.168.15.244 closed.
```
 

SSH接続が終わった後、**Kindleの画面はトップまで戻ります。**

その後、**Device Settingsをタッチしてもう一度トップに戻り** 、

**Exit, Reboot or Disable Diagsをタッチ**、そして、

**Disable Diagnosticsをタッチ**します。

 

これで再起動されるはずです。

 

こうすることで、スクリーンセーバーの画像を保存しているフォルダを

Kindleの直下から見られるようになります。 

 

## 5.GIMPで画像を用意する

さて、ではどんな画像と差し替えるかという話になりますが、

758&#215;1024サイズのPNG画像ファイルが表示できるので、

こんな感じに仕上げました↓

<img decoding="async" loading="lazy" title="スクリーンショット 2013-06-23 6月23日日1034.png" src="/wp-content/uploads/2013/06/1d83151719d6f99d9a434db71631b000.png" alt="スクリーンショット 2013 06 23 6月23日日1034" width="426" height="600" border="0" /> 

 

僕は今回、GIMPで用意することにしました。

なんか、モノクロだと遺影みたいだな(´・ω・｀)

 

## 6.画像をバックアップして上書きする

 

再起動したKindleをUSB接続してみると、

直下に**screensaver**フォルダが表示されています。

<img decoding="async" loading="lazy" title="スクリーンショット 2013-06-23 6月23日日210 1.png" src="/wp-content/uploads/2013/06/ad27e6fedc905fd72444d3f812b1434d.png" alt="スクリーンショット 2013 06 23 6月23日日210 1" width="112" height="101" border="0" /> 

 

その中を見ると、なんと、PNG画像が20枚入っています。

<img decoding="async" loading="lazy" title="スクリーンショット 2013-06-23 6月23日日210.png" src="/wp-content/uploads/2013/06/a840d938dfe354042c37553d248c67c5.png" alt="スクリーンショット 2013 06 23 6月23日日210" width="176" height="387" border="0" /> 

 

これがランダムで表示されるわけですね。

 

僕は、**これらのファイルをMacにバックアップ**し、

自分の用意したPNGファイルのファイル名を**bg\_medium\_ss00.png**にして上書きしました。

 

画像が1枚だけなら、いつスリープしても同じ画像が表示されるはずなので、

他のファイルはKindle上から消しました。

 

## 7.結果

 

Kindleで電源ボタンを押してスリープさせてみると↓

<img decoding="async" loading="lazy" title="2013-06-23 10.48.06.jpg" src="/wp-content/uploads/2013/06/2013-06-23-10.48.061.jpg" alt="2013 06 23 10 48 06" width="450" height="600" border="0" /> 

おおー！自前の画像が表示されました！ヽ(=´▽\`=)ﾉ

Kindleの良いところは、**スリープの間ずっとこの画像を表示してくれること**です。

 

最近、**タスク管理でToodledo**を利用したり、

**スケジュール管理でStaccal**を利用してはいるものの、

やっぱり**意識してアプリを見ないと役に立たない**んですよね。

最悪、アプリを見たり使うことを忘れます**予定やタスクを入れただけで満足してしまいます。**

 

だから、**見るように意識させる為の工夫が必要**となるわけです。

 

今回のKindleのスクリーンセーバーは自分の意識をToodledoやStaccalに向ける為に

本当に丁度良いものでした。

 

iPadminiで本を読むと、どうしてもTwitterやSafariに切り替えたりして**読書から離れてしまう**んですが、

**KindlePaperwhiteの場合は、読書しか出来ないから、読書するんです。**

そして**読書に疲れて、スリープさせると、そこには**

**  
** 

**<span style="font-size: 17px;">Toodledoを見ろ！Staccalを見ろ！</span>と書いてある**んですよ。

 

**嫌でもタスク管理とスケジュール管理を忘れずに済む仕組みができました。(｀･ω･´)ゞ**

 

※**KindleをJailbreakすると、完全に元の状態に戻せなくなるのでリスクを背負う覚悟が必要です。**

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B017DOVE7I/jn050191-22/ref=nosim/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/41S3TnakuIL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B017DOVE7I/jn050191-22/ref=nosim/" target="_blank" >Kindle Paperwhite Wi-Fi + 3G、ホワイト</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        Amazon 2016-04-26
      </div>
      <div class="kaerebalink-link1">
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

 [1]: https://twitter.com/jun3010me