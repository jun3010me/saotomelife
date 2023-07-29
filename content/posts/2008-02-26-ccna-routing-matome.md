---
title: ルーティング方法のまとめ
author: 魚住 惇
type: post
date: 2008-02-26T05:28:27+00:00
url: /ccna-routing-matome-35.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 85
scc_follow_count_feedly:
  - 37
categories:
  - PC
tags:
  - CCNAのメモ

---
ここでは、忘れかけていた各種ルーティングプロトコルの設定方法をまとめていきます。

<!--more-->

今回は、ルータのIPアドレスを192.168.1.0ネットワークで設定したものとします。

RIP

Router(config)#router rip

Router(config-router)#network 192.168.1.0</p> 

IGRP

Router(config)#router igrp 30←AS(自律システム)番号

Router(config-router)#network 192.168.1.0</p> 

EIGRP

Router(config)#no auto-summary←忘れないようにね！

Router(config)#router eigrp 30←AS(自律システム)番号

Router(config-router)#network 192.168.1.0</p> 

OSPF

Router(config)#router ospf 1←プロセス番号

Router(config-router)#network 192.168.1.0 0.0.0.255 area 0←エリア番号</p> 

また、EIGRPとOSPFではデフォルトルートの設定も一緒に交換しないと、宛先のわからないパケットがどこに送ったらいいのかわかりません。なので、EIGRPではredistribute staticOSPFではdefault-infomation originateまだ、基本的なコマンドばかりか、どこか抜けている部分があるかもしれません。足りないコマンドを発見した人は、教えてくださいm(_ _)m