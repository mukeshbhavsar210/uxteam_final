<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [ 'industry_id', 'project_name', 'project_type', 'project_duration', 'short_desc', 'banner_image', 'keyword'];
}
