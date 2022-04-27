<?php

namespace VietQR\PhpSdk\Resources;

class QRCode extends ApiResource
{
    public int $id;

    public string $qrDataURL;

    public string $qrCode = '';


    public function __construct(array $attributes, $vietQR = null)
    {
        parent::__construct($attributes, $vietQR);

    }
}
