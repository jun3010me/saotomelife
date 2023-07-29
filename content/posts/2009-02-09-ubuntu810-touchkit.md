---
title: Ubuntu8.10でtouchkitを使う(難有)
author: 魚住 惇
type: post
date: 2009-02-09T07:14:28+00:00
url: /ubuntu810-touchkit-373.html
thumbnail: /wp-content/uploads/2009/02/020909-0713-ubuntu810to1.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 4
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
</p> 

今回は、WindにUbuntu8.10上でタッチスクリーンを動作させようと試みました。

結論から言うと、微妙です。中心部分はそれなりにタッチ出来ますが、隅の方をタッチすると</p> 

<!--more-->

{{< figure src="/wp-content/uploads/2009/02/020909-0713-ubuntu810to1.jpg" alt="" >}} 

ズレとるやんけ！o(｀ω´*)o</p> 

とりあえず、ここまでのメモです。</p> 

まず、タッチスクリーンを動作させる為のfdiファイルが入っているevtouchをインストール。

sudo apt-get install x-server-xorg-input-evtouch</p> 

これをインストールすると、/usr/share/hal/fdi/policy/10osvendor/に50-touchkit.fdiが追加されています。

xorgのバージョンが上がって、xorg.confが使えなくなったけど、その代わりにこのfdiで設定する仕組みです。</p> 

そして、[システム]→[システム管理]→[Calibrate Touthscreen]を実行すれば、キャリブレーションが実行されます。

キャリブレーションが終わったら、そのセッションを再起動すると反映されます。</p> 

の、はずが、ズレるo(｀ω´*)o</p> 

ちなみに、Touchkitの現在のバージョンでは、新しいxorgに対応していません。</p> 

多少ズレてもいいならこれでも良いかもしれませんが、小さいアイコンや、Gnomeメニューをタッチする時に致命的です。</p> 

しばらく、Ubuntu8.04を使うことにします。</p> 

ちなみに、Ubuntu 8.04.2 LTSが1月31日にリリースされていました。

最新版ではありませんが、メンテナンスリリースです。(要するに、アップデートマネージャで全部更新した状態)

新規でインストールするより、こっちの方が早いですね。