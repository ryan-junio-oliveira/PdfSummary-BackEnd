<?php

namespace App\Services;

use Gemini;
use App\Contracts\IAServiceInterface;
use GuzzleHttp\Exception\RequestException;

class GeminiAIService implements IAServiceInterface
{
    protected string $apiKey;
    protected $client;
    public function __construct()
    {
        $this->apiKey = getenv('GEMINI_API_KEY');
        $this->client = Gemini::client($this->apiKey);
    }

    public function generateText(String $prompt)
    {
        try {
            $result = $this->client->geminiPro()->generateContent($prompt);
            return $result->text();
        } catch (RequestException $e) {
            return json_encode(['Error' => $e->getMessage()]);
        }
    }
}
