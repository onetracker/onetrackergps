<?php namespace App\onetrackergps\entities;

use Illuminate\Database\Eloquent\Model;

class Contactform extends Model {

	//
	protected $fillable = array('id', 'name', 'email', 'city', 'group', 'subject', 'text');
}
