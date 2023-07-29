---
title: Mission Control でデスクトップ一覧が表示されない
author: 魚住 惇
type: post
date: 2013-02-15T03:02:10+00:00
url: /mission-control-desktop-kill-1261.html
thumbnail: /wp-content/uploads/2013/07/cc61b70a877f071a478f0e413d5c9611.jpeg
has_been_twittered:
  - yes
views:
  - 109
scc_follow_count_feedly:
  - 37
categories:
  - Mac

---
<img decoding="async" loading="lazy" title="スクリーンショット_2013-02-15_11.48.19.jpeg" src="/wp-content/uploads/2013/02/cc61b70a877f071a478f0e413d5c9611.jpeg" alt="スクリーンショット 2013 02 15 11 48 19" width="600" height="132" border="0" />

Thunderbolt-HDMIケーブルで外部ディスプレイに出力して使っていると、

本体液晶に表示を戻した時にこんなことがあります。これを直す為には、

<!--more-->

<img decoding="async" loading="lazy" title="スクリーンショット 2013-02-15 11.55.26.png" src="/wp-content/uploads/2013/02/2bca10f39290c4ef47ac374cbc4791e7.png" alt="スクリーンショット 2013 02 15 11 55 26" width="114" height="30" border="0" /> 

ターミナルにて、「<span style="font-size: 17px;">killall Dock</span>」と入力し、Enterを押します。

すると、Dockが強制終了され、自動で再起動してきます。</p> 

MissionControlもDockのプロセスで行なっているようなので、おかしくなったら

Dockを再起動すればいいわけです。</p> 

<p style="font-size: 17px;">
  解決！！！ヽ(=´▽`=)ﾉ
</p>