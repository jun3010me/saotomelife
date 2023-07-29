---
title: マイナンバーのシステム障害は一体誰のせいか
author: 魚住 惇
type: post
date: 2016-08-29T13:58:12+00:00
url: /mynumber-systemtrouble-12033.html
thumbnail: /wp-content/uploads/2016/08/3bbc363c2ddc81a48bcefa61255d84e5.png
categories:
  - 考察

---
<img decoding="async" loading="lazy" src="/wp-content/uploads/2016/08/3bbc363c2ddc81a48bcefa61255d84e5.png" alt="15歳から学ぶマイナンバーの表紙抜粋" title="スクリーンショット 2016-08-29 22.26.53.png" border="0" width="290" height="208" />  
  
(画像は15歳から学ぶマイナンバーより抜粋しました)<!--more-->

[ジュン@jun3010me][1]です。

この記事は2016年8月29日の夜に書いているんですけどね、偶然、このニュース記事を見つけたことから始まったんですよ。

<a href="http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" target="_blank"><img decoding="async" loading="lazy" class="alignleft" align="left" border="0" src="http://capture.heartrails.com/150x130/shadow?http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" alt="" width="150" height="130" /></a><a style="color:#0070C5;" href="http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" target="_blank">マイナンバーのシステム障害、富士通に賠償請求へ：朝日新聞デジタル</a><a href="http://b.hatena.ne.jp/entry/http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" target="_blank"><img decoding="async" border="0" src="http://b.hatena.ne.jp/entry/image/http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" alt="" /></a>  
**マイナンバーカード（個人番号カード）の発行がシステムトラブルで大きく遅れた問題で、地方公共団体情報システム機構は２９日までに、原因となったサーバーを納入した富士通に損害賠償を求める方針を固めた。請求額は精査中で、上限は契約額の約６９億円となる。**<br style="clear:both;" />

マイナンバーを管理するためのサーバで、不具合が起こったから、そんな不具合が起こるサーバを作った富士通を訴えてやるぅぅぅ！という内容の記事ですね。

そもそもマイナンバーのサーバはどこが手がけているのかというと、NTTを中心とした5社連合です。

> NTTコミュニケーションズを代表とし、ほかにNTTデータと富士通、NEC、日立製作所が参加するコンソーシアムが落札した。
> 
> <p class="origin">
>   <a href="http://itpro.nikkeibp.co.jp/article/NEWS/20140331/547394/" target="new">ニュース &#8211; マイナンバー中枢システムはNTTコムなど「大手5社連合」が異例の落札、114億円で：ITpro</a>
> </p>

まぁ大手揃いだわね。こんなうまい案件他にはないもん。

でも、トラブル続きで、マイナンバーの発行は円滑に進んだとは言えない現状がありました。

<a href="http://www.sankei.com/politics/news/160427/plt1604270057-n1.html" target="_blank"><img decoding="async" loading="lazy" class="alignleft" align="left" border="0" src="http://capture.heartrails.com/150x130/shadow?http://www.sankei.com/politics/news/160427/plt1604270057-n1.html" alt="" width="150" height="130" /></a><a style="color:#0070C5;" href="http://www.sankei.com/politics/news/160427/plt1604270057-n1.html" target="_blank">【マイナンバー】システム障害で機構の無責任体質露呈　重い総務省の責任（1/2ページ） &#8211; 産経ニュース</a><a href="http://b.hatena.ne.jp/entry/http://www.sankei.com/politics/news/160427/plt1604270057-n1.html" target="_blank"><img decoding="async" border="0" src="http://b.hatena.ne.jp/entry/image/http://www.sankei.com/politics/news/160427/plt1604270057-n1.html" alt="" /></a>  
<span style="color: #808080;font-size: 80%;">自治体の窓口では１月以降、カード交付時にデータ処理を行う機構の中継サーバーの障害が１日に１回のペースで発生。本来不要の再起動が５０回以上も繰り返された。このほか大規模な障害が７回も発生したため、処理が &#8230;</span>  
**自治体の窓口では１月以降、カード交付時にデータ処理を行う機構の中継サーバーの障害が１日に１回のペースで発生。本来不要の再起動が５０回以上も繰り返された。このほか大規模な障害が７回も発生したため、処理ができず申請者にカードを手渡せないケースが続発した。**<br style="clear:both;" />

大手5社の大連合が作ったサーバが、なんでこんなトラブル起こしてんの？？？という疑問があるわけですよ。  
今回はその辺について、少し話したいなと思いました。

## 最大の原因はサーバの仕様にあるんじゃねーの？

まずこれを読んでいるみなさんに注目していただきたいのが、こちらのサイトです。  
**</p> 

<a href="https://www.j-lis.go.jp/about/announce/press/press20160427.html" target="_blank">地方公共団体情報システム機構 カード管理システムの中継サーバに生じた障害原因の特定と対応について</a>

</b>  
地方公共団体情報システム機構。ここが住基ネットを含めて、マイナンバー関係の仕事をしている地方公共団体です。上記リンクでは、マイナンバーのシステム障害についての対応についてのPDFが公開されています。

僕が特に「(ﾟДﾟ)ﾊｧ?」ってなったのは、こちらの参考資料です。  
**</p> 

<a href="https://www.j-lis.go.jp/data/open/cnt/3/2064/1/j-lispress160427_2.pdf" target="_blank">カード管理業務の円滑化に向けて講じてきた対応策について &#8211; j-lispress160427_2.pdf</a>

</b>  
  
そこにはこう書かれています。

> 処理を実行するためのメモリ容量に比して大量の通信を処理しなければならなくなり、処理時間が多くかかるようになったため、カード管理業務サーバにおけるメモリ割り当て量を512MBから２GB（４倍）に拡張(3/11)。 
> 
> <p class="origin">
>   <a href="https://www.j-lis.go.jp/data/open/cnt/3/2064/1/j-lispress160427_2.pdf" target="new">カード管理業務の円滑化に向けて講じてきた対応策について &#8211; j-lispress160427_2.pdf</a>
> </p>

まって。メモリ512GBから2GBに拡張？？  
<span class="futoaka">カード管理業務サーバのメモリが今まで512MBだったの？少なすぎるでしょ。</span>  
<span class="ll">iPhone6sのメモリだって2GBなんだからさぁ</span>

あれだけの巨額の予算を投じたのに、なんで鯖のメモリがMB単位なの？  
**</p> 

<a href="http://itpro.nikkeibp.co.jp/atcl/watcher/14/334361/012900173/" target="_blank">記者の眼 &#8211; マイナンバー政府予算は1100億円超、周知・広報の不足が落とし穴に：ITpro</a>

</b>

ここで、放送大学が大学内でマイナンバーを管理する為にサーバをこしらえた際に作られた仕様書を見てみましょう。

**</p> 

<a href="http://www.ouj.ac.jp/hp/osirase/chotatsu/pdf/%E3%83%9E%E3%82%A4%E3%83%8A%E3%83%B3%E3%83%90%E3%83%BC%E7%AE%A1%E7%90%86%E3%82%B7%E3%82%B9%E3%83%86%E3%83%A0%E4%BB%95%E6%A7%98%E6%9B%B8_20160202z.pdf" target="_blank">マイナンバー管理システム仕様書_20160202z.pdf</a>

</b>

> 1.1.2Intel社製Xeon E3-1281v3(3.70GHz/4コア)同等以上のCPUを1基以上搭載すること。1.1.3メモリを8GB以上搭載すること。
> 
> <p class="origin">
>   <a href="http://www.ouj.ac.jp/hp/osirase/chotatsu/pdf/%E3%83%9E%E3%82%A4%E3%83%8A%E3%83%B3%E3%83%90%E3%83%BC%E7%AE%A1%E7%90%86%E3%82%B7%E3%82%B9%E3%83%86%E3%83%A0%E4%BB%95%E6%A7%98%E6%9B%B8_20160202z.pdf" target="new">マイナンバー管理システム仕様書_20160202z.pdf</a>
> </p>

ほらね、通信制の大学ですら、あの番号を管理しようと思ったら8GB以上のメモリを積ませるって言ってんの。  
個人的には16GBくらい欲しいと思っちゃうけどね。

## 何故か矛先は富士通へ

ここで最初に貼ったニュースのリンクをもう一度貼ってみます。  
<a href="http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" target="_blank"><img decoding="async" loading="lazy" class="alignleft" align="left" border="0" src="http://capture.heartrails.com/150x130/shadow?http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" alt="" width="150" height="130" /></a><a style="color:#0070C5;" href="http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" target="_blank">マイナンバーのシステム障害、富士通に賠償請求へ：朝日新聞デジタル</a><a href="http://b.hatena.ne.jp/entry/http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" target="_blank"><img decoding="async" border="0" src="http://b.hatena.ne.jp/entry/image/http://www.asahi.com/articles/ASJ8Y541HJ8YULFA01K.html" alt="" /></a>  
**マイナンバーカード（個人番号カード）の発行がシステムトラブルで大きく遅れた問題で、地方公共団体情報システム機構は２９日までに、原因となったサーバーを納入した富士通に損害賠償を求める方針を固めた。請求額は精査中で、上限は契約額の約６９億円となる。**<br style="clear:both;" />

あらあら、責任の矛先が富士通に向いてますねぇ。  
でも、普通に考えたら、富士通が卸したサーバだけが悪いとは考えにくいんですよ。

だって、仕様書は出てるはずですし。メーカーはその仕様の内容に沿って最高の仕事をしたでしょうし。

じゃあ、今回のマイナンバーの中継サーバの仕様を決めたのは一体誰でしょう。  
という話になってきますね。

## 感想

ネットで公開されているPDFを頼りにするだけだと、どうしてもここまでが考える限界のようです。  
とりあえず言えるのは、

ここにある地方公共団体情報システム機構の役員の経歴

**</p> 

<a href="https://www.j-lis.go.jp/data/open/cnt/3/1087/1/yakuin_keireki.pdf" target="_blank">yakuin_keireki.pdf</a>

</b>  
どうみても天下りです。本当にありがとうございました。

### 参考リンク

**</p> 

<a href="http://hayashi-rin.net/post-3351" target="_blank">マイナンバーのシステム障害原因と対策をよく見ると解決したように思えません | Hayashi No Oto</a>

</b>  
**</p> 

<a href="http://wachauf.cocolog-nifty.com/blog/2016/06/post-45c5.html" target="_blank">民間会社なら相手にさえされない方々: Wach auf !</a>

</b>

 [1]: https://twitter.com/jun3010me