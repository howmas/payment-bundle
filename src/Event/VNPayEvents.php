<?php

namespace HowMAS\PaymentBundle\Event;

final class VNPayEvents
{
    /**
     * @Event("HowMAS\PaymentBundle\Event\Model\VNPayEvent")
     *
     * @var string
     * 
     * Find order infor from transaction data.
     */
    const FIND_ORDER = 'howmas.payment.vnpay.findOrder';

    /**
     * @Event("HowMAS\PaymentBundle\Event\Model\VNPayEvent")
     *
     * @var string
     * 
     * Do something after payment status is success.
     */
    const PAYMENT_SUCCESS = 'howmas.payment.vnpay.paymentSuccess';

    /**
     * @Event("HowMAS\PaymentBundle\Event\Model\VNPayEvent")
     *
     * @var string
     * 
     * Do something after payment status is failure.
     */
    const PAYMENT_FAILURE = 'howmas.payment.vnpay.paymentFailure';

    /**
     * @Event("HowMAS\PaymentBundle\Event\Model\VNPayEvent")
     *
     * @var string
     * 
     * Do something after payment status is cancel.
     */
    const PAYMENT_CANCEL = 'howmas.payment.vnpay.paymentCancel';

    /**
     * @Event("HowMAS\PaymentBundle\Event\Model\VNPayEvent")
     *
     * @var string
     * 
     * Do something after transaction is invalid.
     */
    const TRANSACTION_RESPONSE = 'howmas.payment.vnpay.transactionResponse';
}
