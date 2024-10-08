<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: openweathermapstore.proto

namespace Openweathermapstore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>openweathermapstore.Daily</code>
 */
class Daily extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Dt = 1 [json_name = "dt"];</code>
     */
    protected $Dt = 0;
    /**
     * Generated from protobuf field <code>int32 Sunrise = 2 [json_name = "sunrise"];</code>
     */
    protected $Sunrise = 0;
    /**
     * Generated from protobuf field <code>int32 Sunset = 3 [json_name = "sunset"];</code>
     */
    protected $Sunset = 0;
    /**
     * Generated from protobuf field <code>int32 Moonrise = 4 [json_name = "moonrise"];</code>
     */
    protected $Moonrise = 0;
    /**
     * Generated from protobuf field <code>int32 Moonset = 5 [json_name = "moonset"];</code>
     */
    protected $Moonset = 0;
    /**
     * Generated from protobuf field <code>float MoonPhase = 6 [json_name = "moon_phase"];</code>
     */
    protected $MoonPhase = 0.0;
    /**
     * Generated from protobuf field <code>.openweathermapstore.Temp Temp = 7 [json_name = "temp"];</code>
     */
    protected $Temp = null;
    /**
     * Generated from protobuf field <code>.openweathermapstore.FeelsLike FeelsLike = 8 [json_name = "feels_like"];</code>
     */
    protected $FeelsLike = null;
    /**
     * Generated from protobuf field <code>int32 Pressure = 9 [json_name = "pressure"];</code>
     */
    protected $Pressure = 0;
    /**
     * Generated from protobuf field <code>int32 Humidity = 10 [json_name = "humidity"];</code>
     */
    protected $Humidity = 0;
    /**
     * Generated from protobuf field <code>float DewPoint = 11 [json_name = "dew_point"];</code>
     */
    protected $DewPoint = 0.0;
    /**
     * Generated from protobuf field <code>float WindSpeed = 12 [json_name = "wind_speed"];</code>
     */
    protected $WindSpeed = 0.0;
    /**
     * Generated from protobuf field <code>int32 WindDeg = 13 [json_name = "wind_deg"];</code>
     */
    protected $WindDeg = 0;
    /**
     * Generated from protobuf field <code>float WindGust = 14 [json_name = "wind_gust"];</code>
     */
    protected $WindGust = 0.0;
    /**
     * Generated from protobuf field <code>repeated .openweathermapstore.Weather Weather = 15 [json_name = "weather"];</code>
     */
    private $Weather;
    /**
     * Generated from protobuf field <code>int32 Clouds = 16 [json_name = "clouds"];</code>
     */
    protected $Clouds = 0;
    /**
     * Generated from protobuf field <code>float Pop = 17 [json_name = "pop"];</code>
     */
    protected $Pop = 0.0;
    /**
     * Generated from protobuf field <code>float Rain = 18 [json_name = "rain"];</code>
     */
    protected $Rain = 0.0;
    /**
     * Generated from protobuf field <code>float Uvi = 19 [json_name = "uvi"];</code>
     */
    protected $Uvi = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Dt
     *     @type int $Sunrise
     *     @type int $Sunset
     *     @type int $Moonrise
     *     @type int $Moonset
     *     @type float $MoonPhase
     *     @type \Openweathermapstore\Temp $Temp
     *     @type \Openweathermapstore\FeelsLike $FeelsLike
     *     @type int $Pressure
     *     @type int $Humidity
     *     @type float $DewPoint
     *     @type float $WindSpeed
     *     @type int $WindDeg
     *     @type float $WindGust
     *     @type array<\Openweathermapstore\Weather>|\Google\Protobuf\Internal\RepeatedField $Weather
     *     @type int $Clouds
     *     @type float $Pop
     *     @type float $Rain
     *     @type float $Uvi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Openweathermapstore::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Dt = 1 [json_name = "dt"];</code>
     * @return int
     */
    public function getDt()
    {
        return $this->Dt;
    }

    /**
     * Generated from protobuf field <code>int32 Dt = 1 [json_name = "dt"];</code>
     * @param int $var
     * @return $this
     */
    public function setDt($var)
    {
        GPBUtil::checkInt32($var);
        $this->Dt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Sunrise = 2 [json_name = "sunrise"];</code>
     * @return int
     */
    public function getSunrise()
    {
        return $this->Sunrise;
    }

    /**
     * Generated from protobuf field <code>int32 Sunrise = 2 [json_name = "sunrise"];</code>
     * @param int $var
     * @return $this
     */
    public function setSunrise($var)
    {
        GPBUtil::checkInt32($var);
        $this->Sunrise = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Sunset = 3 [json_name = "sunset"];</code>
     * @return int
     */
    public function getSunset()
    {
        return $this->Sunset;
    }

    /**
     * Generated from protobuf field <code>int32 Sunset = 3 [json_name = "sunset"];</code>
     * @param int $var
     * @return $this
     */
    public function setSunset($var)
    {
        GPBUtil::checkInt32($var);
        $this->Sunset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Moonrise = 4 [json_name = "moonrise"];</code>
     * @return int
     */
    public function getMoonrise()
    {
        return $this->Moonrise;
    }

    /**
     * Generated from protobuf field <code>int32 Moonrise = 4 [json_name = "moonrise"];</code>
     * @param int $var
     * @return $this
     */
    public function setMoonrise($var)
    {
        GPBUtil::checkInt32($var);
        $this->Moonrise = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Moonset = 5 [json_name = "moonset"];</code>
     * @return int
     */
    public function getMoonset()
    {
        return $this->Moonset;
    }

    /**
     * Generated from protobuf field <code>int32 Moonset = 5 [json_name = "moonset"];</code>
     * @param int $var
     * @return $this
     */
    public function setMoonset($var)
    {
        GPBUtil::checkInt32($var);
        $this->Moonset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float MoonPhase = 6 [json_name = "moon_phase"];</code>
     * @return float
     */
    public function getMoonPhase()
    {
        return $this->MoonPhase;
    }

    /**
     * Generated from protobuf field <code>float MoonPhase = 6 [json_name = "moon_phase"];</code>
     * @param float $var
     * @return $this
     */
    public function setMoonPhase($var)
    {
        GPBUtil::checkFloat($var);
        $this->MoonPhase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.openweathermapstore.Temp Temp = 7 [json_name = "temp"];</code>
     * @return \Openweathermapstore\Temp|null
     */
    public function getTemp()
    {
        return $this->Temp;
    }

    public function hasTemp()
    {
        return isset($this->Temp);
    }

    public function clearTemp()
    {
        unset($this->Temp);
    }

    /**
     * Generated from protobuf field <code>.openweathermapstore.Temp Temp = 7 [json_name = "temp"];</code>
     * @param \Openweathermapstore\Temp $var
     * @return $this
     */
    public function setTemp($var)
    {
        GPBUtil::checkMessage($var, \Openweathermapstore\Temp::class);
        $this->Temp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.openweathermapstore.FeelsLike FeelsLike = 8 [json_name = "feels_like"];</code>
     * @return \Openweathermapstore\FeelsLike|null
     */
    public function getFeelsLike()
    {
        return $this->FeelsLike;
    }

    public function hasFeelsLike()
    {
        return isset($this->FeelsLike);
    }

    public function clearFeelsLike()
    {
        unset($this->FeelsLike);
    }

    /**
     * Generated from protobuf field <code>.openweathermapstore.FeelsLike FeelsLike = 8 [json_name = "feels_like"];</code>
     * @param \Openweathermapstore\FeelsLike $var
     * @return $this
     */
    public function setFeelsLike($var)
    {
        GPBUtil::checkMessage($var, \Openweathermapstore\FeelsLike::class);
        $this->FeelsLike = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Pressure = 9 [json_name = "pressure"];</code>
     * @return int
     */
    public function getPressure()
    {
        return $this->Pressure;
    }

    /**
     * Generated from protobuf field <code>int32 Pressure = 9 [json_name = "pressure"];</code>
     * @param int $var
     * @return $this
     */
    public function setPressure($var)
    {
        GPBUtil::checkInt32($var);
        $this->Pressure = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Humidity = 10 [json_name = "humidity"];</code>
     * @return int
     */
    public function getHumidity()
    {
        return $this->Humidity;
    }

    /**
     * Generated from protobuf field <code>int32 Humidity = 10 [json_name = "humidity"];</code>
     * @param int $var
     * @return $this
     */
    public function setHumidity($var)
    {
        GPBUtil::checkInt32($var);
        $this->Humidity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float DewPoint = 11 [json_name = "dew_point"];</code>
     * @return float
     */
    public function getDewPoint()
    {
        return $this->DewPoint;
    }

    /**
     * Generated from protobuf field <code>float DewPoint = 11 [json_name = "dew_point"];</code>
     * @param float $var
     * @return $this
     */
    public function setDewPoint($var)
    {
        GPBUtil::checkFloat($var);
        $this->DewPoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float WindSpeed = 12 [json_name = "wind_speed"];</code>
     * @return float
     */
    public function getWindSpeed()
    {
        return $this->WindSpeed;
    }

    /**
     * Generated from protobuf field <code>float WindSpeed = 12 [json_name = "wind_speed"];</code>
     * @param float $var
     * @return $this
     */
    public function setWindSpeed($var)
    {
        GPBUtil::checkFloat($var);
        $this->WindSpeed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 WindDeg = 13 [json_name = "wind_deg"];</code>
     * @return int
     */
    public function getWindDeg()
    {
        return $this->WindDeg;
    }

    /**
     * Generated from protobuf field <code>int32 WindDeg = 13 [json_name = "wind_deg"];</code>
     * @param int $var
     * @return $this
     */
    public function setWindDeg($var)
    {
        GPBUtil::checkInt32($var);
        $this->WindDeg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float WindGust = 14 [json_name = "wind_gust"];</code>
     * @return float
     */
    public function getWindGust()
    {
        return $this->WindGust;
    }

    /**
     * Generated from protobuf field <code>float WindGust = 14 [json_name = "wind_gust"];</code>
     * @param float $var
     * @return $this
     */
    public function setWindGust($var)
    {
        GPBUtil::checkFloat($var);
        $this->WindGust = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .openweathermapstore.Weather Weather = 15 [json_name = "weather"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWeather()
    {
        return $this->Weather;
    }

    /**
     * Generated from protobuf field <code>repeated .openweathermapstore.Weather Weather = 15 [json_name = "weather"];</code>
     * @param array<\Openweathermapstore\Weather>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWeather($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Openweathermapstore\Weather::class);
        $this->Weather = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Clouds = 16 [json_name = "clouds"];</code>
     * @return int
     */
    public function getClouds()
    {
        return $this->Clouds;
    }

    /**
     * Generated from protobuf field <code>int32 Clouds = 16 [json_name = "clouds"];</code>
     * @param int $var
     * @return $this
     */
    public function setClouds($var)
    {
        GPBUtil::checkInt32($var);
        $this->Clouds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Pop = 17 [json_name = "pop"];</code>
     * @return float
     */
    public function getPop()
    {
        return $this->Pop;
    }

    /**
     * Generated from protobuf field <code>float Pop = 17 [json_name = "pop"];</code>
     * @param float $var
     * @return $this
     */
    public function setPop($var)
    {
        GPBUtil::checkFloat($var);
        $this->Pop = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Rain = 18 [json_name = "rain"];</code>
     * @return float
     */
    public function getRain()
    {
        return $this->Rain;
    }

    /**
     * Generated from protobuf field <code>float Rain = 18 [json_name = "rain"];</code>
     * @param float $var
     * @return $this
     */
    public function setRain($var)
    {
        GPBUtil::checkFloat($var);
        $this->Rain = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Uvi = 19 [json_name = "uvi"];</code>
     * @return float
     */
    public function getUvi()
    {
        return $this->Uvi;
    }

    /**
     * Generated from protobuf field <code>float Uvi = 19 [json_name = "uvi"];</code>
     * @param float $var
     * @return $this
     */
    public function setUvi($var)
    {
        GPBUtil::checkFloat($var);
        $this->Uvi = $var;

        return $this;
    }

}

