<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Budget extends Model {
	
	protected $table = 'budget';

	protected $dates = ['today'];
	
	protected $fillable = [
		'title',
		'balance',
		'income',
		'housing',
		'utilities',
		'food',
		'debt',
		'transportation',
		'fun',
		'today',
		'user_id' //temporary!!
	];

	/**
	 * Budget belogns to a User.
	 * @return mixed
	 */
	public function user() {
		return $this->belongsTo('App\User');
	}

}
