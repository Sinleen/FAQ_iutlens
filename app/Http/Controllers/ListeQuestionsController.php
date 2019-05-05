<?php
/**
 * Created by PhpStorm.
 * User: florian.bouchez
 * Date: 02/04/19
 * Time: 11:41
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;


class ListeQuestionsController extends Controller
{
    public function listeQuestions() {
        $questions = Question::all()->where('reponse',!null);
        return view('liste-questions',['questions' => $questions]);
    }

    public function searchQuestion(Request $request){
        $this->validate(
            $request,
            [
                'elem' => 'required'
            ]
        );
        $input = $request->only(['elem']);
        $questions = DB::table('questions')
            ->select('*')
            ->where('reponse','like','%' . $input['elem'] . '%')
            ->get();
        return view('search-question',['questions' => $questions]);
    }
}