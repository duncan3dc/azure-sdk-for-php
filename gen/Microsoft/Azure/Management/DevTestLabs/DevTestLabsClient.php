<?php
namespace Microsoft\Azure\Management\DevTestLabs;
final class DevTestLabsClient
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
        $this->_Labs_group = new \Microsoft\Azure\Management\DevTestLabs\Labs($_client);
        $this->_GlobalSchedules_group = new \Microsoft\Azure\Management\DevTestLabs\GlobalSchedules($_client);
        $this->_ArtifactSources_group = new \Microsoft\Azure\Management\DevTestLabs\ArtifactSources($_client);
        $this->_ArmTemplates_group = new \Microsoft\Azure\Management\DevTestLabs\ArmTemplates($_client);
        $this->_Artifacts_group = new \Microsoft\Azure\Management\DevTestLabs\Artifacts($_client);
        $this->_Costs_group = new \Microsoft\Azure\Management\DevTestLabs\Costs($_client);
        $this->_CustomImages_group = new \Microsoft\Azure\Management\DevTestLabs\CustomImages($_client);
        $this->_Formulas_group = new \Microsoft\Azure\Management\DevTestLabs\Formulas($_client);
        $this->_GalleryImages_group = new \Microsoft\Azure\Management\DevTestLabs\GalleryImages($_client);
        $this->_NotificationChannels_group = new \Microsoft\Azure\Management\DevTestLabs\NotificationChannels($_client);
        $this->_PolicySets_group = new \Microsoft\Azure\Management\DevTestLabs\PolicySets($_client);
        $this->_Policies_group = new \Microsoft\Azure\Management\DevTestLabs\Policies($_client);
        $this->_Schedules_group = new \Microsoft\Azure\Management\DevTestLabs\Schedules($_client);
        $this->_ServiceRunners_group = new \Microsoft\Azure\Management\DevTestLabs\ServiceRunners($_client);
        $this->_Users_group = new \Microsoft\Azure\Management\DevTestLabs\Users($_client);
        $this->_Disks_group = new \Microsoft\Azure\Management\DevTestLabs\Disks($_client);
        $this->_Environments_group = new \Microsoft\Azure\Management\DevTestLabs\Environments($_client);
        $this->_Secrets_group = new \Microsoft\Azure\Management\DevTestLabs\Secrets($_client);
        $this->_VirtualMachines_group = new \Microsoft\Azure\Management\DevTestLabs\VirtualMachines($_client);
        $this->_VirtualMachineSchedules_group = new \Microsoft\Azure\Management\DevTestLabs\VirtualMachineSchedules($_client);
        $this->_VirtualNetworks_group = new \Microsoft\Azure\Management\DevTestLabs\VirtualNetworks($_client);
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Labs
     */
    public function getLabs()
    {
        return $this->_Labs_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\GlobalSchedules
     */
    public function getGlobalSchedules()
    {
        return $this->_GlobalSchedules_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\ArtifactSources
     */
    public function getArtifactSources()
    {
        return $this->_ArtifactSources_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\ArmTemplates
     */
    public function getArmTemplates()
    {
        return $this->_ArmTemplates_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Artifacts
     */
    public function getArtifacts()
    {
        return $this->_Artifacts_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Costs
     */
    public function getCosts()
    {
        return $this->_Costs_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\CustomImages
     */
    public function getCustomImages()
    {
        return $this->_CustomImages_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Formulas
     */
    public function getFormulas()
    {
        return $this->_Formulas_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\GalleryImages
     */
    public function getGalleryImages()
    {
        return $this->_GalleryImages_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\NotificationChannels
     */
    public function getNotificationChannels()
    {
        return $this->_NotificationChannels_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\PolicySets
     */
    public function getPolicySets()
    {
        return $this->_PolicySets_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Policies
     */
    public function getPolicies()
    {
        return $this->_Policies_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Schedules
     */
    public function getSchedules()
    {
        return $this->_Schedules_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\ServiceRunners
     */
    public function getServiceRunners()
    {
        return $this->_ServiceRunners_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Users
     */
    public function getUsers()
    {
        return $this->_Users_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Disks
     */
    public function getDisks()
    {
        return $this->_Disks_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Environments
     */
    public function getEnvironments()
    {
        return $this->_Environments_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\Secrets
     */
    public function getSecrets()
    {
        return $this->_Secrets_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\VirtualMachines
     */
    public function getVirtualMachines()
    {
        return $this->_VirtualMachines_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\VirtualMachineSchedules
     */
    public function getVirtualMachineSchedules()
    {
        return $this->_VirtualMachineSchedules_group;
    }
    /**
     * @return \Microsoft\Azure\Management\DevTestLabs\VirtualNetworks
     */
    public function getVirtualNetworks()
    {
        return $this->_VirtualNetworks_group;
    }
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Labs
     */
    private $_Labs_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\GlobalSchedules
     */
    private $_GlobalSchedules_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\ArtifactSources
     */
    private $_ArtifactSources_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\ArmTemplates
     */
    private $_ArmTemplates_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Artifacts
     */
    private $_Artifacts_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Costs
     */
    private $_Costs_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\CustomImages
     */
    private $_CustomImages_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Formulas
     */
    private $_Formulas_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\GalleryImages
     */
    private $_GalleryImages_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\NotificationChannels
     */
    private $_NotificationChannels_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\PolicySets
     */
    private $_PolicySets_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Policies
     */
    private $_Policies_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Schedules
     */
    private $_Schedules_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\ServiceRunners
     */
    private $_ServiceRunners_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Users
     */
    private $_Users_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Disks
     */
    private $_Disks_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Environments
     */
    private $_Environments_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\Secrets
     */
    private $_Secrets_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\VirtualMachines
     */
    private $_VirtualMachines_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\VirtualMachineSchedules
     */
    private $_VirtualMachineSchedules_group;
    /**
     * @var \Microsoft\Azure\Management\DevTestLabs\VirtualNetworks
     */
    private $_VirtualNetworks_group;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'management.azure.com',
        'paths' => [
            '/subscriptions/{subscriptionId}/providers/Microsoft.DevTestLab/labs' => ['get' => [
                'operationId' => 'Labs_ListBySubscription',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Lab]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs' => ['get' => [
                'operationId' => 'Labs_ListByResourceGroup',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Lab]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{name}' => [
                'get' => [
                    'operationId' => 'Labs_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Lab']]]
                ],
                'put' => [
                    'operationId' => 'Labs_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'lab',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/Lab']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Lab']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Lab']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Labs_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '202' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'Labs_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'lab',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/LabFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Lab']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{name}/claimAnyVm' => ['post' => [
                'operationId' => 'Labs_ClaimAnyVm',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{name}/createEnvironment' => ['post' => [
                'operationId' => 'Labs_CreateEnvironment',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labVirtualMachineCreationParameter',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/LabVirtualMachineCreationParameter']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{name}/exportResourceUsage' => ['post' => [
                'operationId' => 'Labs_ExportResourceUsage',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'exportResourceUsageParameters',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/ExportResourceUsageParameters']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{name}/generateUploadUri' => ['post' => [
                'operationId' => 'Labs_GenerateUploadUri',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'generateUploadUriParameter',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/GenerateUploadUriParameter']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/GenerateUploadUriResponse']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{name}/listVhds' => ['post' => [
                'operationId' => 'Labs_ListVhds',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[LabVhd]']]]
            ]],
            '/subscriptions/{subscriptionId}/providers/Microsoft.DevTestLab/schedules' => ['get' => [
                'operationId' => 'GlobalSchedules_ListBySubscription',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Schedule]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/schedules' => ['get' => [
                'operationId' => 'GlobalSchedules_ListByResourceGroup',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Schedule]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/schedules/{name}' => [
                'get' => [
                    'operationId' => 'GlobalSchedules_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Schedule']]]
                ],
                'put' => [
                    'operationId' => 'GlobalSchedules_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'schedule',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/Schedule']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Schedule']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Schedule']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'GlobalSchedules_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'GlobalSchedules_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'schedule',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/ScheduleFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Schedule']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/schedules/{name}/execute' => ['post' => [
                'operationId' => 'GlobalSchedules_Execute',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/schedules/{name}/retarget' => ['post' => [
                'operationId' => 'GlobalSchedules_Retarget',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'retargetScheduleProperties',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/RetargetScheduleProperties']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/artifactsources' => ['get' => [
                'operationId' => 'ArtifactSources_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[ArtifactSource]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/artifactsources/{name}' => [
                'get' => [
                    'operationId' => 'ArtifactSources_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ArtifactSource']]]
                ],
                'put' => [
                    'operationId' => 'ArtifactSources_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'artifactSource',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/ArtifactSource']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/ArtifactSource']],
                        '201' => ['schema' => ['$ref' => '#/definitions/ArtifactSource']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'ArtifactSources_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'ArtifactSources_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'artifactSource',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/ArtifactSourceFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ArtifactSource']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/artifactsources/{artifactSourceName}/armtemplates' => ['get' => [
                'operationId' => 'ArmTemplates_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'artifactSourceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[ArmTemplate]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/artifactsources/{artifactSourceName}/armtemplates/{name}' => ['get' => [
                'operationId' => 'ArmTemplates_Get',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'artifactSourceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ArmTemplate']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/artifactsources/{artifactSourceName}/artifacts' => ['get' => [
                'operationId' => 'Artifacts_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'artifactSourceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Artifact]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/artifactsources/{artifactSourceName}/artifacts/{name}' => ['get' => [
                'operationId' => 'Artifacts_Get',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'artifactSourceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Artifact']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/artifactsources/{artifactSourceName}/artifacts/{name}/generateArmTemplate' => ['post' => [
                'operationId' => 'Artifacts_GenerateArmTemplate',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'artifactSourceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'generateArmTemplateRequest',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/GenerateArmTemplateRequest']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ArmTemplateInfo']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/costs/{name}' => [
                'get' => [
                    'operationId' => 'Costs_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/LabCost']]]
                ],
                'put' => [
                    'operationId' => 'Costs_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labCost',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/LabCost']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/LabCost']],
                        '201' => ['schema' => ['$ref' => '#/definitions/LabCost']]
                    ]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/customimages' => ['get' => [
                'operationId' => 'CustomImages_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[CustomImage]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/customimages/{name}' => [
                'get' => [
                    'operationId' => 'CustomImages_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/CustomImage']]]
                ],
                'put' => [
                    'operationId' => 'CustomImages_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'customImage',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/CustomImage']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/CustomImage']],
                        '201' => ['schema' => ['$ref' => '#/definitions/CustomImage']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'CustomImages_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '202' => [],
                        '204' => []
                    ]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/formulas' => ['get' => [
                'operationId' => 'Formulas_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Formula]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/formulas/{name}' => [
                'get' => [
                    'operationId' => 'Formulas_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Formula']]]
                ],
                'put' => [
                    'operationId' => 'Formulas_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'formula',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/Formula']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Formula']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Formula']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Formulas_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/galleryimages' => ['get' => [
                'operationId' => 'GalleryImages_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[GalleryImage]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/notificationchannels' => ['get' => [
                'operationId' => 'NotificationChannels_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[NotificationChannel]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/notificationchannels/{name}' => [
                'get' => [
                    'operationId' => 'NotificationChannels_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/NotificationChannel']]]
                ],
                'put' => [
                    'operationId' => 'NotificationChannels_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'notificationChannel',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/NotificationChannel']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/NotificationChannel']],
                        '201' => ['schema' => ['$ref' => '#/definitions/NotificationChannel']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'NotificationChannels_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'NotificationChannels_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'notificationChannel',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/NotificationChannelFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/NotificationChannel']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/notificationchannels/{name}/notify' => ['post' => [
                'operationId' => 'NotificationChannels_Notify',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'notifyParameters',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/NotifyParameters']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => []]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/policysets/{name}/evaluatePolicies' => ['post' => [
                'operationId' => 'PolicySets_EvaluatePolicies',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'evaluatePoliciesRequest',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/EvaluatePoliciesRequest']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/EvaluatePoliciesResponse']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/policysets/{policySetName}/policies' => ['get' => [
                'operationId' => 'Policies_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'policySetName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Policy]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/policysets/{policySetName}/policies/{name}' => [
                'get' => [
                    'operationId' => 'Policies_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'policySetName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Policy']]]
                ],
                'put' => [
                    'operationId' => 'Policies_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'policySetName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'policy',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/Policy']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Policy']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Policy']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Policies_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'policySetName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'Policies_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'policySetName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'policy',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/PolicyFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Policy']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/schedules' => ['get' => [
                'operationId' => 'Schedules_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Schedule]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/schedules/{name}' => [
                'get' => [
                    'operationId' => 'Schedules_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Schedule']]]
                ],
                'put' => [
                    'operationId' => 'Schedules_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'schedule',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/Schedule']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Schedule']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Schedule']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Schedules_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'Schedules_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'schedule',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/ScheduleFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Schedule']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/schedules/{name}/execute' => ['post' => [
                'operationId' => 'Schedules_Execute',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/schedules/{name}/listApplicable' => ['post' => [
                'operationId' => 'Schedules_ListApplicable',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Schedule]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/servicerunners' => ['get' => [
                'operationId' => 'ServiceRunners_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[ServiceRunner]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/servicerunners/{name}' => [
                'get' => [
                    'operationId' => 'ServiceRunners_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ServiceRunner']]]
                ],
                'put' => [
                    'operationId' => 'ServiceRunners_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'serviceRunner',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/ServiceRunner']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/ServiceRunner']],
                        '201' => ['schema' => ['$ref' => '#/definitions/ServiceRunner']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'ServiceRunners_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users' => ['get' => [
                'operationId' => 'Users_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[User]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users/{name}' => [
                'get' => [
                    'operationId' => 'Users_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/User']]]
                ],
                'put' => [
                    'operationId' => 'Users_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'user',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/User']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/User']],
                        '201' => ['schema' => ['$ref' => '#/definitions/User']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Users_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '202' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'Users_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'user',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/UserFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/User']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users/{userName}/disks' => ['get' => [
                'operationId' => 'Disks_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'userName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Disk]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users/{userName}/disks/{name}' => [
                'get' => [
                    'operationId' => 'Disks_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'userName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Disk']]]
                ],
                'put' => [
                    'operationId' => 'Disks_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'userName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'disk',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/Disk']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Disk']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Disk']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Disks_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'userName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '202' => [],
                        '204' => []
                    ]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users/{userName}/disks/{name}/attach' => ['post' => [
                'operationId' => 'Disks_Attach',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'userName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'attachDiskProperties',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/AttachDiskProperties']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users/{userName}/disks/{name}/detach' => ['post' => [
                'operationId' => 'Disks_Detach',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'userName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'detachDiskProperties',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/DetachDiskProperties']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users/{userName}/environments' => ['get' => [
                'operationId' => 'Environments_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'userName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[DtlEnvironment]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users/{userName}/environments/{name}' => [
                'get' => [
                    'operationId' => 'Environments_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'userName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/DtlEnvironment']]]
                ],
                'put' => [
                    'operationId' => 'Environments_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'userName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'dtlEnvironment',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/DtlEnvironment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/DtlEnvironment']],
                        '201' => ['schema' => ['$ref' => '#/definitions/DtlEnvironment']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Environments_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'userName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '202' => [],
                        '204' => []
                    ]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users/{userName}/secrets' => ['get' => [
                'operationId' => 'Secrets_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'userName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Secret]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/users/{userName}/secrets/{name}' => [
                'get' => [
                    'operationId' => 'Secrets_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'userName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Secret']]]
                ],
                'put' => [
                    'operationId' => 'Secrets_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'userName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'secret',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/Secret']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Secret']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Secret']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Secrets_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'userName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines' => ['get' => [
                'operationId' => 'VirtualMachines_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[LabVirtualMachine]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{name}' => [
                'get' => [
                    'operationId' => 'VirtualMachines_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/LabVirtualMachine']]]
                ],
                'put' => [
                    'operationId' => 'VirtualMachines_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labVirtualMachine',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/LabVirtualMachine']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/LabVirtualMachine']],
                        '201' => ['schema' => ['$ref' => '#/definitions/LabVirtualMachine']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'VirtualMachines_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '202' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'VirtualMachines_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labVirtualMachine',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/LabVirtualMachineFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/LabVirtualMachine']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{name}/addDataDisk' => ['post' => [
                'operationId' => 'VirtualMachines_AddDataDisk',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'dataDiskProperties',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/DataDiskProperties']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{name}/applyArtifacts' => ['post' => [
                'operationId' => 'VirtualMachines_ApplyArtifacts',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'applyArtifactsRequest',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/ApplyArtifactsRequest']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{name}/claim' => ['post' => [
                'operationId' => 'VirtualMachines_Claim',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{name}/detachDataDisk' => ['post' => [
                'operationId' => 'VirtualMachines_DetachDataDisk',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'detachDataDiskProperties',
                        'in' => 'body',
                        'required' => TRUE,
                        'schema' => ['$ref' => '#/definitions/DetachDataDiskProperties']
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{name}/listApplicableSchedules' => ['post' => [
                'operationId' => 'VirtualMachines_ListApplicableSchedules',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ApplicableSchedule']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{name}/start' => ['post' => [
                'operationId' => 'VirtualMachines_Start',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{name}/stop' => ['post' => [
                'operationId' => 'VirtualMachines_Stop',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{virtualMachineName}/schedules' => ['get' => [
                'operationId' => 'VirtualMachineSchedules_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'virtualMachineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[Schedule]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{virtualMachineName}/schedules/{name}' => [
                'get' => [
                    'operationId' => 'VirtualMachineSchedules_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'virtualMachineName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Schedule']]]
                ],
                'put' => [
                    'operationId' => 'VirtualMachineSchedules_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'virtualMachineName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'schedule',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/Schedule']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Schedule']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Schedule']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'VirtualMachineSchedules_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'virtualMachineName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'VirtualMachineSchedules_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'virtualMachineName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'schedule',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/ScheduleFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Schedule']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualmachines/{virtualMachineName}/schedules/{name}/execute' => ['post' => [
                'operationId' => 'VirtualMachineSchedules_Execute',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'virtualMachineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'name',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => [
                    '200' => [],
                    '202' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualnetworks' => ['get' => [
                'operationId' => 'VirtualNetworks_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'labName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$expand',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
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
                        'name' => '$orderby',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2016-05-15']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResponseWithContinuation[VirtualNetwork]']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.DevTestLab/labs/{labName}/virtualnetworks/{name}' => [
                'get' => [
                    'operationId' => 'VirtualNetworks_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => '$expand',
                            'in' => 'query',
                            'required' => FALSE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/VirtualNetwork']]]
                ],
                'put' => [
                    'operationId' => 'VirtualNetworks_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'virtualNetwork',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/VirtualNetwork']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/VirtualNetwork']],
                        '201' => ['schema' => ['$ref' => '#/definitions/VirtualNetwork']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'VirtualNetworks_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => [
                        '202' => [],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'VirtualNetworks_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'labName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'virtualNetwork',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/VirtualNetworkFragment']
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2016-05-15']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/VirtualNetwork']]]
                ]
            ]
        ],
        'definitions' => [
            'WeekDetails' => [
                'properties' => [
                    'weekdays' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ],
                    'time' => ['type' => 'string']
                ],
                'required' => []
            ],
            'DayDetails' => [
                'properties' => ['time' => ['type' => 'string']],
                'required' => []
            ],
            'HourDetails' => [
                'properties' => ['minute' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'required' => []
            ],
            'NotificationSettings' => [
                'properties' => [
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'Disabled',
                            'Enabled'
                        ]
                    ],
                    'timeInMinutes' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'webhookUrl' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ScheduleProperties' => [
                'properties' => [
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'Enabled',
                            'Disabled'
                        ]
                    ],
                    'taskType' => ['type' => 'string'],
                    'weeklyRecurrence' => ['$ref' => '#/definitions/WeekDetails'],
                    'dailyRecurrence' => ['$ref' => '#/definitions/DayDetails'],
                    'hourlyRecurrence' => ['$ref' => '#/definitions/HourDetails'],
                    'timeZoneId' => ['type' => 'string'],
                    'notificationSettings' => ['$ref' => '#/definitions/NotificationSettings'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'targetResourceId' => ['type' => 'string'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'Schedule' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/ScheduleProperties']],
                'required' => ['properties']
            ],
            'ApplicableScheduleProperties' => [
                'properties' => [
                    'labVmsShutdown' => ['$ref' => '#/definitions/Schedule'],
                    'labVmsStartup' => ['$ref' => '#/definitions/Schedule']
                ],
                'required' => []
            ],
            'ApplicableSchedule' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/ApplicableScheduleProperties']],
                'required' => ['properties']
            ],
            'WeekDetailsFragment' => [
                'properties' => [
                    'weekdays' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ],
                    'time' => ['type' => 'string']
                ],
                'required' => []
            ],
            'DayDetailsFragment' => [
                'properties' => ['time' => ['type' => 'string']],
                'required' => []
            ],
            'HourDetailsFragment' => [
                'properties' => ['minute' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'required' => []
            ],
            'NotificationSettingsFragment' => [
                'properties' => [
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'Disabled',
                            'Enabled'
                        ]
                    ],
                    'timeInMinutes' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'webhookUrl' => ['type' => 'string']
                ],
                'required' => []
            ],
            'SchedulePropertiesFragment' => [
                'properties' => [
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'Enabled',
                            'Disabled'
                        ]
                    ],
                    'taskType' => ['type' => 'string'],
                    'weeklyRecurrence' => ['$ref' => '#/definitions/WeekDetailsFragment'],
                    'dailyRecurrence' => ['$ref' => '#/definitions/DayDetailsFragment'],
                    'hourlyRecurrence' => ['$ref' => '#/definitions/HourDetailsFragment'],
                    'timeZoneId' => ['type' => 'string'],
                    'notificationSettings' => ['$ref' => '#/definitions/NotificationSettingsFragment'],
                    'targetResourceId' => ['type' => 'string'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ScheduleFragment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/SchedulePropertiesFragment']],
                'required' => []
            ],
            'ApplicableSchedulePropertiesFragment' => [
                'properties' => [
                    'labVmsShutdown' => ['$ref' => '#/definitions/ScheduleFragment'],
                    'labVmsStartup' => ['$ref' => '#/definitions/ScheduleFragment']
                ],
                'required' => []
            ],
            'ApplicableScheduleFragment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/ApplicableSchedulePropertiesFragment']],
                'required' => []
            ],
            'ArtifactParameterProperties' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'value' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ArtifactInstallProperties' => [
                'properties' => [
                    'artifactId' => ['type' => 'string'],
                    'parameters' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ArtifactParameterProperties']
                    ],
                    'status' => ['type' => 'string'],
                    'deploymentStatusMessage' => ['type' => 'string'],
                    'vmExtensionStatusMessage' => ['type' => 'string'],
                    'installTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'required' => []
            ],
            'ApplyArtifactsRequest' => [
                'properties' => ['artifacts' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/ArtifactInstallProperties']
                ]],
                'required' => []
            ],
            'ParametersValueFileInfo' => [
                'properties' => [
                    'fileName' => ['type' => 'string'],
                    'parametersValueInfo' => ['type' => 'object']
                ],
                'required' => []
            ],
            'ArmTemplateProperties' => [
                'properties' => [
                    'displayName' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'publisher' => ['type' => 'string'],
                    'icon' => ['type' => 'string'],
                    'contents' => ['type' => 'object'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'parametersValueFilesInfo' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ParametersValueFileInfo']
                    ]
                ],
                'required' => []
            ],
            'ArmTemplate' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/ArmTemplateProperties']],
                'required' => ['properties']
            ],
            'ArmTemplateInfo' => [
                'properties' => [
                    'template' => ['type' => 'object'],
                    'parameters' => ['type' => 'object']
                ],
                'required' => []
            ],
            'ArmTemplateParameterProperties' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'value' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ArtifactProperties' => [
                'properties' => [
                    'title' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'publisher' => ['type' => 'string'],
                    'filePath' => ['type' => 'string'],
                    'icon' => ['type' => 'string'],
                    'targetOsType' => ['type' => 'string'],
                    'parameters' => ['type' => 'object'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'required' => []
            ],
            'Artifact' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/ArtifactProperties']],
                'required' => ['properties']
            ],
            'ArtifactDeploymentStatusProperties' => [
                'properties' => [
                    'deploymentStatus' => ['type' => 'string'],
                    'artifactsApplied' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'totalArtifacts' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'required' => []
            ],
            'ArtifactDeploymentStatusPropertiesFragment' => [
                'properties' => [
                    'deploymentStatus' => ['type' => 'string'],
                    'artifactsApplied' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'totalArtifacts' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'required' => []
            ],
            'ArtifactParameterPropertiesFragment' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'value' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ArtifactInstallPropertiesFragment' => [
                'properties' => [
                    'artifactId' => ['type' => 'string'],
                    'parameters' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ArtifactParameterPropertiesFragment']
                    ],
                    'status' => ['type' => 'string'],
                    'deploymentStatusMessage' => ['type' => 'string'],
                    'vmExtensionStatusMessage' => ['type' => 'string'],
                    'installTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'required' => []
            ],
            'ArtifactSourceProperties' => [
                'properties' => [
                    'displayName' => ['type' => 'string'],
                    'uri' => ['type' => 'string'],
                    'sourceType' => [
                        'type' => 'string',
                        'enum' => [
                            'VsoGit',
                            'GitHub'
                        ]
                    ],
                    'folderPath' => ['type' => 'string'],
                    'armTemplateFolderPath' => ['type' => 'string'],
                    'branchRef' => ['type' => 'string'],
                    'securityToken' => ['type' => 'string'],
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'Enabled',
                            'Disabled'
                        ]
                    ],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ArtifactSource' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/ArtifactSourceProperties']],
                'required' => ['properties']
            ],
            'ArtifactSourcePropertiesFragment' => [
                'properties' => [
                    'displayName' => ['type' => 'string'],
                    'uri' => ['type' => 'string'],
                    'sourceType' => [
                        'type' => 'string',
                        'enum' => [
                            'VsoGit',
                            'GitHub'
                        ]
                    ],
                    'folderPath' => ['type' => 'string'],
                    'armTemplateFolderPath' => ['type' => 'string'],
                    'branchRef' => ['type' => 'string'],
                    'securityToken' => ['type' => 'string'],
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'Enabled',
                            'Disabled'
                        ]
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ArtifactSourceFragment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/ArtifactSourcePropertiesFragment']],
                'required' => []
            ],
            'AttachDiskProperties' => [
                'properties' => ['leasedByLabVmId' => ['type' => 'string']],
                'required' => []
            ],
            'AttachNewDataDiskOptions' => [
                'properties' => [
                    'diskSizeGiB' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'diskName' => ['type' => 'string'],
                    'diskType' => [
                        'type' => 'string',
                        'enum' => [
                            'Standard',
                            'Premium'
                        ]
                    ]
                ],
                'required' => []
            ],
            'BulkCreationParameters' => [
                'properties' => ['instanceCount' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
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
            ],
            'ComputeDataDisk' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'diskUri' => ['type' => 'string'],
                    'managedDiskId' => ['type' => 'string'],
                    'diskSizeGiB' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'required' => []
            ],
            'ComputeDataDiskFragment' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'diskUri' => ['type' => 'string'],
                    'managedDiskId' => ['type' => 'string'],
                    'diskSizeGiB' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'required' => []
            ],
            'ComputeVmInstanceViewStatus' => [
                'properties' => [
                    'code' => ['type' => 'string'],
                    'displayStatus' => ['type' => 'string'],
                    'message' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ComputeVmInstanceViewStatusFragment' => [
                'properties' => [
                    'code' => ['type' => 'string'],
                    'displayStatus' => ['type' => 'string'],
                    'message' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ComputeVmProperties' => [
                'properties' => [
                    'statuses' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ComputeVmInstanceViewStatus']
                    ],
                    'osType' => ['type' => 'string'],
                    'vmSize' => ['type' => 'string'],
                    'networkInterfaceId' => ['type' => 'string'],
                    'osDiskId' => ['type' => 'string'],
                    'dataDiskIds' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ],
                    'dataDisks' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ComputeDataDisk']
                    ]
                ],
                'required' => []
            ],
            'ComputeVmPropertiesFragment' => [
                'properties' => [
                    'statuses' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ComputeVmInstanceViewStatusFragment']
                    ],
                    'osType' => ['type' => 'string'],
                    'vmSize' => ['type' => 'string'],
                    'networkInterfaceId' => ['type' => 'string'],
                    'osDiskId' => ['type' => 'string'],
                    'dataDiskIds' => [
                        'type' => 'array',
                        'items' => ['type' => 'string']
                    ],
                    'dataDisks' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ComputeDataDiskFragment']
                    ]
                ],
                'required' => []
            ],
            'PercentageCostThresholdProperties' => [
                'properties' => ['thresholdValue' => [
                    'type' => 'number',
                    'format' => 'double'
                ]],
                'required' => []
            ],
            'CostThresholdProperties' => [
                'properties' => [
                    'thresholdId' => ['type' => 'string'],
                    'percentageThreshold' => ['$ref' => '#/definitions/PercentageCostThresholdProperties'],
                    'displayOnChart' => [
                        'type' => 'string',
                        'enum' => [
                            'Enabled',
                            'Disabled'
                        ]
                    ],
                    'sendNotificationWhenExceeded' => [
                        'type' => 'string',
                        'enum' => [
                            'Enabled',
                            'Disabled'
                        ]
                    ],
                    'NotificationSent' => ['type' => 'string']
                ],
                'required' => []
            ],
            'WindowsOsInfo' => [
                'properties' => ['windowsOsState' => [
                    'type' => 'string',
                    'enum' => [
                        'NonSysprepped',
                        'SysprepRequested',
                        'SysprepApplied'
                    ]
                ]],
                'required' => []
            ],
            'LinuxOsInfo' => [
                'properties' => ['linuxOsState' => [
                    'type' => 'string',
                    'enum' => [
                        'NonDeprovisioned',
                        'DeprovisionRequested',
                        'DeprovisionApplied'
                    ]
                ]],
                'required' => []
            ],
            'CustomImagePropertiesFromVm' => [
                'properties' => [
                    'sourceVmId' => ['type' => 'string'],
                    'windowsOsInfo' => ['$ref' => '#/definitions/WindowsOsInfo'],
                    'linuxOsInfo' => ['$ref' => '#/definitions/LinuxOsInfo']
                ],
                'required' => []
            ],
            'CustomImagePropertiesCustom' => [
                'properties' => [
                    'imageName' => ['type' => 'string'],
                    'sysPrep' => ['type' => 'boolean'],
                    'osType' => [
                        'type' => 'string',
                        'enum' => [
                            'Windows',
                            'Linux',
                            'None'
                        ]
                    ]
                ],
                'required' => ['osType']
            ],
            'CustomImageProperties' => [
                'properties' => [
                    'vm' => ['$ref' => '#/definitions/CustomImagePropertiesFromVm'],
                    'vhd' => ['$ref' => '#/definitions/CustomImagePropertiesCustom'],
                    'description' => ['type' => 'string'],
                    'author' => ['type' => 'string'],
                    'creationDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'managedImageId' => ['type' => 'string'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'CustomImage' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/CustomImageProperties']],
                'required' => ['properties']
            ],
            'DataDiskProperties' => [
                'properties' => [
                    'attachNewDataDiskOptions' => ['$ref' => '#/definitions/AttachNewDataDiskOptions'],
                    'existingLabDiskId' => ['type' => 'string'],
                    'hostCaching' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'ReadOnly',
                            'ReadWrite'
                        ]
                    ]
                ],
                'required' => []
            ],
            'DetachDataDiskProperties' => [
                'properties' => ['existingLabDiskId' => ['type' => 'string']],
                'required' => []
            ],
            'DetachDiskProperties' => [
                'properties' => ['leasedByLabVmId' => ['type' => 'string']],
                'required' => []
            ],
            'DiskProperties' => [
                'properties' => [
                    'diskType' => [
                        'type' => 'string',
                        'enum' => [
                            'Standard',
                            'Premium'
                        ]
                    ],
                    'diskSizeGiB' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'leasedByLabVmId' => ['type' => 'string'],
                    'diskBlobName' => ['type' => 'string'],
                    'diskUri' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'hostCaching' => ['type' => 'string'],
                    'managedDiskId' => ['type' => 'string'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'Disk' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/DiskProperties']],
                'required' => ['properties']
            ],
            'EnvironmentDeploymentProperties' => [
                'properties' => [
                    'armTemplateId' => ['type' => 'string'],
                    'parameters' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ArmTemplateParameterProperties']
                    ]
                ],
                'required' => []
            ],
            'EnvironmentProperties' => [
                'properties' => [
                    'deploymentProperties' => ['$ref' => '#/definitions/EnvironmentDeploymentProperties'],
                    'armTemplateDisplayName' => ['type' => 'string'],
                    'resourceGroupId' => ['type' => 'string'],
                    'createdByUser' => ['type' => 'string'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'DtlEnvironment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/EnvironmentProperties']],
                'required' => ['properties']
            ],
            'EvaluatePoliciesProperties' => [
                'properties' => [
                    'factName' => ['type' => 'string'],
                    'factData' => ['type' => 'string'],
                    'valueOffset' => ['type' => 'string']
                ],
                'required' => []
            ],
            'EvaluatePoliciesRequest' => [
                'properties' => ['policies' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/EvaluatePoliciesProperties']
                ]],
                'required' => []
            ],
            'PolicyViolation' => [
                'properties' => [
                    'code' => ['type' => 'string'],
                    'message' => ['type' => 'string']
                ],
                'required' => []
            ],
            'PolicySetResult' => [
                'properties' => [
                    'hasError' => ['type' => 'boolean'],
                    'policyViolations' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/PolicyViolation']
                    ]
                ],
                'required' => []
            ],
            'EvaluatePoliciesResponse' => [
                'properties' => ['results' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/PolicySetResult']
                ]],
                'required' => []
            ],
            'Event' => [
                'properties' => ['eventName' => [
                    'type' => 'string',
                    'enum' => [
                        'AutoShutdown',
                        'Cost'
                    ]
                ]],
                'required' => []
            ],
            'EventFragment' => [
                'properties' => ['eventName' => [
                    'type' => 'string',
                    'enum' => [
                        'AutoShutdown',
                        'Cost'
                    ]
                ]],
                'required' => []
            ],
            'ExportResourceUsageParameters' => [
                'properties' => [
                    'blobStorageAbsoluteSasUri' => ['type' => 'string'],
                    'usageStartDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'required' => []
            ],
            'ExternalSubnet' => [
                'properties' => [
                    'id' => ['type' => 'string'],
                    'name' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ExternalSubnetFragment' => [
                'properties' => [
                    'id' => ['type' => 'string'],
                    'name' => ['type' => 'string']
                ],
                'required' => []
            ],
            'GalleryImageReference' => [
                'properties' => [
                    'offer' => ['type' => 'string'],
                    'publisher' => ['type' => 'string'],
                    'sku' => ['type' => 'string'],
                    'osType' => ['type' => 'string'],
                    'version' => ['type' => 'string']
                ],
                'required' => []
            ],
            'InboundNatRule' => [
                'properties' => [
                    'transportProtocol' => [
                        'type' => 'string',
                        'enum' => [
                            'Tcp',
                            'Udp'
                        ]
                    ],
                    'frontendPort' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'backendPort' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'required' => []
            ],
            'SharedPublicIpAddressConfiguration' => [
                'properties' => ['inboundNatRules' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/InboundNatRule']
                ]],
                'required' => []
            ],
            'NetworkInterfaceProperties' => [
                'properties' => [
                    'virtualNetworkId' => ['type' => 'string'],
                    'subnetId' => ['type' => 'string'],
                    'publicIpAddressId' => ['type' => 'string'],
                    'publicIpAddress' => ['type' => 'string'],
                    'privateIpAddress' => ['type' => 'string'],
                    'dnsName' => ['type' => 'string'],
                    'rdpAuthority' => ['type' => 'string'],
                    'sshAuthority' => ['type' => 'string'],
                    'sharedPublicIpAddressConfiguration' => ['$ref' => '#/definitions/SharedPublicIpAddressConfiguration']
                ],
                'required' => []
            ],
            'LabVirtualMachineCreationParameterProperties' => [
                'properties' => [
                    'bulkCreationParameters' => ['$ref' => '#/definitions/BulkCreationParameters'],
                    'notes' => ['type' => 'string'],
                    'ownerObjectId' => ['type' => 'string'],
                    'ownerUserPrincipalName' => ['type' => 'string'],
                    'createdByUserId' => ['type' => 'string'],
                    'createdByUser' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'customImageId' => ['type' => 'string'],
                    'osType' => ['type' => 'string'],
                    'size' => ['type' => 'string'],
                    'userName' => ['type' => 'string'],
                    'password' => ['type' => 'string'],
                    'sshKey' => ['type' => 'string'],
                    'isAuthenticationWithSshKey' => ['type' => 'boolean'],
                    'fqdn' => ['type' => 'string'],
                    'labSubnetName' => ['type' => 'string'],
                    'labVirtualNetworkId' => ['type' => 'string'],
                    'disallowPublicIpAddress' => ['type' => 'boolean'],
                    'artifacts' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ArtifactInstallProperties']
                    ],
                    'artifactDeploymentStatus' => ['$ref' => '#/definitions/ArtifactDeploymentStatusProperties'],
                    'galleryImageReference' => ['$ref' => '#/definitions/GalleryImageReference'],
                    'computeVm' => ['$ref' => '#/definitions/ComputeVmProperties'],
                    'networkInterface' => ['$ref' => '#/definitions/NetworkInterfaceProperties'],
                    'applicableSchedule' => ['$ref' => '#/definitions/ApplicableSchedule'],
                    'expirationDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'allowClaim' => ['type' => 'boolean'],
                    'storageType' => ['type' => 'string'],
                    'virtualMachineCreationSource' => [
                        'type' => 'string',
                        'enum' => [
                            'FromCustomImage',
                            'FromGalleryImage'
                        ]
                    ],
                    'environmentId' => ['type' => 'string'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'LabVirtualMachineCreationParameter' => [
                'properties' => [
                    'properties' => ['$ref' => '#/definitions/LabVirtualMachineCreationParameterProperties'],
                    'name' => ['type' => 'string'],
                    'location' => ['type' => 'string'],
                    'tags' => [
                        'type' => 'object',
                        'additionalProperties' => ['type' => 'string']
                    ]
                ],
                'required' => []
            ],
            'FormulaPropertiesFromVm' => [
                'properties' => ['labVmId' => ['type' => 'string']],
                'required' => []
            ],
            'FormulaProperties' => [
                'properties' => [
                    'description' => ['type' => 'string'],
                    'author' => ['type' => 'string'],
                    'osType' => ['type' => 'string'],
                    'creationDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'formulaContent' => ['$ref' => '#/definitions/LabVirtualMachineCreationParameter'],
                    'vm' => ['$ref' => '#/definitions/FormulaPropertiesFromVm'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'Formula' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/FormulaProperties']],
                'required' => ['properties']
            ],
            'GalleryImageProperties' => [
                'properties' => [
                    'author' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'description' => ['type' => 'string'],
                    'imageReference' => ['$ref' => '#/definitions/GalleryImageReference'],
                    'icon' => ['type' => 'string'],
                    'enabled' => ['type' => 'boolean']
                ],
                'required' => []
            ],
            'GalleryImage' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/GalleryImageProperties']],
                'required' => ['properties']
            ],
            'GalleryImageReferenceFragment' => [
                'properties' => [
                    'offer' => ['type' => 'string'],
                    'publisher' => ['type' => 'string'],
                    'sku' => ['type' => 'string'],
                    'osType' => ['type' => 'string'],
                    'version' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ParameterInfo' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'value' => ['type' => 'string']
                ],
                'required' => []
            ],
            'GenerateArmTemplateRequest' => [
                'properties' => [
                    'virtualMachineName' => ['type' => 'string'],
                    'parameters' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ParameterInfo']
                    ],
                    'location' => ['type' => 'string'],
                    'fileUploadOptions' => [
                        'type' => 'string',
                        'enum' => [
                            'UploadFilesAndGenerateSasTokens',
                            'None'
                        ]
                    ]
                ],
                'required' => []
            ],
            'GenerateUploadUriParameter' => [
                'properties' => ['blobName' => ['type' => 'string']],
                'required' => []
            ],
            'GenerateUploadUriResponse' => [
                'properties' => ['uploadUri' => ['type' => 'string']],
                'required' => []
            ],
            'IdentityProperties' => [
                'properties' => [
                    'type' => ['type' => 'string'],
                    'principalId' => ['type' => 'string'],
                    'tenantId' => ['type' => 'string'],
                    'clientSecretUrl' => ['type' => 'string']
                ],
                'required' => []
            ],
            'InboundNatRuleFragment' => [
                'properties' => [
                    'transportProtocol' => [
                        'type' => 'string',
                        'enum' => [
                            'Tcp',
                            'Udp'
                        ]
                    ],
                    'frontendPort' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'backendPort' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'required' => []
            ],
            'LabProperties' => [
                'properties' => [
                    'defaultStorageAccount' => ['type' => 'string'],
                    'defaultPremiumStorageAccount' => ['type' => 'string'],
                    'artifactsStorageAccount' => ['type' => 'string'],
                    'premiumDataDiskStorageAccount' => ['type' => 'string'],
                    'vaultName' => ['type' => 'string'],
                    'labStorageType' => [
                        'type' => 'string',
                        'enum' => [
                            'Standard',
                            'Premium'
                        ]
                    ],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'premiumDataDisks' => [
                        'type' => 'string',
                        'enum' => [
                            'Disabled',
                            'Enabled'
                        ]
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'Lab' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/LabProperties']],
                'required' => []
            ],
            'TargetCostProperties' => [
                'properties' => [
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'Enabled',
                            'Disabled'
                        ]
                    ],
                    'target' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'costThresholds' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/CostThresholdProperties']
                    ],
                    'cycleStartDateTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'cycleEndDateTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'cycleType' => [
                        'type' => 'string',
                        'enum' => [
                            'CalendarMonth',
                            'Custom'
                        ]
                    ]
                ],
                'required' => []
            ],
            'LabCostSummaryProperties' => [
                'properties' => ['estimatedLabCost' => [
                    'type' => 'number',
                    'format' => 'double'
                ]],
                'required' => []
            ],
            'LabCostDetailsProperties' => [
                'properties' => [
                    'date' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'cost' => [
                        'type' => 'number',
                        'format' => 'double'
                    ],
                    'costType' => [
                        'type' => 'string',
                        'enum' => [
                            'Unavailable',
                            'Reported',
                            'Projected'
                        ]
                    ]
                ],
                'required' => []
            ],
            'LabResourceCostProperties' => [
                'properties' => [
                    'resourcename' => ['type' => 'string'],
                    'resourceUId' => ['type' => 'string'],
                    'resourceCost' => [
                        'type' => 'number',
                        'format' => 'double'
                    ],
                    'resourceType' => ['type' => 'string'],
                    'resourceOwner' => ['type' => 'string'],
                    'resourcePricingTier' => ['type' => 'string'],
                    'resourceStatus' => ['type' => 'string'],
                    'resourceId' => ['type' => 'string'],
                    'externalResourceId' => ['type' => 'string']
                ],
                'required' => []
            ],
            'LabCostProperties' => [
                'properties' => [
                    'targetCost' => ['$ref' => '#/definitions/TargetCostProperties'],
                    'labCostSummary' => ['$ref' => '#/definitions/LabCostSummaryProperties'],
                    'labCostDetails' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/LabCostDetailsProperties']
                    ],
                    'resourceCosts' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/LabResourceCostProperties']
                    ],
                    'currencyCode' => ['type' => 'string'],
                    'startDateTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'endDateTime' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'LabCost' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/LabCostProperties']],
                'required' => ['properties']
            ],
            'LabPropertiesFragment' => [
                'properties' => [
                    'labStorageType' => [
                        'type' => 'string',
                        'enum' => [
                            'Standard',
                            'Premium'
                        ]
                    ],
                    'premiumDataDisks' => [
                        'type' => 'string',
                        'enum' => [
                            'Disabled',
                            'Enabled'
                        ]
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'LabFragment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/LabPropertiesFragment']],
                'required' => []
            ],
            'LabVhd' => [
                'properties' => ['id' => ['type' => 'string']],
                'required' => []
            ],
            'LabVirtualMachineProperties' => [
                'properties' => [
                    'notes' => ['type' => 'string'],
                    'ownerObjectId' => ['type' => 'string'],
                    'ownerUserPrincipalName' => ['type' => 'string'],
                    'createdByUserId' => ['type' => 'string'],
                    'createdByUser' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'computeId' => ['type' => 'string'],
                    'customImageId' => ['type' => 'string'],
                    'osType' => ['type' => 'string'],
                    'size' => ['type' => 'string'],
                    'userName' => ['type' => 'string'],
                    'password' => ['type' => 'string'],
                    'sshKey' => ['type' => 'string'],
                    'isAuthenticationWithSshKey' => ['type' => 'boolean'],
                    'fqdn' => ['type' => 'string'],
                    'labSubnetName' => ['type' => 'string'],
                    'labVirtualNetworkId' => ['type' => 'string'],
                    'disallowPublicIpAddress' => ['type' => 'boolean'],
                    'artifacts' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ArtifactInstallProperties']
                    ],
                    'artifactDeploymentStatus' => ['$ref' => '#/definitions/ArtifactDeploymentStatusProperties'],
                    'galleryImageReference' => ['$ref' => '#/definitions/GalleryImageReference'],
                    'computeVm' => ['$ref' => '#/definitions/ComputeVmProperties'],
                    'networkInterface' => ['$ref' => '#/definitions/NetworkInterfaceProperties'],
                    'applicableSchedule' => ['$ref' => '#/definitions/ApplicableSchedule'],
                    'expirationDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'allowClaim' => ['type' => 'boolean'],
                    'storageType' => ['type' => 'string'],
                    'virtualMachineCreationSource' => [
                        'type' => 'string',
                        'enum' => [
                            'FromCustomImage',
                            'FromGalleryImage'
                        ]
                    ],
                    'environmentId' => ['type' => 'string'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'LabVirtualMachine' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/LabVirtualMachineProperties']],
                'required' => ['properties']
            ],
            'SharedPublicIpAddressConfigurationFragment' => [
                'properties' => ['inboundNatRules' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/InboundNatRuleFragment']
                ]],
                'required' => []
            ],
            'NetworkInterfacePropertiesFragment' => [
                'properties' => [
                    'virtualNetworkId' => ['type' => 'string'],
                    'subnetId' => ['type' => 'string'],
                    'publicIpAddressId' => ['type' => 'string'],
                    'publicIpAddress' => ['type' => 'string'],
                    'privateIpAddress' => ['type' => 'string'],
                    'dnsName' => ['type' => 'string'],
                    'rdpAuthority' => ['type' => 'string'],
                    'sshAuthority' => ['type' => 'string'],
                    'sharedPublicIpAddressConfiguration' => ['$ref' => '#/definitions/SharedPublicIpAddressConfigurationFragment']
                ],
                'required' => []
            ],
            'LabVirtualMachinePropertiesFragment' => [
                'properties' => [
                    'notes' => ['type' => 'string'],
                    'ownerObjectId' => ['type' => 'string'],
                    'ownerUserPrincipalName' => ['type' => 'string'],
                    'createdByUserId' => ['type' => 'string'],
                    'createdByUser' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'customImageId' => ['type' => 'string'],
                    'osType' => ['type' => 'string'],
                    'size' => ['type' => 'string'],
                    'userName' => ['type' => 'string'],
                    'password' => ['type' => 'string'],
                    'sshKey' => ['type' => 'string'],
                    'isAuthenticationWithSshKey' => ['type' => 'boolean'],
                    'fqdn' => ['type' => 'string'],
                    'labSubnetName' => ['type' => 'string'],
                    'labVirtualNetworkId' => ['type' => 'string'],
                    'disallowPublicIpAddress' => ['type' => 'boolean'],
                    'artifacts' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ArtifactInstallPropertiesFragment']
                    ],
                    'artifactDeploymentStatus' => ['$ref' => '#/definitions/ArtifactDeploymentStatusPropertiesFragment'],
                    'galleryImageReference' => ['$ref' => '#/definitions/GalleryImageReferenceFragment'],
                    'computeVm' => ['$ref' => '#/definitions/ComputeVmPropertiesFragment'],
                    'networkInterface' => ['$ref' => '#/definitions/NetworkInterfacePropertiesFragment'],
                    'applicableSchedule' => ['$ref' => '#/definitions/ApplicableScheduleFragment'],
                    'expirationDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'allowClaim' => ['type' => 'boolean'],
                    'storageType' => ['type' => 'string'],
                    'virtualMachineCreationSource' => [
                        'type' => 'string',
                        'enum' => [
                            'FromCustomImage',
                            'FromGalleryImage'
                        ]
                    ],
                    'environmentId' => ['type' => 'string'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'LabVirtualMachineFragment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/LabVirtualMachinePropertiesFragment']],
                'required' => []
            ],
            'NotificationChannelProperties' => [
                'properties' => [
                    'webHookUrl' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'events' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Event']
                    ],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'NotificationChannel' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/NotificationChannelProperties']],
                'required' => ['properties']
            ],
            'NotificationChannelPropertiesFragment' => [
                'properties' => [
                    'webHookUrl' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'events' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/EventFragment']
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'NotificationChannelFragment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/NotificationChannelPropertiesFragment']],
                'required' => []
            ],
            'NotifyParameters' => [
                'properties' => [
                    'eventName' => [
                        'type' => 'string',
                        'enum' => [
                            'AutoShutdown',
                            'Cost'
                        ]
                    ],
                    'jsonPayload' => ['type' => 'string']
                ],
                'required' => []
            ],
            'PolicyProperties' => [
                'properties' => [
                    'description' => ['type' => 'string'],
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'Enabled',
                            'Disabled'
                        ]
                    ],
                    'factName' => [
                        'type' => 'string',
                        'enum' => [
                            'UserOwnedLabVmCount',
                            'UserOwnedLabPremiumVmCount',
                            'LabVmCount',
                            'LabPremiumVmCount',
                            'LabVmSize',
                            'GalleryImage',
                            'UserOwnedLabVmCountInSubnet',
                            'LabTargetCost'
                        ]
                    ],
                    'factData' => ['type' => 'string'],
                    'threshold' => ['type' => 'string'],
                    'evaluatorType' => [
                        'type' => 'string',
                        'enum' => [
                            'AllowedValuesPolicy',
                            'MaxValuePolicy'
                        ]
                    ],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'Policy' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/PolicyProperties']],
                'required' => ['properties']
            ],
            'PolicyPropertiesFragment' => [
                'properties' => [
                    'description' => ['type' => 'string'],
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'Enabled',
                            'Disabled'
                        ]
                    ],
                    'factName' => [
                        'type' => 'string',
                        'enum' => [
                            'UserOwnedLabVmCount',
                            'UserOwnedLabPremiumVmCount',
                            'LabVmCount',
                            'LabPremiumVmCount',
                            'LabVmSize',
                            'GalleryImage',
                            'UserOwnedLabVmCountInSubnet',
                            'LabTargetCost'
                        ]
                    ],
                    'factData' => ['type' => 'string'],
                    'threshold' => ['type' => 'string'],
                    'evaluatorType' => [
                        'type' => 'string',
                        'enum' => [
                            'AllowedValuesPolicy',
                            'MaxValuePolicy'
                        ]
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'PolicyFragment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/PolicyPropertiesFragment']],
                'required' => []
            ],
            'Port' => [
                'properties' => [
                    'transportProtocol' => [
                        'type' => 'string',
                        'enum' => [
                            'Tcp',
                            'Udp'
                        ]
                    ],
                    'backendPort' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'required' => []
            ],
            'PortFragment' => [
                'properties' => [
                    'transportProtocol' => [
                        'type' => 'string',
                        'enum' => [
                            'Tcp',
                            'Udp'
                        ]
                    ],
                    'backendPort' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
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
                'required' => []
            ],
            'ResponseWithContinuation[ArmTemplate]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ArmTemplate']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[Artifact]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Artifact']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[ArtifactSource]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ArtifactSource']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[CustomImage]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/CustomImage']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[Disk]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Disk']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[DtlEnvironment]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/DtlEnvironment']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[Formula]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Formula']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[GalleryImage]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/GalleryImage']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[Lab]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Lab']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[LabVhd]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/LabVhd']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[LabVirtualMachine]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/LabVirtualMachine']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[NotificationChannel]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/NotificationChannel']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[Policy]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Policy']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ResponseWithContinuation[Schedule]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Schedule']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'SecretProperties' => [
                'properties' => [
                    'value' => ['type' => 'string'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'Secret' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/SecretProperties']],
                'required' => ['properties']
            ],
            'ResponseWithContinuation[Secret]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Secret']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ServiceRunner' => [
                'properties' => ['identity' => ['$ref' => '#/definitions/IdentityProperties']],
                'required' => []
            ],
            'ResponseWithContinuation[ServiceRunner]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ServiceRunner']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'UserIdentity' => [
                'properties' => [
                    'principalName' => ['type' => 'string'],
                    'principalId' => ['type' => 'string'],
                    'tenantId' => ['type' => 'string'],
                    'objectId' => ['type' => 'string'],
                    'appId' => ['type' => 'string']
                ],
                'required' => []
            ],
            'UserSecretStore' => [
                'properties' => [
                    'keyVaultUri' => ['type' => 'string'],
                    'keyVaultId' => ['type' => 'string']
                ],
                'required' => []
            ],
            'UserProperties' => [
                'properties' => [
                    'identity' => ['$ref' => '#/definitions/UserIdentity'],
                    'secretStore' => ['$ref' => '#/definitions/UserSecretStore'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'User' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/UserProperties']],
                'required' => []
            ],
            'ResponseWithContinuation[User]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/User']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'Subnet' => [
                'properties' => [
                    'resourceId' => ['type' => 'string'],
                    'labSubnetName' => ['type' => 'string'],
                    'allowPublicIp' => [
                        'type' => 'string',
                        'enum' => [
                            'Default',
                            'Deny',
                            'Allow'
                        ]
                    ]
                ],
                'required' => []
            ],
            'SubnetSharedPublicIpAddressConfiguration' => [
                'properties' => ['allowedPorts' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/Port']
                ]],
                'required' => []
            ],
            'SubnetOverride' => [
                'properties' => [
                    'resourceId' => ['type' => 'string'],
                    'labSubnetName' => ['type' => 'string'],
                    'useInVmCreationPermission' => [
                        'type' => 'string',
                        'enum' => [
                            'Default',
                            'Deny',
                            'Allow'
                        ]
                    ],
                    'usePublicIpAddressPermission' => [
                        'type' => 'string',
                        'enum' => [
                            'Default',
                            'Deny',
                            'Allow'
                        ]
                    ],
                    'sharedPublicIpAddressConfiguration' => ['$ref' => '#/definitions/SubnetSharedPublicIpAddressConfiguration'],
                    'virtualNetworkPoolName' => ['type' => 'string']
                ],
                'required' => []
            ],
            'VirtualNetworkProperties' => [
                'properties' => [
                    'allowedSubnets' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Subnet']
                    ],
                    'description' => ['type' => 'string'],
                    'externalProviderResourceId' => ['type' => 'string'],
                    'externalSubnets' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ExternalSubnet']
                    ],
                    'subnetOverrides' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/SubnetOverride']
                    ],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'VirtualNetwork' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/VirtualNetworkProperties']],
                'required' => []
            ],
            'ResponseWithContinuation[VirtualNetwork]' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/VirtualNetwork']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'required' => []
            ],
            'RetargetScheduleProperties' => [
                'properties' => [
                    'currentResourceId' => ['type' => 'string'],
                    'targetResourceId' => ['type' => 'string']
                ],
                'required' => []
            ],
            'ShutdownNotificationContent' => [
                'properties' => [
                    'skipUrl' => ['type' => 'string'],
                    'delayUrl60' => ['type' => 'string'],
                    'delayUrl120' => ['type' => 'string'],
                    'vmName' => ['type' => 'string'],
                    'guid' => ['type' => 'string'],
                    'owner' => ['type' => 'string'],
                    'eventType' => ['type' => 'string'],
                    'text' => ['type' => 'string'],
                    'subscriptionId' => ['type' => 'string'],
                    'resourceGroupName' => ['type' => 'string'],
                    'labName' => ['type' => 'string']
                ],
                'required' => []
            ],
            'SubnetFragment' => [
                'properties' => [
                    'resourceId' => ['type' => 'string'],
                    'labSubnetName' => ['type' => 'string'],
                    'allowPublicIp' => [
                        'type' => 'string',
                        'enum' => [
                            'Default',
                            'Deny',
                            'Allow'
                        ]
                    ]
                ],
                'required' => []
            ],
            'SubnetSharedPublicIpAddressConfigurationFragment' => [
                'properties' => ['allowedPorts' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/PortFragment']
                ]],
                'required' => []
            ],
            'SubnetOverrideFragment' => [
                'properties' => [
                    'resourceId' => ['type' => 'string'],
                    'labSubnetName' => ['type' => 'string'],
                    'useInVmCreationPermission' => [
                        'type' => 'string',
                        'enum' => [
                            'Default',
                            'Deny',
                            'Allow'
                        ]
                    ],
                    'usePublicIpAddressPermission' => [
                        'type' => 'string',
                        'enum' => [
                            'Default',
                            'Deny',
                            'Allow'
                        ]
                    ],
                    'sharedPublicIpAddressConfiguration' => ['$ref' => '#/definitions/SubnetSharedPublicIpAddressConfigurationFragment'],
                    'virtualNetworkPoolName' => ['type' => 'string']
                ],
                'required' => []
            ],
            'UserIdentityFragment' => [
                'properties' => [
                    'principalName' => ['type' => 'string'],
                    'principalId' => ['type' => 'string'],
                    'tenantId' => ['type' => 'string'],
                    'objectId' => ['type' => 'string'],
                    'appId' => ['type' => 'string']
                ],
                'required' => []
            ],
            'UserSecretStoreFragment' => [
                'properties' => [
                    'keyVaultUri' => ['type' => 'string'],
                    'keyVaultId' => ['type' => 'string']
                ],
                'required' => []
            ],
            'UserPropertiesFragment' => [
                'properties' => [
                    'identity' => ['$ref' => '#/definitions/UserIdentityFragment'],
                    'secretStore' => ['$ref' => '#/definitions/UserSecretStoreFragment'],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'UserFragment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/UserPropertiesFragment']],
                'required' => []
            ],
            'VirtualNetworkPropertiesFragment' => [
                'properties' => [
                    'allowedSubnets' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/SubnetFragment']
                    ],
                    'description' => ['type' => 'string'],
                    'externalProviderResourceId' => ['type' => 'string'],
                    'externalSubnets' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ExternalSubnetFragment']
                    ],
                    'subnetOverrides' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/SubnetOverrideFragment']
                    ],
                    'provisioningState' => ['type' => 'string'],
                    'uniqueIdentifier' => ['type' => 'string']
                ],
                'required' => []
            ],
            'VirtualNetworkFragment' => [
                'properties' => ['properties' => ['$ref' => '#/definitions/VirtualNetworkPropertiesFragment']],
                'required' => []
            ]
        ]
    ];
}
