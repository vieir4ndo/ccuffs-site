<?php

require_once('../vendor/autoload.php');

use \Mailjet\Resources;

if (isset($_POST["sendMessage"])) {
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sender_email = "matheus.v20@aluno.ifsc.edu.br";
    $receiver_email = "matheus.eu.mv@gmail.com";
    $my_name = "Matheus Vieira Santos";
    $date = date("Y-m-d H:i:s");
    $publicKey = "xpto";
    $secretKey = "xpto";

    $mj = new \Mailjet\Client($publicKey, $secretKey, true, ['version' => 'v3.1']);

    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => $sender_email,
                    'Name' => $my_name
                ],
                'To' => [
                    [
                        'Email' => $receiver_email,
                        "Name" => $my_name
                    ]
                ],
                'Subject' => "E-mail automático site pessoal - {$name}",
                'HTMLPart' => "
            Remetente: {$name} <br />
            Telefone: {$telephone} <br />
            E-mail: {$email} <br />
            Mensagem: {$message} <br />
            Enviado em: {$date}"
            ]
        ]
    ];

    $response = $mj->post(Resources::$Email, ['body' => $body]);

    header("Location: ../contact.php?sent={$response->success()}");
}


