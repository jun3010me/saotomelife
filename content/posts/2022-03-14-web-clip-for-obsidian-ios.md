---
title: WebクリップをMarkdown形式でObsidianのVaultに保存するiOSショートカット
author: 魚住 惇
type: post
date: 2022-03-14T12:32:38+00:00
excerpt: WebクリップをObsidianに保存するためのショートカットを作りました
url: /web-clip-for-obsidian-ios-22576.html
thumbnail: /wp-content/uploads/2022/03/AD7C1321-D9B5-4B01-BC48-11DDC3BEF7DF.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 'ガジェット&amp;PC'

---
iPadで調べ物をしていて、よく思うことがあります。

  * この記事、後で読みたい
  * 引用するために保存しておきたい

これを解決するために、Safariの共有メニューから使える、**今開いているWebページをMarkdown形式で、ObsidianのVault内に保存するショートカット**を作成しました。

## ショートカットの中身

ショートカット本体はこちらよりダウンロードできます。

<div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-4">
  <div class="wp-block-button">
    <a class="wp-block-button__link" href="https://www.icloud.com/shortcuts/ee7c485c7bf2440b8dbdd27d6611036c">ショートカットをダウンロード</a>
  </div>
</div>

動作には、iOS/iPadOS用アプリの「ショートカット」が必要です。

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://apps.apple.com/jp/app/%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%82%AB%E3%83%83%E3%83%88/id1462947752?uo=4&at=11l7ge"><img decoding="async" loading="lazy" src="https://is2-ssl.mzstatic.com/image/thumb/Purple115/v4/f8/c1/7d/f8c17d3b-1261-1e04-a26b-0d86f31be916/source/60x60bb.jpg" alt="ショートカット" class="pochi_img" width="60" height="60" /></a>
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://apps.apple.com/jp/app/%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%82%AB%E3%83%83%E3%83%88/id1462947752?uo=4&at=11l7ge">ショートカット</a>
      </div>
      <div class="pochi_price">
        無料
      </div>
      <div class="pochi_seller">
        <a href="https://apps.apple.com/jp/developer/apple/id284417353?mt=12&uo=4&at=11l7ge">Apple</a>
      </div>
      <div class="pochi_time">
        (2022.03.14時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" rel="nofollow noopener" target="_blank">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
    </div>
  </div>
</div>

内容はだいたいこんな流れです。

  * Safariのリーダーを使って記事を取得
  * Markdown形式に変換
  * ObsidianのVault内に保存
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/AD7C1321-D9B5-4B01-BC48-11DDC3BEF7DF.jpeg" alt="" >}} </figure> 

細かいところで言うと、日付のフォーマットをYAML用とWikiリンク用で2種類用意してます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/DFAA0B7E-CDEA-49B5-A37E-28E7EAEA134A.jpeg" alt="" >}} </figure> 

そしてYAMLの記述を埋め込んで、保存した日付のWikiリンクを仕込んで、その下に記事の本文を貼り付けています。mdファイル内の体裁を変更されたい場合は、保存前のテキストブロックの中を編集すると、お好みの内容を構成できます。

こうしてできたmdファイルを、ファイルアプリよりObsidianのVault内に保存しているわけです。

今回、このショートカットを作成するに当たって、こちらのサイトを参考にしました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://note.com/walking_poppo/n/n72637ac7a1da">}}
</div></figure> 

mdファイルをショートカットで作成して保存すると言うアイデアはここから得ました。

## PCでやるなら「MarkDownload」

実はWebクリップをMarkdown形式で行う方法は、PCからならここまでのことをせずに実現出来ます。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://github.com/deathau/markdownload">}}
</div></figure> 

MarkDownloadと名付けられているブラウザ用の拡張機能があって、Firefox、Google Chrome、Microsoft Edge、Safari用の拡張機能がそれぞれ用意されています。(Safari用だけ有料)

それと、MarkDownloadのソースコード内にあるJavaScriptを元に作成された、保存先をObsidianのVault内にしたスクリプトが、こちらで公開されていました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://gist.github.com/kepano/90c05f162c37cf730abb8ff027987ca3">}}
</div></figure> 

ここで公開されている「**obsidian-web-clipper.min.js**」をブックマークとして登録すれば、ブックマークレットとして使えます。ボタン一つで保存作業が行えるようにもなります。ブラウザに拡張機能を入れたくない方はこっちを使うと良いと思います。

ただし、このブックマークレットとして登録するコードが長すぎて、iPhoneやiPadでは登録そのものが出来ませんでした。

長いコードをコピーして、iPadのSafariのブックマーク編集画面に貼り付けると、途中で「&#8230;」が入って省略されてしまい、最後の文字までを貼り付けることが出来ませんでした。

MacのSafariで登録してiCloudを通してブックマークレットを同期しても、iPadでは動作しませんでした。

### obsidian-web-clipper.jsをiPadやiPhoneで動かす方法
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/8BE685FC-A111-4F50-823E-6646D521756E.jpeg" alt="" >}} </figure> 

そこでこっちでも活躍してくれたのが、ショートカットでした。

ショートカットに用意されているブロックで、「JavaScriptを実行」が用意されています。もうぶっちゃけなんでもアリの世界じゃんとも思えるこのブロックに、obsidian-web-clipper.jsの内容を貼り付けて共有シートからの動作に繋げます。これでiPadやiPhoneの共有メニューからMarkDownloadと同じように動作するJavaScriptを呼び出して、Webクリップを保存できるようになります。

ただし、「obsidian-web-clipper.js」はコードを貼り付けただけでは動きません。実行前にVaultやフォルダ名などを変数に入れておく必要があります。

## ショートカットとJavaScriptの違い

今回、僕が作ってみたショートカットと、MarkDownloadから派生したJavaScript。どちらを使うか迷うかと思います。

この2つ、やっていることは似ていても、違いはいくつかあります。ショートカットではSafariのリーダーを使って記事の本文を取得しているのに対して、JavaScriptはWebページ全体から特定のdivタグ内を抽出している動きをしています。それと、ショートカットでは保存する際にファイルを直接保存しようとしていますが、JavaScriptではObsidianのURLスキームを使って新規ファイルをObsidian上で作成しようとします。

なのでJavaScriptを動かすとObsidianを開こうとします。ショートカットの方は直接mdファイルを保存するため、Obsidianを開こうとしません。

それとどちらにも言えることですが、画像そのものはダウンロードを行わずリンクを取得するだけなので、元のWebページがなくなってしまったら画像が見られなくなります。

僕はどうしても自分で作ったショートカットに愛着があるため、今後はJavaScriptではなくてショートカットを使ってWebクリップをしようと考えていますが、Obsidianを使う環境がほとんどPCなら、そもそもMarkDownloadを使っても良いかなとも思いますし、JavaScriptを動かしても良いかと思います。

こうした仕様や違いなどを比べた上で、自分の環境に合ったものを考えるのも、楽しいのではないでしょうか。  
今回作成したショートカットが誰かのお役に立たら幸いです。