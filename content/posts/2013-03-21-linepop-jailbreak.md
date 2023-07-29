---
title: LINEPOPの脱獄対策アップデートにこっちも対策しよう(追記あり)
author: 魚住 惇
type: post
date: 2013-03-21T05:18:16+00:00
url: /linepop-jailbreak-2214.html
thumbnail: /wp-content/uploads/2013/07/2013-03-21_12.36.49-2.png
has_been_twittered:
  - yes
views:
  - 28
scc_follow_count_feedly:
  - 37
categories:
  - iOS

---
<img decoding="async" loading="lazy" title="2013-03-21_12.36.49 2.png" alt="2013 03 21 12 36 49 2" src="/wp-content/uploads/2013/03/2013-03-21_12.36.49-2.png" width="600" height="156" border="0" /><!--more-->

**20130412追記**

**最新版LINE No Detectで起動可能となりました！**

**・<a rel="nofollow" href="http://192.168.11.200:8000/line-no-detect-update-2472.html" target="_blank">LINE No Detectがアップデート！ついに脱獄環境で最新版LINEPOPが起動可能に！ | 俺の記事@レンタルサーバ</a>**

&nbsp;

**20130503追記**

**LINEPOPのアップデートが再びありましたが、最新版LINE No Detectで起動可能でした。**

**・<a rel="nofollow" href="http://192.168.11.200:8000/linepop-140-update-2569.html" target="_blank">LINEPOPが1.4.0にアップデートされた！(脱獄環境でも起動可！) | 俺の記事@レンタルサーバ</a>**

&nbsp;

先日、LINEPOPのアップデートがあり、アイテムの変更など、嬉しい変更もありました。

<p style="font-size: 18px;">
  ・<a rel="nofollow" href="http://192.168.11.200:8000/linepop-1-3-0-1663.html" target="_blank">LINEPOPが1.3.0にアップデートされた(追記あり) | 俺の記事@レンタルサーバ</a>
</p>

&nbsp;

が、なんと脱獄環境では起動できない！ということが直後にわかりました。

<p style="font-size: 18px;">
  ・<a rel="nofollow" href="http://192.168.11.200:8000/linepop-1-3-jailbreak-1665.html" target="_blank">LINEPOP 1.3.0は脱獄環境では起動しない！ | 俺の記事@レンタルサーバ</a>
</p>

&nbsp;

こういうことは前回からあったんですが、

<p style="font-size: 18px;">
  ・<a rel="nofollow" href="http://192.168.11.200:8000/cydia-line-no-last-seen-1078.html" target="_blank">LINEで既読にならない！？ Line No Last Seen がやばい | 俺の記事@レンタルサーバ</a>
</p>

?こちらの記事に書いた通りに、CydiaのSourcesで「**http://cydia.hiraku.tw/**」を追加すると、

**「line no detect」**という脱獄アプリが出てきます。

これが本来、LINEゲームが脱獄後に起動できないという問題を解決するアプリだったんですが、

&nbsp;

**今回のLINEPOPのアップデートは、「line no detect」を対策した。ということになります。**

&nbsp;

では、こちらも対策しましょう。

※当ブログはここで行う行為を推奨しません。あくまで行動記録として更新致します。

&nbsp;

## 作業の流れ

現在、残念ながら有効なアップデート方法がありません。

つまり、対策前のバージョンからアップデートしないようにする方法しかないわけです。

&nbsp;

アプリの**iTunesMetadata.plist**を削除する方法が有効です。

今回は、tool4hackさんのこちらの記事を参考にさせていただきました。

<span style="font-size: 18px;">・</span><a style="font-size: 18px;" href="http://tools4hack.santalab.me/jaild-appstore-noupdatenotice.html" target="_blank">未脱獄で出来るもん！特定のAppStoreアプリだけアップデート通知をオフにする方法！ | Tools 4 Hack</a>

&nbsp;

僕は今回、この作業をiFileで行おうと思います。

iFileをインストールしていない人は、Cydiaでインストールしておいてください。

<img decoding="async" loading="lazy" title="2013-03-21_13.57.05.png" alt="2013 03 21 13 57 05" src="/wp-content/uploads/2013/03/2013-03-21_13.57.05.png" width="135" height="163" border="0" /> 

iFileを起動したら、少し設定を変えましょう。

&nbsp;

<img decoding="async" loading="lazy" title="2013-03-21_12.37.18-2-2.png" alt="2013 03 21 12 37 18 2 2" src="/wp-content/uploads/2013/03/2013-03-21_12.37.18-2-2.png" width="338" height="600" border="0" /> 

起動したら、設定のボタンをタッチしましょう。

&nbsp;

<img decoding="async" loading="lazy" title="2013-03-21_12.37.23-2.png" alt="2013 03 21 12 37 23 2" src="/wp-content/uploads/2013/03/2013-03-21_12.37.23-2.png" width="300" height="282" border="0" /> 

ファイルマネージャ→アプリケーション名をオンにします。

&nbsp;

&nbsp;

<img decoding="async" loading="lazy" title="2013-03-21_12.37.42_2.png" alt="2013 03 21 12 37 42 2" src="/wp-content/uploads/2013/03/2013-03-21_12.37.42_2.png" width="300" height="297" border="0" /> 

/var/mobile/Applicationsにインストールしたら、アプリ一覧からLINEPOPを見つけて、タッチしましょう。

&nbsp;

<img decoding="async" loading="lazy" title="2013-03-21_12.37.48-2-2.png" alt="2013 03 21 12 37 48 2 2" src="/wp-content/uploads/2013/03/2013-03-21_12.37.48-2-2.png" width="300" height="277" border="0" /> 

アプリの中に、「iTunesMetadata.plist」があるので、青い矢印のアイコンをタッチします。

&nbsp;

<img decoding="async" loading="lazy" title="2013-03-21_12.37.57.png" alt="2013 03 21 12 37 57" src="/wp-content/uploads/2013/03/2013-03-21_12.37.57.png" width="338" height="600" border="0" /> 

ここで、このファイル名を変更します。

今回は**「iTunesMetadata.plist」**<span style="font-size: 19px;">の後ろに「.bk」を追加して、</span>

<p style="font-size: 19px;">
  「iTunesMetadata.plist.bk」に変更します。
</p>

(他のファイル名でも構いませんよ。)

&nbsp;

<p style="font-size: 17px;">
  これで作業完了です。お疲れ様でした。
</p>

<p style="font-size: 17px;">
  <p>
    あとは、AppStoreをタスクより終了し、もう一度起動すると・・・
  </p>
  <p>
    <img decoding="async" loading="lazy" title="2013-03-21_12.38.15.png" alt="2013 03 21 12 38 15" src="/wp-content/uploads/2013/03/2013-03-21_12.38.15.png" width="338" height="600" border="0" />
  </p>
  
  <p style="font-size: 20px;">
    消えてますヽ(=´▽`=)ﾉ
  </p>
  <p>
    &nbsp;
  </p>
  <p>
    &nbsp;
  </p>
  <p>
    <img decoding="async" loading="lazy" title="2013-03-21_12.36.59.png" alt="2013 03 21 12 36 59" src="/wp-content/uploads/2013/03/2013-03-21_12.36.59.png" width="133" height="155" border="0" />
  </p>
  <p>
    このアイコンも・・・
  </p>
  <p>
    &nbsp;
  </p>
  <p>
    <img decoding="async" loading="lazy" title="2013-03-21_12.38.22.png" alt="2013 03 21 12 38 22" src="/wp-content/uploads/2013/03/2013-03-21_12.38.22.png" width="121" height="148" border="0" />
  </p>
  
  <p style="font-size: 17px;">
    数字が消えてます！ヽ(=´▽`=)ﾉ
  </p>
  <p>
    &nbsp;
  </p>
  <p>
    ただ、LINEPOPを起動すると、
  </p>
  <p>
    <img decoding="async" loading="lazy" title="2013-03-21_13.31.19.png" alt="2013 03 21 13 31 19" src="/wp-content/uploads/2013/03/2013-03-21_13.31.19.png" width="200" height="131" border="0" />
  </p>
  <p>
    この通知は消えません。これはアプリの問題なので仕方ないです。
  </p>
  <p>
    右上のバツで閉じましょう。
  </p>
  <p>
  </p>