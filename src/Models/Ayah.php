<?php

namespace Devtical\Quran\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Ayah extends Model
{
    use Sushi;

    /**
     * Setup schema for columns.
     */
    protected $schema = [
        'id' => 'integer',
        'number' => 'integer',
        'section' => 'string',
        'content' => 'string',
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
        $json = __DIR__ . '/../../resources/fixtures/_original/source.json';
        $records = json_decode(file_get_contents($json), true);

        return collect($records)
            ->map(function ($item, $key) {
                $surah_id = $key + 1;

                return collect($item['verses'])
                    ->map(function ($item, $key) use ($surah_id) {
                        return [
                            'surah_id' => (int)$surah_id,
                            'number' => (int)$item + 1,
                            'section' => $item['section'],
                            'content' => $item['content'],
                        ];
                    });
            })
            ->values()
            ->flatten(1)
            ->toArray();
    }
}
