# Custom Meta Boxes MU-Loader

Loads [HM Custom Meta Boxes](https://github.com/humanmade/Custom-Meta-Boxes) as a must-use plugin.

## Installation

Example of a `composer.json` for a site:

```json
{
  "name": "wearerequired/something",
  "description": "required.com",
  "license": "GPL-2.0+",
  "authors": [
    {
      "name": "required gmbh",
      "email": "info@required.ch"
    }
  ],
  "require": {
    "php": ">=5.6",
    "koodimonni/composer-dropin-installer": "dev-master",
    "johnpbloch/wordpress": "~4.7",
    "humanmade/custom-meta-boxes": "dev-develop",
    "wearerequired/custom-meta-boxes-mu-loader": "dev-master"
  },
  "repositories": [
    {
      "type": "git",
      "url": "git@github.com:wearerequired/custom-meta-boxes-mu-loader.git"
    },
    {
      "type": "package",
      "package": {
        "name": "humanmade/custom-meta-boxes",
        "type": "wordpress-plugin",
        "version": "dev-develop",
        "source": {
          "type": "git",
          "url": "git@github.com:humanmade/Custom-Meta-Boxes.git",
          "reference": "develop"
        }
      }
    }
  ],
  "extra": {
    "installer-paths": {
      "wordpress/content/plugins/{$name}/": [
        "type:wordpress-plugin"
      ],
      "wordpress/content/themes/{$name}/": [
        "type:wordpress-theme"
      ]
    },
    "dropin-paths": {
      "wordpress/content/mu-plugins/": [
        "type:wordpress-muplugin"
      ]
    },
    "wordpress-install-dir": "wordpress/wp"
  },
  "minimum-stability": "dev",
  "prefer-stable": true
}
```