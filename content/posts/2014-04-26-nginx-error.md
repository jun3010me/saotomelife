---
title: Nginxで「The page you are looking for is temporarily unavailable.」というエラーが出た時の対処法
author: 魚住 惇
type: post
date: 2014-04-25T16:07:15+00:00
url: /nginx-error-7938.html
thumbnail: /wp-content/uploads/2014/04/8823b5b7c2943ab32a1451313a5f4e661.png
views:
  - 11
scc_follow_count_feedly:
  - 37
categories:
  - ブログ考察

---
<img decoding="async" loading="lazy" title="スクリーンショット 2014-04-26 0.53.39.png" src="/wp-content/uploads/2014/04/8823b5b7c2943ab32a1451313a5f4e66.png" alt="スクリーンショット 2014 04 26 0 53 39" width="600" height="432" border="0" />

<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

今回は、Nginxで「**The page you are looking for is temporarily unavailable.**」というエラーが出た時の対処法を、ここにメモしておこうと思います。

## The page you are looking for is temporarily unavailable. Please try again later.

はい。こんなんが出ました。

Please try again laterとか出てますけど。実際は僕が管理者なので、待つわけにはいきません！

このエラーは、**サーバーの負荷が限界を超えているから、ちょっと待ってろ！**というエラーです。

 

確かにサーバーのスペックの問題もありますが、ブログがバズっていなかったり、大きな負荷がかかっていないのに表示されるということは、**サーバーの設定に何らかの問題がある**からなんです。

## とりあえず普及させる

まぁこのエラーが出た時ってのは、URLにアクセスしてもサイトが表示されない時なので、とにかくまずはサイトを復活させましょう。

**\# /etc/rc.d/init.d/nginx restart**

**\# /etc/rc.d/init.d/php-fpm restart**

**  
** 

これでnginxとphp-fpmを再起動させたので、表示は出来ると思います。

しかし、これでは根本的な解決になっていませんね。

同じ状況に陥ったら、再び手動で再起動する必要が出てきます。

## php-fpmの設定を見直す

僕が今回遭遇したトラブルは、[さくらVPSSSD2GB][2]で運営している当ブログが表示されなくなってしまったことでした。

で、先ほどのNginxの再起動では状況が変わりませんでしたが、**php-fpmを再起動することで、ブログが表示されるようになった**んです。つまり、php-fpmの処理が限界を超えてしまったことが、トラブルに繋がったと考えられます。

### /etc/php-fpm.d/www.conf

というわけで、php-fpm関連の設定ファイルを見直しました。

 

まずは、**「/etc/php-fpm.d/www.conf」**の設定を

**pm.max_children = 15**

**pm.start_servers = 5**

**pm.min\_spare\_servers = 2**

**pm.max\_spare\_servers = 5**

**  
** 

こんな感じにしました。

### /etc/php-fpm.conf

次に、**「/etc/php-fpm.conf」**の設定を

**emergency\_restart\_threshold = 3**

**process\_control\_timeout = 10s**

 

としました。

## しばらく様子見！

先ほどの2つの設定ファイルの値を、デフォルトよりも少し小さくしてみました。

これでしばらく様子を見ます。

**今のところは、快適**に動いています。

ご迷惑をおかけしました

(´・ω・｀)

 [1]: https://twitter.com/jun3010me
 [2]: http://px.a8.net/svt/ejp?a8mat=25MYF4+8LLFCI+D8Y+BZO4I