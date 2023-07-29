---
title: Windows10にリモートデスクトップで繋がらない時の確認箇所
author: 魚住 惇
type: post
date: 2018-08-13T08:00:00+00:00
url: /windows10-remotedesktop-14588.html
thumbnail: /wp-content/uploads/2018/08/Image-2018-08-13-14-37-320x180.jpeg
snap_isAutoPosted:
  - 1534147315
wp-seo-meta-robots:
  - 'a:0:{}'
snapEdIT:
  - 1
snapFB:
  - 's:1042:"a:1:{i:0;a:29:{s:2:"do";s:1:"1";s:5:"nName";s:11:"Facebook #0";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:6:"appKey";s:35:"x5g9aw2d4v22454x2w294d444a4p2b4u2z2";s:6:"appSec";s:69:"d3h0au284x2i5b4s224h5e414a4p2m5z2y2u2k584x24474e4w2p2y2d4w244q2748484";s:8:"postType";s:1:"A";s:8:"apiToUse";s:4:"fbfb";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:3:"tpt";s:0:"";s:4:"pgID";s:15:"627487850654942";s:6:"imgUpl";s:1:"T";s:10:"riComments";i:0;s:12:"riCommentsAA";i:0;s:5:"proxy";a:2:{s:5:"proxy";s:0:"";s:2:"up";s:0:"";}s:9:"wpImgSize";s:4:"full";s:5:"glpid";s:0:"";s:4:"uMsg";s:0:"";s:11:"accessToken";s:175:"EAAMjGZBx2DIABAK9Shrq8A1facZBzmI7j4gQptvfrvrC0QRXFBjndKxoJdk1x3YCLY5zT01ivVoEhYZCv0wO4N4WlEb8wNRBgIgy8OvpQQfV1zmMs4Tfgs9r2rrWnoya0gsx9AgvoAlPCKCha6ZAYq5mszCg54MRDGptJQ0xegZDZD";s:8:"authUser";s:15:"627487850654942";s:12:"authUserName";s:10:"Jun Uozumi";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:1038:"a:1:{i:0;a:28:{s:2:"do";s:1:"1";s:5:"nName";s:10:"Twitter #0";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:6:"appKey";s:55:"x5g9a2494h465u554l434265454e306b4j4m474q3o3w5r4h3a3b4r3";s:6:"appSec";s:105:"d3h0ak37413l546f4u25615i4n4j3p4w384o305r3l336s5d4i4n4u3q354p3u2o4p433o50325b4m4f4r3s463t454y534r3s3l57406";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:5:"twURL";s:29:"https://twitter.com/jun3010me";s:11:"accessToken";s:50:"67790051-Zy1o3Z7D9ONCVqKqdP2QPAIhGVwkCADeltfZN9dth";s:14:"accessTokenSec";s:45:"k94u64BhC2TPT95vmy98nXsz1WUVhQEFSW2qnZM46Q5z1";s:5:"tw140";i:0;s:10:"riComments";i:0;s:11:"riCommentsM";i:0;s:12:"riCommentsAA";i:0;s:8:"attchImg";s:1:"1";s:9:"wpImgSize";s:4:"full";s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1028914536147865600";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1028914536147865600";s:5:"pDate";s:19:"2018-08-13 08:01:56";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;}}";'
categories:
  - PC

---
やっと、やっと解決できた。苦節半年、ようやくこの問題を解決することが出来ました。MacとWindowsマシン両方を使う中で、MacからRDP接続すれば、いちいち切り替え無くてもMacで起動している1ウインドウ扱いでWindowsが操作できるからいいやんという結論に至ったんですが、しばらくすると接続が切れて、それ以降はping応答はあっても再接続が出来ない状態が続きました。

今回は、そんな状態を解決し、常にリモートデスクトップ接続できるようになったので、設定項目の確認箇所をまとめました。  


## リモートデスクトップ接続を許可する
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="577" src="/wp-content/uploads/2019/02/371871fabee2e3652f819cc90f5326ee-1024x577.png" alt="リモートの設定→このコンピュータへのリモートアシスタンス接続を許可する" class="wp-image-15669"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

基本中の基本ですが、このパソコンに対してリモートデスクトップ接続することを許可します。「コントロールパネル」→「システムとセキュリティ」→「システム」の項目にあります。
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="463" height="264" src="/wp-content/uploads/2019/02/8da9981fc9c4676acfbbc872ea5543a2.png" alt="" class="wp-image-15670"  sizes="(max-width: 463px) 100vw, 463px" /> </figure> 

ちなみに、この画面を開くのは、「PC」を開いた状態で、ドライブなどが表示されていない部分を右クリックして、「プロパティ」をクリックしても開くことができます。

## ファイアウォールの設定を見直す

もしも、リモートデスクトップ接続を許可しても繋がらなかったら、次にファイアウォール(余分な通信を遮断するシステム)の設定を疑います。Windows10には昔MicrosoftSecurityEssentialsと呼ばれていたものがWindows Defenderとして標準搭載され、ファイアウォールの設定もそこで管理しています<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://www.buffalo.jp/support/faq/detail/792.html">}}
</div></figure> 

BuffaloのサイトでWindowsファイアウォールの設定について書かれていたので参考にすると良いです。

もしも他でセキュリティソフトを入れているなら、Windows Defenderのファイアウォールが無効化されているので、インストール済みのセキュリティソフトの設定を見直すと良いです。
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="902" height="622" src="/wp-content/uploads/2019/02/eb5c13af7730029d6823465611326805.png" alt="" class="wp-image-15671"  sizes="(max-width: 902px) 100vw, 902px" /> </figure> 

もしセキュリティソフトのファイアウォールを1度無効化した状態でリモートデスクトップに成功し、ファイアウォールを有効化したら繋がらなくなったら、繋がらない原因はファイアウォールの設定です。僕自身はESET製のソフトをインストールしているので、対話型モードを通してリモートデスクトップ接続を許可しました。

## セッション数の制限を無効にする

Macからリモートデスクトップ接続することもあれば、iPadからもアクセスすることがある。マシン本体を直接操作することもある。といった具合に多方から接続する場合は、接続のセッション数に制限がかかることを無効化すると割とスムーズに接続できるようになります。

この部分の設定は、「[RDP Wrapper Library」][1]フリーのアプリを使うことで直接設定できます。無料です。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://github.com/stascorp/rdpwrap/releases">}}
</div></figure> 

## 大型アップデートをやっておく

Windows10から、ServicePackという呼び名ではなく、季節毎に大型アップデートという形で大がかりなアップデートが配信されるようになりました。

2019年2月現在の最新は、1809です。2018年の10月にOctober 2018 Updateとして配信されたものです。実は僕、普通にWindowsUpdateは定期的にやっていたんですが、こうした大型アップデートの配信は、いつもと同じWindowsUpdateでは配信されませんでした。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://www.microsoft.com/ja-jp/software-download/windows10ISO">}}
</div></figure> 

偶然、たまたま他のマシンにWindows10をインストールしたくて、インストールDVDのISOをマイクロソフトのサイトからダウンロードしていたところ、自分が使っているWindows10が最新ではないことに気づいたんです。

この記事を更新するにあたって、自分にとっての難関がこれでした。普通にWindowsUpdateはやっていたんです。でもそれだと、大型アップデートは実行されずにいて、1803で発生していたバグが未修正のまま過ぎていきました。

実はWindows10のビルド番号1803では、リモートデスクトップ接続においてバグが発生していました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://blogs.technet.microsoft.com/askcorejp/2018/05/02/2018-05-rollup-credssp-rdp/">}}
</div></figure> 

僕がこれまでリモートデスクトップ接続に悩まされ続けたのも、これが原因かなって思っています。現在の1809にアップデートしたら、接続が切れたり、それ以降一切繋がらないなんてことにはならなくなりました。

やっぱりWindowsは定期的にUpdateするのが正解ですね。

## まとめ

如何でしょうか。そもそもの設定を見直す、ファイアウォールの設定を見直す、セッション数の制限を取っ払う、Windows10の大型アップデートを適用しておく。

これくらいのことを見ておけば、きっとリモートデスクトップ接続できるようになるはずです。僕は今のところ、この設定での不具合に遭遇していません。Windows10のマシンに対してリモートデスクトップ接続したくても何故か繋がらないという時は、是非参考になさってみてください。

### ディスプレイエミュレータは無意味だった

このページの内容、実は先日まで「リモートデスクトップ接続が出来なくなった原因は、本体にディスプレイを繋いでいないからか？」と思ったことがきっかけで書いていた内容でした。実際それで助かることもあったんですが、根本的な原因は別のところにあることがわかり、今回のように加筆修正しました。

ディスプレイエミュレータが無くても、現在は普通にリモートから操作できます。

 [1]: https://github.com/stascorp/rdpwrap/releases/tag/v1.6.2