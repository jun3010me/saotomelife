---
title: '[AD]読み取り不可能になったHDDからファイルを復元できるソフト「EaseUS Data Recovery Wizard」'
author: 魚住 惇
type: post
date: 2018-09-15T02:20:08+00:00
url: /easeus-data-recovery-wizard-14831.html
thumbnail: /wp-content/uploads/2018/09/xOD5NWS0ajROXN7GVcQQ_thumb_3b97-2.jpg
snapFB:
  - 'a:1:{i:0;a:24:{s:2:"do";s:1:"1";s:5:"nName";s:11:"Facebook #0";s:9:"msgFormat";s:51:"ブログを更新しました！%TITLE% %SITENAME%";s:6:"appKey";s:35:"x5g9aw2d4v22454x2w294d444a4p2b4u2z2";s:6:"appSec";s:69:"d3h0au284x2i5b4s224h5e414a4p2m5z2y2u2k584x24474e4w2p2y2d4w244q2748484";s:8:"postType";s:1:"A";s:8:"apiToUse";s:4:"fbfb";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:3:"tpt";s:0:"";s:4:"pgID";s:15:"627487850654942";s:6:"imgUpl";s:1:"T";s:10:"riComments";i:0;s:12:"riCommentsAA";i:0;s:5:"proxy";a:2:{s:5:"proxy";s:0:"";s:2:"up";s:0:"";}s:9:"wpImgSize";s:4:"full";s:5:"glpid";s:0:"";s:4:"uMsg";s:0:"";s:11:"accessToken";s:175:"EAAMjGZBx2DIABAK9Shrq8A1facZBzmI7j4gQptvfrvrC0QRXFBjndKxoJdk1x3YCLY5zT01ivVoEhYZCv0wO4N4WlEb8wNRBgIgy8OvpQQfV1zmMs4Tfgs9r2rrWnoya0gsx9AgvoAlPCKCha6ZAYq5mszCg54MRDGptJQ0xegZDZD";s:8:"authUser";s:15:"627487850654942";s:12:"authUserName";s:10:"Jun Uozumi";}}'
snap_isAutoPosted:
  - 1536978022
snapTW:
  - 's:931:"a:1:{i:0;a:23:{s:2:"do";s:1:"1";s:5:"nName";s:10:"Twitter #0";s:9:"msgFormat";s:40:"記事を書きました: %TITLE%  %URL%";s:6:"appKey";s:55:"x5g9a2494h465u554l434265454e306b4j4m474q3o3w5r4h3a3b4r3";s:6:"appSec";s:105:"d3h0ak37413l546f4u25615i4n4j3p4w384o305r3l336s5d4i4n4u3q354p3u2o4p433o50325b4m4f4r3s463t454y534r3s3l57406";s:7:"fltrsOn";i:0;s:5:"fltrs";a:0:{}s:7:"proxyOn";i:0;s:7:"useSURL";i:0;s:1:"v";i:350;s:5:"twURL";s:29:"https://twitter.com/jun3010me";s:11:"accessToken";s:50:"67790051-Zy1o3Z7D9ONCVqKqdP2QPAIhGVwkCADeltfZN9dth";s:14:"accessTokenSec";s:45:"k94u64BhC2TPT95vmy98nXsz1WUVhQEFSW2qnZM46Q5z1";s:5:"tw140";i:0;s:10:"riComments";i:0;s:11:"riCommentsM";i:0;s:12:"riCommentsAA";i:0;s:8:"attchImg";s:1:"1";s:9:"wpImgSize";s:4:"full";s:8:"isPosted";s:1:"1";s:4:"pgID";s:19:"1040787383917076485";s:7:"postURL";s:56:"https://twitter.com/jun3010me/status/1040787383917076485";s:5:"pDate";s:19:"2018-09-15 02:20:24";}}";'
categories:
  - 'ガジェット&amp;PC'

---
それは突然やってきた。

いつも通り仕事を終えて、家に帰ってPCを操作していると、なにやら様子がおかしい。

いつも開いているショートカットから、用のあるフォルダにアクセスできない。

んー、昨日までは普通だったのになぁ。と思いながらエクスプローラ上のPCを開いてみたところ、

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14828" src="/wp-content/uploads/2018/09/xOD5NWS0ajROXN7GVcQQ_thumb_3b97.jpg" width="1024" height="768"  sizes="(max-width: 1024px) 100vw, 1024px" /> 

どーん！！

気がついた時には、容量のゲージすら表示されなくなっていて、アクセスできないようになっていた。

うわ・・・まじかよ・・・・。見られなくなってんじゃねーか！中のファイル、どうすんだ！

## RAID1でミラーリングしていたはず

本当ならば、こんなことは滅多に起きないはずだった。なぜならばRAID1でミラーリングしていたからだ。この状態の意味がわからない。

RAIDとは複数の同じ容量のHDDを使うことで実現できる冗長システムのこと。その中でもRAID1というのはミラーリングという機能があり、2台構成なら同じ内容が常に書き込まれる仕組みだ。この仕組みの素晴らしいところは、仮にどちらかのHDDが壊れてしまっても、もう片方のHDDのファイルにアクセスすることができるところ。壊れたHDDを新品のHDDに交換すれば、新品のHDDにデータがコピーされ始め、コピーしている最中も勿論ファイルにアクセスすることが可能だ。バックアップを取ることとはちょっと意味合いが違うが、HDDが物理的に壊れることを想定しつつ、ファイルにアクセスできなくなるというトラブルに対して理に適った動きをする仕組みだ。

そのはずだった。

とりあえず、RAID1のステータスを見ると、HDD1が死んでいた。HDD2は生きていた。ということは、先ほど説明した通り、ミラーリングできているなら、HDD1が死んでいる状態でもHDD2にあるファイルを見ることができるはず。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14827" src="/wp-content/uploads/2018/09/xOD5NWS0ajROXN7GVcQQ_thumb_3b97-1.jpg" width="1024" height="768"  sizes="(max-width: 1024px) 100vw, 1024px" /> 

でも、PC上の表示はこれのままだ。なんでじゃい。

RAID1でミラーリングさえすれば、どっちかのHDDが壊れても、どっちかが生きてさえいれば復活できるんじゃなかったんかい。

## 望みはHDD2

ここまでは調べた。だけど、データが読み出せない焦りのせいか、結構しんどくなってきた。

よし、整理しよう。RAID1で組んでいたHDDの構成で、HDD1が死亡、HDD2が生きているかも。しかし、この状態でHDD2の中身が確認できない。

これは・・・本当に困ったぞ。何せミラーリングに満足していて、バックアップは特に取っていなかったからだ。

冗長化と、バックアップが別だということを、今回の騒動で学ぶことができた。

学ぶことが出来たのだが、どうしよう本当に。

で、LinuxマシンにHDD2を繋いで見ると、NTFSパーティションがあることがわかった。Linuxなので、パーティションが存在していることがわかっただけで、中身を見ることは出来なかった。

再度Windowsマシンに繋ぎ直し、今度はCrystalDiskInfoにて健康度をチェックしてみた。

<a href="https://crystalmark.info/ja/software/crystaldiskinfo/" target="_blank">CrystalDiskInfo – Crystal Dew World</a>  
結果は「健康」だった。セクタ不良による代替セクタもなし。ということは、物理的には壊れていないのかもしれない。

## 復元ソフトを探してみた

けどこれで少し希望が出てきた。だって「パーティションが存在しているけど、何らかの理由により読めない」という状態が解ったから。

そこで最後の手段。**「復元ソフト」**である。

パソコンで使う記録媒体の中には、当然色んなデータが書き込まれている。特徴的なのは、ゴミ箱に入れて、そこから削除したファイルであっても、実はHDD内のどこかにデータが残っている可能性が高いということ。

どういうことかというと、ファイルを削除するといっても、見えなくしているだけのことが実は多くて、HDDの中のデータがあった場所を復元ソフトとかで読み取ってみると、ファイルを救出できる可能性があるということ。ただし、物理的な損傷が見られた場合は読み取ることは不可能だ。

じゃあ復元ソフトはどのメーカーのものがいいのか。

無料で使うことができる復元ソフトとしてよく知られているのが「DataRecovery」というソフトだ。Windows上で動作する。しかしこのソフトは、ごみ箱から削除したファイルを復元するためだけのソフトだ。間違えてごみ箱を空にしてしまった際に、ごみ箱の中にあったファイルのみ復元が可能である。

<a href="https://forest.watch.impress.co.jp/library/software/datarecovery/" target="_blank">「DataRecovery」削除したファイルを復元 &#8211; 窓の杜</a>  
しかし、これではHDD全体をスキャンして、データを復元してはくれない。今回僕が求めているのは、HDD全体を隈無くスキャンし、中のデータを復元し尽くしてくれるものだ。そういった類いのソフトは、有料ソフトが殆どだ。

10年以上前から復元と言えばよくこれを目にすると思っていたのが、ファイナルデータの復元シリーズだ。当時から「完全復元」という名前のソフトウェアが売られていて、2018年現在は「特別復元」という名前に変わっている。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B06XDL17M5/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/61upuUxQ1ML._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B06XDL17M5/jn050191-22/" target="_blank" >【体験版】ファイナルデータ11plus 特別復元版 ダウンロード版|ダウンロード版</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="https://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        AOSデータ 2017-03-10
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=%E3%83%95%E3%82%A1%E3%82%A4%E3%83%8A%E3%83%AB%E3%83%87%E3%83%BC%E3%82%BF%20%E7%89%B9%E5%88%A5%E5%BE%A9%E5%85%83&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2F%25E3%2583%2595%25E3%2582%25A1%25E3%2582%25A4%25E3%2583%258A%25E3%2583%25AB%25E3%2583%2587%25E3%2583%25BC%25E3%2582%25BF%2520%25E7%2589%25B9%25E5%2588%25A5%25E5%25BE%25A9%25E5%2585%2583%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3D%25E3%2583%2595%25E3%2582%25A1%25E3%2582%25A4%25E3%2583%258A%25E3%2583%25AB%25E3%2583%2587%25E3%2583%25BC%25E3%2582%25BF%2520%25E7%2589%25B9%25E5%2588%25A5%25E5%25BE%25A9%25E5%2585%2583&#038;vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

これねぇ、Amazonのレビューを見ていると、少し不安になったんですよ。

高評価のレビューはもちろん「復元できました！ありがとうございました！」的な内容なんですけど、低評価のレビューも少し目立った様子でした。

んんん、これはお金を払う側としては不安だぞ。

それに、昔このファイナルデータ系の復元ソフトにお世話になったことがあったが、ファイルは復元できたものの、ファイル構造までは復元してくれなかった。全て数字のファイル名に書き換えられ、1つのフォルダにまとめられていた。あれを元に戻すのは本当に大変だった。

### EaseUS Data Recovery Wizard

「HDD　復元」でGoogle検索すると、「EaseUS」というメーカーをやたらと目にする。

最近、海外のソフトウェアメーカーが、ブログの記事っぽい感じで商品紹介をしているものをよく目にする。

例えば動画変換系のソフトとか。なんかちょっと怪しいものが増えた感じがする。

このメーカーも同じ感じだから、最初に見た時は、あまり信頼がおけなかった。

この手の復元ソフトは、無料体験版と有料版とで別れていて、無料体験版には制限がかかっている。

HDDの中身を全てスキャンするのは無料の範囲だが、全てのファイルを復元するのは有料版でないとできないことが多い。このメーカーの復元ソフトも同じ仕組みだった。

[データ復旧フリーソフト][1]として使えるのがFree版、[データ復元ソフト][2]として実際に無制限に復元できるのがPro版だった。

うーむ、とりあえず使ってみないことにはなんとも言えないので、無料版でスキャンしてみよう。

## ファイルの復元に成功

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14829" src="/wp-content/uploads/2018/09/aX9JS39LRN69Q7SeD6ENA_thumb_3b99.jpg" width="1024" height="768"  sizes="(max-width: 1024px) 100vw, 1024px" /> 

うおおおなんということだ。操作ガイドを見ながら作業していくと、読み出せないHDDの中に、復元できるファイルやフォルダがどんどん表示されて、正直泣きそうになった。

<a href="https://jp.easeus.com/tutorial/win-data-recovery-free.html" target="_blank">EaseUS Data Recovery Wizard Free &#8211; 操作ガイド</a>  
このソフトの無料版で復元できるのは500MBと制限されている。SNS上でこのソフトのことをシェアすると2GBに増えるらしいが、今回復元したいファイルの容量は1TBほどあったので、有料版を使う事にした。

ちなみに、今は8900円で購入できるようになっているが、Googleで「EaseUS Coupon」などで検索すると、7500円で購入できる。8900円だとちょっと高いかもしれないが、7500円でデータが復元できるなら安いもんだ。と思える人もいるだろう。

とりあえず無料版で復元したいファイルが見えたら、実際に復元できる可能性が高い。

ちなみに、Amazonだとクーポンを探さなくても7500円で売られている。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B076DR78W2/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/51PRMuWk49L._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B076DR78W2/jn050191-22/" target="_blank" >イーフロンティア EaseUS 復元 by Data Recovery Wizard 1PC</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="https://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        イーフロンティア 2017-10-27
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=EaseUS%20Data%20Recovery%20Wizard&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FEaseUS%2520Data%2520Recovery%2520Wizard%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DEaseUS%2520Data%2520Recovery%2520Wizard&#038;vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

そしてこのData Recovery Wizard Proというソフトの良いところは、1度ライセンスを購入すると、今後のバージョンアップにも対応しているということ。普通は購入時のバージョンからアップデートする時は、アップデート版などの割引の効いたものを購入しなければならないが、EaseUSは1度購入したら次のバージョンも使えるようにライセンスを発行している。よくある「昔買ったソフトだから今は使えないよなぁ」みたいな考え方を持たなくてもいい。

<img decoding="async" loading="lazy" class="alignnone size-full wp-image-14826" src="/wp-content/uploads/2018/09/UNADJUSTEDNONRAW_thumb_3b98.jpg" width="1024" height="768"  sizes="(max-width: 1024px) 100vw, 1024px" /> 

今回復元できたファイルの数は674510個、容量にして926.66GBだった。本当に助かった。

## 冗長化とバックアップは別物

今回学べたのは、RAIDなどで冗長化を果たしたとしても、それに対するバックアップをしておかなければ、もしもの時に対応できないということ。

これは本当に勉強になった。嫌な意味で。

復元ソフトなんて、本当は誰もが使いたくないとは思う。まずは復元ソフトを使わないで済むための対策をすべきだ。

しかし、もしも今回の事のような悲劇が起こってしまった場合は、まずは無料版を試して、「これなら復元できそうだ！」と希望が見えたタイミングで有料版を購入してみるといいだろう。

場合によっては今回紹介したソフトでは復元できないかもしれないが、僕の場合は助かった。ここまでお読み戴いたこの記事は、その記録である。

<div class="cstmreba">
  <div class="kaerebalink-box">
    <div class="kaerebalink-image">
      <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B076DR78W2/jn050191-22/" target="_blank" ><img decoding="async" src="https://images-fe.ssl-images-amazon.com/images/I/51PRMuWk49L._SL160_.jpg" style="border: none;" /></a>
    </div>
    <div class="kaerebalink-info">
      <div class="kaerebalink-name">
        <a href="https://www.amazon.co.jp/exec/obidos/ASIN/B076DR78W2/jn050191-22/" target="_blank" >イーフロンティア EaseUS 復元 by Data Recovery Wizard 1PC</a></p>
        <div class="kaerebalink-powered-date">
          posted with <a href="https://kaereba.com" rel="nofollow" target="_blank">カエレバ</a>
        </div>
      </div>
      <div class="kaerebalink-detail">
        イーフロンティア 2017-10-27
      </div>
      <div class="kaerebalink-link1">
        <div class="shoplinkamazon">
          <a href="https://www.amazon.co.jp/gp/search?keywords=EaseUS%20Data%20Recovery%20Wizard&#038;__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&#038;tag=jn050191-22" target="_blank" >Amazon</a>
        </div>
        <div class="shoplinkrakuten">
          <a href="https://hb.afl.rakuten.co.jp/hgc/10ef1d94.c90f9829.10ef1d95.53606a39/?pc=https%3A%2F%2Fsearch.rakuten.co.jp%2Fsearch%2Fmall%2FEaseUS%2520Data%2520Recovery%2520Wizard%2F-%2Ff.1-p.1-s.1-sf.0-st.A-v.2%3Fx%3D0%26scid%3Daf_ich_link_urltxt%26m%3Dhttp%3A%2F%2Fm.rakuten.co.jp%2F" target="_blank" >楽天市場</a>
        </div>
        <div class="shoplinkyahoo">
          <a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3040825&#038;pid=884909937&#038;vc_url=http%3A%2F%2Fsearch.shopping.yahoo.co.jp%2Fsearch%3Fp%3DEaseUS%2520Data%2520Recovery%2520Wizard&#038;vcptn=kaereba" target="_blank" >Yahooショッピング<img decoding="async" loading="lazy" src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3040825&#038;pid=884909937" height="1" width="1" border="0" /></a>
        </div>
      </div>
    </div>
    <div class="booklink-footer">
    </div>
  </div>
</div>

<a href="https://jp.easeus.com/data-recovery-software/drw-free.html" target="_blank">EaseUS（イーザス）公式サイト|無料データ復元ソフト &#8211; EaseUS Data Recovery Wizard Free</a>

 [1]: https://jp.easeus.com/data-recovery-software/drw-free.html
 [2]: https://jp.easeus.com/data-recovery-software/drw-pro.html