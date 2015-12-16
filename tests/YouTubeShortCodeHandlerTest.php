<?php

/**
* Testing YouTubeShortCodeHandler
*/
class YouTubeShortCodeHandlerTest extends SapphireTest
{
	protected static $fixture_file = 'YouTubeShortCodeTest.yml';

	public function testVideoIdOnly() {
		$page = $this->objFromFixture('Page', 'VideoIdOnly');
		$html = ShortcodeParser::get_active()->parse($page->Content);
		$this->assertContains('<div class="YouTube">', $html);
		$expected = '<iframe width="560" height="315" src="https://www.youtube'
				  . '.com/embed/5XQwWATPReA" frameborder="0" allowfullscreen=""'
				  . '></iframe>';
		$this->assertContains($expected, $html);
	}

	public function testVideoWithCaption() {
		$page = $this->objFromFixture('Page', 'VideoWithCaption');
		$html = ShortcodeParser::get_active()->parse($page->Content);
		$this->assertContains('<div class="YouTube">', $html);
		$expected = '<iframe width="560" height="315" src="https://www.youtube'
				  . '.com/embed/5XQwWATPReA" frameborder="0" allowfullscreen=""'
				  . '></iframe>';
		$this->assertContains('<p>This is a caption</p>', $html);

		$this->assertContains($expected, $html);
	}

	public function testVideoWithWidth() {
		$page = $this->objFromFixture('Page', 'VideoWithWidth');
		$html = ShortcodeParser::get_active()->parse($page->Content);
		$this->assertContains('<div class="YouTube">', $html);
		$expected = '<iframe width="314" height="315" src="https://www.youtube'
				  . '.com/embed/5XQwWATPReA" frameborder="0" allowfullscreen=""'
				  . '></iframe>';
		$this->assertContains($expected, $html);
	}

	public function testVideoWithHeight() {
		$page = $this->objFromFixture('Page', 'VideoWithHeight');
		$html = ShortcodeParser::get_active()->parse($page->Content);
		$this->assertContains('<div class="YouTube">', $html);
		$expected = '<iframe width="560" height="314" src="https://www.youtube'
				  . '.com/embed/5XQwWATPReA" frameborder="0" allowfullscreen=""'
				  . '></iframe>';
		$this->assertContains($expected, $html);
	}

	public function testVideoWithAll() {
		$page = $this->objFromFixture('Page', 'VideoWithAll');
		$html = ShortcodeParser::get_active()->parse($page->Content);
		$this->assertContains('<div class="YouTube">', $html);
		$expected = '<iframe width="314" height="418" src="https://www.youtube'
				  . '.com/embed/5XQwWATPReA" frameborder="0" allowfullscreen=""'
				  . '></iframe>';
		$this->assertContains($expected, $html);
		$this->assertContains('<p>This is a caption</p>', $html);
	}

	public function testVideoWithNoID() {
		$page = $this->objFromFixture('Page', 'VideoWithNoID');
		$html = ShortcodeParser::get_active()->parse($page->Content);

		$this->assertEquals('There should not be a video here ', $html);
	}

	public function testVideoWithNoAutoPlay() {
		$page = $this->objFromFixture('Page', 'VideoWithNoAutoPlay');
		$html = ShortcodeParser::get_active()->parse($page->Content);
		$this->assertContains('<div class="YouTube">', $html);
		$expected = '<iframe width="560" height="315" src="https://www.youtube.'
				  . 'com/embed/5XQwWATPReA&amp;AutoPlay=1" frameborder="0" allo'
				  . 'wfullscreen="">';
		$this->assertContains($expected, $html);
	}
}
