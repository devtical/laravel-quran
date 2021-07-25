<?php

namespace Devtical\Quran\Models;

use Devtical\Quran\Models\Ayah;
use Illuminate\Database\Eloquent\Model;
use League\Csv\Reader;
use Sushi\Sushi;

class Surah extends Model
{
    use Sushi;

    /**
     * Setup schema for columns
     */
    protected $schema = [
        'id'              => 'integer',
        'title'           => 'string',
        'transliteration' => 'string',
        'translation_en"' => 'string',
    ];

    /**
     * A surah has many ayah(s)
     * @return \Devtical\Quran\Models\Ayah
     */
    public function ayahs()
    {
        return $this->hasMany(Ayah::class);
    }

    /**
     * Process data via CSV
     * @return array
     */
    public function getRows()
    {
        $records = Reader::createFromPath(__DIR__ . '/../../resources/fixtures/surah.csv', 'r')
            ->setHeaderOffset(0)
            ->getRecords();

        return collect($records)
            ->values()
            ->toArray();
    }
}
