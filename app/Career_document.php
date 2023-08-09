<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career_document extends Model
{
    protected $table = 'career_documents';
    protected $fillable = [
        'file', 'name', 'date','career_id', 'type_id', 'status_id',
    ];
}
