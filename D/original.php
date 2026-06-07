<?php 

class BankTransfer
{
    public function sendTransfer(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}

class PaymentProcessor
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new StripePaymentGateway();
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendPayment($cantidad);
    }
}

class PayPalPaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}

class StripePaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}