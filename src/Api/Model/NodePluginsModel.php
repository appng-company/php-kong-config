<?php

namespace AppNG\PhpKongConfig\Api\Model;

use JMS\Serializer\Annotation as JMS;


/**
 * NodePluginsStatus model
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@appng.pl>
 *
 * @JMS\AccessType("public_method")
 * @JMS\ExclusionPolicy("all")
 */
class NodePluginsModel
{
    /**
     * Enabled in cluster
     *
     * @JMS\Type("array<string, bool>")
     * @JMS\SerializedName("enabled_in_cluster")
     * @JMS\Expose()
     *
     * @var array
     */
    private $enabledInCluster;

    /**
     * Available on server
     *
     * @JMS\Type("array<string, bool>")
     * @JMS\SerializedName("available_on_server")
     * @JMS\Expose()
     *
     * @var array
     */
    private $availableOnServer;

    /**
     * @return array
     */
    public function getEnabledInCluster(): array
    {
        return $this->enabledInCluster;
    }

    /**
     * @param mixed $enabledInCluster
     */
    public function setEnabledInCluster($enabledInCluster): void
    {
        $this->enabledInCluster = $enabledInCluster;
    }

    /**
     * @return array
     */
    public function getAvailableOnServer(): array
    {
        return $this->availableOnServer;
    }

    /**
     * @param mixed $availableOnServer
     */
    public function setAvailableOnServer($availableOnServer): void
    {
        $this->availableOnServer = $availableOnServer;
    }

}