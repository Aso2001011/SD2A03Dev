# DBテーブルカラム詳細一覧

### カート (d_cart)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID   |id  |int(11)|○|○|          |
|顧客ID|user|int(11)|　|○|m_user(id)|
|OSID |OS  |int(11)|　|○|m_os(id)  |
|CPUID|CPU |int(11)|　|○|m_cpu(id) |
|RAMID|RAM |int(11)|　|○|m_ram(id) |
|GPUID|GPU |int(11)|　|○|m_gpu(id) |
|SSDID|SSD |int(11)|　|○|m_ssd(id) |
|HDDID|HDD |int(11)|　|○|m_hdd(id) |

### お気に入り (d_fav)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID   |id  |int(11)|○|○|          |
|顧客ID|user|int(11)|　|○|m_user(id)|
|商品ID|item|int(11)|　|○|d_item(id)|

### 注文 (d_order)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|オーダーID |id        |int(20)|○|○|          |
|顧客コード　|user      |int(20)|　|○|m_user(id)|
|購入日　   |order_date|date   |　|○|          |
|総額      |price     |int(20)|　|○|          |

### 注文詳細 (d_order_detail)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|オーダー詳細ID|id   |int(20)|○|○|           |
|オーダーID   |order|int(20)|　|○|d_order(id)|
|商品コード　  |item |int(11)|　|○|m_item(id) |
|商品在庫     |stock|int(11)|　|○|           |
|価格        |price|int(11)|　|○|           |
|数量        |num  |int(20)|　|○|           |

### 顧客 (m_user)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|顧客ID　  |id            |int(11)     |○|○||
|パスワード |password      |varchar(50) |　|○||
|氏名　    |name          |varchar(50) |　|○||
|電話番号　 |tel           |varchar(20) |　|○||
|メール    |mail          |varchar(100)|　|○||
|住所　    |address       |varchar(100)|　|○||
|郵便番号　 |address_number|varchar(7)  |　|○||
|登録日    |reg_date      |date        |　|○||

### 商品テーブル (d_item)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|商品ID |id      |int(11)     |○|○|          |
|商品名　|name    |varchar(50) |　|○|          |
|価格   |price   |int(11)     |　|○|          |
|タイプ　|Type    |int(11)     |　|○|m_type(id)|
|OS    |OS      |int(11)     |　|○|m_os(id)  |
|CPU   |CPU     |int(11)     |　|○|m_cpu(id) |
|RAM   |RAM     |int(11)     |　|○|m_ram(id) |
|GPU   |GPU     |int(11)     |　|○|m_gpu(id) |
|SSD   |SSD     |int(11)     |　|○|m_ssd(id) |
|HDD   |HDD     |int(11)     |　|○|m_hdd(id) |
|登録日　|reg_date|date        |　|○|          |
|画像   |imgurl  |varchar(100)|　|　|          |

### タイプ (m_type)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID    |id  |int(11)    |○|○||
|タイプ名|name|varchar(50)|　|○||

### OS (m_os)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID    |id    |int(11)     |○|○||
|商品名　|name  |varchar(50) |　|○||
|価格   |price |int(11)     |　|○||
|画像   |imgurl|varchar(100)|　|○||

### CPU (m_cpu)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID    |id    |int(11)     |○|○||
|商品名　|name  |varchar(50) |　|○||
|価格   |price |int(11)     |　|○||
|画像   |imgurl|varchar(100)|　|○||

### メモリ (m_ram)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID    |id    |int(11)     |○|○||
|商品名　|name  |varchar(50) |　|○||
|価格   |price |int(11)     |　|○||
|画像   |imgurl|varchar(100)|　|○||

### GPU (m_gpu)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID    |id    |int(11)     |○|○||
|商品名　|name  |varchar(50) |　|○||
|価格   |price |int(11)     |　|○||
|画像   |imgurl|varchar(100)|　|○||

### SSD (m_ssd)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID    |id    |int(11)     |○|○||
|商品名　|name  |varchar(50) |　|○||
|価格   |price |int(11)     |　|○||
|画像   |imgurl|varchar(100)|　|○||

### HDD (m_hdd)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID    |id    |int(11)     |○|○||
|商品名　|name  |varchar(50) |　|○||
|価格   |price |int(11)     |　|○||
|画像   |imgurl|varchar(100)|　|○||

### ケース (m_case)
|和名|属性名|型|PK|NN|FK|
|:---|:---|:---|:---|:---|:---|
|ID    |id    |int(11)     |○|○||
|商品名　|name  |varchar(50) |　|○||
|価格   |price |int(11)     |　|○||
|画像   |imgurl|varchar(100)|　|○||