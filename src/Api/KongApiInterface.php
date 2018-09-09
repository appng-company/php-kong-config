<?php
namespace AppNG\PhpKongConfig\Api;

use AppNG\PhpKongConfig\Api\Model\{
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

    /**
     * Update existing service
     *
     * @param ServiceModel $service
     *
     * @return ServiceModel
     */
    function updateService(ServiceModel $service): ServiceModel;

    /**
     * Update or create service service
     *
     * @param ServiceModel $service
     *
     * @return ServiceModel
     */
    function updateOrCreateService(ServiceModel $service): ServiceModel;

    /**
     * Delete service
     *
     * @param ServiceModel $service
     *
     * @return bool
     */
    function deleteService(ServiceModel $service): bool;
}
