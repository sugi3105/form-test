# form-test
# Dockerビルド
　・git clone git@github.com:sugi3105/form-test.git
  ・docker-compose up -d --build

# Laravel環境構築
　・docker-composer exec php bash
  ・composer install
  ・cp .env.example .env
  ・.envに以下の環境変数を追加
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

# アプリケーションキーの作成
　・php artisan key:generate
#　マイグレーションの実行
　・php artisan migrate
# シーディングの実行
　・php artisan db:seed
# URL
　・環境開発:http://localhost/
  ・php My Admin: http://localhost:8080/