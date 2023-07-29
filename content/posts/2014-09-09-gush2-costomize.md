---
title: '[祝公開！]WordPress無料テーマ「Gush2」を、半日かけてカスタマイズした内容を全部書く'
author: 魚住 惇
type: post
date: 2014-09-09T06:40:51+00:00
url: /gush2-costomize-9564.html
thumbnail: /wp-content/uploads/2014/09/gush2.png
scc_follow_count_feedly:
  - 37
categories:
  - ブログ考察

---
<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/09/gush2.png" alt="Gush2" title="gush2.png" border="0" width="600" height="450" /><!--more-->

こんにちは、[ジュン@jun3010me][1]です。

この度、当ブログのデザインを若干変更しました。  
具体的に言うと、テーマをGush2に変更して、これまでの見た目を再現したんです。

今回は、どうカスタマイズしたのかを、記録の意味も含めて書いていきたいと思います。  
(\`･ω･´)

## Gush2

Gush2とは、WordPressで使える無料テーマです。

<a href="http://naifix.com/2014-09-13-gush2/" target="_blank"><img decoding="async" loading="lazy" class="alignleft" align="left" border="0" src="http://capture.heartrails.com/150x130/shadow?http://naifix.com/2014-09-13-gush2/" alt="" width="150" height="130" /></a><a style="color:#0070C5;" href="http://naifix.com/2014-09-13-gush2/" target="_blank">カスタマイズしまくれ！WordPress無料テーマGush2公開</a><a href="http://b.hatena.ne.jp/entry/http://naifix.com/2014-09-13-gush2/" target="_blank"><img decoding="async" border="0" src="http://b.hatena.ne.jp/entry/image/http://naifix.com/2014-09-13-gush2/" alt="" /></a><br style="clear:both;" />



### 実はGushを使っていました

ここでは明かしませんでしたが、前まで使っていたテーマ、実は初代Gushでした。

2014年2月に、初代Gushが公開されたんですが、  
1月くらいから、公開を待ってたんです。

当時僕が探していたテーマは、  
ブロガーとして、自分色にカスタマイズし易く、  
尚且つ、Stingerではないテーマでした。

### 何故Stingerを使わなかったのか

なんかやだ  
(´・ω・｀)

たったそれだけです笑

具体的に言うと、Stingerは本当に使いやすいテーマなんですが、  
見た目がStingerなんですよね。

僕のブログを見られた時に、「あ、ブロガーがSEO狙いでStingerを使ってるぞ」とか思って欲しくないわけです。

だったらテーマを自分で作ればいいじゃない！  
という考えも出たんですが、  
それと同時に、初代Gushの存在を知ったので、

じゃあGushがいい！ってなりました。

### Gush2で気になったこと

僕がGush2を見て、気になったことは、以下のことです。

  1. サムネイルが正方形
  2. サイドバーに336サイズのAdsenseが貼れない
  3. 背景の画像が邪魔
  4. 関連記事の画像の大きさがバラバラになる
  5. SNSボタンを押しやすくしたい

だいたいこんな感じです。

たったこれだけですが、見た目は結構大きく変わりました。  
結果として、当ブログの見た目をそのままにして、  
Gush2へ移行することができました。

では、順番に振り返っていきたいと思います。

## 作業内容

### サムネイルのサイズ・比を変更する

Gush2だと、記事のサムネイルはアスペクト比が1:1で  
サイズが150×150だったので、

iPhone横向きで撮影した写真が4:3なので、  
それに合わせました。  


#### home.php

[css]the\_post\_thumbnail(array( 250,188 )[/css]

#### css

[css]  
/*&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;  
768px コンテンツ  
&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;*/  
#contents #main .home\_area .thumb\_box {  
float: left;  
margin: 0 10px 0 0;  
width: 250px;  
height: 188px;  
}  
[/css]

### #contents #mainの余白を調整する

サムネイルの幅を変更したことで、余白に違和感があったので、  
全体の幅を固定しつつ、余白を調整しました。

#### css

[css]  
/*&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;  
1024px コンテンツ  
&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;*/  
#contents #main {  
float: left;  
margin: 0 20px 0 0;  
max-width: 728px;  
padding: 20px 32px;  
border-radius: 0;  
}  
[/css]

marginの28を20に、paddingの62を32にしました。

[css]  
/*&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;  
1024px サイド  
&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;*/  
#contents #sub {  
float: left;  
margin: 0;  
width: 336px;  
text-align: left;  
padding: 0;  
}  
[/css]  
  
これでサイドバーの幅を336まで引き延ばすことに成功しました。

### 背景画像を消す

背景画像はありがたい機能なんですが、  
白ベースな当ブログでは不要だったので、削除していきました。

[css]  
/\* 全体に薄いグレーのテクスチャ \*/  
body {  
}  
[/css]  
これで、全体に設定されていた薄いグレーが消えました。

[css]  
/\* ヘッダーに濃いグレーのテクスチャ \*/  
#header {  
}  
[/css]  
これでヘッダーの濃いグレーが消えましたね。

### 関連記事の配置を揃える

iPhoneなどのスマホで関連記事を見ると、  
関連記事一覧が縦に並ぶんですが、  
NEWエントリーみたいにしっかり並んでくれないんですよね。

なので、せめて等間隔に並べました。

[css]  
/*&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;  
記事下関連記事  
&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211;*/  
#relations .rel-in .rel-in-thumb {  
float: left;  
margin: 0 10px 10px 0;  
width: 110px;  
height: 110px;  
}  
[/css]  
  
これでそれとなく並びました。  
できたら、NEWエントリーと同じ感じにサムネイルのサイズも揃えたいんですけどね。  
今回はそこまでできませんでした。

### SNSボタンを変更する

SNSボタンをスマホで押しやすくする為に、  
変更することにしました。

#### sns.php

ここのサイトを参考に、置き換えました。

<a href="http://www.medi-qa.com/wp/viral-media-sns-botton.html" target="_blank"><img decoding="async" loading="lazy" class="alignleft" align="left" border="0" src="http://capture.heartrails.com/150x130/shadow?http://www.medi-qa.com/wp/viral-media-sns-botton.html" alt="" width="150" height="130" /></a><a style="color:#0070C5;" href="http://www.medi-qa.com/wp/viral-media-sns-botton.html" target="_blank">流行りに乗れ！WordPressにバイラルメディア風のSNSボタンを設置する方法 – 副業ハック</a><a href="http://b.hatena.ne.jp/entry/http://www.medi-qa.com/wp/viral-media-sns-botton.html" target="_blank"><img decoding="async" border="0" src="http://b.hatena.ne.jp/entry/image/http://www.medi-qa.com/wp/viral-media-sns-botton.html" alt="" /></a><br style="clear:both;" />

## おわりに

うん、やっぱりGushはカスタマイズし易い構造なので、  
いじっていてとても楽しかったです  
(\*´ω｀\*)

本当はこの編集内容を記事にしようか迷ったんですけどね、  
Gush2公開の記事に触発されました。

> 先行お試しのメリットは、「Gush2 カスタマイズ」で上位表示が狙えることです！
> 
> <p class="origin">
>   <a href="http://naifix.com/2014-09-13-gush2/" target="new">カスタマイズしまくれ！WordPress無料テーマGush2公開</a>
> </p>

へへ(*´∀｀)

是非参考にしてください  
ヽ(=´▽\`=)ﾉ

こんな素敵なテーマを無料で公開してくださった  
エローラさん(@uszero800)には本当に感謝してます！

ありがとうございました！

 [1]: https://twitter.com/jun3010me