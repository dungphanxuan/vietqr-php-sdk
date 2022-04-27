<?php

namespace App\Services\VietQR\Actions;

use App\Services\VietQR\Resources\Bank;

/*
 * Link API Documention: https://www.vietqr.io/danh-sach-api/api-danh-sach-ma-ngan-hang
 * */

trait ManagesBanks
{
    public function listBank(): array
    {
        return $this->transformCollection(
            $this->get('banks')['data'],
            Bank::class,
        );
    }

    public function bankDetail(int $bankID): Bank
    {
        $userAttributes = $this->get('banks');

        return new Bank($userAttributes, $this);
    }
}
