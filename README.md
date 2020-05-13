# nginx_phpfpm_pgsql
標準的なnginx php-fpm postgreSQLのDocker構成（テスト用）

### 使い方

```
$ docker-compose build
$ docker-compose up -d
```

ブラウザから、localhost:8081にアクセスしてください。
以下のように表示されれば成功です。

```
php-fpm
Thank you for comming !!

・1:太郎(hogehoge1@xxxx.xxxx)
・2:次郎(hogehoge2@xxxx.xxxx)
・3:三郎(hogehoge3@xxxx.xxxx)
・4:四郎(hogehoge4@xxxx.xxxx)
```

上記のユーザ情報らしきものは、PostgreSQLのデータベースに入っている値となります。
