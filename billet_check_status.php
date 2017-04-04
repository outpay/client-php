<?php
  // Documentação completa [http://outpay.co/doc#billet_status]

  $endpoint  = 'https://outpay.co/api/billet/status'
  $token = '33cf1f44279bbb4962c689c21'; // Token do usuário no Dashboard da Outpay
  
  // Os campos com (*) devem ser preenchidos obrigatoriamente
  
  $data = array(
      'user_token' => $token, // *
      'billet_token' => 'h5dhwyl8pi0csov31ajvuz9r7msrmg60', // * Token do boleto gerado
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
  $response->billet_status; // Nome dod status atual do boleto

  // Possiveis status estão na documentação [http://outpay.co/doc#billet_status]
?>
