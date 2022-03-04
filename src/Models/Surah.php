<?php

namespace Devtical\Quran\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Surah extends Model
{
    use Sushi;

    /**
     * Setup schema for columns.
     */
    protected $schema = [
        'id' => 'integer',
        'name' => 'string',
        'transliteration' => 'string',
    ];

    /**
     * A surah has many ayah(s).
     *
     * @return \Devtical\Quran\Models\Ayah
     */
    public function ayahs()
    {
        return $this->hasMany(Ayah::class);
    }

    /**
     * Process data via CSV.
     *
     * @return array
     */
    public function getRows()
    {
        $json = __DIR__ . '/../../resources/fixtures/_original/source.json';
        $records = json_decode(file_get_contents($json), true);

        return collect($records)
            ->map(function ($item, $key) {
                return [
                    'name' => $item['name'],
                    'transliteration' => $item['transliteration'],
                ];
            })
            ->values()
            ->toArray();
    }
}
