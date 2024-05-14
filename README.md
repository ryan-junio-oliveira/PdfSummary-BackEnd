# API de Resumo de PDF com Modelo GPT e OCR

## Visão Geral:

A API é uma plataforma que fornece serviços de resumo automático de documentos em PDF. Utiliza um modelo GPT (Generative Pre-trained Transformer) para gerar resumos do conteúdo do PDF e aplica OCR (Reconhecimento Óptico de Caracteres) quando necessário para documentos sem OCR prévio.

## Funcionalidades:

### 1. Endpoint de Upload de PDF:

- Aplicativos externos podem enviar documentos em PDF para a API para resumo.

### 2. Reconhecimento de Texto:

- A API verifica se o PDF já possui OCR. Se não tiver, aplica OCR automaticamente para extrair o texto do documento.

### 3. Resumo Automático:

- Utilizando um modelo GPT treinado previamente, a API gera um resumo do conteúdo do PDF.

### 4. Opções de Resumo Personalizado:

- Os aplicativos externos podem solicitar resumos personalizados, especificando o tamanho desejado.

### 5. Visualização do PDF Original e Resumo:

- Os aplicativos externos recebem o resumo gerado juntamente com o texto original do PDF para comparação e revisão.

### 6. Download do Resumo:

- Os aplicativos externos podem baixar o resumo gerado em diferentes formatos, como texto simples ou PDF.

### 7. Integração com Sistemas Externos:

- A API é projetada para integração com sistemas externos, permitindo que aplicativos de terceiros incorporem facilmente funcionalidades de resumo de PDF em seus fluxos de trabalho.

## Tecnologias Utilizadas:

- **Laravel**: Framework PHP para o desenvolvimento da API.
- **GPT-3.5**: Modelo de linguagem baseado em transformers utilizado para a geração de resumos automáticos.
- **OCR**: Tecnologia de Reconhecimento Óptico de Caracteres para extrair texto de documentos PDF.

## Fluxo de Trabalho:

1. Um aplicativo externo faz uma solicitação para enviar um documento em PDF para resumo.
2. A API verifica se o documento possui OCR. Se não tiver, aplica OCR para extrair o texto.
3. Utilizando o modelo GPT, a API gera um resumo automático do conteúdo do PDF.
4. A API envia o resumo gerado de volta ao aplicativo externo para processamento adicional ou exibição.

## Benefícios:

- Facilidade de Integração: Projetada para ser facilmente integrada em aplicativos de terceiros por meio de APIs RESTful.
- Eficiência: Automatiza o processo de resumir documentos, economizando tempo e recursos.
- Escalabilidade: Pode lidar com grande volume de solicitações de resumo de PDF de forma eficiente.

