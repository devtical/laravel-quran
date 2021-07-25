<?php

namespace Devtical\Quran\Tests;

use Devtical\Quran\Models\Ayah;
use Devtical\Quran\Models\Surah;

class ModelTest extends TestCase
{
    /** @test */
    public function can_query_surah_model()
    {
        $this->assertEquals(114, Surah::count());
    }

    /** @test */
    public function can_query_ayah_model()
    {
        $this->assertEquals(6236, Ayah::count());
    }
}
