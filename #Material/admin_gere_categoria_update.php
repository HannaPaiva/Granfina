//***********************  Atualiza categoria ****************************************** 
    public function gere_categoria_update()
    {



        /* Verificar se existe um admin logado */
        if (!Store::adminLogado()) {
            Store::redirect('inicio', true);
            return;
        }

        // Verifca se existe um id na query string
        if (!isset($_GET['a'])) {
            Store::redirect('inicio', true);
            return;
        }


        // Verifca se existe um id na query string
        if (!isset($_GET['id'])) {
            Store::redirect('inicio', true);
            return;
        }

        // store::printdata($_POST);
        $id = Store::aesDencriptar($_GET['id']);
        $categoria_descricao = $_POST['text_decricao'];
        $categoria_icone = $_POST['categoria_icone'];

        // echo $_POST['text_decricao'];
        // echo '<br>';
        // echo $_POST['categoria_icone'];

        // echo $_GET['a'];
        // echo '<br>';
        // echo $id;
        // echo '<br>';
        // die('update');




        $categorias = new Categorias();

        // Validar imagem enviada categoria
        $cam = "../admin/assets/images/categorias/";
        $categorias->categoria_upload_verifica($cam);


        //Se existiu erro
        if (empty($_SESSION['erro'])) {
            // echo '<pre>';
            // print_r($_FILES);
            // die('123');

            // Faz a atualização da categoria

            $categoria = $categorias->categoria_update($id);

            // Verifca se existe um id na query string

            Store::redirect('gere_lista_categorias', true);
            return;
        } else {

            //Volta à edição da categoria

            // // VAI BUSCAR o ID DA CATEGORIA
            // Para visualizar novamente
            $ID_CAT = new Categorias();

            // $id = Store::aesDencriptar($_GET['id']);

            $categoria = $ID_CAT->buscar_categoria($id);

            $data = [
                'categoria' => $categoria
            ];


            // Store::printData($data);
            //apresenta backoffice
            // APRESENTA A PÁGINA DA EDIÇÃO DA CATEGORIA
            Store::Layout_admin([
                'admin/layouts/html_header',
                'admin/layouts/header',
                'admin/gere_categoria_edit',
                'admin/layouts/footer',
                'admin/layouts/html_footer',
            ], $data);
            return;
        }

        // fIM, CASO EXISTISSE ALGUMA VALIDAÇÃO ERRADA!!!
    }