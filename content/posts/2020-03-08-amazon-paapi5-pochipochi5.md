---
title: PA-API5.0対応のカエレバ風Amazonリンク作成ツールを自作した
author: 魚住 惇
type: post
date: 2020-03-08T04:21:30+00:00
url: /amazon-paapi5-pochipochi5-17595.html
thumbnail: /wp-content/uploads/2020/03/7579F646-8744-4101-AF46-6A14B5E45AD0_1_105_c.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1583641296
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1236507592408485888";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1236507592408485888";s:5:"pDate";s:19:"2020-03-08 04:22:38";}}";'
categories:
  - ブログ考察

---
<figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="135" src="/wp-content/uploads/2020/03/f15655511cb665ce85b81b47b5506476-1-1024x135.png" alt="" class="wp-image-17597"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure> 

Amazonアソシエイトのレポートページに出ていた↑この表示。僕はずっとそのままにしていました。

しかしこの表示通りであれば、本記事を更新している2020年3月8日の翌日あたりから、以前作成したカエレバ風リンク作成ポチポチが使えなくなってしまう。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="v3zRqFgAJG">
    <a href="http://jun3010.me/pochipochi-php-15585.html">カエレバの代わりにPA-APIから商品リンクを作成する自分用サービスを作った</a>
  </blockquote>
</div></figure> 

これではあかんなと思ったので、急遽PA-API5.0に対応したバージョンを作成することにしました。

## ポチポチファイブ

名付けて、ポチポチファイブです。響きがゴーゴーファイブに似ていて、少し好きです。

<pre class="wp-block-syntaxhighlighter-code">&lt;?php
//pochipochi5(ポチポチファイブ)はカエレバと同じものを自前で用意したものである
//Ri○kerは100%GPLじゃないからちょっと、ショートコードを実装するためにfunction.phpをいじるのもちょっとなという方におすすめだ

// WordPress用の関数をここでも使いたいから読み込む
require_once( dirname( __FILE__ ) . '/wp-load.php' );
// 利用するSDKのクラスをインポート
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
use Amazon\ProductAdvertisingAPI\v1\ApiException;
use Amazon\ProductAdvertisingAPI\v1\Configuration;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\GetItemsRequest;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\GetItemsResource;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\PartnerType;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\ProductAdvertisingAPIClientException;

// ブックマークレットからGETするASINコードとキーワードを変数に格納する
$getasin = $_GET["asin"];
$getkw = $_GET["kw"];

//楽天アフィリエイトID
  $rakuten_affiliate_id = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
  //Yahoo!バリューコマースSID
  $sid = 'XXXXXXX';
  //Yahoo!バリューコマースPID
  $pid = 'XXXXXXXXX';

//Amazonキーワード検索用にアソシエイトタグを入れておく
  $ptag = 'XXXXXXXXXX';

// 各種アフィリエイトのキーワード検索用URLをそれぞれの変数に入れる
$amazon_url = 'https://www.amazon.co.jp/gp/search?keywords='.$getkw.'&tag='.$params['AssociateTag'];
$rakuten_url = 'https://hb.afl.rakuten.co.jp/hgc/'.$rakuten_affiliate_id.'/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F'.$getkw.'%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F';
$yahoo_url = 'https://ck.jp.ap.valuecommerce.com/servlet/referral?sid='.$sid.'&pid='.$pid.'&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3D'.$getkw;

// SDKを利用するためautoload.phpを読み込み
require_once(dirname( __FILE__ ) . 'autoload.php'); 

// 基本のリクエストパラメータを設定するConfigurationのインスタンスを作成
$config = new Configuration();
$config->setAccessKey('XXXXXXXXXX'); // アクセスキーIDを指定
$config->setSecretKey('XXXXXXXXXXXXXXXXXXX'); // シークレットキーを指定
$config->setHost('webservices.amazon.co.jp');  // Hostを指定
$config->setRegion('us-west-2'); // Regionを指定

// PA-APIのリクエストを行うDefaultApiのインスタンスを作成
$apiInstance = new DefaultApi(
	new \GuzzleHttp\Client(), 
	$config
);

// GetItemsオペレーションを利用するため、GetItemsRequestのインスタンスを作成
$getItemsRequest = new GetItemsRequest();
$getItemsRequest->setPartnerTag($ptag); // アソシエイトタグを指定
$getItemsRequest->setPartnerType(PartnerType::ASSOCIATES); // PartnerTypeを指定
$itemIds = array(
	$getasin
);
$getItemsRequest->setItemIds($itemIds); // 取得する商品のASIN番号を指定
$resources = array(
	GetItemsResource::ITEM_INFOTITLE,
	GetItemsResource::OFFERSLISTINGSPRICE,
	GetItemsResource::IMAGESPRIMARYMEDIUM
);
$getItemsRequest->setResources($resources); // 取得したいレスポンスデータによってリソースを指定

// GetItemsRequestのインスタンスに指定したリクエストパラメータが無効の場合にエラーを出力
$invalidPropertyList = $getItemsRequest->listInvalidProperties();
$length = count($invalidPropertyList);
if ($length > 0) {
	echo "Error forming the request", PHP_EOL;
	foreach ($invalidPropertyList as $invalidProperty) {
		echo $invalidProperty, PHP_EOL;
	}
	return;
}

// ASIN番号をもとに、取得したレスポンスデータをマッピングする関数
function parseResponse($items){
    $mappedResponse = array();
    foreach ($items as $item) {
        $mappedResponse[$item->getASIN()] = $item;
	}
    return $mappedResponse;
}

try {
	// GetItemsオペレーションのPA-APIのリクエストを送信してレスポンスデータを取得
	$getItemsResponse = $apiInstance->getItems($getItemsRequest);

	if ($getItemsResponse->getItemsResult()->getItems() != null) {
		// ASIN番号をもとに、取得したレスポンスデータをマッピング
		$responseList = parseResponse($getItemsResponse->getItemsResult()->getItems());

		// 商品ごとにデータを出力
		foreach ($itemIds as $itemId) {
			$item = $responseList[$itemId];
			if ($item != null) {
				// 商品データを取得
				$title = $item->getItemInfo()->getTitle()->getDisplayValue();
				$page_url = $item->getDetailPageURL();
				$image_url = $item->getImages()->getPrimary()->getMedium()->getURL();
				$price = $item->getOffers()->getListings()[0]->getPrice()->getDisplayAmount();
			} else {
				echo "&lt;p>商品が見つかりません&lt;/p>";
			}
		}
	}

	if ($getItemsResponse->getErrors() != null) {
		// 取得したレスポンスデータが無効の場合、エラーを出力
		echo PHP_EOL, 'Printing Errors:', PHP_EOL, 'Printing first error object from list of errors', PHP_EOL;
		echo 'Error code: ', $getItemsResponse->getErrors()[0]->getCode(), PHP_EOL;
		echo 'Error message: ', $getItemsResponse->getErrors()[0]->getMessage(), PHP_EOL;
	}
} catch (ApiException $exception) {
	// PA-APIのリクエストがエラーの場合、エラーを出力
	echo "Error calling PA-API 5.0!", PHP_EOL;
	echo "HTTP Status Code: ", $exception->getCode(), PHP_EOL;
	echo "Error Message: ", $exception->getMessage(), PHP_EOL;
	if ($exception->getResponseObject() instanceof ProductAdvertisingAPIClientException) {
		$errors = $exception->getResponseObject()->getErrors();
		foreach ($errors as $error) {
			echo "Error Type: ", $error->getCode(), PHP_EOL;
			echo "Error Message: ", $error->getMessage(), PHP_EOL;
		}
	} else {
		echo "Error response body: ", $exception->getResponseBody(), PHP_EOL;
	}
} catch (Exception $exception) {
	// その他のエラーを出力
	echo "Error Message: ", $exception->getMessage(), PHP_EOL;
}

// 各種アフィリエイトのキーワード検索用URLをそれぞれの変数に入れる
$amazon_url = 'https://www.amazon.co.jp/gp/search?keywords='.$getkw.'&tag='.$ptag;
$rakuten_url = 'https://hb.afl.rakuten.co.jp/hgc/'.$rakuten_affiliate_id.'/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F'.$getkw.'%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F';
$yahoo_url = 'https://ck.jp.ap.valuecommerce.com/servlet/referral?sid='.$sid.'&pid='.$pid.'&vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3D'.$getkw;

?>
&lt;html>
&lt;head>
    &lt;title>ポチポチファイブ&lt;/title>
&lt;/head>
&lt;body>
&lt;h1>ポチポチファイブ&lt;/h1>
じゅん.さおとめらいふがカエレバと同じようにリンクを作るためだけに作ったページをPA-PAI5.0に対応させたもの
&lt;h2>使い方&lt;/h2>
まずは、このブックマークレットをブラウザに保存する。&lt;br>
&lt;a href="javascript:(function(){var nakami;$nakami=location.pathname.replace(/.*\/(ASIN|dp|product|aw\/d)\/([0-9A-Z]+)\/.*/,'$2');window.open('http://jun3010.me/pochipochi5.php?asin='+$nakami+'&kw='+window.getSelection().toString())})();">ポチポチ5ブックマークレット&lt;/a>&lt;br>
あとは、Amazonの商品ページで、楽天とYahoo!のキーワードにするキーワードを選択した状態でブックマークレットを実行するだけ。&lt;br>

&lt;div class="cstmreba">
&lt;div class="kaerebalink-box">
&lt;div class="kaerebalink-image">&lt;a href="&lt;?php echo esc_url($page_url); ?>" target="_blank" >&lt;img src="&lt;?php echo esc_url($image_url); ?>" style="border: none;" />&lt;/a>&lt;/div>
&lt;div class="kaerebalink-info">
&lt;div class="kaerebalink-name">&lt;a href="&lt;?php echo esc_url($page_url); ?>" target="_blank" >&lt;?php echo esc_html($title); ?>&lt;/a>&lt;/p>
&lt;div class="kaerebalink-powered-date">posted with &lt;a href="http://jun3010.me/pochipochi5.php" rel="nofollow" target="_blank">ポチポチファイブ&lt;/a>&lt;/div>
&lt;/div>
&lt;div class="kaerebalink-link1">
&lt;div class="shoplinkamazon">&lt;a href="&lt;?php echo esc_html($amazon_url); ?>" target="_blank" >Amazon&lt;/a>&lt;/div>
&lt;div class="shoplinkrakuten">&lt;a href="&lt;?php echo esc_html($rakuten_url); ?>" target="_blank" >楽天市場&lt;/a>&lt;/div>
&lt;div class="shoplinkyahoo">&lt;a href="&lt;?php echo esc_html($yahoo_url); ?>" target="_blank" >Yahooショッピング&lt;img src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=XXXXXXXX&pid=XXXXXXXX" height="1" width="1" border="0">&lt;/a>&lt;/div>
&lt;/div>
&lt;/div>
&lt;div class="booklink-footer">&lt;/div>
&lt;/div>
&lt;/div>
&lt;textarea onclick="this.select()">
&lt;div class="cstmreba">
&lt;div class="kaerebalink-box">
&lt;div class="kaerebalink-image">&lt;a href="&lt;?php echo esc_url($page_url); ?>" target="_blank" >&lt;img src="&lt;?php echo esc_url($image_url); ?>" style="border: none;" />&lt;/a>&lt;/div>
&lt;div class="kaerebalink-info">
&lt;div class="kaerebalink-name">&lt;a href="&lt;?php echo esc_url($page_url); ?>" target="_blank" >&lt;?php echo esc_html($title); ?>&lt;/a>&lt;/p>
&lt;div class="kaerebalink-powered-date">posted with &lt;a href="http://jun3010.me/" rel="nofollow" target="_blank">ポチポチファイブ&lt;/a>&lt;/div>
&lt;/div>
&lt;div class="kaerebalink-link1">
&lt;div class="shoplinkamazon">&lt;a href="&lt;?php echo esc_html($amazon_url); ?>" target="_blank" >Amazon&lt;/a>&lt;/div>
&lt;div class="shoplinkrakuten">&lt;a href="&lt;?php echo esc_html($rakuten_url); ?>" target="_blank" >楽天市場&lt;/a>&lt;/div>
&lt;div class="shoplinkyahoo">&lt;a href="&lt;?php echo esc_html($yahoo_url); ?>;vcptn=kaereba" target="_blank" >Yahooショッピング&lt;img src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=XXXXXXXX&pid=XXXXXXXX" height="1" width="1" border="0">&lt;/a>&lt;/div>
&lt;/div>
&lt;/div>
&lt;div class="booklink-footer">&lt;/div>
&lt;/div>
&lt;/div>&lt;/textarea>
&lt;/body>
&lt;/html>
</pre>

このphpファイルをWordPressのドキュメントルートに保存して、実行するようにしました。

ちなみにこのphpを実行する為には、PA-API5.0のSDKが必要です。こちらのリンクより「**<a rel="noreferrer noopener" href="https://webservices.amazon.com/paapi5/documentation/assets/archives/paapi5-php-sdk-example.zip" target="_blank">paapi5-php-sdk-and-samples</a>**」をダウンロードして、WordPress内のどこかで圧縮ファイルを展開しておいてください。

<https://webservices.amazon.com/paapi5/documentation/quick-start/using-sdk.html>

### 初期設定<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="389" src="/wp-content/uploads/2020/03/4b199094412e92988a37dce47b0b66b3-1024x389.jpeg" alt="15行目あたり" class="wp-image-17601"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

まず始めに、15行目あたりで楽天アフィリエイトIDやYahoo!ショッピング用のバリューコマースSIDとPIDを入れます。その下の部分にAmazonアソシエイトタグ(○○○-22みたいなやつ)を入れます。

<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="367" src="/wp-content/uploads/2020/03/ed069e03e65f993a64c677f987707ff9-1024x367.jpeg" alt="35行目あたり" class="wp-image-17602"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

その後の36行目で、ダウンロードして展開しておいたSDK内にあるautoload.phpへのパスを記述します。

<div class="wp-block-snow-monkey-blocks-alert smb-alert">
  <div class="smb-alert__title">
    <i class="fas fa-exclamation-circle"></i><strong>SDKまるごとWordPress内に置こう</strong>
  </div>
  <div class="smb-alert__body">
    <p>
      <strong>venderディレクトリだけをドキュメントルート内に配置してもcomposer.jsonが足りなくて動作しませんでした。paapi5-php-sdkディレクトリごとWordPress内のどこかに展開してください。</strong>
    </p>
  </div>
</div><figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="996" height="788" src="/wp-content/uploads/2020/03/EC34C5F3-7683-4F5B-9501-82D6F72B7FD0_1_105_c.jpeg" alt="157行目付近" class="wp-image-17603"  sizes="(max-width: 996px) 100vw, 996px" /> </figure> 

ソースコードの一番下の方に、実際に書き出されるHTMLタグが用意してあります。ここにもYahoo!ショッピングのPIDとSIDを入れて下さい。(あれ、これ本当は変数名でもいけるんかな。まぁいいや。)

## 使い方

基本は以前作成した[ポチポチ][1]と同じです。<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="544" src="/wp-content/uploads/2020/03/7579F646-8744-4101-AF46-6A14B5E45AD0_1_105_c-1024x544.jpeg" alt="" class="wp-image-17605"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

上記phpファイルにブラウザからアクセスするとページが表示されるので、そのページ内のブックマークレットを保存しておきます。このブックマークレットの内容もソースコード内にあるので、必要に応じて書き換えてください。<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="655" src="/wp-content/uploads/2020/03/C179AAB7-D54B-49D9-90B7-F2715CC577DF_1_105_c-1024x655.jpeg" alt="" class="wp-image-17604"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

ブックマークレットを保存したら、Amazonの商品ページにアクセスして、商品名や型番などの文字列を範囲選択して、ブックマークレットを実行します。

<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="544" src="/wp-content/uploads/2020/03/7579F646-8744-4101-AF46-6A14B5E45AD0_1_105_c-1-1024x544.jpeg" alt="" class="wp-image-17606"  sizes="(max-width: 1024px) 100vw, 1024px" /> <figcaption>使い回しの画像ですみません</figcaption></figure> 

すると、その商品名とURL内のASINコードを元にリンクが作成されます。楽天市場とYahoo!ショッピングへのリンクは、範囲選択した文字列で商品を検索するためのものです。画像や商品へのリンクが正しく表示できているかをまずはここで確認します。<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="617" src="/wp-content/uploads/2020/03/4B56CBD3-A644-4DAF-89BF-01421E85FC79_1_105_c-1024x617.jpeg" alt="" class="wp-image-17609"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

もしこのphpを実行しも400などのエラーを吐いて画像等が表示されない場合は、URLからASINコードが拾えてない状態です。そういう場合は、一度Amazonアソシエイトツールバー等でテキストリンクを作成し、そこにアクセスした後にブックマークレットを実行してみてください。大抵それで上手くいくはずです。<figure class="wp-block-image size-large">

<img decoding="async" loading="lazy" width="1024" height="590" src="/wp-content/uploads/2020/03/A146664F-15C0-47CB-B11C-BFBF4E4181EE_1_105_c-1024x590.jpeg" alt="" class="wp-image-17607"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

正しく出力された時の、この部分にある小さいテキストボックスが実際に吐き出したHTMLタグです。<span class="smb-highlighter">このボックス内をクリックすると、中身が全て範囲選択される</span>ようにしたので、そのままコピーしちゃってください。あとは、コピーしたタグをこれまで通り記事内に貼り付けるだけです。

## 感想

毎回同じ事を言ってるかもしれませんが、自分が書いたりカスタマイズしたコードが動くと本当に達成感がありますね。作っていて楽しかったです。

そして今回も、このphpを作成するにあたって、というか殆ど全てをこちらのページのものを使わせていただきました。毎回勉強になります。ありがとうございました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="zoZwWyduEk">
    <a href="https://blog-and-destroy.com/13863">【Amazon PA-API 】SDKを利用し商品データを取得・出力する例｜PHP・WordPress</a>
  </blockquote>
</div></figure> 

こちらのページで紹介されていたコードに、前回作成した[ポチポチ][1]に使った内容を足していった感じです。まだPA-API5.0への移行がお済みでない方は、当記事や参考リンクを見て作業してみてください。

動作テストがてら、作成したリンクを貼っておきます。今回のコーディングは全てHHKBで行いました。まじで最高。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/dp/B082TWHY76?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener noreferrer"><img decoding="async" src="https://m.media-amazon.com/images/I/41A2wOjBSVL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/dp/B082TWHY76?tag=jun3010me-22&#038;linkCode=ogi&#038;th=1&#038;psc=1" target="_blank" rel="noopener noreferrer">PFU HHKB Professional HYBRID Type-S 無刻印／白（英語配列） PD-KB800WNS</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="http://jun3010.me/" rel="nofollow noopener noreferrer" target="_blank">ポチポチファイブ</a>
        </div>
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=PD-KB800WNS&#038;tag=jun3010me-22" target="_blank" rel="noopener noreferrer">Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FPD-KB800WNS%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" rel="noopener noreferrer">楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DPD-KB800WNS;vcptn=kaereba" target="_blank" rel="noopener noreferrer">Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

 [1]: http://jun3010.me/pochipochi-php-15585.html