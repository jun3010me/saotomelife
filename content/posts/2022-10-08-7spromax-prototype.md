---
title: 7sPro MAX、それは分割HHKBの新たな選択肢
author: 魚住 惇
type: post
date: 2022-10-08T07:12:04+00:00
excerpt: 分割HHKB型キーボード「7sPro MAX」のレビュー記事です。
url: /7spromax-prototype-23076.html
thumbnail: /wp-content/uploads/2022/10/DSC07370-1.jpeg
wp-seo-meta-robots:
  - 'a:0:{}'
categories:
  - 'ガジェット&amp;PC'

---
 

HHKBを分割した形の自作キーボード「7sPro」、このブログでも過去に自費で購入したり、遊舎工房ギルドメンバーとして活動した内容をビルドログとしてまとめたりしました。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="X6NrnS7ln3">
    <a href="/7spro-buildlog-21373.html">分割型HHKB配列の自作キーボード 7sPro ビルドログ</a>
  </blockquote>
</div></figure> <figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  <blockquote class="wp-embedded-content" data-secret="mbVdITBjRP">
    <a href="/7spro-handazumikit-buildlog-22728.html">HHKBユーザー向け自作キーボード「はんだ付け済み簡単キット:7sPro」のビルドエッセイ</a>
  </blockquote>
</div></figure> 

作者のサリチル酸さんという方は、7sProの前身だった7sKBの他にも、ErgoArrowsやNKNL7JPなど、僕が数えきれないほどの自作キーボードを開発されている方です。<figure class="wp-block-embed is-type-rich is-provider-wp-oembed-blog-card wp-block-embed-wp-oembed-blog-card">

<div class="wp-block-embed__wrapper">
  {{< blog-card "https://salicylic-acid3.hatenablog.com/">}}
</div><figcaption>サリチル酸さんが書かれているブログ</figcaption></figure> 

今回は、そんなサリチル酸さんが2022年10月現在開発を進めている、**分割HHKB型の自作キーボード「7sPro MAX」**のプロトタイプ1をお借りすることができたので、現時点での完成度や使い心地などをレビューしていきます。

なお、開発中のキーボードを分解した写真も一部登場しますが、許可を得た上で掲載しています。

## 7sPro MAXはキーボードとパームレストの一体型
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/E29F5AFE-151D-4A70-AFE2-A512EBB61693_1_201_a.jpeg" alt="" >}} </figure> 

まずは全体を撮影した写真をご覧ください。こちらが2022年10月現在開発中の7sPro MAXです。お借りした本体のボディは3Dプリントされたものですが、完成版のボディではアルミを削り出して作られるそうです。

多くの自作キーボードが、左右を分割してTRRSケーブルで接続するという分割型の形をしています。一般的なキーボード、つまり全体が1つの大きな塊だと、ホームポジションに手を置いた際に窮屈さを感じてしまい、肩こりの原因となっているのではないかと考えられてきました。

タイプライターの設計思想では一体化型で段によってキーをずらすことに意味がありましたが、電子回路で成り立つキーボードでは、昔の名残に配慮することなく、自由に設計することができます。

多くの自作キーボード開発者の方が、従来のキーボードに対して窮屈さを感じていたせいか、売られているキットのほとんどが左右に分割されています。

そんな分割型の自作キーボードを実際に使っていると、パームレストも分割されたものが必要となり、結果的に4つに分かれた状態で机に配置する必要が出てきます。ただ分割されただけだと、左と左のパームレスト、右と右のパームレストをそれぞれ机の上に置いて使うわけです。キーボードとパームレストまでの距離なども人によってちょうど良い場所が異なるため、個人それぞれの最適解を探せます。

ところがこれだと、ちょっとパームレストに手が当たったりするだけで置いた場所からずれることがしょっちゅうあります。左右の離れている距離を微調整するとなると、パームレストもそのタイミングで位置を再度調整する必要も出てきます。

これがね、僕としては結構ストレスを感じるんですよ。<span style="background-image: linear-gradient(transparent 60%, rgba(252, 185, 0, 0.5) 60%)" class="sme-highlighter">場所を気にしなくちゃいけないキーボードとパームレストの組み合わせが、一体化型なら2つで済むのに、それを分割したからその2倍の4つに増える</span>わけです。

それを解消するために、**7sPro MAXは、分割でありながらキーボード本体とパームレストを一体化することによって、机に置くときのキーボードの角度などを調整しても、すぐにいつも同じ感覚でホームポジションに指を置くことができる**ようになりました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07377.jpeg" alt="" >}} </figure> 

横から見てみると、パームレストの下の部分と、キーボードが重なっていることがわかります。

## ちょっとだけ分解してみる
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07378.jpeg" alt="" >}} </figure> 

裏面を見てみると、3箇所でねじ止めされていることがわかります。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07379.jpeg" alt="" >}} </figure> 

取り外してみました。こうして見ると、見た目は本当にHHKBそのものです。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07382.jpeg" alt="" >}} </figure> 

本体側をもう少しだけ分解してみます。更に4箇所のネジを取り外してみると、基板のカバーが出てきます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07384.jpeg" alt="" >}} </figure> 

それを更に取り外すと、アクリルプレートが出てきて、その奥にPCBが見えてきました。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07385.jpeg" alt="" >}} </figure> 

**うひゃぁ、美しい。**

美しさを感じるのは自分だけでしょうか。そして、7sProではLEDテープをはんだ付けする部分がありましたが、7sPro MAXではLEDが分割部分に沿う流れではんだ付けできるようになっています。基板の裏面全体ではなくて、あくまで分割したときに見える部分のみを光らせようという考えが伺えます。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07394.jpeg" alt="" >}} </figure> 

実際にLEDが光っているとこんな感じです。全体をギラギラと輝かせるのではなくて、これくらいの方が落ち着いたイメージを保ったまま使えると思います。とても綺麗です。

## 実際に使ってみて気になったこと
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07388.jpeg" alt="" >}} </figure> 

ここからは、何枚か写真を紹介しながら、実際に使ってみた感想を書こうと思います。

まず使ってみて一番最初に抱いたのは、**「恐ろしく完成度の高いキーボードが出たな」**というある種の恐怖感でした。最早、個人レベルで販売する自作キーボードの枠を超えてしまっているのではないか。僕がこれまで見てきた自作キーボードキットと比べて、<span style="background-image: linear-gradient(transparent 60%, rgba(252, 185, 0, 0.5) 60%)" class="sme-highlighter">完成度が高すぎる</span>と思ったんですよ。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07393.jpeg" alt="" >}} </figure> 

今回お借りしたプロトタイプに使われているスイッチはZealPC製の「Pearlio&#x2122; Switches / Linear」で、ボトムアウトフォースが60gfと、HHKBエバンジェリストの僕としてはちょっと重たく感じました。なので、長時間ずっとタイピングするのは僕には耐えられませんでした。

とはいえ、<span style="background-image: linear-gradient(transparent 60%, rgba(252, 185, 0, 0.5) 60%)" class="sme-highlighter">パームレストと本体の相性は最高そのもので、親指部分が凹んでいるのもとっても好印象</span>です。それと、プレートやPCBがケースで覆われているからか、タイプ時に発生する音の中の、特に反響音が聞こえづらくなっています。<span style="background-image: linear-gradient(transparent 60%, rgba(252, 185, 0, 0.5) 60%)" class="sme-highlighter">かなり上品な音を奏でてくれます</span>。自作キーボードのほとんどはサンドイッチ式で、横から見ると中身が丸見え構造です。それだとタイプ時にキースイッチの底打ち時に発生する音が外に漏れてしまって、個人的には不快に感じる音になってしまいます。お借りした7sPro MAXだとその嫌な音が聞こえませんでした。外側のケースが見た目を良いものにするとともに、音も吸収してくれている気がします。
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07391-1.jpeg" alt="" >}} </figure> 

ただ一つ、チルトスタンドが実装されておらず、キーボード全体の角度が変更できないことが唯一の不満ポイントです。

普段HHKBを使う際は、チルトスタンドの大きい方を立てています。ホームポジションである真ん中の段が、ちょっと斜めに傾くくらいの角度が好みです。HHKBの場合、チルトスタンドを立てていない状態だと、中段のキーの角度が机と平行となります。僕はそれでも「ちょっと角度が低いな」と思ってしまうので、角度をもっとつけたいわけです。

お借りした7sPro MAXだと、中段が既に平行どころか、奥に向かってやや下がり気味です。この角度では数字や記号のある最上段まで、距離を感じてしまいます。かといって、パームレストの高さはちょうど良いので、直角三角形の形をした下駄を履かせて角度をつけたとしても、パームレストごと盛り上がってしまいそうです。それはそれで使いづらくなりそうな予感がします。

角度については、作者のサリチル酸さんにもDiscordで報告済なので、今後の改善が楽しみです。

## 分割型HHKBはHHKBではない
<figure class="wp-block-image">

{{< figure src="/wp-content/uploads/2022/10/DSC07399.jpeg" alt="" >}} </figure> 

僕がTwitterの名前を実名に変更したのは、HHKB ユーザーミートアップ Vol.3がきっかけでした。初めてイベントで登壇したわけですが、その時にサリチル酸さんより直々に「今のHHKBに不満はありませんか？」という質問を受け、「分割が出てほしいと思います。」と答えました。これに対してサリチル酸さんは「ようこそこちら側の世界へ」みたいな言葉を残しました。

それから僕は自作キーボードの世界にも足を踏み入れることになったわけですが、分割型やカラムスタッガード、Alice配列などを一通り試してきて、結論が出ました。

<p class="has-text-align-center">
  <strong>分割したHHKBは、HHKBにあらず</strong>
</p>

今回お借りした7sPro MAXではっきりしました。これはHHKB配列の分割キーボードであり、HHKBそのものではありません。あくまで分割キーボードとしての一つの答えです。

僕自身も一時期は「なんでPFU社は、これだけニーズがある分割型HHKBを出さないんだろう」とばかり思っていました。自作キーボードのキットにはChoco60や7sProなど、HHKB配列を意識したものがちょくちょくあります。分割HHKBが正規品として発売されない分の反動として、いろんな方が作られたのだと思います。そして 7sPro MAXは、間違いなく分割型HHKBの最高峰に違いありません。

しかしそれはそれ、これはこれ。<span style="background-image: linear-gradient(transparent 60%, rgba(252, 185, 0, 0.5) 60%)" class="sme-highlighter">7sPro MAXと同じものをHHKBに求めるのは違う話</span>なのです。

実は僕は長年肩こりに悩まされていて、「この肩こりの原因は長時間HHKBを使い続けているからなのでは？」という思いから分割を試そうという考えに至りました。しかし最近になって、肩こりはHHKBを使って肩が窮屈なことに耐えていたことが主な原因ではなくて、座ったまま長時間同じ姿勢でいることと、猫背で画面を見続けていることだということがわかりました。

僕にとって「一体化型キーボード＝肩が凝りやすい」というイメージはすっかりなくなりました。言い換えてみれば、一体化型だろうが分割だろうが、タイピング時の姿勢が悪ければ肩こりがひどくなる可能性はどちらにもあるわけです。

そりゃ、分割した方がゆったりとした姿勢でタイプできるのはわかるんですけどね、今の自分にとって分割に対する優先度が以前と比べて低くなった気がします。

この発見のおかげで、7sPro MAXを分割HHKB型自作キーボードとして最高のものになると思いつつも、純正のHHKBとは分けて考えることができました。一言で言うと、どちらも最高の存在であり、HHKBはHHKBで、それで最高なんです。

ただ一つ言えるのは、**7sKBや7sProを使ったことがある人が7sPro MAXを触ったら、<span style="background-image: linear-gradient(transparent 60%, rgba(255, 105, 0, 0.5) 60%)" class="sme-highlighter">絶対に惚れる</span>だろうな**ということだけ。使い比べてみると確実な進化を感じることができて、「あぁ・・・こう進化したのか。素晴らしい。」という想いで胸がいっぱいになります。

HHKBユーザー全ての方に乗り換えを勧めたいわけではありませんが、どうしても分割型のHHKBを望むのなら、7sPro MAXの登場を待たれたら良いのではないでしょうか。

この度は7sPro MAXのプロトタイプを快く貸してくださったサリチル酸さんには本当に感謝しています。今回も素敵なキーボードの開発に着手してくださってありがとうございました。おかげさまで、HHKBの良さを再確認できたとともに、分割HHKBの新たな可能性にもいち早く触れることができました。

ケースがアルミになると、7sProと比べて価格がかなり上がりそうですが、その分完成度の高いものが登場すると思います。

この記事を読んでくださった方で分割HHKB型のキーボードを欲している方がいらっしゃいましたら、7sPro MAXの登場を楽しみにしていてください。