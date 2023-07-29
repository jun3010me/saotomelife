---
title: Ubuntu8.10にGlobalmenuをインストールする方法
author: 魚住 惇
type: post
date: 2008-12-25T05:36:41+00:00
url: /ubuntu810-globalmenu-334.html
thumbnail: /wp-content/uploads/2008/12/122508-0536-ubuntu810gl12.png
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 83
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
ネットブックでUbuntuを使う時、どうしても困る部分があります。

画面の解像度です。

1024&#215;600しか無いので、どうしても縦が足りなくなるアプリケーションがあります。

なので、少しでも縦の幅を使わないようにします。

今回は、Ubuntu8.10 IntrepidにGlobalmenuをインストールしました。

<!--more-->

実際に設定すると、こんな感じになります。

{{< figure src="/wp-content/uploads/2008/12/122508-0536-ubuntu810gl12.png" alt="" >}} 

Globalmenuをインストールすると、ウィンドウのメニューバーがGnomeのバーに表示されます。

{{< figure src="/wp-content/uploads/2008/12/122508-0536-ubuntu810gl22.png" alt="" >}} ?**インストール方法**

まず、開発環境をインストールします。

**$sudo apt-get install build-essential flex bison gnome-common libglib2.0-dev gtk-doc-tools autoconf2.13 automake1.9 libgtk2.0-dev libdbus-glib-1-dev libwnck-dev libpanel-applet2-dev libgnome-menu-dev**

valaのソースファイルをダウンロードして、解凍して、コンパイルします。

**$wget -c http://download.gnome.org/sources/vala/0.5/vala-0.5.3.tar.bz2?****$tar xjvf vala-0.5.3.tar.bz2?****$cd vala-0.5.3/?****$./configure?****$make****$sudo make install?****$sudo ldconfig**

valaのインストールが終わったら、「subversion」をインストールします。

**$sudo apt-get install subversion**

その後、Globalmenuのソースをダウンロードして、インストールします。

**$svn checkout http://gnome2-globalmenu.googlecode.com/svn/trunk/ gnome-globalmenu-0.6?****$cd gnome-globalmenu-0.6?****$./autogen.sh****$./configure &#8211;prefix=/usr?****$make?****$sudo make install**

最後に、ホームディレクトリ上に.gnomercというファイルを作り、記述します。

**$gedit ~/.gnomerc**

ファイルに以下を追加

**export GTK_MODULES=globalmenu-gnome**

ここで、一度Xを再起動します。

すると、Gnomeメニューを右クリックして「パネルへの追加」をクリックしたら、

一覧の中に「Global Menu Panel Applet」があるはずです。

ターミナルを開くと、この通り、

{{< figure src="/wp-content/uploads/2008/12/122508-0536-ubuntu810gl32.png" alt="" >}} 

メニューバーがなくなって、シンプルになってます。

これで、メニューバー分のスペースを使えるはずです。ヽ(´―｀)ノ