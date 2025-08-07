# Filament Rating Column 🌟

A custom column type for [Filament](https://filamentphp.com/) tables that displays a visual star rating.

## Features ✨

- Display up to 5 star ratings in Filament tables
- RTL (Right-to-Left) language support
- Clean and responsive design

## Installation 📦

You can install the package via Composer:

```bash
composer require amirnafarie/filament-rating-column
```

## Usage 🚀

In your Filament table definition, use the `RatingColumn`:

```php
use AmirNafarie\FilamentRatingColumn\Columns\RatingColumn;

// Inside your table's `getColumns()` method
RatingColumn::make('rating')
```

## Compatibility 🔧

- PHP: 8.1+
- Laravel: 10+
- Filament: 3.x

## RTL Support 🌍

This column fully supports RTL layouts. When used in RTL themes or languages (like Persian or Arabic), the stars will align correctly from right to left.

## License 📄

The MIT License (MIT). See the License File for more information.

---

Made with ❤️ by [amirnafarie](https://github.com/amirnafarie)
