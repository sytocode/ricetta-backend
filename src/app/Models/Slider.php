<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory;
    protected $table = 'sliders';
    protected $fillable = [
        'title', 'description', 'type', 'type_id', 'status'
    ];
    
    public function category(){
        return $this->belongsTo(Category::class,'type_id','id');
    }
}
