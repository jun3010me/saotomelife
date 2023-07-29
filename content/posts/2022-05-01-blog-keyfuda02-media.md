---
title: '[遊舎工房ギルドクエスト]KeyFuda02メディアパッドのビルドログ'
author: 魚住 惇
type: post
date: 2022-05-01T00:39:31+00:00
excerpt: KeyFuda02メディアパッドの制作過程をまとめました。
url: /blog-keyfuda02-media-22673.html
thumbnail: /wp-content/uploads/2022/05/IMG_0164.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 'ガジェット&amp;PC'

---
 

こんにちは。魚住惇です。  
今回は、自作キーボード「**KeyFuda02メディアパッド**」を公開します。

この投稿は、遊舎工房ギルドメンバーとして自作キーボードキットの提供を受けて執筆しています。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="IdY6dMS0Ny">
    <a href="https://yushakobo.jp/news/2022/02/23/guild/">遊舎工房ギルドメンバーを募集します！</a>
  </blockquote>
</div></figure> 



## 自作キーボード初心者にやさしいキット

自作キーボードと聞くと、左右に分割されたものだったり、キーの数が少なかったりするものの、どうしてもはんだ付けが手間だったりして、敷居が高く感じる方も多いと思います。

<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">まずは、手軽なもので練習したい。</span>

**KeyFuda02メディアパッド**は、こうしたニーズに応えつつ、尚且つとっても実用的なキットです。

僕が初めて自作キーボードに触れたのは、友人から東京土産でもらった「meishi」と呼ばれる自作キーボードキットでした。現在では第2世代にあたる「meishi2」が発売されています。ProMicroにキースイッチが4つ繋がっていて、自分好みのキーを登録することが出来るキットです。<figure class="wp-block-embed is-type-link is-provider-埋め込み wp-block-embed-埋め込み">

<div class="wp-block-embed__wrapper">
  <a href="https://shop.yushakobo.jp/products/834">meishi2 キット</a>
</div></figure> 

これに対して「KeyFuda02メディアパッド」は、9個のキー、2個のスイッチ、1個のロータリーエンコーダが搭載されていて、meishiとの価格差は230円。

この価格差なら、KeyFuda02メディアパッドも_「はんだ付けの練習も兼ねて、試しにとりあえず動くものを作ってみたい」_というニーズに打ってつけではないでしょうか。

## キットの内容
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/0107F945-26F5-4113-BE30-C063DF5E1212.jpeg" alt="" >}} </figure> 

KeyFuda02メディアパッドのきっとに含まれているのは、次の通りです。

<ul class="is-style-vk-numbered-square-mark">
  <li>
    基板、1枚
  </li>
  <li>
    ロータリーエンコーダ、1個
  </li>
  <li>
    ロータリーエンコーダ用ノブ、1個
  </li>
  <li>
    ロータリーエンコーダ取付用レンチ、1個
  </li>
  <li>
    LED（SK6812MINI-E）、2個※予備1個
  </li>
  <li>
    タクトスイッチ、2個
  </li>
  <li>
    ゴム足、4個
  </li>
  <li>
    ProMicro、1個
  </li>
</ul>

### キースイッチとキーキャップは別売り
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/7B90870B-A4B9-42B0-A1EF-9DA6B9A1F3A7.jpeg" alt="" >}} </figure> 

このキットにはキースイッチとキーキャップが含まれていません。

ので今回は遊舎工房さんより「<a href="https://shop.yushakobo.jp/products/pg1350" data-type="URL" data-id="https://shop.yushakobo.jp/products/pg1350">Kailhロープロファイルスイッチ（10個）</a>」と「<a href="https://shop.yushakobo.jp/products/pg1350cap-blank" data-type="URL" data-id="https://shop.yushakobo.jp/products/pg1350cap-blank">Kailhロープロ無刻印キーキャップ1U（10個）</a>」を購入しました。

ちなみにこのキットは、BLE Micro ProによるBluetooth接続も可能となるよう設計されていますが、今回は最低限の構成で動かすために、キースイッチとキーキャップのみ別途購入しました。

## 制作工程

### LEDのはんだ付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/322A0DE7-B394-452D-A3EE-A963FE7BE357.jpeg" alt="" >}} </figure> 

最初に行ったのは、ProMicro付近に取り付けるLEDのはんだ付けです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/608F2E9F-4099-4313-9D52-116ECEB5965D.jpeg" alt="" >}} </figure> 

LEDは温度に繊細な部品です。ダイヤルなどで温度が調整できるはんだごてを使うことを強くお勧めします。LEDのはんだ付けは270℃で行いました。

僕が使っているはんだごてはこれです。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B006MQD7M4?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/315d3oNrVHL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B006MQD7M4?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener">白光(HAKKO) ダイヤル式温度制御はんだこて FX600-02</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://192.168.11.200:8000/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=FX600-02&#038;tag=jun3010me-22" target="_blank" rel="noopener">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FFX600-02%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DFX600-02 "vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0135.jpeg" alt="" >}} </figure> 

Gndの端子が斜めにカットされている部分なので、そこに合わせてLEDを設置します。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0136.jpeg" alt="" >}} </figure> 

こんな感じに、なるべくLED本体にはんだごてが直接当たらないように気をつけながらはんだ付けしてみました。

あまり時間をかけずに、さっとはんだを溶かすのも意識するとLEDの生存率が上がると思います。

### キースイッチのはんだ付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0138.jpeg" alt="" >}} </figure> 

続いて、キースイッチを取り付けてはんだ付けしていきます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0139.jpeg" alt="" >}} </figure> 

基板のキースイッチの形に穴が空いている部分に、9個はめ込んでいきます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0140.jpeg" alt="" >}} </figure> 

で、はめ込んだ後に裏面を見ると、キースイッチの端子が飛び出てます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0141.jpeg" alt="" >}} </figure> 

この飛び出た部分をニッパで切り落とします。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0142.jpeg" alt="" >}} </figure> 

これをやった後にはんだ付けすると、はんだの部分が尖らずに丸い感じになります。指で撫でても引っかかることなく、痛くありません。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0143.jpeg" alt="" >}} </figure> 

キースイッチ全てをはんだ付けするとこんな感じになりました。

### タクトスイッチ2個のはんだ付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0144.jpeg" alt="" >}} </figure> 

他の多くのキットでは主にリセットスイッチに使われているタクトスイッチですが、このキットではキーの1つとして使います。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0145.jpeg" alt="" >}} </figure> 

これもさっきのキースイッチ同じように、触っても痛くないように丸い感じに仕上げます。

こんな感じにタクトスイッチの足の部分を残しつつ、ちょっとだけはんだを盛り付けます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0146.jpeg" alt="" >}} </figure> 

で、はんだがついていない足の部分を切り落とします。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0147.jpeg" alt="" >}} </figure> 

その後で改めてはんだを溶かすと、この写真の通りに丸くなります。

### ProMicroのはんだ付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/D73483C9-631C-45BA-B004-21D426F08CD5.jpeg" alt="" >}} </figure> 

続いて、ProMicroのはんだ付けです。このキットに付属されているProMicro、端子がUSB-Cです。これは嬉しい。多くのキットはMicroUSB端子のProMicroが付属していて、端子のもげ対策も必要だったりするんですが、今回はそういった対策もしませんでした。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0148.jpeg" alt="" >}} </figure> 

まず、足を取り付けて、裏返します。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0149.jpeg" alt="" >}} </figure> 

裏返して、飛び出ている部分をニッパで切り落としていきます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0151.jpeg" alt="" >}} </figure> 

これをやるとキースイッチやタクトスイッチと同じように、はんだが綺麗に丸くなります。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0152.jpeg" alt="" >}} </figure> 

で、ProMicro側も同じように、はめてから飛び出た部分をニッパで切り落とします。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/2FCEC130-A527-41DF-BFD0-A5DCEC458740.jpeg" alt="" >}} </figure> 

こんな感じに、丸く仕上がります。

### ロータリーエンコーダの取り付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0155.jpeg" alt="" >}} </figure> 

続いて、ロータリーエンコーダを取り付けます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0156.jpeg" alt="" >}} </figure> 

はんだ付けをする足が5本あるので、これまでしてきたように取り付けた後に裏返して、飛び出た部分を切り落とします。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0157.jpeg" alt="" >}} </figure> 

仕上がるとこんな感じ。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0158.jpeg" alt="" >}} </figure> 

はんだ付けが終わったら、ロータリーエンコーダのノブを取り付けます。ノブを取り付ける時にレンチを使いますが、その時にノブをほんの少しだけ浮かせた状態で固定すると、ノブそのものをボタンとして押せるようになります。

### ゴム足の貼り付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0160-2.jpeg" alt="" >}} </figure> 

最後にこれ、ゴム足を貼り付けます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0161.jpeg" alt="" >}} </figure> 

貼り付ける場所は、基板の白い丸の部分です。これまで飛び出た部分を切り落としてはんだ付けしてきたのは、このゴム足を越えないようにするためです。これで、机などの設置面を傷付けずに使えます。

### キースイッチの取り付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0164.jpeg" alt="" >}} </figure> 

ここまできたら、キーキャップをキースイッチに取り付けます。本体がこれで完成しました。

## ProMicroにファームウェアを書き込む

組み立てが終わったら、ProMicroにファームウェアを書き込んでいきます。

今回使ったのは、Remapというサイトです。少し前から、Chrome経由でファームウェアの書き込みまで行えるようになっていました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://remap-keys.app/catalog/w5j77u65N127ZZNgGTUR/firmware">}}
</div></figure> 
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/55bddf8bc2fa6ecdfbfd8e271e3e8ebf.png" alt="" >}} </figure> 

このリンク先にChromeでアクセスして、FLASHをクリックして書き込みます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/3f78870752cbfdc9b842cfdac4d7fb86.png" alt="" >}} </figure> 

今回はこのままFLASHを再度選びます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/IMG_0170.jpeg" alt="" >}} </figure> 

基板のリセットスイッチの部分をショートさせて、ProMicroをファームウェアを書き込むモードにします。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/6c5a57ee1ca7be2ff68989963a88ecaa.png" alt="" >}} </figure> 

ChromeにProMicroが表示されたら、接続することで書き込みが始まります。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/81a54b2b4f17e1a1464cc36ee524710d.png" alt="" >}} </figure> 

100％まで進むと、ファームウェアの書き込みが完了します。

## 動作確認をして完成
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/F238DD3F-F886-41E7-B76C-B3596D93FACB.jpeg" alt="" >}} </figure> 

本体の制作も終わり、ファームウェアの書き込みが終わったら、Remapなどのサイトを利用してキーが反応するかどうかを調べます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/05/e7c3bb5d4df19f56eaa1e30b68cea1bf.png" alt="" >}} </figure> 

今回は無事、全てのキーを動作させることができました。

今回紹介したキーボードキット「KeyFuda02メディアパッド」は、ハンドルネーム「サリチル酸 (id:Salicylic_acid3)」さんという方が開発されたものです。

僕はこの方のキーボードキットを作るのは7sProに次いで2台目となります。サリチル酸さんのキーボードキットは、本当に作りやすい工夫がたくさん込められています。これまで何台か自作キーボードを作ってきた中で、初心者が制作中に戸惑わないように、つまずかないようにするための工夫が詰め込まれています。

何気にProMicroがUSB-C版だったり、BLEにも対応可能だったり、ダイオードのはんだ付けが不要だったり。ゴム足を貼る場所が基板上で白くなっていたり。

実際に作っていて、<span data-color="#fffd6b" style="background: linear-gradient(transparent 60%,rgba(255, 253, 107, 0.7) 0);" class="vk_highlighter">サリチル酸さんの自作キーボードキットの作り手としての心意気を感じる場面が多々ありました。</span>

キースイッチなどの足の余分な部分を切ってからはんだ付けを行うのも、サリチル酸さんのビルドガイドの通りにやりました。こういう細かい部分まで書かれているところも個人的には感動したので、今回の制作でもその通りに作ってみました。

初めて自作キーボードというものを作ってみたい。けど最初からフルサイズのキーボードを作るのではなくて、ちょっとしたもので練習してみたい。

「**KeyFuda02メディアパッド**」は、それでいてかなり実用的なキットでした。

最初にキーに登録されていたのは数字のキーだったり、音量のボリュームだったりしましたが、これを自分の用途に合わせてリマップしていくのが、今後の楽しみだったりしますね。マクロを組むのも良いと思います。あとレイヤーによって用途を使い分けるっていう使い方もできるので、ボタンの数が少なくても機能が本当に多くて、値段以上に楽しめるキットです。

もっと金銭的に余裕がある方は、Bluetoothに対応させても良いかと思いますが、BLE Micro Pro Type-C版だと遊舎工房さんで4950円ほどします。KeyFuda02の価格を越えていますね。

今回はキースイッチとキーキャップのみを追加で購入し、最低限の構成で組み立ててみました。オプションを追加で購入すると、Bluetoothを追加したり、アクリル板で装飾感を出すこともできて、更に楽しめると思います。

サリチル酸さんご本人が書かれたビルドガイドを読むと、今回の最低構成以上にカスタマイズするための方法などが書かれています。本当に丁寧に書かれたビルドガイドなので、書かれた通りに進めるだけでも制作できます。<figure class="wp-block-embed is-type-wp-embed is-provider-hatena-blog wp-block-embed-hatena-blog">

<div class="wp-block-embed__wrapper">
</div></figure> 

この記事はあくまで、KeyFuda02を最小構成で初めて組み立てる方向けに書いてみました。お役に立てたら幸いです。

KeyFuda02は、遊舎工房さんか、サリチル酸ご本人のBOOTHにてご購入できます。<figure class="wp-block-embed is-type-link is-provider-埋め込み wp-block-embed-埋め込み">

<div class="wp-block-embed__wrapper">
  <a href="https://shop.yushakobo.jp/products/3396?variant=42212233314535">【委託】KeyFuda02メディアパッド</a>
</div><figcaption>こちらが遊舎工房さんのリンク</figcaption></figure> <figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://salicylic-acid3.booth.pm/items/3485143">}}
</div></figure>