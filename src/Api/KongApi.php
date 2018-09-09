<?php

namespace AppNG\Api;

use AppNG\Client\{
    NodeInformationModel, NodeStatusModel, ServiceModel
};

/**
 * Kong client implementation
 *
 * Created by AppNG.
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@gmail.com>
 */
class KongApi implements KongApiInterface
{

    function getNodeInformations(): NodeInformationModel
    {
        // TODO: Implement getNodeInformations() method.
    }

    /**
     * Get node status informations
     *
     * @return NodeStatusModel
     */
    function getNodeStatus(): NodeStatusModel
    {
        // TODO: Implement getNodeStatus() method.
    }

    /**
     * Retrieve services list
     *
     * @return array
     */
    function getServices(): array
    {
        // TODO: Implement getServices() method.
    }

    /**
     * Get service by unique ID or service name
     *
     * @param string $nameOrId
     *
     * @return ServiceModel
     */
    function getServiceByIdOrName(string $nameOrId): ServiceModel
    {
        // TODO: Implement getServiceByIdOrName() method.
    }

    /**
     * Add new service
     *
     * @param ServiceModel $service
     *
     * @return ServiceModel
     */
    function addService(ServiceModel $service): ServiceModel
    {
        // TODO: Implement addService() method.
    }
}