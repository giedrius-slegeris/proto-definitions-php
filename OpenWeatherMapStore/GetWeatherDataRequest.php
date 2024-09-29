<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: openweathermap-store.proto

namespace Openweathermap_store;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Possibly add location to requests if extending server store to query for more locations
 *
 * Generated from protobuf message <code>openweathermap_store.GetWeatherDataRequest</code>
 */
class GetWeatherDataRequest extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\OpenweathermapStore::initOnce();
        parent::__construct($data);
    }

}

