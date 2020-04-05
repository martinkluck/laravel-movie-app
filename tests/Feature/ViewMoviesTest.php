<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_correct_info()
    {
        Http::fake();
        $response = $this->get(route('movies.index'));
        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
    }
}
