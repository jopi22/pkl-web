<?php

namespace App\Models\Theme;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    use HasFactory;

    protected $table = 'website_footer';


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
