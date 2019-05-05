<?php
/**
 * Created by PhpStorm.
 * User: florian.bouchez
 * Date: 02/04/19
 * Time: 12:58
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AjoutQuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ajoutQuestion(Request $request) {
        $request->user()->authorizeRoles(['user','admin']);
        return view('ajout-question');
    }

    public function enregistrerQuestion (Request $request) {
        $request->user()->authorizeRoles(['user','admin']);
        $this->validate(
            $request,
            [
                'question' => 'required'
            ]
        );
        $input = $request->only(['question','reponse']);
        DB::table('questions')->insert(
            [
                'question' => $input['question'],
                'reponse' => null,
                'type' => 1,
                'date_creation' => date('Y-m-d'),
                'user_id' => Auth::user()->id
            ]
        );
        return redirect('/listequestions');
    }
}