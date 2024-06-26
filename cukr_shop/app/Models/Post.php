<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;


    protected $table = 'posts';
    protected $guarded = false;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function users(){
        return $this->belongsToMany(User::class, 'post_users', 'post_id', 'user_id');
    }


}
