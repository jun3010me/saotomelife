---
title: Windows10に対応するためにメインマシンをSandy BridgeからSkylake-Sに載せ替えた
author: 魚住 惇
type: post
date: 2016-12-04T21:44:26+00:00
url: /skylake-s-iyh-12160.html
thumbnail: /wp-content/uploads/2016/12/thumb_IMG_0147_1024.jpg
categories:
  - PC
  - 商品レビュー

---
<img decoding="async" loading="lazy" src="/wp-content/uploads/2016/12/thumb_IMG_0147_1024.jpg" alt="cpuとメモリとマザボ" title="thumb_IMG_0147_1024.jpg" border="0" width="513" height="383" />  
  
<!--more-->

[ジュン@jun3010me][1]です。

今回、予想もしなかった出費がかさみました。  
CPUとマザーボードとメモリ・・・、まさかこのタイミングでメインマシンを更新するなんてなぁ。

## 今回購入した構成

<img decoding="async" loading="lazy" src="/wp-content/uploads/2016/12/thumb_IMG_0148_1024.jpg" alt="CPU開封" title="thumb_IMG_0148_1024.jpg" border="0" width="513" height="383" /> 

今回購入した構成はこんな感じです。

### Core i5 6500

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B010T6CWI2/jn050191-22/ref=nosim/" target="_blank" ><img decoding="async" src="http://ecx.images-amazon.com/images/I/51Gq81DIpEL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B010T6CWI2/jn050191-22/ref=nosim/" target="_blank" >Intel CPU Core i5-6500 3.2GHz 6Mキャッシュ 4コア/4スレッド LGA1151 BX80662I56500 【BOX】</a></p> 
        <div class="kaerebalink-powered-date">
          posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        インテル 2015-09-02
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/gp/search?keywords=Core%20i5-6500&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FCore%2520i5-6500%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

Sandyの頃に使っていたのは2500Kだったんですが、オーバークロックそんなにしなかったし、というかVT-dの対応は欲しいしで、無印6500にしました。6600はちょっと、アップするクロック周波数と値段のバランス的に却下。

### Z170M-PLUS

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B0126R44FG/jn050191-22/ref=nosim/" target="_blank" ><img decoding="async" src="http://ecx.images-amazon.com/images/I/618ySc1ej5L._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B0126R44FG/jn050191-22/ref=nosim/" target="_blank" >ASUSTeK Intel Z170搭載 第6世代Core i7(Socket LGA1151)対応 USB3.0Type-C搭載 マザーボード Z170M-PLUS 【MATX】</a></p> 
        <div class="kaerebalink-powered-date">
          posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        Asustek
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/gp/search?keywords=Z170M-PLUS&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FZ170M-PLUS%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

僕が使っているケースがMicro−ATX用なので、このマザーボードにしました。

迷う選択しとしてH170とかもありますが、170シリーズの到達点であるZ170が最高にして定番！これ以外選択肢がありませんでした。

マザーボードにはお金を使うべし！

### Crucial DDR4 8GB x2

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00MMLUYQK/jn050191-22/ref=nosim/" target="_blank" ><img decoding="async" src="http://ecx.images-amazon.com/images/I/51B8n4yUPWL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00MMLUYQK/jn050191-22/ref=nosim/" target="_blank" >Crucial [Micron製] DDR4 デスク用メモリー 8GB x2 ( 2133MT/s / PC4-17000 / CL15 / 288pin / DR x8 Unbuffered DIMM ) 永久保証 CT2K8G4DFD8213</a></p> 
        <div class="kaerebalink-powered-date">
          posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        CRUCIAL TECHNOLOGY 2014-09-09
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/gp/search?keywords=CT2K8G4DFD8213&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FCT2K8G4DFD8213%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

Sandyの頃からメモリは16GBだったんですが、まぁ、32GBまで積むこともないなぁと思ったので、16GBのままにしました。まぁ、いいや。スロットが2つ余るから、足りなくなったらこのメモリをもう1セット買えばいいんや。

## Widnows10とSkylake-Sの組み合わせは超サクサク！

<img decoding="async" loading="lazy" src="/wp-content/uploads/2016/12/thumb_IMG_0149_1024.jpg" alt="マザボ" title="thumb_IMG_0149_1024.jpg" border="0" width="513" height="383" />  


やっばいこれ。最新CPU＋チップセットとWindows10の相性が良すぎる。というかめっちゃ速い。

無料アップデートの時にWindows10にして、「まぁ普通に動くなぁ」くらいしか思っていなかったんですが、やっぱりWindows10に合わせて発売した世代は流石だ。

## Windows10＋SandyBridgeで起こった不具合

ほんじゃ、何故「まぁ普通に動くなぁ」くらいしか思っていなかったところから、今回の購入に至ったかを話します。

まずはこの画像ね。

### Windows10にアップデートしたら音飛びが激しくなった

<img decoding="async" loading="lazy" src="/wp-content/uploads/2016/12/latency.png" alt="Latency" title="latency.PNG" border="0" width="292" height="246" />  
  
このアプリはレイテンシ、つまり遅延をモニターするアプリなんですが、緑の部分が正常、動画を再生するとレッドゾーンに一気に上がりました。

別のアプリから何のドライバが遅延を引き起こしているのかを調べた結果、HDAudioとATAPI(ディスクの読み書き)だっていうことがわかったんです。

確かにこの遅延が発生した時は、PT3で番組を録画しながら動画を再生していたので、説明がつきますね。

しかもこの音飛び問題。録画したTSファイルの再生だけでなく、<span class="b">AmazonプライムビデオやエンコードしたMP4でも同様の事が起こった</span>ため、ディスクが原因でもない。ファイルの再生に使ったアプリの問題でもない。Windows7の頃はなんとも無かったぞー！？

### 原因はデバイスドライバ

<img decoding="async" loading="lazy" src="/wp-content/uploads/2016/12/hdaudio.png" alt="Hdaudio" title="hdaudio.PNG" border="0" width="232" height="259" /> 

僕の使っている環境では、このWindowsマシンの音は録画したテレビ番組などを見る専用として使っているので、音はHDMIで出力して、映像も音もテレビで出していました。

よく「Windows10にアップデートしたらRealtekHDAudioのデバイスドライバを最新にしたら音飛びがなおったー！」とかいう話を聞いていましたが、僕の場合はインテルのグラフィックから出力された音が飛んでいるのでRealtekは関係なし。

グラボを挿そうにもマザボに空いているPCI-eのスロットもなし。

しかもSandyBridge世代のグラフィックはWindows10のサポートを終了している。  
**</p> 

<a href="http://www.intel.co.jp/content/www/jp/ja/support/graphics-drivers/000005526.html" target="_blank">対応オペレーティング・システムインテル®グラフィックス製品について</a>

</b>

もうね、買い換えしか、方法はなかったんですよ。



## 感想

結果として、最新の環境を手に入れることができ、尚且つ音飛び問題も解決しました。

Windows10用のデバイスドライバが公開されていないってのが一番痛い情報でした。これ、むやみにWindows10にアップデートしない方が良かったな。

古いマシンを使っている人で、無料期間にWindows10にアップデートした人は、困ることが起こっているならWindows7に戻すことをおすすめします。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B010T6CWI2/jn050191-22/ref=nosim/" target="_blank" ><img decoding="async" src="http://ecx.images-amazon.com/images/I/51Gq81DIpEL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B010T6CWI2/jn050191-22/ref=nosim/" target="_blank" >Intel CPU Core i5-6500 3.2GHz 6Mキャッシュ 4コア/4スレッド LGA1151 BX80662I56500 【BOX】</a></p> 
        <div class="kaerebalink-powered-date">
          posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        インテル 2015-09-02
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/gp/search?keywords=Core%20i5-6500&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FCore%2520i5-6500%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
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
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B0126R44FG/jn050191-22/ref=nosim/" target="_blank" ><img decoding="async" src="http://ecx.images-amazon.com/images/I/618ySc1ej5L._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B0126R44FG/jn050191-22/ref=nosim/" target="_blank" >ASUSTeK Intel Z170搭載 第6世代Core i7(Socket LGA1151)対応 USB3.0Type-C搭載 マザーボード Z170M-PLUS 【MATX】</a></p> 
        <div class="kaerebalink-powered-date">
          posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        Asustek
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/gp/search?keywords=Z170M-PLUS&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FZ170M-PLUS%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
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
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00MMLUYQK/jn050191-22/ref=nosim/" target="_blank" ><img decoding="async" src="http://ecx.images-amazon.com/images/I/51B8n4yUPWL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00MMLUYQK/jn050191-22/ref=nosim/" target="_blank" >Crucial [Micron製] DDR4 デスク用メモリー 8GB x2 ( 2133MT/s / PC4-17000 / CL15 / 288pin / DR x8 Unbuffered DIMM ) 永久保証 CT2K8G4DFD8213</a></p> 
        <div class="kaerebalink-powered-date">
          posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        CRUCIAL TECHNOLOGY 2014-09-09
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/gp/search?keywords=CT2K8G4DFD8213&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FCT2K8G4DFD8213%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

 [1]: https://twitter.com/jun3010me