<?php

namespace HappyR\StompBundle\Stomp;

class Stomp extends \FuseSource\Stomp\Stomp {

    public function __construct($brokerUri, $clientId) {
        parent::__construct($brokerUri);
        $this->clientId = $clientId;
    }

}