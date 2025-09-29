<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'nullable',
            'title'=>'required',
            'message'=>'required',
        ]);

        Review::create($data);

        return response()->json(['success' => true]); // penting
    }

}
