---
title: Apple WatchとDraftsでワンタップ音声認識メモを実現させる
author: 魚住 惇
type: post
date: 2019-05-27T03:00:00+00:00
excerpt: Apple Watchで一回のタップで音声入力を開始する方法を考えました
url: /applewatch-drafts-16644.html
thumbnail: /wp-content/uploads/2019/05/D04CF791-C138-4726-96A3-4FEFC9EF4029-2.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snap_isAutoPosted:
  - 1558926005
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1132843897246248961";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1132843897246248961";s:5:"pDate";s:19:"2019-05-27 03:00:07";}}";'
categories:
  - iOS
  - 教師のiPad仕事術

---
「あ！そうだ、これをやろう」

そう思っていても、その後になって思いついたことそのものを忘れてしまっている。僕の身によくある現象です。特に、車の運転中など手が離せない時に、何かを思いついたとしてもメモ帳とペンを手に取るわけにもいかず、非常に困っていたのですよ。

「いやいや、それくらい思い出せるでしょ」と思う人にはそんなに必要ないかもしれませんが、僕は咄嗟に何かを思いついたとしても、メモすることを忘れてしまうと、後になって「あれ、さっきのなんだっけ？」ってなってしまうんですよ。

今回は、「あ！そうだ！」と思った瞬間にメモを取る仕組みを考えました。そう、Apple Watchでね。



## Draftsを使う
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="738" src="/wp-content/uploads/2019/05/Fotoring-Image-1024x738.jpeg" alt="" class="wp-image-16646"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

たすくま、Evernoteなど、Apple Watchにアプリをインストールすると、録音ではなく音声認識の仕組みを使ったメモが取れるアプリはそこそこ出ています。

が、そのほとんどが、アプリを起動→新規メモ→音声入力開始みたいな感じで、何度か画面をタップしないと実際に音声入力が開始されないんですよ。

これがちょっといただけない。かといって、「へいSiri！、○○とリマインダーに追加して！」って言うのも、なんかこの「へいしり！」が余分。できたらApple Watchを一回触るだけで音声入力を開始したいものです。

そこで使うアプリが、これですよ。「Drafts」

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://itunes.apple.com/jp/app/drafts-capture-act/id1236254471?mt=8&uo=4&at=11l7gE"><img decoding="async" loading="lazy" src="https://is4-ssl.mzstatic.com/image/thumb/Purple113/v4/5d/c7/41/5dc74160-3ce2-1192-0fd2-f95b71966969/source/512x512bb.jpg" alt="Drafts: Capture ‣‣ Act" class="pochi_img" width="150" height="150" /></a>
    
    <p>
    </p>
    
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://itunes.apple.com/jp/app/drafts-capture-act/id1236254471?mt=8&uo=4&at=11l7gE">Drafts: Capture ‣‣ Act</a>
      </div>
      <div class="pochi_price">
        無料
      </div>
      <div class="pochi_seller">
        <a href="https://itunes.apple.com/jp/developer/agile-tortoise/id331942785?mt=8&uo=4&at=11l7gE">Agile Tortoise</a>
      </div>
      <div class="pochi_time">
        (2019.05.26時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" rel="nofollow noopener noreferrer" target="_blank">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
    </div>
  </div>
</div>

そこそこ有名なテキストエディタなんですが、僕はこのアプリを、音声入力のinboxとしてだけ使います。

このアプリをApple Watchのコンプリケーションに追加すると、そのアイコンをタップするだけで音声認識メモが始まるようになっています。

これや、僕はこの機能が欲しかったんや。

## 感想
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2019/05/6760EA2B-A7E8-4D21-ACA4-B80BC0B32281-2.jpeg" alt="" class="wp-image-16647"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

ただどうしても、長時間の入力には向いていないようで、音声認識でプレーンテキストが出来上がっていくことに感動して長話していると、いつのまにかフリーズしているっていうこともしばしばありました。とほほ。なので、ちょっとしたフレーズとかを録音する時に使おうかなと考えています。

Apple Watchで音声入力して、後でiPhoneで見返す。これ本当に素晴らしいですわ。

手で書きながらメモを取ると、多分そのままアウトプットされるのではなくて、自分の言葉に変換されたものが出力されてると思うんですよ。音声入力はそれよりも速度が速く、思ったままをアウトプットできる良いツールです。

手軽にメモを取りたいなと考えている人は、もうこれでコンプリケーションの1つはDraftに決まりですよ。おすすめです。