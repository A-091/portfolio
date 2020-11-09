<?php

declare(strict_types = 1);

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Throwable;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @throws Throwable
     * @return void
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
}