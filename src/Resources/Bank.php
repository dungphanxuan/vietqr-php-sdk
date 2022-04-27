<?php

namespace VietQR\PhpSdk\Resources;

/*
 * Data Bank
 *
 * "id": 17,
 * "name": "Ngân hàng TMCP Công thương Việt Nam",
 * "code": "ICB",
 * "bin": "970415",
 * "isTransfer": 1,
 * "short_name": "VietinBank",
 * "logo": "https://api.vietqr.io/img/ICB.3d4d6760.png",
 * "support": 3
 * */

class Bank extends ApiResource
{
    public int $id;

    public string $name;

    public string $code;

    public string $bin;

    public string $isTransfer;

    public string $short_name;

    public string $logo;

    public string $support;

    public function __construct(array $attributes, $vietQR = null)
    {
        if (empty($attributes)) {
            //$attributes = $this->sampleData();
        }

        parent::__construct($attributes, $vietQR);

    }
}
