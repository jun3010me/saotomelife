---
title: iPadのリマインダーとFantastical2の連携バグが修正されてる
author: 魚住 惇
type: post
date: 2018-07-15T08:00:00+00:00
url: /ipad-fantastical2-bugfix-14110.html
thumbnail: /wp-content/uploads/2018/07/UNADJUSTEDNONRAW_thumb_50bd-320x180.jpg
snap_isAutoPosted:
  - 1531644428
wp-seo-meta-robots:
  - 'a:0:{}'
snapEdIT:
  - 1
snapFB:
  - 's:1205:"a:1:{i:0;a:32:{s:2:"do";s:1:"1";s:5:"nName";s:11:"Facebook #0";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:6:"appKey";s:35:"x5g9aw2d4v22454x2w294d444a4p2b4u2z2";s:6:"appSec";s:69:"d3h0au284x2i5b4s224h5e414a4p2m5z2y2u2k584x24474e4w2p2y2d4w244q2748484";s:8:"postType";s:1:"A";s:8:"apiToUse";s:4:"fbfb";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:3:"tpt";s:0:"";s:4:"pgID";s:32:"627487850654942_1976965112373869";s:6:"imgUpl";s:1:"T";s:10:"riComments";i:0;s:12:"riCommentsAA";i:0;s:5:"proxy";a:2:{s:5:"proxy";s:0:"";s:2:"up";s:0:"";}s:9:"wpImgSize";s:4:"full";s:5:"glpid";s:0:"";s:4:"uMsg";s:0:"";s:11:"accessToken";s:175:"EAAMjGZBx2DIABAK9Shrq8A1facZBzmI7j4gQptvfrvrC0QRXFBjndKxoJdk1x3YCLY5zT01ivVoEhYZCv0wO4N4WlEb8wNRBgIgy8OvpQQfV1zmMs4Tfgs9r2rrWnoya0gsx9AgvoAlPCKCha6ZAYq5mszCg54MRDGptJQ0xegZDZD";s:8:"authUser";s:15:"627487850654942";s:12:"authUserName";s:10:"Jun Uozumi";s:8:"isPosted";s:1:"1";s:7:"postURL";s:62:"http://www.facebook.com/627487850654942/posts/1976965112373869";s:5:"pDate";s:19:"2018-07-15 08:47:08";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:1038:"a:1:{i:0;a:28:{s:2:"do";s:1:"1";s:5:"nName";s:10:"Twitter #0";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:6:"appKey";s:55:"x5g9a2494h465u554l434265454e306b4j4m474q3o3w5r4h3a3b4r3";s:6:"appSec";s:105:"d3h0ak37413l546f4u25615i4n4j3p4w384o305r3l336s5d4i4n4u3q354p3u2o4p433o50325b4m4f4r3s463t454y534r3s3l57406";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:5:"twURL";s:29:"https://twitter.com/jun3010me";s:11:"accessToken";s:50:"67790051-Zy1o3Z7D9ONCVqKqdP2QPAIhGVwkCADeltfZN9dth";s:14:"accessTokenSec";s:45:"k94u64BhC2TPT95vmy98nXsz1WUVhQEFSW2qnZM46Q5z1";s:5:"tw140";i:0;s:10:"riComments";i:0;s:11:"riCommentsM";i:0;s:12:"riCommentsAA";i:0;s:8:"attchImg";s:1:"1";s:9:"wpImgSize";s:4:"full";s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1018416667267760129";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1018416667267760129";s:5:"pDate";s:19:"2018-07-15 08:47:09";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;}}";'
categories:
  - iOS
tags:
  - iPad活用
  - タスク管理

---
みなさんスケジュール管理してますか？以前から気になっていたiOSリマインダーとFantastical2の連携バグが、本日2018年7月15日に配信されたアップデートで修正されたので紹介します。

## タスクはいつやるのかを決めると実行し易い

タスク管理において、そのタスクをいつ実行するのかを決めることが結構重要です。でないと「いつかやらなきゃなー」のままタスク一覧からタスクが消えないことが多くあります。

逆に言うと、実行しなければならないタスクを実行するという予定を立てれば、実行できるわけです。その予定を立てる時に、「自分にとって自由な時間で、まだ何をするのかを決めていない時間帯」を考えるんです。

## Fantastical2とリマインダーの連携

少し前に書いた記事で、Fantastical2とリマインダーの連携バグについて触れていました。

<a href="http://192.168.11.200:8000/ipad-taskmanagement-fantastical-13486.html" target="_blank" rel="noopener noreferrer">iPadで実践する「そのタスクをいつやるのか」を効率良く決める為のタスク管理システム | さおとめらいふ</a>  
遂にそのバグが修正されることになりました。

どういうことかというと、iPadのSplitViewでFantastical2とリマインダーを表示した時に、リマインダーに登録したタスクをFantastical2に向かってドラッグ&ドロップすることができるんですが、

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14109" src="/wp-content/uploads/2018/07/UNADJUSTEDNONRAW_thumb_50bd-1.jpg" width="1024" height="768"  sizes="(max-width: 1024px) 100vw, 1024px" /> 

このウィークリービューに向かってタスクを持って行くと、いかにもその時間を登録できそうな表示が出るものの、これまでは出来なかったんです。

でももう大丈夫。今回のアップデートでそのバグが修正されましたから。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14107" src="/wp-content/uploads/2018/07/UNADJUSTEDNONRAW_thumb_50bc.jpg" width="1024" height="768"  sizes="(max-width: 1024px) 100vw, 1024px" /> 

ね？これ意外と便利なんです。リマインダーのアプリ内で、タスクに日付や時間を設定するのって、よくあるクルクルダイヤルを回すアレで設定するんですよ。もうやりづらいったらありゃしない。でもこのドラッグ&ドロップなら、カレンダーを見ながら「そのタスクをいつ実行するのか」を決めることができます。

## 感想

スケジュール管理、もちろん僕はスクールプランニングノートを使っていますが、デジタルも併用すると、AppleWatchが知らせてくれたりと、通知の面でかなり助かります。

いつか手帳のスケジュール管理とスマホのスケジュール管理の融合方法についても書きたいと思います。

お楽しみに！

<div class="pochireba" style="text-align:left;font-size:small;padding:20px 0;zoom: 1;overflow: hidden;">
  <a href="https://itunes.apple.com/jp/app/fantastical-2-for-ipad/id830708155?mt=8&uo=4&at=11l7ge" target="_blank" rel="noopener noreferrer"><img decoding="async" loading="lazy" src="https://is4-ssl.mzstatic.com/image/thumb/Purple128/v4/c4/04/0d/c4040dec-e9cc-c4d3-e28f-d1aa1abdf59b/source/60x60bb.jpg" alt="Fantastical 2 for iPad" width="60" height="60" style="float:left;margin:0 15px 0 0;width:60px;height:60px;" class="pochi_img" /></a></p> 
  
  <div class="pochi_info" style="text-align:left;zoom: 1;overflow: hidden;">
    <div class="pochi_name">
      <a href="https://itunes.apple.com/jp/app/fantastical-2-for-ipad/id830708155?mt=8&uo=4&at=11l7ge" target="_blank" rel="noopener noreferrer">Fantastical 2 for iPad</a>
    </div>
    <div class="pochi_price" style="display:inline;">
      1,200円
    </div>
    <div class="pochi_time" style="font-size:x-small;display:inline;">
      (2018.07.15時点)
    </div>
    <div class="pochi_seller">
      <a href="https://itunes.apple.com/jp/developer/flexibits-inc/id435003924?uo=4&at=11l7ge" target="_blank" rel="noopener noreferrer">Flexibits Inc.</a>
    </div>
    <div class="pochi_post" style="font-size:x-small;">
      posted with <a href="http://pochireba.com" rel="nofollow noopener noreferrer" target="_blank">ポチレバ</a>
    </div>
  </div>
  <div class="pochireba-footer" style="clear: left">
  </div>
</div>