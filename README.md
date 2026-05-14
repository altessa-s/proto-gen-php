# proto-gen-php

Generated PHP bindings (classic [grpc/grpc](https://github.com/grpc/grpc)
stubs) for the shared protobuf schemas defined in
[`altessa-s/proto`](https://github.com/altessa-s/proto). Do not edit
files in this repository by hand — they are regenerated and pushed
automatically on every push to `main` / `develop` and every `vX.Y.Z` tag.

For RoadRunner-flavored stubs, see
[`altessa-s/proto-gen-php-rr`](https://github.com/altessa-s/proto-gen-php-rr).

## Install (Composer, VCS-based)

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/altessa-s/proto-gen-php"
        }
    ],
    "require": {
        "altessa-s/proto-gen-php": "^0.1"
    }
}
```

Runtime prerequisites:

- PHP 8.1+
- [`ext-grpc`](https://pecl.php.net/package/gRPC) (PECL extension)
- `grpc/grpc` PHP package
- `google/protobuf` PHP package

## Namespaces

| Proto package | PHP namespace |
|---------------|---------------|
| `io.altessa.badrequest.v1` | `Io\Altessa\Badrequest\V1` |
| `io.altessa.serviceinfo.v1` | `Io\Altessa\Serviceinfo\V1` |

gRPC client stubs end in `*Client.php` and extend `Grpc\BaseStub`.

## License

MIT — see [LICENSE](LICENSE).
