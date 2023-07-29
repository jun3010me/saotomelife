---
title: iMac 2010でも4k解像度(3840×2160)30Hzで外部ディスプレイに出力できた
author: 魚住 惇
type: post
date: 2018-08-19T22:00:00+00:00
url: /imac2010-4k-displayport-14608.html
thumbnail: /wp-content/uploads/2018/08/a17e30fc0c23a993a456602fd205d5ae-320x180.png
snap_isAutoPosted:
  - 1534717090
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:406:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1031304506296786949";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1031304506296786949";s:5:"pDate";s:19:"2018-08-19 22:18:50";}}";'
categories:
  - Mac
  - 商品レビュー

---
あぁ、早く新しいMacが欲しい。しかし、延命に延命を重ねているiMac2010でも、ケーブルを用意すれば4k出力出来るんです。

## iMac 2010 21.5インチのグラフィック

<div id="attachment_14607" style="width: 708px" class="wp-caption alignnone">
  <img aria-describedby="caption-attachment-14607" decoding="async" loading="lazy" class="alignnone size-full wp-image-14607" src="/wp-content/uploads/2018/08/cc0f04ab33bce953e98f131b5c34a5e5.png" alt="iMac 2010の「このMacについて」の画面" width="698" height="466"  sizes="(max-width: 698px) 100vw, 698px" />
  
  <p id="caption-attachment-14607" class="wp-caption-text">
    iMac 2010の「このMacについて」の画面
  </p>
</div>

iMac 2010年モデルの、21.5インチモデルのグラフィックは「Radeon HD5670 512MB」です。なんて懐かしい型番。当時公開されている情報では、最大解像度は2560&#215;1600でした。2010年はYoutubeが4kに対応した年ですが、このグラボではそもそも4k解像度で表示すること自体が想定外でした。

## MacLab.のMiniDisplayport→Displayportケーブルを使う

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B014YOZHA0/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/31H1rHo2wrL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B014YOZHA0/jn050191-22/" target="_blank" >MacLab. Thunderbolt (Mini Displayport) → Displayport 変換 ケーブル オス 1.8m ホワイト DP ver1.2 4K (60Hz) 対応 【相性保証付き】(※HDMIでは使用できません)| Mini DP サンダーボルト ミニ ディスプレイポート</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="https://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        MacLab.
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=maclab%20minidisplayport%20displayport%204k&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2Fmaclab%2520minidisplayport%2520displayport%25204k%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3Dmaclab%2520minidisplayport%2520displayport%25204k&#038;vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

iMac2010はUSBも2.0です。かろうじて、MiniDisplayportが容易されていますが、これもThunderbolt端子ではありません。

このMiniDisplayportをHDMIに変換すると、解像度はFullHD(1920&#215;1080)に制限されます。ですが、同じ種類で形だけ違う、Displayportに変換するケーブルを利用すれば、解像度の制限を取っ払うことができちゃいました。

## リフレッシュレートは30Hz

<div id="attachment_14605" style="width: 3850px" class="wp-caption alignnone">
  <img aria-describedby="caption-attachment-14605" decoding="async" loading="lazy" class="alignnone size-full wp-image-14605" src="/wp-content/uploads/2018/08/0765fd64cd2a1711aabaa178e9a64673.jpg" alt="ちょうどガンダムSEEDを見ているところのスクショ" width="3840" height="2160"  sizes="(max-width: 3840px) 100vw, 3840px" />
  
  <p id="caption-attachment-14605" class="wp-caption-text">
    ちょうどガンダムSEEDを見ているところのスクショ
  </p>
</div>

うっひょー！Macで43インチ4k解像度は最っ高！この広さはまじですごい。動画を再生してもその横でブラウジングしていても、その隣でブログを書いていてもまだ領域が余る！

ただし現状では、iMacのグラフィックの性能ではリフレッシュレート(1秒間に画面の表示を書き換える回数)が30Hz(1秒間に30回)なので、人間の目で見るとカクついて見えます。やっぱり60Hzは欲しいところ。

でもまぁ表示できていないわけじゃないし、Corei7のおかげで動画再生も支援がなくともゴリゴリできているし。今のところはこれで我慢できそうです。

## 秋になったら新型Macを買いたい

この記事を書いている2018年は、7月にMacBookProの新型が発売されました。Macの各モデルの更新が期待されています。各モデルが出揃ったところで、どれを買おうか考えようかな。

それまではこのiMacとケーブルで・・・我慢だ！

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B014YOZHA0/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/31H1rHo2wrL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B014YOZHA0/jn050191-22/" target="_blank" >MacLab. Thunderbolt (Mini Displayport) → Displayport 変換 ケーブル オス 1.8m ホワイト DP ver1.2 4K (60Hz) 対応 【相性保証付き】(※HDMIでは使用できません)| Mini DP サンダーボルト ミニ ディスプレイポート</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="https://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        MacLab.
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=maclab%20minidisplayport%20displayport%204k&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2Fmaclab%2520minidisplayport%2520displayport%25204k%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3Dmaclab%2520minidisplayport%2520displayport%25204k&#038;vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>