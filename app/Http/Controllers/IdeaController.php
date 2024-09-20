<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store() {

        request()->validate(
            [
                'idea' => 'required|min:3|max:240'
            ]
            );

        $idea = new Idea();
        $idea->content = request()->get('idea', '');
        $idea->likes = 0;
        $idea->save();

        return redirect()->route('dashboard')->with('success', 'Idea created successfully!');
    }

    public function destroy($id) {
        Idea::where('id', $id)->firstOrFail()->delete();
        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    }


    public function show($id) {
        $idea = Idea::where('id', $id)->firstOrFail();
        return view('ideas.show', ['idea' => $idea]);
    }

}
