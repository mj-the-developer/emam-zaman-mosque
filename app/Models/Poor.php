<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use NonCashHelp;
use Payment;

class Poor extends Model
{
    use HasFactory;

    protected $dateFormat = 'U';

    public function nonCashHelps()
    {
        return $this->hasMany(NonCashHelp::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
