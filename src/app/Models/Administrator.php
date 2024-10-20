<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $table = 'administrators';
    protected $fillable = ['member_id', 'name','work_on', 'work_start_time', 'work_end_time', 'break_time_total', 'work_time_total'];

}
