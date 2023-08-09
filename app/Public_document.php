<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Public_document extends Model
{
    protected $table = 'public_documents';
    protected $fillable = [
        'file', 'name', 'date','trimester', 'type_id', 'status_id',
    ];
}
