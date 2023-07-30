---
title: HHKB Professional2をQMKに対応させるAlternative Controllerを買った
author: 魚住 惇
type: post
date: 2022-05-17T10:55:36+00:00
excerpt: HHKB Professional2の制御基板をAlternative Controller for HHKBに交換しました。
url: /blog-hhkb-altcontroller-qmk-22763.html
thumbnail: /wp-content/uploads/2022/05/IMG_0285.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 'ガジェット&amp;PC'
tags:
  - HHKB

---
**持続可能なHHKBとは何か**。ずっと考えてきました。

僕が静電容量無接点のHHKB Professional2を購入したのは2008年の2月です。PCに接続すると、今でも現役で使えます。

しかし、BTが出てHYBRIDが出て、雪が出て。いつしか自宅にある<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">Pro2は引き出しの中へ入れた生活</span>を送っていました。

Pro2を使わなくなった理由は、新型HHKBが出たっていうのも要因の一つですが、タイピングしていると音がうるさかったり、USB端子がminiBだったりと、どうしても取り回しの面でもストレスを感じていました。

このストレスはもちろん、Pro2を購入していた当時は抱いていなかったものです。<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">月日が流れて時代が変わり、それでもHHKBを長く愛用していたからこそ感じていた</span>ものでした。

そこで最近は、そんな**Professional2をどうにかして現行機と比較しても使いやすいものにしよう**と、色々と策を講じてきました。

最初にやったのが、静音リングによる静音化です。僕がHHKB Professional2を購入した頃はType-Sはありませんでした。そこで、「DES Topre Silencing Rings」を装着して、静音化にチャレンジしました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="1bU6LQwO9o">
    <a href="http://jun3010.me/hhkb-ring-22525.html">HHKBに「DES Topre Silencing Rings」を装着したら、打鍵音がめちゃくちゃ軽減された</a>
  </blockquote>
</div></figure> 

続いて、ラーバードームの劣化を感じ、キーの押下圧が45gよりも重たく感じたので、ラバードーム1つに4ヶ所ずつ穴を開ける作業を全てのキーの数分やりました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="hOTyXf0rwo">
    <a href="http://jun3010.me/blog-hhkb-dome-ana-22549.html">HHKBのラバードームに穴を開けて押下圧を軽くした</a>
  </blockquote>
</div></figure> 

ここまでやっておいて、まだまだ不満な点がありました。

<ul class="is-style-vk-numbered-square-mark">
  <li>
    USB端子がminiB
  </li>
  <li>
    キーリマップができない
  </li>
</ul>

元々はProfessional2が登場した時は、この2つについては悩みですらありませんでした。HYBRIDが登場して、有線モデルとしてClassicが登場したことで、Professional2の価値が相対的に見て下がったということです。

恐らくPFU社としては、Classicを買って欲しいという思いもあるとは思いますが、Professional2はまだまだ使えます。寿命を迎えたわけではありません。そして僕としてはProfessional2を、これからも長く使いたいと考えています。

静音リングで静音化し、ラバードームにも穴を開けたHHKBに、更にやってやれること。

それは、<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">基板交換</span>でした。

## Alternative Controller for HHKB
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0274.jpeg" alt="" >}} </figure> 

今回入手した基板は、**Alternative Controller for HHKB**と呼ばれている基板です。

2022年5月現在では、「HHKB Alt Controller with Mini-B/Type-C connector」とも表現されています。購入する方法だったり、仕様などの詳細は、すべてgeekhack.orgのスレッドにまとめられています。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://geekhack.org/index.php?topic=71517.0">}}
</div></figure> 

この基板は、HHKB Pro1、Pro2、ProJPをTMKというプログラマブルなファームウェアに対応させるための基板で、ハンドルネーム「hasu」さんによって開発＆販売されているものです。

この基板を導入することでTMK対応のHHKBにすることができて、USB端子をType-Cにしたり、Bluetooth接続が可能になります。

販売されている基板を表にまとめるとこんな感じ。<figure class="wp-block-table">

<table>
  <tr>
    <td>
      名称
    </td>
    <td>
      価格
    </td>
  </tr>
  <tr>
    <td>
      Mini-B USB Controller for Pro1
    </td>
    <td>
      42USD
    </td>
  </tr>
  <tr>
    <td>
      Mini-B USB Controller for Pro2
    </td>
    <td>
      44USD
    </td>
  </tr>
  <tr>
    <td>
      Mini-B USB Controller for ProJP
    </td>
    <td>
      46USD
    </td>
  </tr>
  <tr>
    <td>
      Mini-B Bluetooth Controller for Pro2
    </td>
    <td>
      77USD
    </td>
  </tr>
  <tr>
    <td>
      Mini-B Bluetooth Controller for ProJP
    </td>
    <td>
      79USD
    </td>
  </tr>
  <tr>
    <td>
      Type-C USB Controller for Pro2
    </td>
    <td>
      46USD
    </td>
  </tr>
  <tr>
    <td>
      Type-C USB Controller for ProJP
    </td>
    <td>
      48USD
    </td>
  </tr>
  <tr>
    <td>
      Type-C Bluetooth Controller for Pro2
    </td>
    <td>
      79USD
    </td>
  </tr>
  <tr>
    <td>
      Type-C Bluetooth Controller for ProJP
    </td>
    <td>
      81USD
    </td>
  </tr>
</table></figure> 

名称の前部分にUSB端子の名前があり、その後にBluetooth対応の有無が書かれています。Bluetooth対応の基板であっても、USB接続ができるようになっています。

USB端子をminiBのままTMKに対応させたり、Type-Cで尚且つBluetooth接続にも対応させることが可能です。機能によって基板の価格が変わります。

僕はBluetooth接続機はHYBRID Type-Sがありますし、Bluetooth接続を行うとなるとリチウムイオンバッテリーも必要になって面倒だと判断したため、この中からType-Cに対応した「**Type-C USB Controller for Pro2**」を買うことにしました。

### 基板の購入方法

詳しくはhasuさんの書き込みを見ていただくのが早いんですが、「**hasu@tmk-kbd.com**」宛に、購入の意思と希望する基板の種類を伝えます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/ADC967EA-B121-486E-A474-36937CF86BF9.jpeg" alt="" >}} </figure> 

<blockquote class="wp-block-quote">
  <p>
    Hi hasu.
  </p>
  <p>
    I would like to revive my HHKB Pro2 with USB-C.<br />I want to buy &#8220;Type-C USB Controller for Pro2&#8221; from you.<br />I also understand that you pay money through PayPal.
  </p>
  <p>
    Thanks.
  </p>
  <p>
    以下署名<br />Jun Uozumi
  </p>
</blockquote>

僕は英語力中学3年レベルなので、こんな感じの内容で送りました。とにかく買いたいんだっていう意思と、モデルを伝えます。

で、購入や発送などにはPayPalを使うので、PayPalアカウントに登録しているメールアドレスから送ると話が早く済みます。今回それを見越してPayPalアカウントに設定しているアカウントからhasuさんにメールを送るだけで、支払いの手続きを楽に済ませることができました。

通販サイトやフリマアプリを通して購入するわけじゃないので、補償などもありません。PayPalでの支払いを済ませると、あとは待つのみです。

僕が購入したのがたまたま2022年の4月下旬。GWを間に挟むことになってしまったので、届いたのはGW後の5月9日でした。できれば郵便局がお休みにならないような日程に購入すると、もっと早く届くんじゃないかと思います。

### 届いた基板を眺めてみる
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0274-1.jpeg" alt="" >}} </figure> 

それでは改めて、このAlternative Controllerと呼ばれる基板を見ていきます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0275.jpeg" alt="" >}} </figure> 

これが裏面。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0276.jpeg" alt="" >}} </figure> 

ファームウェアの名前であるTMKと書かれています。手書きのような書体です。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0277.jpeg" alt="" >}} </figure> 

表面の端子部分です。USB-Cです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0278.jpeg" alt="" >}} </figure> 

これが制御マイコンです。atmega32u4ですね。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0279.jpeg" alt="" >}} </figure> 

今回購入した基板のこの辺りが、部品がごそっと抜けていますが、Bluetooth非対応を選んだからです。写真のこの部分にRN42というBluetooth用のチップが対応モデルだと積まれているのでしょう。

### HHKB Professional2の基板と交換する
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0281.jpeg" alt="" >}} </figure> 

これが2008年に購入して今でも現役で使えるHHKB Professional2 英語配列無刻印白です。[あのウェディングケーキ][1]のモデルにしたHHKBです。

ボディは黄ばんでしまっていますし、キートップも別のものに交換してあります。

※自作キーボード界隈ではキーの部品のことをキーキャップと読んでいますが、HHKBではキートップと呼びます

今から分解して、基板を交換していきます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0283.jpeg" alt="" >}} </figure> 

基板の交換というのは至って簡単です。裏のネジを3本ゆるめて蓋を開けるだけ。裏側に制御基板が見えます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0284.jpeg" alt="" >}} </figure> 

このケーブルを基板から抜いて、取り外します。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0285.jpeg" alt="" >}} </figure> 

その後で、Alternative Controllerの基板をその場所にネジで固定して、
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0286.jpeg" alt="" >}} </figure> 

先ほど取り外したケーブルを再び取り付けるだけです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0282.jpeg" alt="" >}} </figure> 

ねじ止めして完成です。ラバードーム1つ1つに穴を開ける作業と比べると、あっという間に終わりました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0287-1.jpeg" alt="" >}} </figure> 

USB端子の部分が、miniBからType-Cに変わりました。ちょうどminiBの上半分にType-Cの端子がすっぽりハマっているのは、ちょっと良い感じです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0289.jpeg" alt="" >}} </figure> 

DIPスイッチの部分は、制御マイコンのリセットスイッチ部分を覆い隠すために使われています。

### QMK Firmwareを書き込む
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/633cf4e36f46f6a76fc467878fa17311.png" alt="" >}} </figure> 

このAlternative Controllerには予めTMK Firmwareが書き込まれています。そもそもこのTMKというのは、マイコンを使ってキーボードを制御するQMKの源流で、hasuさん自身が作られたものです。

ちなみに、そのTMKがJack HumberdさんによってQMKに派生して、今日に至ります。キーボードをよりプログラマブルにカスタマイズするための基板を、Firmware開発者自身が販売しているっていうのも驚きです。しかも日本人。

この話についてはぺかそさんがITmediaに書かれた記事が参考になると思います。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://www.itmedia.co.jp/news/articles/2011/24/news029.html">}}
</div></figure> 

TMKのままキー配列などをカスタマイズしていくには、hasuのサイトよりKeymap Editorにアクセスし、カスタマイズを行い、出来上がったファームウェアを書き込む必要があります。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "http://www.tmk-kbd.com/tmk_keyboard/">}}
</div></figure> 

でも僕としては、2022年現在の自作キーボードで主流なQMK Firmwareを入れて、REMAPでカスタマイズする方が便利だなって思ったので、QMK Firmwareをインストールしてみることにしました。

Alternative Controller for HHKB用のVIA対応ファームウェアは、こちらよりダウンロードできます。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://www.caniusevia.com/docs/download_firmware">}}
</div></figure> 

今回基板を取り付けたのはUS配列なので、「**hhkb\_ansi\_via.hex**」をダウンロードしました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/acf26354eeab5272ac5a45cdea182955.png" alt="" >}} </figure> 

Firmwareの書き込みに使ったのはmac版のQMK Toolboxです。キーボードをmacに接続し、DIPスイッチ跡のリセットスイッチを押すと、DFUモードとして認識してくれました。

先ほどダウンロードしたファイルを読み込んで、Flashボタンを押すと、書き込みが実行されました。

### REMAPで配列をカスタマイズする
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/1bbfafb2fb53d8642d3f19c0c7ef0166.png" alt="" >}} </figure> 

これでVIA対応のファームウェアが書き込むことができたので、VIAのアプリからでも認識することができます。VIAに慣れている人は、ここからカスタマイズしていくと良いかなと思います。

でも僕の最終目標は、REMAPを使ってHHKBを手軽にカスタマイズすることです。

現状、VIA対応QMK Firmwareが書き込まれているので、REMAPにChromeからアクセスすると「HHKB mod」として認識しますが、

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2022/05/89349624-622C-46FF-9264-847A433D42FC.png" alt="" >}}</figure>
</div>

REMAPそのものにHHKBが登録されていませんので、JSONファイルをimportしてって言われます。

この時に必要なHHKB用のjsonファイルは、こちらよりダウンロードできます。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://github.com/the-via/keyboards/blob/master/src/hhkb/ansi/ansi.json">}}
</div></figure> 
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/0c38a467f4dafa8c0c2e29dbc513a479.png" alt="" >}} </figure> 

ご覧ください。**REMAPでHHKBが認識しております**。もう、ね、感動して泣きそう。

とりあえず、HHKBとkarabinerを使ってよく設定されている、⌘キー単押しで言語切り替え、複数押しで⌘キーとして動作するように、タップとホールドを使って設定しました。後のことはまだ考えていません。

でもこれで、長年使い続けてきたHHKBを、自作キーボードでやっているのと同じようにカスタマイズができるようになりました。マクロだってマウス操作だって、登録できるわけです。

## これからもよろしくな、相棒

2008年に購入したHHKB Professional2英語配列無刻印白、ずっと愛用してきました。

時が経つにつれて新型のHHKBが登場しながらも、静電容量無接点方式が寿命を迎えず、まだまだ使えるまま古くなっていきました。

その<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">長寿命であるが故に、端子が古くなってしまい、操作音も気になってしまい、次第に使わなくなってしまいました。まだまだ使えるのに</span>。BIOS起動用などと言いながら、窓際族みたいな扱いをしてしまいました。

しかしどうでしょうか。hasuさんのAlternative Controller for HHKBという基板によってUSB-C端子のケーブルが使えるようになり、TMKから派生したQMKのファームウェアに書き換えることでREMAPからもカスタマイズできるようになりました。

2019年に発売されたHYBRIDモデルとは別の進化を遂げた、オープンソースなHHKBが完成しました。

穴をあけたラバードームがあと何年このまま使えるかという不安が少しありますが、自分なりに延命させて、QMKも導入できたので、かなり愛着のあるHHKBに仕上がりました。

最近は、HYBRIDでもなく雪でもなく、HHKB Pro2を持ち歩いて使っています。

なんだろう、名車が蘇った感覚に近いものがあります。自分の手で分解して、悪いところを直して、これからも使えるようにすると、どのHHKBよりも持ち運んで使いたくなる気分にさせてくれます。

**みなさんのお家に、古くなって使わなくなってしまったHHKBはございませんか？**メルカリに出すなんて勿体ない。Alternative Controllerに基板を交換したら、まだまだ使えます。というか自作キーボードに負けない、静電容量無接点方式のQMKFirmwareキーボードになります。今の時代に生きるGeekが喜ぶキーボードになりましたよ。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://geekhack.org/index.php?topic=71517.0">}}
</div></figure>

 [1]: https://nlab.itmedia.co.jp/nl/articles/1803/29/news109.html