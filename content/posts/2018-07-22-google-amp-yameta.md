---
title: ブログのAMP対応をやめた3つの理由
author: 魚住 惇
type: post
date: 2018-07-22T08:00:00+00:00
url: /google-amp-yameta-14411.html
thumbnail: /wp-content/uploads/2018/07/ae020c71fabdc3fb57519b50a521239d-320x180.png
snap_isAutoPosted:
  - 1532246957
snapEdIT:
  - 1
snapFB:
  - 's:1205:"a:1:{i:0;a:32:{s:2:"do";s:1:"1";s:5:"nName";s:11:"Facebook #0";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:6:"appKey";s:35:"x5g9aw2d4v22454x2w294d444a4p2b4u2z2";s:6:"appSec";s:69:"d3h0au284x2i5b4s224h5e414a4p2m5z2y2u2k584x24474e4w2p2y2d4w244q2748484";s:8:"postType";s:1:"A";s:8:"apiToUse";s:4:"fbfb";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:3:"tpt";s:0:"";s:4:"pgID";s:32:"627487850654942_1990483334355380";s:6:"imgUpl";s:1:"T";s:10:"riComments";i:0;s:12:"riCommentsAA";i:0;s:5:"proxy";a:2:{s:5:"proxy";s:0:"";s:2:"up";s:0:"";}s:9:"wpImgSize";s:4:"full";s:5:"glpid";s:0:"";s:4:"uMsg";s:0:"";s:11:"accessToken";s:175:"EAAMjGZBx2DIABAK9Shrq8A1facZBzmI7j4gQptvfrvrC0QRXFBjndKxoJdk1x3YCLY5zT01ivVoEhYZCv0wO4N4WlEb8wNRBgIgy8OvpQQfV1zmMs4Tfgs9r2rrWnoya0gsx9AgvoAlPCKCha6ZAYq5mszCg54MRDGptJQ0xegZDZD";s:8:"authUser";s:15:"627487850654942";s:12:"authUserName";s:10:"Jun Uozumi";s:8:"isPosted";s:1:"1";s:7:"postURL";s:62:"http://www.facebook.com/627487850654942/posts/1990483334355380";s:5:"pDate";s:19:"2018-07-22 08:09:17";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:1038:"a:1:{i:0;a:28:{s:2:"do";s:1:"1";s:5:"nName";s:10:"Twitter #0";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:6:"appKey";s:55:"x5g9a2494h465u554l434265454e306b4j4m474q3o3w5r4h3a3b4r3";s:6:"appSec";s:105:"d3h0ak37413l546f4u25615i4n4j3p4w384o305r3l336s5d4i4n4u3q354p3u2o4p433o50325b4m4f4r3s463t454y534r3s3l57406";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:5:"twURL";s:29:"https://twitter.com/jun3010me";s:11:"accessToken";s:50:"67790051-Zy1o3Z7D9ONCVqKqdP2QPAIhGVwkCADeltfZN9dth";s:14:"accessTokenSec";s:45:"k94u64BhC2TPT95vmy98nXsz1WUVhQEFSW2qnZM46Q5z1";s:5:"tw140";i:0;s:10:"riComments";i:0;s:11:"riCommentsM";i:0;s:12:"riCommentsAA";i:0;s:8:"attchImg";s:1:"1";s:9:"wpImgSize";s:4:"full";s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1020943857654030336";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1020943857654030336";s:5:"pDate";s:19:"2018-07-22 08:09:18";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;}}";'
categories:
  - ブログ考察

---
ブログを書いているみなさん、AMPとやらに対応させていますか？Googleが公開した、「特定のルールに従ってマークアップすれば、表示が速いし、それに対応してることを検索結果などに反映できるよ」という感じのモバイルページの表示を加速させる計画です。

WordPressを使ってブログやサイトを制作しているなら、プラグインをインストールするだけでAMPに対応できます。当ブログもAMPを導入して、ページ表示の高速化を目指してきました。

でもねぇ、もううちではAMP対応を辞めたんですよ。今回はその理由について説明します。

## 理由1:対処すべきエラーが増える

<div id="attachment_14410" style="width: 945px" class="wp-caption alignnone">
  <img aria-describedby="caption-attachment-14410" decoding="async" loading="lazy" class="alignnone size-full wp-image-14410" src="/wp-content/uploads/2018/07/080eee75e6b64c9d71da63fcfbaea21b.png" alt="AMPページでアドセンスを貼ろうとした時のエラー" width="935" height="668"  sizes="(max-width: 935px) 100vw, 935px" />
  
  <p id="caption-attachment-14410" class="wp-caption-text">
    AMPページでアドセンスを貼ろうとした時のエラー
  </p>
</div>

AMP対応って、WordPressでやろうとすると、プラグインを入れるだけでいけるんですよ。簡単なんです。

でも、時としてエラーが出ます。Google SearchConsoleで警告してきます。プラグインを入れただけでAMPに対応していると、そのエラーに対応できない場合があります。だってタグに対する警告っていっても、プラグイン入れただけだし。

そのプラグインのバージョンがアップデートされたら解決する場合もありますが、バージョンアップを待っている間、ずっとエラーが表示されたままです。

そのAMP対応についてのエラーが出ていることが、検索順位に影響を与えるかどうかはわかりません。でも検索順位を上げたい、つまりSEO対策の一環としてAMPを導入したのに、そのAMPに振り回されること自体が、僕にとってはストレスだったんですよね。

ちなみに、僕が遭遇したエラーは、上記画像にもありますが、広告関連です。

## 理由2:広告が貼れない

僕がAMPを使いたくないと思う理由は、アドセンスなどの広告が反映できないという仕様があるからでした。

プラグインやWordPressのテーマによっては対応しているものもあるんですけどね、僕の環境には合わなかったんですよ。

で、当ブログの場合はAmazonのリンクなどを貼っていて、記事の本文とも関わってきているので、広告部分が表示されないと文章の続きが抜けてる！みたいな感じになってしまうんです。

これは・・・このブログには現状合わないかなって思いました。

## 理由3:記事執筆に時間をかけたい

AMPの表示具合などを確認したり、SearchConsoleでのエラーをチェックしたりと、そこそこ広告表示やデザインに時間を使ったんですが、僕の実力不足なのか解決に至りませんでした。

で、もうちょっとこの問題に時間をかけるか？と悩んでいたところだったんですが、それならばブログに使う時間があるなら、本来やらなければならないコンテンツそのものに使うべきだろう。と考えたんです。

それならAMPで悩むくらいなら、良い記事を書こう。

いや、まぁ、本当は解決すりゃぁいいんですけど、規格的に広告を表示できないのをどうにかしてやろうって考えるのも本末転倒だよなぁという自分の中での結論に至りました。(ちょっと逃避も入っているかも)

## おわりに

AMP対応は、個人のブログにとって重要なのかどうか。考え方は分かれるかもしれませんが、このブログはそこまでPV数が多くないからまだ先で良いかなと考えました。

大手ブログやニュースメディアならやった方が良いんでしょうけどね。

まずは良質なコンテンツを書く事。それだけに集中したいと思います。

<div class="cstmreba">
  <div class="booklink-box">
    <div class="booklink-image">
      <a href="http://www.amazon.co.jp/exec/obidos/asin/B07B2QXKF1/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/51PvqudD6fL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="booklink-info">
      <div class="booklink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/asin/B07B2QXKF1/jn050191-22/" target="_blank" >WordPress AMP対応 モダンWeb制作 レッスンブック[Kindle版]</a></p>
        <div class="booklink-powered-date">
          posted with <a href="https://yomereba.com" rel="nofollow" target="_blank">ヨメレバ</a>
        </div>
      </div>
      <div class="booklink-detail">
        エビスコム ソシム 2018-03-02
      </div>
      <div class="booklink-link2">
        <div class="shoplinkkindle">
          <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B07B2QXKF1/jn050191-22/" target="_blank" >Kindle</a>
        </div>
        
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/exec/obidos/ASIN/4802610912/jn050191-22/" target="_blank" >Amazon[書籍版]</a>
        </div></p>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>