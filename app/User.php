<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function tasks()
	{
		return $this->belongsToMany('App\task')->withTimestamps();
	}

	public function resume()
	{
		return $this ->hasOne('App\resume');
	}

	public function rank()
	{
		return $this ->hasMany('App\rank');
	}
	
	public function ranks()
	{
		return $this ->hasMany('App\rank');
	}

	public function skill()
	{
		return $this->belongsToMany('App\skill');
	}
	
	public function skills()
	{
		return $this->hasMany('App\SkillUser');
	}	

}
