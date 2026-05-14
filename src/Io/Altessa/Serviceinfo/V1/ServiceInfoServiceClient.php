<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2026 Altessa Solutions Inc. All rights reserved.
// Use of this source code is governed by license that can be found in
// the LICENSE file.
//
namespace Io\Altessa\Serviceinfo\V1;

/**
 * Provides runtime information about the service instance.
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
     * Retrieves service metadata including version and build information.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Altessa\Serviceinfo\V1\ServiceInfo>
     */
    public function Get(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.altessa.serviceinfo.v1.ServiceInfoService/Get',
        $argument,
        ['\Io\Altessa\Serviceinfo\V1\ServiceInfo', 'decode'],
        $metadata, $options);
    }

}
