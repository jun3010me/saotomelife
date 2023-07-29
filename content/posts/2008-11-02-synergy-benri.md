---
title: Synergyって超便利！
author: 魚住 惇
type: post
date: 2008-11-02T09:04:56+00:00
url: /synergy-benri-225.html
thumbnail: /wp-content/uploads/2008/11/110208-0900-synergy12.png
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 6
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
Windを持っている人に限った話ではありませんが、

PCを2台以上持っていて、<span style="color: red;">並べて起動</span>したりしていませんか？

<span style="color: red;">母艦がWindowsで、netbookにUbuntuを入れたり</span>していませんか？</p> 

今回は、LAN内でマウスとキーボードを共有する「Synergy」を試してみました。</p> 

<!--more-->

こんな感じの環境を想定しています。

{{< figure src="/wp-content/uploads/2008/11/110208-0900-synergy12.png" alt="" >}} </p> 

・キーボードとマウスはデスクトップPCに繋いである

・デスクトップPCとノートPCが同じサブネットにいる</p> 

まずは、Synergyを公式サイトにアクセスします。

<http://synergy2.sourceforge.net/index.html>

Windows版、Linux版、Mac版を、

それぞれのOSに合わせて各パソコンにダウンロードします。</p> 

Windows版をインストールし、起動すると、この画面が出ます。

{{< figure src="/wp-content/uploads/2008/11/110208-0900-synergy22.png" alt="" >}} 

今回は、Windows機が母艦なので、真ん中のServerを選択します。</p> 

Serverでは、繋げるPCを登録する必要があります。

Configureをクリックすると、この画面が出ます。

{{< figure src="/wp-content/uploads/2008/11/110208-0900-synergy32.png" alt="" >}} 

「＋」をクリックして、Screen(登録するPC)を追加します。</p> 

登録に必要なのは、ホスト名とIPアドレスです。

(ホスト名だけで出来るかもしれませんが、念のためIPアドレスも入れておきます)

{{< figure src="/wp-content/uploads/2008/11/110208-0900-synergy42.png" alt="" >}} </p> 

そして最後に、Screenの位置関係の入力です。

{{< figure src="/wp-content/uploads/2008/11/110208-0900-synergy52.png" alt="" >}} 

赤く囲ってある部分を選択して下の「＋」をクリックします。</p> 

この記事の最初に見せた構成図だと、

・デスクトップPCで左に行くと、ノートPCに移動する

・ノートPCで右に行くと、デスクトップPCに移動する

といった感じに設定を追加します。</p> 

設定が終わって、最初の画面でStartをクリックすれば、

サーバ(キーボードとマウスが繋がっている方)の準備は完了です。</p> 

次は、クライアントの設定です。

今回のクライアントは、Ubuntuを使用しました。

Ubuntuでは、Synergyがレポジトリに登録されているので、</p> 

**$sudo apt-get install synergy**

でインストールします。</p> 

インストールが終わったら、クライアントを起動します。

**$synergy<span style="color: red;">c</span>?サーバのIPアドレス**</p> 

これでPCの画面が繋がるはずです。

Windowsのクライアントを試していませんが、

SynergyをClientモードにして、サーバのホスト名(IPアドレス)を入力すれば

いけると思います。</p> 

説明としては解りにくいかもしれませんが、

これは結構使えます。**(｀･ω･´)**