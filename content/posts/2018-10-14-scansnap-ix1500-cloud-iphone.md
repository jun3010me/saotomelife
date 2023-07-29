---
title: ScanSnap iX1500をテザリング中のiPhoneに接続してScanSnap Cloudに接続する方法
author: 魚住 惇
type: post
date: 2018-10-14T14:14:11+00:00
url: /scansnap-ix1500-cloud-iphone-15016.html
thumbnail: /wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_41ec-1.jpg
snapFB:
  - 'a:1:{i:0;a:24:{s:2:"do";s:1:"1";s:5:"nName";s:11:"Facebook #0";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:6:"appKey";s:35:"x5g9aw2d4v22454x2w294d444a4p2b4u2z2";s:6:"appSec";s:69:"d3h0au284x2i5b4s224h5e414a4p2m5z2y2u2k584x24474e4w2p2y2d4w244q2748484";s:8:"postType";s:1:"A";s:8:"apiToUse";s:4:"fbfb";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:3:"tpt";s:0:"";s:4:"pgID";s:15:"627487850654942";s:6:"imgUpl";s:1:"T";s:10:"riComments";i:0;s:12:"riCommentsAA";i:0;s:5:"proxy";a:2:{s:5:"proxy";s:0:"";s:2:"up";s:0:"";}s:9:"wpImgSize";s:4:"full";s:5:"glpid";s:0:"";s:4:"uMsg";s:0:"";s:11:"accessToken";s:175:"EAAMjGZBx2DIABAK9Shrq8A1facZBzmI7j4gQptvfrvrC0QRXFBjndKxoJdk1x3YCLY5zT01ivVoEhYZCv0wO4N4WlEb8wNRBgIgy8OvpQQfV1zmMs4Tfgs9r2rrWnoya0gsx9AgvoAlPCKCha6ZAYq5mszCg54MRDGptJQ0xegZDZD";s:8:"authUser";s:15:"627487850654942";s:12:"authUserName";s:10:"Jun Uozumi";}}'
snap_isAutoPosted:
  - 1539526464
snapTW:
  - 's:931:"a:1:{i:0;a:23:{s:2:"do";s:1:"1";s:5:"nName";s:10:"Twitter #0";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:6:"appKey";s:55:"x5g9a2494h465u554l434265454e306b4j4m474q3o3w5r4h3a3b4r3";s:6:"appSec";s:105:"d3h0ak37413l546f4u25615i4n4j3p4w384o305r3l336s5d4i4n4u3q354p3u2o4p433o50325b4m4f4r3s463t454y534r3s3l57406";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:5:"twURL";s:29:"https://twitter.com/jun3010me";s:11:"accessToken";s:50:"67790051-Zy1o3Z7D9ONCVqKqdP2QPAIhGVwkCADeltfZN9dth";s:14:"accessTokenSec";s:45:"k94u64BhC2TPT95vmy98nXsz1WUVhQEFSW2qnZM46Q5z1";s:5:"tw140";i:0;s:10:"riComments";i:0;s:11:"riCommentsM";i:0;s:12:"riCommentsAA";i:0;s:8:"attchImg";s:1:"1";s:9:"wpImgSize";s:4:"full";s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1051476325590941696";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1051476325590941696";s:5:"pDate";s:19:"2018-10-14 14:14:26";}}";'
categories:
  - 教師のiPad仕事術

---
我が家に2018年10月に新発売したScanSnap iX1500がやってきました。

今の職場の自分の机にiX500を置いているので、その代わりに置こうと思いました。

ただ、この新発売のiX1500をScanSnap Cloudに接続する際は、アプリの仕様上、接続先をテザリング中のiPhoneにする為には、一筋縄ではいかなかったんです。

## 今回紹介する使い方

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-15013" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_41e4.jpg" width="1024" height="768"  sizes="(max-width: 1024px) 100vw, 1024px" /> 

ああ、液晶ディスプレイ付のScanSnap、いいですね。最高です。

さて自宅などWIFIに自由に接続できる環境であれば、今回紹介する接続方法は関係なく、すんなりと設定が終わると思うんですが、

僕が使いたいと思っている場所は、ちょっと特殊でして、個人のデバイスを職場のWIFI環境には繋ぐことが出来なかったりします。

なので、今回は自分が使っているiPhoneでテザリングをONにしている状態で、ScanSnapがルータに見えているであろうiPhoneに接続し、ScanSnap Cloudに書類をアップロードする。ということを目標としました。

本来ならば、iPhoneとScanSnapという組み合わせで使う場合は、ScanSnapをダイレクトモードに設定することが想定されています。

ダイレクトモードとは、ScanSnapをWIFIルータにして、iPhoneのWIFI接続先をScanSnapにしてスキャンした内容をiPhoneアプリ内に転送する方法です。

ScanSnapのアプリをiPhoneにインストールして使うんですが、アプリに搭載されているクラウドサービスに自動で転送する機能「ScanSnapSync」だと、読み取ったデータはDropbox・GoogleDrive・OneDriveにしか保存出来ないんです。

僕はどうしても、_読み取った書類などを自動でEvernoteに保存したかった_んです。

## 作業方法:セットアップ後に接続先を変更する

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-15010" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_41ef.jpg" width="1044" height="753"  sizes="(max-width: 1044px) 100vw, 1044px" /> 

というわけで、最初は通常通りのセットアップで、家のWIFIに接続してScanSnap Cloudに接続させました。

ここまでは普通。

で、めでたく自分のScanSnap CloudにiX1500が登録されたら、今度はアクセスポイントをテザリング中のiPhoneに設定し直します。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-15012" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_41ee.jpg" width="1024" height="768"  sizes="(max-width: 1024px) 100vw, 1024px" /> 

ちなみにこのタッチパネル、反応が遅いと思ったこともなく、操作していて結構快適です。

接続先を切り替えることができたら、設定は終わりです。

流れを説明してみるとどうって事ないんですけど、ScanSnap CloudのiOSアプリを使った初回設定のウィザードでは、テザリング中のiPhoneに接続することが想定されていなかったんです。iOSのシステム上、テザリングで接続させているデバイスは、iPhoneとは同一ネットワークとして認識されません。更に、ScanSnap Cloudアプリでは、設定ウィザードを進めていく中で、iPhoneのWIFIをONに設定する必要があります。iPhoneはテザリング中にWIFIがオフになる仕様なので、ウィザードの通りに進めることが出来ませんでした。

## テザリングのオンオフでiX1500が勝手に繋がってくれる

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-15014" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_41eb.jpg" width="1187" height="661"  sizes="(max-width: 1187px) 100vw, 1187px" /> 

以上の設定が終わるとどうなるかというと、iPhoneのコントロールセンターでテザリングがオフとなっていてiX1500は接続先を失っています状態から、

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-15011" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_41ec.jpg" width="1187" height="661"  sizes="(max-width: 1187px) 100vw, 1187px" /> 

テザリングをオンにすると、iX1500がすぐに接続を試みてくれるので、結構早いタイミングでスキャン出来るようになります。

正しい手順としては、

  1. iPhoneのテザリングをオンにする
  2. iX1500を開く
  3. 接続されるので書類をスキャン

という流れが良さそうですが、1と2が逆になっても、なんとか繋がってくれます。このどちらでも良い感じで、割と雑に使ってもなんとかなってくれる感じが良いですね。

5年ぶりにフルモデルチェンジされたScanSnap iX1500、A3サイズもキャリアシートなしで読み取れるので、本当に職場で大活躍しそう。

明日から活用できるのが本当に楽しみです。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B07HHZJKS3/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/31APgGqSdJL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B07HHZJKS3/jn050191-22/" target="_blank" >富士通 PFU ドキュメントスキャナー ScanSnap iX1500 (両面読取/ADF/4.3インチタッチパネル/Wi-Fi対応)</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="https://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        富士通 2018-10-12
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=ScanSnap%20iX1500&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FScanSnap%2520iX1500%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DScanSnap%2520iX1500&#038;vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>