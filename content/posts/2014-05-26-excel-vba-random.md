---
title: ExcelのVBAでランダムで人を指名するマクロを作成した
author: 魚住 惇
type: post
date: 2014-05-26T08:49:37+00:00
url: /excel-vba-random-8339.html
thumbnail: /wp-content/uploads/2014/05/2268b53ef528e63006adb86177c9712e.png
scc_follow_count_feedly:
  - 37
categories:
  - PC

---
<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/2268b53ef528e63006adb86177c9712e.png" alt="スクリーンショット 2014 05 26 16 07 59" title="スクリーンショット 2014-05-26 16.07.59.png" border="0" width="600" height="513" /><!--more-->

こんにちは、[ジュン@jun3010me][1]です。

今回は、**「時間内に会場の中の人をランダムに指名できる仕組みをExcelで作れないか？」**  
という要望があったので、VBAを使ってそれっぽいのを作ってみました。

## 要望詳細

今回の要望の詳細はこんな感じ  
**1.会場内の人を番号で指名する  
2.1度当たった人は2度と当たらない  
3.誰が当たるか分からないドキドキ感を出す  
4.今何人目が当たったのか分かるようにする  
5.Excel2013で作って欲しい</p> 

</b>  
さて、それでは作っていきましょうか。

## Excelの設定を変更する

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/4c74cd80caafc2c43ae5f5df22310c6e.png" alt="スクリーンショット 2014 05 26 16 20 25" title="スクリーンショット 2014-05-26 16.20.25.png" border="0" width="600" height="384" /> 

今回は、Excel2013を利用しますが、インストールしたままの状態だと、機能が足りません。

そこでまず、設定を変更して、「開発」タブを表示します。

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/3083980bb6570dcca0d7a9e58a752a2c.png" alt="スクリーンショット 2014 05 26 16 20 25" title="スクリーンショット_2014-05-26_16_20_25.png" border="0" width="600" height="400" />  
  
まず、**「ファイル」をクリック**します。



<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/e76ba56f44510cd32f3cc10cfd36ca88.png" alt="スクリーンショット 2014 05 26 16 25 33" title="スクリーンショット_2014-05-26_16_25_33.png" border="0" width="449" height="318" /> 

**「オプション」をクリック**します。



<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/98a7696e75029a89fa9d5ad9af8affa1.png" alt="スクリーンショット 2014 05 26 16 26 09" title="スクリーンショット_2014-05-26_16_26_09.png" border="0" width="600" height="435" /> 

**「リボンのユーザー設定」をクリック**し、  
**「メイン　タブ」の中の「開発」にチェック**を入れ、**「OK」をクリック**します。

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/ac64cb690e139430a3ca839372264579.png" alt="スクリーンショット 2014 05 26 16 30 15" title="スクリーンショット_2014-05-26_16_30_15.png" border="0" width="573" height="271" />  
これでリボンのタブに**「開発」**が追加されました。

## レイアウトを考える

Excelの設定が終わったところで、どんな見た目にするのかを決めていきます。

僕はこんな感じにしていきました。  
<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/ebda17fbaa59d1e15d4d09588e38339f.png" alt="スクリーンショット 2014 05 26 16 38 00" title="スクリーンショット 2014-05-26 16.38.00.png" border="0" width="600" height="425" />  
A5に何番の人が当たったのかを表示し、  
A2に何番目に当たっているのかを分かるようにしました。  


### ボタンを設置する

ボタンっていうのは、これのことです。

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/6fa7f59510dfcad8ac3dba3374412948.png" alt="スクリーンショット 2014 05 26 16 07 59" title="スクリーンショット_2014-05-26_16_07_59.png" border="0" width="600" height="513" /> 

**「ボタンをクリックしたら、シャッフルした番号が出てくる」**という感じにしたいので、  
ここにボタンを設置します。

### ボタンの設置方法

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/15f58effe18031dc25af03f9d46065d0.png" alt="スクリーンショット 2014 05 26 16 43 08" title="スクリーンショット_2014-05-26_16_43_08.png" border="0" width="564" height="398" />  
先ほど設定で出した**「開発」をクリック**し、  
**「挿入」をクリック**し、**左上の四角いアイコンをクリック**します。



<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/0d7e3f2dd58f642190066f792152694c.png" alt="スクリーンショット 2014 05 26 16 45 53" title="スクリーンショット_2014-05-26_16_45_53.png" border="0" width="457" height="442" /> 

ボタンを設置すると、「マクロの登録」という表示が出てきます。  
ここで**「新規作成」**をクリックします。

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/8de2d2f02564d90321d438ff1d256394.png" alt="スクリーンショット 2014 05 26 16 51 08" title="スクリーンショット 2014-05-26 16.51.08.png" border="0" width="600" height="409" />  
すると、VBAの編集画面が表示されます。  
このウィンドウの中の、**SubとEnd Subの間**にコードを書いていきます。

## どんな感じのコードにするのか

ボタンの設置も済んだので、ここでどういった内容のマクロにするのかを書いておきます。

今回は2つのボタンを用意して、それぞれ**別の働き**をしてもらいます。  
1つは、**会場の人数分の番号をランダムに並べるボタン。**  
もう1つは、**並べた数字を上から順番に、特定のセルに表示するボタンです。**



<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/fd0bc16eeb78aa44eef5cec243e78ba8.png" alt="スクリーンショット 2014 05 26 17 06 12" title="スクリーンショット 2014-05-26 17.06.12.png" border="0" width="573" height="405" /> 

ボタンがもう1つ必要なので、さっきと同じ手順で追加しました。



### ボタンの名前を変更する

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/8a1ccd87e614a6f719f97f5b36f366f6.png" alt="スクリーンショット 2014 05 26 17 07 34" title="スクリーンショット_2014-05-26_17_07_34.png" border="0" width="546" height="362" />  
  
ボタンの名前を変更することで、ボタンをクリックしたら何が起こるのかを分かりやすく表示できますね。

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/2091f32afd8533b5cf4f5840be175096.png" alt="スクリーンショット 2014 05 26 17 11 11" title="スクリーンショット 2014-05-26 17.11.11.png" border="0" width="600" height="248" />  
こんな感じにしました。



## 「シャッフルボタン」ボタンのコード

今回は、こちらのサイトのコードを参考にさせていただきました。  
<a href="http://sato001.com/excel-vba-random25" target="_blank"><img decoding="async" loading="lazy" class="alignleft" align="left" border="0" src="http://capture.heartrails.com/150x130/shadow?http://sato001.com/excel-vba-random25" alt="" width="150" height="130" /></a><a style="color:#0070C5;" href="http://sato001.com/excel-vba-random25" target="_blank">エクセルVBAで1～25までの数字をランダムに発生させる処理を考えてみました</a><a href="http://b.hatena.ne.jp/entry/http://sato001.com/excel-vba-random25" target="_blank"><img decoding="async" border="0" src="http://b.hatena.ne.jp/entry/image/http://sato001.com/excel-vba-random25" alt="" /></a><br style="clear:both;" />

このサイトでは、1〜25までの数字をランダムに発生させるVBAを公開していました。

これを元にして作ったのが、こちらのコードです。

**Const MIN = 1  
Const MAX = 41 &#8216;全員で41人いるとします。  
Dim num As Integer  
Dim a_num(MIN To MAX) As Integer  
Dim flag(MIN To MAX) As Boolean  
Dim cnt As Integer</p> 

&#8216;乱数を初期化します  
Randomize

For cnt = MIN To MAX  
Do  
&#8216;乱数=Int((最大値 &#8211; 最小値 +1 ) * Rnd + 最小値)  
num = Int((MAX &#8211; MIN + 1) * Rnd() + MIN)  
Worksheets(&#8220;Sheet1&#8221;).Cells(cnt, 4).Value = num  
Loop While flag(num)

a_num(cnt) = num  
flag(num) = True  
Next cnt  
Worksheets(&#8220;Sheet1&#8221;).Range(&#8220;E1&#8221;).Value = 0  
</b>

このコードを実行すると、こんな感じになります

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/b3a57cc39c90f161ea7f58e3a4b44935.png" alt="スクリーンショット 2014 05 26 17 23 54" title="スクリーンショット 2014-05-26 17.23.54.png" border="0" width="195" height="600" />  
コード内のMAXで指定した数分、  
D列にランダムな数字が出てきます。

コード内のこの部分、  
 **Worksheets(&#8220;Sheet1&#8221;).Cells(cnt, 4).Value = num  
**  
  
これの**cntというのが繰り返しで回している行番号**、**4というのが列番号**なので、  
**D列の1行目から順番に、下に向かってランダムな数が書かれていく**わけです。

## 「次はこの人！」ボタンのコード

もう1つのボタンのコードはこんな内容です。

**Dim count As Integer  
Dim ataru As Integer  
Dim i As Integer</p> 

For i = 1 To 41&#8217;ただの演出です  
Worksheets(&#8220;Sheet1&#8221;).Range(&#8220;A5&#8221;).Value = i  
Application.Wait [Now() + TimeValue(&#8220;0:00:00.0005&#8221;)]&#8217;シャッフルしている感じの演出  
Next i

Worksheets(&#8220;Sheet1&#8221;).Range(&#8220;E1&#8221;).Value = Worksheets(&#8220;Sheet1&#8221;).Range(&#8220;E1&#8221;).Value + 1  
ataru = Worksheets(&#8220;Sheet1&#8221;).Range(&#8220;E1&#8221;).Value

Worksheets(&#8220;Sheet1&#8221;).Range(&#8220;A5&#8221;).Value = Worksheets(&#8220;Sheet1&#8221;).Cells(ataru, 4).Value  
</b>

このコードでは、**A5で番号を1〜41までを順番に表示**し、ルーレットを回している感じを出します。  
その後で、今が何番目なのかを数える為に**数をカウント**します。  
**カウントした数字は、E1に書き出し**ます。

最後に、**D列のカウントした数字の行を読み取って、ルーレット感を出したA5に書き出し**ます。

実行するとこんな感じ

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/50d4ce280403395087fbfd0e0fc08b95.png" alt="スクリーンショット 2014 05 26 17 35 17" title="スクリーンショット 2014-05-26 17.35.17.png" border="0" width="600" height="327" />  
さっきのシャッフルボタンで作ったD列の数字を読み取ったので、  
1番目には、32番の人が当たりました。

<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/285680cac5f71030e00c91752e737a17.png" alt="スクリーンショット 2014 05 26 17 35 38" title="スクリーンショット 2014-05-26 17.35.38.png" border="0" width="600" height="331" />  
2回目には、その下の27番の人が当たりました。

以上でシャッフルして番号をランダムで出す部分が出来ました。  


## 最後の仕上げ

これで仕組みは完成したんですが、  
D列の数字を誰かに見られてしまうと、  
次に何番が当たるのかが知られてしまいます。

そんなトラブルを防ぐ為に、**D列の数字を白で塗ってやりました。**  
<img decoding="async" loading="lazy" src="/wp-content/uploads/2014/05/24663d54243be327abe20fc82c276a6c.png" alt="スクリーンショット 2014 05 26 17 39 13" title="スクリーンショット_2014-05-26_17_39_13.png" border="0" width="600" height="461" />  
うん、よし。これでわからない。

## おわりに

如何でしょうか。  
本当は配列の中にランダムな数を入れて、順番に表示する方が賢い方法なのかもしれませんが、  
僕はプログラマーではないので、少しExcelのセルを利用する形にしました。

もっとスマートなコードになる方法があったら、  
是非とも教えていただきたいと思います。

良かったら参考にしてくださいヽ(=´▽\`=)ﾉ

参考にさせていただいた、ブログ「satoの雑技術ノート」さん、  
コードを一部利用させていただきました。  
ありがとうございました。

 [1]: https://twitter.com/jun3010me