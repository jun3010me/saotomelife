---
title: WordPressで複数の記事の文字列を一括置換したい時はSQLコマンドの出番だ！
author: 魚住 惇
type: post
date: 2013-09-21T22:33:28+00:00
url: /wordpress-permutation-sql-command-5659.html
thumbnail: /wp-content/uploads/2013/09/76dfcdcfecfbac3b922a9b6cb3e69a3f1.png
twitter_id:
  - 381546753050169344
views:
  - 11
scc_follow_count_feedly:
  - 37
categories:
  - PC
  - ブログ考察

---
<img decoding="async" loading="lazy" title="スクリーンショット_2013-09-22_9月22日日648.png" src="/wp-content/uploads/2013/09/76dfcdcfecfbac3b922a9b6cb3e69a3f.png" alt="スクリーンショット 2013 09 22 9月22日日648" width="300" height="213" border="0" />

<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

先日のブログ合宿で、BeginningNEWSというブログタイトルが全然ニッチじゃない！という指摘を@goryugoさんからいただきました。

 

「確かに、BeginningNEWSで検索したら出てくるけど、&#8221;Beginning NEWS&#8221;っていう感じに空白を入れると、メジャー過ぎる単語だから他に負けるんだよなぁ」と、自分のセンスの無さを受け止めるしかありませんでした。

 

ですがこのブログの場合、ブログタイトルを変える前に、手作業でやるとかなり手間のかかる作業があったんです。

 

## こんにちは！BeginningNEWSのジュンです！

これは、僕が記事の冒頭に必ず入れている言葉です。MarsEditのショートカットで文字を登録しているので、毎回一緒です。BeginningNEWSにブログ名を変えた後の記事に、必ず入れているんです。

 

今回は、いずれブログ名が変わることを考えて、記事の冒頭部分の「BeginningNEWS」を消したいなと思いました。

### 大体200記事くらい編集する必要があった

調べたら、BeginningNEWSのジュンです！と挨拶している記事は200を越えてました。

どうすんのこれｗ全部手動でやるの？半日つぶれてしまうよ？(´・ω・｀)

### SQLコマンドで一瞬で解決！

WordPressの多くはMySQLという名前のデータベースサーバを使っています。そのMySQLで使えるコマンドがSQLコマンドというものです。

今回は、WordPressが使っているMySQLの中に保存されている記事の内容を、コマンドを使って書き換えたいと思います。

## phpMyAdmin上でコマンドを実行する

本当はSSHでログインしてmysqlに入った方が楽なんです。しかし、レンタルサーバの中にはSSHログインに対応していないところも多数あるので、今回はphpMyAdminから操作することにしました。

### phpMyAdminにログインする

レンタルサーバによってphpMyAdminの利用方法が違うと思いますが、ログインするとこの画面が出てきますね。

 

 

<img decoding="async" loading="lazy" title="スクリーンショット_2013-09-22_9月22日日623.png" src="/wp-content/uploads/2013/09/5f104e133bd3c123cc245d5aa4f074ac.png" alt="スクリーンショット 2013 09 22 9月22日日623" width="600" height="462" border="0" /> 

左側のWordPressのデータベースをクリックしましょう。

ここからまずは、WordPressが記事の本文を保存している場所を探していきます。

### SQLの実行画面を表示する

<img decoding="async" loading="lazy" title="スクリーンショット_2013-09-22_9月22日日709.png" src="/wp-content/uploads/2013/09/58654f50a95bf93fb36be2c16bd64036.png" alt="スクリーンショット 2013 09 22 9月22日日709" width="560" height="287" border="0" /> 

データベースを選択した後、SQLタブをクリックします。

 

 

<img decoding="async" loading="lazy" title="スクリーンショット 2013-09-22 9月22日日713.png" src="/wp-content/uploads/2013/09/5082383367f849707f5bad1694a741af.png" alt="スクリーンショット 2013 09 22 9月22日日713" width="600" height="335" border="0" /> 

こんな感の入力画面が出てきます。

### コマンドを入力して実行！

今回は、記事の冒頭部分の「BeginningNEWSの」を消したいので、文字列を置換するコマンドはこうなりました。

<img decoding="async" loading="lazy" title="スクリーンショット 2013-09-22 9月22日日711.png" src="/wp-content/uploads/2013/09/d53bacdb7dd85f0faea2b6832c995044.png" alt="スクリーンショット 2013 09 22 9月22日日711" width="600" height="268" border="0" /> 

**  
** 

**UPDATE \`wp\_posts\` SET post\_content=REPLACE (post_content,&#8221;こんにちは、BeginningNEWSの&#8221;,&#8221;**

**こんにちは、&#8221;)**

※wp\_postsがテーブルで、post\_contentがフィールドです。よく分からない人は、wp\_postsの中にpost\_contentというのがあって、その中に全記事の本文が書かれている感じだと思ってください。

 

これで全ての記事から「こんにちは、BeginningNEWSの」を探し出し、「こんにちは、」に置換します。

### 実行結果

<img decoding="async" loading="lazy" title="スクリーンショット 2013-09-22 9月22日日639.png" src="/wp-content/uploads/2013/09/bdd4f51fc6eabe49cb72083f7dcea7b3.png" alt="スクリーンショット 2013 09 22 9月22日日639" width="600" height="159" border="0" /> 

コマンドが無事に実行されると、変更された行数が表示されます。

 

おおう、**268行もあったんか。手動で変えるとなるとかなりの手間やな(´・ω・｀)**

という**気の遠くなるような作業が、0.0762秒で終わった**わけですねヽ(=´▽\`=)ﾉ

 

試しにブログを見てみると、

<img decoding="async" loading="lazy" title="スクリーンショット_2013-09-22_9月22日日639_1.png" src="/wp-content/uploads/2013/09/53991466afcb31605c4e611353cfb4b2.png" alt="スクリーンショット 2013 09 22 9月22日日639 1" width="600" height="119" border="0" /> 

さっきまでこの状態だったのが、

<img decoding="async" loading="lazy" title="スクリーンショット_2013-09-22_9月22日日640.png" src="/wp-content/uploads/2013/09/c70a50f1b419488f7ee2085ee40d7885.png" alt="スクリーンショット 2013 09 22 9月22日日640" width="509" height="135" border="0" /> 

「BeginningNEWSの」が取れている状態になるわけです(｀･ω･´)ゞ

## <span style="font-size: 1.5em;">まとめ</span>

コマンドは、確かに面倒くさいです。ある程度の知識や経験がないと打てません。 WordPressは、コマンドやサーバを意識しなくても使えるブログソフトウェアです。

 

しかし！コマンドが少しでも叩けると、今回みたいに見るだけで嫌になりそうな単純作業が一瞬で片付いてしまうんです！

 

マウスでクリックすること、コマンドを叩くことにそれぞれ良いところ悪いところがありますが、今回はSQL文の大活躍でした！興味がある方は試しにphpMyAdminなどでデータベースの中身を覗いてみてくださいヽ(=´▽\`=)ﾉ

<div class="booklink-box">
  <div class="booklink-image">
    <a href="http://www.amazon.co.jp/exec/obidos/asin/4774158658/jn050191-22/" rel="nofollow" target="_blank"><img decoding="async" style="border: none;" src="http://ecx.images-amazon.com/images/I/51GJS3D69nL._SL160_.jpg" alt="" /></a>
  </div>
  <div class="booklink-info">
    <div class="booklink-name">
      <a href="http://www.amazon.co.jp/exec/obidos/asin/4774158658/jn050191-22/" rel="nofollow" target="_blank">Web開発の基礎徹底攻略 (WEB+DB PRESS plus)</a></p>
      <div class="booklink-powered-date">
        posted with <a href="http://yomereba.com" rel="nofollow" target="_blank">ヨメレバ</a>
      </div>
    </div>
    <div class="booklink-detail">
      小飼 弾,田籠 聡,近藤 宇智朗,並河 祐貴,赤松 祐希,井上 誠一郎,ミック,天尋 左石,和田 裕介 技術評論社 2013-07-23
    </div>
    <div class="booklink-link2">
      <div class="shoplinkamazon">
        <a title="アマゾン" href="http://www.amazon.co.jp/exec/obidos/asin/4774158658/jn050191-22/" rel="nofollow" target="_blank">Amazon</a>
      </div>
      <div class="shoplinkkindle">
        <a href="http://www.amazon.co.jp/gp/search?keywords=Web%8AJ%94%AD%82%CC%8A%EE%91b%93O%92%EA%8DU%97%AA%20%28WEB%2BDB%20PRESS%20plus%29&__mk_ja_JP=%83J%83%5E%83J%83i&url=node%3D2275256051&tag=jn050191-22" rel="nofollow" target="_blank">Kindle</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer">
     
  </div>
</div>

 [1]: https://twitter.com/jun3010me