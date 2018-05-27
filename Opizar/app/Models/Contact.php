<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $table = 'contacts';
    public $translatedAttributes = ['ltd_name','address','country'];
    protected $fillable = ['phone_number','main_mail','footer_mail'];

    public function getObj($id = null)
	{
		if($id == null)
		{
	    	return $this->get()->first();
		}else
		{
			return $this->find($id);
		}
	}

}
