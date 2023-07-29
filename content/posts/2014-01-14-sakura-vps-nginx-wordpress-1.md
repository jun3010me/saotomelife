---
title: '[サーバ構築メモ]さくらVPSを借りたら必ず行う最低限の初期設定'
author: 魚住 惇
type: post
date: 2014-01-13T16:19:18+00:00
url: /sakura-vps-nginx-wordpress-1-6720.html
thumbnail: /wp-content/uploads/2014/01/51Cqf2Q3KlL._SL160_.jpg
views:
  - 46
scc_follow_count_feedly:
  - 37
categories:
  - PC

---
<img decoding="async" loading="lazy" title="スクリーンショット_2014-01-14_0_57_14-7.png" src="/wp-content/uploads/2014/01/9eebd308d12fb0767294934f23eaaf11.png" alt="スクリーンショット 2014 01 14 0 57 14 7" width="300" height="196" border="0" />

<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

この度、当ブログはエックスサーバーから<a href="http://px.a8.net/svt/ejp?a8mat=25MYF4+8LLFCI+D8Y+BZO4I" target="_blank">さくらのVPS</a>に移行しました。

その際の設定記録をここに残しておきたいと思います。

## rootのパスワードを変更する

<pre>[root@www ~]# <b>passwd root</b>
Changing password for user root.
New password:
Retype new password:
passwd: all authentication tokens updated successfully.
</pre>

さくらVPSを借りたら、まずはrootのパスワードをメールで送られてきたものから、

自分のパスワードに変更しておきましょう。

## ユーザを追加する

<pre>[root@www ~]# <b>useradd wordpress</b>
[root@www ~]# <b>passwd wordpress</b>
Changing password for user wordpress.
New password:
Retype new password:
passwd: all authentication tokens updated successfully.
[root@www ~]# usermod -G wheel wordpress</pre>

root以外で自分が使うユーザを作成し、rootにsuできるユーザとします。

<pre>[root@www ~]# <b>vi /etc/pam.d/su</b>
#%PAM-1.0
auth            sufficient      pam_rootok.so
# Uncomment the following line to implicitly trust users in the "wheel" group.
#auth           sufficient      pam_wheel.so trust use_uid
# Uncomment the following line to require a user to be in the "wheel" group.
<b>auth required pam_wheel.so use_uid</b>
auth            include         system-auth
account         sufficient      pam_succeed_if.so uid = 0 use_uid quiet
account         include         system-auth
password        include         system-auth
session         include         system-auth
session         optional        pam_xauth.so

</pre>

また、rootになれるユーザは、ここで追加したユーザのみとします。

### viの操作メモ

Linuxのコマンドライン上では、vimというテキストエディタを使います。

vimは普通のエディタと操作方法が異なり、慣れていない人だと戸惑います。

 

簡単な操作方法としては、

**hjkl**がそれぞれ**←↓↑→移動**

 **i**で入力モード,**esc**で抜ける

**x**で1字削除

 **:wq+Enter**で上書き保存

**:q!+Enter**で保存せずに閉じる

が使えると作業がスムーズになると思います。

## SSHの設定をする

<pre>[root@www ~]# <b>vi /etc/ssh/sshd_config </b></pre>

/etc/ssh/sshd_configを次の通りに書き換えます

<pre>$OpenBSD: sshd_config,v 1.80 2008/07/02 02:24:18 djm Exp $
 
# This is the sshd server system-wide configuration file.  See
# sshd_config(5) for more information.
 
# This sshd was compiled with PATH=/usr/local/bin:/bin:/usr/bin
 
# The strategy used for options in the default sshd_config shipped with
# OpenSSH is to specify options with their default value where
# possible, but leave them commented.  Uncommented options change a
# default value.
 
<b>Port 90022</b>
#AddressFamily any
#ListenAddress 0.0.0.0
#ListenAddress ::
 
# Disable legacy (protocol version 1) support in the server for new
# installations. In future the default will change to require explicit
# activation of protocol 1

Protocol 2

# Authentication:
 
#LoginGraceTime 2m
<b>PermitRootLogin yes</b>
#StrictModes yes
#MaxAuthTries 6

#MaxSessions 10 </pre>

特にポート番号が22番のままだと攻撃の対象となる可能性が高いので、他の番号にします。

また、SSH接続でrootでのログインを禁止して、先ほど作成したユーザでログオンするようにします。

<pre>[root@www ~]# <b>/etc/rc.d/init.d/sshd start</b>
Starting sshd: [  OK  ]</pre>

これでSSHが起動します。

## 最低限の初期設定が完了！

セキュリティ対策が万全とは呼べないかもしれませんが、

パスワードの変更、ユーザの追加、SSHの設定まで済ませました。

 

これ以降は、コンソールページからではなく、

MacのターミナルやWindowsのTeraTermProなどの

ターミナルアプリから操作するようにしていきましょう。

今回はここまで！お疲れ様でしたヽ(=´▽\`=)ﾉ

 

よりセキュリティ対策を行い、サーバを運用したい方は、こちらの書籍をオススメします(｀･ω･´)ゞ

<div class="booklink-box" style="text-align: left; padding-bottom: 20px; font-size: small; /zoom: 1; overflow: hidden;">
  <div class="booklink-image" style="float: left; margin: 0 15px 10px 0;">
    <a name="booklink" href="http://www.amazon.co.jp/exec/obidos/asin/B00ESBVH7W/jn050191-22/" rel="nofollow" target="_blank"></a><img decoding="async" style="border: none;" src="http://ecx.images-amazon.com/images/I/51Cqf2Q3KlL._SL160_.jpg" alt="" />
  </div>
  <div class="booklink-info" style="line-height: 120%; /zoom: 1; overflow: hidden;">
    <div class="booklink-name" style="margin-bottom: 10px; line-height: 120%;">
      <a name="booklink" href="http://www.amazon.co.jp/exec/obidos/asin/B00ESBVH7W/jn050191-22/" rel="nofollow" target="_blank"></a>できるPRO CentOS 6 サーバー (できるPROシリーズ)[Kindle版]</p>
      <div class="booklink-powered-date" style="font-size: 8pt; margin-top: 5px; font-family: verdana; line-height: 120%;">
        posted with <a href="http://yomereba.com" rel="nofollow" target="_blank">ヨメレバ</a>
      </div>
    </div>
    <div class="booklink-detail" style="margin-bottom: 5px;">
      辻 秀典,渡辺高志,できるシリーズ編集部 インプレスジャパン 2013-08-22
    </div>
    <div class="booklink-link2" style="margin-top: 10px;">
      <div class="shoplinkkindle" style="display: inline; margin-right: 5px;">
        <a href="http://www.amazon.co.jp/exec/obidos/ASIN/B00ESBVH7W/jn050191-22/" rel="nofollow" target="_blank">Kindle</a>
      </div>
      <div class="shoplinkamazon" style="display: inline; margin-right: 5px;">
        <a title="アマゾン" href="http://www.amazon.co.jp/exec/obidos/ASIN/4844334247/jn050191-22/" rel="nofollow" target="_blank">Amazon[書籍版]</a>
      </div>
    </div>
  </div>
  <div class="booklink-footer" style="clear: left;">
     
  </div>
</div>

 [1]: https://twitter.com/jun3010me