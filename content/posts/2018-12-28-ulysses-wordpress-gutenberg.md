---
title: UlyssesからWordPressに投稿する前にGutenbergブロック化する
author: 魚住 惇
type: post
date: 2018-12-28T10:25:58+00:00
url: /ulysses-wordpress-gutenberg-15369.html
thumbnail: /wp-content/uploads/2018/12/UNADJUSTEDNONRAW_thumb_4906.jpg
snap_isAutoPosted:
  - 1545992760
wp-seo-meta-robots:
  - 'a:0:{}'
snapEdIT:
  - 1
snapFB:
  - 's:1042:"a:1:{i:0;a:29:{s:2:"do";s:1:"1";s:5:"nName";s:11:"Facebook #0";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:6:"appKey";s:35:"x5g9aw2d4v22454x2w294d444a4p2b4u2z2";s:6:"appSec";s:69:"d3h0au284x2i5b4s224h5e414a4p2m5z2y2u2k584x24474e4w2p2y2d4w244q2748484";s:8:"postType";s:1:"A";s:8:"apiToUse";s:4:"fbfb";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:3:"tpt";s:0:"";s:4:"pgID";s:15:"627487850654942";s:6:"imgUpl";s:1:"T";s:10:"riComments";i:0;s:12:"riCommentsAA";i:0;s:5:"proxy";a:2:{s:5:"proxy";s:0:"";s:2:"up";s:0:"";}s:9:"wpImgSize";s:4:"full";s:5:"glpid";s:0:"";s:4:"uMsg";s:0:"";s:11:"accessToken";s:175:"EAAMjGZBx2DIABAK9Shrq8A1facZBzmI7j4gQptvfrvrC0QRXFBjndKxoJdk1x3YCLY5zT01ivVoEhYZCv0wO4N4WlEb8wNRBgIgy8OvpQQfV1zmMs4Tfgs9r2rrWnoya0gsx9AgvoAlPCKCha6ZAYq5mszCg54MRDGptJQ0xegZDZD";s:8:"authUser";s:15:"627487850654942";s:12:"authUserName";s:10:"Jun Uozumi";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:1038:"a:1:{i:0;a:28:{s:2:"do";s:1:"1";s:5:"nName";s:10:"Twitter #0";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:6:"appKey";s:55:"x5g9a2494h465u554l434265454e306b4j4m474q3o3w5r4h3a3b4r3";s:6:"appSec";s:105:"d3h0ak37413l546f4u25615i4n4j3p4w384o305r3l336s5d4i4n4u3q354p3u2o4p433o50325b4m4f4r3s463t454y534r3s3l57406";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:5:"twURL";s:29:"https://twitter.com/jun3010me";s:11:"accessToken";s:50:"67790051-Zy1o3Z7D9ONCVqKqdP2QPAIhGVwkCADeltfZN9dth";s:14:"accessTokenSec";s:45:"k94u64BhC2TPT95vmy98nXsz1WUVhQEFSW2qnZM46Q5z1";s:5:"tw140";i:0;s:10:"riComments";i:0;s:11:"riCommentsM";i:0;s:12:"riCommentsAA";i:0;s:8:"attchImg";s:1:"1";s:9:"wpImgSize";s:4:"full";s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1078597934621413376";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1078597934621413376";s:5:"pDate";s:19:"2018-12-28 10:26:02";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;}}";'
categories:
  - iOS
  - ブログ考察

---
僕はこのブログをWordPressで構築して、iOSとMacで内容が同期できるエディタ「Ulysses」を使って書いています。

WordPressのバージョンが5.0になってから、投稿エディタがGutenbergというブロック単位で編集する仕組みに変わりました。これまでの投稿はClassicエディタで作られたということでClassicブロック扱いになり、UlyssesからWordPressに投稿すると全体がClassicブロックとして挿入されます。

これがなぁ、ページの表示上は問題無いとはいえ、なんか気持ち悪い。iOS版WordPressアプリも、2018年12月28日時点ではまだGutenbergの編集には対応していない。というかブラウザベースじゃないとカスタムブロックに対応するのは無理でしょうね。

となれば、今後もブログを書いていくなら、いずれはGutenbergに対応していった方が良いんだろうなぁ。というなんとなくの方向性だけは認識するようになりました。

## Ulyssesで書いた内容をGutenbergブロックへ
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1264" height="622" src="/wp-content/uploads/2018/12/UNADJUSTEDNONRAW_thumb_4907.jpg" alt="" class="wp-image-15366"  sizes="(max-width: 1264px) 100vw, 1264px" /> </figure> 

そこで考えたのが、執筆というか、入力自体は心地よく文章が書けるUlyssesで行い、WordPressへ下書きとして投稿し、その後自動で開くブラウザからの投稿編集画面にて「ブロックへ変換」を行うこと。

僕がブログを書くときなんて、そんなに複雑なタグは使いません。せいぜい、見出しと画像と段落と、あとはカエレバと吹き出しくらいかなぁ。とは言ってもそういったタグの塊はカスタムHTMLブロックにまるっと変換されたので、なんも心配なく投稿できます。

表示が崩れるか心配なら、プレビューしてみると良いですねきっと。

## もちろんiPadからもいける
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2018/12/UNADJUSTEDNONRAW_thumb_4908.jpg" alt="" class="wp-image-15367"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

この方法なら、これまで通りiPadからも記事が書けて、投稿前の調整もiPad上のブラウザからできる。うん、よし。

いつかはGutenberg主体の時代になるはず。というかWordPress5.0からはもうGutenbergがメインで、Classicはあくまで互換があるよ的な感じに見える。それなら外部エディタからそのまま投稿していた自分も、互換性が取れなくなってしまう前に、移行する方法を考えなかんなぁと思ったのでした。

そもそもの話、今回のことはGifu WordPress Meetupに参加したのがきっかけでした。ああいうWebのほんちゃんの人達と会うのは本当に楽しくて勉強になります。ブログを書こうとして色々検索しても、ブロガーが書いた記事しか見ないもので、WordPressのテーマを作っている人に実際にあったり、Webデザイナーさんと話したりすると、WordPressをブログにだけ使っている自分の視野が如何に狭いかがわかります。

その辺の話はこちらに書いたので時間があったらご覧ください。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="Esg3zHiytK">
    <a href="http://jun3010.me/gifu-wordpress-meetup-4-15236.html">Gifu WordPress Meetup 4に参加したら本当に楽しかった</a>
  </blockquote>
</div></figure> 

<a href="http://jun3010.me/gifu-wordpress-meetup-4-15236.html" target="_blank" rel="noopener">Gifu WordPress Meetup 4に参加したら本当に楽しかった – さおとめらいふ</a>