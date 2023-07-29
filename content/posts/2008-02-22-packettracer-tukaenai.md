---
title: パケトレが使えないと思った瞬間
author: 魚住 惇
type: post
date: 2008-02-22T07:58:52+00:00
url: /packettracer-tukaenai-22.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
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
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - PC
tags:
  - CCNAのメモ

---
すっごく便利！だと思ってたパケトレ、でも実際は・・・

<!--more-->

これを見てください。

&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212; Router>en Router#conf t Enter configuration commands, one per line. End with CNTL/Z. Router(config)#int fa0/0 Router(config-if)#ip ? access-group Specify access control for packets address Set the IP address of an interface hello-interval Configures IP-EIGRP hello interval nat NAT interface commands ospf OSPF interface commands split-horizon Perform split horizon summary-address Perform address summarization

Router(config-if)#ip &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-

インターフェイスに入った後の、IPに続くコマンドが少ない！！！ しかも、「helper-address」が無い！！！

DHCPリレーの練習がパケトレで出来ないことがすごいショックです(泣

やっぱり実機しかないのかな・・・