<?php


it('can_scrape_page_title', function () {
    // Simula uma requisição HTTP para a página desejada
    $this->get('/api/scrape') // Substitua pela rota real do seu controlador
    ->assertStatus(200) // Verifica se a resposta HTTP é bem-sucedida
        //somente validar se os daos forem iguais
        ->assertJson([
            'title' => 'Example Domain',
            'h1' => 'Example Domain',
            'p' => 'This domain is for use in illustrative examples in documents. You may use this domain in literature without prior coordination or asking for permission.'
        ]);
});
