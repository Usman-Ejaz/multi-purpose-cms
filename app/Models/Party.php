<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    const PAYABLE = 'PAYABLE';
    const RECEIVABLE = 'RECEIVABLE';

    public function scopeFilter($query)
    {
        $req = request();

        return $query;
    }

    public static function columns()
    {
        return (object) [
            []
        ];
    }
}
