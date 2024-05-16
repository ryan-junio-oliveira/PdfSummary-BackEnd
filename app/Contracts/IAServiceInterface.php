<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface IAServiceInterface
{
    public function generateText(string $prompt);
}
