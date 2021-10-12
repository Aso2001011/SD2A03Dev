# DBテーブルカラム詳細一覧

### 購入テーブル (d_purchase)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---:|
|オーダーID|order_id|bigint(20)|○|○||
|顧客コード|customer_code|varchar(50)||○||
|購入日|purchase_date|date||○||
|総額|total_price|int(11)||○||

### 購入詳細テーブル(d_purchase_detail)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---:|
|オーダー詳細ID|detail_id|bigint(20)|○|○||
|オーダーID|order_id|bigint(20)|○|○|○|
|商品コード|item_code|int(11)||○||
|商品在庫|item_stock|int(11)||○||
|価格|price|int(11)||○||
|数量|num|int(20)||○||

### 顧客マスター(m_customers)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---:|
|顧客コード|customer_code|varchar(50)|○|○||
|パスワード|pass|varchar(50)|○|○||
|氏名|name|varchar(100)||○||
|電話番号|tel|varchar(20)||○||
|メール|mail|varchar(100)||○||
|削除フラグ|del_flag|int(11)||||
|登録日|reg_date|date||○||

### カテゴリマスタ　(m_category)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---:|
|カテゴリID|category_id|int(11)|○|○||
|氏名|name|varchar(20)||○||
|登録日|reg_date|date||○||

### 商品テーブル (d_item)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---:|
|商品コード|item_id|int(11)|o|||
|:---|:---|:---|:---|:---|:---:|
|:---|:---|:---|:---|:---|:---:|
|:---|:---|:---|:---|:---|:---:|
|:---|:---|:---|:---|:---|:---:|

