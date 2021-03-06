<?php

namespace cr\Request\V20160607;

/**
 * Request of CreateRepo
 *
 */
class CreateRepoRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/repos';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'CreateRepo',
            'cr'
        );
    }
}
