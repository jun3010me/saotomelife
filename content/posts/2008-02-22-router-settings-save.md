---
title: ルータの設定が保存されない！？
author: 魚住 惇
type: post
date: 2008-02-22T00:52:01+00:00
url: /router-settings-save-5.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 7
scc_follow_count_feedly:
  - 37
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - PC
tags:
  - CCNAのメモ

---
ルータを設定して、設定した情報をrunning-configからstartup-configにコピーしても 設定が保存されてない場合の対処法です。

<!--more-->

Ciscoルータには、NVRAMっていう領域があって、そこに設定を保存すると、 電源を切ったり、リロードしても、設定が残ります(つまり、電源を切っても中身が消えないっていうこと。シスコ語で言うと、不揮発性RAM)。 しかし、電源を落としても消えない領域に設定を保存したのに、なんで再起動したら 初期化されているのでしょう？ 答えは簡単。保存した設定を、起動時に読み込んでいないからです。

Ciscoルータには、スタートアップコンフィギュレーションという設定項目があります。スタートアップコンフィギュレーションとは、名前の通り、ルータをどうやって起動するかの設定です。

このスタートアップ コンフィギュレーションの設定が通常設定になってないと、 startup-configが読み込まれないんです。 っていうわけで、まずはルータの設定を見てみましょう。 &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;- Router#show version Cisco Internetwork Operating System Software IOS &#8482; 2500 Software (C2500-JS-L), Version 12.1(5), RELEASE SOFTWARE (fc1) Copyright (c) 1986-2000 by cisco Systems, Inc. Compiled Wed 25-Oct-00 05:18 by cmong Image text-base: 0x03071DB0, data-base: 0x00001000

ROM: System Bootstrap, Version 5.2(8a), RELEASE SOFTWARE BOOTFLASH: 3000 Bootstrap Software (IGS-RXBOOT), Version 10.2(8a), RELEASE SOFTWARE (fc1)

Router uptime is 7 minutes System returned to ROM by reload System image file is &#8220;flash:c2500-js-l_121-5.bin&#8221;

cisco 2500 (68030) processor (revision D) with 16384K/2048K bytes of memory. Processor board ID 03867477, with hardware revision 00000000 Bridging software. X.25 software, Version 3.0.0. SuperLAT software (copyright 1990 by Meridian Technology Corp). TN3270 Emulation software. 1 Token Ring/IEEE 802.5 interface(s) 2 Serial network interface(s) 32K bytes of non-volatile configuration memory. 16384K bytes of processor board System flash (Read ONLY)

Configuration register is 0x2142 &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;

ここです。このコンフィギュレーションレジスタの値に注目してください。 この例では、「0x2142」となっています。 「0x2142」は、NVRAMを読まない設定です。

これを出荷時のデフォルトの値「0x2102」に戻しましょう。

&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212; Router>en Router#conf t Router(config)#config-register 0x2102 Router#end Router#show version

Cisco Internetwork Operating System Software IOS &#8482; 2500 Software (C2500-JS-L), Version 12.1(5), RELEASE SOFTWARE (fc1) Copyright (c) 1986-2000 by cisco Systems, Inc. Compiled Wed 25-Oct-00 05:18 by cmong Image text-base: 0x03071DB0, data-base: 0x00001000 ROM: System Bootstrap, Version 5.2(8a), RELEASE SOFTWARE BOOTFLASH: 3000 Bootstrap Software (IGS-RXBOOT), Version 10.2(8a), RELEASE SOFTWARE (fc1) Router uptime is 11 minutes System returned to ROM by reload System image file is &#8220;flash:c2500-js-l_121-5.bin&#8221; cisco 2500 (68030) processor (revision D) with 16384K/2048K bytes of memory. Processor board ID 03867477, with hardware revision 00000000 Bridging software. X.25 software, Version 3.0.0. SuperLAT software (copyright 1990 by Meridian Technology Corp). TN3270 Emulation software. 1 Token Ring/IEEE 802.5 interface(s) 2 Serial network interface(s) 32K bytes of non-volatile configuration memory. 16384K bytes of processor board System flash (Read ONLY) Configuration register is 0x2142 (will be 0x2102 at next reload) &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;

はい、これで次の再起動後に「0x2102」になるよと表示されました。

Router#reload

これで再起動時にも、NVRAMが読み込まれます。