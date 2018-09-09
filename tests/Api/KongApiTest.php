<?php
namespace Api;

use AppNG\PhpKongConfig\Api\KongApi;
use AppNG\PhpKongConfig\Api\Model\NodeInformationModel;
use AppNG\PhpKongConfig\Api\Model\NodeStatusModel;
use AppNG\PhpKongConfig\Api\Model\ServiceModel;
use PHPUnit\Framework\TestCase;

/**
 * Created by AppNG.
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@gmail.com>
 */
class KongApiTest extends TestCase
{

    /**
     * Just check if the KongApi class has no syntax error
     *
     * This is just a simple check to make sure library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     */
    public function testIsThereAnySyntaxError()
    {
        $kongApi = new KongApi();
        $this->assertTrue(is_object($kongApi));
        unset($kongApi);
    }

    /**
     * Test getNodeInformations method
     */
    public function testGetNodeInformationsMethod()
    {
        $kongApi = new KongApi();
        $response = $kongApi->getNodeInformations();
        $this->assertInstanceOf(NodeInformationModel::class, $response);
        unset($kongApi);
    }

    /**
     * Test getNodeInformations method
     */
    public function testGetNodeStatusMethod()
    {
        $kongApi = new KongApi();
        $response = $kongApi->getNodeStatus();
        $this->assertInstanceOf(NodeStatusModel::class, $response);
        unset($kongApi);
    }

    /**
     * Test getServices method
     */
    public function testGetServicesMethod()
    {
        $kongApi = new KongApi();
        $response = $kongApi->getServices();
        $this->assertTrue(is_array($response));
        unset($kongApi);
    }

    /**
     * Test getServices method
     */
    public function testGetServiceByIdOrNameMethod()
    {
        $kongApi = new KongApi();
        $response = $kongApi->getServiceByIdOrName('123');
        $this->assertInstanceOf(ServiceModel::class, $response);
        unset($kongApi);
    }

    /**
     * Test getServices method
     */
    public function testAddServiceMethod()
    {
        $kongApi = new KongApi();
        $response = $kongApi->addService(new ServiceModel());
        $this->assertInstanceOf(ServiceModel::class, $response);
        unset($kongApi);
    }

    /**
     * Test updateServices method
     */
    public function testUpdateServiceMethod()
    {
        $kongApi = new KongApi();
        $response = $kongApi->updateService(new ServiceModel());
        $this->assertInstanceOf(ServiceModel::class, $response);
        unset($kongApi);
    }

    /**
     * Test updateServices method
     */
    public function testUpdateOrCreateServiceMethod()
    {
        $kongApi = new KongApi();
        $response = $kongApi->updateOrCreateService(new ServiceModel());
        $this->assertInstanceOf(ServiceModel::class, $response);
        unset($kongApi);
    }

    /**
     * Test updateServices method
     */
    public function testDeleteServiceMethod()
    {
        $kongApi = new KongApi();
        $response = $kongApi->deleteService(new ServiceModel());
        $this->assertTrue(is_bool($response));
        unset($kongApi);
    }

}