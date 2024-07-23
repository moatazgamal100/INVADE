<?php
// app/Traits/ResponseTrait.php

namespace App\Traits;

trait ResponseTrait
{

    public function loginFailResponse()
    {
        return back()->withErrors([
            'Error' => 'The provided credentials do not match our records.',
        ]);
    }

    public function courseCreatedSuccessResponse($course)
    {
        return response()->json(['course' => $course], 201);
    }

    public function courseUpdatedSuccessResponse($course)
    {
        return response()->json(['course' => $course], 200);
    }

    public function courseDeletedSuccessResponse()
    {
        return response()->json(['message' => 'Course deleted successfully'], 200);
    }

    public function courseFailResponse()
    {
        return response()->json(['error' => 'Operation failed'], 400);
    }
}
