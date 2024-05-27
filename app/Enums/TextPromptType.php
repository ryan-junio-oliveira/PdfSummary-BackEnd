<?php

namespace App\Enums;

enum TextPromptType: string
{
    case SUMMARIZE_TEXT = 'FAÇA O RESUMO SOBRE O TEXTO A SEGUIR';
    case GENERATE_TEXT = 'GERE UM TEXTO SOBRE O SEGUINTE TÓPICO';
    case ANALYZE_TEXT = 'ANALISE O TEXTO A SEGUIR';
}