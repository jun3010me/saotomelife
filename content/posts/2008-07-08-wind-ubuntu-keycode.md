---
title: Wind + Ubuntuで「半角/全角」と「\」「_」が使えない★追記あり
author: 魚住 惇
type: post
date: 2008-07-08T07:00:28+00:00
url: /wind-ubuntu-keycode-77.html
thumbnail: /wp-content/uploads/2016/06/saotomelogos.jpg
has_been_twittered:
  - failed
twitter_failure_code:
  - 400
twitter_failure_reason:
  - Settings do not permit the auto-tweeting of old posts
views:
  - 74
scc_follow_count_feedly:
  - 37
categories:
  - Wind＋Ubuntu

---
Ubuntuをインストールしたものの、

しばらく使ってたら「半角/全角」と「\」「_」が使えなくなってしまったので、

<!--more-->

xmodmapの設定ファイルを作りました。

**★追記★**?**CompizFusionで多様するSuperキー(Windowsキー)も反応しなかったので、**?**追記しました。**

&#8212;ここから&#8212;

keycode?? 8 = keycode?? 9 = Escape keycode? 10 = 1 exclam keycode? 11 = 2 quotedbl keycode? 12 = 3 numbersign keycode? 13 = 4 dollar keycode? 14 = 5 percent keycode? 15 = 6 ampersand keycode? 16 = 7 apostrophe keycode? 17 = 8 parenleft keycode? 18 = 9 parenright keycode? 19 = 0 asciitilde keycode? 20 = minus equal keycode? 21 = asciicircum asciitilde keycode? 22 = BackSpace keycode? 23 = Tab keycode? 24 = q Q keycode? 25 = w W keycode? 26 = e E keycode? 27 = r R keycode? 28 = t T keycode? 29 = y Y keycode? 30 = u U keycode? 31 = i I keycode? 32 = o O keycode? 33 = p P keycode? 34 = at grave keycode? 35 = bracketleft braceleft keycode? 36 = Return keycode? 37 = Control\_L keycode? 38 = a A keycode? 39 = s S keycode? 40 = d D keycode? 41 = f F keycode? 42 = g G keycode? 43 = h H keycode? 44 = j J keycode? 45 = k K keycode? 46 = l L keycode? 47 = semicolon plus keycode? 48 = colon asterisk keycode? 49 = Zenkaku\_Hankaku keycode? 50 = Shift\_L keycode? 51 = bracketright braceright keycode? 52 = z Z keycode? 53 = x X keycode? 54 = c C keycode? 55 = v V keycode? 56 = b B keycode? 57 = n N keycode? 58 = m M keycode? 59 = comma less keycode? 60 = period greater keycode? 61 = slash question keycode? 62 = Shift\_R keycode? 63 = KP\_Multiply keycode? 64 = Alt\_L keycode? 65 = space keycode? 66 = NoSymbol Caps\_Lock keycode? 67 = F1 F11 keycode? 68 = F2 F12 keycode? 69 = F3 F13 keycode? 70 = F4 F14 keycode? 71 = F5 F15 keycode? 72 = F6 F16 keycode? 73 = F7 F17 keycode? 74 = F8 F18 keycode? 75 = F9 F19 keycode? 76 = F10 F20 keycode? 77 = Num\_Lock keycode? 78 = Scroll\_Lock keycode? 79 = KP\_7 keycode? 80 = KP\_8 keycode? 81 = KP\_9 keycode? 82 = KP\_Subtract keycode? 83 = KP\_4 keycode? 84 = KP\_5 keycode? 85 = KP\_6 keycode? 86 = KP\_Add keycode? 87 = KP\_1 keycode? 88 = KP\_2 keycode? 89 = KP\_3 keycode? 90 = KP\_0 keycode? 91 = KP\_Decimal keycode? 92 = keycode? 93 = keycode? 94 = less greater keycode? 95 = F11 keycode? 96 = F12 keycode? 97 = Home keycode? 98 = Up keycode? 99 = Prior keycode 100 = Left keycode 101 = keycode 102 = Right keycode 103 = End keycode 104 = Down keycode 105 = Next keycode 106 = Insert keycode 107 = Delete keycode 108 = KP\_Enter keycode 109 = Control\_R keycode 110 = Pause keycode 111 = keycode 112 = KP\_Divide keycode 113 = Alt\_R keycode 114 = Break?**keycode 115 = Super\_L add mod4 = Super\_L**

keycode 116 = keycode 117 = keycode 118 = keycode 119 = keycode 120 = keycode 121 = keycode 122 = keycode 123 = backslash underscore keycode 124 = keycode 125 = keycode 126 = keycode 127 = keycode 128 = keycode 129 = keycode 130 = keycode 131 = keycode 132 = keycode 133 = backslash bar keycode 134 = keycode 135 = keycode 136 = keycode 137 = keycode 138 = keycode 139 = keycode 140 = keycode 141 = keycode 142 = keycode 143 = keycode 144 = keycode 145 = keycode 146 = keycode 147 = keycode 148 = keycode 149 = keycode 150 = keycode 151 = keycode 152 = keycode 153 = keycode 154 = keycode 155 = keycode 156 = keycode 157 = keycode 158 = keycode 159 = keycode 160 = keycode 161 = keycode 162 = keycode 163 = keycode 164 = keycode 165 = keycode 166 = keycode 167 = keycode 168 = keycode 169 = keycode 170 = keycode 171 = keycode 172 = keycode 173 = keycode 174 = keycode 175 = keycode 176 = keycode 177 = keycode 178 = keycode 179 = keycode 180 = keycode 181 = keycode 182 = keycode 183 = keycode 184 = keycode 185 = keycode 186 = keycode 187 = keycode 188 = keycode 189 = keycode 190 = keycode 191 = keycode 192 = keycode 193 = keycode 194 = keycode 195 = keycode 196 = keycode 197 = keycode 198 = keycode 199 = keycode 200 = keycode 201 = keycode 202 = keycode 203 = keycode 204 = keycode 205 = keycode 206 = keycode 207 = keycode 208 = keycode 209 = keycode 210 = keycode 211 = backslash underscore keycode 212 = keycode 213 = keycode 214 = keycode 215 = keycode 216 = keycode 217 = keycode 218 = keycode 219 = keycode 220 = keycode 221 = keycode 222 = keycode 223 = keycode 224 = keycode 225 = keycode 226 = keycode 227 = keycode 228 = keycode 229 = keycode 230 = keycode 231 = keycode 232 = keycode 233 = keycode 234 = keycode 235 = keycode 236 = keycode 237 = keycode 238 = keycode 239 = keycode 240 = keycode 241 = keycode 242 = keycode 243 = keycode 244 = keycode 245 = keycode 246 = keycode 247 = keycode 248 = keycode 249 = keycode 250 = keycode 251 = keycode 252 = keycode 253 = keycode 254 = keycode 255 =

&#8212;ここまで&#8212;

以上をファイルにして保存して、

**xmodmap ファイル名**

で適用させます。

これでキーが打てるようになったど〜