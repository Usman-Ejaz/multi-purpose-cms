<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    const RECEIVABLE = 'RECEIVABLE';
    const PAYABLE = 'PAYABLE';

    public function scopeFilter($query, $req)
    {
        return $query;
    }

    public static function columns()
    {
        return (object) [
            []
        ];
    }
}
