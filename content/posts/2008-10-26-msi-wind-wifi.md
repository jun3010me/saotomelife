---
title: MSI Windに使われている無線LAN
author: 魚住 惇
type: post
date: 2008-10-26T02:00:46+00:00
url: /msi-wind-wifi-199.html
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
categories:
  - Wind＋Ubuntu

---
少し気になったので、調べてみました。</p> 

MSIのドライバダウンロードのページでは、それぞれ型番でのチップの違いがPDFで公開されています。

その情報によると、

<!--more-->

AR5B91(AzureWave AW-NE771)→<span style="color: red;">Atheros</span>?802.11BGN

RT2700E(MS-6890)→<span style="color: red;">Ralink</span>?802.11BGN

RTL8187SE(MS-6894)→<span style="color: red;">Realtek</span>?802.11BG</p> 

なるほど、この3種類ね。</p> 

俺の中では、「Atheros？あぁ、有名なチップね。Realtek？あぁ、よく切れる蟹か・・・。

<span style="font-size: 12pt;"><b>Ralinkってどこ？(；・∀・)</b></span>」</p> 

っていう感じでした。</p> 

まぁそれはさておき、Ralink<span style="color: red;">?2700E</span>という型番、これが少し気になりました。

Ralink公式サイトのドライバダウンロードのページに、<span style="color: red;">この型番が見つからない</span>んですね。</p> 

となると、MSIで公開しているドライバは何なのよ？という話になります。</p> 

実際に、MSIで公開されているドライバを解凍してみると。このファイルが出てきました。

IS\_AP\_STA_<span style="color: red;"><b>RT2860</b></span>\_D-1.1.6.0\_VA-2.1.0.0\_RU-2.1.6.0\_VA-2.2.1.0\_AU\_2.0.6.0\_VA-2.0.6.0\_081308\_1.0.3.0\_NH.exe</p> 

おいおい、<span style="color: red;"><b>RT2860</b></span>じゃねぇか。</p> 

ということは、Linuxでこいつを認識させるには、NDISWrapperを使うか、

公式サイトのLinuxドライバを入れればいいんじゃないのか？</p> 

しかし、ここで問題がありました。

<span style="color: red; font-size: 12pt;"><b>公式のLinuxのドライバがリンク切れを起こしている・・・・</b></span></p> 

<span style="font-size: 10pt;">とはいえ、ここはインターネットの世界。データはどこかにあるはず。</span>

<span style="font-size: 10pt;">と、探していたら、バージョンは古いけど、ありましたありました。</span>

[<span style="font-size: 10pt;">http://driverscollection.com/?file_cid=400269996390dfb54f762738772</span>][1]</p> 

<span style="font-size: 10pt;">俺はMSI Wind Extraを持っていないので、試すことはできませんが、</span>

<span style="font-size: 10pt;">こいつで動くかもしれません。</span></p> 

<span style="font-size: 10pt;">上記でダウンロードできるドライバのバージョンが低いので、最新カーネルで動くかわかりませんが・・・。</span>

 [1]: http://driverscollection.com/?file_cid=400269996390dfb54f762738772