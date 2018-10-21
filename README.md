# ArtisanController
LaravelのArtisanコマンドを内部的に行うためのコントローラ

# 使い方
`web.php`に以下の宣言を付け加えてください。

```php
Route::get('artisan/{cmd}', 'ArtisanController');
```

あとはルートURLに`artisan/migrate`で`php artisan migrate`を実行できます。

またリフレッシュさせたいときは`artisan/migrate_r`と打ってください。

`migrate`させたあとは、`web.php`からルート宣言を消しておきましょう。



# 作った経緯
自分の使用するValue-serverでは、WEBサーバーとして使用するときのPHPと、SSHで接続したときのPHP cliが異なるバージョンなので、

`php artisan`コマンドが使えずに困っていました。

とりわけ`migrate`コマンドがないのが痛く、いちいちテーブルを作らないといけないかと思うと頭が痛い

というわけで、内部的に実行できるようにするためにControllerを作ってみました。



参考・[LARAVELでプログラム側からARTISANコマンドを実行する](https://gfonius.net/blog/laravel-artisan/)

