# Aplicativo de Resumo de PDF com Modelo GPT e OCR

## Visão Geral:






O aplicativo é uma plataforma web que permite aos usuários fazerem resumos de documentos em PDF de forma rápida e eficiente. Ele utiliza um modelo GPT (Generative Pre-trained Transformer) para gerar resumos automáticos do conteúdo do PDF e aplica OCR (Reconhecimento Óptico de Caracteres) quando necessário para documentos sem OCR prévio.

## Funcionalidades:

### 1. Upload de PDF:

- Os usuários podem fazer o upload de documentos em PDF diretamente para a plataforma.

### 2. Reconhecimento de Texto:

- O aplicativo verifica se o PDF já possui OCR. Se não tiver, o OCR é aplicado automaticamente para extrair o texto do documento.

### 3. Resumo Automático:

- Utilizando um modelo GPT treinado previamente, o aplicativo gera um resumo do conteúdo do PDF.

### 4. Opções de Resumo Personalizado:

- Os usuários podem escolher o tamanho do resumo desejado, personalizando-o de acordo com suas necessidades.

### 5. Visualização do PDF Original e Resumo:

- Os usuários podem visualizar o PDF original e o resumo gerado lado a lado para comparação e revisão.

### 6. Download do Resumo:

- Os usuários têm a opção de baixar o resumo gerado em diferentes formatos, como texto simples ou PDF.

### 7. Gerenciamento de Documentos:

- O aplicativo permite aos usuários gerenciar seus documentos, incluindo a exclusão de documentos após a geração do resumo.

### 8. Interface Intuitiva:

- Uma interface de usuário limpa e intuitiva torna a navegação e a utilização do aplicativo fácil para todos os usuários.

## Tecnologias Utilizadas:

- **Laravel**: Framework PHP para o desenvolvimento da aplicação web.
- **GPT-3.5**: Modelo de linguagem baseado em transformers utilizado para a geração de resumos automáticos.
- **OCR**: Tecnologia de Reconhecimento Óptico de Caracteres para extrair texto de documentos PDF.
- **JavaScript/HTML/CSS**: Front-end responsivo e interativo para a interface do usuário.
- **MySQL**: Banco de dados para armazenar informações dos usuários e metadados dos documentos.

## Fluxo de Trabalho:

1. O usuário acessa a plataforma e faz o upload de um documento em PDF.
2. O aplicativo verifica se o documento possui OCR. Se não tiver, aplica OCR para extrair o texto.
3. Utilizando o modelo GPT, o aplicativo gera um resumo automático do conteúdo do PDF.
4. O usuário pode revisar e personalizar o resumo, se desejar.
5. Após a confirmação, o usuário pode baixar o resumo gerado em diferentes formatos.
6. O usuário pode gerenciar seus documentos, incluindo a exclusão de documentos quando necessário.

## Benefícios:

- Economia de Tempo: Automatiza o processo de resumir documentos, economizando tempo e esforço.
- Acessibilidade: Facilita o acesso ao conteúdo de documentos em PDF, tornando-os mais acessíveis através de resumos.
- Precisão: Utiliza tecnologias avançadas para garantir a precisão dos resumos gerados e a extração correta do texto dos documentos.
