<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function penilaian()
    {
        $review = new review();
        $reviews = $review->getAllreviews();

        return view('reviews.penilaian', ['reviews' => $reviews]);
    }
}
