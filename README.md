# laravel-blade-with-vue-component
Laravel blade MPAにVue componentを添えて

# 初回構築 手順
+ docker compose build
+ docker compose up -d
+ npm と composer install(appで コマンド省略s)

# (メモ) laravel-app直下にLaravelをcomposerでプロジェクト作成 コマンド
[vue + Laravel 参考サイト](https://qiita.com/minato-naka/items/2d2def4d66ec88dc3ca2)  

プロジェクト作成構築コマンド docker compose exec app bashでの  
```bash
composer create-project --prefer-dist laravel/laravel ./

composer install
npm install
```
今回は laravel-mixでやりたいので（アレのため）下記も  
[webpack.mix.js 作成 参考](https://github.com/laravel/vite-plugin/blob/main/UPGRADE.md#migrating-from-vite-to-laravel-mix)
