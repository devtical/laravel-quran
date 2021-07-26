# Laravel Quran

بِسْمِ ٱللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ

Laravel Quran is static Eloquent model for Quran.

The Quran has never changed and never will, because Allah protecting it. ```(15:9) إِنَّا نَحۡنُ نَزَّلۡنَا ٱلذِّكۡرَ وَإِنَّا لَهُۥ لَحَـٰفِظُونَ```. All data is fetched from the [API](https://alquran.cloud/api). Changes only occur in translation and transliteration.

## Installation

Via Composer

``` bash
$ composer require wearedevtical/laravel-quran
```

## Usage

Find surah by ID

```php
$surah = Surah::find(36);
```

```bash
[
  "id" => 36
  "title" => "سُورَةُ يسٓ"
  "transliteration" => "Yaseen"
]
```

Get all ayah(s) from surah

```php
$surah->ayahs;
```

```bash
[
  0 => array:7 [
    "id" => 3706
    "surah_id" => "36"
    "content" => "بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ يسٓ"
    "translate_en" => "O THOU human being!"
    "translate_id" => "Yaa siin"
    "number" => "1"
    "juz" => "22"
  ]
  1 => array:7 [
    "id" => 3707
    "surah_id" => "36"
    "content" => "وَٱلْقُرْءَانِ ٱلْحَكِيمِ"
    "translate_en" => "Consider this Qur’an full of wisdom:"
    "translate_id" => "Demi Al Quran yang penuh hikmah,"
    "number" => "2"
    "juz" => "22"
  ]
  ...
]
```

Find ayah by ID

```php
$ayah  = Ayah::find(3787);
```

```bash
[
  "id" => 3787
  "surah_id" => "36"
  "content" => "إِنَّمَآ أَمْرُهُۥٓ إِذَآ أَرَادَ شَيْـًٔا أَن يَقُولَ لَهُۥ كُن فَيَكُونُ"
  "translate_en" => "His Being alone is such that when He wills a thing to be, He but says unto it, “Be” — and it is."
  "translate_id" => "Sesungguhnya keadaan-Nya apabila Dia menghendaki sesuatu hanyalah berkata kepadanya: "Jadilah!" maka terjadilah ia."
  "number" => "82"
  "juz" => "23"
]
```

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email author instead of using the issue tracker.

## Credits

- [Wahyu Kristianto](https://github.com/kristories)
- [Meezaan-ud-Din Abdu Dhil-Jalali Wal-Ikram](https://github.com/meezaan)
- [All Contributors](https://github.com/wearedevtical/laravel-quran/graphs/contributors)

## License

The MIT License (MIT). Please see the [license file](LICENSE.md) for more information.
