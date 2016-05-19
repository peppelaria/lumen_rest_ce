<?php namespace App;
  
namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
	protected $table = 'rcuz_chronoforms_data_question_entry';
	protected $primaryKey = 'cf_uid';
    const CREATED_AT = 'cf_created';
    const UPDATED_AT = 'cf_modified';
    protected $fillable = ['cf_id', 'cf_uid', 'cf_created', 'cf_modified', 'cf_created_by', 'cf_modified_by', 'cf_ipaddress', 'cf_user_id', 'question_field', 'id_field', 'question_underfield', 'id_underfield', 'color', 'question', 'media_load', 'answer_a', 'image_answer_a', 'answer_b', 'image_answer_b', 'answer_c', 'image_answer_c', 'answer_d', 'image_answer_d', 'answer_e', 'image_answer_e', 'right_anser', 'rating', 'recycle'];
     
}
?>