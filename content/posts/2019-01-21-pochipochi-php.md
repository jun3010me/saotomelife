---
title: カエレバの代わりにPA-APIから商品リンクを作成する自分用サービスを作った
author: 魚住 惇
type: post
date: 2019-01-20T15:50:34+00:00
url: /pochipochi-php-15585.html
thumbnail: /wp-content/uploads/2019/01/55481a75a523adea9dd1891f8f4f44d9.png
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1547999437
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:406:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1087014547200884736";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1087014547200884736";s:5:"pDate";s:19:"2019-01-20 15:50:38";}}";'
categories:
  - ブログ考察

---
2019年1月をもって、アフィリエイトリンク作成サービス「カエレバ」が方向転換し、Amazonのリンクが作成できなくなりました。

これは僕にとっては結構死活問題でした。これまでカエレバで作成していたリンクは静的HTMLだから消えないものの、これからのリンクはどうやって作ったらいいんだろかと途方に暮れていました。

調べて見ると、RinkerというWordPressのGutenbergブロック作成にも対応したプラグインが存在していることを知りました。公式ディレクトリに登録されていないプラグインだから、何かモヤモヤするなぁと思っていたところ、Rinkerの作者は100%GPLでは公開していないことが分かりました。

<blockquote class="wp-block-quote">
  <p>
    PHPファイルはGPLライセンスに準拠しています<br /> CSS、Javascript、画像についての権利はすべてoyakosodate.com管理者のやよいに帰属します。有償無償、加工の有無にかかわらず販売及び再配布はできません。
  </p>
  
  <cite>https://oyakosodate.com/rinker/</cite>
</blockquote>

このRinkerというプラグインは結構優秀で、簡単にリンクが作成できます。が、100%GPLではない公開方法が、個人的には方向性が違うというのと、ショートコードでリンクを管理を行うことになるので、1度入れてしまうと将来的にずっとこのプラグインに依存してしまう可能性があります。なので、僕は少し使ってみたものの、継続利用を断念しました。

そんな悩みを密かに始めたPodCastで語っていたところ、[goryugo.com][1]のごりゅごさんがこう返信してくれたんですよ。<figure class="wp-block-embed-twitter wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  <blockquote class="twitter-tweet" data-width="500" data-dnt="true">
    <p lang="ja" dir="ltr">
      <a href="https://twitter.com/jun3010me?ref_src=twsrc%5Etfw">@jun3010me</a>自分で作るのが一番かんたん <a href="https://t.co/WsE2SiGviZ">https://t.co/WsE2SiGviZ</a>
    </p>&mdash; 五藤隆介📖『アトミック・シンキング』 (@goryugo) 
    
    <a href="https://twitter.com/goryugo/status/1086577316178755584?ref_src=twsrc%5Etfw">January 19, 2019</a>
  </blockquote>
</div></figure> 

おう、まじか、自分でカエレバと同じようなサービスを作るんかいな。どうしよう。まぁ元々、プログラムを組むことは好きだし、ExcelだったらVBAでコードを書いて業務を効率化したり、HHKBを3台持っているくらいだから、ごりゅごさんも「こいつなら出来るんじゃね」的な感じに声をかけたんだと思うんですよ。ただ、なんとなく難しそう。という理由で、少しばかり悩んでいました。

ただ、悩んでいるだけじゃ時間の無駄だなとも思ったので、実際に作ってみることにしました。

## PA-API

Amazonのリンクを作成する外部サービスは、PA-API(Product Advertising API)というAmazonが公開しているAPIを使って、商品名やリンク、価格などを取得してhtmlに書き出したりしていました。

あと、このAPIを利用して各国Amazonの商品リンクを同時に取得して転売や競取りを行う人達はこのAPIを叩いた結果をExcelにまとめたりしているようです。

このAPIの機能を簡単に言うと、「商品のASINコードを送ると、その商品のタイトルや価格の文字や、画像などのURLをxmlで返してくれる」ものです。カエレバなどのリンク作成サービスは、このAPIに情報を送って帰ってきた文字列を元にhtmlタグを書き出していたんですね。

### 規約変更

このPA-APIの規約が、2019年1月23日に変更されます。

<blockquote class="wp-block-quote">
  <p>
    Product Advertising API (以下PA-API）ではこれまで全てのお客様に初期状態にて1秒間に1リクエストのサービス提供をしてまいりました。<br /> 2019年01月23日よりこの条件を変更し、初期状態にて<strong>1日のリクエスト上限を8,640リクエスト</strong>とし、追加の日次リクエスト可能数の上限を毎日動的に変更する下記仕様といたします。<br /> <br />初期リクエスト可能数 : <strong>1日あたり 8,640リクエスト</strong>（API利用開始より60日間）<br /> PA-APIより取得した商品リンクより発生した、過去30日間の発送済み商品売上$0.05（日本円で約5円）ごとに1リクエスト追加<br /> 1日の最大リクエスト可能数は、1日あたり864,000リクエスト<br /> <br /> また、<strong>発送済み商品売上が過去30日以内に発生していない場合、PA-APIをご利用いただけなくなる恐れがございます。</strong><br /> なお Amazon Link Builder（WordPressプラグイン）のご利用には影響はございません。
  </p>
  
  <cite>[重要] Product Advertising API 利用ポリシーの変更について</cite>
</blockquote>

<a href="https://affiliate.amazon.co.jp/help/topic/t52/ref=amb_link_GIRJ47iMNIa_rQnqJSBYVg_1?pf_rd_p=f64831d4-98d4-4090-8275-eec06cbc9804" target="_blank" rel="noopener noreferrer">Product Advertising API (PA-API) の利用登録リニューアルにつきまして</a>  


カエレバを含め、多くのリンク作成サービスが、サービスの形態を変えたりしたのは、これが原因だったんですね。

### アクセスキーとシークレットキーを取得する

さて、これまで外部のサービスがやっていたリンク作成を、個人がPA-APIを利用して行うには、アクセスキーとシークレットキーとアソシエイトタグが必要です。アソシエイトタグは「○○○○-22」っていうやつなので、特にこのページをご覧になっている方はご存じのはず。あと残り2つのキーを、Amazonアソシエイトのページより取得します。

<a href="https://affiliate.amazon.co.jp/help/topic/t56" target="_blank" rel="noopener noreferrer">アソシエイト・セントラル &#8211; ヘルプ</a>  


## pochipochi.php

これが今回作成したphpの本体です。

```
// WordPress用の関数をここでも使いたいから読み込む
require_once( dirname( __FILE__ ) . '/wp-load.php' );
$getasin = $_GET["asin"];
$getkw = $_GET["kw"];
// エンドポイントのホスト、パスをそれぞれ変数に格納
$host = 'ecs.amazonaws.jp';
$path = '/onca/xml';

// リクエストURLのパラメータを配列で指定
$params = array(
    // XXXXXXXXの箇所にアクセスキーIDを指定。
    'AWSAccessKeyId' => 'XXXXXXXX',
    // XXXXXXXXの箇所にアソシエイトタグを指定
    'AssociateTag' => 'XXXXXXXX',
    // Product Advertising API のサービスを指定
    'Service' => 'AWSECommerceService',
    // 実行するProduct Advertising APIの種類を指定
    'Operation' => 'ItemLookup',
    // XXXXXXXXの箇所に商品IDを指定。複数の場合はをカンマで区切って指定（最大10）
    "ItemId" => $getasin,
    // 返されるデータのグループを指定。複数の場合はをカンマで区切って指定
    'ResponseGroup' => 'Small,Images',
    // タイムスタンプを指定
    'Timestamp' => gmdate('Y-m-d\TH:i:s\Z')
);

//楽天アフィリエイトID
  $rakuten_affiliate_id = 'XXXXXXXX';
  //Yahoo!バリューコマースSID
  $sid = 'XXXXXXXX';
  //Yahoo!バリューコマースPID
  $pid = 'XXXXXXXX';
// 上記配列のキーを英数字でソート
ksort($params);

// パラメータの配列を結合
$parameter = '';
foreach ($params as $key => $value) {
    $parameter .= $key . '=' . rawurlencode($value) . '&';
}
// パラメータに不要な最後の文字列&を削除
$parameter = rtrim($parameter, '&');

// 署名を作成。XXXXXXXXの箇所には「シークレットキー」を指定
$secret_key = 'XXXXXXXX';
$signature = "GET\n" . $host . "\n" . $path . "\n" . $parameter;
$signature = hash_hmac('sha256', $signature, $secret_key, true);
$signature = rawurlencode(base64_encode($signature));

// リクエストURLを作成(
$request_url = 'http://' . $host . $path . '?' . $parameter . '&Signature=' . $signature;

// XML形式の商品データをオブジェクトに変換
$xml = simplexml_load_file($request_url);

// 使用する商品データを取得して変数に格納
$item = $xml->Items->Item;
$page_url = $item->DetailPageURL;
$attributes = $item->ItemAttributes;
$image_url = $item->MediumImage->URL;
$title = $attributes->Title;

// 各種アフィリエイトのキーワード検索用URLをそれぞれの変数に入れる
$amazon_url = 'https://www.amazon.co.jp/gp/search?keywords='.$getkw.'&tag='.$params['AssociateTag'];
$rakuten_url = 'https://hb.afl.rakuten.co.jp/hgc/'.$rakuten_affiliate_id.'/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F'.$getkw.'%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F';
$yahoo_url = 'https://ck.jp.ap.valuecommerce.com/servlet/referral?sid='.$sid.'&pid='.$pid.'&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3D'.$getkw;
?>
<html>
<head>
    <title>ポチポチ<title>
<head>
<body>
<h1>ポチポチ<h1>
じゅん.さおとめらいふがカエレバと同じようにリンクを作るためだけに作ったページ
<h2>使い方<h2>
まずは、このブックマークレットをブラウザに保存する。<br>
<!-- これがブックマークレットの本体。URL部分はphpファイルを置いたパスに変更する必要がある。 -->
<a href="javascript:(function(){var nakami;$nakami=location.pathname.replace(/.*\/(ASIN|dp|product|aw\/d)\/([0-9A-Z]+)\/.*/,'$2');window.open('http://192.168.11.200:8000/pochipochi.php?asin='+$nakami+'&kw='+window.getSelection().toString())})();">ポチポチブックマークレット<a><br>
<a href="javascript:(function(){var nakami;$nakami=location.pathname.replace(/.*\/(ASIN|dp|product|aw\/d)\/([0-9A-Z]+)\/.*/,'$2');window.open('http://192.168.11.200:8000/pochiyome.php?asin='+$nakami+'&kw='+window.getSelection().toString())})();">ポチポチkindleブックマークレット<a><br>
あとは、Amazonの商品ページで、楽天とYahoo!のキーワードにするキーワードを選択した状態でブックマークレットを実行するだけ。<br>

<div class="cstmreba">
<div class="kaerebalink-box">
<div class="kaerebalink-image"><a href="<?php echo esc_url($page_url); ?>" target="_blank" ><img src="<?php echo esc_url($image_url); ?>" style="border: none;" /><a><div>
<div class="kaerebalink-info">
<div class="kaerebalink-name"><a href="<?php echo esc_url($page_url); ?>" target="_blank" ><?php echo esc_html($title); ?><a><p>
<div class="kaerebalink-powered-date">posted with <a href="http://192.168.11.200:8000/pochipochi.php" rel="nofollow" target="_blank">ポチポチ<a><div>
<div>
<div class="kaerebalink-link1">
<div class="shoplinkamazon"><a href="<?php echo esc_html($amazon_url); ?>" target="_blank" >Amazon<a><div>
<div class="shoplinkrakuten"><a href="<?php echo esc_html($rakuten_url); ?>" target="_blank" >楽天市場<a><div>
<div>
<div>
<div class="booklink-footer"><div>
<div>
<div>
<textarea onclick="this.select()">
<div class="cstmreba">
<div class="kaerebalink-box">
<div class="kaerebalink-image"><a href="<?php echo esc_url($page_url); ?>" target="_blank" ><img src="<?php echo esc_url($image_url); ?>" style="border: none;" /><a><div>
<div class="kaerebalink-info">
<div class="kaerebalink-name"><a href="<?php echo esc_url($page_url); ?>" target="_blank" ><?php echo esc_html($title); ?><a><p>
<div class="kaerebalink-powered-date">posted with <a href="http://jun3010.me/pochipochi.php" rel="nofollow" target="_blank">ポチポチ<a><div>
<div>
<div class="kaerebalink-link1">
<div class="shoplinkamazon"><a href="<?php echo esc_html($amazon_url); ?>" target="_blank" >Amazon<a><div>
<div class="shoplinkrakuten"><a href="<?php echo esc_html($rakuten_url); ?>" target="_blank" >楽天市場<a><div>
<div>
<div>
<div class="booklink-footer"><div>
<div>
<div><textarea>
<body>
<html>
```
**※もし上記ソースコードの「＆」の後ろに<span class="smb-highlighter">「amp;」</span>が付いていたら、<span class="smb-highlighter">「amp;」を削除</span>してください。**

このphpファイルを、WordPressがインストールされているディレクトリの直下に設置して使います。吐き出すhtmlはカエレバで作成したタグと同じ構成です。ブログやサイトにカエレバ用のCSSが書かれている場合は、クラス名も統一してあるのでそのまま反映されると思います。

### 初期設定

実行する前に、アクセスキーなどの情報をphpの中に書きます。
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="765" height="846" src="/wp-content/uploads/2019/01/934157a39c58f3485acd9434ebb6dce8.png" alt="" class="wp-image-15596"  sizes="(max-width: 765px) 100vw, 765px" /> </figure> 

最初の50行までのところで「XXXXXXXX」となっている箇所があるので、そこにコメントに書いた通りの文字列を貼り付けます。Amazon用としてアクセスキーとアソシエイトタグ、下の方にシークレットキーを入れる部分があり、真ん中あたりには楽天アフィリエイトとYahoo!バリューコマースのSIDとPIDを入れる部分があります。それぞれ埋めてください。

### ブックマークレットとの併用が前提

<pre class="wp-block-code"><code lang="javascript" class="language-javascript">javascript:(function(){var nakami;$nakami=location.pathname.replace(/.*\/(ASIN|dp|product|aw\/d)\/([0-9A-Z]+)\/.*/,'$2');window.open('http://192.168.11.200:8000/pochipochi.php?asin='+$nakami+'&kw='+window.getSelection().toString())})();</code></pre>

これが今回作成したphpにAmazonの商品のURLを渡すために作成したブックマークレットです。Amazonの商品ページのURL中にあるASINコードと、ブックマークレット実行時にブラウザ上で範囲選択している単語をphpがGETできるようにしてあります。このjavascript内のurlは、ご自身が今回のphpを設置した場所に書き換えてください。

### 使い方

ブックマークレットをブラウザに登録した後でAmazonのリンクを作成したい商品ページを開いて、楽天やYahoo!用のキーワードを範囲選択しておきます。
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="441" src="/wp-content/uploads/2019/01/7f09b7740b4462cc0449ab957babf406-1024x441.png" alt="" class="wp-image-15599"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

この状態でブックマークレットを実行すると、phpを開くようにしました。
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="985" height="569" src="/wp-content/uploads/2019/01/555809fabff0a71be4e84f69b3f41bd1.png" alt="" class="wp-image-15600"  sizes="(max-width: 985px) 100vw, 985px" /> </figure> 

楽天市場などのリンクをクリックすると、先ほど範囲選択したキーワードで楽天内を検索できます。それと、作成されたhtmlは、一番したのテキストエリアに出来上がっています。このテキストエリアはクリックすると文字列を全て選択するので、コピーし易いと思います。

あとはブログ記事内に貼るだけです。この説明用に作成したタグを実際に貼ってみると、

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/PFU-Hacking-Keyboard-Professional-PD-KB600BN/dp/B01DVRXF0A?SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&#038;tag=jun3010me-22&#038;linkCode=xm2&#038;camp=2025&#038;creative=165953&#038;creativeASIN=B01DVRXF0A" target="_blank"  rel="noopener noreferrer"><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/41YmO-VVJnL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/PFU-Hacking-Keyboard-Professional-PD-KB600BN/dp/B01DVRXF0A?SubscriptionId=AKIAIGGQ4QGQY6L2RH4A&#038;tag=jun3010me-22&#038;linkCode=xm2&#038;camp=2025&#038;creative=165953&#038;creativeASIN=B01DVRXF0A" target="_blank"  rel="noopener noreferrer">PFU Happy Hacking Keyboard Professional BT 無刻印/墨 PD-KB600BN</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://192.168.11.200:8000/" rel="nofollow noopener noreferrer" target="_blank">ポチポチ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=PD-KB600BN&#038;tag=jun3010me-22" target="_blank"  rel="noopener noreferrer">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FPD-KB600BN%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank"  rel="noopener noreferrer">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DPD-KB600BN;vcptn=kaereba" target="_blank"  rel="noopener noreferrer">Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

ね、カエレバと一緒でしょ。

## 参考文献

今回このphpとjavascriptを書く上で、参考にしたサイトを紹介します。もう参考にしたというか、そのまま流用したって言ってもおかしくないレベルです。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://www.mnet.ne.jp/~nakama/">}}
</div></figure> <figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "http://d.hatena.ne.jp/mitaina/20090831/1251706738">}}
</div></figure> <figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "http://www.magicvox.net/archive/2007/03092006/">}}
</div></figure> 

まずこの3つのサイトで、正規表現について勉強しました。Amazonの商品ページのURLからASINコードをどうやって取得しようか困った時に頼りになりました。実際にAmazon関係のブックマークレットを作成されている方のブログを参考にして、ブックマークレットを作成しました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://www.net-tiger.net/entry/2017/07/23/amz-tool">}}
</div></figure> 

このサイトは具体的なコードは一切書いてなかったんですが、全体の流れや、何を参考にすれば書けるのかを考えるきっかけになりました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="bdXAG2dbqx">
    <a href="https://nelog.jp/amazon-pa-api-shortcode">コピペで実装！WordPressでAmazon PA-APIを利用して商品リンクを表示するカスタマイズ方法</a>
  </blockquote>
</div></figure> 

このブログでは今回の内容と同じことをテーマ内のfunction.phpに書いてショートコードで実装する仕組みで実現していました。ちゃんと動作するphpの例として参考にしました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="jWMTcQq8ha">
    <a href="https://blog-and-destroy.com/13863">【Amazon PA-API 】SDKを利用し商品データを取得・出力する例｜PHP・WordPress</a>
  </blockquote>
</div></figure> 

もう、今回作成したコードのほぼ全て、このブログに書かれているものです。9割くらいこちらから拝借しました。html出力の部分と、リンクを作成する部分を変えたくらいで、ほぼこのブログ様のコードです。超実用的なコードを公開してくださりありがとうございました。

## 感想:コードを書いていて超楽しかった

今回のphpファイルを書くことで、日曜日を丸1日使いました。でも、楽しかったです。本当に楽しかった。最初は何をどう書いたら良いのかもわからなくて、簡単なブックマークレットから始めて、慣れてきたら変数に入れた値で再現したりと、自分なりに段階を踏んでここまできました。

見る人が見れば、phpのことを勉強して作った。という感じかもしれませんが、僕は今回、色んなサイトを参考にしながら自分の欲しい物を作っていて、1度も勉強と思ったことはありませんでした。

作りたいものがあって、それについて調べて、これまで知らなかったことを知ることが出来て、楽しくて、自分がこれまで出来なかったことが出来るようになったこの感覚が、嬉しかったです。

世の中にはプログラミングを動画とかで勉強している方もいるかもしれませんが、僕は基礎から学ぶよりも、やりたいことがあって、それを実現するためには何の知識が必要なのかという事から逆算して、必要な知識を調べました。人間が何かを行動するときの原動力って、ゴールである目標設定によると思います。今回僕のモチベーションを支えたのは、「**カエレバの代わりになるサイトを自分で作ってみたい！**」という思いでした。その為に頑張ることが、楽しかった。よくある<span class="smb-highlighter">「将来役に立ちそうだからプログラミングを勉強しよう」っていうやつは、目的と手段がごっちゃになっていて、曖昧さを感じます。</span>

皆さんも、作りたいものを作る為のプログラミングに、是非チャレンジしてみてください。

 [1]: http://goryugo.com