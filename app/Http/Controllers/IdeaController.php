<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store() {
        $idea = new Idea();
        $idea->content = request()->get('idea', '');
        $idea->likes = 0;
        $idea->save();

        return redirect()->route('dashboard');
    }

}
