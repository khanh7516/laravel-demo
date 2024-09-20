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

    public function edit($id) {
        $idea = Idea::where('id', $id)->firstOrFail();
        $editing = true;

        return view('ideas.show', ['idea' => $idea, 'editing' => $editing]);
    }


    public function update($id) {
        $idea = Idea::where('id', $id)->firstOrFail();

        request()->validate(
            [
                'content' => 'required|min:3|max:240'
            ]
        );

        $idea->content = request()->get('content', '');
        $idea->save();

        return redirect()->route('idea.show', $idea->id)->with('success', 'idea updated success!');
    }
}
