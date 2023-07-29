---
title: MSI Wind u100のBIOSを1.06にアップデート 〜USBメモリからMS-DOSを起動しよう〜
author: 魚住 惇
type: post
date: 2008-07-29T15:37:28+00:00
url: /msi-wind-u100-bios-usbmemory-msdos-113.html
thumbnail: /wp-content/uploads/2008/07/072908-1536-msiwindu1001.png
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 18
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
今回は、MSI Wind u100のBIOSを1.06にアップデートしてみました。

<!--more-->

<span style="color: red;"><b>BIOSのアップデートは自己責任でやってください！最悪の場合Windが起動しなくなります。</b></span>

ドイツのブログでアップデートを行った人がいましたが、注意を呼びかけているようでした。

MSI Windフォーラムでも、実際に行った人は現時点では少なかったです。

BIOSファイルは、ここからダウンロード

http://global.msi.com.tw/index.php?func=downloadfile&dno=6915&type=bios

解凍すると、eafudos.bat, EAFUDOS.exe, EN011IMS.106の3つのファイルが出てきます。

{{< figure src="/wp-content/uploads/2008/07/072908-1536-msiwindu1001.png" alt="" >}} 

これはDOSアプリなので、Windowsからは実行できません。

DOSが起動するメディアに入れて実行すればいいのですが、

DOSの起動に必要なファイルと、解凍したファイルの合計が約1.3MBだったので、

FDに入りませんでした。

今回は、USBメモリからDOSを起動して、BIOSをアップデートしました。

まずは、DOS起動USBメモリを作成します。

DOSの起動に必要なファイルを用意する為には、

**COMMAND.COM, IO.SYS, MSDOS.SYS**

の3つのファイルが必要です。

このファイルは、ネット上から持ってきてもいいですが、FDを「MS-DOSの起動ディスクを作成する」で

フォーマットしても、同じファイルができます。俺はFDを用意しました。

次に、USBメモリをフォーマットします。

こちらのツールを使用します。

HP USB Disk Storage Format Tool &#8211; v2.1.8

<http://files.extremeoverclocking.com/file.php?f=197>

**「Primary Download Site」**をクリックすると、ダウンロードが開始されます。

ダウンロードが完了したら、実行してインストールします。

起動すると、こんな感じになります。

{{< figure src="/wp-content/uploads/2008/07/072908-1536-msiwindu1002.png" alt="" >}} 

「Create a DOS startup disk」と「using DOS system files located at:」にチェックを入れて、

先ほど書いたDOSの起動ファイルを参照します。

俺の場合、FDDがAドライブで、フォーマットしたままなので、直接FDを参照しました。

「Start」をクリックすると、フォーマットが開始されます。

フォーマットが終わったら、一度USBメモリを開いてみてください。

すると**COMMAND.COM, IO.SYS, MSDOS.SYS**が出来ています。

そこに、解凍したBIOSアップデートファイルをコピーします。(合計6個のファイル)

{{< figure src="/wp-content/uploads/2008/07/072908-1536-msiwindu1003.png" alt="" >}} 

これでDOS起動USBメモリの出来上がりです。

これをMSI Windで起動すると、DOS画面になると思います。

DOSが起動したら、

「EAFUDOS.bat」と入力し、エンターを押します。

色んな項目が出てきて、その項目が無事に終わると、「done」と表示されます。

今回は、全て「done」でした。

アップデートが終わったら、Ctrl+Alt+Deleteで再起動させます。

無事にMSIのロゴが出てきたら、アップデート完了です。

BIOSの画面で確認したところ、ちゃんと1.06になっていました。

{{< figure src="/wp-content/uploads/2008/07/072908-1536-msiwindu1004.jpg" alt="" >}} 

くれぐれも、自己責任でチャレンジしてください。