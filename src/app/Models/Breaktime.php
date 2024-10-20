<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breaktime extends Model
{
    use HasFactory;

    protected $table = 'breaktimes';
    protected $fillable = ['member_id', 'name','work_on', 'break_start_time', 'break_end_time'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
