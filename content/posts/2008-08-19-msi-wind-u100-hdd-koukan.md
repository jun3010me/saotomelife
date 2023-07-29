---
title: MSI Wind u100のHDDをSerialATA300に換装してみた
author: 魚住 惇
type: post
date: 2008-08-19T13:50:35+00:00
url: /msi-wind-u100-hdd-koukan-129.html
thumbnail: /wp-content/uploads/2008/08/081908-1349-msiwindu1001.jpg
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
  - Wind＋Ubuntu

---
{{< figure src="/wp-content/uploads/2008/08/081908-1349-msiwindu1001.jpg" alt="" >}}

今回は、HDDを換装してみました。

<!--more-->

やっぱりOSを4つも入れると、80GBじゃ足りなくなったので、

GENOで160GB FUJITSU 2.5インチHDD [MHZ2160BH]

(<span style="color: red;">Serial ATA II</span> /5400rpm /8MB) 厚さ9.5mm

を購入しました。

<span style="font-size: 14pt;"><b>ん？</b></span>待てよ？

と思った頃には、夢中で注文してしまいました。

そう、今回着目して欲しい部分は、<span style="font-size: 12pt;"><b>Serial ATA300</b></span>という点です。

ちなみに、SerialATA300(略すとSATA300)は、SerialATA?とも言われてます。

まとめサイトでは、エラッタが原因で認識しない。という話でした。

それをちゃんと調べて把握したのは注文した後。

もう、認識しなかったら、中古で売るか・・・という気持ちでした。

結果はというと、

{{< figure src="/wp-content/uploads/2008/08/081908-1349-msiwindu1003.jpg" alt="" >}} <span style="font-size: 12pt;"><b>普通に認識しました。 </b></span>

その後、Ubuntuを起動し、Gpartedを起動したところ、

{{< figure src="/wp-content/uploads/2008/08/081908-1349-msiwindu1004.png" alt="" >}} 

ほら、ちゃんと認識しています。容量が増えています。

これでUbuntuを入れたまま、FedoraCoreも入るや?

ただ、他のHDDでも同じように認識するかはわからないです。