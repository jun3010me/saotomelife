---
title: AtermWM3600RがMacBookAirでよく途切れる！という現象を解決する方法
author: 魚住 惇
type: post
date: 2013-05-29T01:07:27+00:00
url: /atermwm3600r-macbookair-trouble-3208.html
thumbnail: /wp-content/uploads/2013/07/0004bac49baf50f59cbf00d015700dc6.png
has_been_twittered:
  - yes
views:
  - 12
scc_follow_count_feedly:
  - 37
categories:
  - Mac

---
<img decoding="async" loading="lazy" title="スクリーンショット_2013-05-29_5月29日水946.png" src="/wp-content/uploads/2013/05/0004bac49baf50f59cbf00d015700dc6.png" alt="スクリーンショット 2013 05 29 5月29日水946" width="200" height="200" border="0" />

<!--more-->

最近、外でブログを書く機会が増えたので、シェアリーの<a href="http://track.affiliate-b.com/visit.php?guid=ON&a=p53310-U168671b&p=7250002R" target="_blank">WiMAX</a><img decoding="async" loading="lazy" style="border: none;" src="http://track.affiliate-b.com/lead/p53310/7250002R/U168671b" alt="" width="1" height="1" />にはよくお世話になってます。

で、前からちょくちょくあったんですが、**AtermWM3600RとMacBookAirの相性が悪い**のか、

よく通信が途切れたりしました。

 

この場合の途切れるっていうのは、パケットが詰まるのとは少し違って、

 

MacのWIFI表示がこうなります↓

<img decoding="async" loading="lazy" title="スクリーンショット_2013-05-29_5月29日水946-2.png" src="/wp-content/uploads/2013/05/514829a4f4120c8d8abfdb3c6964717c.png" alt="スクリーンショット 2013 05 29 5月29日水946 2" width="200" height="200" border="0" /> 

電波が無いんです！**いつの間にかWiMAXに繋がっていないことになってる**んです。

 

これがブログを書いている瞬間にも起こるもんだから、大問題でした。

調べてみると、よくある現象みたいで、解決策がこのサイトに載っておりました。

<p style="font-size: 18px;">
  ・<a href="http://www.nemotos.net/?p=134" target="_blank">Aterm WM3600Rで無線LANの接続が頻繁に切れる場合の対策</a>
</p>

 

ふむ、**仕様のような気もする**けど、**この設定を行うことで、回避ができる**わけですね。

一応ここにも書いておきましょう。

 

## 途切れない設定方法

 

・クイックWeb設定を開く 無線LAN設定の無線LAN設定を開く

<img decoding="async" loading="lazy" title="スクリーンショット 2013-05-29 5月29日水956 1.png" src="/wp-content/uploads/2013/05/582c647a01313201dfa860116f6dfd83.png" alt="スクリーンショット 2013 05 29 5月29日水956 1" width="216" height="93" border="0" /> 

 

・高度な設定を表示する

<img decoding="async" loading="lazy" title="スクリーンショット 2013-05-29 5月29日水958.png" src="/wp-content/uploads/2013/05/a7f22c05897458dbec2e9e6164b5b19f.png" alt="スクリーンショット 2013 05 29 5月29日水958" width="145" height="46" border="0" /> 

送信出力を**100％**に

無線優先制御機能のチェックを**外す**

無線LAN端末(子機)との通信設定を**省電力優先**にする<img decoding="async" loading="lazy" title="スクリーンショット_2013-05-29_5月29日水956.png" src="/wp-content/uploads/2013/05/2139d641c24334d1789b70d56d8ef6b3.png" alt="スクリーンショット 2013 05 29 5月29日水956" width="600" height="220" border="0" /> 

以上で作業完了です。

 

つまり、**速度よりも安定を優先する**わけですね。

確かに、この設定をするだけで、**変なタイミングで途切れることが無くなった！**気がします！

(一応、この設定を発見して、ブログを更新している今までは一度も途切れていません)

 

[K-Lab][1]さん素晴らしい情報ありがとうございました。

 [1]: http://www.nemotos.net/?p=134