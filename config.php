<?php

define('APP_NAME', 'GRANFINA');
define('APP_VERSION', 'V1.0.0');
define('BASE_URL', 'http://localhost/');
// constantes mysql



// CONFIG HANNA

// ****************************************************************


define('MYSQL_SERVER', 'localhost');
define('MYSQL_DATABASE', '9_studio');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', 'Kratos23100');
define('MYSQL_CHARSET', 'utf8');




// socket para enviar email


$conn= mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASS,MYSQL_DATABASE);
mysqli_set_charset($conn, "utf8mb4");
      if(!$conn){
          die('Could not Connect MySql Server:');
        }


define('AES_KEY', ')=T93B){*fD9uf%>7:A#xNVvBK_gM7U7');

define('AES_IV',  '"hA{e4-K3vB^[TKq');



define('IMAGE_WIDTH', 50000);
define('IMAGE_SIZE', 100000);
define('IMAGE_HEIGHT', 50000);

define('EMAIL', 'studiogranfina@gmail.com');

define('EMAIL_OUT', 'StudioGranfina@outlook.com');
define('PASSWORD_OUT', 'mana23100');

define('CLIENT_ID', '337253929944-j5pf1478bukmq3n6535sqdri9f30mpna.apps.googleusercontent.com');
define('CLIENT_SECRET', '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');
define('NAME', 'Brena Teodoro');

define('TOKEN', '1//03BeHHIb-crMFCgYIARAAGAMSNwF-L9IrdHyjHjKBGkPtyOcBItqFSOE77aeNYPP-jNk2N_gDOYib_nWZQW-1wN6RmUAknI3jksA');
