---
title: MSI Wind に入れたUbuntuのバックライト問題
author: 魚住 惇
type: post
date: 2008-09-20T15:03:09+00:00
url: /msi-wind-ubuntu-backlight-167.html
thumbnail: /wp-content/uploads/2008/09/092008-1502-msiwindub1.png
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
最近、携帯電話で撮影した動画ファイルをYouTubeにアップロードする術を身につけました。

なので、Ubuntuを使う上で困っている問題の動画を作成し、アップロードしました。 解説すると、サスペンド、特定のアプリケーションの起動(VirtualBox,フルスクリーンゲームなど)が原因で、

<span style="font-size: 12pt;"><b>明るさが100%になるんです｡･ﾟ･(ﾉд`)･ﾟ･｡ </b></span>

その証拠に、動画をアップロードしたわけです。

で、応急処置ですが、その解決方法を見つけました。

<!--more-->

まず、<a rel="nofollow" href="http://192.168.11.200:8000/?p=79">以前の記事</a>を参考に、xbacklightをインストールしてください。

今回は複数のコマンドを一気に実行したいので、ファイルを作成します。

**sudo gedit startup.sh** 

そして、以下の2行を入力して、保存します。

xbacklight -set 30%

xbacklight -set 0%

保存した後、ファイルに実行権限を付けます。

sudo chmod a+x startup.sh

これで、実行できるようになりました。

こうやって実行します。

./startup.sh

後はこのファイルを起動時に実行するように設定し、

尚かつサスペンド復帰時にも実行すれば、問題は解決されるわけです(｀･ω･´)

ちなみに、GNOMEメニューにこんな感じに設定すれば、クリック1つで設定できます。

{{< figure src="/wp-content/uploads/2008/09/092008-1502-msiwindub1.png" alt="" >}} 

ふぅ、これで画面がチカチカしなくれ済むわぁ(´ﾍ｀；)