<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Openweathermapstore;

/**
 */
class OpenWeatherMapStoreServerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Openweathermapstore\GetWeatherDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetWeatherData(\Openweathermapstore\GetWeatherDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/openweathermapstore.OpenWeatherMapStoreServer/GetWeatherData',
        $argument,
        ['\Openweathermapstore\GetWeatherDataResponse', 'decode'],
        $metadata, $options);
    }

}
