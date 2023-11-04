# Vibrant

A collection of placeholder photo APIs in one convenient PHP package

`composer require renmichaela/vibrant`

### Usage

```php
use Vibrant\Random;
use Vibrant\Formatters\StringFormat;
use Vibrant\Formatters\HtmlFormat;
use Vibrant\Formatters\ResponseFormat;

// ...

Random::{method}()->format(new StringFormat); # https://[apisource]
Random::{method}()->format(new HtmlFormat); # <img src="https://[apisource]" alt="Random [Class]" />
Random::{method}()->format(new ResponseFormat); # Sets headers and echos image content
```

| Method | Source | Parameters |
|--------|--------|------------|
| `bacon()`  | https://baconmockup.com | `width=300`, `height=200` |
| `bear()` | https://placebear.com | `width=300`, `height=200` |
| `cat()` | https://cataas.com | none |
| `coffee()` | https://coffee.alexflipnote.dev | none |
| `dog()` | https://dog.ceo/dog-api | none |
| `duck()` | https://random-d.uk/api | none |
| `fox()` | https://randomfox.ca/floof | none |
