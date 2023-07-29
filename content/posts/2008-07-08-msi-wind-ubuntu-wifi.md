---
title: MSI Wind u100 + Ubuntuで無線LAN
author: 魚住 惇
type: post
date: 2008-07-08T06:54:15+00:00
url: /msi-wind-ubuntu-wifi-76.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 2
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
Wind上でUbuntuをインストールしました。

8.04をインストールしようとしたら失敗したので、7.10をインストールし、 アップグレードしたら無事に8.04が起動しました。

で、無線LANがデフォルトで使えなかったので、 MSI Windのフォーラムを見ながら設定してみました。

<!--more-->

まずは、開発環境とlinux-headersをインストール?**sudo apt-get install build-essential linux-headers-＊＊＊（「uname -r」で出た値）**

wgetでドライバファイルをダウンロード?**wget http://scopeboy.com/things/rtl8187se\_linux\_26.1012.0331.2008_modified.tar.gz**

ファイルを解凍する?**tar xvzf rtl8187se\_linux\_26.1012.0331.2008_modified.tar.gz**

解凍したディレクトリに移動する?**cd rtl8187se\_linux\_26.1012.0331.2008?**コンパイルする為に環境変数を入力する?**export KBUILD_NOPEDANTIC=1**

makeする?**./makedrv**

警告が沢山でますが、解凍後にieee80211の中に「.ko」ファイルができていたら成功です。 このkoファイルを使います。

**ieee80211**と**rtl8185**に入り、両方のkoファイルを「**/lib/modules/2.6.24-19-generic/kernel/drivers/net/wireless/**」にコピーします。?**sudo cp *.ko /lib/modules/2.6.24-19-generic/kernel/drivers/net/wireless/?**そして最後にデバイスを認識させます?**sudo depmod sudo modprobe r8180**

あとは、**/etc/modules**の中に「**modprobe r8180**」を追加すれば、起動時に認識してくれるはずです。