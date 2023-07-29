---
title: WordPress Popular Posts 3.2.0でカスタムHTMLが使えない不具合の対応方法を調べました
author: 魚住 惇
type: post
date: 2014-12-08T02:13:23+00:00
url: /wpp-3-2-0-customhtml-10148.html
thumbnail: /wp-content/uploads/2014/12/3681be6e94a6e2112bf092c8b6cd380a.png
scc_follow_count_feedly:
  - 37
categories:
  - PC

---
<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/12/3681be6e94a6e2112bf092c8b6cd380a.png" alt="wordpress popular posts 3.2.0の不具合" title="スクリーンショット_2014-12-08_10_53_01.png" border="0" width="600" height="395" /><!--more-->

こんにちは、[ジュン@jun3010me][1]です。

先ほど、WordPressのプラグイン「WordPress Popular Posts」のバージョンアップの通知が来ていたので、アップデートしてみたんですが、

カスタムHTMLが適用出来ない不具合があったので、  
ちょっと悪戦苦闘してました。

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/12/28c2fb71ba122f4981164154531607d0.png" alt="不具合の画面" title="スクリーンショット 2014-12-08 10.53.01.png" border="0" width="366" height="562" />  
ね、酷いもんでしょ。

今は、問題解決できましたので、  
普通に表示されているかと思います。

## 超参考になったサイト

<a href="http://8wired.jp/blog/3557" target="_blank"><img decoding="async" loading="lazy" class="alignleft" align="left" border="0" src="http://capture.heartrails.com/150x130/shadow?http://8wired.jp/blog/3557" alt="" width="150" height="130" /></a><a style="color:#0070C5;" href="http://8wired.jp/blog/3557" target="_blank">WordPress Popular PostsのカスタムHTMLがエスケープされてしまう問題 | 8wired</a><a href="http://b.hatena.ne.jp/entry/http://8wired.jp/blog/3557" target="_blank"><img decoding="async" border="0" src="http://b.hatena.ne.jp/entry/image/http://8wired.jp/blog/3557" alt="" /></a>  
**本当にありがとうございました。**<br style="clear:both;" />

今回は、こちらのブログを参考にさせていただきました。  
本当に助かりました  
(´；ω；｀)

## 不具合の対処法

参考にしたサイトにも書いてあるんですが、  
ここにも記録していきたいと思います。

まず、WordPressの管理画面から、  
プラグイン→プラグイン編集→編集するプラグインを選択するところから、  
WordPress Popular Postsを選択

この文字列を、ブラウザの検索機能等を使って見つけます。

<pre class="console">$content = $this->__format_content($instance['markup']['post-html'], $data, $instance['rating']) . "\n";</pre>

見つかったら、その行を削除し、  
こっちの文章を貼り付けます。

> $content = htmlspecialchars\_decode($this->\_\_format\_content($instance\[&#8216;markup&#8217;\]\[&#8216;post-html&#8217;\], $data, $instance[&#8216;rating&#8217;]), ENT_QUOTES) . &#8220;\n&#8221;;
> 
> <p class="origin">
>   <a href="http://8wired.jp/blog/3557" target="new">WordPress Popular PostsのカスタムHTMLがエスケープされてしまう問題 | 8wired</a>
> </p>

これで、無事にカスタムHTMLが適用されました。  
(´；ω；｀)

## 感想

感想というか、感謝！です！  
(\`･ω･´)　

こういう情報がブログ等に載せられていると、  
本当に便利で、為になります。

ありがとうございまいた！  
ヽ(=´▽\`=)ﾉ

<a href="http://8wired.jp/blog/3557" target="_blank"><img decoding="async" loading="lazy" class="alignleft" align="left" border="0" src="http://capture.heartrails.com/150x130/shadow?http://8wired.jp/blog/3557" alt="" width="150" height="130" /></a><a style="color:#0070C5;" href="http://8wired.jp/blog/3557" target="_blank">WordPress Popular PostsのカスタムHTMLがエスケープされてしまう問題 | 8wired</a><a href="http://b.hatena.ne.jp/entry/http://8wired.jp/blog/3557" target="_blank"><img decoding="async" border="0" src="http://b.hatena.ne.jp/entry/image/http://8wired.jp/blog/3557" alt="" /></a>  
**まじでありがとうございました。**<br style="clear:both;" />

 [1]: https://twitter.com/jun3010me