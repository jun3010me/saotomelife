---
title: iOS12のショートカットアプリで帰宅時にやることを自動化する
author: 魚住 惇
type: post
date: 2018-09-24T03:28:56+00:00
url: /ios12-shortcutapp-gohome-14895.html
thumbnail: /wp-content/uploads/2018/09/E067C57B-ED28-40F9-BFEA-1FB0D6E36C90.jpeg
snap_isAutoPosted:
  - 1537759750
wp-seo-meta-robots:
  - 'a:0:{}'
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:227:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;}}";'
categories:
  - iOS
tags:
  - iPad活用

---
iOS12から、色んなアプリの作業を自動化するアプリworkflowがAppleの仲間になり、「ショートカット」というアプリとなって配信されるようになりました。しかもSiriからも登録した内容が実行できるという仕組みも出来て、活用方法が増えそうです。

今回は、その機能を使って、僕が平日に必ずやってることを自動化してみます。

## 3つの作業を自動化
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1280" height="924" src="/wp-content/uploads/2018/09/1D03396A-A849-4450-8487-ED80DD2D69D0.jpeg" alt="" class="wp-image-14893"  sizes="(max-width: 1280px) 100vw, 1280px" /> </figure> 

これまで、帰宅時にやらなければならなかったタスクはこの3つ。

  1. 嫁に「帰るね」とLINEする
  2. リマインダーを見る
  3. たすくまの「通勤(帰り)」を開始する

特に1番目のタスクが未実行のまま家に着いてしまうと、それはそれは大変なことに繋がります。絶対に実行しなくてはならない大事なタスクです。

そして、帰宅途中にドラッグストアに寄り、買い物リストに従って買い物をする。これも重要なタスクです。

あとはたすくまの操作。これを忘れて運転中に思い出した日にゃ、焦りが募ります。「しまったあああああ！」となります。

今までこの3つのタスクをそれぞれやっていたところを自動化出来れば、タスク実行への敷居が下がるというもの。その思いで作ってみました。

## ハートマークを付けなさい！
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1280" height="925" src="/wp-content/uploads/2018/09/B5DA4E8B-1DD3-4B43-B67C-AA2BF9AF71AD.jpeg" alt="" class="wp-image-14890"  sizes="(max-width: 1280px) 100vw, 1280px" /> </figure> 

<div class="voice">
  <figure class="voice-img-right"><figure><img decoding="async" src="http://jun3010.me/files/yomes.jpg" alt="嫁" /></figure> <figcaption class="voice-img-description">嫁</figcaption> </figure> 
  
  <div class="voice-text-left">
    <p>
      この「帰るぜよ」はなんかやだ！ちゃんとハートマーク付けて送ってよ！
    </p>
  </div>
  
  <p>
    ショートカットがまだたすくまやLINEに対応していないので、とりあえずLINEの代用としてメッセージに変更しました。そして嫁の強い要望により、メッセージをシンプルな「帰るぜよ」から「今から帰るね(ハートマーク)」と愛を込めた言葉に変更しました。僕は「帰るぜよ」を送ることそのものに愛を込めて自動化したわけですが、嫁に伝えるにはもっと分かりやすい言葉で表現する必要がありました。
  </p>
  
  <h2>
    Siriに登録して音声で実行する
  </h2><figure>
  
  <img decoding="async" loading="lazy" class="alignnone size-full wp-image-14891" src="/wp-content/uploads/2018/09/756E151E-5416-46BC-8B3E-5B44C4571862.jpeg" width="1280" height="859"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
  
  <p>
  </p>
  <p>
    &nbsp;
  </p>
  <p>
    最後にやったのが、このショートカットをSiriに話しかけて実行出来るようにすることでした。
  </p><figure>
  
  <img decoding="async" loading="lazy" class="alignnone size-full wp-image-14892" src="/wp-content/uploads/2018/09/4949E891-6984-427E-A3D6-02162BC40322.jpeg" width="1183" height="1280"  sizes="(max-width: 1183px) 100vw, 1183px" /></figure>
  
  <p>
  </p>
  <p>
    Siriへの登録も結構簡単で、そのショートカットの編集画面の中にあるボタンから、Siriの登録画面を出すだけでした。そこで録音すると、その単語で実行できるようになります。
  </p>
  
  <h2>
    もっと出来ることが増えるはず
  </h2>
  
  <p>
    いやーこれだけでも便利なんですが、2018年9月現在だと、アプリ側がURLスキームに対応していても、ショートカットに対応していないとそれが活かされないのが少し残念です。たすくまも、workflow時代はテキストにURLスキームを書いて実行できたはずなんですけどね、ショートカットになってからは出来ませんでした。
  </p>
  <p>
    ショートカットに対応するアプリのコードの書き方があるのかしら？きっとこれから対応するアプリがどんどん増えると思います。
  </p>
  <p>
    今でも例えば「帰る」とSiriに話したら、現在地から自宅までをナビするとかなら、簡単にやれそうですね。(ひょっとしたらそれくらいは標準で出来るのか?)
  </p>
  <p>
    ショートカットのリンクを公開していますので、使ってみてい方はアクセスしてみてください。
  </p>
  <p>
    <a href="https://www.icloud.com/shortcuts/451a082db0cc41bf9740ea060d1c0ea9" target="_blank" rel="noopener noreferrer">https://www.icloud.com/shortcuts/451a082db0cc41bf9740ea060d1c0ea9</a>
  </p>
</div>

<div class="voice">
  <h2>
    20180924追記
  </h2><figure>
  
  <img decoding="async" loading="lazy" class="slproImg" src="/wp-content/uploads/2018/09/slproImg_201809242136020.jpg" alt="" width="500" height="360" /></figure>
  
  <p>
  </p>
  <p>
    &nbsp;
  </p>
  <p>
    twitterでコメントをいただきました。ありがとうございました
  </p>
</div>

<div class="voice">
  <blockquote class="twitter-tweet" data-conversation="none" data-lang="ja">
    <p dir="ltr" lang="ja">
      前に作った、テキストをLINEに送る自作アクションです。よければ使ってみてください。<br />もともとLINEはサポートされていたのですが、WorkflowがAppleに買収されたタイミングで削除されました。<a href="https://t.co/aCnBq4i3FJ">https://t.co/aCnBq4i3FJ</a> <a href="https://t.co/t23MUYmDxt">pic.twitter.com/t23MUYmDxt</a>
    </p>
    <p>
      — しかさω (@four_or_three) <a href="https://twitter.com/four_or_three/status/1044195452642459649?ref_src=twsrc%5Etfw">2018年9月24日</a>
    </p>
  </blockquote>
  
  <p>
  </p>
  <p>
    &nbsp;
  </p>
  <p>
    それを元に少し改良しました。具体的にいうとたすくまの起動をURLスキームの読み込みを通して、リピートタスクを実行するようにしました。
  </p>
  <p>
    それと、リマインダーの読み上げが、項目の名前を繋げて読み上げるだけだったので、最初のタスクから最後の手前までのタスク名に「と」を追加したのと、最後のタスクに「をやりましょう」を付けることで自然な文章に読み上げるように工夫しました。
  </p>
</div>

<div class="voice">
  <div class="pochireba" style="text-align: left; font-size: small; padding: 20px 0; zoom: 1; overflow: hidden;">
    <figure><a href="https://itunes.apple.com/jp/app/%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%82%AB%E3%83%83%E3%83%88/id915249334?mt=8&uo=4&at=11l7gE" target="_blank" rel="noopener noreferrer"><img decoding="async" loading="lazy" class="pochi_img" style="float: left; margin: 0 15px 0 0; width: 60px; height: 60px;" src="https://is2-ssl.mzstatic.com/image/thumb/Purple118/v4/c8/06/8f/c8068fbe-ee31-a1c9-5767-df42f1707cb1/source/60x60bb.jpg" alt="ショートカット" width="60" height="60" /></a></figure>
    
    <p>
    </p>
    
    <div class="pochi_info" style="text-align: left; zoom: 1; overflow: hidden;">
      <div class="pochi_name">
        <a href="https://itunes.apple.com/jp/app/%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%82%AB%E3%83%83%E3%83%88/id915249334?mt=8&uo=4&at=11l7gE" target="_blank" rel="noopener noreferrer">ショートカット</a>
      </div>
      <div class="pochi_price" style="display: inline;">
        無料
      </div>
      <div class="pochi_time" style="font-size: x-small; display: inline;">
        (2018.09.24時点)
      </div>
      <div class="pochi_seller">
        <a href="https://itunes.apple.com/jp/developer/apple/id642218247?uo=4&at=11l7gE" target="_blank" rel="noopener noreferrer">Apple</a>
      </div>
      <div class="pochi_post" style="font-size: x-small;">
        posted with <a href="http://pochireba.com" target="_blank" rel="nofollow noopener noreferrer">ポチレバ</a>
      </div>
    </div>
  </div>
</div>

## 20190530追記

メッセージの部分をもう少し賢く送るように改良しました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="yLh2x9LOJ2">
    <a href="http://jun3010.me/yome-kitaku-message-shortcut-16666.html">嫁の機嫌を損ねずワンタップでメッセージを送るショートカット「今から帰るね」</a>
  </blockquote>
</div></figure>