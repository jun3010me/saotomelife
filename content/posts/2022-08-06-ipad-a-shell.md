---
title: iPadでvim、sed、awk、pythonなどが使えるシェルアプリ「a-Shell」
author: 魚住 惇
type: post
date: 2022-08-06T04:40:35+00:00
excerpt: iPadのローカル環境でターミナルが使えるアプリ「a-Shell」の紹介です。
url: /ipad-a-shell-23009.html
thumbnail: /wp-content/uploads/2022/08/E330AE90-FB92-496C-A789-8DA7E959EB3E_1_102_o_ipadpro11_spacegrey_landscape.png
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 'ガジェット&amp;PC'
tags:
  - iPad活用

---
今日もiPadでHappyHackingしてますか？どうも魚住です。

大学でLinuxに触れてからCUIの虜になってしまい、コマンドを叩き続けてきました。makeしたりカーネルからコンパイルしてみたり。人並みですが、Linuxを普段使いしてきました。

社会人になってからMacBookを購入し、ターミナルが使えることに感動して今に至ります。このブログも一時期はさくらのVP Sで運用していました。

さて、そんな僕がずっと思っていたのは、「iPadでターミナルが使えいないか」ということでした。SSH接続するためのクライアントアプリはちょくちょく見かけるんですが、僕としてはiPad本体で直接シェルを使いたいと思っていました。

見つけました。ついに見つけましたよ。ローカルで動くシェルが。

今回紹介するのは、「iPad？はぁ？シェルも使えないコンピュータに意味はあるの？」と思っていらっしゃる方もきっと「ほほぉ、やるやん」と思えるアプリ。「a-Shell」です。

## a-Shell

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://apps.apple.com/jp/app/a-shell/id1473805438?uo=4&at=11l7ge"><img decoding="async" loading="lazy" src="https://is4-ssl.mzstatic.com/image/thumb/Purple112/v4/f3/70/66/f37066a2-2024-049b-6693-91c86984770d/AppIcon-1x_U007emarketing-0-7-0-85-220.png/512x512bb.jpg" alt="a-Shell" class="pochi_img" width="150" height="150" /></a>
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://apps.apple.com/jp/app/a-shell/id1473805438?uo=4&at=11l7ge">a-Shell</a>
      </div>
      <div class="pochi_price">
        無料
      </div>
      <div class="pochi_seller">
        <a href="https://apps.apple.com/jp/developer/nicolas-holzschuch/id1450994948?uo=4&at=11l7ge">Nicolas Holzschuch</a>
      </div>
      <div class="pochi_time">
        (2022.08.04時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" rel="nofollow noopener" target="_blank">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
    </div>
  </div>
</div>

このアプリは、無料で使うことができます。公式サイトはこちら。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://holzschu.github.io/a-Shell_iOS/">}}
</div></figure> 

a-Shellはオープンソースで開発されています。ソースコードが公開されているGitHubはこちらです。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://github.com/holzschu/a-shell">}}
</div></figure> <figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="760" src="/wp-content/uploads/2022/08/IMG_3317_ipadpro11_spacegrey_landscape-1024x760.png" alt="a-Shellを起動した直後の画面" class="wp-image-23021"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

起動するとこんな感じの画面が出ます。もうこれだけで、僕は「あぁ、いつもの画面だ」と思い安堵します。（病気）<figure class="wp-block-image size-full">

<img decoding="async" loading="lazy" width="843" height="503" src="/wp-content/uploads/2022/08/IMG_3328.jpeg" alt="a-Shellのソフトウェアキーボードのボタンの説明" class="wp-image-23022"  sizes="(max-width: 843px) 100vw, 843px" /> </figure> 

画面の右下にはカーソルキーのボタンが表示されていますが、左下がちょっと分かりづらい。

左からTab、Ctrl、ESC、Paste(コピペのペースト)です。特にESCはMagic Keyboardにも実装されていないキーなので重宝します。ソフトウェアキーボードのボタンが押しづらいなら、設定で装飾キーの割り当てを変更してESCを設定するか、ショートカットキー「⌘＋.(ドット)」でESCとして動かせるので、無理にこのボタンを使う必要はないと思います。

## 使用できるコマンド一覧

<div class="hcb_wrap">
  <pre class="prism undefined-numbers lang-bash" data-lang="Bash"><code>help -l</code></pre>
</div><figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="760" src="/wp-content/uploads/2022/08/E330AE90-FB92-496C-A789-8DA7E959EB3E_1_102_o_ipadpro11_spacegrey_landscape-1-1024x760.png" alt="使えるコマンド一覧" class="wp-image-23013"  sizes="(max-width: 1024px) 100vw, 1024px" /> <figcaption>helpコマンドの引数で「-l(エル)」を渡すと、現在使えるコマンドが一覧として出力されます。</figcaption></figure> 

どのコマンドが実装されているか、惹かれるコマンドは人それぞれですが、ls、cd、cat、vimなど、ターミナルでやりたいこと一通りが実装されていることに好感が持てました。sedやawk、grepもあります。ネットワーク関連のpingやifconfig、sshやsftpもあります。tarも入っているので圧縮ファイルの解凍もやれます。

また、pythonやpipも実装されているので、iPad1台でpythonが使えることも良さげです。あと、ffmpegも入っているので、動画や音声のエンコードもできそうです。

## Pythonを動かす

早速、Pythonで書かれたプログラムを動かしてみます。vimを使って、10進数から2進数に変換するコードを書いてみました。10to2.pyとして保存しました。

<div class="hcb_wrap">
  <pre class="prism undefined-numbers lang-python" data-file="10to2.py" data-lang="Python"><code>jushin = int(input())
keta = int(1)
nishin = int(0)
while jushin &gt; 0:
        nishin = nishin + jushin % 2 * keta
        jushin = int(jushin / 2)
        keta = keta * 10
print(nishin)</code></pre>
</div>

<div class="hcb_wrap">
  <pre class="prism undefined-numbers lang-bash" data-lang="Bash"><code>python 10to2.py</code></pre>
</div><figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="760" src="/wp-content/uploads/2022/08/IMG_3338_ipadpro11_spacegrey_landscape-1024x760.png" alt="a-ShellでPythonを実行した画面" class="wp-image-23025"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

無事動いたようです。

## C言語のファイルをコンパイルする

C言語も動かしてみます。C言語は一度コンパイルしてから実行する必要があります。ここでは2進数を入力したら10進数に変換し、出力するコードを書いてみました。

<div class="hcb_wrap">
  <pre class="prism undefined-numbers lang-c" data-file="2to10.c" data-lang="C"><code>#include &lt;stdio.h&gt;
int main(void)
{
    int nishin;
    int jushin;
    int keta;
    scanf("%d",&nishin);

    jushin=0;
    keta=1;

    while(nishin&gt;0){
        jushin = jushin + nishin % 10 * keta;
        nishin = nishin / 10;
        keta = keta * 2;
    }

    printf("%d\n",jushin);
}</code></pre>
</div>

作成した.cファイルをclangコマンドを使ってコンパイルします。

<div class="hcb_wrap">
  <pre class="prism undefined-numbers lang-bash" data-lang="Bash"><code>clang 2to10.c</code></pre>
</div>

するとa.outが出力されるので、実行してみます。

<div class="hcb_wrap">
  <pre class="prism undefined-numbers lang-bash" data-lang="Bash"><code>./a.out</code></pre>
</div><figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="760" src="/wp-content/uploads/2022/08/IMG_3340_ipadpro11_spacegrey_landscape-1024x760.png" alt="a-ShellでC言語のファイルを実行した画面" class="wp-image-23027"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

10101000と2進数を入力したら、10進数に変換されて168と出力されました。うまく動いたようです。

## iCloud Driveや「このiPad内」にアクセスする<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="760" src="/wp-content/uploads/2022/08/DF1A7475-54F3-4BC2-A6DC-4D0762AF5962_1_102_o_ipadpro11_spacegrey_landscape-1024x760.png" alt="a-Shellで権限の確認をした" class="wp-image-23016"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

a-Shellを起動した時に最初にいるディレクトリは、a-Shellアプリ内のDocumentsです。今でこそiCloudにファイルを保存するアプリが増えてきていますが、iPhoneやiPadのアプリは昔からアプリ内にあるDocumentsディレクトリにデータを保存する傾向がありました。アプリを削除すると、一緒に扱っていたデータが消えるわけです。

試しに「cd ..」で上位階層に上がると、Libraryなどのディレクトリが出てきましたが、そこよりももう1段階上にあがろうとすると、権限がないため移動できませんでした。

また、「cd /」でルートに移動した後、「ls」でディレクトリ群は見えるものの、etcやApplicationには入ることすらできませんでした。このまま使うとなると、a-Shell内のDocumentsディレクトリ内だけで遊んでくれって言っているようなもんです。

ではa-Shellで作成したファイルを外部に保存したい場合や、a-Shell外で作ったpythonやMarkdownなどのファイルを処理したい場合はどうするのかというと、別の方法が用意されていました。<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="760" src="/wp-content/uploads/2022/08/25DB9C05-CAF4-43DD-8887-5D50B92DCFDF_1_102_o_ipadpro11_spacegrey_landscape-1024x760.png" alt="" class="wp-image-23017"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

<div class="hcb_wrap">
  <pre class="prism undefined-numbers lang-bash" data-lang="Bash"><code>pickFolder</code></pre>
</div>

pickFolderというコマンドが用意されていました。大文字が含まれているコマンド名ですが、picあたりまで入力するとTab補完できるのでさほど気になりません。<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="760" src="/wp-content/uploads/2022/08/588CBD33-5896-4C5D-ADEF-64570BE7E940_1_102_o_ipadpro11_spacegrey_landscape-1024x760.png" alt="" class="wp-image-23018"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

picFolderコマンドを実行すると、移動先の場所を聞いてきます。ここでiCloud Driveや「このiPad内」の任意の場所を選ぶと、a-Shell内のDocumentsディレクトリから移動できます。

<div class="hcb_wrap">
  <pre class="prism undefined-numbers lang-bash" data-lang="Bash"><code>bookmark ブックマーク名</code></pre>
</div><figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="760" src="/wp-content/uploads/2022/08/C8454167-B518-4E9E-85AB-D360EFF1FBDF_1_102_o_ipadpro11_spacegrey_landscape-1024x760.png" alt="" class="wp-image-23019"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

移動した後に、bookmarkコマンドを実行することで、今いる場所をブックマークできます。

<div class="hcb_wrap">
  <pre class="prism undefined-numbers lang-bash" data-lang="Bash"><code>cd ~ブックマーク名</code></pre>
</div><figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="760" src="/wp-content/uploads/2022/08/C3A8BB4E-9661-4AF6-A20D-7B0E5D3FD43C_1_102_o_ipadpro11_spacegrey_landscape-1024x760.png" alt="" class="wp-image-23020"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

bookmarkコマンドでブックマーク名を指定すると、ブックマークしたディレクトリにジャンプできます。何度も利用する移動先をブックマークすることで、pickFolderコマンドを使用せずに移動できるようになります。

## iPadでシェルを使いたいならa-Shellで決まり

使っていて、「これだよ。これこれ。」という感情が溢れてきて、久々にハクハクした気分になりました。sshも使えるので、これで不満があれば、ラズパイなどに接続すれば済むだけの話です。あとネットワークトラブルの際にはpingやifconfigをよく使うので重宝します。

ただここまでちゃんと使おうとすると、Magic KeyboardにESCキーが欲しくなりますね。いやそこはHHKBの出番か。

iPadってどうせタブレットだから、用途は限定的なんでしょ？と思っているそこのあなた。a-Shellを使ってみてください。Apple Pencilて手書きも良いですが、キーボードでシェルを使うという用途にも、まぁまぁ使えるって思うようになりますよ。

これまでターミナル系のアプリは山ほど見てきましたが、ここまでの自由度と完成度のアプリはありませんでした。これだけのことがローカルでできる。まじでおすすめです。

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://apps.apple.com/jp/app/a-shell/id1473805438?uo=4&at=11l7ge"><img decoding="async" loading="lazy" src="https://is4-ssl.mzstatic.com/image/thumb/Purple112/v4/f3/70/66/f37066a2-2024-049b-6693-91c86984770d/AppIcon-1x_U007emarketing-0-7-0-85-220.png/512x512bb.jpg" alt="a-Shell" class="pochi_img" width="150" height="150" /></a>
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://apps.apple.com/jp/app/a-shell/id1473805438?uo=4&at=11l7ge">a-Shell</a>
      </div>
      <div class="pochi_price">
        無料
      </div>
      <div class="pochi_seller">
        <a href="https://apps.apple.com/jp/developer/nicolas-holzschuch/id1450994948?uo=4&at=11l7ge">Nicolas Holzschuch</a>
      </div>
      <div class="pochi_time">
        (2022.08.04時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" rel="nofollow noopener" target="_blank">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
    </div>
  </div>
</div>