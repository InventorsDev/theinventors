<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoinUsRequest;
use App\Models\JoinUs;
use App\Http\Traits\RespondsWithHttpStatus;

class JoinUsController extends Controller
{
    use RespondsWithHttpStatus;
  
    public function submit(JoinUsRequest $request)
    {

        $join = JoinUs::create([
            'email' => $request->email,
            'track' => $request->track,
            'portfolio' => ($request->portfolio) ? $request->portfolio : null
        ]);

        $message = "Thank you for indicating your interest to join our community, We will get in touch shortly !";

        return $this->success($message);

    }
}
