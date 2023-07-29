---
title: MacでTSを再生するソフトを考える
author: 魚住 惇
type: post
date: 2012-08-25T13:10:18+00:00
url: /mac-ts-play-677.html
thumbnail: /wp-content/uploads/2012/08/082512_1342_MacTS1.png
onswipe_thumb:
  - '/wp-content/plugins/onswipe/thumb/thumb.php?src=/wp-content/uploads/2012/08/082512_1342_MacTS4.png&amp;w=600&amp;h=800&amp;zc=1&amp;q=75&amp;f=0'
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 71
scc_follow_count_feedly:
  - 37
categories:
  - Mac

---
MacBookAirが我が家にやってきて、2か月が経ちました。</p> 

届いたその日にVMwareFusion4を4500円キャンペーンで購入したのに、

昨日、49.99ドルでVMwareFusion5がリリースされるとか、どんだけ・・・。

と思ったのも、良い思い出です。</p> 

さて、MacBookAirを使う上で、一番悩まされたのが、動画再生でした。

再生したい動画の拡張子にもよりますが、今回の目標は、こちらです。

<span style="font-size: 14pt;"><b>共有フォルダ上にあるTSファイルをMacから参照し、再生する </b></span>

<!--more-->

Windowsであれば、<span style="color: red;">ネットワークドライブを開いてTSファイルをダブルクリックするだけ</span>ですね。

しかし、MPEG2-TSというある意味特殊なファイルをMacで再生するということは、非常に困難なことでした。</p> 

※これはあくまで、NASに保存したTSファイルをMacで再生することが目的です。

<span style="color: red;"><b>MP4やAVIくらいなら、VLCで問題なく再生できますよ！</b></span></p> 

使えると思ったアプリは、こちらです！

<a href="http://click.linksynergy.com/fs-bin/stat?id=X4b77EM*hqg&offerid=94348&type=3&subid=0&tmpid=2192&RD_PARM1=https%253A%252F%252Fitunes.apple.com%252Fjp%252Fapp%252Fmovist%252Fid461788075%253Fmt%253D12%2526uo%253D4%2526partnerId%253D30" target="itunes_store"><span style="font-size: 16pt;"><b>Movist 1.2</b></span></a>

{{< figure src="/wp-content/uploads/2012/08/082512_1342_MacTS1.png" alt="" >}} </p> 

再生エンジンに**FFmpeg**を使用した動画プレイヤーです。

また、設定よりQuickTimePlayerを再生エンジンに変更することもできます。</p> 

ただし、<span style="color: red; font-size: 14pt;"><b>450円</b></span>します。</p> 

有料バージョンは1.2.0で、無料バージョンは、0.6.8です。

今回の目標達成は、1.2.0で出来た為、今回のおすすめは、この有料バージョンです。</p> 

<span style="color: red;"><b>このプレイヤーなら、NASにあるTSファイルを再生できました！</b></span></p> 

うわぁ・・・Windowsでは当たり前なこと過ぎて、なんか感動が薄れる笑</p> 

ただ、地デジを録画したファイルだと、そのまま再生するとアスペクト比がおかしくなります。</p> 

例えばこんな感じ。○が潰れています。

{{< figure src="/wp-content/uploads/2012/08/082512_1342_MacTS2.png" alt="" >}} </p> 

こういう時は、アスペクト比を手動で調整しましょう。

{{< figure src="/wp-content/uploads/2012/08/082512_1342_MacTS3.png" alt="" >}} </p> 

{{< figure src="/wp-content/uploads/2012/08/082512_1342_MacTS4.png" alt="" >}} </p> </p> 

**これでMacで快適TSライフが送れそうです。**</p> 

<span style="font-size: 14pt;"><b>おまけ　これまで試した動画プレイヤー</b></span></p> 

**QuickTimePlayer**:一応再生できるが、音が飛んだり、TSの中にサービスが多くあると<span style="color: red;">正常に再生されない</span>場合がある

**VLC**:一応再生できるが、キャッシュが追い付かない挙動が見られ、ブツブツ途切れて<span style="color: red;">まともに見られない</span>

**mplayer2**:MoutainLionでは<span style="color: red;">うまく動かない</span>

**MplayerX**:NAS上のTSの再生には成功するが、<span style="color: red;">シークバーが機能しない</span>

**MPlayer OSX Extended**:<span style="color: red;">シークバーが機能しない</span>

**Mac Blu-ray Player**:<span style="color: red;">コマ落ちや音飛びが激しい</span>

**Movist0.6.8**:再生できるが、<span style="color: red;">シークバーが機能しない</span>