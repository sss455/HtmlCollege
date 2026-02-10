# Chapter01 ウェブの基礎
* **ウェブとは**
* **ウェブの技術**
* **HTML の概要**
* **CSS の概要**
* **JavaScript の概要**
* **ウェブサイト制作の手順**
* **ウェブサーバーについて**
* **本書の続きについて**

<br><br>

# Chapter02 HTMLの基礎
* **HTMLの雛形**
* **要素と属性**
* **ネスト**
* **コードの改行**
* **DOCTYPEと html要素**
* **head 要素**
* **body 要素**
* **段落と改行（p要素・br要素）**
* **見出し（h1～h6要素）**
* **強調など**
* **区切り線（hr要素）**
* **リンク（a要素）**

<br><br>

# Chapter03 リストとテーブル
* **リスト**
    * 順序なしリスト（ul要素・li要素）
    * 順序付きリスト（ol要素・li要素）
    * 説明リスト（dl要素・dt要素・dd要素）
* **テーブル（表）**
    * 基本的なテーブル（table要素・tr要素・td要素）
    * 見出しセル（th要素）
    * セルの連結（colspan属性、rowspan属性）
* **引用**
    * 引用のルール
    * 引用に関するマークアップ

<br><br>



# Chapter04 マルチメディアと埋め込み
* **画像**
    * img要素（src属性・alt属性）
    * 画像の配置（p要素）
* **画像サイズ（width属性・height属性）**
* **パス（相対パス）**
* **動画（video要素・source要素）／音声（audio要素・source要素）**
* **キャプション（figure要素・figcaption要素）**
* **他サイトの埋め込み**
    * インラインフレーム（iframe要素）
    * ソーシャルメディアコンテンツの埋め込み
* **著作権・肖像権等について**

<br><br>



# Chapter05 フォームコンテンツ
* **フォームの基本（form要素）**
    * ラベル（label要素）
    * ボタン（button要素／type属性[submit,reset,button] ）
* **テキストフォーム**
    * 単行テキスト（input要素／type属性[text,password,email,date] ）
    * 複数行テキスト（textarea要素／cols属性・row属性・maxlength属性）

* **文字コード**
* **選択フォーム**
    * ラジオボタン（input要素／type属性[radio] ）
    * チェックボックス（input要素／type属性[checkbox] ）
    * ドロップダウンメニュー（select要素・option要素／multiple属性）
* **主な属性（required属性・disabled属性・checked属性）**
* **フォームの向こう側の話**
    * action属性
    * method属性
    * name属性
    * value属性
<br>

| type属性値 | 説明
|--|--
| **text**	     | シンプルな単行テキスト（既定値）
| **email**	     | 書式チェック
| **password**   | 伏せ文字表示
| **number**	 | 書式チェックと専用 UI（スピナー）
| **range**	     | 専用UI（コントロールバー）
| **date**	     | 専用UI（カレンダー）
| **tel**	     | 専用UI（数字入力キーボード）
| **color**	     | 専用UI（カラーピッカー）
| **url**	     | 書式チェックと専用UI

<br><br>



# Chapter06 ウェブサイト化
* **用語の定義**
    * ウェブページ
    * ウェブサイト
    * ドメイン
    * トップページ
    * ホームページ
    * ランディングページ
* **リンク（a 要素）**
    * 外部リンク
    * サイト内リンク
    * ページ内リンク（アンカーリンク・スムーズスクロール）
    * ページ内リンク＋その他のリンク
* **ナビゲーション**
* **ウェブページの構造化**
    * HTML の目的
    * セクショニングのための要素
    * コンテンツモデル
* **コンテナー要素（div 要素・span 要素）**
<br>

<hr>

* **ナビゲーション**

| ナビゲーションの種類 | 説明
|--|--
| **グローバルナビゲーション** | ほとんどすべてのページの固定位置に置かれる主要なページへのリンク集
| **ローカルナビゲーション** | グローバルナビゲーションの下の階層のページへのリンク集（ページによって内容が変わる）
| **ブレッドクラムナビゲーション（パンくずリスト）** | ヘンゼルとグレーテルがパンくずを落として経路を残したように、<br>トップページから現在のページまでの遷移（位置関係）がわかるリンク表現（A > B > C）
| **ページネーション** | コンテンツの分量が多く複数のページに渡る場合にページ番号を列挙した形で配置されるリンク
| **関連ナビゲーション** | 構造化されたリンク集ではなく、現在のページの内容に関連するページへのリンク

<br>

<img src="https://res.cloudinary.com/zenn/image/fetch/s--_EOAsTRw--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_1200/https://storage.googleapis.com/zenn-user-upload/deployed-images/73e38c7f34f4933aa2892a65.png%3Fsha%3Da13437bc3cb4d7506d1dd5bc2799ce39b977e258" alt="" class="md-img" loading="lazy" data-zoom-enabled="true" style="cursor: zoom-in;">

<br><br>

<img src="https://res.cloudinary.com/zenn/image/fetch/s--fxySQl6---/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_1200/https://storage.googleapis.com/zenn-user-upload/deployed-images/ef85d98c181b66f25b7de260.png%3Fsha%3D21b873c37818081923138bed15226f506cb041ee" alt="" class="md-img" loading="lazy" data-zoom-enabled="true" style="cursor: zoom-in;">

<br><br>

* **ウェブページの構造化**
    * セクショニングのための要素

ウェブページの大きな構造を **「セクション(区分)」** といい、
HTML要素によって区分けすることを **「セクショニング」** といいます。
セクショニングのための HTML 要素には以下のものがあります

| 要素(タグ)   | 説明
|--|--
| **header**  | いわゆるヘッダー（区分毎に配置可）
| **footer**  | いわゆるフッター（区分毎に配置可）
| **nav**     | ナビゲーション（nav 要素のネストは不可）
| **main**    | そのウェブページのメインコンテンツ（原則ひとつのみ配置可）
| **aside**   | メインコンテンツには含まれないコンテンツ（aside 要素のネストは不可）
| **article** | それだけ取り出しても意味を成す自己完結したコンテンツ（記事など）
| **section** | その他、一般的な区分

<br>
<p>
header・footer・nav は範囲が明確なので迷うことはあまりないと思います。いずれもウェブページ内に複数配置して構いません。ただし、nav 要素の中に別の nav 要素は置けない（入れ子にできない）ので注意してください。ヘッダー／フッターはページ全体（body 要素）に対して配置しますが、article 要素や section 要素による区分のそれぞれに配置することもできます。
</p>
<p>
main 要素はメインコンテンツの部分を明確にしたいときに、ウェブページ内に原則ひとつだけ置くことができます。原則…というのは、hidden 属性（ブール属性）を設定して非表示にしておけば複数配置も可能だからです。hidden 属性の追加・削除は JavaScript から行います。また、main 要素は他のセクショニングのための要素の下には置けません。aside 要素は部分的にメインコンテンツから外すために使用します。
</p>
<p>
article 要素はその名のとおり「記事」の部分をマークアップするものですが、ブログやニュースサイトのような記事が存在しない場合も、「このウェブページのコンテンツが外部から利用されるときにはこの単位で抜粋してほしい」という意図を伝えたいときに使います。長い記事の場合は article 要素を入れ子にすることもできます。
</p>
<p>
section 要素は最も汎用的な「区分」をマークアップするもので、従来は見出し（h 要素）によって緩やかに区分されていた領域をより明確にしたいときに使います。section 要素を入れ子にして階層構造にすることも一般的です。原則として、各 section 要素には 1 つ以上の h 要素を含めるようにします。
</p>

<img src="https://res.cloudinary.com/zenn/image/fetch/s--zXy8pRUF--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_1200/https://storage.googleapis.com/zenn-user-upload/deployed-images/b29d699c8666dc7291ce6b81.png%3Fsha%3D5c28caf7da4da28553d51d6521b036ec51f1a764" alt="" class="md-img" loading="lazy" data-zoom-enabled="true" style="cursor: zoom-in;">

<p>
なお、これらの HTML 要素の使用はいずれも必須ではなく、ウェブサイト制作者がその意図をより正確に表現するために使用するものです。構造化にこだわりすぎて HTML ドキュメントをタグだらけにする必要はありません。
</p>

<br><br>

* **コンテンツモデル**
HTML要素はいくつかのカテゴリーに分類されており、これを<font color="red">「コンテンツカテゴリー」</font> と呼びます。<br>
例えば、前述のセクショニングのための要素のうち、nav・aside・article・section の 4 要素は<font color="red">「区分コンテンツ」</font>と呼ばれるカテゴリーに属しています。（header・footer・main がなぜそうでないのかは私にはよくわかりません…）。<br>
各HTML要素が属するカテゴリーは重複も許されており、ほぼすべての HTML 要素は<font color="red">「フローコンテンツ」</font>に属しています。<br>
<u>コンテンツカテゴリーの種類は次の７つです。</u>
（後述の理由から、カテゴリーというものがあることは頭に置いておく必要があります。）

<br>

<img src="https://res.cloudinary.com/zenn/image/fetch/s--z03xxGcS--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_1200/https://storage.googleapis.com/zenn-user-upload/deployed-images/48555622a4a73bb21ae8d082.png%3Fsha%3D993c061410b4cd37186d4290ee12b9414c62c0db" alt="" width="550" class="md-img" loading="lazy" data-zoom-enabled="true" style="cursor: zoom-in;">


| No | 種類                    | 説明
|--|--|--
| 1  | **メタデータコンテンツ** | link・meta・style・title・他
| 2  | **フローコンテンツ**     | ほぼすべての要素
| 3  | **区分コンテンツ**       | nav・aside・article・section
| 4  | **見出しコンテンツ**     | h1〜h6・他
| 5  | **記述コンテンツ**       | br・strong・cite・img・input・他
| 6  | **埋め込みコンテンツ**   | img・video・audio・iframe・他
| 7  | **対話的コンテンツ**     | a・button・label・select・他

<br>

HTMLには「各HTML要素はどのカテゴリーの要素を子要素にできるか」というルールがあり、
それを<font color="red">「コンテンツモデル」</font>といいます。
例えば、MDNの [h1要素のリファレンス](https://developer.mozilla.org/ja/docs/Web/HTML/Reference/Elements/Heading_Elements)には、h1のコンテンツカテゴリーがフローコンテンツ・見出しコンテンツであり、許可されている内容（子要素にできる要素）は記述コンテンツと記述されています。

どの要素がどの要素を子要素にできるか、すべてを覚えることは大変ですが、リファレンスを見たら理解できるようにしておきましょう。


《関連知識リンク》
　[MDN：コンテンツカテゴリー](https://developer.mozilla.org/ja/docs/Web/HTML/Guides/Content_categories)


<br>

* **コンテナー要素（div 要素・span 要素）**
最後に、コンテナー(入れ物)と呼ばれる２つのHTML要素を紹介します。
　・**div 要素**&nbsp;&nbsp;&nbsp; … フローコンテンツのコンテナー
　・**span 要素** … 記述コンテンツの行内コンテナー<br>
**div要素**は「コンテンツ区分要素」とも呼ばれ、CSSでスタイルを適用するために HTML要素をグルーピングする際に使用します。フローコンテンツのコンテナーとありますが、フローコンテンツにはほぼすべての HTML 要素が属していますので、つまりは<u>何でも入れられる便利な要素</u>です。<br>
**span要素**も汎用的なコンテナーですが、中に入れられるのは「記述コンテンツ」と「テキスト(文字列)」のみです。記述コンテンツとは、例外を恐れずざっくりいうと、列挙すると改行されず右に並んでいく HTML要素です（ただし、改行を意味する br要素も含みます）。
「行内コンテナー」とあるとおり、<u>主にテキストの一部を CSSで装飾するために使用</u>します。<br><br>
繰り返しになりますが、これらの要素は CSSでスタイルを適用するために使われる HTML要素であり、それ自体に意味はありません。CSSから指定するために、div要素や span要素には基本的に id属性か class属性を付けます。<br>
class属性は id属性のように HTML要素に特定の名称を与えるものですが、複数の要素に同じ名称をつけてよく、学校のクラス(組)と同じような概念です。例えるなら、id属性が「山田太郎」だとすると、class属性は「A組」のようなものです。ある学校の山田太郎くんといえば特定の生徒を指しますが、A組の生徒はたくさんいる…というわけです。








<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

## HTML の雛形

```html:index.html
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>初めてのウェブページ</title>
</head>

<body>
  <p>これは私が初めて作ったウェブページです。</p>
</body>

</html>
```


<img src="https://res.cloudinary.com/zenn/image/fetch/s--mhnlkNSA--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_1200/https://storage.googleapis.com/zenn-user-upload/deployed-images/b593c8bc29dc4bb9f4929332.png%3Fsha%3D2cad6ae101b157f816732b13a10e6188208ce1b1" alt="" width="300" class="md-img" loading="lazy" data-zoom-enabled="true" style="cursor: zoom-in;">

<br><br>

<img src="https://res.cloudinary.com/zenn/image/fetch/s--36AbOwVH--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_1200/https://storage.googleapis.com/zenn-user-upload/deployed-images/67bb55c3ce57639ba0a824ad.png%3Fsha%3Dfc3e2441c220d0fd877801de69c4ee301c5173d3" alt="属性" width="300" class="md-img" loading="lazy" data-zoom-enabled="true" style="cursor: zoom-in;">


## ネスト
## コードの改行
## DOCTYPE と html要素
## head 要素
## body 要素
## 段落と改行（p要素・br要素）
## 見出し（h1～h6要素）
## 強調など
| 要素名      | 意味
|--|--
| strong | 太字による強調
| mark   | マーカーによる強調
| small  | 著作権表示、法的表示など
| cite   | 引用している作品名（書名や曲名、映画名など）
| del    | 削除された部分（次の ins 要素と組み合わせることも多い）
| ins    | 追加された部分
| code   | プログラムコード
| var    | プログラムコードなどの変数
| sub    | 下付き文字
| sup    | 上付き文字

## 区切り線（hr要素）
## リンク（a 要素）

<br><br>




# Chapter03 リストとテーブル
* リスト
    * 順序なしリスト（ul 要素・li 要素）
    * 順序付きリスト（ol 要素・li 要素）
    * 説明リスト（dl 要素・dt 要素・dd 要素）
* テーブル（表）
    * 基本的なテーブル（table 要素・tr 要素・td 要素）
    * 見出しセル（th 要素）
    * セルの連結（colspan 属性、rowspan 属性）
* 引用
    * 引用のルール
    * 引用に関するマークアップ

<br>

## リスト順序なしリスト（ul 要素・li 要素）
```html
<ul>
  <li>いぬ</li>
  <li>さる</li>
  <li>きじ</li>
</ul>
```
<ul>
  <li>いぬ</li>
  <li>さる</li>
  <li>きじ</li>
</ul>

<br>


## リスト順序なしリスト（ul 要素・li 要素）
```html
<ol>
  <li>いぬ</li>
  <li>さる</li>
  <li>きじ</li>
</ol>
```
<ol>
  <li>いぬ</li>
  <li>さる</li>
  <li>きじ</li>
</ol>
<br>

**start属性**：インデックスを何番から始めるか指定
```html
<ol start="4">
  <li>ねずみ</li>
  <li>うし</li>
  <li>とら</li>
</ol>
```
<ol start="4">
  <li>ねずみ</li>
  <li>うし</li>
  <li>とら</li>
</ol>
<br>

**type属性**：インデックスを数字からアルファベットやローマ数字に変更することができる（[詳細](https://developer.mozilla.org/ja/docs/Web/HTML/Reference/Elements/ol#attr-type)）
```html
<ol type="a">
  <li>いぬ</li>
  <li>さる</li>
  <li>きじ</li>
</ol>
```
<ol type="A">
  <li>いぬ</li>
  <li>さる</li>
  <li>きじ</li>
</ol>
<br>


## 説明リスト（dl 要素・dt 要素・dd 要素）
```html
<dl>
  <dt>用語</dt>
  <dd>説明文</dd>

  <dt>いぬ</dt>
  <dd>最初に家来になった動物。けっこう強い。</dd>

  <dt>さる</dt>
  <dd>2番目に家来になった動物。けっこう強い。</dd>
  <dd>一つの用語に対して複数の説明文を付けてもよい。</dd>

  <dt>きじ</dt>
  <dt>ハト</dt>
  <dd>複数の用語について一つの説明文を付けてもよい。</dd>
</dl>
```
<dl>
  <dt>用語</dt>
  <dd>説明文</dd>

  <dt>いぬ</dt>
  <dd>最初に家来になった動物。けっこう強い。</dd>

  <dt>さる</dt>
  <dd>2番目に家来になった動物。けっこう強い。</dd>
  <dd>一つの用語に対して複数の説明文を付けてもよい。</dd>

  <dt>きじ</dt>
  <dt>ハト</dt>
  <dd>複数の用語について一つの説明文を付けてもよい。</dd>
</dl>
<br>


## テーブル（表）
### 基本的なテーブル（table 要素・tr 要素・td 要素）
<img src="https://res.cloudinary.com/zenn/image/fetch/s--MnokIG_f--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_1200/https://storage.googleapis.com/zenn-user-upload/deployed-images/ebe4604c328297586f77bd88.png%3Fsha%3Dcc6ecc19b6a7cf4ff144d17d21fab74d3cb5e33c" alt="" width="350" class="md-img" loading="lazy" data-zoom-enabled="true" style="cursor: zoom-in;">

<br><br>

<img src="https://res.cloudinary.com/zenn/image/fetch/s--Jg07vUDi--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_1200/https://storage.googleapis.com/zenn-user-upload/deployed-images/e92d99c83b04b227f16dda3e.png%3Fsha%3Dcef307956417b82817d6ef0da7c7de1c8d99e782" alt="" width="350" class="md-img" loading="lazy" data-zoom-enabled="true" style="cursor: zoom-in;">

<br>

### 見出しセル（th 要素）
### セルの連結（colspan 属性、rowspan 属性）

<br><br>

## 引用
### 引用のルール
### 引用に関するマークアップ

























