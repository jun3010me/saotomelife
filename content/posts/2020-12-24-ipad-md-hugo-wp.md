---
title: iPadで編集したmdファイルをHugoにもWordPressにも投稿できる仕組みを作った
author: 魚住 惇
type: post
date: 2020-12-24T08:30:00+00:00
url: /ipad-md-hugo-wp-20726.html
thumbnail: /wp-content/uploads/2020/12/version1uuid6EE6FF44-87C1-4E0C-9F93-57FEFC949460modecompatible.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1608798654
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1342024944868200450";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1342024944868200450";s:5:"pDate";s:19:"2020-12-24 08:30:55";}}";'
categories:
  - 教師のiPad仕事術

---
前回も脱Ulyssesと書きました。他のエディタに移ると、本当にUlyssesって優秀なアプリだったんだなって思います。  
しかしやっぱり、独自仕様で保存するというのが引っかかったので、お引っ越しを長らく検討していました。  
今回は脱Ulyssesを考えながら、エディタで書いたmd(Markdown記法で記述した拡張子が.mdの)ファイルを元に、如何に効率よく記事化できるかを模索した内容をお届けします。

ちなみに今回紹介する方法は、「iPadで」というのがポイントです。Macだったらここまで苦労しなかったと思います。

## 目指した形の再確認

ここで、僕が今回目指した形を再確認します。

  * mdをiPadで編集したい
  * 書いたmdの内容をWordPressに投稿したい
  * Hugoにも投稿したい 
      * つまりiPadからGithubにpushしたい
      * ほんでもってiPadからHugoコマンドも実行したい

本当にこれ、iPadだけでやる内容か？とも思ったんですが、普段使いのデバイスがiPadなので、 iPadだけで完結するようにしました。

## MWebというエディタを使う
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2020/12/version1uuid86D02C4D-2DB1-4736-8B3E-95AF0DD5B6B3modecompatible.jpeg" alt="" >}} </figure> 

<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">iPad版iAWriterで日本語入力中にライブ変換がうまくいかない不具合</span>が2020年12月現在でも続いています。  
僕自身ライブ変換の精度がなかなか良くて、言われるまで気づかなかったんですが、気づいてからはこの不具合が気になってしまって、<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">iAWriterで文章を書くのが億劫</span>になってしまいました。  
それと、Markdownで文章を書いている時、例えば**見出しを入れた時に色が変わって欲しい**んです。  
その方が文章がプログラムのコードを書いているみたいで、なんかカッコ良いなって思うんですよ笑。たったそれだけの理由ですが、この**「文章を書いているときに気分が上がる」ための条件**というのを、僕は大事にしています。HHKBだってそのためのものです。  
そんな感じにMarkdownエディタ探しの度に出ていて見つけたのが、この**MWeb**という名前のアプリです。

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://apps.apple.com/jp/app/mweb-powerful-markdown-app/id1183407767?uo=4&at=11l7ge"><img decoding="async" loading="lazy" src="https://is1-ssl.mzstatic.com/image/thumb/Purple124/v4/9a/ce/0e/9ace0e15-8f54-1bc4-3f65-01c8c03fee99/source/60x60bb.jpg" alt="MWeb - Powerful Markdown App" class="pochi_img" width="60" height="60" /></a>
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://apps.apple.com/jp/app/mweb-powerful-markdown-app/id1183407767?uo=4&at=11l7ge">MWeb &#8211; Powerful Markdown App</a>
      </div>
      <div class="pochi_price">
        無料
      </div>
      <div class="pochi_seller">
        <a href="https://apps.apple.com/jp/developer/ou-lvhai/id954188947?uo=4&at=11l7ge">ou lvhai</a>
      </div>
      <div class="pochi_time">
        (2020.12.24時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" rel="nofollow noopener" target="_blank">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
    </div>
  </div>
</div>

  
一言で言うと、iCloudDrive上のmdファイルを編集できて、WordPressにも投稿できるアプリです。  
前に書いた記事ではMac版に対してちょっと苦手意識があることを書いたんですが、iPad版での使い勝手が結構良かったのと、Mac版も使い方を変えたらそこそこ使えるようになったので、まぁまぁの合格点でした。

### iAWriterとの決定的な違いは、画像の扱い

iPadでもiPhoneでもMacでも使えるMarkdownエディタと言えば、iAWriterが思い浮かぶと思います。僕も買いました。  
ただ、iPad版を本気で使おうと考えた時、ちょっと使いづらい部分がありました。  
大まかにまとめるとこんな感じ

  * 複数の画像を一気に貼れない
  * 画像の扱いがMarkdown記法ではない
  * 見出しと本文が色分けされてなくて見づらい

この中で本当に困ったのが画像の扱いでした。まず<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">iPadで写真アプリとiAWriterをSplitViewで並べても、画像ファイルをドラッグ＆ドロップできませんでした</span>。これはiPadで使う上では結構致命的。  
じゃあiAWriterのメニューから画像を挿入すれば良いかと思っても、1回の挿入作業で1枚しか貼れませんでした。これも写真を沢山扱うブログ記事を各上でかなりのストレス源です。  
それと、iAWriter上で画像を貼ると、「/ファイル名」という独自形式で貼り付けられます。これはMarkdown記法ではなくiAWriter独自です。ので、iAWriterで画像を貼り付けたmdファイルを他のアプリで開いたとしても、画像が表示されません。大袈裟に言えばUlyssesと同じで、iAWriterよりも優秀なエディタが登場したとしても、乗り換えられない要因となる可能性があるわけです。  
ちなみに、**MWebで画像を貼り付けたmdファイルをiAWriterで開くと、ちゃんとプレビュー画面で画像が出てきます**。だったら最初からその方式に統一して欲しかったわ。

あと、MWebから画像を挿入すると、mdファイルと同じフォルダ内に「media」フォルダが作成され、その中に画像が保存されていきます。これは好みが分かれるところですが、個人的にはmdと画像が別のフォルダに入ってくれる方が、mdファイルだけをリストで眺めていられるのでこの仕様を気に入っています。

## mdからWordPressへ投稿する手順

ここはこれまで通りだと思います。

  1. Mwebで記事を書く
  2. そのままアップするoriAWriterで開いてからアップする
  3. 微調整があるならWordPressの下書き画面から

画像を用意するまでもないかもしれませんね。先程紹介したMwebや、iAWriterからなら、WordPressに直接投稿できます。  
ただ、Mwebからpublishする機能が有料なので、1000円ほど支払う必要が出てきます。他の手段がないなら支払っても良いわけですが、iAWriterを既に購入しているなら、買う必要はないかなと思います。  
Mwebで文章を書いて画像を貼ったmdであっても、iAWriterで開くこともできますし、画像もちゃんと表示されます。ので、Mwebの無料の範囲で記事を書いて、iAWriterからWordPressに投稿することもできるわけです。

## mdからHugoへ投稿する手順

この記事の本番はここです。  
mdファイルからHTMLを生成できるHugoというものがあります。Hugoをただ使うだけだと、手順としてはこんな感じの作業でサイトを作成・更新することができます。

  1. mdファイルを作成して内容を記述する
  2. Hugoコマンドを実行する
  3. 吐き出されたhtmlを公開する

ポイントは2と3です。Hugoはコマンドラインで作業します。つまりPCが必要です。  
ターミナルやコマンドプロンプトが使える環境で、Hugoを実行できる環境を構築する必要があるわけです。  
とは言っても、Macとかだとbrew install hugoとかで一発で入るらしいのでそこまで苦労しないかもしれませんが、なぜかうちのMac miniちゃんだと「Go言語が入ってねーぞ！」とか怒ってきたので僕は断念しました。  
それに、せっかくiPadでmdファイルを仕上げることができても、Hugoコマンドを実行したり吐き出されたHTMLを公開する作業をMacでやる必要があるなら、出先でiPadだけで作業を完結することが不可能です。これでは困ります。

では、どうすれば良いのか。  
僕は次の作業手順を考えました。

  1. mdファイルをMwebで作成する
  2. ショートカットでGithubへCommit&Push
  3. 画像が入ったmediaフォルダをWorkingCopyにコピーしてCommit&Push
  4. GitPodからHugoしてPush

ちょっとした長旅かもしれませんが、この手順であれば、全てをiPadで完了することができました。  
1については上で書いた通りなので、2から詳しく解説していきます。

Hugoする前のmdファイル群を、全てGitHubに保存するようにしました。Hugoコマンドを実行した際に吐き出すHTMLの保存先を、GitHubでウェブサイトを公開する時のdocフォルダに設定することで、そこまでアクセスのあるサイトでなければ、GitHub上で編集から公開までできるわけです。

また、どうしてもiPad上でファイルを操作したい時は、WorkingCopyを使います。iPad上にローカルリポジトリも作れますし、iAWriterやMWebから編集もできます。  
僕はとりあえずGitHubにHTMLを置いて、サブドメインのAレコードを追加しました。もうこれで新しくサイトを立ち上げる際にWordPressを増やす必要がなくなりました。

### iPadからGitHubへ Commit＆Pushするショートカット
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2020/12/version1uuid6EE6FF44-87C1-4E0C-9F93-57FEFC949460modecompatible.jpeg" alt="" >}} </figure> 

まず、こちらにショートカットを公開しました。お使いのiPadやiPhoneに取り込んでいただければと思います。

<div class="wp-block-buttons aligncenter is-layout-flex">
  <div class="wp-block-button">
    <a class="wp-block-button__link" href="https://www.icloud.com/shortcuts/0c16536c3d5640ddb41467b0bc72edd3" target="_blank" rel="noreferrer noopener"> md to Hugo をダウンロードする</a>
  </div>
</div>

このショートカットは、mdファイルをそのまま送るのではなく、内容をテキストとしてコピーして、クリップボードの中身をWordkingCopyに送り、GithubへCommit&Pushするようにしています。  
ので、このショートカットを実行する時点でWorkingCopy必須です。このアプリはiOS用Gitクライアントアプリなんですが。使い勝手がめちゃくちゃ良い代わりに、Commitまでは無料で、そのままPushするためには1300円支払って機能を解放する仕様となっています。

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://apps.apple.com/jp/app/working-copy-git-client/id896694807?uo=4&at=11l7ge"><img decoding="async" loading="lazy" src="https://is3-ssl.mzstatic.com/image/thumb/Purple114/v4/96/ae/fb/96aefb30-77fa-96b5-e47e-84b2e76d8fce/source/60x60bb.jpg" alt="Working Copy - Git client" class="pochi_img" width="60" height="60" /></a>
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://apps.apple.com/jp/app/working-copy-git-client/id896694807?uo=4&at=11l7ge">Working Copy &#8211; Git client</a>
      </div>
      <div class="pochi_price">
        無料
      </div>
      <div class="pochi_seller">
        <a href="https://apps.apple.com/jp/developer/anders-borum/id343532883?uo=4&at=11l7ge">Anders Borum</a>
      </div>
      <div class="pochi_time">
        (2020.12.24時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" rel="nofollow noopener" target="_blank">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
    </div>
  </div>
</div>

  
ショートカットの詳しい内容についてはコメントを詳しく入れたのでそちらを参照してみてください。

### mediaフォルダをWorkingCopyフォルダにコピーしてCommit&Push
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2020/12/version1uuidEB3118D9-380F-4E95-A681-632BE91BF171modecompatible.jpeg" alt="" >}} </figure> 

本当はこれも自動化したかったんですが、ショートカットアプリがショートカット内で自由にファイルを移動したりコピーしたりできる場所が、iCloud Driveの/Shortcutフォルダ内のみだったので断念しました。  
現状は、この作業を手動で行う必要があります。

ちなみに僕は現在、mdファイル群をNotePlan3で管理してい流ので、iCloud DriveにあるNotePlanフォルダにNotePlan3で扱うファイル群が保存されているわけですが、ファイルアプリから自由にファイルを触ることが何故かできません。試しに写真アプリからファイルアプリのNotePlanフォルダに向かって画像ファイルを移動しようとしたんですが、権限が足りないのか上手くいきませんでした。  
他のフォルダならファイル操作がうまくいくのに、不思議です。  
ただし、iAWriterやMWebからNotePlanのフォルダを参照して、ファイルを追加したり画像を挿入すると、フォルダがちゃんと作られるしファイルや画像も保存されているという謎現象。変な仕様だとしか説明がつきませんでした。

### GitpodというクラウドIDE
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2020/12/version1uuidCF05EA42-613D-4C54-83FC-3D4B7023C32Cmodecompatible.jpeg" alt="" >}} </figure> 

さて、あとはiPad上でHugoしたいわけですが、iPadのシェルはHugoコマンドを実行する環境が構築できるほど自由度が高くありません。  
コマンドラインで何かしようものなら、結局は外部のサーバに対してSSHする必要があります。  
そこで、GitpodというクラウドIDEサービスの出番です。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://gitpod.io/">}}
</div></figure> 

こいつが強過ぎるんですよ。**控えめに言って最高**です。

現在公開中のGitHubリポジトリのURLの頭に**gitpod.io/#**を付けるだけで利用できます。  
元々はVSCodeと同じような操作感のIDEをブラウザ上で実現しようというオープンソースプロジェクトだったんですが、それを基本無料(50時間/月)で公開しているのがGitpodです。  
しかもGitHubとアカウント連携できるわけですよ。iPadからならWorkingCopyでローカルリポジトリにクローンして編集してCommitしてPushする必要がありますが、Gitpodを使えばそれがブラウザ上で完結します。  
何が魅力かって、これ使えばiPadからHugoできるんですよ。GitHubにmd送って、iPadからHugo実行！とかができるわけです。Gitpodはあらかじめ設定されたDockerが立ち上がるようになっているので、インストールさえすればpythonだって動くんですよ。やーフリーでマシンを1台使わせてもらっているようなもんです。太っ腹です。  
毎月50時間までなら無料で使えるので、僕はHugoコマンドを実行して、その際に生成されたHTMLをGitpodからCommit&Pushする時だけ使うように気をつけています。  
本当に良いサービスです。検索すると「iPadでIDEが使えるぞー！」的な記事は大抵中身がGitpodです。

## 参考リンク

細かいところはまだまだ不満があります。  
例えば、MWebでは行入れ替えができません。かなり不便です。ので、編集している間は、ちょくちょくiAWriterと行き来しながら原稿を描こうかなとも思ったり、NotePlan3で書いても良いよなと思います。  
でもまぁ、とりあえずはiPadでここまでできたぞ！というのは達成できた気がするので、ひとまず満足です。  
(MWebで行入れ替えできないかってのは、MWebのフィードバックにメールしときました。)

今回、この仕組みを作る前に、まずはGitHubにHugo環境を構築しました。使おうとしているテーマはAcademicです。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://qiita.com/harumaxy/items/58e7e4273c61e7e260b3">}}
  ここで紹介されている内容を、Gitpodで実践しました。
</div></figure> 

Gitpodについては、こちらの記事を読み込みました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://aimek-developer.blogspot.com/2020/04/eclipse-theia.html">}}
</div></figure> <figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://qiita.com/mouse_484/items/394a4984f749cc201422">}}
</div></figure> <figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://qiita.com/gsy0911/items/dbb64871480cf1a06acf">}}
</div></figure> 

GitpodをiPadで使う上で一番詳しいサイトはこちらでした。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://furamon.work/post/2020/04/gitpod-ipad/">}}
</div></figure> 

GitHubにHugoを置いて公開するために必要な設定はここを参考にしました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://qiita.com/ysdyt/items/a581277dd1312a0e83c3">}}
</div></figure> 

iOSショートカットを作成するにあたり、こちらのブログの内容をほぼ流用しました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
 {{< blog-card "https://www.brookshelley.com/posts/hugo-and-i-a-writer/">}}
</div></figure> 

最後までお読みいただきありがとうございました。  
書いていて思ったのが、僕はやっぱりこういう系の話が好きだということ。  
なんかもう、どこぞのオンラインサロンの通りに書かれたであろう「教員○○におすすめな○○5選いかがでしたか？」みたいな記事に飽き飽きしました。  
ちょっとでもニッチな方に刺さるような記事をこれからも書きたいと思います。