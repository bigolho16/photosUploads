<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class methods extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        // return "ENTROU NO METHOD  in test";
        $this->visit('/test')
             ->see('Laravel 5')
             ->dontSee('Teste');

    }
}
