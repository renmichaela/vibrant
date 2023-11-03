# Vibrant

A collection of placeholder photo APIs in one convenient PHP package

`composer require renmichaela/vibrant`

### Usage

```php
use RenMichaela\Vibrant\Random;

// ...

Random::{method}()->asString(); # https://[apisource]
Random::{method}()->asHtml(); # <img src="https://[apisource]" alt="Random [Class]" />
Random::{method}()->asResponse(); # Sets headers and echos image content
```

| Method | Source | Parameters |
|--------|--------|------------|
| `bacon()`  | https://baconmockup.com | `width=300`, `height=200` |
| `bear()` | https://placebear.com | `width=300`, `height=200` |
| `cat()` | https://cataas.com | none |
| `coffee()` | https://coffee.alexflipnote.dev | none |
| `dog()` | https://dog.ceo/dog-api | none |
| `duck()` | https://random-d.uk/api | none |
