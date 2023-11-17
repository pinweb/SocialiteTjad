## Installation

```bash
composer require pinweb/socialite-tjad
```

## Add provider event listener

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    // ...
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        'SocialiteProviders\\Tjad\\TjadExtendSocialite@handle',
    ],
];
```

## Configuration

Add configuration to `config/services.php`

```php
'tjad' => [
    'client_id' => env('CLIENT_ID'),
    'client_secret' => env('CLIENT_SECRET'),
    'redirect' => env('REDIRECT'),
    'passport_url' => env('PASSPORT_URL')
],
```

## Usage

```php
return Socialite::driver('tjad')->redirect();
```
