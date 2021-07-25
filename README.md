# Laravel Quran

بِسْمِ ٱللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ

Laravel Quran is static Eloquent model for Quran.

The Qur'an has never changed and never will, because Allah protecting it. ```(15:9) إِنَّا نَحۡنُ نَزَّلۡنَا ٱلذِّكۡرَ وَإِنَّا لَهُۥ لَحَـٰفِظُونَ```. All data is fetched from the [API](https://alquran.cloud/api). Changes only occur in translation and transliteration.

## Installation

Via Composer

``` bash
$ composer require wearedevtical/laravel-quran
```

## Usage

```php
$surah = Surah::find(36);  // This will return ayah 36
$surah->ayahs;             // This will return entire ayah of surah 36

$ayah  = Ayah::find(3787); // This will return surah 3787
$ayah->surah;              // This will return ayah 36
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

[ico-version]: https://img.shields.io/packagist/v/devtical/quran.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/devtical/quran.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/devtical/quran/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/devtical/quran
[link-downloads]: https://packagist.org/packages/devtical/quran
[link-travis]: https://travis-ci.org/devtical/quran
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/devtical
[link-contributors]: ../../contributors
