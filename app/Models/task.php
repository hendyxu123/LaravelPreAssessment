<?php

namespace App\Models;

use App\Http\Traits\TimestampsTrait;
use App\Http\Traits\TasksTrait;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use TimestampsTrait;
    use TasksTrait;

    public function getDates()
    {
        return ['created_at', 'updated_at', 'due_date'];
    }

    // table
    protected $table = 'tasks';
}
