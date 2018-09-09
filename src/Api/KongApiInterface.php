<?php

namespace AppNG\Api;

use AppNG\Client\{
    NodeInformationModel, NodeStatusModel, ServiceModel
};

/**
 * Kong API interface
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@gmail.com>
 */
interface KongApiInterface
{
    /**
     * Get node informations
     *
     * @return NodeInformationModel
     */
    function getNodeInformations(): NodeInformationModel;

    /**
     * Get node status informations
     *
     * @return NodeStatusModel
     */
    function getNodeStatus(): NodeStatusModel;

    /**
     * Retrieve services list
     *
     * @return array
     */
    function getServices(): array;

    /**
     * Get service by unique ID or service name
     *
     * @param string $nameOrId
     *
     * @return ServiceModel
     */
    function getServiceByIdOrName(string $nameOrId): ServiceModel;

    /**
     * Add new service
     *
     * @param ServiceModel $service
     *
     * @return ServiceModel
     */
    function addService(ServiceModel $service): ServiceModel;
}
