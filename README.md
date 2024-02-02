HowMAS Payment Bundle
Online payment gateway integration

<!-- [TOC] -->

# Installation

1. On your Pimcore 11 root project:
```bash
$ composer require howmas/payment-bundle
```

2. Update `config/bundles.php` file:
```bash
return [
    ....
    HowMAS\PaymentBundle\HowMASPaymentBundle::class => ['all' => true],
];
```

# VNPay
[See docs](docs/VNPay.md "VNPay docs")