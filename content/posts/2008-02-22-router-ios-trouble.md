---
title: ルータのIOSを復旧しよう！
author: 魚住 惇
type: post
date: 2008-02-22T04:49:29+00:00
url: /router-ios-trouble-11.html
thumbnail: /wp-content/uploads/2008/02/router1.JPG
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 59
scc_follow_count_feedly:
  - 37
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - PC
tags:
  - CCNAのメモ

---
ルータのIOSが起動しない場合に対処法です。

<!--more-->

みなさん、IOSって、ルータの中のどこに保存されているか知ってますか？

正解は、flashです。なので

Router#erase flash

なーんてことをすると、IOSが吹っ飛ぶわけです。 復旧できない人はやらないようにね！！

それでは、もしもの為に、erase flashしてしまった場合の対処法を書いておきます。

まずは、これだけの機器を用意してください。

・ルータ(IOSが吹っ飛んだもの) ・ルータ(正常に動作するもの) ・ノートパソコン ・TFTPソフト

これらの機器で何をやるかというと、 1.WindowsでTFTPサーバを立ち上げる 2.正常に動くルータで、IOSのデータをTFTPサーバ(Windows)に送る 3.IOSが吹っ飛んだルータで、TFTPサーバからIOSをコピーしてくる

こういう作業をやるわけです。IOSが立ち上がらない状態でも、Ciscoルータは TFTPプロトコルを使えるので、復旧できるわけですね。

それでは、実際に作業していきましょう。

まずは、下の図のように接続します。

<p style="text-align: center;">
  <img decoding="async" src="/wp-content/uploads/2008/02/router1.JPG" alt="router1" />
</p>

そして、ルータのFirstEethernet0と、パソコンの有線LAN 同じネットワークのIPアドレスに設定します。

今回、俺はこんな感じに設定しました。

RouterのFa0 IPアドレス:192.168.1.2 サブネットマスク:255.255.255.0

パソコンの有線LAN IPアドレス:192.168.1.1 サブネットマスク:255.255.255.0

難しいサブネットなんて考えず、サクッと設定しましょう。 設定方法は、敢えて書きません(それくらいわかるっしょ?)。

IPアドレスの設定が終わり、Pingが飛ぶことを確認したら、パソコン側でTFTPサーバの設定をしましょう。

TFTPサーバは、Windowsには最初から入ってませんが、フリーソフトでTFTPサーバを探すと、案外沢山見つかります。 俺はこのソフトを使いました。 http://www.vector.co.jp/soft/winnt/net/se377860.html

ダウンロードしたら、任意の場所にファイルを解凍してください。

今回は、例としてCドライブ上に解凍しておきます。

解凍後に、実行ファイルをダブルクリックすれば、TFTPサーバの出来上がりです。

<p style="text-align: center;">
  <img decoding="async" src="/wp-content/uploads/2008/02/router2.JPG" alt="router2" />
</p>

それでは早速、TFTPサーバにIOSをバックアップしましょう。

最初に、flashの中身を確認します。

?????????????????- Router#show flash

System flash directory: File Length Name/status 1 5655760 c1700-sy-mz.122-11.T.bin [5655824 bytes used, 27898608 available, 33554432 total] 32768K bytes of processor board System flash (Read/Write) ?????????????????-

今、flashの中には「c1700-sy-mz.122-11.T.bin」というファイルが1つありますね。 これがIOSです。今からTFTPサーバにバックアップするファイルです。

次に、このIOSファイルをTFTPサーバにバックアップします。 ?????????????????- Router#copy flash tftp Source filename []? c1700-sy-mz.122-11.T.bin←さっき確認したIOSのファイル名 Address or name of remote host []? 192.168.1.1←TFTPサーバのIPアドレス Destination filename [c1700-sy-mz.122-11.T.bin]?←何も入力せずにEnter !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 5655760 bytes copied in 18.636 secs (303486 bytes/sec) ?????????????????- これでバックアップが完了しました。

実際にパソコン側でTFTPのソフトのフォルダを開くと、IOSのファイルが確認できます。

<p style="text-align: center;">
  <img decoding="async" src="/wp-content/uploads/2008/02/router3.JPG" alt="router3" />
</p>

次に、ルータを付け替えます。

<p style="text-align: center;">
  <img decoding="async" src="/wp-content/uploads/2008/02/router4.JPG" alt="router4" />
</p>

IOSが起動しないルータを起動すると、

?????????????????- rommon 1 > ?????????????????-

と表示されると思います。これは、IOSではなくて、ROMモニターモードで起動している状態です。

このROMモニターモードでも、TFTPプロトコルが利用できるので、TFTPサーバからIOSの復旧ができるわけです。

TFTPサーバと通信する為に、IPアドレスとサブネットマスクとデフォルトゲートウェイを設定します。

?????????????????- rommon 1 > IP\_ADDRESS=192.168.1.2 rommon 2 > IP\_SUBNET\_MASK=255.255.255.0 rommon 3 > DEFAULT\_GATEWAY=192.168.1.1 ?????????????????-

その後、TFTPサーバのアドレスと、サーバ上のIOSのファイル名を記述します。

?????????????????- rommon 4 > TFTP\_SERVER=192.168.1.1 rommon 5 > TFTP\_FILE=c1700-sy-mz.122-11.T.bin ?????????????????-

そして、TFTPサーバからダウンロードします。

?????????????????- rommon 6 > tftpdnld

IP\_ADDRESS: 192.168.1.2 IP\_SUBNET\_MASK: 255.255.255.0 DEFAULT\_GATEWAY: 192.168.1.1 TFTP\_SERVER: 192.168.1.1 TFTP\_FILE: c1700-sy-mz.122-11.T.bin

Invoke this command for disaster recovery only. WARNING: all existing data in all partitions on flash will be lost! Do you wish to continue? y/n: [n]: y ←ここで「ｙ」を押します。

Receiving c1700-sy-mz.122-11.T.bin from 192.168.1.1 !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! File reception completed. Copying file c1700-sy-mz.122-11.T.bin to flash. Erasing flash at 0x61fe0000 Programming location 60560000 ?????????????????-

これで、復旧完了です！お疲れ様でした！ それでは、リセットして、再起動しましょう。

?????????????????- rommon 7 > reset

cisco Systems, Inc. 170 West Tasman Drive San Jose, California 95134-1706

Cisco Internetwork Operating System Software IOS &#8482; C1700 Software (C1700-SY-M), Version 12.2(11)T, RELEASE SOFTWARE (fc1) TAC Support: http://www.cisco.com/tac Copyright (c) 1986-2002 by cisco Systems, Inc. Compiled Wed 31-Jul-02 11:25 by ccai Image text-base: 0x80008124, data-base: 0x80A7BF8C

cisco 1721 (MPC860P) processor (revision 0x400) with 58983K/6553K bytes of memory. Processor board ID FOC08512XPZ (4093315925), with hardware revision 0000 MPC860P processor: part number 5, mask 2 Bridging software. X.25 software, Version 3.0.0. 1 FastEthernet/IEEE 802.3 interface(s) 2 Low-speed serial(sync/async) network interface(s) 32K bytes of non-volatile configuration memory. 32768K bytes of processor board System flash (Read/Write)

&#8212; System Configuration Dialog &#8212;

Would you like to enter the initial configuration dialog? [yes/no]: ?????????????????-

おめでとうございます！立派な(ry じゃない、正常に起動しましたね！

もし、IOSを普及することがあれば、この作業を試してみてくださいね。