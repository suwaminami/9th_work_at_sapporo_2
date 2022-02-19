<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>保活 | 簡単申請</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>

<body>

    <!-- ここからheader -->
    <header>
        <h1><a href="html-rensyu_01.html">保育園 | かんたん申請</a></h1>
        <h2>入園申込に必要な書類</h2>
        <nav>
            <ul>
                <li><a href="rensyu01_about.html">1 子どものための教育・保育給付支給認定申請書兼保育所入所等申込書</a></li>
                <li><a href="rensyu01_gellery.html">2 保育の必要性を証明する書類</a></li>
                <li><a href="rensyu01_contact.html">3 認可保育園等申込みに関する確認書</a></li>
            </ul>
        </nav>
    </header>
    <!-- ここまでheader -->




    <div>
        <section>
            <h1>Step1 申請者に係る情報</h1>



            <!-- ここからフォーム -->
            <form>
                <fieldset>
                    <legend>子どものための教育・保育給付支給認定申請書兼保育所入所等申込書</legend>
                    <label for="name">お名前：</label>
                    <input id="name" type="text" name="お名前">

                    <label for="mail">住所：</label>
                    <input id="mail" type="text" name="メールアドレス">

                    <label for="mail">個人番号：</label>
                    <input id="mail" type="text" name="メールアドレス">
                    <input type="button" value="マイナンバーカードを読み取る">

                    <label>保育の必要性</label>
                    <input id="personal" type="radio" name="区分" value="個人の方">
                    <label for="personal">就労</label>

                    <input id="corporation" type="radio" name="区分" value="企業の方">
                    <label for="corporation">出産</label>

                </fieldset>


                <fieldset>
                    <legend>保育所入所申込内容</legend>

                    <label for="category">希望エリア</label>
                    <select id="category" name="お問い合わせの種類">
                        <option>港区</option>
                        <option>中央区</option>
                        <option selected="selected">渋谷区</option>
                        <option>江東区</option>
                        </select>

                    <label for="category">第一希望保育園</label>
                    <select id="category" name="お問い合わせの種類">
                        <optgroup label="認可保育園">
                            <option>六本木保育園</option>
                            <option>麻布保育園</option>
                            <option selected="selected">西麻布保育園</option>
                            <option>東麻布保育園</option>
                        </optgroup>

                        <optgroup label="認可外保育園">
                            <option>あい保育園</option>
                            <option>赤坂保育園</option>
                            <option>デイジー保育園</option>
                            <option>麻布十番保育園</option>
                        </optgroup>
                    </select>

                    <label for="category">第二希望保育園</label>
                    <select id="category" name="お問い合わせの種類">
                        <optgroup label="認可保育園">
                            <option>六本木保育園</option>
                            <option>麻布保育園</option>
                            <option selected="selected">西麻布保育園</option>
                            <option>東麻布保育園</option>
                        </optgroup>

                        <optgroup label="認可外保育園">
                            <option>あい保育園</option>
                            <option>赤坂保育園</option>
                            <option>デイジー保育園</option>
                            <option>麻布十番保育園</option>
                        </optgroup>
                    </select>
<!-- 
                    <label for="para">本文：</label>
                    <textarea id="para" name="本文" placeholder="お問い合わせ内容など、自由にお書き下さい。"></textarea> -->

                    <label>育児休暇延長希望 *待機児童解消のために希望する場合は必ずチェックを入れてください</label>
                    <input type="checkbox" id="varify" value="規約に同意します" name="varify">
                    <label for="varify">落選証明書を希望します</label>

                </fieldset>

                <input type="submit" value="送信する">
                <input type="submit" value="一時保存する">
                <input type="reset" value="初期化する">
            </form>
            <!-- ここまでフォーム -->




        </section>
    </div>
    <!-- ここまでコンテンツ -->






    <!-- ここからフッター -->
    <footer>
        <p>&copy; 保育園かんたん申請</p>
    </footer>
    <!-- ここまでフッター -->
</body>

</html>
