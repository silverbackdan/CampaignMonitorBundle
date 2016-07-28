<?php

namespace Intracto\CampaignMonitorBundle\Service\Connector;

use Intracto\CampaignMonitorBundle\Service\Authentication;

class ListConnectorFactory implements ConnectorFactory
{
    /**
     * @var Authentication
     */
    private $authentication;

    /**
     * @param Authentication $authentication
     */
    public function __construct(Authentication $authentication)
    {
        $this->authentication = $authentication;
    }

    /**
     * @param string $id
     * @return ListConnector
     */
    public function getConnectorForId($id)
    {
        return new ListConnector($this->authentication, $id);
    }
}
