<?php namespace App;
  
namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Test extends Model
{
	protected $table = 'rcuz_chronoforms_data_test_archive';
	protected $primaryKey = 'test_id';
    const CREATED_AT = 'cf_created';
    const UPDATED_AT = 'cf_modified';
    protected $fillable = ['test_id', 'cf_id', 'cf_uid', 'cf_created', 'cf_modified', 'cf_created_by', 'cf_modified_by', 'cf_ipaddress', 'cf_user_id', 'test_type', 'test_name', 'test_description', 'test_time', 'right_answer_points', 'wrong_answer_pointa', 'question_id', 'question_uid', 'test_inter', 'welcome_test', 'recycle'];
     
}
?>