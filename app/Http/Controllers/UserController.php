<?php
  
namespace App\Http\Controllers;

use App\Models;
use App\Models\User;
use App\Models\Me;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class UserController extends Controller{
	/*public function index(){
  
        $Users  = User::all();
  
        return response()->json($Users);
  
    }*/
 
    public function getUser($id){
  
        $User = User::find($id);
        if ($User) {
            return $this->createSuccessResponse($User, 200);
        }
        return $this->createErrorResponse("Risorsa non trovata", 404);
    }

    public function getMe($access_token) {
        $tokens = "oauth_access_tokens";
        $Me = Me::leftJoin('oauth_sessions as session', $tokens.'.session_id', '=', 'session.id')->leftJoin('rcuz_chronoforms_data_user_registration as user', 'session.owner_id', '=', 'user.cf_user_id')->where($tokens.'.id', '=', $access_token)->get(['user.id', 'user.uniq_id','cf_user_id', 'name', 'surname']);
        if ($Me) {
            return $this->createSuccessResponse($Me, 200);
        }
        return $this->createErrorResponse("Risorsa non trovata", 404);
    }
  
    /*public function createUser(Request $request){
  
        $User = User::create($request->all());
  
        return response()->json($User);
  
    }
  
    public function deleteUser($id){
        $User  = User::find($id);
        $User->delete();
 
        return response()->json('deleted');
    }
  
    public function updateUser(Request $request,$id){
        $User  = User::find($id);
        $User->uniq_id = $request->input('uniq_id');
        $User->created = $request->input('created');
        $User->modified = $request->input('modified');
        $User->cf_modified_by = $request->input('cf_modified_by');
        $User->ip_address = $request->input('ip_address');
        $User->cf_user_id = $request->input('cf_user_id');
        $User->name = $request->input('name');
        $User->surname = $request->input('surname');
        $User->name_surname = $request->input('name_surname');
        $User->sex = $request->input('sex');
        $User->birth_date = $request->input('birth_date');
        $User->birth_state = $request->input('birth_state');
        $User->birth_city = $request->input('birth_city');
        $User->comune_residenza = $request->input('comune_residenza');
        $User->country = $request->input('country');
        $User->sigla_provincia = $request->input('sigla_provincia');
        $User->regione_residenza = $request->input('regione_residenza');
        $User->cap = $request->input('cap');
        $User->username = $request->input('username');
        $User->password = $request->input('password');
        $User->password_confirm = $request->input('password_confirm');
        $User->email = $request->input('email');
        $User->additional_email = $request->input('additional_email');
        $User->additional_email_description = $request->input('additional_email_description');
        $User->indirizzo = $request->input('indirizzo');
        $User->numero_civico = $request->input('numero_civico');
        $User->phonenumber = $request->input('phonenumber');
        $User->school = $request->input('school');
        $User->stampa = $request->input('stampa');
        $User->recycle = $request->input('recycle');
        $User->save();
  
        return response()->json($User);
    }*/

 
}
?>