<?php
namespace Espo\Modules\Autocrm\Api;

use Espo\Core\Api\Action;
use Espo\Core\Api\Request;
use Espo\Core\Api\Response;
use Espo\Core\Api\ResponseComposer;

use Espo\Modules\Autocrm\Service;

class AutocrmAction implements Action
{
    public function __construct(private Service $service) {}

    public function process(Request $request): Response
    {
        $data = $this->service->get();

        return ResponseComposer::json($data);
    }
}
