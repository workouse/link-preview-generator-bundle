<h1 align="center">Welcome to link-preview-generator-bundle 👋</h1>
<p>
  <a href="https://twitter.com/workousecom" target="_blank">
    <img alt="Twitter: workouse" src="https://img.shields.io/twitter/follow/workousecom.svg?style=social" />
  </a>
</p>

## Install

```sh
composer require workouse/link-preview-generator-bundle
```
Add dependencies to your `config/bundles.php` file:
```php
return [
    ...

    Workouse\LinkPreviewGeneratorBundle\LinkPreviewGeneratorBundle::class => ['all' => true],
];
```

## Usage

```twig
{{ content|generate_previews|raw }}
```
