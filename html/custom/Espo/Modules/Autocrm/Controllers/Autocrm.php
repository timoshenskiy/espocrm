<?php
namespace Espo\Modules\Autocrm\Controllers;

use Espo\Core\Api\Request;
use Espo\Core\Api\Response;
use SomeDependency;
use stdClass;

class Autocrm
{
    public function __construct(private SomeDependency $someDependency)
    {}



    /**
     *  GET api/v1/AutocrmAction
     */
    public function getActionContacts(Request $request, Response $response): void
    {
        $emailAddress = $request->getQueryParam(':emailAddress'); // GET parameter

        $response->writeBody('true');
    }
}
