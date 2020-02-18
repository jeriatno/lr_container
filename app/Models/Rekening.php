<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    private $saldo;

    public function _construct($saldo = 1000000)
    {
        $this->saldo = $saldo;
    }

    public function cekSaldo()
    {
        return $this->saldo;
    }
}
