<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>保活 | かんたん申請</title>
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
            <h1>Step2 お勤め先へ情報を請求/役所に連携</h1>



            <!-- ここからフォーム -->
            <form>
                <fieldset>
                    <legend>お勤め先に就労証明書を請求する</legend>
                    <p>就労証明書は取得済みです。就労証明書を取得済みの場合、PDFファイルを閲覧できます。</p>
                    <!-- <label for="name">お名前：</label>
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
                    <label for="corporation">出産</label> -->
                    <input type="submit" value="取得済みのファイルを開く">
        
                    <p class="button orange">
		<a href="xxx.zip">PDFファイルをダウンロード</a>
	</p>
                </fieldset>


                <fieldset>
                    <legend>取得した就労証明書を役所に連携する</legend>
<!-- 
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
                    </select> -->
<!-- 
                    <label for="para">本文：</label>
                    <textarea id="para" name="本文" placeholder="お問い合わせ内容など、自由にお書き下さい。"></textarea> -->

                    <label>就労証明書の連携に同意します。 *期日までは何度でもアップデートできます。</label>
                    <input type="checkbox" id="varify" value="規約に同意します" name="varify">
                    <label for="varify">同意する</label>

                </fieldset>

                <input type="submit" value="送信する">
                <!-- <input type="submit" value="一時保存する">
                <input type="reset" value="初期化する"> -->
            </form>
            <!-- ここまでフォーム -->


            <!DOCTYPE html>
            <html>
            <head>
              <meta charset="UTF-8">
              <title>[HTML5] QRCode Reader</title>
              <style>
                /* 全体のレイアウト調整 */
                #contents { display:flex; width:650px;}
                #camera, #picture, #result { justify-content:center; margin:5px;}
            
                /* リーダー部分 */
                #picture { display:none; }
                #result { border: 1px solid gray; width:300px; height:200px; padding:10px;}
                small { color:gray; }
              </style>
            </head>
            <body>
            
            <h1>マイナンバーカードを読み取ります</h1>
            
            <section id="contents">
              <!-- カメラ映像 -->
              <video id="camera" width="300" height="200" muted></video>
            
              <!-- 処理用 -->
              <canvas id="picture" width="300" height="200"></canvas>
            
              <!-- 読み取り結果 -->
              <div id="result">
                <small>※ここに読み取り結果が表示されます※</small>
              </div>
            </section>
            
            <script src="jsQR.min.js"></script>
            <script>
            const video  = $("#camera");     // === document.querySelector("#camera");
            const canvas = $("#picture");    // === document.querySelector("#picture");
            const ctx = canvas.getContext("2d");
            
            window.onload = () => {
              /** カメラ設定 */
              const constraints = {
                audio: false,
                video: {
                  width: 300,
                  height: 200,
                  facingMode: "user"   // フロントカメラを利用する
                }
              };
            
              /**
               * カメラを<video>と同期
               */
               navigator.mediaDevices.getUserMedia(constraints)
              .then( (stream) => {
                video.srcObject = stream;
                video.onloadedmetadata = (e) => {
                  video.play();
            
                  // QRコードのチェック開始
                  checkPicture();
                };
              })
              .catch( (err) => {
                console.log(err.name + ": " + err.message);
              });
            };
            
            /**
             * QRコードの読み取り
             */
            function checkPicture(){
              // カメラの映像をCanvasに複写
              ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
            
              // QRコードの読み取り
              const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
              const code = jsQR(imageData.data, canvas.width, canvas.height);
            
              //----------------------
              // 存在する場合
              //----------------------
              if( code ){
                // 結果を表示
                setQRResult("#result", code.data);  // 文字列
                drawLine(ctx, code.location);       // 見つかった箇所に線を引く
            
                // video と canvas を入れ替え
                canvas.style.display = 'block';
                video.style.display = 'none';
                video.pause();
              }
              //----------------------
              // 存在しない場合
              //----------------------
              else{
                // 0.3秒後にもう一度チェックする
                setTimeout( () => {
                  checkPicture();
                }, 300);
              }
            }
            
            
            /**
             * 発見されたQRコードに線を引く
             *
             * @param {Object} ctx
             * @param {Object} pos
             * @param {Object} options
             * @return {void}
             */
            function drawLine(ctx, pos, options={color:"blue", size:5}){
              // 線のスタイル設定
              ctx.strokeStyle = options.color;
              ctx.lineWidth   = options.size;
            
              // 線を描く
              ctx.beginPath();
              ctx.moveTo(pos.topLeftCorner.x, pos.topLeftCorner.y);         // 左上からスタート
              ctx.lineTo(pos.topRightCorner.x, pos.topRightCorner.y);       // 右上
              ctx.lineTo(pos.bottomRightCorner.x, pos.bottomRightCorner.y); // 右下
              ctx.lineTo(pos.bottomLeftCorner.x, pos.bottomLeftCorner.y);   // 左下
              ctx.lineTo(pos.topLeftCorner.x, pos.topLeftCorner.y);         // 左上に戻る
              ctx.stroke();
            }
            
            /**
             * QRコードの読み取り結果を表示する
             *
             * @param {String} id
             * @param {String} data
             * @return {void}
             */
            function setQRResult(id, data){
              $(id).innerHTML = escapeHTML(data);
            }
            
            /**
             * jQuery style wrapper
             *
             * @param {string} selector
             * @return {Object}
             */
             function $(selector){
              return( document.querySelector(selector) );
            }
            
            /**
             * HTML表示用に文字列をエスケープする
             *
             * @param {string} str
             * @return {string}
             */
            function escapeHTML(str){
              let result = "";
              result = str.replace("&", "&amp;");
              result = str.replace("'", "&#x27;");
              result = str.replace("`", "&#x60;");
              result = str.replace('"', "&quot;");
              result = str.replace("<", "&lt;");
              result = str.replace(">", "&gt;");
              result = str.replace(/\n/, "<br>");
            
              return(result);
            }
            </script>
            </body>
            </html>

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
