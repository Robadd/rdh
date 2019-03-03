<?php

/**
 * Interface for Routes
 */
interface Route
{
    /**
     * Handler for GET method
     *
     * @param String $params
     * @return void
     */
    public function getHandler($params);

    /**
     * Handler for GET method
     *
     * @param String $params
     * @return void
     */
    public function deleteHandler($params);

    /**
     * Handler for GET method
     *
     * @param String $params
     * @param String $body
     * @return void
     */
    public function postHandler($params, $body);

    /**
     * Handler for GET method
     *
     * @param String $params
     * @param String $body
     * @return void
     */
    public function putHandler($params, $body);
}
