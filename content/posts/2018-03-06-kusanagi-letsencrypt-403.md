---
title: KUSANAGIでLet’sEncryptの証明書の更新が上手くいかなかったのでnginxの設定を見直した
author: 魚住 惇
type: post
date: 2018-03-05T20:09:39+00:00
url: /kusanagi-letsencrypt-403-13312.html
thumbnail: /wp-content/uploads/2018/03/Image-2018-03-06-4-52.png
categories:
  - ブログ考察

---
<img decoding="async" loading="lazy" class="alignnone size-full wp-image-13310" src="/wp-content/uploads/2018/03/Image-2018-03-06-4-52.png" width="712" height="652"  sizes="(max-width: 712px) 100vw, 712px" />

WordBench岐阜で常時SSL化の話を聞いて、その翌日にSSLの設定を行いました。当ブログはさくらのクラウド上のKUSANAGIを使って運用しているので、SSL化はあっという間でした。

ところがどっこい、証明書の更新を自動で行う際にエラーが起こり、ブログを閲覧しようとすると詐欺サイト扱いになりました笑

## 原因は403 Forbidden

つまり、アクセスする際の権限がないということでした。

Let&#8217;sEncryptで証明書を更新する際に、DocumentRootの直下にある.well-knownというディレクトリにアクセスするんですが、その時にエラーを吐いていました。

<pre>Attempting to renew cert (ドメイン名) from /etc/letsencrypt/renewal/ドメイン名.conf produced an unexpected error: Failed authorization procedure. ドメイン名 (http-01): urn:acme:error:unauthorized :: The client lacks sufficient authorization :: Invalid response from http://ドメイン名/.well-known/acme-challenge/aaaaa: "




<center>
  <h1>
    403 Forbidden
  </h1>
</center>


<hr />

<center>
  ". Skipping.
  All renewal attempts failed. The following certs could not be renewed:
   /etc/letsencrypt/live/ドメイン名/fullchain.pem (failure)
  </pre>
  
  
  <p>
    こんな感じのエラーでした。403というこは、ファイルは存在していてもアクセスできないか、そもそもアクセス権が存在しないからファイルにたどり着けないか。ということ。同じディレクトリにtest.txtなどの適当なテキストファイルを置いても403と表示されていたので、単純に「ああ、ここにアクセスできないんだな」ということがわかりました。
  </p>
  
  
  <h2>
    解決策はnginxの設定の見直し
  </h2>
  
  
  <p>
    で、具体的に何がどうなっていたかというと、
  </p>
  
  
  <p>
    /etc/nginx/conf.d/にある設定ファイル「domain-http.conf」には「.well-known」ディレクトリのアクセスを許可する設定が記述されているのに、「domain-ssl.conf」にはアクセス許可の記述がありませんでした。
  </p>
  
  
  <p>
    記述が無いなら自分で書けばいいじゃん。ということで、
  </p>
  
  
  <pre> location ^~ /.well-known/ {
				allow all;
		}</pre>
  
  
  <p>
    をssl.confにも追加しました。その結果、「.well-known」ディレクトリに置いたテキストファイルもブラウザから確認できました。
  </p>
  
  
  <h2>
    感想
  </h2>
  
  
  <p>
    <img decoding="async" loading="lazy" class="alignnone size-full wp-image-13311" src="/wp-content/uploads/2018/03/Image-2018-03-06-5-02.png" width="723" height="728"  sizes="(max-width: 723px) 100vw, 723px" />
  </p>
  
  
  <p>
    隠しても意味ないけど、一応笑
  </p>
  
  
  <p>
    ブログが丸1日、証明書のエラーが原因でうまく表示出来なかったと思います。
  </p>
  
  
  <p>
    上記のエラーのそもそもの原因は恐らく、SSL化とドメイン名変更を同時に行ったことだと推測しました。以前からKUSANAGIを利用していて、ドメイン名のディレクトリがある。その状態でドメイン名の変更を行い、SSL化を行った結果です。
  </p>
  
  
  <p>
    多分だけど、ドメイン名を変更せずにSSL化の設定を行う場合は大丈夫だと思います。KUSANAGIでLet&#8217;sEncryptを使って自動更新して失敗した例を検索で漁っても、403で止まった人が他に見つかりませんでした。
  </p>
  
  
  <p>
    初回の証明書発行時は、厳密に言えばSSL化してなかったから、domaimn-http.confの方の設定だけで良かったんだと思います。まさか2回目以降で失敗するかもという罠があったなんてね。
  </p>
  
  
  <p>
    もしLet&#8217;sEncryptで証明書を更新する際に、403が表示されることがあったら、nginxの設定を見直してみてください。
  </p>