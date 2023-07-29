---
title: AppleWatchで心拍数と睡眠時間を計測したら、コンディションが悪くなる条件がわかった
author: 魚住 惇
type: post
date: 2018-05-18T03:00:00+00:00
url: /applewatch-sleeptime-13467.html
thumbnail: /wp-content/uploads/2018/05/Image-2018-05-18-12-34.jpeg
categories:
  - iOS
  - 考察

---
## 使用したアプリ

今回使ったのは、AutoSleepというアプリと、HeartWatchというアプリです。

<div class="pochireba" style="text-align:left;font-size:small;padding:20px 0;/zoom: 1;overflow: hidden;">
  <a href="https://itunes.apple.com/jp/app/autosleep-watch%E3%82%92%E4%BD%BF%E3%81%A3%E3%81%A6%E7%9D%A1%E7%9C%A0%E3%82%92%E8%87%AA%E5%8B%95%E3%81%A7%E8%BF%BD%E8%B7%A1%E3%81%97%E3%81%BE%E3%81%99/id1164801111?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" ><img decoding="async" loading="lazy" src="https://is5-ssl.mzstatic.com/image/thumb/Purple128/v4/45/84/17/4584176e-bbce-dc91-e75c-6507fe2d9c47/source/60x60bb.jpg" alt="AutoSleep Watchを使って睡眠を自動で追跡します" width="60" height="60" style="float:left;margin:0 15px 0 0;width:60px;height:60px;" class="pochi_img" /></a></p> 
  
  <div class="pochi_info" style="text-align:left;/zoom: 1;overflow: hidden;">
    <div class="pochi_name">
      <a href="https://itunes.apple.com/jp/app/autosleep-watch%E3%82%92%E4%BD%BF%E3%81%A3%E3%81%A6%E7%9D%A1%E7%9C%A0%E3%82%92%E8%87%AA%E5%8B%95%E3%81%A7%E8%BF%BD%E8%B7%A1%E3%81%97%E3%81%BE%E3%81%99/id1164801111?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" >AutoSleep Watchを使って睡眠を自動で追跡します</a>&nbsp;(360円)
    </div>
    <div class="pochi_seller">
      <a href="https://itunes.apple.com/jp/developer/tantsissa/id861650887?uo=4&#038;at=11l7ge" target="_blank" >Tantsissa</a>&nbsp;<a href="https://itunes.apple.com/jp/app/autosleep-watch%E3%82%92%E4%BD%BF%E3%81%A3%E3%81%A6%E7%9D%A1%E7%9C%A0%E3%82%92%E8%87%AA%E5%8B%95%E3%81%A7%E8%BF%BD%E8%B7%A1%E3%81%97%E3%81%BE%E3%81%99/id1164801111?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" style="width:100px;color:#ffffff;background:#298CDA;font-size:10px;font-weight:bold;text-align:center;display:inline;text-decoration:none;border:0px;padding:5px;border-radius:10px;background:-moz-linear-gradient(rgba(85,182,237,0.5), rgba(41,140,218,1));background:-webkit-gradient(linear, 100% 0%, 100% 100%, from(rgba(85,182,237,0.5)), to(rgba(41,140,218,1)));white-space: nowrap;">iTunes で見る</a>
    </div>
    <div class="pochi_time" style="font-size:x-small;display:inline;">
      (2018.05.18時点)
    </div>
    <div class="pochi_post" style="font-size:x-small;">
      posted with <a href="http://pochireba.com" rel="nofollow" target="_blank">ポチレバ</a>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left">
  </div>
</div>

<div class="pochireba" style="text-align:left;font-size:small;padding:20px 0;/zoom: 1;overflow: hidden;">
  <a href="https://itunes.apple.com/jp/app/heartwatch-heart-activity/id1062745479?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" ><img decoding="async" loading="lazy" src="https://is4-ssl.mzstatic.com/image/thumb/Purple118/v4/78/a3/0b/78a30b27-f6b1-d74f-51a4-4b6e07f5dc9f/source/60x60bb.jpg" alt="HeartWatch. Heart &#038; Activity" width="60" height="60" style="float:left;margin:0 15px 0 0;width:60px;height:60px;" class="pochi_img" /></a></p> 
  
  <div class="pochi_info" style="text-align:left;/zoom: 1;overflow: hidden;">
    <div class="pochi_name">
      <a href="https://itunes.apple.com/jp/app/heartwatch-heart-activity/id1062745479?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" >HeartWatch. Heart & Activity</a>&nbsp;(360円)
    </div>
    <div class="pochi_seller">
      <a href="https://itunes.apple.com/jp/developer/tantsissa/id861650887?uo=4&#038;at=11l7ge" target="_blank" >Tantsissa</a>&nbsp;<a href="https://itunes.apple.com/jp/app/heartwatch-heart-activity/id1062745479?mt=8&#038;uo=4&#038;at=11l7ge" target="_blank" style="width:100px;color:#ffffff;background:#298CDA;font-size:10px;font-weight:bold;text-align:center;display:inline;text-decoration:none;border:0px;padding:5px;border-radius:10px;background:-moz-linear-gradient(rgba(85,182,237,0.5), rgba(41,140,218,1));background:-webkit-gradient(linear, 100% 0%, 100% 100%, from(rgba(85,182,237,0.5)), to(rgba(41,140,218,1)));white-space: nowrap;">iTunes で見る</a>
    </div>
    <div class="pochi_time" style="font-size:x-small;display:inline;">
      (2018.05.18時点)
    </div>
    <div class="pochi_post" style="font-size:x-small;">
      posted with <a href="http://pochireba.com" rel="nofollow" target="_blank">ポチレバ</a>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left">
  </div>
</div>

この2つのアプリで睡眠時間と心拍数を計測し、その日の体調と照らし合わせてみました。

や、これが結構単純だったんですよ。体調不良の原因を考えるのが。

## コンディションが悪い日

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-13462" src="/wp-content/uploads/2018/05/Image-2018-05-18-12-35.png" width="1242" height="2208"  sizes="(max-width: 1242px) 100vw, 1242px" /> 

体が重く、疲れている状態の心拍数の状態です。もう眠くて眠くて、身体に鞭打ってるように働いている日の状態です。

これ、実は今日なんですよ。今さっきアプリを立ち上げて、心拍数を見てみました。

今日の僕は朝遅く起き、眠たいまま通勤しました。現時点でのMAXになっているのは、朝8時37分です。これはちょうど出発するために車に乗り、少しの間運転したときの時間です。

そしてこれが、昨晩から今朝にかけての睡眠時間です。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-13466" src="/wp-content/uploads/2018/05/Image-2018-05-18-12-35-1.png" width="1242" height="2208"  sizes="(max-width: 1242px) 100vw, 1242px" /> 

寝ている時にAppleWatchをつけておくと、ちゃんと睡眠時間を計測できるものなんですね。

## 快調の日

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-13463" src="/wp-content/uploads/2018/05/Image-2018-05-18-12-35-2.png" width="1242" height="2208"  sizes="(max-width: 1242px) 100vw, 1242px" /> 

今度は、こちらの心拍数を確認してみます。すると、通勤が終わり、仕事が始まる時間帯で心拍数が高くなっています。

先程の、コンディションが悪い日と比較することで何がわかるかというと、**車の運転ごときで心拍数が上がっていない**ということなんです。身体的にも余裕がある感じでした。

で、こちらがその前の日から朝にかけての睡眠の記録です。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-13464" src="/wp-content/uploads/2018/05/Image-2018-05-18-12-35-3.png" width="1242" height="2208"  sizes="(max-width: 1242px) 100vw, 1242px" /> 

ね？コンディションが悪い日と比べて、たくさん寝ているでしょ？6時間22分寝ました。眠いと思った日は5時間未満だったので、1時間30分ほどの差がありました。

このことから、僕自身は6時間30分ほどの睡眠が毎日必要であることがわかりました。

コンディションを保つためには、人間が生身の身体で生きている限り、睡眠は必要なことだったんですね。

## 感想

とっても当たり前のことなんですけどね、睡眠って大事だよって。

でも、それが自分にとってどれくらいの睡眠時間が必要なのか、

逆にどれくらい睡眠を削ったらどんなことになるのか。

今回のように記録にとって振り返ってみないとわからないんですよね。

特に僕なんかは、何事にもデータに基づいた結果や考察から言えることじゃないと、どうも納得できないんですよ。

世の中には、自分の感覚だけを根拠にあーだこーだ言う人がいますけど、正直「よくそんなエビデンスがないことを正しいことのように言えるよなぁ」と思ったりもします。

でも今、この瞬間の体調の悪さは、まさしく睡眠不足の結果だ・・・。記録がそう言っていることがわかりました。

頑張って睡眠時間を確保しよう。

そう思ったのでした。

ちなみに、今回参考にしてみた本はこちらです。

<div class="cstmreba">
  <div class="booklink-box">
    <div class="booklink-image">
      <a href="http://www.amazon.co.jp/exec/obidos/asin/B07BHQLQQD/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/51ElQEe0PEL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="booklink-info">
      <div class="booklink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/asin/B07BHQLQQD/jn050191-22/" target="_blank" >目の前の仕事に集中するためのApple Watch起きてから寝るまでの使い方が分かる本[Kindle版]</a></p>
        <div class="booklink-powered-date">
          posted with <a href="https://yomereba.com" rel="nofollow" target="_blank">ヨメレバ</a>
        </div>
      </div>
      <div class="booklink-detail">
        佐々木正悟 金風舎 2018-03-15
      </div>
      <div class="booklink-link2">
        <div class="shoplinkkindle">
          <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B07BHQLQQD/jn050191-22/" target="_blank" >Kindle</a>
        </div>
        
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/gp/search?keywords=%96%DA%82%CC%91O%82%CC%8Ed%8E%96%82%C9%8FW%92%86%82%B7%82%E9%82%BD%82%DF%82%CCApple%20Watch%8BN%82%AB%82%C4%82%A9%82%E7%90Q%82%E9%82%DC%82%C5%82%CC%8Eg%82%A2%95%FB%82%AA%95%AA%82%A9%82%E9%96%7B&#038;__mk_ja_JP=%83J%83%5E%83J%83i&#038;url=search-alias%3Dstripbooks&#038;tag=jn050191-22" target="_blank" >Amazon[書籍版]</a>
        </div></p>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>