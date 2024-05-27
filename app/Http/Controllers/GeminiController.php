<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\TextPromptType;
use App\Services\GeminiAIService;

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

        $completePrompt = $this->addActionToPrompt($prompt);
        $generatedText = $this->geminiService->generateText($completePrompt);
        return response()->json(['text' => $generatedText], 200);
    }

    private function addActionToPrompt(String $prompt): string
    {
        $promptType = TextPromptType::SUMMARIZE_TEXT;
        return (string)$promptType->value . $prompt;
    }
}
