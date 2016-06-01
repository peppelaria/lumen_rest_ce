<?php namespace App;
  
namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class TestAssigned extends Model
{
	protected $table = 'rcuz_chronoforms_data_test_table_json_updated';
	protected $primaryKey = 'cf_id';
	const CREATED_AT = 'cf_created';
	const UPDATED_AT = 'cf_modified';
	protected $fillable = ['cf_id', 'cf_uid', 'cf_created', 'cf_modified', 'cf_created_by', 'cf_modified_by', 'cf_ipaddress', 'test_uid', 'test_id', 'start_available_date', 'end_available_date', 'student_id', 'course_id', 'test_questions', 'start_time', 'end_time', 'test_started', 'test_done', 'time_lock', 'printed', 'print_date', 'recycle'];
}
?>