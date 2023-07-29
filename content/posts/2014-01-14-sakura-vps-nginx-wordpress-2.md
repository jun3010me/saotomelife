---
title: '[サーバ構築メモ]さくらVPSにnginx+php-fpm+MySQL環境をあっという間に構築する作業'
author: 魚住 惇
type: post
date: 2014-01-14T14:50:53+00:00
url: /sakura-vps-nginx-wordpress-2-6738.html
thumbnail: /wp-content/uploads/2014/01/13b605bbeb5fef4bff2d474b6304e9e61.png
views:
  - 26
scc_follow_count_feedly:
  - 37
categories:
  - PC

---
<img decoding="async" loading="lazy" title="スクリーンショット_2014-01-13_12_40_49-2.png" src="/wp-content/uploads/2014/01/13b605bbeb5fef4bff2d474b6304e9e6.png" alt="スクリーンショット 2014 01 13 12 40 49 2" width="300" height="293" border="0" />

<!--more-->

こんにちは、[ジュン@jun3010me][1]です。

今回は、さくらVPSでWordPressを高速に動かす環境、nginx+php-fpm+MySQLを手っ取り早く構築したいと思います。

## nginxのインストール

<pre class="console">[root@ ~]# <b>yum install nginx</b>
Loaded plugins: fastestmirror, security
Loading mirror speeds from cached hostfile
 * base: ftp.iij.ad.jp
 * epel: ftp.jaist.ac.jp
 * extras: ftp.iij.ad.jp
 * updates: ftp.iij.ad.jp
Setting up Install Process
Resolving Dependencies
--&gt; Running transaction check
---&gt; Package nginx.x86_64 0:1.0.15-5.el6 will be installed
--&gt; Processing Dependency: libxslt.so.1(LIBXML2_1.0.18)(64bit) for package: nginx-1.0.15-5.el6.x86_64
--&gt; Processing Dependency: libxslt.so.1(LIBXML2_1.0.11)(64bit) for package: nginx-1.0.15-5.el6.x86_64
--&gt; Processing Dependency: gd for package: nginx-1.0.15-5.el6.x86_64
--&gt; Processing Dependency: GeoIP for package: nginx-1.0.15-5.el6.x86_64
--&gt; Processing Dependency: libxslt.so.1()(64bit) for package: nginx-1.0.15-5.el6.x86_64
--&gt; Processing Dependency: libgd.so.2()(64bit) for package: nginx-1.0.15-5.el6.x86_64
--&gt; Processing Dependency: libexslt.so.0()(64bit) for package: nginx-1.0.15-5.el6.x86_64
--&gt; Processing Dependency: libGeoIP.so.1()(64bit) for package: nginx-1.0.15-5.el6.x86_64
--&gt; Running transaction check
---&gt; Package GeoIP.x86_64 0:1.4.8-1.el6 will be installed
---&gt; Package gd.x86_64 0:2.0.35-11.el6 will be installed
--&gt; Processing Dependency: libXpm.so.4()(64bit) for package: gd-2.0.35-11.el6.x86_64
---&gt; Package libxslt.x86_64 0:1.1.26-2.el6_3.1 will be installed
--&gt; Running transaction check
---&gt; Package libXpm.x86_64 0:3.5.10-2.el6 will be installed
--&gt; Finished Dependency Resolution

Dependencies Resolved

=======================================================================================================
 Package               Arch                 Version                           Repository          Size
=======================================================================================================
Installing:
 nginx                 x86_64               1.0.15-5.el6                      epel               397 k
Installing for dependencies:
 GeoIP                 x86_64               1.4.8-1.el6                       epel               620 k
 gd                    x86_64               2.0.35-11.el6                     base               142 k
 libXpm                x86_64               3.5.10-2.el6                      base                51 k
 libxslt               x86_64               1.1.26-2.el6_3.1                  base               452 k

Transaction Summary
=======================================================================================================
Install       5 Package(s)

Total download size: 1.6 M
Installed size: 5.3 M
Is this ok [y/N]: <b>「y」を入力してEnterを押す</b></pre>

<pre><b> </b>Downloading Packages:
(1/5): GeoIP-1.4.8-1.el6.x86_64.rpm                                             | 620 kB     00:02
(2/5): gd-2.0.35-11.el6.x86_64.rpm                                              | 142 kB     00:00
(3/5): libXpm-3.5.10-2.el6.x86_64.rpm                                           |  51 kB     00:00
(4/5): libxslt-1.1.26-2.el6_3.1.x86_64.rpm                                      | 452 kB     00:01
(5/5): nginx-1.0.15-5.el6.x86_64.rpm                                            | 397 kB     00:01
-------------------------------------------------------------------------------------------------------
Total                                                                  219 kB/s | 1.6 MB     00:07
warning: rpmts_HdrFromFdno: Header V3 RSA/SHA256 Signature, key ID 0608b895: NOKEY
Retrieving key from file:///etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-6
Importing GPG key 0x0608B895:
 Userid : EPEL (6)
 Package: epel-release-6-8.noarch (@epel/6.5)
 From   : /etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-6
Is this ok [y/N]: <b>「y」を入力してEnterを押す</b></pre>

<pre><b></b>
Running rpm_check_debug
Running Transaction Test
Transaction Test Succeeded
Running Transaction
  Installing : GeoIP-1.4.8-1.el6.x86_64                                                            1/5
  Installing : libXpm-3.5.10-2.el6.x86_64                                                          2/5
  Installing : gd-2.0.35-11.el6.x86_64                                                             3/5
  Installing : libxslt-1.1.26-2.el6_3.1.x86_64                                                     4/5
  Installing : nginx-1.0.15-5.el6.x86_64                                                           5/5
  Verifying  : libxslt-1.1.26-2.el6_3.1.x86_64                                                     1/5
  Verifying  : libXpm-3.5.10-2.el6.x86_64                                                          2/5
  Verifying  : GeoIP-1.4.8-1.el6.x86_64                                                            3/5
  Verifying  : nginx-1.0.15-5.el6.x86_64                                                           4/5
  Verifying  : gd-2.0.35-11.el6.x86_64                                                             5/5

Installed:
  nginx.x86_64 0:1.0.15-5.el6

Dependency Installed:
  GeoIP.x86_64 0:1.4.8-1.el6            gd.x86_64 0:2.0.35-11.el6     libXpm.x86_64 0:3.5.10-2.el6
  libxslt.x86_64 0:1.1.26-2.el6_3.1

Complete!
[root@ ~]# </pre>

## php関連をインストールする

<pre>[root@ ~]# <b>yum install php-cli php-mbstring php-mysql php-fpm</b></pre>

<pre>Loaded plugins: fastestmirror, security
Loading mirror speeds from cached hostfile
 * base: ftp.iij.ad.jp
 * epel: ftp.jaist.ac.jp
 * extras: ftp.iij.ad.jp
 * updates: ftp.iij.ad.jp
Setting up Install Process
Resolving Dependencies
--&gt; Running transaction check
---&gt; Package php-cli.x86_64 0:5.3.3-27.el6_5 will be installed
--&gt; Processing Dependency: php-common(x86-64) = 5.3.3-27.el6_5 for package: php-cli-5.3.3-27.el6_5.x86_64
---&gt; Package php-fpm.x86_64 0:5.3.3-27.el6_5 will be installed
---&gt; Package php-mbstring.x86_64 0:5.3.3-27.el6_5 will be installed
---&gt; Package php-mysql.x86_64 0:5.3.3-27.el6_5 will be installed
--&gt; Processing Dependency: php-pdo(x86-64) for package: php-mysql-5.3.3-27.el6_5.x86_64
--&gt; Running transaction check
---&gt; Package php-common.x86_64 0:5.3.3-27.el6_5 will be installed
---&gt; Package php-pdo.x86_64 0:5.3.3-27.el6_5 will be installed
--&gt; Finished Dependency Resolution

Dependencies Resolved

=======================================================================================================
 Package                   Arch                Version                      Repository            Size
=======================================================================================================
Installing:
 php-cli                   x86_64              5.3.3-27.el6_5               updates              2.2 M
 php-fpm                   x86_64              5.3.3-27.el6_5               updates              1.1 M
 php-mbstring              x86_64              5.3.3-27.el6_5               updates              455 k
 php-mysql                 x86_64              5.3.3-27.el6_5               updates               81 k
Installing for dependencies:
 php-common                x86_64              5.3.3-27.el6_5               updates              525 k
 php-pdo                   x86_64              5.3.3-27.el6_5               updates               75 k

Transaction Summary
=======================================================================================================
Install       6 Package(s)

Total download size: 4.4 M
Installed size: 15 M
Is this ok [y/N]: <b>「y」を入力してEnterを押す</b>
Downloading Packages:
(1/6): php-cli-5.3.3-27.el6_5.x86_64.rpm                                        | 2.2 MB     00:09
(2/6): php-common-5.3.3-27.el6_5.x86_64.rpm                                     | 525 kB     00:02
(3/6): php-fpm-5.3.3-27.el6_5.x86_64.rpm                                        | 1.1 MB     00:05
(4/6): php-mbstring-5.3.3-27.el6_5.x86_64.rpm                                   | 455 kB     00:02
(5/6): php-mysql-5.3.3-27.el6_5.x86_64.rpm                                      |  81 kB     00:00
(6/6): php-pdo-5.3.3-27.el6_5.x86_64.rpm                                        |  75 kB     00:00
-------------------------------------------------------------------------------------------------------
Total                                                                  224 kB/s | 4.4 MB     00:20
Running rpm_check_debug
Running Transaction Test
Transaction Test Succeeded
Running Transaction
  Installing : php-common-5.3.3-27.el6_5.x86_64                                                    1/6
  Installing : php-pdo-5.3.3-27.el6_5.x86_64                                                       2/6
  Installing : php-mysql-5.3.3-27.el6_5.x86_64                                                     3/6
  Installing : php-cli-5.3.3-27.el6_5.x86_64                                                       4/6
  Installing : php-mbstring-5.3.3-27.el6_5.x86_64                                                  5/6
  Installing : php-fpm-5.3.3-27.el6_5.x86_64                                                       6/6
  Verifying  : php-pdo-5.3.3-27.el6_5.x86_64                                                       1/6
  Verifying  : php-cli-5.3.3-27.el6_5.x86_64                                                       2/6
  Verifying  : php-common-5.3.3-27.el6_5.x86_64                                                    3/6
  Verifying  : php-mbstring-5.3.3-27.el6_5.x86_64                                                  4/6
  Verifying  : php-mysql-5.3.3-27.el6_5.x86_64                                                     5/6
  Verifying  : php-fpm-5.3.3-27.el6_5.x86_64                                                       6/6

Installed:
  php-cli.x86_64 0:5.3.3-27.el6_5                     php-fpm.x86_64 0:5.3.3-27.el6_5
  php-mbstring.x86_64 0:5.3.3-27.el6_5                php-mysql.x86_64 0:5.3.3-27.el6_5

Dependency Installed:
  php-common.x86_64 0:5.3.3-27.el6_5                  php-pdo.x86_64 0:5.3.3-27.el6_5

Complete!
[root@ ~]# </pre>

## MySQLをインストールする

<pre>[root@ ~]# <b>yum install mysql-server</b>
Loaded plugins: fastestmirror, security
Loading mirror speeds from cached hostfile
 * base: ftp.iij.ad.jp
 * epel: ftp.jaist.ac.jp
 * extras: ftp.iij.ad.jp
 * updates: ftp.iij.ad.jp
Setting up Install Process
Resolving Dependencies
--&gt; Running transaction check
---&gt; Package mysql-server.x86_64 0:5.1.71-1.el6 will be installed
--&gt; Processing Dependency: mysql = 5.1.71-1.el6 for package: mysql-server-5.1.71-1.el6.x86_64
--&gt; Processing Dependency: perl-DBI for package: mysql-server-5.1.71-1.el6.x86_64
--&gt; Processing Dependency: perl-DBD-MySQL for package: mysql-server-5.1.71-1.el6.x86_64
--&gt; Processing Dependency: perl(DBI) for package: mysql-server-5.1.71-1.el6.x86_64
--&gt; Running transaction check
---&gt; Package mysql.x86_64 0:5.1.71-1.el6 will be installed
---&gt; Package perl-DBD-MySQL.x86_64 0:4.013-3.el6 will be installed
---&gt; Package perl-DBI.x86_64 0:1.609-4.el6 will be installed
--&gt; Finished Dependency Resolution

Dependencies Resolved

=======================================================================================================
 Package                      Arch                 Version                    Repository          Size
=======================================================================================================
Installing:
 mysql-server                 x86_64               5.1.71-1.el6               base               8.6 M
Installing for dependencies:
 mysql                        x86_64               5.1.71-1.el6               base               893 k
 perl-DBD-MySQL               x86_64               4.013-3.el6                base               134 k
 perl-DBI                     x86_64               1.609-4.el6                base               705 k

Transaction Summary
=======================================================================================================
Install       4 Package(s)

Total download size: 10 M
Installed size: 29 M
Is this ok [y/N]: <b>「y」を入力してEnterを押す</b>
Downloading Packages:
(1/4): mysql-5.1.71-1.el6.x86_64.rpm                                            | 893 kB     00:03
(2/4): mysql-server-5.1.71-1.el6.x86_64.rpm                                     | 8.6 MB     00:40
(3/4): perl-DBD-MySQL-4.013-3.el6.x86_64.rpm                                    | 134 kB     00:00
(4/4): perl-DBI-1.609-4.el6.x86_64.rpm                                          | 705 kB     00:03
-------------------------------------------------------------------------------------------------------
Total                                                                  220 kB/s |  10 MB     00:47
Running rpm_check_debug
Running Transaction Test
Transaction Test Succeeded
Running Transaction
  Installing : perl-DBI-1.609-4.el6.x86_64                                                         1/4
  Installing : perl-DBD-MySQL-4.013-3.el6.x86_64                                                   2/4
  Installing : mysql-5.1.71-1.el6.x86_64                                                           3/4
  Installing : mysql-server-5.1.71-1.el6.x86_64                                                    4/4
  Verifying  : perl-DBD-MySQL-4.013-3.el6.x86_64                                                   1/4
  Verifying  : mysql-server-5.1.71-1.el6.x86_64                                                    2/4
  Verifying  : mysql-5.1.71-1.el6.x86_64                                                           3/4
  Verifying  : perl-DBI-1.609-4.el6.x86_64                                                         4/4

Installed:
  mysql-server.x86_64 0:5.1.71-1.el6

Dependency Installed:
  mysql.x86_64 0:5.1.71-1.el6   perl-DBD-MySQL.x86_64 0:4.013-3.el6   perl-DBI.x86_64 0:1.609-4.el6

Complete!</pre>

## 設定ファイルを編集する

これより、nginxとphp-fpmの設定ファイルを編集します。

僕は元々、Apacheで環境を構築してきたので、

WordPressのドキュメントルートは「/var/www/wordpress」に設定しました。

これはその為の作業メモとして考えてください。

### nginxの設定ファイルの編集

<pre>[root@]# <b>mkdir /var/www/　←ディレクトリの作成</b>


[root@]# <b>vi /etc/nginx/conf.d/default.conf</b>



    location / {
        <b>root /var/www/wordpress; index index.php;</b>
    }




    # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
    #
    <b>location ~ \.php$ { root /var/www/wordpress; </b></pre>

<pre><b>fastcgi_pass 127.0.0.1:9000; </b></pre>

<pre><b>fastcgi_index index.php; </b></pre>

<pre><b>fastcgi_param SCRIPT_FILENAME /var/www/wordpress$fastcgi_script_name;　←特にここに注意！ </b></pre>

<pre><b>include fastcgi_params; } </b>




    #    deny  all;
    #}
<b>gzip on; </b></pre>

<pre><b>gzip_http_version 1.0;</b></pre>

<pre><b>gzip_types</b></pre>

<pre><b>text/plain</b></pre>

<pre><b>text/xml</b></pre>

<pre><b>text/css</b></pre>

<pre><b>application/xml</b></pre>

<pre><b>application/xhtml+xml</b></pre>

<pre><b>application/rss+xml</b></pre>

<pre><b>application/atom_xml</b></pre>

<pre><b>application/javascript</b></pre>

<pre><b>application/x-javascript</b></pre>

<pre><b>application/x-httpd-php;</b></pre>

<pre><b>gzip_disable "MSIE[1-6]\.";</b></pre>

<pre><b>gzip_disable "Mozilla/4";</b></pre>

<pre><b>gzip_comp_level 1;</b></pre>

<pre><b>gzip_proxied any;</b></pre>

<pre><b>gzip_vary on;</b></pre>

<pre><b>gzip_buffers 4 8k;</b></pre>

<pre><b>gzip_min_length 1100;</b><b>最後の「}」の手前にここまで追記する</b></pre>

<pre>}</pre>

### php-fpmの設定ファイルの編集

<pre>[root@]# <b>vi /etc/php-fpm.d/www.conf </b>



; RPM: apache Choosed to be able to access some dir as httpd
user = <b>nginx</b>
; RPM: Keep a group allowed to write in log dir.
group = <b>nginx</b></pre>

**ユーザとグループを「nginx」に変更します。**

### nginxとphp-fpmを起動する

<pre>[root@]# <b>/etc/rc.d/init.d/nginx start</b>
Starting nginx:                                            [  OK  ]
[root@]# <b>chkconfig nginx on</b>
[root@]# <b>/etc/rc.d/init.d/php-fpm start</b>
Starting php-fpm:                                          [  OK  ]
[root@]# <b>chkconfig php-fpm on</b></pre>

### php.iniを編集する

<pre>[root@]# <b>vi /etc/php.ini</b>

; This directive determines whether or not PHP will recognize code between
;  tags as PHP source which should be processed as such. It's been
; recommended for several years that you not use the short tag "short cut" and
; instead to use the full <!--?php and ?--> tag combination. With the wide spread use
; of XML and use of these tags by other languages, the server can become easily
; confused and end up parsing the wrong code in the wrong context. But because
; this short cut has been a feature for such a long time, it's currently still
; supported for backwards compatibility, but we recommend you don't use them.
; Default Value: On
; Development Value: Off
; Production Value: Off
; http://www.php.net/manual/en/ini.core.php#ini.short-open-tag


<b>short_open_tag = On←「Off」から「On」に変更する</b></pre>

## MySQLの設定ファイルを編集する

<pre>[root@]# <b>vi /etc/my.cnf </b>



[mysqld]
datadir=/var/lib/mysql
socket=/var/lib/mysql/mysql.sock
user=mysql
# Disabling symbolic-links is recommended to prevent assorted security risks
symbolic-links=0
<b>character-set-server = utf8←ここを追加する</b>
[mysqld_safe]
log-error=/var/log/mysqld.log
pid-file=/var/run/mysqld/mysqld.pid</pre>

<pre>[root@]# <b>/etc/rc.d/init.d/mysqld start</b>
Initializing MySQL database:  Installing MySQL system tables...
OK
Filling help tables...
OK

To start mysqld at boot time you have to copy
support-files/mysql.server to the right place for your system

PLEASE REMEMBER TO SET A PASSWORD FOR THE MySQL root USER !
To do so, start the server, then issue the following commands:

/usr/bin/mysqladmin -u root password 'new-password'
/usr/bin/mysqladmin -u root -h sakura.ne.jp password 'new-password'

Alternatively you can run:
/usr/bin/mysql_secure_installation

which will also give you the option of removing the test
databases and anonymous user created by default.  This is
strongly recommended for production servers.

See the manual for more instructions.

You can start the MySQL daemon with:
cd /usr ; /usr/bin/mysqld_safe &

You can test the MySQL daemon with mysql-test-run.pl
cd /usr/mysql-test ; perl mysql-test-run.pl

Please report any problems with the /usr/bin/mysqlbug script!

                                                           [  OK  ]
Starting mysqld:                                           [  OK  ]
[root@]# <b>chkconfig mysqld on</b>



[root@]# <b>mysql_secure_installation</b>




NOTE: RUNNING ALL PARTS OF THIS SCRIPT IS RECOMMENDED FOR ALL MySQL
      SERVERS IN PRODUCTION USE!  PLEASE READ EACH STEP CAREFULLY!


In order to log into MySQL to secure it, we'll need the current
password for the root user.  If you've just installed MySQL, and
you haven't set the root password yet, the password will be blank,
so you should just press enter here.

Enter current password for root (enter for none):
OK, successfully used password, moving on...

Setting the root password ensures that nobody can log into the MySQL
root user without the proper authorisation.

Set root password? [Y/n] <b>「y」を入力してEnterを押す</b>
New password: <b>←パスワードを決めて入力する</b>
Re-enter new password:
Password updated successfully!
Reloading privilege tables..
 ... Success!


By default, a MySQL installation has an anonymous user, allowing anyone
to log into MySQL without having to have a user account created for
them.  This is intended only for testing, and to make the installation
go a bit smoother.  You should remove them before moving into a
production environment.

Remove anonymous users? [Y/n] <b>Enterを押す</b>
 ... Success!

Normally, root should only be allowed to connect from 'localhost'.  This
ensures that someone cannot guess at the root password from the network.

Disallow root login remotely? [Y/n] <b>Enterを押す</b>
 ... Success!

By default, MySQL comes with a database named 'test' that anyone can
access.  This is also intended only for testing, and should be removed
before moving into a production environment.

Remove test database and access to it? [Y/n] <b>Enterを押す</b>
 - Dropping test database...
 ... Success!
 - Removing privileges on test database...
 ... Success!

Reloading the privilege tables will ensure that all changes made so far
will take effect immediately.

Reload privilege tables now? [Y/n] <b>Enterを押す</b>
 ... Success!

Cleaning up...



All done!  If you've completed all of the above steps, your MySQL
installation should now be secure.

Thanks for using MySQL!
</pre>

## phpinfoを作成する

<pre>[root@]# <b>vi /var/www/wordpress/index.php</b>

<b></b><b>&lt;?<br />phpinfo();<br />?&gt;</b>

</pre>

### 実際にアクセスしてみる

ブラウザにて、「http://サーバのIPアドレス」にアクセスしてみると、設定がうまくいけばphpinfoが表示されると思います。

<img decoding="async" loading="lazy" title="スクリーンショット_2014-01-13_12_40_49-3.png" src="/wp-content/uploads/2014/01/e38fef066566ee0d6ad27af168d5879f.png" alt="スクリーンショット 2014 01 13 12 40 49 3" width="600" height="586" border="0" /> 

ここまで来れば、WordPressを動かせると思います(｀･ω･´)ゞ

## まとめ

今回は、nginxとphp-fpmとMySQLをインストールし、とりあえず動くように設定しました。

次回はWordPressの設定を踏まえて更新したいと思います(｀･ω･´)ゞ

 [1]: https://twitter.com/jun3010me