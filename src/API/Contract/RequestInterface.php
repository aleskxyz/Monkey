<?php
namespace Clivern\Monkey\API\Contract;
use Clivern\Monkey\API\DumpType;

/**
 * API Request Interface
 *
 * @since 1.0.0
 * @package Clivern\Monkey\API\Contract
 */
interface RequestInterface {

    /**
     * Set Method
     */
    public function setMethod($method);

    /**
     * Set Type
     */
    public function setType($type);

    /**
     * Add URL Parameter
     */
    public function addParameter($key, $value);

    /**
     * Add Request Body Item
     */
    public function addItem($key, $value);

    /**
     * Add Header Item
     */
    public function addHeader($key, $value);

    /**
     * Get Request Method
     */
    public function getMethod();

    /**
     * Get Request Type
     */
    public function getType();

    /**
     * Get Request URL Parameter
     */
    public function getParameter($key);

    /**
     * Get Request Body Item
     */
    public function getItem($key);

    /**
     * Get Request Body Items
     */
    public function getItems($type);

    /**
     * Get Request Body
     */
    public function getBody($type);

    /**
     * Get Request Header Item
     */
    public function getHeader($key);

    /**
     * Get Headers
     */
    public function getHeaders();

    /**
     * Check if Header Item Exists
     */
    public function headerExists($key);

    /**
     * Check if URL Parameter Exists
     */
    public function parameterExists($key);

    /**
     * Check if Body Item Exists
     */
    public function itemExists($key);

    /**
     * Debug The Request Object
     */
    public function debug();

    /**
     * Dump The PlainRequest Instance Data
     */
    public function dump($type);

    /**
     * Reload The PlainRequest Instance Data
     */
    public function reload($data, $type);
}