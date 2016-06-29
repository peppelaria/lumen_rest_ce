<?php  
//namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Test extends Model
{
	protected $table = 'rcuz_chronoforms_data_test_table_json_updated';
	protected $primaryKey = 'test_uid';
    const CREATED_AT = 'cf_created';
    const UPDATED_AT = 'cf_modified';
    protected $fillable = ['test_questions', 'start_time', 'end_time', 'test_started', 'test_done', 'platform']; 
}
?>