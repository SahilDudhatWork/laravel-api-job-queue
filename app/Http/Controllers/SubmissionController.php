<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\Jobs\ProcessSubmission;

class SubmissionController extends ApiController
{
    public function submit(SubmissionRequest  $request)
    {
       try {
        ProcessSubmission::dispatch($request->all());

        return $this->jsonSuccessResponse('Submission received.');
       } catch (\Throwable $th) {
        return $this->jsonErrorResponse('Submission not received. Try again.');
           }
     
    }
}
