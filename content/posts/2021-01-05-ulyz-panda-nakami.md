---
title: Ulyssesの「ulyz」やPandaの「panda」は何を保存しているのか
author: 魚住 惇
type: post
date: 2021-01-05T07:01:48+00:00
excerpt: Markdownエディタの独自仕様のファイルの中身を実際に見てみました。
url: /ulyz-panda-nakami-20789.html
thumbnail: /wp-content/uploads/2021/01/version1uuid7E0B0B3A-542F-4397-8693-EAEC8B062ADEmodecompatible.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1609830118
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1346351484330364928";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1346351484330364928";s:5:"pDate";s:19:"2021-01-05 07:03:02";}}";'
categories:
  - 教師のiPad仕事術

---
iPadからAppStoreで「Markdown」で検索してはアプリを入れまくっています。魚住です。

最近、「Spaces」というMarkdownアプリを見つけました。  
{{< figure src="/wp-content/uploads/2021/01/version1uuid6661956A-76DD-40EB-AC9B-5D2F3C30B752modecompatible.jpeg" alt="" >}} 

新参者のアプリです。このアプリはプレミアムの売り方がちょっと特徴的です。  
{{< figure src="/wp-content/uploads/2021/01/version1uuid45F08C2C-0C2F-4063-BE41-17FF4D7276DEmodecompatible.jpeg" alt="" >}} 

こちらの画像を見てください。「Only valid till 15th Jan or for the first 1000 users」とあります。

つまり、1月15日まで、もしくは先着1000名までは、4280円買い切りという意味です。モバイルバッテリーで有名なAnkerと同じ臭いがします。

しかも、公式サイトではまだドキュメントが間に合っていないものの、「Import from Ulysses」や「Import from Bear」という項目を用意していいます。なかなかの強気です。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://spaces.do/">}}
</div></figure> 

  
まさに今、Markdownエディタ戦国時代と言っても過言ではないほどの激戦が繰り広げられています。新規参入や仕様のパクりがあまりにも多すぎる。

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://apps.apple.com/jp/app/spaces/id1509611686?uo=4&#038;at=11l7ge"><img decoding="async" loading="lazy" src="https://is4-ssl.mzstatic.com/image/thumb/Purple114/v4/7a/69/72/7a697297-f0e0-df6a-9f75-51655332a427/source/512x512bb.jpg" alt="Spaces." width="150" height="150" class="pochi_img" /></a>
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://apps.apple.com/jp/app/spaces/id1509611686?uo=4&#038;at=11l7ge">Spaces.</a>
      </div>
      <div class="pochi_price">
        無料
      </div>
      <div class="pochi_seller">
        <a href="https://apps.apple.com/jp/developer/marvey-tech/id1492259121?uo=4&#038;at=11l7ge">Marvey Tech</a>
      </div>
      <div class="pochi_time">
        (2021.01.05時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" rel="nofollow noopener" target="_blank">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
    </div>
  </div>
</div>

このSpacesというアプリは、少し使ってみるとUlyssesやBearと同じような、独自ライブラリ構築系のエディタでした。

Appleが用意したCloudKitというライブラリを使って、iCloudを使ったファイルの同期を行う機能が実装されてはいるものの、CloudKitで扱うファイルはiCloud Driveにそのまま保存されるわけではありません。

例えば、NotePlan3でiCloud Driveでの同期をやめてCloudKit方式に切り替えると、編集した時点で同期を試みて、iCloud Driveのようにいつ同期されるかわからないストレスを感じることなく読み書きできます。

しかし、Macからそのファイルの保存先を探ってみると、**「/Users/ユーザ名/Library/Containers/co.noteplan.NotePlan3/Data/Library/Application\ Support/co.noteplan.NotePlan3/」**という場所に保存されていることがわかりました。

これではNotePlan3同士でのファイルのやり取りがいくら快適になったとしても、肝心な他のエディタからの参照が出来なくなるわけです。上記のパスにあるファイルを別アプリで直接編集したとしても、NotePlan3で編集したわけではないので、CloudKit同期もされません。

話をSpacesに戻すと、このアプリも<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">結局はUlyssesやBearで育ててきたプライベートな文書ライブラリを奪いたい</span>わけです。

**僕が欲しいのは独自ライブラリ構築系じゃないんじゃ。iCloud Driveに溜め込んだMarkdownファイル群を直接編集したいエディタが欲しいだけなんじゃ。**

## 独自仕様のファイルの中身を覗いてみる

前回の記事で、Bearが次のMarkdownエディタを開発中という話を話題にしました。「Panda」と言うそうです。シロクマの次はパンダか。  
このPandaのMac版のAlpha版が既に公開されていたので、試してみました。すると、画像を挿入した状態で「.panda」という拡張子のファイルを保存しようとしたのです。<figure class="wp-block-embed is-type-rich is-provider-twitter wp-block-embed-twitter">

<div class="wp-block-embed__wrapper">
  <blockquote class="twitter-tweet" data-width="500" data-dnt="true">
    <p lang="ja" dir="ltr">
      うおおおおい、Bearの次に制作中のMarkdownエディタ、Pandaって言うんだけど、そのMac版で画像を挿入して保存しようとしたところ、これだぁ〜〜〜<br />なんだなんだ.pandaって。独自仕様じゃねーか😫そういうとこだぞ😡 <a href="https://t.co/mcJG94Rdd4">pic.twitter.com/mcJG94Rdd4</a>
    </p>&mdash; 魚住惇📖『逆境に負けない 学校DX物語』 (@jun3010me) 
    <a href="https://twitter.com/jun3010me/status/1344289627335655424?ref_src=twsrc%5Etfw">December 30, 2020</a>
  </blockquote>
</div></figure> 

  
おいおいまじかよって思いましたね。純粋なMarkdownエディタを作ってるんだろ？なに独自の拡張子で保存しようとしてんだ？と思ったわけです。

この時の想いをすぐフォーラムに書き込みました。

<blockquote class="wp-block-quote">
  <p>
    If you save the file with just text, you can save it as md. However, if I try to save it after inserting an image, it will be in .panda format.<br />Perhaps you have also included an image file in the file. However, I can’t edit it from other editors with this. Isn’t it possible to save the file as pure Markdown?
  </p>
  <p>
  </p>
  
  <cite>DeepLを頼りに想いを英訳して投稿しました。<br />https://beta.bear.app/t/why-is-the-file-format-panda/1003/2</cite>
</blockquote>

すると、こういう返事が返ってきました。

<blockquote class="wp-block-quote">
  <p>
    Hi there,<br /><br />Panda read and write in pure Markdown if there are no images/files attached to your document, as text files can only contain “text” :slight_smile:<br /><br />If you add an image or a file to the document, the format is changed to .panda, which is an <strong>open format: Textpack which is a zipped TextBundle.</strong><br /><br />This is a common format used to bundle text and images/files together, there are other editors who support it, <strong>but you can always unzip it and extract your Markdown file and your attachments.</strong><br /><br />We’re trying to use open formats and let you in full control of your data, we’re also open to any suggestion on this matter.<br /><br />Let me know what you think about this!<br /><br />Best.
  </p>
  
  <cite>https://beta.bear.app/t/why-is-the-file-format-panda/1003/2</cite>
</blockquote>

なるほど、**.pandaはテキストと関連するファイルをzipで圧縮した、所謂Text Bundle**なのね。

### .pandaの中身

というわけで、実際に中身を覗いてみることにしました。

{{< figure src="/wp-content/uploads/2021/01/version1uuid2B599026-9F91-4567-94D4-946A80E3E018modecompatible.jpeg" alt="" >}} 

適当な見出しと本文と画像を挿入したファイルを.pandaとして保存したので、複製して拡張子をzipに変更してから解凍してみました。  
{{< figure src="/wp-content/uploads/2021/01/version1uuid2D65AF30-1FBF-43C2-A06B-5BCF8E2C979Dmodecompatible.jpeg" alt="" >}} 

これが.pandaの中身です。メタデータの**info.json**、本文のtext.md、画像がassetsに入っていました。

{{< figure src="/wp-content/uploads/2021/01/version1uuidB90B3960-E969-427A-9596-482041CFF597modecompatible.png" alt="" >}} 

text.mdの中身は確かにMarkdown記法に準拠したものでした。

むむむ、中身は確かにMarkdownだ。しかし、.pandaなんて拡張子のファイルを作られてもなぁ。  
という感じに文句ばかり言っても仕方ないので、何故.pandaにしたのかという理由を考えました。

<ul class="is-style-vk-numbered-square-mark">
  <li>
    関連付けが取り合いにならない
  </li>
  <li>
    別アプリで開かない
  </li>
</ul>

こんなところでしょうか。まず独自の拡張子にすることで、ファイルの関連付けの取り合いが無くなります。つまり、**ダブルクリックすればPandaで開く**ことになります。そして拡張子をzipのままにしておけば、ダブルクリックでPandaで開かずに、設定によっては解凍が始まってしまうわけです。  
この事故を未然に防ぎ、**確実にPandaでファイルを開くためには、独自の拡張子にするしかなかった**わけです。

ん〜そう考えるとある意味納得できるかも？

いやいや、騙されてはいけません。

現在のPandaの仕様はやばいんですよ。

**「aaaa.md」をPandaで開いて、画像を挿入すると、「aaaa.panda」として上書きされる**んですよ。  
何この謎仕様！元のmdファイルを返せ！せめて同じフォルダにassetsフォルダ作ってそこに画像を入れてくれよ！**しかも.pandaの中にあるのは「aaaa.md」じゃなくて「text.md」だった**あ”あ”あ”あ”あ”あ”あ”あ”

結局、シロクマもパンダも、絶対浮気させないように束縛するメンヘラかまってちゃんだったってことかよ・・・。

### .ulyzの中身

はぁ。Pandaめ。ああいう独自仕様まじでやめてほしぃ。  
では、Ulyssesが吐き出す独自形式「.ulzy」についても少し触れようと思います。  
これも所謂Text Bundleです。正しい拡張子はzipです。  
{{< figure src="/wp-content/uploads/2021/01/version1uuid402273B2-DB8F-446E-8DBF-1568765BA5E7modecompatible.jpeg" alt="" >}} 

「.ulyz」を「.zip」に変えて、解凍します。すると、「.ulysses」が出てきました。

{{< figure src="/wp-content/uploads/2021/01/version1uuid7E0B0B3A-542F-4397-8693-EAEC8B062ADEmodecompatible.jpeg" alt="" >}} 

「.ulysses」を更に「.zip」に変更して中身を見てみると、Content.xmlとMediaフォルダが入っていました。Mediaフォルダの中には、画像ファイルがありました。{{< figure src="/wp-content/uploads/2021/01/version1uuidE9AD1D73-D60D-431C-A827-57CE531B8D0Fmodecompatible.jpeg" alt="" >}}  
Content.xmlの中身は、xmlなのでhtmlに近いタグが並んでいます。段落とかは<p>タグが入っていますね。xmlはhtmlの仕様に近い、言わば親戚みたいなものなので納得できます。

というか、xmlで保存しているあたり、ちょっとUlyssesには時代を感じます。設計思想が古いのかもしれませんね。

## ええいiPadで動く理想のMarkdownはまだか

TwitterやRedditを覗いてみると、海外でもiPadで動くMarkdownエディタを欲している人が多いようです。まぁ現時点の大半がiAWriterか1Writerなんですけどね。  
iAWriterのiPad版の日本語入力バグが直って、画像の仕様が変更されたら最高なんだよなぁ。