
# Laravel Rebrandly

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

  \
***Create*** - `Rebrandly::links()->create([ key => value ])` 

| Key | Description | Constraints |
|--|--|--|
| `"destination"`  | The destination URL you want your branded short link to point to | Required |
| `"slashtag"`  | The keyword portion of your branded short link. If not specified, will be autogenerated. | Optional |
| `"title"`  | A title you assign to the branded short link in order to remember what's behind it. | Optional |
| `"description"`  | A title you assign to the branded short link in order to remember what's behind it. | Optional |
| `"domain" => ["fullName" => "example.net"], `  | A reference to the branded domain resource for this branded short link. `fullName` specifies domain short link. Uses default if not specified. | Optional |

  \
***Update*** - `Rebrandly::links()->update($id, [ key => value ])`
| Key | Description | Constraints |
|--|--|--|
| `"destination"`  | The destination URL you want your branded short link to point to | Required |
| `"title"`  | A title you assign to the branded short link in order to remember what's behind it. | Required |
| `"description"`  | A title you assign to the branded short link in order to remember what's behind it. | Optional |

  \
***Get*** - `Rebrandly::links()->get(option)`
| Option | Description | Constraints |
|--|--|--|
| `null`  | Get all short link objects (in JSON) | Optional |
| `id`  | Get specific short link object (in JSON) | Optional |


  \
***Count*** - `Rebrandly::links()->count([ key => value ])`
| Key | Description | Constraints |
|--|--|--|
| `null`  | Count all links | Optional |
| `"favourite"`  | Filter branded short links depending on the favorite (loved) property) | Optional |
| `"domain" => ["id" => 1]`  | Filter branded short links which refer to a specific branded domain id | Optional |

  \
***List*** - `Rebrandly::links()->list([ key => value ])`
| Key | Description | Constraints |
|--|--|--|
| `null`  | List all links | Optional |
| `"orderBy"`  | Sorting criteria to apply to your branded short links collection | Optional |
| `"orderDir"`  | Sorting direction to apply to your branded short links collection | Optional |

  \
***Attach Tag*** - `Rebrandly::links()->attachTag($linkId, $tagId)`

  \
***Detach Tag*** - `Rebrandly::links()->detachTag($linkId, $tagId)`

  \
***Delete*** - `Rebrandly::links()->delete(option)`
 Option | Description | Constraints |
|--|--|--|
| `id`  | Delete specific short link id | Required |

### Domains
>Note: Provided below are common examples from Rebrandly docs. Reference [Rebrandly API docs](https://developers.rebrandly.com/docs/) for more detailed information.

  \
***Get*** - `Rebrandly::domains()->get(option)`
| Option | Description | Constraints |
|--|--|--|
| `null`  | Get all domain objects (in JSON) | Optional |
| `id`  | Get specific domain object (in JSON) | Optional |


  \
***Count*** - `Rebrandly::domains()->count([ key => value ])`
| Key | Description | Constraints |
|--|--|--|
| `null`  | Count all domains | Optional |
| `"active"`  | Filter branded domains depending on whether they can be used to branded short links or not | Optional |
| `"type"`  | Filter branded domains depending on their type (own by user or service domains like rebrand.ly) | Optional |

  \
***List*** - `Rebrandly::domains()->list([ key => value ])`
| Key | Description | Constraints |
|--|--|--|
| `null`  | List all links | Optional |
| `"orderBy"`  | Sorting criteria to apply to your branded domains collection | Optional |
| `"orderDir"`  | Sorting direction to apply to your branded domains collection | Optional |

### Tags
>Note: Provided below are common examples from Rebrandly docs. Reference [Rebrandly API docs](https://developers.rebrandly.com/docs/) for more detailed information.

  \
***Create*** - `Rebrandly::tags()->create([ key => value ])` 

| Key | Description | Constraints |
|--|--|--|
| `"name"`  | Unique name of the tag | Required |
| `"color"`  | Hexadecimal representation of a color assigned to the tag | Optional |

  \
***Update*** - `Rebrandly::tags()->update($id, [ key => value ])`
| Key | Description | Constraints |
|--|--|--|
| `"name"`  | Unique name of the tag | Required |
| `"color"`  | Hexadecimal representation of a color assigned to the tag | Required |

  \
***Get*** - `Rebrandly::tags()->get(option)`
| Option | Description | Constraints |
|--|--|--|
| `null`  | Get all tag objects (in JSON) | Optional |
| `id`  | Get specific tag object (in JSON) | Optional |


  \
***Count*** - `Rebrandly::tags()->count()`

  \
***List*** - `Rebrandly::tags()->list([ key => value ])`
| Key | Description | Constraints |
|--|--|--|
| `null`  | List all links | Optional |
| `"orderBy"`  | Sorting criteria to apply to your tags collection | Optional |
| `"orderDir"`  | Sorting direction to apply to your tags collection | Optional |
