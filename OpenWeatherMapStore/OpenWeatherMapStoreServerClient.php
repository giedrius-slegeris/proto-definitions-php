<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Openweathermap_store;

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
     * @param \Openweathermap_store\GetWeatherDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetWeatherData(\Openweathermap_store\GetWeatherDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/openweathermap_store.OpenWeatherMapStoreServer/GetWeatherData',
        $argument,
        ['\Openweathermap_store\GetWeatherDataResponse', 'decode'],
        $metadata, $options);
    }

}
