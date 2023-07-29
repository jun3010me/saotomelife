---
title: Ubuntu8.04でLet’snoteのhotkeyを使う
author: 魚住 惇
type: post
date: 2008-04-29T08:33:06+00:00
url: /ubuntu804-letsnote-hotkey-63.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 135
scc_follow_count_feedly:
  - 37
categories:
  - PC

---
はい、めっちゃお久しぶりです。

まぁ色んなことは後で話すとして、最近頑張っていたことを話します。

先日、Ubuntuの新しいバージョン、Ubuntu8.04がリリースされました。

実は、RC版から試しにCF-R2にインストールしてたんですが、

Let&#8217;snoteのhotkeyが効かなかったので、色々と調べてました。

<!--more-->

Lets&#8217;noteのhotkeyをLinuxで使うには、pcc_acpiというモジュールが必要で、今までのUbuntuには入ってました。なので、

/etc/moduleに「pcc_acpi」を追加するだけでhotkeyが使えました。

しかし、8.04では、Kernel2.6.24を採用してて、pcc_acpiが対応していませんでした。

ACPI関係の処理が変わってしまったので、そのままではmakeできなくなったんです。

そこで、patchを当てて、makeし直す。という作業を行いました。

用意するもの

pcc-acpi-0.9.tar.bz2

ttp://www.da-cha.jp/letsnote

pcc-acpi-0.9-kernel-2.6.23_apichange.patch

ttp://bts.vinelinux.org/guest.cgi?project=VineLinux&action=view_report&id=552

まずはこの2つのファイルをダウンロードしておいてください。

そして、patchファイルは、pcc_acpiの解凍した中に一緒に入れておきます。

まずは、今使ってるkernelにpatchを当てます。patchコマンドをインストールしておきます。

で、pcc_acpiの解凍したディレクトリに移動して、patchを当てます。

$sudo patch -p0 < pcc-acpi-0.9-kernel-2.6.23_apichange.patch

その後に、geditでpcc_acpi.cを書き換えます。

acpi\_bus\_generate_event(hotkey->device, event, hotkey->status);

↑こうなっている部分を、

acpi\_bus\_generate\_proc\_event(hotkey->device, event, hotkey->status);

↑こう変えます。

これでmakeできるはずです。makeとmake installが済んだら、

$sudo modprobe pcc_acpi

これでUbuntu8.04でLet&#8217;snoteのhotkeyが使えるはずです。

あ、それと、/etc/moduleにpcc_acpiを追加しておきましょう。

ふぅ、これで少しはマシになったかや?