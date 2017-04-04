<?php
  $endpoint  = 'https://outpay.me/api/billet/create'
  $token = '33cf1f44279bbb4962c689c21';
  
  // Os campos com (*) devem ser preenchidos obrigatoriamente
  
  $data = array(
      'user_token' => $token, // *
      'order_amount' => 100, // * Valor do pedido
        'order_description' => 'Pedido da minha loja virtual', // * Legenda do pedido
      'customer_fullname' => 'John Due', // * Nome completo do cliente
      'customer_document' => '99999999999999', // * Documento do cliente (apenas número) [CPF ou CNPJ]
      'customer_email' => 'jhon@due.com', // * E-mail do cliente
      'customer_phone' => '99 9 99999999', // * Telefone do cliente (com DD) [no mínimo 10 caracteres]
      'customer_address_street' => 'Rua Almirante', // * Endereço do cliente
      'customer_address_number' => 123, // * Número do endereço do cliente
      'customer_address_complement' => 'Apt 101', // Complemento do endereço do cliente
      'customer_address_neighborhood' => 'Centro', // * Bairro do endereço do cliente
      'customer_address_city' => 'Itajai', // * Cidade do endereço do cliente
      'customer_address_state' => 'SC', // * Estado do endereço do cliente [apenas dois caracteres]
      'customer_address_zipcode' => '00000-000' // * CEP do endereço do cliente
  );

  $data = http_build_query($data);

  $curl = curl_init($endpoint);

  curl_setopt($curl, CURLOPT_HTTPHEADER, array("Accept: application/json; charset=utf-8"));
  curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/4.0');
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  $resposta = curl_exec($curl);
  curl_close($curl);

  $response = json_decode($resposta);
  $response->checkout_url; // URL do checkout para onde o seu cliente deverá ir para imprimir o boleto
?>
