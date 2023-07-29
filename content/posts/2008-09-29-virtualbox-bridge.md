---
title: VirtualBox+ブリッジ接続を無線LANで行う方法
author: 魚住 惇
type: post
date: 2008-09-28T16:34:24+00:00
url: /virtualbox-bridge-179.html
thumbnail: /wp-content/uploads/2008/09/092808-1633-virtualbox1.png
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 8
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
CrossOverでUbuntu上でOfficeを動かしたものの、

細かい不具合が目立ちます。

やっぱり、Windowsと同じようには動かないのね(´・ω・｀)

というわけで、再びVirtualBoxを使うことにしました。

実は、少し前から試していたことがありました。

それが、**ブリッジ接続**です。

<!--more-->

以前からVMwareで実験的にサーバを立てたりしていましたが、

その時に、仮想OSもルータからIPアドレスがもらえるようにしたのが、**ブリッジ接続**です。

VirtualBoxのデフォルトでは、NAT接続となっていますが、

これはVirtualBox自らIPアドレスを仮想OS(ゲストOS)に割り当て、通信を取り持つというものです。

通信さえ出来ればNAT接続でもいいのですが、

VirtualBoxのNAT接続は、<span style="font-size: 12pt;"><b>Pingが通らない</b></span>のです。｡･ﾟ･(ﾉд\`)･ﾟ･｡

インターネットはできるので、DNSで名前が決まっているものにはアクセス出来ますが、

**IPアドレスでの通信はできない**のです。｡･ﾟ･(ﾉд\`)･ﾟ･｡

そして、そんな悩みを解決するのがブリッジ接続ですが、

brctlを使用した従来の方法では、無線LANと併用できないのが難点でした。

しかも、検索して出てきたブログのほとんどが、諦めています。

前置きが長くて申し訳ないです。(´・ω・｀)

今回は、ProxyARPとDHCPリレーとブロードキャストリレーを使うことにより、

WindのUbuntuで無線接続しながら、VirtualBox上のゲストOSをブリッジ接続させました。

ジュンのネット環境は、現在こんな感じになっています。

ルータのIPアドレス:192.168.11.1/24

Ubuntuの無線LANインターフェイス:wlan0

1.必要なパッケージをインストールします

sudo apt-get install uml-utilities parprouted bcrelay dhcp-helper

2.IPをフォワーディングさせます

sudo sysctl net.ipv4.ip_forward=1

3.TAPインターフェイスを作成します

sudo tunctl -u $USER(自分のユーザ名)

sudo ip addr add 192.168.11.150/32(自分のネットワークに合わせる) dev tap0

sudo ip link set tap0 up

4.DHCPリレーを設定する

DHCPHELPER_OPTS=&#8221;-b wlan0 -i tap0&#8243;

sudo /etc/init.d/dhcp-helper restart

5.tunの権限を変更する

sudo chmod 666 /dev/net/tun

6.ProxyARPを起動させる

sudo parprouted -d wlan0 tap0 &

7. BroadcastRelayを起動させる

sudo bcrelay -i tap0 -o wlan0 &

あとは、VirtualBoxの設定でネットワークアダプタの「割り当て」を「ホストインターフェース」にして、

「ホストインターフェースの設定」の「インターフェース名」を「tap0」にするだけです。

この後、ゲストでXPを起動させると、

{{< figure src="/wp-content/uploads/2008/09/092808-1633-virtualbox1.png" alt="" >}} 

こんな感じにIPアドレスがもらえるはずです。

最後に、IPアドレスが確認できたら、

Ubuntu上からゲストOSにPingを送ってください。

Pingが返って来なかったら、ゲストOS上でIPアドレスの更新をしてください。

それでも実行しても通信できなかったら

<span style="color: red;"><b>PingとIPアドレスの再取得を繰り返してください。 </b></span>

この赤い文字の考えに到達するまで、結構かかりました。

｡･ﾟ･(ﾉд\`)･ﾟ･｡

でも、一度通信できるようになったらずっと通信できます。

(｀･ω･´)

CCNA取得の為に勉強した知識が、まさかこんな姿で役に立つとは思わなんだ笑

皆さんも、是非試してみて下さい。