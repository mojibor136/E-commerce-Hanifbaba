<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Carbon\Carbon;

class QuestionController extends Controller {
    public function Question( Request $request ) {
        $request->validate( [
            'question' => 'required',
        ] );

        Question::create( [
            'productId' => $request->productId,
            'question' => $request->question,
        ] );

        return back()->with( 'success', 'Submit your question.' );
    }

    public function AllQuestion() {
        $questions = Question::with( 'product' )->latest()->paginate( 10 );
        return view( 'admin.allquestion', compact( 'questions' ) );
    }

    public function Answer( $id ) {
        $question = Question::with( 'product' )->where( 'id', $id )->first();
        return view( 'admin.answer', compact( 'question' ) );
    }

    public function AnswerUpdate( Request $request ) {
        $request->validate( [
            'answer' => 'required',
        ] );

        $questionId = $request->questionId;
        $answer = $request->answer;
        $updated_at = Carbon::now();
        $status = 1;

        Question::findOrFail( $questionId )->update( [
            'answered' => $answer,
            'status' => $status,
            'updated_at' => $updated_at,
        ] );

        return redirect()->route( 'allquestion' )->with( 'success', 'Question answered successfully!' );
    }
}
