<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request as HttpRequest;

class InvaildRequestException extends Exception
{
    public function __construct(string $message = "", int $code = 400)
    {
        parent::__construct($message, $code);
    }

    public function render(HttpRequest $request)
    {
        if ($request->expectsJson()) {
            return response()->json(['msg' => $this->message], $this->code);
        }

        return view('pages.error', ['msg' => $this->message]);
    }
}
