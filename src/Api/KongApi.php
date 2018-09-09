<?php

namespace AppNG\PhpKongConfig\Api;

use AppNG\PhpKongConfig\Api\Model\{
    NodeInformationModel, NodeStatusModel, ServiceModel
};
use AppNG\PhpKongConfig\Factory\HttpClient\HttpClientFactory;
use AppNG\PhpKongConfig\Factory\Serializer\SerializerFactory;
use JMS\Serializer\Serializer;

/**
 * Kong client implementation
 *
 * Created by AppNG.
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@gmail.com>
 */
class KongApi implements KongApiInterface
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var \GuzzleHttp\Client
     */
    private $httpClient;

    /**
     * KongApi constructor.
     */
    public function __construct()
    {
        $this->serializer = SerializerFactory::create();
        $this->httpClient = HttpClientFactory::create();
    }

    /**
     * Get node informations
     *
     * @return NodeInformationModel
     */
    function getNodeInformations(): NodeInformationModel
    {
        // TODO: Implement getNodeStatus() method.
        return new NodeInformationModel();
    }

    /**
     * Get node status informations
     *
     * @return NodeStatusModel
     */
    function getNodeStatus(): NodeStatusModel
    {
        // TODO: Implement getNodeStatus() method.
        return new NodeStatusModel();
    }

    /**
     * Retrieve services list
     *
     * @return array
     */
    function getServices(): array
    {
        // TODO: Implement getServices() method.
        return [];
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
        return new ServiceModel();
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
        return new ServiceModel();
    }

    /**
     * Update existing service
     *
     * @param ServiceModel $service
     *
     * @return ServiceModel
     */
    function updateService(ServiceModel $service): ServiceModel
    {
        // TODO: Implement updateService() method.
        return new ServiceModel();
    }

    /**
     * Update or create service service
     *
     * @param ServiceModel $service
     *
     * @return ServiceModel
     */
    function updateOrCreateService(ServiceModel $service): ServiceModel
    {
        // TODO: Implement updateOrCreateService() method.
        return new ServiceModel();
    }

    /**
     * Delete service
     *
     * @param ServiceModel $service
     *
     * @return bool
     */
    function deleteService(ServiceModel $service): bool
    {
        // TODO: Implement deleteService() method.
        return true;
    }
}