---
title: 嫁の機嫌を損ねずワンタップでメッセージを送るショートカット「今から帰るね」
author: 魚住 惇
type: post
date: 2019-05-30T03:00:00+00:00
excerpt: 毎日手作業で行なっていたタスクを、自動化しましょう。今回は毎日必ず送る嫁へのメッセージを自動化しました。
url: /yome-kitaku-message-shortcut-16666.html
thumbnail: /wp-content/uploads/2019/05/IMG_1057.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1559185224
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1133931137196146688";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1133931137196146688";s:5:"pDate";s:19:"2019-05-30 03:00:25";}}";'
categories:
  - iOS
  - 教師のiPad仕事術
tags:
  - iPad活用

---
<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="669" height="1280" src="/wp-content/uploads/2019/05/Image-2019-05-29-16-29.jpeg" alt="" class="wp-image-16659"  sizes="(max-width: 669px) 100vw, 669px" /></figure>
</div>

少し長めですが、これが今回組んでみた「今から帰るね」ショートカットです。ブロックとしては長いものの、仕組みはとっても簡単です。

このショートカットを利用すると、こんな感じのメッセージをアイコンをタップするだけで送信できます。

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="899" height="327" src="/wp-content/uploads/2019/05/Image-2019-05-29-16-33.jpeg" alt="" class="wp-image-16660"  sizes="(max-width: 899px) 100vw, 899px" /></figure>
</div>

どうです？素晴らしい文章でしょう？「お疲れ様」ではなく「お疲れさま」に、様をひらがなにすることで、親近感を持たせ、現在地から自宅までの車の移動時間を計算してメッセージ本文に入れるんですよ。更に、職場を出発するのが19時付近となってしまった場合は、「遅くなってごめんね」を追加するようにしました。こうすることで、帰宅が遅くなってしまった場合にのみ文章を変えているため、自動で心を込めた文章をも追加できるというわけです。

以前似たようなショートカットを作成したのですが、今回はもうちょっとだけ改良してみることにしました。前回作成した内容はこちらをご覧になってください。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="EF0ICZxmES">
    <a href="http://192.168.11.200:8000/ios12-shortcutapp-gohome-14895.html">iOS12のショートカットアプリで帰宅時にやることを自動化する</a>
  </blockquote>
</div></figure> 

では、今から部品ごとに解説します。

## 現在地から自宅までの時間を計算する

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="906" src="/wp-content/uploads/2019/05/Image-2019-05-29-16-37.jpeg" alt="" class="wp-image-16663"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

ここでは、iOSのマップを使って現在地から自宅までの移動時間を取得して、「時間」という変数に入れています。この「時間」変数は、後に出てくるメッセージの本文に使います。

## 19時付近になったら「遅くなってごめんね」を挿入する
<figure class="wp-block-image">

<img decoding="async" loading="lazy" width="1024" height="912" src="/wp-content/uploads/2019/05/IMG_1074-2-1024x912.jpeg" alt="" class="wp-image-16678"  sizes="(max-width: 1024px) 100vw, 1024px" /> </figure> 

日時で「19時30分」を指定し、その後でショートカットを実行した時刻との差を計算させます。

もし、差が20分以内であれば、「一言」変数に「遅くなってごめんね」という文字列が挿入されます。

つまり、19時10分から19時50分までの間にこのショートカットを実行すると、条件を満たすと判断されます。

僕の今の職場では、遅くとも19時50分には帰るので、そこを限界値としました。

## メッセージを送信する

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1280" height="581" src="/wp-content/uploads/2019/05/Image-2019-05-29-16-46.jpeg" alt="" class="wp-image-16662"  sizes="(max-width: 1280px) 100vw, 1280px" /></figure>
</div>

最後に行うのが、メッセージの送信です。これまでの過程で用意した変数を文章に入れていきます。

それと、そのまま送信しようとすると、帰宅にかかる時間を計算したタイミングで時間.txtというテキストファイルが作成されてしまっているので、メッセージを送信する手前で「ファイルを削除」を行うようにしています。いちいち余分なメッセージを表示させないために「削除前に確認」を行わないようにするのがポイントです。

## 感想

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="899" height="327" src="/wp-content/uploads/2019/05/Image-2019-05-29-16-49.jpeg" alt="" class="wp-image-16664"  sizes="(max-width: 899px) 100vw, 899px" /></figure>
</div>

さあ完成しました。今回は少し頑張りました。これでワンタップで、心のこもった文章を毎日嫁に送信することが出来るようになりました。めでたしめでたし。

<div class="wp-block-snow-monkey-blocks-balloon smb-balloon smb-balloon--reverse">
  <div class="smb-balloon__person">
    <div class="smb-balloon__figure">
      <img decoding="async" loading="lazy" width="150" height="150" src="/wp-content/uploads/2019/01/yomes-150x150.jpg" alt="" class="wp-image-15657"  sizes="(max-width: 150px) 100vw, 150px" />
    </div>
    <div class="smb-balloon__name">
      よめ
    </div>
  </div>
  <div class="smb-balloon__body">
    <p>
      自動化したって言ってる時点で、心がこもってると思っとんの？&#x1f4a2;
    </p>
  </div>
</div>

<div class="wp-block-snow-monkey-blocks-balloon smb-balloon">
  <div class="smb-balloon__person">
    <div class="smb-balloon__figure">
      <img decoding="async" loading="lazy" width="150" height="150" src="/wp-content/uploads/2019/01/c35455f2d5dae032326553534e9f7d24-150x150.jpeg" alt="" class="wp-image-15655"  sizes="(max-width: 150px) 100vw, 150px" />
    </div>
    <div class="smb-balloon__name">
      じゅん
    </div>
  </div>
  <div class="smb-balloon__body">
    <p>
      ！？
    </p>
  </div>
</div>

<div class="cstmreba">
  <div class="pochireba">
    <a href="https://itunes.apple.com/jp/app/%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%82%AB%E3%83%83%E3%83%88/id915249334?mt=8&uo=4&at=11l7ge"><img decoding="async" loading="lazy" src="https://is5-ssl.mzstatic.com/image/thumb/Purple113/v4/5d/d9/fe/5dd9fe9e-a4ac-483e-3b71-d19d9fe43209/source/512x512bb.jpg" alt="ショートカット" width="150" height="150" class="pochi_img" /></a>
    <div class="pochi_info">
      <div class="pochi_name">
        <a href="https://itunes.apple.com/jp/app/%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%82%AB%E3%83%83%E3%83%88/id915249334?mt=8&uo=4&at=11l7ge">ショートカット</a>
      </div>
      <div class="pochi_price">
        無料
      </div>
      <div class="pochi_seller">
        <a href="https://itunes.apple.com/jp/developer/apple/id284417353?mt=12&uo=4&at=11l7ge">Apple</a>
      </div>
      <div class="pochi_time">
        (2019.05.29時点)
      </div>
      <div class="pochi_post">
        posted with <a href="http://pochireba.com" rel="nofollow noopener noreferrer" target="_blank">ポチレバ</a>
      </div>
    </div>
    <div class="pochireba-footer">
    </div>
  </div>
</div>