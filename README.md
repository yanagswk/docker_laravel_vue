- 接続先  
localhost:80

- laravelインストール  
`composer create-project --prefer-dist laravel/laravel .`  
- laravel/uiインストール 
`composer require laravel/ui`  
- vueインストール    
`php artisan ui vue`
- パッケージインストール  
`npm install`  
- ビルドする  
`npm run dev`  (コンパイルされたjs、cssが/public/js public/cssに出力される。)  
この後実装するHTMLファイルでは、このコンパイルされたjs、cssを読み込むことになる。  
- ウォッチモード  
`npm run watch`  自動ビルド

- エラーの場合  
webpack.mix.jsを修正  

- ブランチ管理  
  - master
  - initial_environment(初期状態、laravel・vue環境なし)
  - environment(laravel・vueインストール済み)
  - master