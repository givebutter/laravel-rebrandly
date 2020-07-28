
#Laravel Rebrandly
Laravel Rebrandly is a package around the rebrandly API using Laravel's facade system, and allows your app to quickly create, update, or delete custom shortlinks.

## Installation
To get started, install the `givebutter/laravel-rebrandly` package:

```
composer require givebutter/laravel-rebrandly
```

## Usage

Add the `REBRANDLY_API_KEY` variable in your `.env` file. 

By default, the package will generate short links based on rebrandly's default domain, `rebrand.ly`. To modify this default, add the `REBRANDLY_DOMAIN` variable in your `.env` file. 

Next, add the `Rebrandly` facade to the top of your file.

```php
use Rebrandly;

// ...

Rebrandly::links()->create(['destination' => 'https://google.com'])
```
> Note: The Rebrandly facade will return, in JSON format, the Rebrandly API response. 

### Links

>Note: Provided below are examples from Rebrandly docs, all link parameters are passed in. Reference [Rebrandly API docs](https://developers.rebrandly.com/docs/) for more detailed information.

  
***Create*** - `Rebrandly::links()->create([ key => value ])` 

| Key | Description | Constraints |
|--|--|--|
| `"destination"`  | The destination URL you want your branded short link to point to | Required |
| `"slashtag"`  | The keyword portion of your branded short link. If not specified, will be autogenerated. | Optional |
| `"title"`  | A title you assign to the branded short link in order to remember what's behind it. | Optional |
| `"description"`  | A title you assign to the branded short link in order to remember what's behind it. | Optional |
| `"domain" => ["fullName" => "example.net"], `  | A reference to the branded domain resource for this branded short link. `fullName` specifies domain short link. Uses default if not specified. | Optional |

  
***Update*** - `Rebrandly::links()->update(id, [ key => value ])`
| Key | Description | Constraints |
|--|--|--|
| `"destination"`  | The destination URL you want your branded short link to point to | Required |
| `"title"`  | A title you assign to the branded short link in order to remember what's behind it. | Required |
| `"description"`  | A title you assign to the branded short link in order to remember what's behind it. | Optional |

  
***Delete*** - `Rebrandly::links()->delete(option)`
 Option | Description | Constraints |
|--|--|--|
| `id`  | Delete specific short link id | Required |

  
***Get*** - `Rebrandly::links()->get(option)`
| Option | Description | Constraints |
|--|--|--|
| `id`  | Get specific short link object (in JSON) | Optional |
| `null`  | Get all short link objects (in JSON) | Optional |
