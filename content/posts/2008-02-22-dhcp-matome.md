---
title: DHCPの基本の流れ
author: 魚住 惇
type: post
date: 2008-02-22T08:28:19+00:00
url: /dhcp-matome-23.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 2
scc_follow_count_feedly:
  - 37
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - PC
tags:
  - CCNAのメモ

---
DHCPの基本の流れを簡単に説明すると、こんな感じです。

<!--more-->

パソコン「IPアドレスが欲しいよぉ！！DHCPサーバ君どこかにいないのぉ?？」 DHCPDISCOVER

DHCPサーバ君「俺様はここだ！、そしてこれが与えれるIPアドレスの情報だ！、そぉ?れっ！」 DHCPOFFER

パソコン「あ！DHCPサーバ君いたぁ♪IP頂戴！」 DHCPREQUEST

DHCPサーバ君「そぉれ、ネットワークアドレスとIPアドレスだよ、ちなみに、デフォルトゲートウェイは俺様だ！」 DHCPACK

パソコンが「こんなIPアドレス嫌だよ！いらない！」って言う場合もありますが、 基本の流れはこんな感じです。

どう？会話みたいでしょ？