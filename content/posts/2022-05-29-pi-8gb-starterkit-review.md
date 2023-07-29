---
title: 「Raspberry Pi4 B 8GB スターターキット」の開封から初回起動までのレビュー
author: 魚住 惇
type: post
date: 2022-05-29T12:55:21+00:00
excerpt: 「Raspberry Pi4 B 8GB スターターキット」の開封から初回起動までをレビューしました。
url: /pi-8gb-starterkit-review-22811.html
thumbnail: /wp-content/uploads/2022/05/IMG_0538.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 'ガジェット&amp;PC'

---
 

こんにちは、魚住惇です。

この記事を書く少し前から、こういうツイートを定期的にTwitterでは呟いていました。<figure class="wp-block-embed is-type-rich is-provider-twitter wp-block-embed-twitter">

<div class="wp-block-embed__wrapper">
  <blockquote class="twitter-tweet" data-width="500" data-dnt="true">
    <p lang="ja" dir="ltr">
      この、定期的にラズパイが欲しくなる衝動をどうにかしたい
    </p>&mdash; 魚住惇⌨️『教師のiPad仕事術』 (@jun3010me) 
    <a href="https://twitter.com/jun3010me/status/1516384792610508804?ref_src=twsrc%5Etfw">April 19, 2022</a>
  </blockquote>
</div></figure> 

そうしたら、RSコンポーネンツというサイトの方よりTwitterでDMをいただき、「Raspberry Pi4 B 8GBスターターキット」をレビュー用に送っていただけることになりました。

最後の文章にも書きましたが、このラズパイは、部活動のプログラミングの活動など、高校生のための活動に使わせていただきます。

今回は、頂いたラズパイのスターターキットの開封から初回起動までの流れを紹介したいと思います。

## Raspberry Pi4 B 8GBスターターキットの中身
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0473.jpeg" alt="" >}} </figure> 

まずはキットの中身の確認から。これがスターターキットの箱です。ラズパイ本体の大きさのことを考えると結構大きいです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0477.jpeg" alt="" >}} </figure> 

蓋を開けると、左側にアルミケース、右側にRaspberry Pi4の箱が入っています。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0479.jpeg" alt="" >}} </figure> 

手に取ってみると、ラズパイって本当に小さいです。名刺よりひと回り大きいくらいです。これがコンピュータの大きさかって思います。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0480.jpeg" alt="" >}} </figure> 

中敷きを開けると、ACアダプタやケーブルなどが出てきました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0538.jpeg" alt="" >}} </figure> 

全てを箱から出すとこんな感じです。

<ul class="is-style-vk-numbered-square-mark">
  <li>
    Raspberry Pi4 B 8GB
  </li>
  <li>
    アルミケース
  </li>
  <li>
    ヒートシンク3個
  </li>
  <li>
    MicroSDカード 32GB
  </li>
  <li>
    ACアダプタ(USB-C)
  </li>
  <li>
    MicroHDMI to HDMIケーブル 2本
  </li>
  <li>
    SDカードリーダ
  </li>
</ul>

環境が整っているなら普通に本体だけを買うのもありかなと思います。

しかし、初めてラズパイを触るとなると、電源やらケーブルやらを自分で調達しなければなりませんし、重たい処理をさせた時に本体が高温となって性能が落ちるのを防ぐためにはヒートシンクやファンが必要です。

価格はRSコンポーネンツで18000円ほどです。近頃の円安事情を考えると、まぁ割とアリな価格設定だと思います。

## アルミケースに本体を固定してみる
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0539.jpeg" alt="" >}} </figure> 

では起動する前に、ヒートシンクを取り付けてアルミケースに内蔵させます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0540.jpeg" alt="" >}} </figure> 

ヒートシンクは3種類付属していたので、それぞれの大きさに合わせたチップの上に貼り付けました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0541.jpeg" alt="" >}} </figure> 

こちらがスターターキット付属のアルミケースです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0542.jpeg" alt="" >}} </figure> 

ケースに本体を固定する前に、ファンの取り付けから。GPIOという端子群の、4番(5V+)が赤いケーブル、6番(GROUND-)に黒いケーブルを刺します。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0544.jpeg" alt="" >}} </figure> 

本体をケースの下側にセットして、ファンがステッカーが貼ってある側に向かって風が流れるので、この向きにねじ止めします。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0543.jpeg" alt="" >}} </figure> 

付属のネジは長さが2種類あって、ファンの固定には長い方を使います。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0545.jpeg" alt="" >}} </figure> 

ちなみに短い方のネジもよく見ると2種類あって、頭が平らなネジは、アルミケースの上下の固定に使います。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0546.jpeg" alt="" >}} </figure> 

固定する部分はここ。USB-C端子の隣です。

これでラズパイ本体にファンを取り付けて、アルミケースに収納できました。

## MicroSDを挿して起動してみる
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0548.jpeg" alt="" >}} </figure> 

本体の裏側、アルミケースでいうとちょうど穴が空いている部分が、MicroSDカードスロットです。

ここに、付属の32GBのMicroSDカードを挿入します。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_2711.jpeg" alt="" >}} </figure> 

ACアダプタを挿すと、本体のLEDが点灯して起動しました。起動まであっという間です。

MicroSDカードには既にインストール専用のOSが書き込まれており、Debian系のラズパイOSがインストールできるようになっています。

32ビットっていう表示がちょっと気になりますが、今回はこのまま、用意されていたOSをインストールしてみることにしました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_2712.jpeg" alt="" >}} </figure> 

あとは待つだけです。完了したら、Linuxのデスクトップが表示されて、そのまま使える画面が表示されました。

## GIGAスクール構想の時代だからこそ、Linux演習が必要

この魚住、大学時代にはLinuxにハマり、Vine、SUSE、Fedora、Ubuntu、Debian、CentOS、FreeNASなどのディストリビューションを触ってきました。特に大学時在学中にUbuntuのバージョンが6の頃で、PC雑誌などで大々的に話題にされていたので、ノートパソコンのメインOSとしても愛用していました。

その時の経験が高校教師となった今になって、実業務に役立っているかどうかはわかりませんが、今もこうして趣味でブログを書くようになったのも、大学生の頃に自宅で運用していたサーバにWordPressをインストールしたことがきっかけでした。

PVがどうのとかテーマがどうのとか、SEOがどうのとかアフィリエイトがどうのとかじゃありません。LAMPで動くブログシステムがある。へぇ、WordPressっていうのか！っていう発見からでした。当時のWordPressのバージョンは2.5でした。

一度Linuxを触ってしまうと不思議なもので、常にコマンドが叩ける環境が欲しいと思うんですよ。半分病気みたいなものです。2012年ごろまでは、このブログも自宅のNEC激安鯖上のVMwareで動いていたCentOSで稼働していました。

それからメインPCがMacBookAirになり、「MacってUnixやんけ」と感動し、ブログを自宅サーバからレンタルサーバーに移行し生活しています。

今ではモバイルマシンはiPad Proで、自宅にMac miniという生活。iPadは便利だけど、ターミナルで直接コマンドを叩ける環境ではありません。

でも、どこかでコマンドを入力する必要が出てきたり、ネットワーク系のトラブルを解決するためにIPアドレスなどの設定を確認する際って、コマンドラインで操作することがちょくちょくあります。そういう時に、学生時代にLInuxを触っておいて良かったなって思うのです。

**できたらこの感覚を、僕が主顧問をしている部活の生徒にも味わってほしい**と考えるようにもなりました。<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">Windowsだけを使っていると、その世界しか見えません。</span>macもLinuxもWindowsも使うと、数多くあるOSのうちの一つに過ぎないんだなっていう感覚を得られます。

それに今の時代、iPadを使っていると、一見何不自由ない生活を送っているように見えます。見えますよね。僕はちょっと、日常的に触れるLinuxマシンが無いと不満なんですよ。

そこかよ！って思う方、一般人です。僕は多分一般人ではありませんから、いつでもどこでもコマンドが叩ける環境が欲しいなって思ってしまうんです。

この感覚を、教え子たちにも体験して欲しいなと思っていた想いが、現実のものとなった気がしています。

<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">今回頂いた「Raspberry Pi4 B 8GBスターターキット」は、部活でのプログラミングなどの活動に使わせていただく予定です</span>。ありがとうございました。

RSコンポーネンツでは[ダイオード][1]やユニバーサル基盤などの電子部品を多く取り扱っているそうです。

自作キーボードに使われている1N4148や1N4148Wも販売しています。ただし、価格は遊舎工房さんと比べるとだいぶ強気の設定のようですが。これは遊舎工房さんが頑張っているからかなぁ。

とはいえ、Raspberry Piの関連商品はお安く購入できるので、ラズパイ本体を購入される際などにも利用してみてはいかがでしょうか。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://jp.rs-online.com/web/p/raspberry-pi/2108315">}}
</div></figure>

 [1]: https://jp.rs-online.com/web/c/semiconductors/discrete-semiconductors/schottky-diodes-rectifiers/