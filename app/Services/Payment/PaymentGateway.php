<?php

interface PaymentGateway {
    public function collectPayment($payment);
}