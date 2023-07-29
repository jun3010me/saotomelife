---
title: iOS13(iPadOS)でライブ変換オフ時に発生する外部キーボード入力における日本語入力バグ
author: 魚住 惇
type: post
date: 2019-12-09T22:00:00+00:00
excerpt: iPadOSとiOS13で発生している外部キーボードで日本語入力していると発生する不具合について書きました
url: /ios13-ipados-jpime-bug-17368.html
thumbnail: /wp-content/uploads/2019/12/Fotoring-Image.jpg
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1575928837
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1204158939056631808";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1204158939056631808";s:5:"pDate";s:19:"2019-12-09 22:00:38";}}";'
categories:
  - iOS
  - 教師のiPad仕事術
tags:
  - iPad活用

---
## 2020年3月25日更新:iPadOS13.4でライブ変換が導入されたと同時にバグが修正された

本記事で記述した　日本語入力を高速で行った際のバグは、iPadOS13.4で導入されたライブ変換をONにすることで発生しなくなることが確認できました。ライブ変換本当に良いです。Emacsのショートカットキーが使えます。これについてはこちらの記事にまとめましたのでご覧下さい。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="T0moFLLARv">
    <a href="http://192.168.11.200:8000/ipados-emacs-shortcutkey-17641.html">iPadOS 13.4のテキスト入力で使えるショートカットキーまとめ</a>
  </blockquote>
</div></figure> 

以下の記事内容は、ライブ変換が導入される前の予測変換システムを利用した際に発生するバグのお話です。

## 日本語入力時に勝手に改行される

この動画をご覧ください。Twitterに貼ったものです。

<blockquote class="twitter-tweet">
  <p dir="ltr" lang="ja">
    <a href="https://twitter.com/hashtag/iPadOS?src=hash&ref_src=twsrc%5Etfw">#iPadOS</a> と <a href="https://twitter.com/hashtag/iOS13?src=hash&ref_src=twsrc%5Etfw">#iOS13</a> でBetaの頃から発生している日本語入力バグ。動画では入力→Enterを徐々に速く押している。平仮名が確定されずに消えたり勝手に改行される。自分は普段からこの速度で入力しているから、勝手に改行されてストレスが半端ない。<a href="https://twitter.com/hashtag/Apple?src=hash&ref_src=twsrc%5Etfw">#Apple</a> さん修正してくださいよ(´･ω･`) <a href="https://t.co/itc43NOhdG">pic.twitter.com/itc43NOhdG</a>
  </p>— 魚住惇(さおとめらいふ) (@jun3010me) 
  <a href="https://twitter.com/jun3010me/status/1203982120957296640?ref_src=twsrc%5Etfw">December 9, 2019</a>
</blockquote>

どういう状況かというと、**日本語入力をONにした状態で「o」キーを押した後にEnterキーを押す。**ということをひたすら続けています。つまり、<span class="smb-highlighter">ローマ字なので平仮名の「お」と画面に表示され、予測変換候補が表示された状態でEnterキーを押して、未変換のまま確定</span>しています。

この2つのキーを交互に押す動作を、徐々に速くしていくと、**とあるタイミングから、Enterキーを押した途端に「お」が消えたり、改行されたりするのです。**

僕はiPadOSのPublicBetaの頃からこの問題に直面し、悩んできました。フィードバックを送っても、解決していただけませんでした。

ただ、この「勝手に改行される」という表現が、起こっている事象を正しくとらえているのかというと、そうではなかったんです。

当時の僕は、「ひらがなを入力した直後にEnterキーを押すと、何故か勝手に改行される」くらいにしか思っていませんでした。

けど、この勝手に改行されるという表現が表面的な症状だっていうことに、やっと気づくことができました。

## 日本語入力直後にEnterキーを押すと文字が消える＆改行される

正しくは、この見出しの表現かと思います。

そんなに高速で入力する人、いるのかよ？と思われるかもしれませんが、僕自身がそうだったのです。

iPadとHHKBでガシガシコマンドを入力したり、LINEでメッセージを入力する際に、<span class="smb-highlighter">そこそこ高速で入力していると、この症状が発生</span>してしまい、結果勝手に改行されることになってしまうのです。

最初はHHKBBTのBluetooth接続によるチャタリングか？とも思いましたが、HHKBType-SをUSB-Cハブ経由で接続しても同様の問題が起こるのです。

## SmartKeyboardでは確認できず

この不具合は、SmartConnectで接続されたSmartKeyboardやSmartKeyboardFolioでは確認できていません。つまり、Appleの見解としては、Apple純正以外のキーボードを接続した状態での不具合という位置付けとなるわけです。

### AppleStore栄でも解決できず

今回の不具合解消が、ひょっとしたらiPad側にあるのでは？と、まだこのバグの詳細に気づいていない頃、AppleStore栄のジーニアスバーで見てもらったことがあります。

しかし、時前のHHKBBTで接続した時だけこの「勝手に改行される」問題が発生したので、スタッフの方も「この状況なら、そのキーボードに原因がある可能性がありますね。一度メーカーに見てもらって下さい」と言わざるを得ませんでした。

正直、納得がいきませんでした。MacではHHKBBTは普通に使えていますし。

でもこの頃はまだiOSのバグだっていうことに気づいていなかったので、今となっては仕方ないかな。

## 現状の対策はライブ変換ONか「速度を落としてEnterを押す」だけ

走り屋の漫画『頭文字D』で、タイヤを酷使しすぎたハチロクが、タイヤのグリップが落ちたせいでアンダーステアが出るようになってしまった描写がありました。最終巻あたりです。その時、プロジェクトDのリーダーである高橋涼介は<span class="smb-highlighter">「フロントタイヤの劣化から来るアンダーステアは、どんなテクニックをもってしても制御できない。コーナーへの侵入スピードを落とすことだけが、唯一の対応策だ。」</span>と説明しています。

今正に、僕のおかれが状況がこれに近いかなって思っています。

**僕のタイピングスピードに、iPadが付いて来られないなんて・・・。**

唯一の対応策は、<span class="smb-highlighter">日本語入力を確定するためのEnterキーを押すタイミングを、不具合が発生しないタイミングまで待ってから押すこと</span>です。

これを違和感無く実現するなら、細かい文節毎にちまちま確定するのではなく、ある程度入力してから変換し、変換内容をしっかり確かめてから確定するということでしょうか。あとは、ひらがなだけで確定しない。漢字と送り仮名を含めて変換してから確定する。ここまですることで、症状を抑えることができると思います。

なんかな、この不具合(最早仕様か？)が修正されるまでは、自分のタイピングスタイルを変えないといけないなんてな・・・。

もし同様の不具合に悩まされている方がいらっしゃいましたら、少しEnterキーを押すタイミングをずらすなどして対応してみてください。