# Bricks Builder Stubs

Stub declarations for [Bricks Builder](https://bricksbuilder.io/) core
functions, classes and interfaces. These stubs help plugin and theme developers
leverage static analysis tools like
[PHPStan](https://github.com/phpstan/phpstan) and improve IDE autocompletion.

The stubs are generated from the `bricks` theme folder using
[php-stubs/generator](https://github.com/php-stubs/generator).

> This package is **not affiliated with or endorsed by** Bricks Builder. It
> contains only function and class signatures plus docblocks — no
> implementation. Bricks Builder is a commercial product; you must own a valid
> license to use it.

## Requirements

- PHP ^8.0

## Installation

Require this package as a development dependency with
[Composer](https://getcomposer.org):

```bash
composer require --dev webshr/bricks-builder-stubs
```

Alternatively download `bricks-builder-stubs.php` directly.

## Versioning

Tags mirror the upstream Bricks Builder version they were generated from
(e.g. tag `2.3.3` ↔ Bricks 2.3.3). Pin to the version that matches your
installed Bricks release.

## PHPStan

Reference the stub file from `phpstan.neon`:

```neon
parameters:
  scanFiles:
    - vendor/webshr/bricks-stubs/bricks-builder-stubs.php
```

If you also use WordPress, combine with
[`szepeviktor/phpstan-wordpress`](https://github.com/szepeviktor/phpstan-wordpress)
which already pulls in `php-stubs/wordpress-stubs`.

## Regenerating the stubs

The `bricks/` source theme is not redistributed in this repository (it is
commercial code). To regenerate after a Bricks release:

1. Place an extracted Bricks theme into `bricks/` at the repo root.
2. Run:

   ```bash
   composer install
   composer generate
   ```

3. Update `CHANGELOG.md` and tag the new version (matching the Bricks version).

## License

[MIT](LICENSE) for the stub generation tooling and the regenerated stub file.
The original Bricks Builder source remains the property of its authors.
