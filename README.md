# Laravel-Omise

[![Total Downloads](https://poser.pugx.org/ox01code/omise/downloads)](https://packagist.org/packages/ox01code/omise)
[![Monthly Downloads](https://poser.pugx.org/ox01code/omise/d/monthly)](https://packagist.org/packages/ox01code/omise)
[![Daily Downloads](https://poser.pugx.org/ox01code/omise/d/daily)](https://packagist.org/packages/ox01code/omise)
[![License](https://poser.pugx.org/ox01code/omise/license)](https://packagist.org/packages/ox01code/omise)

# Docs
[เริ่มต้นใช้งานของ omise](https://www.omise.co/th/docs/thailand)

# Let's Start
สร้าง Source [อ่านเพิ่มเติม](https://www.omise.co/th/omise-js/thailand#createsource)
```
$response = OmiseSource::create([
   'amount' => 12345,
   'currency' => 'THB',
   'type' => 'truemoney',
   'phone_number' => '0123456789',
]);
dd($response);
```

สร้าง Charge [อ่านเพิ่มเติม](https://www.omise.co/th/charges-api/thailand)
```
$response = OmiseCharge::create([
   'amount' => 12345,
   'currency' => 'THB',
   'return_uri' => 'http://example.com/orders/345678/complete',
   'source' => 'src_*****',
]);
dd($response);
```
