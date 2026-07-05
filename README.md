# proto-gen-php

Generated PHP bindings (classic [grpc/grpc](https://github.com/grpc/grpc)
stubs) for the [altessa-s/proto](https://github.com/altessa-s/proto) schema.

This repository is auto-generated. Do not edit its files by hand — they are
regenerated from [`altessa-s/proto`](https://github.com/altessa-s/proto) and
pushed automatically on every push to `main` / `develop` and every `vX.Y.Z`
tag. The only hand-maintained file is this `README.md`.

For RoadRunner-flavored stubs, see
[`altessa-s/proto-gen-php-rr`](https://github.com/altessa-s/proto-gen-php-rr).

## Installation

Composer, VCS-based:

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
- `grpc/grpc` (`^1.57`)
- `google/protobuf` (`^3.25 || ^4.0`)
- `google/common-protos` (`^4.0`)

## Packages

Classes are PSR-4 autoloaded under the `Io\Altessa\` prefix. gRPC client stubs
end in `*Client.php` and extend `Grpc\BaseStub`.

| Proto package | PHP namespace | Description |
|---|---|---|
| `io.altessa.badrequest.v1` | `Io\Altessa\Badrequest\V1` | `BadRequest` / `FieldViolation` error-detail payload for a `google.rpc.Status` with `INVALID_ARGUMENT`. |
| `io.altessa.serviceinfo.v1` | `Io\Altessa\Serviceinfo\V1` | `ServiceInfo` runtime metadata plus the `ServiceInfoService.GetServiceInfo` introspection RPC. |
| `io.altessa.type.v1` | `Io\Altessa\Type\V1` | General-purpose, domain-neutral value types (`Contact`, `DatePeriod`, `FileRef`, …) reused across services. |

## Usage

```php
use Io\Altessa\Serviceinfo\V1\ServiceInfo;

$info = new ServiceInfo();
$info->setServiceName('billing-api');
$info->setFullVersion('1.4.2+build.873');
```

The gRPC client stub for `ServiceInfoService` is
`Io\Altessa\Serviceinfo\V1\ServiceInfoServiceClient`, whose single
`GetServiceInfo(GetServiceInfoRequest)` method returns a
`GetServiceInfoResponse`.

## Versioning

Versions track [`altessa-s/proto`](https://github.com/altessa-s/proto): a
`vX.Y.Z` tag on the schema repo produces the same release here, and the
`main` / `develop` branches follow the matching schema branches.

## Contributing

This repository contains generated output only. To change what appears here,
edit the schemas or generation config in
[`altessa-s/proto`](https://github.com/altessa-s/proto); the next sync
regenerates and republishes these bindings.

## License

MIT — see [LICENSE](LICENSE).
