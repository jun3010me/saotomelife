---
title: PPP,CHAP設定のまとめ
author: 魚住 惇
type: post
date: 2008-02-27T01:34:46+00:00
url: /ppp-chap-settings-45.html
thumbnail: /wp-content/uploads/2008/02/ppp.JPG
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 76
scc_follow_count_feedly:
  - 37
categories:
  - PC
tags:
  - CCNAのメモ

---
PPP,CHAPの設定をまとめてみました。

<!--more-->

<br class="webkit-block-placeholder" /> トポロジとしては、こんな感じにします。

<p style="text-align: center;">
  <img decoding="async" src="/wp-content/uploads/2008/02/ppp.JPG" alt="ppp" />
</p>

<br class="webkit-block-placeholder" /> MikuとRinがSerialで繋がっています。<br class="webkit-block-placeholder" />今から、SerialにIPアドレスとPPPを設定して、Pingが通るようにします。ちなみに、IPアドレスはこんな感じにします。<br class="webkit-block-placeholder" />Miku:192.168.0.1Rin :192.168.0.2<br class="webkit-block-placeholder" />それじゃぁ、設定手順を見ていきましょう。まずは、両方のシリアルインターフェイスにIPアドレスを割り当てて、PPPとCHAPを設定します。<br class="webkit-block-placeholder" />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;

Miku>en

Miku#conf t

Miku(config)#int s0/0/0

Miku(config-if)#ip address 192.168.0.1 255.255.255.0

Miku(config-if)#clock rate 64000

Miku(config-if)#no shutdown

Miku(config-if)#encapsulation ppp

Miku(config-if)#ppp authentication chap

Miku(config-if)#exitMiku(config)#

<br class="webkit-block-placeholder" /> Rin>enRin#conf t

Rin(config)#int s0/0/0

Rin(config-if)#ip address 192.168.0.2 255.255.255.0

Rin(config-if)#clock rate 64000

Rin(config-if)#no shutdown

Rin(config-if)#encapsulation ppp

Rin(config-if)#ppp authentication chap

Rin(config-if)#exitRin(config)#

&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;

<br class="webkit-block-placeholder" /> さて、これだけではまだPingは飛びません。なぜなら、認証できていないからです。<br class="webkit-block-placeholder" />CHAPを使う場合、相手のusernameとpasswordを設定する必要があります。<br class="webkit-block-placeholder" />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;

Miku(config)#username Rin password cisco←enable secretで決めたパスワードRin(config)#username Miku password cisco

&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;<br class="webkit-block-placeholder" />こうすることで、Pingが飛びます。<br class="webkit-block-placeholder" /><br class="webkit-block-placeholder" />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;

Rin#ping 192.168.0.1<br class="webkit-block-placeholder" />Type escape sequence to abort.Sending 5, 100-byte ICMP Echos to 192.168.0.1, timeout is 2 seconds:

!!!!!Success rate is 100 percent (5/5), round-trip min/avg/max = 22/23/24 ms<br class="webkit-block-placeholder" />Rin#

&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;<br class="webkit-block-placeholder" /><br class="webkit-block-placeholder" />要は、シリアルの回線にオプションをつけるものだと思ってください。