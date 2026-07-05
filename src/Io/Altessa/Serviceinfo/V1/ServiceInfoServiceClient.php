<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2026 Altessa Solutions Inc. All rights reserved.
// Use of this source code is governed by license that can be found in
// the LICENSE file.
//
namespace Io\Altessa\Serviceinfo\V1;

/**
 * Provides runtime information about the service instance. Implementations
 * MUST treat `GetServiceInfo` as idempotent and side-effect-free; it is safe to call
 * from health probes and load balancers, and safe to expose via gRPC
 * reflection.
 *
 * Registration order matters in some setups: register
 * `ServiceInfoService` before gRPC reflection so reflection-based
 * tooling (grpcurl, Postman, evans) can discover the method without an
 * extra `.proto` import.
 */
class ServiceInfoServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the current `ServiceInfo` snapshot for the instance handling
     * the call. Cheap — implementations SHOULD compute the response from
     * cached values and only re-evaluate time-shaped fields (`uptime`,
     * leadership state) on demand.
     * @param \Io\Altessa\Serviceinfo\V1\GetServiceInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetServiceInfo(\Io\Altessa\Serviceinfo\V1\GetServiceInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.altessa.serviceinfo.v1.ServiceInfoService/GetServiceInfo',
        $argument,
        ['\Io\Altessa\Serviceinfo\V1\GetServiceInfoResponse', 'decode'],
        $metadata, $options);
    }

}
