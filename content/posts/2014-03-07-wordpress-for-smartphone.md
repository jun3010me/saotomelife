---
title: WordPressをスマホでも見やすいようにテーマをカスタマイズした
author: 魚住 惇
type: post
date: 2014-03-07T08:46:45+00:00
url: /wordpress-for-smartphone-7424.html
thumbnail: /wp-content/uploads/2014/03/2014-03-07_16_12_341.png
views:
  - 21
scc_follow_count_feedly:
  - 37
categories:
  - ブログ考察
tags:
  - iPhone

---
<img decoding="async" loading="lazy" title="2014-03-07_16_12_34.png" src="/wp-content/uploads/2014/03/2014-03-07_16_12_34.png" alt="2014 03 07 16 12 34" width="554" height="600" border="0" />

<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

今回は、当ブログでも利用しているWordPressで、

スマホ(スマートフォンやiPhone)でも見やすいようにカスタマイズしてみました。

## レスポンシブデザインに対する私見

### レスポンシブって？

最近、**「レスポンシブ」**と書かれたWordPressのテーマが多くなりました。

レスポンシブとは、サイトを表示しているデバイスの画面の横幅やウィンドウサイズに応じて、サイトのデザインを調整して、見やすくしようというものです。

PC、タブレット、スマートフォン、それぞれで同じサイトにアクセスしても、レスポンシブデザインなテーマにしておくことで、それぞれで見やすいデザインに切り替わるわけですね。

### 当ブログのアクセス状況

<img decoding="async" loading="lazy" title="スクリーンショット 2014-03-07 16.27.35.png" src="/wp-content/uploads/2014/03/e051a00a4fc4d4b831c4593b589d9769.png" alt="スクリーンショット 2014 03 07 16 27 35" width="285" height="313" border="0" /> 

これは、当ブログを見てくださった方のモバイルである割合です。

この円グラフを見ると、アクセスしてくださる方の63%の方が

モバイルからのアクセスであることがわかりました。

 

更に、スタバのカスタマイズ系の記事をご覧になっている方は、

ほぼ全ての人がスマホからのアクセスであることもわかりました。

 

つまり、このブログは**スタバでメニューを注文する際に参考にしていただいている**わけですね。

 

当ブログは、大きく分けるとiPhoneなどのガジェット系の記事と、

スタバのカスタマイズ系の記事があります。

 

ガジェット系の記事のほとんどは、PCで読まれています。

そして、スタバのカスタマイズ系の記事のほとんどは、モバイルで読まれています。

 

最近ではスタバのカスタマイズ記事の方が読まれているので、

WordPressのテーマをスマートフォンで見やすくカスタマイズすることが、

皆さんのストレス軽減に大きく関わるわけですね。

 

これを見過ごすわけにはいきません。

### 真のレスポンシブとは

もう一度書きますが、最近のWordPress用テーマで、レスポンシブ対応が増えてきました。

 

その多くは、デバイスの画面の幅によって表示するデザインを変えます。

しかしそのほとんどは、PC用のデザインに配置されている内容を、

モバイルの幅で快適に見る為のものです。

CSSで再配置するわけですね。

 

確かに仕組み的にはウィンドウ幅で配置を変えることで、

全てのデバイスに最適なデザインを提供することができるとは思います。

 

しかし、当ブログの場合は、スマホからアクセスする人と、

PCからアクセスする人で、見たい内容が違います。

スマホからアクセスしてくださる人は、

スタバのカスタマイズ例が見たいんです。

 

PCからアクセスする人は、iPadに最適なタッチペンがどれなのかを知りたいわけです。

 

そう考えると、単純にデザインを変えるだけでは、

本当のレスポンシブとは言えないんじゃないかと思うようになりました。

## 有名ブロガーさんのスマホデザイン

さて、ここで有名ブロガーさんのスマホ向けデザインがどんな感じなのかをここで見ておこうと思います。

### goryugo.com

<img decoding="async" loading="lazy" title="goryugo_com.png" src="/wp-content/uploads/2014/03/goryugo_com.png" alt="Goryugo com" width="421" height="594" border="0" /> 

ブログ合宿で何度もお会いさせていただいている[goryugoさんのブログ][2]のスマホデザインです。

### nori510.com

<img decoding="async" loading="lazy" title="nori510_com.png" src="/wp-content/uploads/2014/03/nori510_com.png" alt="Nori510 com" width="421" height="532" border="0" /> 

こちらはごりゅごさんの弟である[nori510さんのブログ][3]のスマホデザインです。

Stinger3をここまで編集した例は僕としては見たことがありません。

### 拡張現実ライフ

<img decoding="async" loading="lazy" title="akio0911_net.png" src="/wp-content/uploads/2014/03/akio0911_net.png" alt="Akio0911 net" width="421" height="560" border="0" /> 

アクセス解析の講座を開いてくださった、[akioさんのブログ][4]のスマホデザインです。

### 共通点

どのブログにも共通して言えるのが、

小さなサムネイルに記事にタイトルがあり、見やすく一覧になっていることです。

 

本当は記事ページも参考にしたいところですが、

今回はこのブログトップを主に変えたいと思います。

## Twenty Fourteenをベースにする

<img decoding="async" loading="lazy" title="スクリーンショット 2014-03-07 17.15.05.png" src="/wp-content/uploads/2014/03/0a3ea7379bdc0cc26a7c354c86ce19fd.png" alt="スクリーンショット 2014 03 07 17 15 05" width="600" height="315" border="0" /> 

WordPressがアップデートされた時に、

「Twenty Fourteen」という新しいテーマが入っていました。

「Twenty Fourteen」はレスポンシブに対応しており、ウィンドウ幅を変えると、

 

 

<img decoding="async" loading="lazy" title="スクリーンショット 2014-03-07 17.15.26.png" src="/wp-content/uploads/2014/03/2019bb5b992b8e9aeac6d148244f3ba2.png" alt="スクリーンショット 2014 03 07 17 15 26" width="385" height="243" border="0" /> 

こんな感じになったわけです。

様々なテーマを試していた時に、「これだ！！！」と思いました。

 

今回はこのテーマの、スマートフォン向けの表示をカスタマイズして、

スマホからのアクセスの時のみ表示するようにしていきました。

## Any Mobile Theme Switcherを使う

スマホからのアクセスのみ「Twenty Fourteen」に切り替える為に、

WordPressのテーマをデバイスによって切り替えるプラグイン**「Any Mobile Theme Switcher」**を利用しました。

 

<img decoding="async" loading="lazy" title="スクリーンショット 2014-03-07 16.52.44.png" src="/wp-content/uploads/2014/03/68de49587636f58e776d2f01e7861e88.png" alt="スクリーンショット 2014 03 07 16 52 44" width="470" height="600" border="0" /> 

これが設定画面です。iPhoneやiPad、Androidもタブレットと分かれています。

本当はタブレットとPCもテーマを分けたいところですが、

当ブログで利用しているテーマがレスポンシブな為、

スマートフォンからの表示のみを変更しました。

## トップページは良い感じ！

<img decoding="async" loading="lazy" title="2014-03-07 16.12.34.png" src="/wp-content/uploads/2014/03/2014-03-07-16.12.34.png" alt="2014 03 07 16 12 34" width="338" height="600" border="0" /> 

スマホ向けのテーマを「Twenty Fourteen」に変更しただけで、

なんか良い感じになりました！ヽ(=´▽\`=)ﾉ

 

普通にブログを書いている人は、

もうこれだけで満足できると思います。

### Auto Post Thumbnailとの弊害を解決する

ただ、当ブログの場合は、記事内の最初の画像をサムネイルに指定するプラグイン**「Auto Post Thumbnail」**を利用しているので、テーマを変えるだけだと、

 

<img decoding="async" loading="lazy" title="2014-03-07_17_22_25.png" src="/wp-content/uploads/2014/03/2014-03-07_17_22_25.png" alt="2014 03 07 17 22 25" width="338" height="600" border="0" /> 

こんな感じに**同じ画像がタイトルを挟んで2枚表示され**てしまいました。

ううむこれは何とかして解決したい。

 

しかも、「Twenty Fourteen」ではトップページも記事ページも

content.phpを使って書き出しているので、

**サムネイルを表示する部分を消すと、トップページのサムネイルも消えてしまいました。**

**  
** 

これでは本末転倒です。

 

### content.phpを少し書き換えた

ここで、content.phpを少し書き換えました。

 

書き換えたのは、content.php内の

<span style="font-family: HiraKakuProN-W3; font-size: 13px;"><b><?php twentyfourteen_post_thumbnail(); ?></b></span>

という記述です。これを

 

<div style="font-family: HiraKakuProN-W3; font-size: 13px;">
  <b><?php if ( is_home() || is_archive()) :</b>
</div>

<div style="font-family: HiraKakuProN-W3; font-size: 13px;">
  <b>twentyfourteen_post_thumbnail();</b>
</div>

<div style="font-family: HiraKakuProN-W3; font-size: 13px;">
  <b>endif;</b>
</div>

<div style="font-family: HiraKakuProN-W3; font-size: 13px;">
  <b> ?></b>
</div>

に書き換えました。

**  
** 

**「トップページとアーカイブページならサムネイルを表示する」**

****という条件分岐を追加しました。

この内容で更新することで、

<img decoding="async" loading="lazy" title="2014-03-07 17.23.11.png" src="/wp-content/uploads/2014/03/2014-03-07-17.23.11.png" alt="2014 03 07 17 23 11" width="338" height="600" border="0" /> 

こんな感じに**記事ページのサムネイルを非表示**にすることができました。

 

また、記事内に広告などの自分が追加したいコンテンツがあったら、

同じようにcontent.phpを編集することで編集できると思います。

 

他のテーマと同じように**single.phpを編集したら、**

**ブログが真っ白になった**ので慌てて戻しました笑

## まとめ

今回は、「Twenty Fourteen」と「Any Mobile Theme Switcher」を利用して、

WordPressをスマホでも見やすいようにカスタマイズしてみました。

 

お気づきの方もいると思いますが、

このブログではこの記事以上にカスタマイズしています。

SNSボタンなどがそれですね。

この部分に関しては、編集する人の好みにも関わるところなので、

今回の内容では敢えて触れませんでした。

 

ただ、僕が今回作業する上で一番困ったサムネイル

に関しては同じ悩みで困っている方に、

是非解決していただきたいと思ったので載せました。

 

是非参考にしていただきたいと思います(｀･ω･´)ゞ

 [1]: https://twitter.com/jun3010me
 [2]: http://goryugo.com/
 [3]: http://nori510.com/
 [4]: http://akio0911.net/