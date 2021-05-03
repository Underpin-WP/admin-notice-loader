# Underpin Admin Notice Loader

Loader That assists with adding admin notices to a WordPress website.

## Installation

### Using Composer

`composer require underpin/admin-notice-loader`

### Manually

This plugin uses a built-in autoloader, so as long as it is required _before_
Underpin, it should work as-expected.

`require_once(__DIR__ . '/underpin-admin-notices/admin-notices.php');`

## Setup

1. Install Underpin. See [Underpin Docs](https://www.github.com/underpin-wp/underpin)
1. Register new admin notices as-needed.

## Example

A very basic example could look something like this. This example would always display a notice on the settings page.

```php
\Underpin\underpin()->admin_notices()->add( 'example-notice', [
	'class' => 'Underpin_Admin_Notices\Factories\Admin_Notice_Instance',
	'args'  => [
		[
			'name'                    => 'Example notice',
			'description'             => 'This notice displays all the time.',
			'type'                    => 'notice',
			'is_dismissible'          => false,
			'wrapper_classes'         => ['class-1','class-2'],
			'id'                      => 'example-notice',
			'message'                 => 'This will display all the time.',
			'should_display_callback' => '__return_true',
		],
	],
] );

```

Alternatively, you can extend `Admin_Notice` and reference the extended class directly, like so:

```php
underpin()->admin_notices()->add('key','Namespace\To\Class');
```