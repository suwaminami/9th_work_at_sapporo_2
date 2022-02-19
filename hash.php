<?php


//パスワードをハッシュ化（復元できない文字列）を行い
$pw = password_hash('test1' , PASSWORD_DEFAULT);

echo $pw;