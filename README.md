# Custom Meta Boxes MU-Loader

Loads [HM Custom Meta Boxes](https://github.com/humanmade/Custom-Meta-Boxes) as a must-use plugin.

## Installation

The package type is `wordpress-muplugin`. Example of a `composer.json`:

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
		"php": ">=5.3",
		"koodimonni/composer-dropin-installer": "dev-master",
		"johnpbloch/wordpress": "~4.9",
		"humanmade/custom-meta-boxes": "dev-develop",
		"wearerequired/custom-meta-boxes-mu-loader": "^1.0"
	},
	"repositories": [
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
		"wordpress-install-dir": "wordpress/wp",
		"installer-paths": {
			"wordpress/content/plugins/{$name}/": [
				"type:wordpress-plugin"
			],
			"vendor/{$vendor}/{$name}/": [
				"type:wordpress-muplugin"
			],
			"wordpress/content/themes/{$name}/": [
				"type:wordpress-theme"
			]
		},
		"dropin-paths": {
			"wordpress/content/mu-plugins/": [
				"type:wordpress-muplugin"
			]
		}
	},
	"minimum-stability": "dev",
	"prefer-stable": true
}
```

## Why?

`wp-content/mu-plugins` is designed to only support plugins in a single file. HM Custom Meta Boxes has clearly more than one file.
It also helps to keep the wp-content directory of your project as clean as possible. It should actually be empty because you're loading everything through composer. 😉
