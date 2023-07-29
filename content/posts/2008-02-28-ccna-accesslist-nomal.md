---
title: 標準アクセスリストを設定しよう
author: 魚住 惇
type: post
date: 2008-02-28T02:43:13+00:00
url: /ccna-accesslist-nomal-52.html
thumbnail: /wp-content/uploads/2008/02/accesslist.JPG
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 1
scc_follow_count_feedly:
  - 37
categories:
  - PC
tags:
  - CCNAのメモ
  - アクセスリスト

---
標準access-listの基礎の基礎の設定です。

<!--more-->

今回は、こんなトポロジにしました。

<p align="center">
  <a title="access-list" href="/wp-content/uploads/2008/02/accesslist.JPG"><img decoding="async" src="/wp-content/uploads/2008/02/accesslist.JPG" alt="access-list" /></a>
</p>

IPアドレスの設定は、こんな感じになっています。

ktkr serial0:192.168.3.2

wktk serial0:192.168.3.1 fa0/0:192.168.1.1 fa0/1:192.168.2.1

Boon:192.168.1.2

KY:192.168.2.2

そして、wktkでアクセスリストを作ります。

wktk(config)#access-list 1 deny host 192.168.1.1

その後、fa0/1のoutにアクセスリストを適用します。 wktk(config)#int fa0/1 wktk(config-if)#ip access-group 1 out

するとどうなるでしょう？

まず、deny host 192.168.1.1なので、Boonからの通信を破棄する設定です。 それを、fa0/1にoutで設定しています。

つまりこういうことです。

<p align="center">
  <a title="access-list2" href="/wp-content/uploads/2008/02/accesslist2.JPG"><img decoding="async" src="/wp-content/uploads/2008/02/accesslist2.JPG" alt="access-list2" /></a>
</p>

<p align="center">
  BoonからKYにPingが飛びません。
</p>



<p align="center">
  <a title="access-list3" href="/wp-content/uploads/2008/02/accesslist3.JPG"><img decoding="async" src="/wp-content/uploads/2008/02/accesslist3.JPG" alt="access-list3" /></a>
</p>

<p align="center">
  BoonからktkrにはPingが飛びます。
</p>



<p align="center">
  <a title="access-list4" href="/wp-content/uploads/2008/02/accesslist4.JPG"><img decoding="async" src="/wp-content/uploads/2008/02/accesslist4.JPG" alt="access-list4" /></a>
</p>

<p align="center">
  KYからBoonにはPingが飛びません。
</p>

ホント、KYですね。

これがアクセスリストの基礎の基礎です。