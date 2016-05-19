<?php namespace App;
  
namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
	protected $primaryKey = 'id';
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
    protected $fillable = ['id', 'uniq_id', 'created', 'modified', 'cf_modified_by', 'ip_address', 'cf_user_id', 'name', 'surname', 'name_surname', 'sex', 'birth_date', 'birth_state', 'birth_city', 'city', 'comune_residenza', 'country', 'sigla_provincia', 'regione_residenza', 'cap', 'username', 'password', 'password_confirm', 'email', 'additional_email', 'additional_email_description', 'indirizzo', 'numero_civico', 'phonenumber', 'school', 'stampa', 'recycle'];
     
}
?>