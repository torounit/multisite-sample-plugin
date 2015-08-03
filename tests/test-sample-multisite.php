<?php

class SampleMultisiteTest extends WP_UnitTestCase {

	public function test_is_multisite() {
		$this->assertTrue( is_multisite() );
	}

	public function test_create_blog() {

		$id = $this->factory->blog->create();
		switch_to_blog( $id );
		$blog_home_url = home_url();
		restore_current_blog();
		$this->assertNotEquals( home_url(), $blog_home_url );

	}
}

