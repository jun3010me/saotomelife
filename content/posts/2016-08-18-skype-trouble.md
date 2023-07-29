---
title: Skypeの音声通話が何も聞こえず10数秒で切れるなら、ここをチェックするのだ
author: 魚住 惇
type: post
date: 2016-08-17T15:45:47+00:00
url: /skype-trouble-11987.html
thumbnail: /wp-content/uploads/2016/08/skype.png
categories:
  - PC

---
<img decoding="async" loading="lazy" src="/wp-content/uploads/2016/08/skype.png" alt="skype" title="skype.png" border="0" width="249" height="181" />  
<!--more-->ここ最近Skypeの音声通話が、まともに会話できず11秒とか12秒とかで切れてしまう現象に悩まされていた、

[ジュン@jun3010me][1]です。

今回は、なんとか原因の解明に成功したので、ブログにまとめたいと思います。

## Skype不具合の基本

もし、Skypeを使おうとして、まともに通話出来ないとかいう不具合に直面したら、まずは疑う場所っていうのがあるわけですよ。順番に考えていきますね。

### 1:パソコンのスピーカーやマイクに問題がある

<img decoding="async" loading="lazy" src="/wp-content/uploads/2016/08/df20470ffa734d141f5d8f21ddb5fc18.png" alt="スクリーンショット 2016 08 18 00 27 42" title="スクリーンショット_2016-08-18_00_27_42.png" border="0" width="397" height="365" />  
  
Skypeアプリの環境設定から、まずは物理デバイス、つまりスピーカーやマイクやカメラが正常に作動するのかをチェックしましょうか。  
ここでマイクの音が拾えないなら、マイクが悪い、スピーカーから音が鳴らないなら、スピーカーが壊れている。それか、今使いたいマイクやスピーカーを選択出来ていないのか。

そんなところが原因でしょう。

僕の場合は、ここは問題ありませんでした。

### 2:インターネット回線が遅い

こいつは致命的な問題ですが、マンションやアパートなどの集合住宅の場合は、いくら光回線であっても、建物単位で回線を共有するので時間帯によっては混み合う場合があります。

僕の場合は、同じWIFIに接続したiPhoneからはSkypeの通話ができたので、回線的にも問題がありませんでした。

## 今回の原因はセキュリティソフトのファイアウォール

<img decoding="async" loading="lazy" src="/wp-content/uploads/2016/08/2574432b258cdc15b73ac456aa016d1e.png" alt="スクリーンショット 2016 08 18 00 19 59" title="スクリーンショット 2016-08-18 00.19.59.png" border="0" width="598" height="307" />  
  
では、今回の原因は一体どこにあったのか。という結論が、ファイアウォールでした。

そもそも最近になって、Skypeが繋がらなくなった。ということは、以前までは使えていたんです。こちらの環境は変えていないのに、一体どこに問題があるのだろう。

iPhoneからはSkypeができるのに、iMacからSkypeが出来ないのは何故だ。

そんなところで知り合いに教えてもらったのが、「SkypeがP2Pからクラウドに移行した」というニュースでした。

**</p> 

<a href="http://japan.zdnet.com/article/35086262/" target="_blank">マイクロソフト、Skypeの土台技術をPtoPからAzureへほぼ移行完了 &#8211; ZDNet Japan</a>

</b>  
  
なるほど。Skypeが出来なくなったタイミングと、ほぼ一致するではないか。

それと、今日のトラブルシューティングで( ﾟдﾟ)ﾊｯ!と思いだした<span class="b">「ネットワークで接続できない問題が起こったら、まずはファイアウォールを疑え」</span>という言葉。何かの講習会で残っていたんですね。

これを試そうと思ったわけですよ。

僕が今現在の環境で使っているセキュリティソフトは、ESETなので、その設定を見直していきました。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00H6Y6OO4/jn050191-22/ref=nosim/" target="_blank" ><img decoding="async" src="http://ecx.images-amazon.com/images/I/51fCj58fCEL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00H6Y6OO4/jn050191-22/ref=nosim/" target="_blank" >ESET ファミリー セキュリティ 5台3年版（最新版）</a></p> 
        <div class="kaerebalink-powered-date">
          posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        キヤノンITソリューションズ 2013-12-12
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/gp/search?keywords=ESET%20%83t%83%40%83~%83%8A%81%5B%20%83Z%83L%83%85%83%8A%83e%83B&#038;__mk_ja_JP=%83J%83%5E%83J%83i&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FESET%2520%25E3%2583%2595%25E3%2582%25A1%25E3%2583%259F%25E3%2583%25AA%25E3%2583%25BC%2520%25E3%2582%25BB%25E3%2582%25AD%25E3%2583%25A5%25E3%2583%25AA%25E3%2583%2586%25E3%2582%25A3%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

ちなみにこのESETファミリーセキュリティ、5台のデバイスを3年間守ってくれてこの価格なので、「とりあえず入れないよりかはマシか」という感じにインストールしてみました。

MacもWindowsもAndroidにも対応しているので、台数と年数と価格のバランスが素晴らしかったのですよ。

要はこいつが、クラウドに移行したSkypeの通信を怪しいと思ったのか、遮断しとったわけですね。  
なので、ESETの環境設定のネットワークより、Skypeというアプリケーションの通信を許可してよ！という設定を行ったら、すんなりと通話ができるようになりました。

良かった良かった。

## 感想

こういったトラブルシューティングって、原因がどこにあるのかの、区分けが結構重要で、そして面倒臭い部分なんですよ。

ソフトウェアの設定は大丈夫だった  
↓  
ハードウェアも問題無かった  
↓  
インターネット回線も問題無かった  
↓  
？？？？

という状態だったので、次からは他のネットワーク系のアプリケーションであっても、ファイアウォールのチェックは必要ですね。元々趣味で鯖をやっていたのに、ここに気づくのに時間がかかってしまったことが、少し恥ずかしい。  
(´･ω･\`)

とはいえ、<span class="b">ESETファミリセキュリティのファイアウォールがSkype通話を遮断している</span>という事実がこの記事執筆時（2016年8月18日現在）にはあったということは紛れもない事実なので、他のセキュリティソフトを使っている人も、参考にしてみるといいかなと思います。  
(\`･ω･´)

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00H6Y6OO4/jn050191-22/ref=nosim/" target="_blank" ><img decoding="async" src="http://ecx.images-amazon.com/images/I/51fCj58fCEL._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00H6Y6OO4/jn050191-22/ref=nosim/" target="_blank" >ESET ファミリー セキュリティ 5台3年版（最新版）</a></p> 
        <div class="kaerebalink-powered-date">
          posted with <a href="http://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        キヤノンITソリューションズ 2013-12-12
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="http://www.amazon.co.jp/gp/search?keywords=ESET%20%83t%83%40%83~%83%8A%81%5B%20%83Z%83L%83%85%83%8A%83e%83B&#038;__mk_ja_JP=%83J%83%5E%83J%83i&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="http://hb.afl.rakuten.co.jp/hgc/13c945af.7f4d37c0.13c945b0.d426235d/?pc=http%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FESET%2520%25E3%2583%2595%25E3%2582%25A1%25E3%2583%259F%25E3%2583%25AA%25E3%2583%25BC%2520%25E3%2582%25BB%25E3%2582%25AD%25E3%2583%25A5%25E3%2583%25AA%25E3%2583%2586%25E3%2582%25A3%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

 [1]: https://twitter.com/jun3010me