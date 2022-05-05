@component('mail::message')
# Oi, Douglas

Esse é um teste de e-mail usando Markdown Mailables

@component('mail::button', ['url' => ''])
Não clicar aqui
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
