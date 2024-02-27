<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitRequest;
use App\Jobs\SaveUserJob;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function submit(SubmitRequest $submitRequest)
    {
        $data = $submitRequest->validated();
        SaveUserJob::dispatch($data);

        return response()->json('We accepted your request for submit!');
    }
}
