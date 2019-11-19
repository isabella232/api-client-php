<?php
/**
 * UsersApiTest
 * PHP version 5
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LaunchDarkly REST API
 *
 * Build custom integrations with the LaunchDarkly REST API
 *
 * OpenAPI spec version: 2.0.22
 * Contact: support@launchdarkly.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace LaunchDarklyApi;

use \LaunchDarklyApi\Configuration;
use \LaunchDarklyApi\ApiException;
use \LaunchDarklyApi\ObjectSerializer;

/**
 * UsersApiTest Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for deleteUser
     *
     * Delete a user by ID..
     *
     */
    public function testDeleteUser()
    {
    }

    /**
     * Test case for getSearchUsers
     *
     * Search users in LaunchDarkly based on their last active date, or a search query. It should not be used to enumerate all users in LaunchDarkly-- use the List users API resource..
     *
     */
    public function testGetSearchUsers()
    {
    }

    /**
     * Test case for getUser
     *
     * Get a user by key..
     *
     */
    public function testGetUser()
    {
    }

    /**
     * Test case for getUsers
     *
     * List all users in the environment. Includes the total count of users. In each page, there will be up to 'limit' users returned (default 20). This is useful for exporting all users in the system for further analysis. Paginated collections will include a next link containing a URL with the next set of elements in the collection..
     *
     */
    public function testGetUsers()
    {
    }
}
