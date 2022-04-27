<?php

namespace App\Services\VietQR\Actions;

use App\Services\VietQR\Resources\QRCode;

/*
 * Link API Documention: https://www.vietqr.io/danh-sach-api/api-danh-sach-ma-ngan-hang
 * */

trait ManagesQRCodes
{

    public function generateQR(array $data): QRCode
    {
        $siteAttributes = $this->post('generate', $data)['data'];

        return new QRCode($siteAttributes, $this);
    }
}
