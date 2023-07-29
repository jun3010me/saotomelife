---
title: wineでOffice2007をインストール
author: 魚住 惇
type: post
date: 2008-11-09T05:06:41+00:00
url: /wine-office2007-install-260.html
thumbnail: /wp-content/uploads/2008/11/110908-0505-wineoffice21.png
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 35
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
お待たせしました。やっと記事にまとめることができました。

Ubuntu8.10にwineをインストールして、Office2007を動かす方法です。

<!--more-->

### 1.最新版wineをインストールする

Ubuntuでインストールできるwineのバージョンが古いので、最新版がインストールできるレポジトリを登録します。

[システム]→[システム管理]→[ソフトウェア・ソース]をクリックします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice21.png" alt="" >}} 

[サードパーティのソフトウェア]→[追加]をクリックします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice22.png" alt="" >}} 

APT lineに

**deb http://wine.budgetdedicated.com/apt intrepid main #WineHQ &#8211; Ubuntu 8.10 &#8220;Intrepid Ibex&#8221;**

と追加し、[ソースを追加]をクリックします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice23.png" alt="" >}} 

WineHQのレポジトリが登録できました。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice24.png" alt="" >}} 

レポジトリの登録はこれで完了ですが、認証キーをインポートしないと警告が出ます。

以下のリンクを右クリックで保存します。

認証キーをダウンロード

保存した認証キーをインポートします。

[認証]→[鍵ファイルのインポート]をクリックします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice25.png" alt="" >}} 

先ほど保存した認証キーを開きます。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice26.png" alt="" >}} 

これで、認証キーがインポートできました。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice27.png" alt="" >}} 

[ソフトウェア・ソース]を閉じます。その時に、[再読込]をクリックします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice28.png" alt="" >}} 

以上でwineのレポジトリが登録できました。あとは端末からaptでインストールします。

**$sudo apt-get install wine**

これで最新版wineのインストールが完了しました。

### 2.Office2007のインストール環境を作成する

[アプリケーション]→[Wine]→[Configure Wine]を開きます。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice29.png" alt="" >}} 

[アプリケーションの設定]で、既定の設定をWindows Vistaに設定します。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice210.png" alt="" >}} 

[ライブラリ]でオーバーライドの設定を追加します。

[rpcrt4]を選択し、追加をクリックします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice211.png" alt="" >}} 

[編集]をクリックします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice212.png" alt="" >}} 

Native (Windows)を選択し、OKをクリックします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice213.png" alt="" >}} 

同じように**msxml3**も同じ様に追加します。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice214.png" alt="" >}} 

[アプリケーション]→[Wine]→[Brouse C:\ Drive]をクリックします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice215.png" alt="" >}} 

[windows]→[system32]に移動し、

rpcrt4.dllとmsxml3.dllのファイル名を変更します。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice216.png" alt="" >}} ?{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice217.png" alt="" >}}

以下より、rpcrt4.dllをダウンロードします。

<http://www.mediafire.com/?njtut9aswdk>?{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice218.png" alt="" >}}

保存したrpcrt.dllを、[windows]→[system32]に移動させます。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice219.png" alt="" >}} 

ターミナルで、以下のコマンドを実行します。

sudo apt-get install cabextract

wget?[www.kegel.com/wine/winetricks][1]

sh winetricks msxml3 dotnet20 gdiplus riched20 riched30 vcrun2005sp1

インストーラが表示されたものは、全てインストールします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice220.png" alt="" >}} ?{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice221.png" alt="" >}}?{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice222.png" alt="" >}}?{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice223.png" alt="" >}}

これで、インストール環境が整いました。

### 3.Office2007をインストールする

いよいよインストールです。

ここでは、Office2007のインストールCDが**/media/cdrom0にマウントされた**という前提で話を進めます。

以下のコマンドを実行します。

**$wine /media/cdrom0/setup.exe**

すると、Office2007のインストーラが起動します。

日本語が豆腐になっていますが、インストール後は問題ありません。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice224.png" alt="" >}} ?<span style="color: red;"><b>インストールは、この辺りで一度止まります。?</b></span>{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice225.png" alt="" >}}

[システム]→[システム管理]→[システム・モニタ]を見てみると、

IMJPKLMG.EXEが起動しています。このプロセスを終了させます。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice226.png" alt="" >}} 

すると、インストールが進みます。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice227.png" alt="" >}} 

少し経つと、インストールが終了します。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice228.png" alt="" >}} 

### 4.インストール後の設定

**やったぁぁぁ！**?と思うかもしれませんが、まだまだ設定が必要です。

再度[Configure Wine]を開き、設定を元に戻します。

WindowsVistaからWindowsXPに戻します。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice229.png" alt="" >}} 

rpcrt4.dllをNative 後 Builtinにします。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice230.png" alt="" >}} ?<span style="font-size: 12pt;"><b>お疲れ様でした！これでOffice2007のインストールが完了しました！</b></span>

早速起動してみましょう。

{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice231.png" alt="" >}} ?{{< figure src="/wp-content/uploads/2008/11/110908-0505-wineoffice232.png" alt="" >}}

感動の瞬間です。UbuntuでOffice2007が動いています。

しかし、このままでは日本語入力に不具合があると思います。

それはまたの機会にしましょう。

 [1]: http://www.kegel.com/wine/winetricks