<?php

namespace WovoSchool\Modules\Tests;

use WovoSchool\Modules\Contracts\RepositoryInterface;
use WovoSchool\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProviderTest extends BaseTestCase
{
    /** @test */
    public function it_binds_repository_interface_with_implementation()
    {
        $this->assertInstanceOf(LaravelFileRepository::class, app(RepositoryInterface::class));
    }
}
