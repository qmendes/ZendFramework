<?php

namespace Pessoa\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

class PessoaTable{

    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
}