---
title: pam_keyringを試してみた
author: 魚住 惇
type: post
date: 2008-12-25T04:57:48+00:00
url: /pam_keyring-330.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 5
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
Windに入れたUbuntu8.10で、無線接続する時に、毎回パスワードを聞いてくるんですが、

パスワードをいくら入力しても、再び入力を求めてくる。という無限ループが起こるようになりました。

(´；ω；\`)</p> 

なので、キーリングのパスワードを自動で入力するツール「pam_keyring」を試してみました。</p> 

<!--more-->

詳しくは書きませんが、ここを参考にしました。</p> 

_Ubuntuで無線LANを使うとき、キーリングのパスワード入力を省略するには_

<http://d.hatena.ne.jp/KishikawaKatsumi/20080504/1209913075></p> 

ふぅ、これでパスワードを聞いてこなくなりました。ヽ(´―｀)ノ

でも、ファイルにパスワードを記しておくなんて、ちょっと心配だなぁ・・・。