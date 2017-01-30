# php
Dependencia da API para a linguagem PHP

As referências para esta API você encontra em https://outpay.me/doc.

## Requisitos

* PHP 5.4 em diante.

## Instalação

### [Composer](http://getcomposer.org/) via [Packagist](packagist.org/packages/Outpay/Outpay)

  - Você pode instalar via [Composer](http://getcomposer.org/), executando o comando a seguir:

  ```bash
  composer require Outpay/Outpay
  ```

  - Para usar a biblioteca, use o [Composer autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

  ```php
  require_once('vendor/autoload.php');
  ```

### Manual
  - Se você não quer usar o Composer
  - Faça o download de uma das últimas versões, usando o endereço abaixo

  [`github.com/Outpay/client-php/releases`](https://github.com/Outpay/client-php/releases)

  - Depois de baixar, inclua a biblioteca em seu arquivo PHP

  ```php
  require_once("caminho-para/client-php/lib/init.php");
  ```

## Dependencias

  Esta biblioteca requer as seguintes extensões para funcionamento correto:

  - [`curl`](https://secure.php.net/manual/en/book.curl.php)
  - [`json`](https://secure.php.net/manual/en/book.json.php)

  Se você usa o Composer, essas dependencias são gerenciadas automaticamente. Caso teha feito a instalação manual, você precisa ter certeza que estas extensões estão instaladas e disponíveis.
