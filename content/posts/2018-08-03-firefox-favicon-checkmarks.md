---
title: Firefox 57以降でブックマークのfaviconを一括更新するアドオン「Checkmarks」
author: 魚住 惇
type: post
date: 2018-08-03T08:00:00+00:00
url: /firefox-favicon-checkmarks-14519.html
thumbnail: /wp-content/uploads/2018/08/071ee4364a301940d430d0611d219ff6-320x180.png
snap_isAutoPosted:
  - 1533283211
snapEdIT:
  - 1
snapFB:
  - 's:1042:"a:1:{i:0;a:29:{s:2:"do";s:1:"1";s:5:"nName";s:11:"Facebook #0";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:6:"appKey";s:35:"x5g9aw2d4v22454x2w294d444a4p2b4u2z2";s:6:"appSec";s:69:"d3h0au284x2i5b4s224h5e414a4p2m5z2y2u2k584x24474e4w2p2y2d4w244q2748484";s:8:"postType";s:1:"A";s:8:"apiToUse";s:4:"fbfb";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:3:"tpt";s:0:"";s:4:"pgID";s:15:"627487850654942";s:6:"imgUpl";s:1:"T";s:10:"riComments";i:0;s:12:"riCommentsAA";i:0;s:5:"proxy";a:2:{s:5:"proxy";s:0:"";s:2:"up";s:0:"";}s:9:"wpImgSize";s:4:"full";s:5:"glpid";s:0:"";s:4:"uMsg";s:0:"";s:11:"accessToken";s:175:"EAAMjGZBx2DIABAK9Shrq8A1facZBzmI7j4gQptvfrvrC0QRXFBjndKxoJdk1x3YCLY5zT01ivVoEhYZCv0wO4N4WlEb8wNRBgIgy8OvpQQfV1zmMs4Tfgs9r2rrWnoya0gsx9AgvoAlPCKCha6ZAYq5mszCg54MRDGptJQ0xegZDZD";s:8:"authUser";s:15:"627487850654942";s:12:"authUserName";s:10:"Jun Uozumi";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:1038:"a:1:{i:0;a:28:{s:2:"do";s:1:"1";s:5:"nName";s:10:"Twitter #0";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:6:"appKey";s:55:"x5g9a2494h465u554l434265454e306b4j4m474q3o3w5r4h3a3b4r3";s:6:"appSec";s:105:"d3h0ak37413l546f4u25615i4n4j3p4w384o305r3l336s5d4i4n4u3q354p3u2o4p433o50325b4m4f4r3s463t454y534r3s3l57406";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:5:"twURL";s:29:"https://twitter.com/jun3010me";s:11:"accessToken";s:50:"67790051-Zy1o3Z7D9ONCVqKqdP2QPAIhGVwkCADeltfZN9dth";s:14:"accessTokenSec";s:45:"k94u64BhC2TPT95vmy98nXsz1WUVhQEFSW2qnZM46Q5z1";s:5:"tw140";i:0;s:10:"riComments";i:0;s:11:"riCommentsM";i:0;s:12:"riCommentsAA";i:0;s:8:"attchImg";s:1:"1";s:9:"wpImgSize";s:4:"full";s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1025290220734836736";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1025290220734836736";s:5:"pDate";s:19:"2018-08-03 08:00:12";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;}}";'
categories:
  - 'ガジェット&amp;PC'

---
やっとこの機能のアドオンを見つけた！

ブラウザをインストールし直したりすると、Firefoxアカウントのおかげでブックマークやインストールしているアドオンが自動で入ってくるのはすごく助かっています。

しかし、ブックマークのサイト名の左側に表示されているアイコン、faviconは、1度そのサイトにアクセスしないと取得してくれません。

ということは、ファビコンを更新するためには、ブラウザを入れ直す度に、登録している全てのブックマークに登録する必要があるのか・・・。

今回紹介するアドオンは、そんな手間を解決してくれるアドオン「Checkmarks」です。

## Checkmarks

<div id="attachment_14518" style="width: 266px" class="wp-caption alignnone">
  <img aria-describedby="caption-attachment-14518" decoding="async" loading="lazy" class="alignnone size-full wp-image-14518" src="/wp-content/uploads/2018/08/194908.png" alt="アドオンページにあったスクリーンショット" width="256" height="256"  sizes="(max-width: 256px) 100vw, 256px" />
  
  <p id="caption-attachment-14518" class="wp-caption-text">
    アドオンページにあったスクリーンショット
  </p>
</div>

[Firefox Add-ons Checkmarks][1]

このリンクよりアドオンのページに飛べます。インストールした後はブックーマークしたサイト数にもよりますが、僕はこのアドオンの作業を開始させてから一晩寝かせました。

ただし、ユーザ名やパスワードがURL内にあって、アクセスすることでログインするようなブックマークに対しても当然アクセスするので、「ブックマーククリック大会を自動でやってくれる」っていう感覚です。勝手にアクセスされては困るサイトがブックマーク内に存在している人はその辺を気をつけるといいかなと思います。

## 環境を引っ越すことが多い人は必須

Firefoxがバージョン57になってからの大幅な仕様変更で、既存のアドオンが使えなくなりました。最近は「あのアドオンの機能、どこかにないかなぁ」なんて探すことが増えました。今回もその一つです。

でもこのおかげで、新しく環境を作っても落ち着けそうです。

[Firefox Add-ons Checkmarks][1]

 [firefox web-extension that checks bookmarks and reloads favicons][2]

 [1]: https://addons.mozilla.org/ja/firefox/addon/checkmarks-web-ext/?src=search
 [2]: https://github.com/tanwald/checkmarks