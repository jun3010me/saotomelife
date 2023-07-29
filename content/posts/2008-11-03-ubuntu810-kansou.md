---
title: Ubuntu8.10を使ってみて
author: 魚住 惇
type: post
date: 2008-11-03T11:52:41+00:00
url: /ubuntu810-kansou-226.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 3
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
<span style="font-size: 10pt;">Ubuntu8.10をしばらく使ってみましたが、8.04までとは大きく違う点がいくつかあって、 </span>

結構戸惑っています(´ﾍ｀；)

<!--more-->

まず、xorg.confの記述が極端に減りました。</p> 

ここ最近のLinuxでは、設定ファイルを一カ所に固めずに

複数に分散させるような動きがありましたが、まさかここまでくるとは・・・。</p> 

他にも、[リリースノート][1]で変更点が確認できます。</p> 

いくつかピックアップすると、

・Radeon<span style="color: red;">9500?X600</span>までサポートしない

・X.Orgのバージョンが上がったので、<span style="color: red;">xorg.confで入力デバイスの設定が無視</span>される

・xmodmapの<span style="color: red;">キーコードが違う</span>

・intel4965は新しいバージョンドライバをインストールしないと<span style="color: red;">カーネルパニック</span>を起こす

・Atheros ath5kも同様にドライバを<span style="color: red;">自分で</span>インストールしない限り有効にならない</p> 

むむむ・・・、個人的に、xmodmapとintel4965は正直痛い ・ﾟ・(つД｀)・ﾟ・</p> 

新しい時代に移るために、まだまだ調べ物は続きます(｀･ω･´)

 [1]: https://wiki.ubuntu.com/IntrepidReleaseNotes/ja