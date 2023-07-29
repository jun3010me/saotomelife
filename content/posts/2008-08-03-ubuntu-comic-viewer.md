---
title: Ubuntuで使えるマンガビューワ
author: 魚住 惇
type: post
date: 2008-08-03T05:20:18+00:00
url: /ubuntu-comic-viewer-118.html
thumbnail: /wp-content/uploads/2008/08/080308-0519-ubuntu1.png
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 38
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
Ubuntuを使ってると、「やっぱり○○をやる時はWindowsじゃないとな?」

という瞬間が必ず来ます。

俺はそう思う時、「Ubuntuでそういうことできんかなぁ」と発想を転換させます。

今回も、そう思って探していたら、こんなツールを発見しました。

<!--more-->

Comix

http://comix.sourceforge.net/

Comixは、Ubuntuで使えるマンガビューワで、しかも、ZIP圧縮にも対応してるんです！

<span style="font-size: 12pt; text-decoration: underline;">使い方</span>

まず、上記のサイトからプログラムをダウンロードします。

俺がダウンロードした時点では、comix-3.6.5.tar.gzでした。

そして、ターミナルを開いて、次のコマンドを実行します。

**tar -xzf comix-3.6.5.tar.gz**

(ダウンロードした圧縮ファイルを解凍する)

**cd comix-3.6.5**

(解凍したディレクトリに移動する)

**sudo python install.py install**

(install.pyを**管理者権限**で実行する)

これで、Gnomeのメニューに自動的に追加されます。

{{< figure src="/wp-content/uploads/2008/08/080308-0519-ubuntu1.png" alt="" >}} 

起動すると、こんな感じのウィンドウが起動します。

[ファイル]→[開く]から、画像ファイルか圧縮ファイルを開きます。

ファイルを開くと、同じディレクトリ内の画像一覧が表示され、

圧縮ファイルを開くと、その中に入っている画像一覧が表示されます。

{{< figure src="/wp-content/uploads/2008/08/080308-0519-ubuntu2.png" alt="" >}} ?<span style="font-size: 12pt; text-decoration: underline;">?あなたは見開き優先？それともサイズ優先？?</span>

このマンガビューワを使うと、こんな感じで表示できます。

見開き表示：マンガを開いて読むのと同じ感じ

{{< figure src="/wp-content/uploads/2008/08/080308-0519-ubuntu3.jpg" alt="" >}} 

回転表示：1ページしか表示出来ないが、本みたいにして読める

{{< figure src="/wp-content/uploads/2008/08/080308-0519-ubuntu4.jpg" alt="" >}} 

こうして、電子ブックリーダとしても活用していると、

MSI Windを使っているなぁ?という気になります。

Ubuntu使ってる人は、是非試してみて下さい。