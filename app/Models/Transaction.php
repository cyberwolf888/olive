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

    public function getStatus($index)
    {
        $status = [
            '0'=>'Canceled',
            '1'=>'New Order',
            '2'=>'Waiting to verified',
            '3'=>'Verified',
            '4'=>'Done'
        ];
        return $status[$index];
    }
    public function transaction_detail()
    {
        return $this->hasMany('App\Models\TransactionDetail', 'transaction_id');
    }
    public function payment()
    {
        return $this->hasOne('App\Models\Payment', 'transaction_id');
    }
}
