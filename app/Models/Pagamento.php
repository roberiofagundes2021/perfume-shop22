<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;
    protected $table="pagamentos";
    protected $guarded = [];

    public function parcela(){
        return $this->belongsTo(Parcela::class, 'parcela_id','id');
    }
}
