---
title: Ubuntu8.10でNetbook用TouchScreenを使う方法
author: 魚住 惇
type: post
date: 2009-03-26T14:17:51+00:00
url: /ubuntu810-touchscreen-388.html
thumbnail: /wp-content/uploads/2009/03/032609-1417-ubuntu810ne1.png
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 79
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
</p> 

以前、キャリブレーションに失敗していたタッチスクリーンですが、

ようやく、キャリブレーションに成功したので、方法をまとめておきます。</p> 

<span style="font-size: 14pt;">1.Touchkitをインストールする </span>

まず、以下のコマンドを使用して、

タッチスクリーンのユーティリティをインストールします。</p> 

**$wget http://home.eeti.com.tw/web20/drivers/touch_driver/Linux/2.06.2416/TouchKit-2.06.2410-32b-k26.tar.gz** 

wgetで最新ドライバをダウンロードします。

**$tar -xvf TouchKit-2.06.2410-32b-k26.tar.gz** 

解凍します。

**$cd TouchKit** 

解凍したディレクトリに移動します。

**$sudo ./setup.sh** 

セットアップ用のスクリプトを実行します。</p> 

スクリプトを実行すると、こんな感じになります。

&#8212;

(*) Linux driver installer for TouchKit controller</p> 

(I) Check user permission: root, you are the supervisor.

(I) Begin to setup the TouchKit driver.

(I) Found and removed previous TouchKit driver.

(I) Extract TouchKit driver archive to /usr/local/TouchKit32.

(I) Create TouchKit utility shortcut in /usr/bin.

(I) Create TKCal tool shortcut in /usr/bin.

(I) Check X window version: 1.5.x

(I) Copy X module: x15/egalax_drv.so to /usr/lib/xorg/modules/input.</p> 

(Q) Which interface controller do you use?

(I) [1] RS232 [2] PS/2 [3] USB :

&#8212;</p> 

ここで**3**を入力し、エンターを押します。</p> 

&#8212;

(I) Using interface: USB

(I) Found a HID compliant touch controller.

(I) Found inbuilt kernel module: usbtouchscreen.

(I) It is highly recommended that add it into blacklist.

(Q) Do you want to add it into blacklist? (y/n)

&#8212;</p> 

ここで、**y**を入力し、エンターを押します。</p> 

&#8212;

(I) The kernel module usbtouchscreen has been added in /etc/modprobe.d/blacklist.</p> 

(I) Found X configuration file: /etc/X11/xorg.conf.

(I) Removed touch configuration from /etc/X11/xorg.conf.

(I) Add touch configuration into /etc/X11/xorg.conf.

(W) No &#8220;ServerLayout&#8221; section found! It will be appended automatically.</p> 

(I) Please reboot the system for some changes to take effect.

(I) After booting, type &#8220;TouchKit&#8221; to do calibration.

&#8212;</p> 

これで、Touchkitのユーティリティのインストールが完了しました。

最後のメッセージにもある通り、ターミナルでTouchKitと入力し、エンターを押すと、

キャリブレーションを行うことができます。

しかし、先にやっておく作業がまだあるので、済ませておきましょう。</p> 

<span style="font-size: 14pt;">2.fdiファイルを作成する </span>

Ubuntu8.10から、xorg.confを使わなくなりました。代わりに、XMLで記述した設定ファイルが必要となったのです。

前回は、この設定ファイルをapt-getでインストールしたものを使用した為、実際のタッチスクリーンでは

うまく動作しませんでした。

今回は、設定ファイルを新規で作成します。</p> 

まず、geditを使用して以下のファイルを作成します。

sudo gedit /usr/share/hal/fdi/policy/10osvendor/50-eGalax.fdi</p> 

以下の記述を貼り付けて保存してください。

**<?xml version=&#8221;1.0&#8243; encoding=&#8221;UTF-8&#8243;?> <!&#8211; -\*- SGML -\*- <span style="font-family: Wingdings;">à</span>** 

**<deviceinfo version=&#8221;0.2&#8243;>** 

 **<device>** 

 **<match key=&#8221;info.product&#8221; contains=&#8221;eGalax&#8221;>** 

 **<match key=&#8221;info.capabilities&#8221; contains=&#8221;input&#8221;>** 

 **<merge key=&#8221;input.x11_driver&#8221; type=&#8221;string&#8221;>evtouch</merge>** 

 **<merge key=&#8221;input.x11_options.minx&#8221; type=&#8221;string&#8221;>70</merge>** 

 **<merge key=&#8221;input.x11_options.miny&#8221; type=&#8221;string&#8221;>70</merge>** 

 **<merge key=&#8221;input.x11_options.maxx&#8221; type=&#8221;string&#8221;>1900</merge>** 

 **<merge key=&#8221;input.x11_options.maxy&#8221; type=&#8221;string&#8221;>1900</merge>** 

 **<merge key=&#8221;input.x11_options.taptimer&#8221; type=&#8221;string&#8221;>30</merge>** 

 **<merge key=&#8221;input.x11_options.longtouchtimer&#8221;** 

**type=&#8221;string&#8221;>750</merge>** 

 **<merge key=&#8221;input.x11\_options.longtouched\_action&#8221;** 

**type=&#8221;string&#8221;>click</merge>** 

 **<merge key=&#8221;input.x11\_options.longtouched\_button&#8221;** 

**type=&#8221;string&#8221;>3</merge>** 

 **<merge key=&#8221;input.x11\_options.oneandhalftap\_button&#8221;** 

**type=&#8221;string&#8221;>2</merge>** 

 **<merge key=&#8221;input.x11_options.movelimit&#8221; type=&#8221;string&#8221;>10</merge>** 

 **<merge key=&#8221;input.x11\_options.touched\_drag&#8221; type=&#8221;string&#8221;>1</merge>** 

 **<merge key=&#8221;input.x11\_options.maybetapped\_action&#8221;** 

**type=&#8221;string&#8221;>click</merge>** 

 **<merge key=&#8221;input.x11\_options.maybetapped\_button&#8221;** 

**type=&#8221;string&#8221;>1</merge>** 

 **<merge key=&#8221;input.x11_options.rotate&#8221; type=&#8221;string&#8221;>cw</merge>** 

 **<merge key=&#8221;input.x11_options.swapx&#8221; type=&#8221;bool&#8221;>false</merge>** 

 **<merge key=&#8221;input.x11_options.swapy&#8221; type=&#8221;bool&#8221;>false</merge>** 

 **</match>** 

 **</match>** 

 **</device>** 

**</deviceinfo>** </p> 

<span style="font-size: 14pt;">3.Xを再起動する </span>

Touchkitのインストールと、設定ファイルの作成が終わりましたら、デバイスを有効にする為に、

一度Xを再起動します。

Ctrl+Alt+BackSpaceでXを落とすか、Ubuntu自体を再起動させましょう。</p> 

<span style="font-size: 14pt;">4.Touchkitを起動する </span>

最後に、キャリブレーションの設定を行います。

ターミナルでTouchKitと入力し、エンターを押すと、ユーティリティが起動します。</p> 

{{< figure src="/wp-content/uploads/2009/03/032609-1417-ubuntu810ne1.png" alt="" >}} </p> 

「Tool」タブの「4Pts Cal」をクリックすると、4カ所のキャリブレーションが始まります。

{{< figure src="/wp-content/uploads/2009/03/032609-1417-ubuntu810ne2.png" alt="" >}} </p> 

後は、順番に表示される円の中心をペンでタッチしていけば、設定完了です。

{{< figure src="/wp-content/uploads/2009/03/032609-1417-ubuntu810ne3.png" alt="" >}} </p> </p> 

これで、ネットブックの改造用に使用されるタッチスクリーンを新しいXOrgに対応させることができました！

ということは、<span style="color: red;"><b>Ubuntu9.04でも使える</b></span>ということでしょうか！？

これで、個人的にはUbuntu8.04に固執する理由が無くなりました。</p> 

Ubuntu8.10の方が気持ち的にサクサク動くので、この際、8.10に完全に乗り換えようと思います。