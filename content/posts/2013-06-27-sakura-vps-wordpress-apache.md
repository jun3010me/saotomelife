---
title: さくらVPSでWordPressを快適に動かす為、Apacheの設定を見直した
author: 魚住 惇
type: post
date: 2013-06-27T04:17:19+00:00
url: /sakura-vps-wordpress-apache-3604.html
thumbnail: /wp-content/uploads/2013/07/ffaa7528cecda892ca4193a7949b5664.png
twitter_id:
  - 350105565042720769
views:
  - 91
scc_follow_count_feedly:
  - 37
categories:
  - ブログ考察

---
<img decoding="async" loading="lazy" title="スクリーンショット_2013-06-27_6月27日木1159.png" src="/wp-content/uploads/2013/06/ffaa7528cecda892ca4193a7949b5664.png" alt="スクリーンショット 2013 06 27 6月27日木1159" width="400" height="121" border="0" />

<!--more-->

昨日、さくらVPSで運営している当ブログ**「BeginningNEWS」に繋がらない**というトラブルが相次ぎました。

また、他に運営しているサイトにも同様のトラブルが起こってしまいました。

 

トラブル発生時の状態 とにかく、サイトに繋がりませんでした。

なんでや！と思いながらコマンドを叩くと、

**・SSHでアクセスしようとしても繋がらない**

**・Pingは通る**

 

**ん〜、どゆこと？(´・ω・｀)** という事態になりました。

 

## さくらVPSの管理画面から再起動

とりあえずサーバを再起動することで、ブログは復活しました。

しかし、**しばらくすると、また表示できなくなりました。**

 

## logを見てみよう

**cat /var/log/message**を見てみると、

**Out of memory: Kill process**でhttpsが終了されてるではありませんか！

 

なんでApacheが殺されてしまうん？と思ったので、調べてみると↓

<p style="font-size: 18px;">
  ・<a href="http://www.usupi.org/sysad/035.html" target="_blank">メモリが足りない…とは? &#8211; いますぐ実践! Linuxシステム管理 / Vol.035</a>
</p>

どうやら**Apacheで使うメモリが多すぎて、Swapも限界まで使った結果、**

**プロセスを終了するしかなかった**わけですね。

 

## 他の方がやられている対策

 

調べていくと、こちらのサイトを発見しました↓

<p style="font-size: 18px;">
  ・<a href="http://www.hageatama.org/wp/1312" target="_blank">さくらのVPS 1GプランでWordPress運用はやっぱり厳しさが残りそう | はげあたま.org</a>
</p>

・・・思い出した。はげあたま.orgさんの記事を見ながらも、

VPSに魅力を感じたからさくらVPSを契約したんだった(´・ω・｀)

 

そして、さくらVPSでBeginningNEWSを運営するにあたって参考にしたのがこちらです↓

<p style="font-size: 18px;">
  ・<a href="http://d.hatena.ne.jp/koujirou6218/20101129/1297320407" target="_blank">さくらVPSで一日6万PVを処理するためにしたこと &#8211; 新卒インフラエンジニア２年目</a>
</p>

こちらのサイトでは、さくらVPSで1日6万PVを処理する為の方法が書かれていますが、

 **WordPressとは書いてない**んですよね。

 

WordPressはPHPで動いている動的なHTMLなので、ブログにアクセスがあってから、

その要求に答えてHTMLをプリントするんですよね。

となると、**普通のHTMLファイルを読むよりもCPUやメモリを消費する**ことになるので、

仮にさくらVPSで1日6万PVを処理するとなると、もっと大変な労力が必要になるわけです。

 

具体的には**Apacheからnginxに乗り換える**とか、

Apacheならyumで入れるんじゃなくて**自分でmake**するとか。

VPSだとブログ更新以上の労力が必要となってくるんです。

 

## httpd.confの設定を見直す

 

今回行ったのは、**http.confの見直し**です。これが一番早そうだったので。

 

すると、設定の中で**MaxRequestsPerChildが<span style="font-size: 16px;">4000</span>**になってました！ 原因はこれか！！！

 

そこで、上記のブログを参考にして、

**StartServers 5**

**MinSpareServers 5**

**MaxSpareServers 10**

**MaxClients 40**

**MaxRequestsPerChild 500**

に設定してみました。

 

あとは、PHPのキャッシュを作ってくれるAPCをインストールしてみました。

ちなみに、さくらVPSでAPCのインストールで失敗すると、 こちら↓のサイトが役に立ちます。

<p style="font-size: 18px;">
  ・<a href="http://next-nex.info/?s=373" target="_blank">APCのインストールで詰まった</a>
</p>

 

更に、APCはWP Super Cacheと相性が悪いので、

**WP Super Cacheを停止して様子を見る**ことにしました。

 

あとはWordPressが少しでも軽くなるように、

**WP-Optimizeプラグイン**でデータベースを最適化しました。

参考にしたサイトはこちら↓

<p style="font-size: 18px;">
  ・<a href="http://yuina.lovesickly.com/wpblog/server/3549" target="_blank">ダッシュボードから必要なときだけDB最適化→WP-Optimize — 病的溺愛シンドローム</a>
</p>

 

## これで一安心かな？

とりあえずこれで様子を見ます。

もしもこの設定でサイトが重たくなったり、

繋がらなくなったりするようであれば、

また次の対策を考えようと思います(｀･ω･´)ゞ