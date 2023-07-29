---
title: Wind + Ubuntuでバックライトを調節する(追記あり)
author: 魚住 惇
type: post
date: 2008-07-11T22:32:34+00:00
url: /wind-ubuntu-backlight-79.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
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
MSI WindにUbuntuをインストールしてから早6日。

CompizFusionとVirtualBoxをインストールしてウハウハしてました。

さて、みなさんは、液晶画面のバックライト、どうしてますか？

<!--more-->

**俺は、明るさ０ %じゃないとダメなんです！！！**

メインマシンの液晶ディスプレイの明るさも０%にしてます。

ノートパソコンの場合は、外の光もありますが、見やすさも考えて20%くらいです。

で、このMSI Wind、なぜかVirtualBoxで仮想の XPを立ち上げた瞬間に、

明るさ１００%になるんです（泣

これは俺にとって、結構問題です。

しかし、ACPIのドライバが特別に用意されているわけでもなく、

MSI Windフォーラムにもデバイスドライバをインストールするのは無線LANだけ

(無線LANに関しては前々回の記事で解決済み)

なので、バックライトをどうにか調節しようとしました。

幸い、デフォルトのACPIで調節が可能なので、バックライト関連のコマンドが打てます。

というわけで、俺はxbacklightをインストールしました。

**sudo apt-get install xbacklight**

インストールした後、起動時に

**xbacklight -set 20%**

を実行するようにすれば、最初から暗めのディスプレイになるわけです。

ふぅ・・・これで「うわっ！眩しい！！」がなくなるかもです。

**〜追記〜**

もしもこれで改善されない場合は、gconf-editorで直接設定をいじるしかありません。

ターミナルで、

**gconf-editor**

で起動できます。

その中の、**/→apps→gnome-power-manager→backlight**

**→brightness_ac**と、

**→brightness_battery**で、それぞれの明るさを決めることができます。

他にも、設定項目がありますので、自分の好みに合わせて変えてみてください。