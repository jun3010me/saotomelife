---
title: UbuntuでRAMディスクを使ってみた
author: 魚住 惇
type: post
date: 2008-12-25T02:16:48+00:00
url: /ubuntu-ram-327.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
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
最近、ネットブックにメモリを2GB載せて、メモリの使わない領域をRAMディスクにするのが流行ですね。</p> 

RAMディスクを設定すると、その領域でのファイルの読み書きがメモリでの早さになるわけです。

(逆に言うと、仮想メモリを使うようになったらOSはかなり遅くなりますね)</p> 

今回は、UbuntuでRAMディスクを作成してみました。</p> 

<!--more-->

1.RAMディスクのディレクトリを作成する

$sudo mkdir /media/ramdisk

2.メモリの1部を作成したディレクトリにマウントする

$sudo mount ?t tmpfs ?o size=64M,nr_inodes=10k,mode=0777 tmpfs /media/ramdisk

3.sudo gedit /etc/fstab でfstabを開き、

「tmpfs /media/ramdisk tmpfs size=64M,nr_inodes=10k,mode=0777 」を追加する</p> 

これだけです。あとは作成した/media/ramdiskを好きに活用するだけです。

ちなみに、tmpfsを使用するのですが、tmpfsとRAMディスクは、具体的には少し違うようです。

[tmpfsとは][1](ITpro)</p> 

で、作ったはいいけど、どう活用するの？と感じると思うので、

FirefoxのキャッシュをRAMディスクに書き込む方法を載せておきます。</p> 

1.Firefoxを立ち上げ、URLで「about:config」にアクセスする

2.右クリックで「新規作成」→「文字列」で、設定名を「browser.cache.disk.parent_directory」、文字列を「/media/ramdisk」にする</p> 

これで、FirefoxのキャッシュがRAMディスクに保存され、再起動するとキャッシュが消えるはずです。

元から描画が速くなったFirefox3を使っているので、体感速度は人によりますが、

個人的に、速くなった感じがします。</p> 

RAMディスク、次は何に使おうかなぁ。

 [1]: http://itpro.nikkeibp.co.jp/article/Keyword/20080808/312545/