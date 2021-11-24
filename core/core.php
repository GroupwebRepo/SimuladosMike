<?php
/* Arquivo que contém a função para o retorno das
requisições da api */
require('util/jsonResponse.php');

/* Arquivo que define as constantes do sistema */
require('const.php');

/* Arquivo que define as constantes do sistema */
require('util/sendEmail.php');

/* Função que para o processamento do sistema
e envia um e-mail para os desenvolvedores */
require('util/fatalError.php');

/* Utils E helpers */
require('util/helperVagas.php');
require('util/helperUsuario.php');
require('util/helperHtml.php');
require('util/helperEmpresa.php');

/* Arquivo que contém as configurações básicas
para o funcionamento do core do sistema.
Config:
PHP ini config, Debug Vars, Headers,
MySqli Connection, SMTP Auth.*/
require('config.php');

/* Arquivo que engloba o funcionamento da api */
require('webservice.php');
