<?php

namespace WovoSchool\Modules\Tests\Commands;

use WovoSchool\Modules\Contracts\RepositoryInterface;
use WovoSchool\Modules\Tests\BaseTestCase;

class PublishTranslationCommandTest extends BaseTestCase
{
    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    private $finder;
    /**
     * @var string
     */
    private $modulePath;

    public function setUp(): void
    {
        parent::setUp();
        $this->modulePath = base_path('modules/Blog');
        $this->finder = $this->app['files'];
        $this->artisan('module:make', ['name' => ['Blog']]);
    }

    public function tearDown(): void
    {
        $this->app[RepositoryInterface::class]->delete('Blog');
        parent::tearDown();
    }

    /** @test */
    public function it_published_module_translations()
    {
        $code = $this->artisan('module:publish-translation', ['module' => 'Blog']);

        $this->assertDirectoryExists(base_path('resources/lang/blog'));
        $this->assertSame(0, $code);
    }
}