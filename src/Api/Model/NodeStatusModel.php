<?php

namespace AppNG\PhpKongConfig\Api\Model;

use JMS\Serializer\Annotation as JMS;


/**
 * NodeStatus model
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@appng.pl>
 *
 * @JMS\AccessType("public_method")
 * @JMS\ExclusionPolicy("all")
 */
class NodeStatusModel
{

    /**
     * Node plugins
     *
     * @JMS\Type("AppNG\PhpKongConfig\Api\Model\NodePluginsModel")
     * @JMS\SerializedName("plugins")
     * @JMS\Expose()
     *
     * @var \AppNG\PhpKongConfig\Api\Model\NodePluginsModel
     */
    private $plugins;

    /**
     * Node plugins
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("tagline")
     * @JMS\Expose()
     *
     * @var string
     */
    private $tagline;

    /**
     * Configuration
     *
     * @JMS\Type("AppNG\PhpKongConfig\Api\Model\NodeConfigurationModel")
     * @JMS\SerializedName("tagline")
     * @JMS\Expose()
     *
     * @var \AppNG\PhpKongConfig\Api\Model\NodeConfigurationModel
     */
    private $configuration;

    /**
     * Node version
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("version")
     * @JMS\Expose()
     *
     * @var string
     */
    private $version;

    /**
     * Node ID
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("node_id")
     * @JMS\Expose()
     *
     * @var string
     */
    private $nodeId;

    /**
     * Node Lua version
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lua_version")
     * @JMS\Expose()
     *
     * @var string
     */
    private $luaVersion;

    /**
     * Node pseudo random generators seeds
     *
     * @JMS\Type("array<string, string>")
     * @JMS\SerializedName("prng_seeds")
     * @JMS\Expose()
     *
     * @var array
     */
    private $prngSeeds;

    /**
     * Node timers
     *
     * @JMS\Type("array<string, int>")
     * @JMS\SerializedName("timers")
     * @JMS\Expose()
     *
     * @var array
     */
    private $timers;

    /**
     * Node hostname
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("hostname")
     * @JMS\Expose()
     *
     * @var string
     */
    private $hostname;

    /**
     * @return \AppNG\PhpKongConfig\Api\Model\NodePluginsModel
     */
    public function getPlugins(): NodePluginsModel
    {
        return $this->plugins;
    }

    /**
     * @param mixed $plugins
     */
    public function setPlugins($plugins): void
    {
        $this->plugins = $plugins;
    }

    /**
     * @return string
     */
    public function getTagline(): string
    {
        return $this->tagline;
    }

    /**
     * @param string $tagline
     */
    public function setTagline(string $tagline): void
    {
        $this->tagline = $tagline;
    }

    /**
     * @return \AppNG\PhpKongConfig\Api\Model\NodeConfigurationModel
     */
    public function getConfiguration(): NodeConfigurationModel
    {
        return $this->configuration;
    }

    /**
     * @param mixed $configuration
     */
    public function setConfiguration($configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getNodeId(): string
    {
        return $this->nodeId;
    }

    /**
     * @param string $nodeId
     */
    public function setNodeId(string $nodeId): void
    {
        $this->nodeId = $nodeId;
    }

    /**
     * @return string
     */
    public function getLuaVersion(): string
    {
        return $this->luaVersion;
    }

    /**
     * @param string $luaVersion
     */
    public function setLuaVersion(string $luaVersion): void
    {
        $this->luaVersion = $luaVersion;
    }

    /**
     * @return array
     */
    public function getPrngSeeds(): array
    {
        return $this->prngSeeds;
    }

    /**
     * @param mixed $prngSeeds
     */
    public function setPrngSeeds($prngSeeds): void
    {
        $this->prngSeeds = $prngSeeds;
    }

    /**
     * @return array
     */
    public function getTimers(): array
    {
        return $this->timers;
    }

    /**
     * @param mixed $timers
     */
    public function setTimers($timers): void
    {
        $this->timers = $timers;
    }

    /**
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }

    /**
     * @param string $hostname
     */
    public function setHostname(string $hostname): void
    {
        $this->hostname = $hostname;
    }

}