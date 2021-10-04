# Statamic Widget: Cache Controller

![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)

This widget lets you empty all of Statamic's caches right from the control panel dashboard.

## Requirements

- Statamic v3

## Installation

From your site folder, run `composer require webographen/statamic-widget-cache-controller` - or install it via the control panel.

## Usage

To add the widget to your control panel dashboard, edit the config under `config/statamic/cp.php` and add the following entry to the `widgets` array:

```php
[
    'type' => 'cache_controller',
    'width' => 50,
],
```

## About Us

[Webographen](https://en.webographen.de/) is a digital design studio focusing on Statamic. We make websites that are not just pretty, but scale in terms of design and technology.