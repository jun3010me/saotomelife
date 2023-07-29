---
title: VMware Fusion 5 に Windows8アップグレード版をインストールした
author: 魚住 惇
type: post
date: 2013-03-17T05:41:29+00:00
url: /vmware-fusion-5-windows8-update-1807.html
thumbnail: /wp-content/uploads/2013/07/win8win7.jpg
has_been_twittered:
  - yes
views:
  - 77
scc_follow_count_feedly:
  - 37
categories:
  - Mac

---
<!--more-->

本当は、Windows8発売当時にアップグレード版を安く買っていたんですが、

UIが使いづらく、断念していました。</p> 

個人的に<span style="font-size: 15px;">あのスタート画面は必要ないです(´・ω・｀)</span>

しかも、**VMwareFusionにアップグレード版をインストールすると、ライセンス認証が通らないし。**</p> 

で、最近友人から面白い話を聞いたので、再挑戦する為、色々と調べてみました。</p> 

## アップグレード版でもライセンス認証を通す方法

こちらのブログに解決策が載っていました。

<span style="font-size: 18px;">・</span><a style="font-size: 18px;" href="http://ameblo.jp/k-duki/entry-11411522548.html" target="_blank">VMwareにWindows8（アップグレード）をインストール｜上月レオンのブログ</a>

XPをインストールしてから同じ仮想マシンにWindows8をインストールする方法ですね。

XPが32bitでも、メディアから起動してインストールすれば、Windows8 64bitへのアップグレードが可能でした。

大変参考になりました。</p> 

が、ここで問題が発生！NICが認識しなくてライセンス認証どころかインターネットにすら接続できませんでした。

と思ったら、またまた解決策を発見！

<span style="font-size: 18px;">・</span><a style="font-size: 18px;" href="http://virtnote.blogspot.jp/2012/10/xp-windows8-nic.html" target="_blank">仮想化雑記帳: XP から Windows8 にアップグレードするとNICが認識されなくなるのとその対処</a></p> 

## VMwareFusionでXPからWin8へアップグレードした際のNICの設定方法

どうやらXPでインストールすると、AMDチップのNICで動作する設定になるようですね。

このブログの通り、テキストエディタでIntelチップのNICだよという設定を最終行に加えると、

インターネットにも接続され、ライセンス認証の項目が消えてました。

たぶんライセンス認証が通ったんでしょう。</p> 

そして、今回、Windows8をWindows7みたいに使う究極の方法を発見したわけです。

## 「Windows 7 explorer for Windows 8」を使う

なんと！Windows7のexplorer.exeをWindows8で利用してしまおうというもの。

なんとまぁ、グレーのような、ブラックのようなツールですね。

使いたい方は自己責任でお願いします。(´・ω・｀)</p> 

参考にしたのはこちらのブログです。

<span style="font-size: 18px;">・</span><a style="font-size: 18px;" href="http://freesoft.tvbok.com/win8/windows8-to-windows7.html" target="_blank">Windows8のモダンUIを無効化してWindows7のスタートメニューを復活させる「Windows 7 explorer for Windows 8」</a></p> 

で、結果こうなりました。

<img decoding="async" loading="lazy" title="win8win7.jpg" src="/wp-content/uploads/2013/03/win8win7.jpg" alt="Win8win7" width="600" height="481" border="0" /> 

なんと！もうまんまWindows7じゃないですか笑

これでこれまで通りのWindowsを使えそうです。

しかも**Hyper-V**も使えるし！</p> 

これでようやく、Windows7からWindows8へ乗り換えられそうです。