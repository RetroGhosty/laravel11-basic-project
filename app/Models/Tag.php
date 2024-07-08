<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function jobs(){
        return $this->belongsToMany(JobListing::class, table: 'job_tags', foreignPivotKey: 'tag_id', relatedPivotKey: 'job_listing_id');
    }
}
