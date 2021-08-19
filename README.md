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

- memo  
`router-link v-bind:to`  
<route-link> の v-bind:to でリンク先のルーティング名を設定することで、SPAのリンクとして動作させる

- ブランチ管理  
  - master
  - initial_environment(初期状態、laravel・vue環境なし)
  - environment(laravel・vueインストール済み)
  - work(作業用)

- Todo
  - APIの認証処理(Laravel)
  - バリデーション(Laravel)
  - ajaxのエラーハンドリング(Vue)
  - ApI送信前のバリデーション(Vue)

(アプリ参考)[https://qiita.com/minato-naka/items/2d2def4d66ec88dc3ca2]
(環境構築参考)[https://yutaro-blog.net/2021/04/28/docker-laravel-vuejs-1/]
