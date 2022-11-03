<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoinUsRequest;
use App\Models\JoinUs;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JoinUsController extends Controller
{
    public function submit(JoinUsRequest $request)
    {

        $join = JoinUs::create([
            'email' => $request->email,
            'track' => $request->track,
            'portfolio' => ($request->portfolio) ? $request->portfolio : null
        ]);

        return new JsonResponse(
            [
                'success' => 1,
                'msg' => 'Thank you for indicating your interest to join our community, We will get in touch shortly !'
            ],
            200
        );
    }
}
