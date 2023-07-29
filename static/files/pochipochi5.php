<?php
// WordPress用の関数をここでも使いたいから読み込む
require_once( dirname( __FILE__ ) . '../wp-load.php' );
// 利用するSDKのクラスをインポート
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
use Amazon\ProductAdvertisingAPI\v1\ApiException;
use Amazon\ProductAdvertisingAPI\v1\Configuration;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\GetItemsRequest;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\GetItemsResource;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\PartnerType;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\ProductAdvertisingAPIClientException;

// SDKを利用するためautoload.phpを読み込み
require_once(dirname( __FILE__ ) . '/vendor/autoload.php'); 

// 基本のリクエストパラメータを設定するConfigurationのインスタンスを作成
$config = new Configuration();
$config->setAccessKey('AKIAJW74QVUJBGJ4B3HA'); // アクセスキーIDを指定
$config->setSecretKey('kvrEdPNEFtu2sd+phg/6FFeTBeTvqKzOz1wOKiga'); // シークレットキーを指定
$config->setHost('webservices.amazon.co.jp');  // Hostを指定
$config->setRegion('us-west-2'); // Regionを指定

// PA-APIのリクエストを行うDefaultApiのインスタンスを作成
$apiInstance = new DefaultApi(
	new \GuzzleHttp\Client(), 
	$config
);

// GetItemsオペレーションを利用するため、GetItemsRequestのインスタンスを作成
$getItemsRequest = new GetItemsRequest();
$getItemsRequest->setPartnerTag('jun3010me-22'); // アソシエイトタグを指定
$getItemsRequest->setPartnerType(PartnerType::ASSOCIATES); // PartnerTypeを指定
$itemIds = array(
	"B07HCSL6BN",
	"B0793Q57KT"
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
				// 商品データを出力
				echo "<a href='" . esc_url($page_url) . "' target='blank' rel='nofollow'>";
				echo '<p>' . esc_html($title) . '</p>';	
				echo "<img src='" . esc_url($image_url) . "' alt='" . esc_attr($title) . "'>";
				echo '<p>' . esc_html($price) . '</p>';	
				echo '</a>';
			} else {
				echo "<p>商品が見つかりません</p>";
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
?>
