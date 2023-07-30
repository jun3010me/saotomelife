---
title: 検索順位に影響を与えている「?from=xiaodiaomao.com」
author: 魚住 惇
type: post
date: 2019-06-03T03:00:00+00:00
excerpt: 変な引数をくっつけたままURLがインデックスされていることを発見しました。
url: /canonicalurl-xiao-16694.html
thumbnail: /wp-content/uploads/2019/06/7ff58bc3b2ff80b48d6eaa8b5c87b1dc-1.png
wp-seo-meta-robots:
  - 'a:0:{}'
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snap_isAutoPosted:
  - 1559530864
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1135380855235284993";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1135380855235284993";s:5:"pDate";s:19:"2019-06-03 03:01:05";}}";'
categories:
  - 考察

---
 

当ブログは3月12日以降、かなり検索順位が下落しました。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="318" height="208" src="/wp-content/uploads/2019/06/f1cd0e6c976288e4774eafe27e2175c1.png" alt="" class="wp-image-16689"  sizes="(max-width: 318px) 100vw, 318px" /></figure>
</div>

もう、ほんと、ね。気が変になりそう。そんな4月でした。

この現象、実は過去にも経験していまして、その頃の記事を読んで「あれ、今回もコアアルゴリズムのアップデートの影響というよりかは、キーワードの乱用が原因なんじゃ？」と思うようになりました。

当時の記事はこちらです。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="V3wP6gB42P">
    <a href="http://jun3010.me/google-rank-9122.html">Googleの検索順位が急落してから、戻るまでに頑張ったことを全部書くよ</a>
  </blockquote>
</div></figure> 

でもね、どうもそれだけじゃなかったらしいんですよ。

## 「?from=xiaodiaomao.com」が付いたURL

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="634" height="139" src="/wp-content/uploads/2019/06/c316f39f56e1d6003cd9f6a6603f0ccb.png" alt="" class="wp-image-16692"  sizes="(max-width: 634px) 100vw, 634px" /></figure>
</div>

僕が経験した検索順位の下落は「教師　手帳」というキーワードでした。スクールプランニングノートの公式手帳達人として学事出版より認めてもらって以降、このブログでも本職が教師であることを語り、この手帳が本当に使いやすい！という内容で記事を書いていました。その効果があってか、「教師　手帳」で検索すれば5位くらいには表示されていました。

しかし、2019年3月12日以降は検索結果にブログが表示されなくなりました。しばらく凹み、しばらく悩んだ末に思い当たったのが、手帳名のキーワードの乱用でした。複数の記事タイトルに「スクールプランニングノート」を入れてしまったためか、SEO的にやってはいけない行為としてGoogleに判断されてしまったようでした。以前も僕は、スタバの「フラペチーノ」に関するページを作成しまくったことが原因で、検索順位が下落した過去がありました。その頃の経験を活かして、記事タイトル内にはなるべくキーワードを入れないようにすることと、WordPressのカテゴリ化してまとめるといった記事の整理整頓の作業も行いました。

その作業の一環として、ブログタイトル内に「手帳」を含めてみました。僕としては、学校の先生方に最適な手帳を勧めたいという想いを込めたつもりでした。しかし、これが検索順位に悪い影響を出す結果となりました。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="883" height="650" src="/wp-content/uploads/2019/06/7ff58bc3b2ff80b48d6eaa8b5c87b1dc.png" alt="" class="wp-image-16690"  sizes="(max-width: 883px) 100vw, 883px" /></figure>
</div>

本来はスクールプランニングノートを紹介するページを上位に戻したいと考えていたのに、記事タイトルに「手帳」と入れてしまったので、トップページそのものが検索結果に出てくるようになりました。これはこれで良いのかもしれませんが、問題は検索結果に表示された時にくっついていたURLの引数です。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="634" height="139" src="/wp-content/uploads/2019/06/a071b09be3c68afdb48b7e235c0aa673.png" alt="" class="wp-image-16688"  sizes="(max-width: 634px) 100vw, 634px" /></figure>
</div>

「?from=xiaodiaomao.com」という文字列がくっついています。この妙な引数がくっついたままGoogleにインデックスされた感じがします。

この問題については、こちらのサイトでも話題になっていました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://stackoverflow.com/questions/50410905/google-lists-websites-with-the-suffix-from-xiaodiaomao-com">}}
</div></figure> 

本来ならCanonical Linkタグというものをページ内に入れて、引数部分を含んだURLをインデックスしないようにすることで対策できるものです。

WordPressでサイトを作っているのなら、投稿したページ全てに自動でCanonical Linkタグが付けられます。

ただ、サイトのトップページはその設定から除外されています。nextなどの引数を使う可能性があるためです。ブログタイトルをいじらなきゃよかったなって今なら思いました。

## スパムレポートを送信して経過観察

このブログの場合は「手帳」というキーワードをブログのサブタイトルにも付けてしまったことから起こりました。

「xiaodiaomao.com」で検索してみると、そのサイト名がURLにくっついてインデックスされたサイトがじゃんじゃん出てきます。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="624" height="1113" src="/wp-content/uploads/2019/06/3d524f677dcffd8378023e5c986893ff.png" alt="" class="wp-image-16691"  sizes="(max-width: 624px) 100vw, 624px" /></figure>
</div>

中には、町役場のサイト(ドメインが.tvなので怪しい)や、ed.jpなどの教育機関のドメインのサイトも出てきます。やられていますね。

とりあえずこの中国系のサイトと思われるURLの存在が怪しいので、以下のリンクからGoogleにスパムレポートを送りました。とりあえず様子を見ようと思います。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://support.google.com/webmasters/answer/93713?hl=ja">}}
</div></figure> 

## 今後について

検索順位が下落して、「これではだめだ。また1から頑張ろう」と思ってから、毎日更新を心がけてきました。SEO的には更新頻度はそこまで影響は出ないらしいんですが、気持ちの面でいうと、アウトプットを心がけるようになったり、アウトプットを意識しながらインプットするような生活を送るようにも生活が変化しました。

そういう意味では、どうしたらブログを発展させることができるのかを考えることそのもに意味があるんだなということが分かりました。今回のURL引数騒動も、その行動の一環です。

ブログって、本当に面白い存在だなって思います。書いた内容については良いものは反応がもらえ、悪いものは検索結果という形での反応が現れる。ある意味分かりやすくて個人的には好きです。

中にはブログ無理ゲーとか言っている人たちもいますけど、自分が自由に語れる空間があって、言いたいことを言いたいだけ書くことができる。そんな素敵な場は他にはなかなか見つかりません。

どうか今回の問題も、解決しますように。