<?php

namespace Devtical\Quran\Models;

use Devtical\Quran\Models\Model;
use Devtical\Quran\Models\Surah;
use League\Csv\Reader;

class Ayah extends Model
{
    protected $schema = [
        'id'           => 'integer',
        'surah_id'     => 'integer',
        'content'      => 'string',
        'translate_en' => 'string',
        'translate_id' => 'string',
        'number'       => 'integer',
        'juz'          => 'integer',
    ];

    public function surah()
    {
        return $this->belongsTo(Surah::class);
    }

    public function getRows()
    {
        $records = Reader::createFromPath(__DIR__ . '/../../resources/fixtures/ayah.csv', 'r')
            ->setHeaderOffset(0)
            ->getRecords();

        return collect($records)
            ->values()
            ->toArray();
    }
}
