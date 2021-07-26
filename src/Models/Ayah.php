<?php

namespace Devtical\Quran\Models;

use Illuminate\Database\Eloquent\Model;
use League\Csv\Reader;
use Sushi\Sushi;

class Ayah extends Model
{
    use Sushi;

    /**
     * Setup schema for columns.
     */
    protected $schema = [
        'id'           => 'integer',
        'surah_id'     => 'integer',
        'content'      => 'string',
        'translate_en' => 'string',
        'translate_id' => 'string',
        'number'       => 'integer',
        'juz'          => 'integer',
    ];

    /**
     * A surah belong to ayah.
     *
     * @return \Devtical\Quran\Models\Surah
     */
    public function surah()
    {
        return $this->belongsTo(Surah::class);
    }

    /**
     * Process data via CSV.
     *
     * @return array
     */
    public function getRows()
    {
        $records = Reader::createFromPath(__DIR__.'/../../resources/fixtures/ayah.csv', 'r')
            ->setHeaderOffset(0)
            ->getRecords();

        return collect($records)
            ->values()
            ->toArray();
    }
}
