---
title: 分割型HHKB配列の自作キーボード 7sPro ビルドログ
author: 魚住 惇
type: post
date: 2021-06-13T11:16:47+00:00
excerpt: 自作キーボード 7sProのビルドログです。
url: /7spro-buildlog-21373.html
thumbnail: /wp-content/uploads/2021/06/0BA8EFA0-32C6-4818-8EBF-BFE0CDD8EE8B_1_105_c.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 商品レビュー

---
 

Zincを購入して1ヶ月経ちました。  
newsletterにも書きましたが、Zincはロウスタッガードでありながら、中段と下段のズレ幅が0.5Uではなく0.25Uでした。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://kodawari.substack.com/p/4-">}}
</div></figure> 

  
つまり、上段と中段のズレ幅と同じだったのです。一般的なロウスタッガードは、中段と下段のズレ幅は0.5Uです。HHKBも例外ではありません。  
これが原因となって、僕の場合は特にZやXといった左側の下段の入力をミスすることが増えました。

そんなこんなで、**もうこの悩みを解決するには、7sProを購入するしかない！**と思ったわけです。

というわけで今回は、HHKB配列を分割した形の自作キーボード「7sPro」のビルドログを残すことにしました。

## 参考にしたサイト

今回の組み立てで参考になったのが、7sPro作者のサリチル酸さんが書かれたビルドガイドです。<figure class="wp-block-embed is-type-wp-embed is-provider-hatena-blog wp-block-embed-hatena-blog">

<div class="wp-block-embed__wrapper">
</div></figure> 

もう、これに従えば良い感じ。ただ、今回はBluetooth化をしなかったので、不要な部分を大分飛ばして読みました。

それともう一つ、ビルドガイドでは最後にプレートをねじ止めする場面が書かれていますが、フルアクリルバージョンの方が参考になる場合があったので、そちらも同時に確認しながら進めました。<figure class="wp-block-embed is-type-wp-embed is-provider-hatena-blog wp-block-embed-hatena-blog">

<div class="wp-block-embed__wrapper">
</div></figure> 

## 7sProはソケットとダイオードがはんだ付け済み

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/DSC08946-4.jpeg" alt="" >}}</figure>
</div>

これ、本当に驚きました。多くの自作キーボードのキットは、キースイッチの数分、ダイオードをはんだ付けが必要です。キースイッチ自体の半田付けや、キーソケットのはんだ付けも必要です。  
ですがこの7**sProは、最初からキーソケットもダイオードもはんだ付けがされていた**のです。  
んー、素晴らしい。自作キーボードで一番だるい部分が既にやってあるとは。

## ProMicroの補強

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/IMG_1542-4-1.jpeg" alt="" >}}</figure>
</div>

最早定番作業となりました。自作キーボードを作るときのProMicroのMicroUSB端子を補強する作業です。  
ダイソーで買ったエポキシ接着剤を使いました。かなりの数のProMicroの端子を補強できます。

## プレートのバリ取り

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/IMG_1544-4.jpeg" alt="" >}}</figure>
</div>

7sProの凄いところは、プレートの数です。基板と同じ素材のプレートがこれでもかというくらい付属しています。  
それらをニッパで切断していくんですが、当然切り取った部分にバリが残ります。バリとはプラモデルでもよくある、ランナーからパーツを切り取った際に残った突起部分のことです。  
これらを全てヤスリで削りました。

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/IMG_1547-4.jpeg" alt="" >}}</figure>
</div>

中にはニッパで切り取った部分じゃなくて、きっと工場で切り取ったんだろうなっていう跡が残っている箇所があります。今回はその部分も平にしたかったので削りました。

## サインペンでプレートの縁を塗る

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/IMG_1546-4.jpeg" alt="" >}}</figure>
</div>

本家ビルドガイドにも書いてあったんですが、基板もプレートも、横から見ると、断面の色が黒ではありません。  
このまま組んでしまっては美しくありません。なので、サインペンで全てのプレートの断面を黒く塗りました。  
今回の作業の中で、このバリ取りとサインペンの作業が一番時間がかかったかもしれません。

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/38013B50-6038-4645-8F5D-7F077551B017_1_105_c-1.jpeg" alt="" >}}</figure>
</div>

ね、かなり印象が変わったでしょ。

## LEDのはんだ付け

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/51DB5AB4-7717-4CE3-A8B1-4CA7D2F5868A_1_105_c.jpeg" alt="" >}}</figure>
</div>

Zincのようにキーの数LEDがあるわけではありませんが、レイヤーを示すためのLEDと、LEDテープをはんだ付けする箇所があるので取り付けました。

上の写真が、レイヤーを示すためのLEDをはんだ付けする場所です。Gndの端子が欠けているので、それに向きを合わせてました。

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/003C8A5F-90B9-4C58-9F3B-555B01BAF9BE_1_105_c.jpeg" alt="" >}}</figure>
</div>

実際はんだ付けするとこんな感じ。僕はもうLEDのはんだ付け自体は慣れました。

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/F9AA8392-199A-42FF-AFE7-B85A832F2C47_1_105_c.jpeg" alt="" >}}</figure>
</div>

LEDテープの場所も基板にわかりやすく書いてありました。はんだ付けする箇所は3箇所です。

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/B6DDBB66-DA0E-44A7-B92E-FC99D2DE6122_1_105_c-1.jpeg" alt="" >}}</figure>
</div>

ProMicroに7sProのファームウェアを書き込んで、LEDテープが点灯するのを確認しました。LEDなんてイラネ！って思っていた時期が僕にもあったんですが、自分ではんだ付けしたLEDが光るって、他では言い換えられないほどの感動があります。

## ProMicroのコンスルーの向き

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/DBD323C2-3D3A-482D-9B6B-AFADA22C183A_1_105_c.jpeg" alt="" >}}</figure>
</div>

自作キーボードのはんだ付けで起こる一番の悲劇。それがProMicroの向きだと僕は思っています。

設計思想の違いだと思うんですが、キーボードによって、ProMicroにはんだ付けするコンスルーの向きが違うのです。  
上の画像にもまとめましたが、僕が所持している自作キーボードはmeishi2、Choco60、Zinc、そして7sProで4台です。  
実は2019年にChoco60を組み立てた時、ProMicroにコンスルーをはんだ付けする際、向きをミスったことがありました。その時は遊舎工房さんの組み立てスペースで作業していたので、<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">スタッフさんに「あ〜、やっちゃいましたねー。これはもう、ProMicroだけ買い直す方が早いですよ。」と言われ、泣く泣くProMicroコンスルーセットをもう1セット買ったのです。</span>

ですが画像を見てください。Choco60のための向きとしては間違っていても、そのProMicroの向きが、7sProでは正しい向きだったのです。  
この向きを確かめた時、**「まさか・・・、2年前に向きを間違えてはんだ付けした、アレが使えるんじゃないか！」**と、えらく感動しまいた。  
**<span data-color="#f78da7" style="background: linear-gradient(transparent 60%,rgba(247, 141, 167, 0.7) 0);" class="vk_highlighter">あの時間違ってはんだ付けしたProMicroよ。お前たちは今日7sProのファームウェアを書き込まれるために、この瞬間のために今まで眠っていたのだな。待たせたな。</span>**

## TRRSジャックとリセットスイッチのはんだ付け

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/13F1F5D0-A701-4F9E-B3A5-745D60A85E1F_1_105_c-1.jpeg" alt="" >}}</figure>
</div>

7sProのはんだ付けは、本当に少なくて済みました。ProMicroとTRRSジャックとリセットスイッチだけです。  
これ、本当に自作キーボードか？って感じるほど少ないです。

しかもこのTRRSジャックとリセットスイッチは、**基板にはめるとカチッっとした感触があり、裏向けても落ちません。**マスキングテープも不要とか、優秀すぎるだろ・・・。

## プレート、キースイッチを取り付けてねじ止めして完成

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/B1D651D7-551E-4244-B0D7-DC507DEC9868_1_105_c.jpeg" alt="" >}}</figure>
</div>

もう、本当にこのキットは、これでもか！というほど簡単に組み立てられます。  
最小限のはんだ付けが終わったら、スタビライザーを取り付けて、

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/8FEF56E6-12FD-45DA-9368-EE39AA6989ED_1_105_c.jpeg" alt="" >}}</figure>
</div>

スペーサーをねじ止めして

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/6B3307C0-1746-49AF-B11C-D85F1E5CF25F_1_105_c.jpeg" alt="" >}}</figure>
</div>

キースイッチをはめていくだけです。

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/EDBA077A-6816-4EA7-82B6-FC1C42F0647C_1_105_c.jpeg" alt="" >}}</figure>
</div>

ただ、スペーサーをどこでどうねじ止めしていくのか、迷ったこともありましたが、「ここにはこれ以上の階層がないぞ」というタイミングでねじ止めして、さらにもう1枚プレートを取り付ける箇所に、さらにねじ止めできるようにスペーサーを取り付けるっていうイメージでいけました。

この辺りは、フルアクリル版のビルドガイドの方が参考になるかもしれません。<figure class="wp-block-embed is-type-wp-embed is-provider-hatena-blog wp-block-embed-hatena-blog">

<div class="wp-block-embed__wrapper">
</div></figure> 

## でっかいゴム足を取り付けてHHKBと同じ角度を実現

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/7F118927-3274-48E5-A256-E4652740077E_1_105_c.jpeg" alt="" >}}</figure>
</div>

自作キーボードの欠点は、市販のキーボードみたいにツメを利用して角度を変える機構がついていないことだと僕は思います。

特に僕の場合は、HHKBを使う時、角度が一番つくように大きなツメを起こしています。  
これを自作キーボードで再現するためには、プレートの角度そのものを変えるしかないなと考えたわけです。いくらキーキャップで団によって角度をつけたところで、微々たる差にしかなりません。

そこでホームセンターに行ってみたところ、透明のゴムで、両面テープがついている丁度良いものが売っていたわけです。  
Amazonの方が割安だったかもしれませんが、組み立てている最中に「今すぐ欲しい！」という衝動に駆られてしまったので、車を走らせたのでした。

## 7sPro完成

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/E2CD8E61-F1F7-4EFD-8AEA-094A3380892F_1_105_c.jpeg" alt="" >}}</figure>
</div>

今回は、子どもが起きている間にほぼ完成しました。Zincの時には子どもが寝た後でないとはんだごてが出せなかったりと苦労しましたが、7sProははんだ付け作業が最小限で済んだため、昼間に組み立てることができました。

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/0BA8EFA0-32C6-4818-8EBF-BFE0CDD8EE8B_1_105_c.jpeg" alt="" >}}</figure>
</div>

あぁ、やっぱり最高だよ分割。ちょっと角度を変えるだけでも、だいぶ肩が楽になります。

<div class="wp-block-image">
  <figure class="aligncenter">{{< figure src="/wp-content/uploads/2021/06/F69EAD69-70A1-4084-8ED0-0222CBFF4852_1_105_c.jpeg" alt="" >}}</figure>
</div>

今現在は、こんな感じです。パームレストを付け足して、そこに右側を置いています。かなり肩が楽になりました。

ただ、今回も35gリニア軸にしてみましたが、HHKBの感触とは程遠いのが現状です。**HHKBはやっぱり最高だ。帰ってくるたびに、その打ち心地に感動します。**

しかし、しかしですよ。<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">分割には打ち心地には変えられない感動があります。</span>  
2週間くらい7sProを使っているのですが、肩こりになりにくいことに驚いています。

というかね、そもそもの話、自作キーボードのキットでここまで親切な設計で、16500円というのが凄いと思うんですよ。他のキットはProMicroが付属していなかったりと、一部初心者に優しくない形で価格を下げているものがありますが、7sProならキースイッチとキーキャップとTRRSケーブルを揃えたら完成します。それを考えると、HHKBユーザーが手を出しやすいキットとも言えます。

何より質感が素晴らしいです。Choco60と比べて、入力中のたわみもなく、安定しています。もう、これがゴールだと言っても良いほどです。

次は、何を作ろうかしら。フルキーボードではなく、10個くらいのマクロ専用キーボードでも作ってみたいと考えています。何か良いキットがあれば教えてください。

以上、話が脱線しましたが、7sProのビルドログでした。<figure class="wp-block-embed is-type-link is-provider-埋め込み wp-block-embed-埋め込み">

<div class="wp-block-embed__wrapper">
  <a href="https://shop.yushakobo.jp/products/7spro">7sPro</a>
</div><figcaption>遊舎工房の7sPro購入ページ</figcaption></figure>