---
title: '[遊舎工房ギルドクエスト] ErgoDash miniのビルドログ'
author: 魚住 惇
type: post
date: 2022-03-27T14:33:39+00:00
excerpt: 自作キーボード「ErgoDash mini」のビルドログです。
url: /ergo-dash-mini-buildlog-22625.html
thumbnail: /wp-content/uploads/2022/03/9BD16905-D897-443B-87C1-B012BBDA6FBD_1_105_c.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 'ガジェット&amp;PC'

---
こんにちは。魚住惇です。  
今回は、自作キーボード「ErgoDash mini」のビルドログを公開します。

この投稿は、遊舎工房ギルドメンバーとして自作キーボードキットの提供を受けて執筆しています。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="HQqFTJXLM2">
    <a href="https://yushakobo.jp/news/2022/02/23/guild/">遊舎工房ギルドメンバーを募集します！</a>
  </blockquote>
</div></figure> 



## column staggered配列の分割キーボード

今回組み立てたErgoDash miniは、カラムスタッガードと呼ばれる、縦方向にキーが揃っているもので、左右に分割されているキーボードです。更に、数字の段が省略されている40％キーボードとしても分類されているものです。2018年ごろからあるキーボードなので、自作キーボード界隈では有名だったりします。<figure class="wp-block-embed is-type-link is-provider-埋め込み wp-block-embed-埋め込み">

<div class="wp-block-embed__wrapper">
  <a href="https://shop.yushakobo.jp/products/ergodash-mini">ErgoDash mini</a>
</div><figcaption>遊舎工房の販売ページ</figcaption></figure> 

## キットの内容
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/B99AE651-692A-4C5B-B36E-164F7AE6FE3E.jpeg" alt="" >}} </figure> 
<figure class="wp-block-image">{{< figure src="/wp-content/uploads/2022/03/CA89FE0C-DC17-42D1-AC21-9DF83492C0C6_1_105_c.jpeg" alt="" >}}</figure> 

ErgoDash miniのキットに含まれているのは、次の通りです。

<ul class="is-style-vk-numbered-square-mark">
  <li>
    PCB、2枚
  </li>
  <li>
    アクリルプレート、6枚
  </li>
  <li>
    ダイオード、56個
  </li>
  <li>
    Pro Micro、2個
  </li>
  <li>
    コンスルーピン、4個
  </li>
  <li>
    TRRS jack、2個
  </li>
  <li>
    タクトスイッチ、2個
  </li>
  <li>
    スタビライザー、2個
  </li>
  <li>
    M2ねじ (短)、22本
  </li>
  <li>
    M2ねじ (長)、6本
  </li>
  <li>
    M2スペーサー、14本
  </li>
  <li>
    ゴム足、8個
  </li>
</ul>

### キースイッチとキーキャップは別売り

キットに含まれていないもので、他に必要なものは、キースイッチとキーキャップです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/AB9F709D-7F0C-41D5-8425-6FA2840CDECA_1_105_c.jpeg" alt="" >}} </figure> 

今回はErgoDash miniのために、Gateron Silent 赤とGateron Silent 茶と、Kailh BOX Silentのピンクを用意しました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/5DC6E62F-1A51-4BF4-A9D0-C2C0E39B7BD3_1_105_c.jpeg" alt="" >}} </figure> 

キーキャップは、TALP KEYBOARDさんで購入した、「KBDfans NP PBT ブランク キーキャップセット」を使うことにしました。

## 自作キーボードの製作に必要な道具

今回のキーボードを作るにあたって、こちらの道具を使いました。まだまだあれば便利な道具はありますが、最低限これらがあれば作れると思います。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B006MQD7M4?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/315d3oNrVHL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B006MQD7M4?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener">白光(HAKKO) ダイヤル式温度制御はんだこて FX600-02</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
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

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B001AV5KLC?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/51kKDY1q1bL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B001AV5KLC?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener">ウェーブ(Wave) 瞬間エポキシ接着剤 A剤5g+B剤5g</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=エポキシ&#038;tag=jun3010me-22" target="_blank" rel="noopener">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2Fエポキシ%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3Dエポキシ "vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B08FMMPL2L?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener"><img decoding="async" src="https://m.media-amazon.com/images/I/51hWfwIR6cL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B08FMMPL2L?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener">NESHEXST 精密ドライバーセット 専門誌ドゥーパ!掲載モデル S2素材 メーカー3年保証 135in 工具 壊れたネジ対応</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/pochipochi5.php" rel="nofollow noopener" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=精密ドライバーセット&#038;tag=jun3010me-22" target="_blank" rel="noopener">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F精密ドライバーセット%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&pid=884909937&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3D精密ドライバーセット "vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

## 製作工程

### エキポジでProMicroの端子もげ対策
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/DB6FB4A5-24CC-490B-936E-40427C043C5B_1_105_c.jpeg" alt="" >}} </figure> 

乾くのに少し時間がかかるので、僕は自作キーボードを作る時は、最初にProMicroのMicroUSB端子のもげ対策として、エキポジを塗る作業をします。

Amazonにもこの接着剤が売られていますが、僕はダイソーで購入しました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/6419FC89-286E-49B2-BBCF-E8B57CD95F57_1_105_c.jpeg" alt="" >}} </figure> 

付属のProMicroには足が太くて長いピンが入っていますが、このピンは使いません。かといって「何かに使えるかも」と思っていても、この数年使うことはありませんでした。捨てて良いと思います。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/E2E89EF1-BCB9-4FBF-B081-CC0DE5A9C505_1_105_c.jpeg" alt="" >}} </figure> 

接着剤AとBを出して、爪楊枝などでかき混ぜて、MicroUSB端子の周囲に塗りたくりました。端子の内部に侵入させない程度に盛ると、良い感じにガードできます。

塗り終わったら、乾くのを待ちつつ、次の作業に進みます。

### ダイオードのはんだ付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/97492E57-5040-47A8-BDB8-94D3EE8B20D4_1_105_c.jpeg" alt="" >}} </figure> 

ダイオードは電流の流れを一方通行にする部品です。自作キーボードではキースイッチ1つにダイオードを1つはんだ付けする必要があります。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/11B6D7DB-266E-4E53-A62C-E9C0F052B8E7_1_105_c.jpeg" alt="" >}} </figure> 

ErgoDash miniの基板では、アクリルプレート3枚分ほどの幅がちょうどダイオードを折り曲げる幅なので、こんな感じに一気に曲げると時間の短縮になりました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/361A625E-7E58-4A82-A628-B0D86B87A868_1_105_c.jpeg" alt="" >}} </figure> 

ダイオードをはんだ付けする場所は片方だけでこれだけあります。ダイオードには向きがあるので、差し込む向きに注意しつつ入れていきました。三角形の下に線が引いてある方に、ダイオードに色が付いている方を合わせます。

この基板、特に黒いロゴがプリントされている部分にダイオードの印が隠れてしまっていたので、ビルドガイドなどを参考にはんだ付けしました。

ErgoDash miniの基板は、左右対称でありながら同じ基板でどちら側に使えるように設計されているので、はんだ付けする場所としない場所があります。作る側としてはちょっとややこしく感じます。

「どこに何をはんだ付けしたら良いのかわからない」と感じる方は、画像を頼りに必要箇所をはんだ付けしていくことをおすすめします。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/7107E8F9-F0ED-4B1A-AB0D-D93A7EF644EA_1_105_c.jpeg" alt="" >}} </figure> 

ダイオードのはんだ付けが終わったら、ニッパで足を切り落としていきます。ここで切り落とした足は捨てても構いませんが、僕は一応パーツが入っていた袋に入れて保管してます。基板の中でアースさせたい場所などに使うことが稀にあります。

### リセットスイッとTRRSジャックのはんだ付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/B061BB60-5E60-42C3-92D7-C02D2C699F9D_1_105_c.jpeg" alt="" >}} </figure> 

ProMicroにファームウェアを書き込む際に必要なリセットスイッチと、分割キーボードの左右を繋ぐTRRSジャックをはんだ付けします。

ダイオードの時にも書きましたが、このキーボードの基板は左右対象でありながら同じ基板を使っているので、表も裏もプリントされています。

リセットスイッチは左側に「TX0」と書かれている位置に、TRRSジャックは黒い枠線で囲ってある場所にはんだ付けしていくわけです。

### ProMicroのはんだ付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/AC8A0ECE-CF2F-405D-A48A-E9F80A3DAA06_1_105_c.jpeg" alt="" >}} </figure> 

続いて、ProMicroのはんだ付けを行います。ErgoDash miniにはコンスルーが付属しているので、それをProMicroに向きに注意しつつ取り付けてはんだ付けしていきます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/CAEC0976-1CC1-4C01-AB30-4BB0C7999C63.jpeg" alt="" >}} </figure> 

ErgoDash miniのProMicroは、この向きにコンスルーを取り付けます。ICチップが乗っている側に挿して、裏面をはんだ付けします。  
ProMicroにはんだ付けするコンスルーを挿す向きは、作るキーボードによって違います。ICチップの裏側にコンスルーを取り付けるものもあります。ErgoDash miniはこの向きということでした。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/2D8781C1-4CF4-4AB9-A57A-0BA121A699F8.jpeg" alt="" >}} </figure> 

コンスルーをはんだ付けしたProMicroを基板にはめるとこんな感じです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/D4A54873-B693-49E6-A34B-B2CF05E57329.jpeg" alt="" >}} </figure> 

この時点ではんだ付けをした箇所はこんな感じです。ダイオードとリセットスイッチ、TRRSジャック、ProMicroです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/4A1683AD-717C-4AD8-B8C0-5B6002F32753.jpeg" alt="" >}} </figure> 

それと、このGとVが刻印されている部分、ここに6箇所の端子があります。今回はUSBケーブルを左側のキーボードに接続してメインとして使うので、ビルドガイドに従って、この位置をはんだ付けしました。2カ所にはんだを盛って繋げました。

### スタビライザーを取り付ける
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/3B86A2DD-C68A-40C6-A929-F2A93470A96E_1_105_c.jpeg" alt="" >}} </figure> 

続いて、スタビライザーを取り付けます。これはShiftキーなどの他よりも大きなキーの部分に取り付ける部品で、キースイッチの動きを安定させるために使います。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/C9F3C748-0325-437B-A5AB-99326BF7D0D0_1_105_c.jpeg" alt="" >}} </figure> 

これを穴の大きな方に引っ掛ける足を先に入れて、穴の小さい方にストッパーになる部分を入れ込みます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/DFBF7FF9-576A-49B9-9917-A1CECF84163E_1_105_c.jpeg" alt="" >}} </figure> 

取り付けた終わったのを上から見るとこんな感じです。

### キースイッチのはんだ付け
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/F5B68F03-ECAB-4B71-B8DB-92FB375CC192_1_105_c.jpeg" alt="" >}} </figure> 

ここからは、キースイッチを取り付けていきます。キースイッチと基板の間にはキースイッチの形の穴が空いているアクリルプレートを挟むので、まずはこのアクリルプレートにキースイッチを取り付けていきます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/ABE33968-5886-4ED0-8CF7-31BB4DE1E367_1_105_c.jpeg" alt="" >}} </figure> 

アクリルプレートに張り付いている紙を剥がして、
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/2BF85D68-B5E9-4538-AC6B-5149FC8B8D53_1_105_c.jpeg" alt="" >}} </figure> 

穴が空いている部分に付属ネジの短い方を入れて、裏からナットで止めます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/19CBF235-8AB8-4EE9-927F-BF13AEE02EC5_1_105_c.jpeg" alt="" >}} </figure> 

裏面はこんな感じ。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/96F8CDF0-4381-416C-9543-4F41BCC3A507_1_105_c.jpeg" alt="" >}} </figure> 

まずはアクリルプレートのキースイッチの穴に4ヶ所だけキースイッチを入れて、基板に重ねます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/9E857C0E-9304-459E-9EF0-C779BF5A5BF8_1_105_c.jpeg" alt="" >}} </figure> 

で、基板の裏面のキースイッチの端子をはんだ付けします。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/04078250-8424-4B3E-9CE4-BA6285AE0769_1_105_c.jpeg" alt="" >}} </figure> 

キースイッチがアクリルプレートにはまった状態で、なおかつ基板にも密着していることがポイントです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/2C373CA3-7A5D-4CB7-BC72-56409303D108_1_105_c.jpeg" alt="" >}} </figure> 

今回は小指で使いそうなところを押下圧35g、アルファベットのキーを45g、親指で押しそうな部分をタクタイル感が茶軸にしました。

全てのキーを同じキースイッチにしても良かったんですが、できれば指ごとに重さを変えてみたら趣深いんじゃないか？と思ったので少し工夫してみました。

### 裏面のアクリルプレートを取り付ける
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/IMG_3920.jpeg" alt="" >}} </figure> 

最後に、基板の裏面に残りのアクリルプレートを取り付けます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/775BCEE1-6B0E-43D6-BBFD-99B2068650A3_1_105_c.jpeg" alt="" >}} </figure> 

残っているアクリルプレートは大きいものと小さいものがありますが、基板のすぐ裏に大きなプレートを重ねて、その上に残りの小さいプレートを重ねます。

これでキーボードに若干の傾斜がつきました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/335DE7D9-F185-4FCF-935D-9E0F36685C96_1_201_a.jpeg" alt="" >}} </figure> 

アクリルプレートを2枚重ねた部分は長い方のネジを、1枚だけの部分の穴には短い方のネジを使って固定します。

あと最後に、ゴム足のシールを隅に貼って完成です。

## ファームウェアを書き込む
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/ef51418a36b5dab5e628bd548b5592ed.png" alt="" >}} </figure> 

完成したら、キーボードをPCに接続して、ProMicroにファームウェアを書き込みます。

ブラウザ上で書き込みができるサイトもありますが、僕はPC上で起動するアプリからファームウェアを書き込む方がどことなく安定している感じがしているので、QMK Toolboxを使っています。

リンク

ErgoDash mini用のファームウェアは、qmk.fmのリストの中では「omkbd/ergodash/mini」として登録されています。一覧から探してLoadボタンを押して、本体のリセットスイッチを押した直後にFlashボタンをクリックするだけで、ファームウェアの書き込みが完了します。

## 動作確認をして完成
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/E88FCF66-E683-4B87-BB1B-36E496D0021D_1_105_c.jpeg" alt="" >}} </figure> 

以上の作業を行って、メモ帳などのエディタで動作を確認したり、remapなどのサイトで全てのキーが動作するかを確認して完成です。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/9BD16905-D897-443B-87C1-B012BBDA6FBD_1_105_c.jpeg" alt="" >}} </figure> 

今回は写真として用意したのは片方だけですが、同じようにもう片方を作ることで、左右両方のキーボードが完成します。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/03/85A8DA57-B450-4B5E-99E7-E8067E4E0220_1_105_c.jpeg" alt="" >}} </figure> 

左右揃えるとこんな感じです。刻印がないキーキャップだとちょっと味気ない感じかもしれませんが、そこはまぁお好みだと思います。

個人的に苦労したのは、**「ErgoDash miniの基板の、どこにダイオードを取り付けるか」**でした。そこさえ間違えなければ、自作キーボードというのは仕組みとしては意外と単純です。  
ただ、今回はLEDを取り付けませんでした。LEDを取り付けようとすると、またワンランク上の苦労があります。ひとまずキーボードとして動作するまでの工程をまとめました。

ここで紹介したビルドログが、ErgoDash miniをこれから製作する方の参考になりましたら幸いです。<figure class="wp-block-embed is-type-link is-provider-埋め込み wp-block-embed-埋め込み">

<div class="wp-block-embed__wrapper">
  <a href="https://shop.yushakobo.jp/products/ergodash-mini">ErgoDash mini</a>
</div><figcaption>遊舎工房の販売ページ</figcaption></figure>