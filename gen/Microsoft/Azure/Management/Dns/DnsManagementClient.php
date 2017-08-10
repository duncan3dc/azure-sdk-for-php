<?php
namespace Microsoft\Azure\Management\Dns;
final class DnsManagementClient
{
    /**
     * @param \Microsoft\Rest\RunTimeInterface $_runTime
     * @param string $subscriptionId
     */
    public function __construct(
        \Microsoft\Rest\RunTimeInterface $_runTime,
        $subscriptionId
    )
    {
        $_client = $_runTime->createClientFromData(
            self::_SWAGGER_OBJECT_DATA,
            ['subscriptionId' => $subscriptionId]
        );
        $this->_RecordSets_group = new \Microsoft\Azure\Management\Dns\RecordSets($_client);
        $this->_Zones_group = new \Microsoft\Azure\Management\Dns\Zones($_client);
    }
    /**
     * @return \Microsoft\Azure\Management\Dns\RecordSets
     */
    public function getRecordSets()
    {
        return $this->_RecordSets_group;
    }
    /**
     * @return \Microsoft\Azure\Management\Dns\Zones
     */
    public function getZones()
    {
        return $this->_Zones_group;
    }
    /**
     * @var \Microsoft\Azure\Management\Dns\RecordSets
     */
    private $_RecordSets_group;
    /**
     * @var \Microsoft\Azure\Management\Dns\Zones
     */
    private $_Zones_group;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'management.azure.com',
        'paths' => [
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/dnsZones/{zoneName}/{recordType}/{relativeRecordSetName}' => [
                'patch' => [
                    'operationId' => 'RecordSets_Update',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'zoneName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'relativeRecordSetName',
                            'in' => 'path',
                            'required' => TRUE,
                            'x-ms-skip-url-encoding' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'recordType',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => [
                                'A',
                                'AAAA',
                                'CNAME',
                                'MX',
                                'NS',
                                'PTR',
                                'SOA',
                                'SRV',
                                'TXT'
                            ]
                        ],
                        [
                            'name' => 'parameters',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/RecordSet']
                        ],
                        [
                            'name' => 'If-Match',
                            'in' => 'header',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-04-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/RecordSet']]]
                ],
                'put' => [
                    'operationId' => 'RecordSets_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'zoneName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'relativeRecordSetName',
                            'in' => 'path',
                            'required' => TRUE,
                            'x-ms-skip-url-encoding' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'recordType',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => [
                                'A',
                                'AAAA',
                                'CNAME',
                                'MX',
                                'NS',
                                'PTR',
                                'SOA',
                                'SRV',
                                'TXT'
                            ]
                        ],
                        [
                            'name' => 'parameters',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/RecordSet']
                        ],
                        [
                            'name' => 'If-Match',
                            'in' => 'header',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'If-None-Match',
                            'in' => 'header',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-04-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '201' => ['schema' => ['$ref' => '#/definitions/RecordSet']],
                        '200' => ['schema' => ['$ref' => '#/definitions/RecordSet']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'RecordSets_Delete',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'zoneName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'relativeRecordSetName',
                            'in' => 'path',
                            'required' => TRUE,
                            'x-ms-skip-url-encoding' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'recordType',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => [
                                'A',
                                'AAAA',
                                'CNAME',
                                'MX',
                                'NS',
                                'PTR',
                                'SOA',
                                'SRV',
                                'TXT'
                            ]
                        ],
                        [
                            'name' => 'If-Match',
                            'in' => 'header',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-04-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '204' => [],
                        '200' => []
                    ]
                ],
                'get' => [
                    'operationId' => 'RecordSets_Get',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'zoneName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'relativeRecordSetName',
                            'in' => 'path',
                            'required' => TRUE,
                            'x-ms-skip-url-encoding' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'recordType',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => [
                                'A',
                                'AAAA',
                                'CNAME',
                                'MX',
                                'NS',
                                'PTR',
                                'SOA',
                                'SRV',
                                'TXT'
                            ]
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-04-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/RecordSet']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/dnsZones/{zoneName}/{recordType}' => ['get' => [
                'operationId' => 'RecordSets_ListByType',
                'parameters' => [
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'zoneName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'recordType',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => [
                            'A',
                            'AAAA',
                            'CNAME',
                            'MX',
                            'NS',
                            'PTR',
                            'SOA',
                            'SRV',
                            'TXT'
                        ]
                    ],
                    [
                        'name' => '$top',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => '$recordsetnamesuffix',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-04-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/RecordSetListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/dnsZones/{zoneName}/recordsets' => ['get' => [
                'operationId' => 'RecordSets_ListByDnsZone',
                'parameters' => [
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'zoneName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$top',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => '$recordsetnamesuffix',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-04-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/RecordSetListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/dnsZones/{zoneName}' => [
                'put' => [
                    'operationId' => 'Zones_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'zoneName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'parameters',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/Zone']
                        ],
                        [
                            'name' => 'If-Match',
                            'in' => 'header',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'If-None-Match',
                            'in' => 'header',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-04-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Zone']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Zone']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Zones_Delete',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'zoneName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'If-Match',
                            'in' => 'header',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-04-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '204' => [],
                        '202' => [],
                        '200' => ['schema' => ['$ref' => '#/definitions/ZoneDeleteResult']]
                    ]
                ],
                'get' => [
                    'operationId' => 'Zones_Get',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'zoneName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-04-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Zone']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/dnsZones' => ['get' => [
                'operationId' => 'Zones_ListByResourceGroup',
                'parameters' => [
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$top',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-04-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ZoneListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/providers/Microsoft.Network/dnszones' => ['get' => [
                'operationId' => 'Zones_List',
                'parameters' => [
                    [
                        'name' => '$top',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-04-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ZoneListResult']]]
            ]]
        ],
        'definitions' => [
            'ARecord' => [
                'properties' => ['ipv4Address' => ['type' => 'string']],
                'required' => []
            ],
            'AaaaRecord' => [
                'properties' => ['ipv6Address' => ['type' => 'string']],
                'required' => []
            ],
            'MxRecord' => [
                'properties' => [
                    'preference' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'exchange' => ['type' => 'string']
                ],
                'required' => []
            ],
            'NsRecord' => [
                'properties' => ['nsdname' => ['type' => 'string']],
                'required' => []
            ],
            'PtrRecord' => [
                'properties' => ['ptrdname' => ['type' => 'string']],
                'required' => []
            ],
            'SrvRecord' => [
                'properties' => [
                    'priority' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'weight' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'target' => ['type' => 'string']
                ],
                'required' => []
            ],
            'TxtRecord' => [
                'properties' => ['value' => [
                    'type' => 'array',
                    'items' => ['type' => 'string']
                ]],
                'required' => []
            ],
            'CnameRecord' => [
                'properties' => ['cname' => ['type' => 'string']],
                'required' => []
            ],
            'SoaRecord' => [
                'properties' => [
                    'host' => ['type' => 'string'],
                    'email' => ['type' => 'string'],
                    'serialNumber' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'refreshTime' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'retryTime' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'expireTime' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'minimumTTL' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ]
                ],
                'required' => []
            ],
            'RecordSetProperties' => [
                'properties' => [
                    'metadata' => [
                        'type' => 'object',
                        'additionalProperties' => ['type' => 'string']
                    ],
                    'TTL' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'ARecords' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ARecord']
                    ],
                    'AAAARecords' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/AaaaRecord']
                    ],
                    'MXRecords' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/MxRecord']
                    ],
                    'NSRecords' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/NsRecord']
                    ],
                    'PTRRecords' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/PtrRecord']
                    ],
                    'SRVRecords' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/SrvRecord']
                    ],
                    'TXTRecords' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/TxtRecord']
                    ],
                    'CNAMERecord' => ['$ref' => '#/definitions/CnameRecord'],
                    'SOARecord' => ['$ref' => '#/definitions/SoaRecord']
                ],
                'required' => []
            ],
            'RecordSet' => [
                'properties' => [
                    'id' => ['type' => 'string'],
                    'name' => ['type' => 'string'],
                    'type' => ['type' => 'string'],
                    'etag' => ['type' => 'string'],
                    'properties' => ['$ref' => '#/definitions/RecordSetProperties']
                ],
                'required' => []
            ],
            'RecordSetUpdateParameters' => [
                'properties' => ['RecordSet' => ['$ref' => '#/definitions/RecordSet']],
                'required' => []
            ],
            'RecordSetListResult' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/RecordSet']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ZoneProperties' => [
                'properties' => [
                    'maxNumberOfRecordSets' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'numberOfRecordSets' => [
                        'type' => 'integer',
                        'format' => 'int64'
                    ],
                    'nameServers' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ]
                ],
                'required' => []
            ],
            'Zone' => [
                'properties' => [
                    'etag' => ['type' => 'string'],
                    'properties' => ['$ref' => '#/definitions/ZoneProperties']
                ],
                'required' => []
            ],
            'ZoneDeleteResult' => [
                'properties' => [
                    'azureAsyncOperation' => ['type' => 'string'],
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'InProgress',
                            'Succeeded',
                            'Failed'
                        ]
                    ],
                    'statusCode' => [
                        'type' => 'string',
                        'enum' => [
                            'Continue',
                            'SwitchingProtocols',
                            'OK',
                            'Created',
                            'Accepted',
                            'NonAuthoritativeInformation',
                            'NoContent',
                            'ResetContent',
                            'PartialContent',
                            'MultipleChoices',
                            'Ambiguous',
                            'MovedPermanently',
                            'Moved',
                            'Found',
                            'Redirect',
                            'SeeOther',
                            'RedirectMethod',
                            'NotModified',
                            'UseProxy',
                            'Unused',
                            'TemporaryRedirect',
                            'RedirectKeepVerb',
                            'BadRequest',
                            'Unauthorized',
                            'PaymentRequired',
                            'Forbidden',
                            'NotFound',
                            'MethodNotAllowed',
                            'NotAcceptable',
                            'ProxyAuthenticationRequired',
                            'RequestTimeout',
                            'Conflict',
                            'Gone',
                            'LengthRequired',
                            'PreconditionFailed',
                            'RequestEntityTooLarge',
                            'RequestUriTooLong',
                            'UnsupportedMediaType',
                            'RequestedRangeNotSatisfiable',
                            'ExpectationFailed',
                            'UpgradeRequired',
                            'InternalServerError',
                            'NotImplemented',
                            'BadGateway',
                            'ServiceUnavailable',
                            'GatewayTimeout',
                            'HttpVersionNotSupported'
                        ]
                    ],
                    'requestId' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ZoneListResult' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Zone']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'Resource' => [
                'properties' => [
                    'id' => ['type' => 'string'],
                    'name' => ['type' => 'string'],
                    'type' => ['type' => 'string'],
                    'location' => ['type' => 'string'],
                    'tags' => [
                        'type' => 'object',
                        'additionalProperties' => ['type' => 'string']
                    ]
                ],
                'required' => ['location']
            ],
            'SubResource' => [
                'properties' => ['id' => ['type' => 'string']],
                'required' => []
            ],
            'CloudErrorBody' => [
                'properties' => [
                    'code' => ['type' => 'string'],
                    'message' => ['type' => 'string'],
                    'target' => ['type' => 'string'],
                    'details' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/CloudErrorBody']
                    ]
                ],
                'required' => []
            ],
            'CloudError' => [
                'properties' => ['error' => ['$ref' => '#/definitions/CloudErrorBody']],
                'required' => []
            ]
        ]
    ];
}
