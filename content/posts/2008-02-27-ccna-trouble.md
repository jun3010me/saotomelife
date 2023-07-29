---
title: トラブルシューティングの1例
author: 魚住 惇
type: post
date: 2008-02-27T05:56:26+00:00
url: /ccna-trouble-48.html
thumbnail: /wp-content/uploads/2008/02/nfu.JPG
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 10
scc_follow_count_feedly:
  - 37
categories:
  - PC
tags:
  - CCNAのメモ

---
みなさん、セメ4も半分過ぎましたね。

モジュール試験頑張ってください。

さて、今日は、こんなトラブルがありました。

<!--more-->

ケーススタディで、こんなトポロジを組んだと思います。

<p align="center">
  <a title="nfutoporogy" href="/wp-content/uploads/2008/02/nfu.JPG"><img decoding="async" src="/wp-content/uploads/2008/02/nfu.JPG" alt="nfutoporogy" /></a>
</p>

今回、このトポロジで、ルーティングテーブルの交換がうまくいきませんでした。

ちなみに、 3つのルータで network 172.16.0.0 no auto-summary

Nagoyaに限っては、 redistribute staticも設定しました。

それでも、eigrpが機能しませんでした。 ちなみに、IPアドレスの計算と、設定は合っていました。 隣接同士のPingも送信できていました。

じゃぁ、何がいけなかったのでしょうか？

答えは・・・・

こうなっていたからです。

<p style="text-align: center;">
  <a title="nfutoporogy2" href="/wp-content/uploads/2008/02/nfu2.JPG"><img decoding="async" src="/wp-content/uploads/2008/02/nfu2.JPG" alt="nfutoporogy2" /></a>
</p>

これじゃぁ、ケーブルで繋いだ部分のネットワークがバラバラです。

エラーも出るはずだわ・・・（汗

まさか、物理層のエラーだったとは笑

みなさんも、他は間違ってないのに、なんか違う。 とんな時は、物理層のチェックも視野に入れてくださいね。