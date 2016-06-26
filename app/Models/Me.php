<?php  
//namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Me extends Model implements AuthenticatableContract
{
	use Authenticatable;
	protected $table = 'oauth_access_tokens';
	protected $primaryKey = 'id';
	protected $hidden = ['password', 'remember_token'];
}
?>