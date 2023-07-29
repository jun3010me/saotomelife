---
title: はじめてのCiscoルータ
author: 魚住 惇
type: post
date: 2008-08-06T14:21:56+00:00
url: /ccna-router-first-impression-121.html
thumbnail: /wp-content/uploads/2008/08/080608-1421-cisco1.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 3
scc_follow_count_feedly:
  - 37
categories:
  - PC
tags:
  - CCNAのメモ

---
みなさんこんばんは、ジュンです。

このブログ、MSI Windの影響でアクセス数が伸びつつありますが、

元を辿ればこのブログはCCNA取得の為に活用していたブログなんです。

さて、今回からは、Ciscoネットワーキングアカデミーセメスター2の

アシスタントをすることになったので、その中で特に重要なところや、

自分としても作業メモを残していきたい部分をここに書いていこうと思います。

<!--more-->

では早速書いていきましょう。

今日は、受講者のみんなが初めてCiscoルータを触りました。

ルータいじりは、はっきり言ってコマンドが全てです。

ちゃっちゃとおさらいしておきましょう。

課題例：以下のネットワークを設定し、左のPCから右のPCまでPingが飛ぶようにしましょう。

ただし、下記のコマンドは、重複しそうなものは省略してあります。

(Serial0等の設定方法は片方だけしか書いてない。っていう意味です。)

{{< figure src="/wp-content/uploads/2008/08/080608-1421-cisco1.jpg" alt="" >}} 

Router>**enable** 

Router#

特権モードに入る

Router#**configure terminal**

Router(config)#

グローバル設定モードに入る

Router(config)#**hostname 名前**

ルータに名前をつける

Router(config)#**enable secret パスワード**

特権モードにパスワードを設定する(暗号化済み)

Router(config)#**line console 0** 

Router(config-line)#**password ccna** 

Router(config-line)#**login**

Router(config-line)#**exit** 

コンソール接続にパスワードを設定する

Router(config)#**line vty 0 4** 

Router(config-line)#**password cisco** 

Router(config-line)#**login** 

Router(config-line)#**exit** 

仮想端末接続にパスワードを設定する

Router(config)#**interface serial 0**

Router(config-if)#**ip address 192.168.100.2 255.255.255.0**

Router(config-if)#**clock rate 64000**

Router(config-if)#**no shutdown**

Router(config-if)#**exit**

シリアル0の設定をする

Router(config)#**interface fastethernet 0**

Router(config-if)#**ip address 192.168.2.254 255.255.255.0**

Router(config-if)#**no shutdown**

Router(config-if)#**exit**

FastEthernet0の設定をする

Router(config)#**router rip**

Router(config-router)#**network 192.168.2.0**

Router(config-router)#**network 192.168.100.0**

Router(config-router)#**exit**

RIPの設定をする

Router#**show running-config**

現在の設定を確認する

Router#**copy running-config startup-config**

現在の設定をNVRAMに保存する

Router#**erase startup-config**

startup-configを削除する

Router#**show ip route**

ルーティングテーブルを確認する

Router#**ping IPアドレス**

IPアドレスへpingを飛ばす。**「!!!!!」**となれば成功

大体これくらいかなぁって思います。

それでは続きはまた明日っ

(*^―ﾟ)/~~