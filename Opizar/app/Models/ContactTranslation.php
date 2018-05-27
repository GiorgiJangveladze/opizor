<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactTranslation extends Model
{
    public $table = 'contacts_translation';
    public $timestamps = false;
    protected $fillable = ['ltd_name','address','country'];
}
