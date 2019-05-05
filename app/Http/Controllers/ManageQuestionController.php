<?php
/**
 * Created by PhpStorm.
 * User: florian.bouchez
 * Date: 02/04/19
 * Time: 14:50
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Question;
use App\User;
use Illuminate\Support\Facades\DB;


class ManageQuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manageQuestion(Request $request){
        $request->user()->authorizeRoles(['admin']);
        $questions = Question::all()->where('reponse',null);
        $users = User::all();
        return view('manage-question',['questions' => $questions],['users'=>$users]);
    }

    public function editQuestion($id, Request $request){
        $request->user()->authorizeRoles(['admin']);
        $question = Question::find($id);
        return view('modifier-etat' , ['question' => $question]);
    }

    public function modifierEtat($id, Request $request){
        $request->user()->authorizeRoles(['admin']);
        $this->validate(
            $request,
            [
                'reponse' => 'required'
            ]
        );
        $input = $request->only(['reponse']);
        DB::table('questions')
            ->where('id', $id)
            ->update(['reponse' => $input['reponse']]);
        return $this->manageQuestion($request);
    }

    public function supprimerQuestion($id, Request $request){
        $request->user()->authorizeRoles(['admin']);
        DB::table('questions')
            ->where('id',$id)
            ->delete();
        return back();
    }

}