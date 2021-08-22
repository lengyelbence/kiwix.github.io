<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Megrendelés',
    'email_message' => 'Új megrendelés:
',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'megrendeles@kiwix.hu',
    'to' => 'lengyelbence77@gmail.com'
    ),
    'fields' => array(
    'Név:' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Név:',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Név:\' is required.'
    )
    ),
    'E-mail:' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'E-mail:',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'E-mail:\' is required.'
    )
    ),
    'Üzenet:' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Üzenet:',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Üzenet:\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>