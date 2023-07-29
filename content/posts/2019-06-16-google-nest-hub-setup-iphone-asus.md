---
title: Google Nest HubのセットアップにAndroid端末とWIFI設定の見直しが必要だった話
author: 魚住 惇
type: post
date: 2019-06-16T03:00:00+00:00
excerpt: Google Nest Hubの設定でトラブった時の備忘録です
url: /google-nest-hub-setup-iphone-asus-16782.html
thumbnail: /wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5cff.jpg
wp-seo-meta-robots:
  - 'a:0:{}'
snap_isAutoPosted:
  - 1560654036
snapEdIT:
  - 1
snapFB:
  - 's:238:"a:1:{i:0;a:8:{s:2:"do";s:1:"1";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:8:"postType";s:1:"A";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doFB";i:0;}}";'
snapTW:
  - 's:412:"a:1:{i:0;a:12:{s:2:"do";s:1:"1";s:9:"msgFormat";s:46:"ブログを更新しました: %TITLE%  %URL%";s:8:"attchImg";s:1:"1";s:9:"isAutoImg";s:1:"A";s:8:"imgToUse";s:0:"";s:9:"isAutoURL";s:1:"A";s:8:"urlToUse";s:0:"";s:4:"doTW";i:0;s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1140091778755731456";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1140091778755731456";s:5:"pDate";s:19:"2019-06-16 03:00:36";}}";'
categories:
  - 商品レビュー

---
あぁ・・・終わった。やっとセットアップが終わりましたよ。

2019年6月15日の9時頃に、何日か前に発売したばかりのGoogle Nest Hubが届きました。<figure class="wp-block-image alignwide">

<img decoding="async" loading="lazy" width="480" height="360" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_mini_5d00.jpg" alt="" class="wp-image-16775"  sizes="(max-width: 480px) 100vw, 480px" /> </figure> 

きっかけは、ごりゅごさんに「**Google Homeに向かって話しかけると、Google スプレットシートにタイムスタンプと内容を記録できるんだ」**という話を聞いたこと。AmazonEchoで同じことをやろうとするとスキルを自作したりと大変苦労する。つまり、何時に何をしたのかを話しかけるだけで記録してくれるという音声メモ機として使えるわけですよ。僕にとっては購入理由としては十分過ぎて、即購入を決意しました。

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
      アレクサが3台あるのに、また増えた・・・
    </p>
  </div>
</div>

でもね、このGoogleスマートデイバスたちのセットアップに悪戦苦闘するなんて、その時は知らなかったのですよ。

## 相互に通信できないネットワークに接続されている可能性があります

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1125" height="665" src="/wp-content/uploads/2019/06/IrXQgHsVSnaxHDoL8htowg_thumb_5ce6.jpg" alt="" class="wp-image-16774"  sizes="(max-width: 1125px) 100vw, 1125px" /></figure>
</div>

ワクワクしながら電源を入れ、「おお！喋った喋った！」と無邪気に喜んでいたのも束の間。iPhoneと同じWIFIに接続する最終段階でエラーが表示されました。

**「○○はセットアップされているようですが、iPhoneからの通信に応答しませんでした。Google Nest HubとiPhoneが、相互に通信できないネットワークに接続されている可能性があります。場合によってはWi-Fi設定に若干の変更が必要になります。」**

んん？なんでだ？同じWIFIで、5Ghz帯に統一しているはずなのに、エラーで止まってしまう。

スマートデバイスをWIFIに接続する時のトラブルって、大抵はこの3つだと思うんですよ。

<div class="wp-block-snow-monkey-blocks-box smb-box" style="border-width:1px">
  <div class="smb-box__body">
    <p>
      <span class="smb-highlighter">セットアップがうまくいかない主な原因</span><span class="smb-highlighter"></span><span class="smb-highlighter"></span><span class="smb-highlighter"></span>
    </p>
    
    <div class="wp-block-snow-monkey-blocks-list smb-list" data-icon="check-circle">
      <ul>
        <li>
          WIFIルータとの距離が離れていて電波が不安定
        </li>
        <li>
          WIFIルータの動作が不安定
        </li>
        <li>
          スマホと違うSSIDのWIFIに繋ごうとしている
        </li>
      </ul>
    </div>
  </div>
</div>

この3つくらいなら、割と簡単に解決できます。ルータの近くでセットアップする、ルータを再起動する、スマホと同じSSIDを接続先に設定する。この3つでバッチリ解決できます。

しかし、<span class="smb-highlighter">それ</span><span class="smb-highlighter">以外の要素が悪さして、セットアップを阻んでいた</span>んですよ。

### ASUS RT-AC68Uの設定を見直した

僕が使っているWIFIルータはASUS製です。RT-AC68Uという少し前の型番のものですが、まだまだ現役です。

ただ、Googleスマートデバイスを接続しようとなると、WIFIの設定を見直す必要がありました。

というかGoogleのデバイス自体が扱いづらい代物なのか、ルーターメーカーが手を焼くことも過去にはあったようです。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card-handler">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://japanese.engadget.com/2018/01/16/google-home-chromecast-wi-fi/">}}
</div></figure> 

で、僕もこれを機にルータのファームウェアを最新バージョンにアップデートしたんですが、まだ繋がらない。更に調べて見ると、ASUS製ルータ独自の設定方法がChromecast Helpフォーラムに書かれていました。

<blockquote class="wp-block-quote">
  <p>
    Thanks for posting in the Forum. Could you try a few things that might help you:<br />Enable: Universal Plug and Play (UPnP), multicast, Internet Group Management Protocol (IGMP)<br /><br />Disable: AP/client isolation, virtual private networks (VPNs), proxy servers, IGMP Proxy<br />Could you check other router settings <a href="https://productforums.google.com/forum/?hl=en#!topic/chromecast/pzpgXAtuDZ0">here</a> too see whether it helps to solve your issue?
  </p>
  
  <cite>https://support.google.com/chromecast/forum/AAAAt7PFQG4QX1Q8naLmSI/?hl=en&gpf=d/topic/chromecast/QX1Q8naLmSI</cite>
</blockquote>

よしこれか。ともかくこれと同じようにしよう。

<div class="wp-block-snow-monkey-blocks-box smb-box" style="border-width:1px">
  <div class="smb-box__body">
    <p>
      今回変更した設定項目<span class="smb-highlighter"></span>
    </p>
    
    <div class="wp-block-snow-monkey-blocks-list smb-list" data-icon="check-circle">
      <ul>
        <li>
          ワイヤレス→詳細<ul>
            <li>
              APを隔離しますか→<span class="smb-highlighter">いいえ</span>
            </li>
            <li>
              IGMPスヌーピング→<span class="smb-highlighter">有効</span>
            </li>
            <li>
              エアタイムフェアネス→<span class="smb-highlighter">無効</span>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5d0e.jpg" alt="" class="wp-image-16780"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5d0f.jpg" alt="" class="wp-image-16777"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

<div class="wp-block-snow-monkey-blocks-box smb-box" style="border-width:1px">
  <div class="smb-box__body">
    <p>
      設定項目その2<span class="smb-highlighter"></span>
    </p>
    
    <div class="wp-block-snow-monkey-blocks-list smb-list" data-icon="check-circle">
      <ul>
        <li>
          LAN→IPTV<ul>
            <li>
              マルチキャスト経路(IGMP Proxy)→<span class="smb-highlighter">無効</span>
            </li>
            <li>
              IGMPスヌーピング→<span class="smb-highlighter">無効</span>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5d0c.jpg" alt="" class="wp-image-16779"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

### 他のルータでは「プライバシーセパレータ」を無効にすることで解決

今回遭遇したこのエラーは、**WIFIで接続した機器同士が通信することを許可する設定にしていないこと**が原因のほとんどでした。セキュリティのレベルを高く保つために、WIFIで接続したノートパソコンの共有フォルダにアクセス出来ないようにするための設定です。

ASUS製以外のルータでは、AP隔離のことを「<span class="smb-highlighter">APアイソレーション</span>」や「<span class="smb-highlighter">プライバシーセパレータ</span>」と呼ばれているので、WIFIの設定項目からこれらの名前を探して、無効にすることで接続することが出来るようになります。

### iPhoneではなくAndroid端末から設定した

実は、今回のこのトラブル、ルータの設定を変更してめでたしめでたし♪では終わりませんでした。そこからどうしてもGoogle Nest Hubが接続できなかったんです。それどころか一緒に買ったGoogle Home miniも。

これはiPhoneでセットアップしようと思ったのが原因なんじゃ？と思ったので、iPadにGoogle Homeアプリをインストールしてセットアップをしようと試みたんですが、

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5d09.jpg" alt="" class="wp-image-16776"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

あっけなく失敗しました。もうわけがわからん。もうこれは、Googleデバイスたちを返品するしかないか？それともいっその事Google WIFIを買えってことか？

そう思いながら、もしかして！と思って所持している唯一のAndroid端末moto g4を使ってセットアップしてみると、

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5d05.jpg" alt="" class="wp-image-16773"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

呆気なく繋がりました。もう今までの苦労が嘘のよう。ルータの設定をバックアップして工場出荷時にリストアして、その状態でも繋がらなくて。貴重な土曜日をまる1日潰しました。

## まとめ

今回経験した、Google製のスマートデバイスのセットアップ時のトラブル解消法は次の通りです。

<div class="wp-block-snow-monkey-blocks-box smb-box" style="border-width:1px">
  <div class="smb-box__body">
    <p>
      <span class="smb-highlighter">こんな悩みを抱えていませんか？</span>
    </p>
    
    <div class="wp-block-snow-monkey-blocks-list smb-list" data-icon="check-circle">
      <ul>
        <li>
          WIFIルータの近くでセットアップする
        </li>
        <li>
          WIFIルータの設定を見直して再起動
        </li>
        <li>
          それでもダメならAndroid端末からセットアップする
        </li>
      </ul>
    </div>
  </div>
</div>

これ最後の項目、iPhoneしか持っていない人は絶望的だよなぁ・・・。

iPhoneやiPadからNest Hubの設定が出来なかったの、僕だけですか？

## 今Google Nest Hubを購入するとGoogle Home miniが480円

<div class="wp-block-image">
  <figure class="aligncenter"><img decoding="async" loading="lazy" width="1024" height="768" src="/wp-content/uploads/2019/06/UNADJUSTEDNONRAW_thumb_5caf.jpg" alt="" class="wp-image-16778"  sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
</div>

発売日が平日だったので、仕事帰りにどこか家電量販店にでも寄って買ってから帰ろうって考えていました。すると、Google StoreでNest HubとGoogle Home miniをセットで購入すると、合計金額から6000円引きされるという情報が入ってきました。これはつまりGoogle Home miniが480円で購入できるということ。

これはもう買うっきゃねぇ！とも思ったのでした。

※Google Storeで購入した後で、ビックカメラで同じセットを購入すると14000円で済むことが判明しました。とほほ。