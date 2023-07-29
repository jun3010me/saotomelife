---
title: startup-configを消す時の注意！
author: 魚住 惇
type: post
date: 2008-02-25T08:56:34+00:00
url: /startup-config-tyui-34.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 49
scc_follow_count_feedly:
  - 37
categories:
  - PC
tags:
  - CCNAのメモ

---
皆さん、実習お疲れ様です。最近、実機演習が多いですね。 まぁ今の内だけです。存分に楽しんでおいてください。

今回は、startup-configを消す時の注意についてまとめました。

<!--more-->

startup-configを消す時のコマンド。みなさん覚えてますか？

そう、「erase startup-config」ですね。

このコマンドを実行すると、こんな感じになりますね。

&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211; Remote#erase startup-config Erasing the nvram filesystem will remove all configuration files! Continue? \[confirm\] \[OK\] Erase of nvram: complete &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;

では、次のログを見てください。

&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211; Tokyo#copy running-config start-config Destination filename [start-config]? Erase flash: before copying? [confirm] Erasing the flash filesystem will remove all files! Continue? [confirm] Erasing device&#8230; eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee &#8230;erasedee Erase of flash: complete &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;

最後の行に注目してください。

Erase of flash: complete

 **ぎゃぁぁぁぁぁぁぁぁ！！！！flashも一緒にeraseされてる！！！！！！！！**

さて、IOSが保存されているflashをeraseしてしまったようです。

どうしてかわからないですが、

設定にcopyする時に、ファイル名を間違えると、

Erase flash: before copying? [confirm] 日本語訳:コピーする前にflash消しとく？

って出るんです（汗

みなさん、いつもの調子で 「よぉし、エンター♪エンター♪」 なーんて、何も考えずにEnterを押すと、えんらいことになりまっせ

要注意です。