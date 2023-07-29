---
title: Nexus7(2013)でNAS上のTSを再生する方法
author: 魚住 惇
type: post
date: 2013-08-29T06:27:23+00:00
url: /nexus7-2013-play-ts-on-nas-5243.html
thumbnail: /wp-content/uploads/2013/08/2013-08-29_04.58.512.png
twitter_id:
  - 372968712443162624
views:
  - 89
scc_follow_count_feedly:
  - 37
categories:
  - モバイル
tags:
  - Nexus7

---
<img decoding="async" loading="lazy" title="2013-08-29_04.58.51.png" src="/wp-content/uploads/2013/08/2013-08-29_04.58.51.png" alt="2013 08 29 04 58 51" width="300" height="225" border="0" />

<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

僕は今現在、AirVideoサーバを起動して、iPadやiPadminiで録画したTSファイルを見てます。

が、Nexus7って、AirVideoとか使わなくても楽にTSが再生できることがわかったんです。

 

 

## 使用したアプリ

今回使用したアプリはこちらの2つです。どちらも定番アプリです。

 

### ESファイルエクスプローラー

<a href="https://play.google.com/store/apps/details?id=com.estrongs.android.pop&hl=ja" rel="nofollow" target="_blank"><img decoding="async" class="alignleft" style="margin: 0px 10px 1px 5px; padding: 0px; border: none;" src="https://lh5.ggpht.com/P31CiAbF5UMC1wbJxv2sPT4tSLLqfqUZPp8N0ATEaA0ZeMxXv_NjVDiswVKjeUUSS2w=w300" alt="" width="85" align="left" /></a><a href="https://play.google.com/store/apps/details?id=com.estrongs.android.pop&hl=ja" rel="nofollow" target="_blank"><b><span style="font-size: 120%;">ES ファイルエクスプローラー </span></b></a>  
カテゴリ: 仕事効率化  
<a href="https://play.google.com/store/apps/details?id=com.estrongs.android.pop&hl=ja" rel="nofollow" target="_blank">Google Playで詳細を見る</a>

Nexus7定番のファイラーです。僕がDesireを使っていた頃はアストロだったのになぁ。

いつの間に形勢逆転したんだか笑

 

### MX動画プレイヤー

<a href="https://play.google.com/store/apps/details?id=com.mxtech.videoplayer.ad&hl=ja" rel="nofollow" target="_blank"><img decoding="async" class="alignleft" style="margin: 0px 10px 1px 5px; padding: 0px; border: none;" src="https://lh3.ggpht.com/7jbZtQUat0RktJooXmgBetvqUtK25PvHVw5G2D-zujpoebb4JT09Yu1o0WlpjbaJ0eQ=w300" alt="" width="85" align="left" /></a><a href="https://play.google.com/store/apps/details?id=com.mxtech.videoplayer.ad&hl=ja" rel="nofollow" target="_blank"><b><span style="font-size: 120%;">MX 動画プレーヤー 1.7.18</span></b></a>  
カテゴリ: メディア＆動画  
<a href="https://play.google.com/store/apps/details?id=com.mxtech.videoplayer.ad&hl=ja" rel="nofollow" target="_blank">Google Playで詳細を見る</a>

一時Android4.3では使えないという情報が流れていましたが、

僕がインストールした時は普通に使えたので、対応したということでしょうか。

 

 

## ESエクスプローラーからNASを参照する

ここでは、ESエクスプローラーからNASを参照します。

今回のNASはSMB接続(Windowsの共有フォルダ)とします。

 

### 「ネットワーク」→「新規」をタッチする

<img decoding="async" loading="lazy" title="2013-08-29_04.57.49.png" src="/wp-content/uploads/2013/08/2013-08-29_04.57.49.png" alt="2013 08 29 04 57 49" width="375" height="600" border="0" /> 

ここで、共有フォルダを追加します。

 

 

### 共有フォルダのIPアドレスを入力する

<img decoding="async" loading="lazy" title="2013-08-29_04.58.10.png" src="/wp-content/uploads/2013/08/2013-08-29_04.58.10.png" alt="2013 08 29 04 58 10" width="375" height="600" border="0" /> 

ここに追加する共有フォルダのIPアドレスやアクセス権の情報を入力します。

 

 

### 共有フォルダにアクセスできた！

成功すると、アクセスした先のフォルダが表示されます。<img decoding="async" loading="lazy" title="2013-08-29_04.58.51.png" src="/wp-content/uploads/2013/08/2013-08-29_04.58.511.png" alt="2013 08 29 04 58 51" width="375" height="600" border="0" /> 

 

 

## 録画したTSファイルを再生してみる

<img decoding="async" loading="lazy" title="2013-08-29 10.46.14.jpg" src="/wp-content/uploads/2013/08/2013-08-29-10.46.14.jpg" alt="2013 08 29 10 46 14" width="600" height="450" border="0" /> 

普通に再生できたやん！！！ヽ(=´▽\`=)ﾉ

 

**※音声が流れない場合がありましたが、音声が流れない時は、**

**一度ホームに戻り、もう一度アプリに戻ると音声が流れることがありました。**

 

 

## ちなみに、それ以外のファイルはというと

その後、TSをx264でエンコードしたMP4をネットワーク越しに再生してみたものの、

映像が途切れ途切れの状態で、楽しむことができませんでした。

ただ、動画ファイルをローカルに保存さえすれば、スムーズに再生することができました。

 

 

## VLCプレイヤーはどうなのか

MX動画プレイヤーの他にもVLCのBeta版が公開されていますが、

シークバーが動かなかったりと、まだまだ不具合が目立ちます。

やっぱり今の定番は、ESファイルエクスプローラとMX動画プレイヤーなんですね。

 

 

新しい端末で快適な動画ライフの参考にしていただければと思います(｀･ω･´)ゞ

 [1]: https://twitter.com/jun3010me