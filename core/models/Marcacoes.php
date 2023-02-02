<?php

namespace core\models;


use core\classes\Database;
use core\classes\Studio;
use core\controllers\Main;
use DateTime;


class Marcacoes
{


    public  function select_categorias()
    {


        $bd  = new Database();



        $parametros = [



            //cod_cliente
            //cod_funcionario
            // cod_servico
            //data
            //hora
            //tipo
            //forma_pagamento


        ];


        $categoria = $bd->select("SELECT * FROM categorias");

        return $categoria;
        // $bd->insert("INSERT INTO...");
    }



    public function select_servicos($a)
    {

        // $a = $_GET['servicos'];
        $bd  = new Database();



        $parametros = [
            ':servico' => $a
        ];

        $categoria = $bd->select("SELECT * FROM servicos ", $parametros);
        // $categoria = $bd->select("SELECT * FROM servicos WHERE cod_servico = :servico" , $parametros);
        return $categoria;
    }



    public function tabela_servicos()
    {

        // $a = $_GET['servicos'];
        $bd  = new Database();



        $categoria = $bd->select("SELECT * FROM servicos ");
        // $categoria = $bd->select("SELECT * FROM servicos WHERE cod_servico = :servico" , $parametros);
        return $categoria;
    }






    public function mostrar_calendario()
    {


        $bd  = new Database();

        $resultado_events =  $bd->select("SELECT id, title, 
        color, start, end FROM calendario");




        $eventos = [];

        foreach ($resultado_events as $res) {


            $eventos[] = [
                'id' => $res->id,
                'title' => $res->title,
                'color' => $res->color,
                'start' => $res->start,
                'end' => $res->end,
                // 'title' => $title,
                // 'color' => $color,
                // 'start' => $start,
                // 'end' => $end,
            ];
        }
        //    Studio::printData($eventos);
        // $title = $row_events['title'];



        return $eventos;
        // echo json_encode($eventos);

    }
    public function criar_evento_admin()
    {

        // var_dump($_POST);
        // die();

        $bd = new Database();

        //         title
        //  color 
        //  start 
        // starttime
        // endtime

        //  end
        $id = 0;
        $datetime = new DateTime($_POST['data'] . strval($_POST['starttime']));

        $start =  $datetime->format('Y-m-d H:i:s');

        $endtime = new DateTime($_POST['data'] . strval($_POST['endtime']));

        $end =  $endtime->format('Y-m-d H:i:s');




        $title = $_POST["title"];
        $color = 'red';

        // $start = date('Y-m-d H:i:s', strtotime($_POST['data'] + $_POST['starttime'] ) );

        // $end =  date('Y-m-d H:i:s', strtotime($_POST['data'] + $_POST['endtime'] ));




        //cod_cliente
        //cod_funcionario
        // cod_servico
        //data
        //hora
        //tipo
        //forma_pagamento





        $parametros = [
            // NOME DOS PARAMETROS = NOME DOS CAMPOS

            ':start' => $start,
            ':title' => $title,
            ':color' => $color,
            ':end' => $end,
  

        ];

        // Studio::printData($parametros);
        // A FUNCIONAR »»»»»»»»»»»»»»»»»»»»»»»»»»»»

        $res = $bd->insert("INSERT INTO calendario VALUES(
            0, 
          :title,
          :color,
          :start,
          :end
     
            )", $parametros);



    }


    public function criar_evento_cliente()
    {



        $bd = new Database();


        $datetime = new DateTime($_POST['data'] . strval($_POST['starttime']));

        $start =  $datetime->format('Y-m-d H:i:s');

        $endtime = new DateTime($_POST['data'] . strval($_POST['starttime']));

        $endtime->modify('+5 minutes');

        $end =  $endtime->format('Y-m-d H:i:s');




        $title = $_POST["title"];
        $color = 'blue';




        $parametros = [
            // NOME DOS PARAMETROS = NOME DOS CAMPOS

          
            ':title' => $title,
            ':start' => $start,
            ':color' => $color,
            ':end' => $end,
        ];

        // Studio::printData($parametros);

        // A FUNCIONAR »»»»»»»»»»»»»»»»»»»»»»»»»»»»

        $res =    $bd->insert("INSERT INTO calendario VALUES(
            0, 
          :title,
          :color,
          :start,
          :end )", $parametros);

        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
