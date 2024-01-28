<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/api/v1/Activities/upcoming' => 'route2',
      '/api/v1/Activities' => 'route3',
      '/api/v1/Timeline' => 'route4',
      '/api/v1/Timeline/busyRanges' => 'route5',
      '/api/v1/Autocrm' => 'route9',
      '/api/v1/' => 'route10',
      '/api/v1/App/user' => 'route11',
      '/api/v1/App/about' => 'route13',
      '/api/v1/Metadata' => 'route14',
      '/api/v1/I18n' => 'route15',
      '/api/v1/Settings' => 'route16',
      '/api/v1/Stream' => 'route19',
      '/api/v1/GlobalSearch' => 'route20',
      '/api/v1/Admin/jobs' => 'route31',
      '/api/v1/CurrencyRate' => 'route37',
      '/api/v1/Email/inbox/notReadCounts' => 'route68',
      '/api/v1/Email/insertFieldData' => 'route69',
      '/api/v1/EmailAddress/search' => 'route70',
      '/api/v1/Oidc/authorizationData' => 'route78',
    ),
    'POST' => 
    array (
      '/api/v1/App/destroyAuthToken' => 'route12',
      '/api/v1/Admin/rebuild' => 'route29',
      '/api/v1/Admin/clearCache' => 'route30',
      '/api/v1/Action' => 'route39',
      '/api/v1/MassAction' => 'route40',
      '/api/v1/Export' => 'route43',
      '/api/v1/Import' => 'route46',
      '/api/v1/Import/file' => 'route47',
      '/api/v1/Attachment/fromImageUrl' => 'route56',
      '/api/v1/Email/sendTest' => 'route60',
      '/api/v1/Email/inbox/read' => 'route61',
      '/api/v1/Email/inbox/important' => 'route63',
      '/api/v1/Email/inbox/inTrash' => 'route65',
      '/api/v1/UserSecurity/apiKey/generate' => 'route72',
      '/api/v1/UserSecurity/password/recovery' => 'route74',
      '/api/v1/UserSecurity/password/generate' => 'route75',
      '/api/v1/User/passwordChangeRequest' => 'route76',
      '/api/v1/User/changePasswordByRequest' => 'route77',
      '/api/v1/Oidc/backchannelLogout' => 'route79',
    ),
    'PATCH' => 
    array (
      '/api/v1/Settings' => 'route17',
    ),
    'PUT' => 
    array (
      '/api/v1/Settings' => 'route18',
      '/api/v1/CurrencyRate' => 'route38',
      '/api/v1/Kanban/order' => 'route52',
      '/api/v1/UserSecurity/password' => 'route73',
    ),
    'DELETE' => 
    array (
      '/api/v1/Email/inbox/read' => 'route62',
      '/api/v1/Email/inbox/important' => 'route64',
      '/api/v1/Email/inbox/inTrash' => 'route66',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)|/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)/list/([^/]+)|/api/v1/Meeting/([^/]+)/attendees()()()()|/api/v1/Call/([^/]+)/attendees()()()()()|/api/v1/([^/]+)/action/([^/]+)()()()()()|/api/v1/([^/]+)/layout/([^/]+)()()()()()()|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()()()()()|/api/v1/MassAction/([^/]+)/status()()()()()()()()()|/api/v1/Export/([^/]+)/status()()()()()()()()()())$~',
        'routeMap' => 
        array (
          4 => 
          array (
            0 => 'route0',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          5 => 
          array (
            0 => 'route1',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
              'targetType' => 'targetType',
            ),
          ),
          6 => 
          array (
            0 => 'route6',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route7',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route25',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          9 => 
          array (
            0 => 'route26',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          10 => 
          array (
            0 => 'route32',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          11 => 
          array (
            0 => 'route41',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route44',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/api/v1/Kanban/([^/]+)|/api/v1/Attachment/file/([^/]+)()|/api/v1/User/([^/]+)/acl()()|/api/v1/([^/]+)/([^/]+)()()|/api/v1/([^/]+)()()()()|/api/v1/([^/]+)/([^/]+)/stream()()()()|/api/v1/([^/]+)/([^/]+)/posts()()()()()|/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route53',
            1 => 
            array (
              'entityType' => 'entityType',
            ),
          ),
          3 => 
          array (
            0 => 'route54',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route71',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route80',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route81',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          7 => 
          array (
            0 => 'route86',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route87',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route90',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'POST' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Campaign/([^/]+)/generateMailMerge|/api/v1/LeadCapture/([^/]+)()|/api/v1/([^/]+)/action/([^/]+)()|/api/v1/Admin/fieldManager/([^/]+)()()()|/api/v1/MassAction/([^/]+)/subscribe()()()()|/api/v1/Export/([^/]+)/subscribe()()()()()|/api/v1/Import/([^/]+)/revert()()()()()()|/api/v1/Import/([^/]+)/removeDuplicates()()()()()()()|/api/v1/Import/([^/]+)/unmarkDuplicates()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route8',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route21',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
          4 => 
          array (
            0 => 'route23',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          5 => 
          array (
            0 => 'route33',
            1 => 
            array (
              'scope' => 'scope',
            ),
          ),
          6 => 
          array (
            0 => 'route42',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route45',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route48',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route49',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route50',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/api/v1/Import/([^/]+)/exportErrors|/api/v1/Attachment/chunk/([^/]+)()|/api/v1/Attachment/copy/([^/]+)()()|/api/v1/EmailTemplate/([^/]+)/prepare()()()|/api/v1/Email/([^/]+)/attachments/copy()()()()|/api/v1/Email/inbox/folders/([^/]+)()()()()()|/api/v1/([^/]+)()()()()()()|/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route51',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route55',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route57',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route58',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route59',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route67',
            1 => 
            array (
              'folderId' => 'folderId',
            ),
          ),
          8 => 
          array (
            0 => 'route82',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          9 => 
          array (
            0 => 'route91',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'OPTIONS' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/LeadCapture/([^/]+))$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route22',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
        ),
      ),
    ),
    'PUT' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/([^/]+)/action/([^/]+)|/api/v1/([^/]+)/layout/([^/]+)()|/api/v1/([^/]+)/layout/([^/]+)/([^/]+)()|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()|/api/v1/([^/]+)/([^/]+)()()()()|/api/v1/([^/]+)/([^/]+)/subscription()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route24',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          4 => 
          array (
            0 => 'route27',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route28',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
              'setId' => 'setId',
            ),
          ),
          6 => 
          array (
            0 => 'route34',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          7 => 
          array (
            0 => 'route83',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route88',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'PATCH' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/api/v1/([^/]+)/([^/]+)())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route35',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route84',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'DELETE' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/api/v1/([^/]+)/([^/]+)()|/api/v1/([^/]+)/([^/]+)/subscription()()|/api/v1/([^/]+)/([^/]+)/([^/]+)()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route36',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route85',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route89',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route92',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
  ),
);