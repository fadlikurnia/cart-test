Author: Parama Fadli Kurnia

Cart API:
spesifikasi:
- ada addItem  ke cart
- ada removeItem dari cart
- ada checkout untuk membayar item yang dibeli beserta penerapan kupon diskon
- fitur mengurangi stok barang saat add item ke cart
- fitur mengembalikan stok barang saat remove item ke cart
- notifikasi item apa saja yang baru di-add dan di-remove
- notifikasi berapa jumlah item yang sudah ada di cart dan total harganya
- penerapan API Key
- pengecekan transaksi sudah dibayar atau belum
- terdeploy di cloud infra, di server Centos 6.7 x64 di domain url rest.labanian.com

Code Test
folder project ini berisi semua unit testing untuk API cart yang diantara berisi:

1. Add item
untuk menambahkan item pada cart dengan parameter:
$settings = array(
    'apikey' => "DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076"
);
$data = array(
    'id_transaction' => 'AXBD123',
    'id_item' => '2',
    'total_item' => '1'
);

cara debug
http://localhost/cart-test/test_addItem.php

2. Remove Item
untuk menghapus item pada cart dengan parameter:
$settings = array(
    'apikey' => "DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076"
);
$data = array(
    'id_transaction' => 'AXBD123',
    'id_item' => '2'
);
cara debug:
http://localhost/cart-test/test_removeItem.php

3. checkout
untuk membayar semua item yang telah dibeli beseta menerapkan kupon diskon dengan parameter:
$settings = array(
    'apikey' => "DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076"
);
$data = array(
    'id_transaction' => 'AXBD123',
    'coupon' => 'PROMO01'
);
cara debug:
http://localhost/cart-test/test_checkout.php

Note:
cara debug bisa pakai url, curl, atau dengan php command
