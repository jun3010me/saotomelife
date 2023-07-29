---
title: Kindle Paperwhiteで快適に読めるように自炊する
author: 魚住 惇
type: post
date: 2013-06-21T09:11:52+00:00
url: /kindle-paperwhite-jisui-pdf-3534.html
thumbnail: /wp-content/uploads/2013/07/2013-06-21-17.18.30.jpg
twitter_id:
  - 348005358679248896
views:
  - 267
scc_follow_count_feedly:
  - 37
categories:
  - Kindle

---
<img decoding="async" loading="lazy" title="2013-06-21 17.18.30.jpg" src="/wp-content/uploads/2013/06/2013-06-21-17.18.30.jpg" alt="2013 06 21 17 18 30" width="225" height="300" border="0" />

<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

昨日、友人の@miyamoto0625からKindle Paperwhite3Gを貰ってから、

今日、この記事を書くまでずっと

 

<p style="font-size: 15px;">
  <b>読書詰めでした笑</b>
</p>

 

だって**Kindleって本当に活字が読みやすいんだもん(\*´ω｀\*)**

いやぁ進む進む。

 

しかし、今まで**iPad用に自炊した本のPDFをKindleに入れてみる**と、 こんな表示になりました↓<img decoding="async" loading="lazy" title="2013-06-21 17.18.09.jpg" src="/wp-content/uploads/2013/06/2013-06-21-17.18.09.jpg" alt="2013 06 21 17 18 09" width="450" height="600" border="0" /> 

<p style="font-size: 17px;">
  <b>うわっ、なにこれ読めない(´；ω；｀)</b>
</p>

 

iPadの時は、綺麗な画面にスキャンしたそのままの画像を出すだけでも十分に読めたので、

自炊時の設定にはあまり気をつけてませんでした。

 

これでは自炊した本がKindleで読めず、

どんどんAmazonでKindle本を決済することになってしまうので、

Kindleで快適に読めるように、自炊し直してみることにしました。

 

## 自炊の流れ

今回の作業の流れはこんな感じ↓

**1.ScanSnapの設定でテキスト認識オプションを付け、スキャンする**

**2.余白をカットする**

**3.Kindleに転送する**

 

僕の環境では、ScanSnapはS1300を使用し、Windowsで自炊してます。

しかし、作業2番目からはMacを使ってます笑

**※2番で使うツールはJAVAで動く為、WindowsでもMacでも動きますよヽ(=´▽\`=)ﾉ**

**  
** 

**  
** 

## 1.ScanSnapの設定

上にも書きましたが、僕はScanSnapS1300をWindowsに接続してるので、 画像はScanSnap Organizerです。

<img decoding="async" loading="lazy" title="s1.png" src="/wp-content/uploads/2013/06/s11.png" alt="S1" width="600" height="424" border="0" /> 

S1300はスキャンスピードがあまり速くない為、スーパーファインに設定しました。

 

 

<img decoding="async" loading="lazy" title="s2.png" src="/wp-content/uploads/2013/06/s2.png" alt="S2" width="600" height="423" border="0" /> 

テキスト認識の設定をします。 **「検索可能なPDFにします」にチェック**を入れて、

**「テキスト認識オプション」を「全ページ」**にします。

これでスキャンしていきましょう。

 

### ※S1300で紙を50枚セットする裏技

僕は、S1300でも自炊に使いたいので、いつもこうやって紙をセットしています↓<img decoding="async" loading="lazy" title="2013-06-21 17.50.59.jpg" src="/wp-content/uploads/2013/06/2013-06-21-17.50.59.jpg" alt="2013 06 21 17 50 59" width="450" height="600" border="0" /> 

**紙を斜めにずらしてセット**するんです。

そうすると、公式の限界枚数よりも多くセットできます。

(たまに紙が詰まることがあるので注意です)

**S1300でも両面100ページを1回でスキャンすることができる**ので、

 **文庫本だと2〜3回のスキャンで自炊が可能**です。

 

 

## 2.余白をカットする

自炊が完了してPDFファイルが出来上がったら、そのPDFの余白をカットします。

PDFの全ページを一括トリミングする為に、[PDF Scissors][2]というツールを使用します。

[PDF Scissors][2]はJAVAで動くので、ウェブ上で作業できますが、 僕はオフラインで作業することにしました。

※動作する為には、JAVAのランタイムが必要となります。

 

このソフトでPDFを読み込むと、全ページが重なって表示されます。

<img decoding="async" loading="lazy" title="スクリーンショット 2013-06-21 6月21日金145 1.png" src="/wp-content/uploads/2013/06/92dff0959017e5d80923017116703df9.png" alt="スクリーンショット 2013 06 21 6月21日金145 1" width="308" height="518" border="0" /> 

中心が本文、上が章の名前、右下左下がページ番号です。

この文字が重なって黒くなっている部分以外が、

全てのページにとっての余白なので、

その本に合わせてトリミングする範囲を決めます。

 

<img decoding="async" loading="lazy" title="スクリーンショット 2013-06-21 6月21日金145.png" src="/wp-content/uploads/2013/06/40d24501c58e132744482be50f33c679.png" alt="スクリーンショット 2013 06 21 6月21日金145" width="318" height="529" border="0" /> 

こんな感じかな。 はみ出ている曲線部分は、岩波新書の表紙です。

まぁこれくらい切れてもいいでしょう。どうせ表紙だけだし。

 

## 3.Kindleに転送する

ここはもう言うまでもありません。 2の作業でトリミング後のファイルが出来上がっているので

KindleをPCに接続し、documentsフォルダに転送するだけです。

 

## テキスト認識&トリミングの効果

それでは、処理前と処理後で、画像を比較してみましょう。↓

### 処理前

<img decoding="async" loading="lazy" title="2013-06-21 17.18.09.jpg" src="/wp-content/uploads/2013/06/2013-06-21-17.18.091.jpg" alt="2013 06 21 17 18 09" width="450" height="600" border="0" /> 

 

 

### 処理後

<img decoding="async" loading="lazy" title="2013-06-21 17.18.30.jpg" src="/wp-content/uploads/2013/06/2013-06-21-17.18.301.jpg" alt="2013 06 21 17 18 30" width="450" height="600" border="0" /> 

**かなり読みやすくなりましたね！ヽ(=´▽\`=)ﾉ**

Kindle用の本と違ってどうしても余白が出来てしまうのはこの際仕方ないとして、

これくらいなら、**処理前の全然読めない状態から、少しは読める状態になりました**よね。

 

本当は、目次などの処理を**calibre**で行うといいんですけど、

とりあえず読める状態にしたい！という方は、今回の作業がおすすめです。(｀･ω･´)ゞ

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00CTUMMD2/jn050191-22/ref=nosim/" rel="nofollow" target="_blank"><img decoding="async" src="http://ecx.images-amazon.com/images/I/41NoItqQhVL._SL160_.jpg" style="border: none;" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00CTUMMD2/jn050191-22/ref=nosim/" rel="nofollow" target="_blank">Kindle Paperwhite 3G（ニューモデル）</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
      Amazon 2013-11-12
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a href="http://www.amazon.co.jp/gp/search?keywords=Kindle%20Paperwhite%203G&#038;__mk_ja_JP=%83J%83%5E%83J%83i&#038;tag=jn050191-22" rel="nofollow" target="_blank" title="アマゾン" >Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a href="http://hb.afl.rakuten.co.jp/hgc/11e849bc.34cdbdf2.11e849bd.aca19015/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FKindle%2520Paperwhite%25203G%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" rel="nofollow" target="_blank" title="楽天市場" >楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left">
  </div>
</div>

<div class="kaerebalink-box">
  <div class="kaerebalink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00CTUMNAO/jn050191-22/ref=nosim/" rel="nofollow" target="_blank"><img decoding="async" src="http://ecx.images-amazon.com/images/I/41NoItqQhVL._SL160_.jpg" style="border: none;" /></a>
  </div>
  <div class="kaerebalink-info">
    <div class="kaerebalink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00CTUMNAO/jn050191-22/ref=nosim/" rel="nofollow" target="_blank">Kindle Paperwhite（ニューモデル）</a></p>
      <div class="kaerebalink-powered-date">
        posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
      </div>
    </div>
    <div class="kaerebalink-detail">
      Amazon 2013-10-22
    </div>
    <div class="kaerebalink-link1">
      <div class="shoplinkamazon">
        <a href="http://www.amazon.co.jp/gp/search?keywords=Kindle%20Paperwhite&#038;__mk_ja_JP=%83J%83%5E%83J%83i&#038;tag=jn050191-22" rel="nofollow" target="_blank" title="アマゾン" >Amazon</a>
      </div>
      <div class="shoplinkrakuten">
        <a href="http://hb.afl.rakuten.co.jp/hgc/11e849bc.34cdbdf2.11e849bd.aca19015/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FKindle%2520Paperwhite%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" rel="nofollow" target="_blank" title="楽天市場" >楽天市場</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left">
  </div>
</div>

 [1]: https://twitter.com/jun3010me
 [2]: http://www.pdfscissors.com/