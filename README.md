## 非常食販売のためのWebサービス
### 概要
ポートフォリオ。非常食販売のためのWebサービス。

### 機能
#### 商品一覧
商品用のテーブルをもとに商品一覧を表示する。
![Screenshot from 2021-05-27 11-28-45](https://user-images.githubusercontent.com/62014389/119757623-29501d00-bee0-11eb-9531-84ad659fa073.png)

#### 商品選択
在庫用のテーブルをもとに賞味期限と在庫の個数以内の購入数を選択する。在庫がない場合はその旨が表示される。
![Screenshot from 2021-05-27 11-29-10](https://user-images.githubusercontent.com/62014389/119757719-53094400-bee0-11eb-9270-a4abba278d1a.png)


#### カート
Cookieを利用して、購入のために選択した商品を保存する。購入数の変更も可能。購入はここから行う。
![Screenshot from 2021-05-27 11-29-33](https://user-images.githubusercontent.com/62014389/119757742-60bec980-bee0-11eb-887c-1533b4094248.png)
　
#### 購入
カートに入っている商品を購入する。購入すると在庫用テーブルの在庫数が減る。
![Screenshot from 2021-05-27 11-33-39](https://user-images.githubusercontent.com/62014389/119757777-6caa8b80-bee0-11eb-959d-c4fe96ff7d51.png)

#### 購入履歴
購入者用のテーブルからユーザの情報をもとに購入履歴を表示。
　
#### 認証
商品の購入時と購入履歴の確認時にログインしている必要がある。カートへの追加はログイン不要

### 技術
#### フレームワーク
Laravel(PHP)

#### データベース
SQLiteをORMで管理

#### セッション管理
Laravelに標準装備されている認証機能「Auth」

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
