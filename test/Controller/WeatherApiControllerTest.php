<?php

namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class WeatherApiControllerTest extends TestCase
{

    public function setUp()
    {
        global $di;

        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");
        $di->loadServices(ANAX_INSTALL_PATH . "/test/config/di");

        $this->di = $di;

        $this->controller = new WeatherApiController();
        $this->controller->setDI($this->di);
        $this->controller->initialize();
    }



    /**
     * Test the route "index".
     */
    public function testIndexActionGet()
    {
        $request = $this->di->get("request");

        $ip = "8.8.8.8";
        $days = "week";

        $request->setGet("ip", $ip);
        $request->setGet("days", $days);

        $res = $this->controller->indexActionGet();
        $this->assertArrayHasKey('summary', $res[0]['1']);
    }



    public function testindexActionGetFalse()
    {
        $request = $this->di->get("request");

        $res = $this->controller->indexActionGet();

        $this->assertContains("No location found", $res[0]);
    }



    public function testindexActionPostTrue()
    {
        $request = $this->di->get("request");

        $ip = "8.8.8.8";
        $days = "week";
        $request->setPost("ip", $ip);
        $request->setPost("days", $days);

        $res = $this->controller->indexActionPost();
        $this->assertArrayHasKey('summary', $res[0]['1']);
    }
}
