<?php

namespace App\Http\Controllers;

use App\Services\GeminiAIService;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class GeminiController extends Controller
{
    protected GeminiAIService $geminiService;

    public function __construct(GeminiAIService $geminiService)
    {
        $this->geminiService = $geminiService;
    }

    public function generateText(Request $request)
    {
        $prompt = $request->input('prompt');

        if (!$prompt) {
            return response()->json(['error' => 'Prompt is required'], 400);
        }

        $generatedText = $this->geminiService->generateText($prompt);
        return response()->json(['text' => $generatedText], 200);
    }
}
