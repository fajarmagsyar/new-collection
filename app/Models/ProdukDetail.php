<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdukDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $keyType = 'string';
    protected $primaryKey = 'produk_detail_id';
    protected $table = 'produk_detail';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['produk_detail_id'];
}
