<?php  
//namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
	use Authenticatable;
	protected $table = 'rcuz_users';
	protected $primaryKey = 'id';
	protected $hidden = ['password', 'remember_token'];
}
?>