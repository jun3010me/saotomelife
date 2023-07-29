---
title: Windows＋ATOKで入力切り替えを「Ctrl＋Space」にする
author: 魚住 惇
type: post
date: 2018-10-11T21:35:35+00:00
url: /win-atok-kirikae-14986.html
thumbnail: /wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_413b-1.jpg
snapFB:
  - 'a:1:{i:0;a:24:{s:2:"do";s:1:"1";s:5:"nName";s:11:"Facebook #0";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:6:"appKey";s:35:"x5g9aw2d4v22454x2w294d444a4p2b4u2z2";s:6:"appSec";s:69:"d3h0au284x2i5b4s224h5e414a4p2m5z2y2u2k584x24474e4w2p2y2d4w244q2748484";s:8:"postType";s:1:"A";s:8:"apiToUse";s:4:"fbfb";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:3:"tpt";s:0:"";s:4:"pgID";s:15:"627487850654942";s:6:"imgUpl";s:1:"T";s:10:"riComments";i:0;s:12:"riCommentsAA";i:0;s:5:"proxy";a:2:{s:5:"proxy";s:0:"";s:2:"up";s:0:"";}s:9:"wpImgSize";s:4:"full";s:5:"glpid";s:0:"";s:4:"uMsg";s:0:"";s:11:"accessToken";s:175:"EAAMjGZBx2DIABAK9Shrq8A1facZBzmI7j4gQptvfrvrC0QRXFBjndKxoJdk1x3YCLY5zT01ivVoEhYZCv0wO4N4WlEb8wNRBgIgy8OvpQQfV1zmMs4Tfgs9r2rrWnoya0gsx9AgvoAlPCKCha6ZAYq5mszCg54MRDGptJQ0xegZDZD";s:8:"authUser";s:15:"627487850654942";s:12:"authUserName";s:10:"Jun Uozumi";}}'
snap_isAutoPosted:
  - 1539293748
snapTW:
  - 's:931:"a:1:{i:0;a:23:{s:2:"do";s:1:"1";s:5:"nName";s:10:"Twitter #0";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:6:"appKey";s:55:"x5g9a2494h465u554l434265454e306b4j4m474q3o3w5r4h3a3b4r3";s:6:"appSec";s:105:"d3h0ak37413l546f4u25615i4n4j3p4w384o305r3l336s5d4i4n4u3q354p3u2o4p433o50325b4m4f4r3s463t454y534r3s3l57406";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:5:"twURL";s:29:"https://twitter.com/jun3010me";s:11:"accessToken";s:50:"67790051-Zy1o3Z7D9ONCVqKqdP2QPAIhGVwkCADeltfZN9dth";s:14:"accessTokenSec";s:45:"k94u64BhC2TPT95vmy98nXsz1WUVhQEFSW2qnZM46Q5z1";s:5:"tw140";i:0;s:10:"riComments";i:0;s:11:"riCommentsM";i:0;s:12:"riCommentsAA";i:0;s:8:"attchImg";s:1:"1";s:9:"wpImgSize";s:4:"full";s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1050500248202670080";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1050500248202670080";s:5:"pDate";s:19:"2018-10-11 21:35:51";}}";'
categories:
  - 'ガジェット&amp;PC'

---
本当に今更な話ですが、HappyHackingKeyboradのUS配列を使い始めてからかれこれ10年ほど、ずっと我慢していたことを解消しました。

日本語入力切り替えの方法ですよ。JIS配列なら「半角/全角」キーを押すだけで切り替えることが出来るんですが、US配列をそのまま使うと、「Alt＋〜」の組み合わせを押さなければなりません。

Macでは既に、Karabinerを利用してCommandキー単独を言語切り替えに割り当てているので問題にはしていませんでした。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14983" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_413a.jpg" width="1024" height="768"  sizes="(max-width: 1024px) 100vw, 1024px" /> 

しかしWindowsだと、HappyHackingKeyboradだとこの場所のキーの組み合わせで言語を切り替えていました。いつもこれを右手の親指と中指で押していたのです。その度にホームポジションを離れてしまっていました。今考えると、指がホームポジションから離れることは時間の損失以外の何物でも無く、そして手間だったんです。

幸いにも職場のパソコン(Win7 32bit メモリ2GB)にはATOKがインストールされていたので、「Alt＋〜」の組み合わせだけではなく、「Ctrl＋Space」でも入力切り替えができるように設定しました。

## ATOKで入力切り替えを別のキーに割り当てる手順

一応、記録としてスクショを貼っておきます。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14981" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_413d.jpg" width="1202" height="654"  sizes="(max-width: 1202px) 100vw, 1202px" /> 

ATOKのプロパティ(環境設定)を開き、

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14982" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_413f.jpg" width="1028" height="765"  sizes="(max-width: 1028px) 100vw, 1028px" /> 

「キー・ローマ字・色」タブの、「キーカスタマイズ」をクリック。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14984" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_413c.jpg" width="1177" height="668"  sizes="(max-width: 1177px) 100vw, 1177px" /> 

画像にある「日本語入力ON/OFF」が出てくるまでスクロールするか、右上の「機能を検索」をクリックしてこの項目を探します。見つかったら、「半角／全角」が割り当てられていないところをクリックして、「変更」をクリック。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14980" src="/wp-content/uploads/2018/10/UNADJUSTEDNONRAW_thumb_413b.jpg" width="1067" height="737"  sizes="(max-width: 1067px) 100vw, 1067px" /> 

今回は、「文字未入力」の状態の時に、Ctrl＋スペースキーという設定にしました。

## 感想

うおおおお、ええわ笑、なんで今までこの設定をしなかったんだろう。Linuxと同じように言語切り替えができるのがマジで快適。本当はどこかのキーに割り当てたかったんですが、HHKBのUS配列だと、割り当てるべきキーなんて配列的に余っていなかったんです。

これで、Macのデフォルトとも一緒になったのかな。操作方法を統一すると、かなり快適です。

むしろ今までこの設定をやっていなくてごめんなさいレベルですね。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B01NADP2JG/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/51fAVHaFxtL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B01NADP2JG/jn050191-22/" target="_blank" >ATOK 2017 for Windows [ベーシック] 通常版</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="https://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        ジャストシステム 2017-02-03
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=atok&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2Fatok%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3Datok&#038;vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>