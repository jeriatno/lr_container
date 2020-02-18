<?php

namespace App\Models;

use App\Models\Rekening;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    private $rekening;

    public function __construct(Rekening $rekening)
    {
        $this->rekening = $rekening;
    }

    public function cekRekening()
    {
        return $this->rekening->cekSaldo();
    }
}
