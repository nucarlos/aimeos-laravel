<?php

class PageControllerTest extends AimeosTestAbstract
{
	public function setUp()
	{
		parent::setUp();
		View::addLocation(dirname(__DIR__).'/fixtures/views');
	}


	public function testPrivacyAction()
	{
		$this->action('GET', '\Aimeos\Shop\Controller\PageController@privacyAction');
		$this->assertResponseOk();
	}


	public function testTermsAction()
	{
		$this->action('GET', '\Aimeos\Shop\Controller\PageController@termsAction');
		$this->assertResponseOk();
	}
}