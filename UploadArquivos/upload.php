<?php 

$arquivo = $_FILES['arquivo'];

// boas praticas
/**
 * 1. Verificar se o arquivo foi enviado com sucesso
 * 2. Verificar o tipo do arquivo (é possivel verificar os bytes do arquivo pra saber sua extensão de verdade)
 * 3. Verificar se é de fato um arquivo enviado (is_uploaded_file)
 * 4. Verificar se o arquivo não foi corrompido
 * 5. Verificar se o arquivo não é um arquivo malicioso
 * 6. Verificar se o arquivo não ultrapassa o tamanho máximo permitido
 */

if($arquivo['error'] == UPLOAD_ERR_OK) {
    $nomeArquivo = $arquivo['name'];
    move_uploaded_file($arquivo['tmp_name'], __DIR__.'/UploadArquivos/' . $nomeArquivo);
}