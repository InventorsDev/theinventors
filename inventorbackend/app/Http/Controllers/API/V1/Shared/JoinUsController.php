<?php

namespace App\Http\Controllers\API\V1\Shared;

use App\Http\Requests\JoinUsRequest;
use App\Models\JoinUs;
use Illuminate\Http\Response;
use App\Http\Traits\RespondsWithHttpStatus;

class JoinUsController extends Controller
{ 
    public function submit(JoinUsRequest $request)
    {
        try {
            $join = JoinUs::create([
                'email' => $request->email,
                'track' => $request->track,
                'portfolio' => ($request->portfolio) ? $request->portfolio : null
            ]);
            return $this->handleResponse([], "Thank you for indicating your interest to join our community, We will get in touch shortly !", Response::HTTP_OK);
        } catch (\Throwable $err) {
            report($err);
            return $this->handleError("An error occur while retrieving available department", [], Response::HTTP_INTERNAL_SERVER_ERROR );
        }
    }
}
