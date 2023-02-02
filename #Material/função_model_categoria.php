
<?php
// Validar Foto - categora 
    // Validar tipo - tamanho imagem - largura e altura
   function categoria_upload_verifica($pasta)
    {

        $_SESSION['erro'] = "";
        // echo $_POST['text_decricao'];
        // echo '<br>';
        // echo $_POST['categoria_icone'];
        // die('op');

        // echo '<pre>';
        // print_r($_FILES);
        // die('upload');


        // $pasta_destino = "../admin/assets/images/categorias/";
        $pasta_destino = $pasta;
        $mime_aceites = [
            'image/jpeg',
            'image/png',
            'image/gif'
        ];


        // Tratamento dos ficheiros
        foreach ($_FILES as $file) { // cada volta que dermos corremos cada uma das propriedades
            // movimentação dos ficheiros, para a pasta de destino final

            // Verificar se imagem é do tipo esperado
            if (!in_array($file['type'], $mime_aceites)) {
                if ($file['type'] <> "") {
                    $_SESSION['erro'] = 'Imagem não é do tipo esperado';

                    // store::redirect('gere_categoria_update_erro&id=' . Store::aesEncriptar($_POST['id_categoria']), true);
                    return;
                }
            }

            // continue; //não permitindo assim que seja feito o upload   

            // verifcar se o ficheiro tem tamanho fisico inferior ou igual ao limite máximo
            // de 500Kb

            if ($file['size'] > IMAGE_SIZE) {
                $_SESSION['erro'] = 'Tamanho de imagem superior a ' . IMAGE_SIZE;
                return;
            }


            // Verificar as dimensões do ficheiro
            // Neste caso estou a definir um máximo de largura (width) 
            // e largura (height) -- defini no config

            // Se carreguei imagem 
            if ($file['name'] <> "") {

                $dimensoes = getimagesize($file['tmp_name']);
                if (($dimensoes[0] > IMAGE_WIDTH) || ($dimensoes[1] > IMAGE_HEIGHT)) {
                    $_SESSION['erro'] = 'Tamanho de Largura ' . IMAGE_WIDTH . ' ou Altura ' . IMAGE_HEIGHT . 'Superiores às Definidas';
                    return;
                }

                // Cao contrário move o ficheiro escolhido para a pasta destino

                move_uploaded_file($file['tmp_name'], $pasta_destino . $file['name']);
            }

            // Se não carreguei imagem

        }
    }
