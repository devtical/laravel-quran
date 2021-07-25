<?php

namespace Devtical\Quran\Models;

use Devtical\Quran\Models\Ayah;
use Devtical\Quran\Models\Model;
use League\Csv\Reader;

class Surah extends Model
{
    protected $schema = [
        'id'              => 'integer',
        'title'           => 'string',
        'transliteration' => 'string',
        'translation_en"' => 'string',
    ];

    public function ayahs()
    {
        return $this->hasMany(Ayah::class, 'surah_id', 'id');
    }

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
