<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    const NEW_ORDER = 1; // pesanan belum diverifikasi
    const PROCESS = 2; // pesanan menunggu verifikasi
    const VERIFIED = 3; // pesanan sudah diverifikasi dan barang sudah dikirim
    const FINISH = 4; //pesanan sudah diterima
    const CANCEL = 0; // pesanan dibatalkan
}
