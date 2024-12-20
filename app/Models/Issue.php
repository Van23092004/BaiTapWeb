<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    use HasFactory;
    protected $fillable = ['computer_id', 'reported_by', 'reported_date','description', 'urgency', 'status'];

    public function computers()
    {
        return $this->beLongsTo(Computer::class);
    }
}
