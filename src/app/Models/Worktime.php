<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worktime extends Model
{
    use HasFactory;

    protected $table = 'worktimes';
    protected $fillable = ['member_id', 'name','work_on', 'work_start_time','work_end_time'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
