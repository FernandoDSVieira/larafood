<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPlan extends Model
{
    protected $table = 'details_plan';

    public function plan()
    {
        $this->BelongsTo(Plan::class);
    }
}
