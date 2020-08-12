<?php
/**
 * FeatureFlagsApiTest
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
 * OpenAPI spec version: 3.4.0
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
 * FeatureFlagsApiTest Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeatureFlagsApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for copyFeatureFlag
     *
     * Copies the feature flag configuration from one environment to the same feature flag in another environment..
     *
     */
    public function testCopyFeatureFlag()
    {
    }

    /**
     * Test case for deleteFeatureFlag
     *
     * Delete a feature flag in all environments. Be careful-- only delete feature flags that are no longer being used by your application..
     *
     */
    public function testDeleteFeatureFlag()
    {
    }

    /**
     * Test case for getExpiringUserTargets
     *
     * Get expiring user targets for feature flag.
     *
     */
    public function testGetExpiringUserTargets()
    {
    }

    /**
     * Test case for getFeatureFlag
     *
     * Get a single feature flag by key..
     *
     */
    public function testGetFeatureFlag()
    {
    }

    /**
     * Test case for getFeatureFlagStatus
     *
     * Get the status for a particular feature flag..
     *
     */
    public function testGetFeatureFlagStatus()
    {
    }

    /**
     * Test case for getFeatureFlagStatusAcrossEnvironments
     *
     * Get the status for a particular feature flag across environments.
     *
     */
    public function testGetFeatureFlagStatusAcrossEnvironments()
    {
    }

    /**
     * Test case for getFeatureFlagStatuses
     *
     * Get a list of statuses for all feature flags. The status includes the last time the feature flag was requested, as well as the state of the flag..
     *
     */
    public function testGetFeatureFlagStatuses()
    {
    }

    /**
     * Test case for getFeatureFlags
     *
     * Get a list of all features in the given project..
     *
     */
    public function testGetFeatureFlags()
    {
    }

    /**
     * Test case for patchExpiringUserTargets
     *
     * Update, add, or delete expiring user targets on feature flag.
     *
     */
    public function testPatchExpiringUserTargets()
    {
    }

    /**
     * Test case for patchFeatureFlag
     *
     * Perform a partial update to a feature..
     *
     */
    public function testPatchFeatureFlag()
    {
    }

    /**
     * Test case for postFeatureFlag
     *
     * Creates a new feature flag..
     *
     */
    public function testPostFeatureFlag()
    {
    }
}
