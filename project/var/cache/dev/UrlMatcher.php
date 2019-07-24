<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/testeee' => [[['_route' => 'testee', '_controller' => 'App\\Controller\\TesteController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/teste/new' => [[['_route' => 'app_teste_new', '_controller' => 'App\\Controller\\TesteController::new'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, null, null, false, false, null]],
        '/user/list' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::list'], null, null, null, false, false, null]],
        '/veterinary' => [[['_route' => 'vet_index', '_controller' => 'App\\Controller\\VeterinaryController::index'], null, null, null, false, false, null]],
        '/veterinary/new' => [[['_route' => 'vet_new', '_controller' => 'App\\Controller\\VeterinaryController::new'], null, null, null, false, false, null]],
        '/veterinary/list' => [[['_route' => 'vet_list', '_controller' => 'App\\Controller\\VeterinaryController::list'], null, null, null, false, false, null]],
        '/clinic' => [[['_route' => 'clinic_index', '_controller' => 'App\\Controller\\ClinicController::index'], null, null, null, false, false, null]],
        '/clinic/new' => [[['_route' => 'clinic_new', '_controller' => 'App\\Controller\\ClinicController::new'], null, null, null, false, false, null]],
        '/clinic/list' => [[['_route' => 'clinic_list', '_controller' => 'App\\Controller\\ClinicController::list'], null, null, null, false, false, null]],
        '/pet' => [[['_route' => 'pet_index', '_controller' => 'App\\Controller\\PetController::index'], null, null, null, false, false, null]],
        '/pet/new' => [[['_route' => 'pet_new', '_controller' => 'App\\Controller\\PetController::new'], null, null, null, false, false, null]],
        '/pet/list' => [[['_route' => 'pet_list', '_controller' => 'App\\Controller\\PetController::list'], null, null, null, false, false, null]],
        '/api/v1/users' => [
            [['_route' => 'api_users_list', '_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_users_new', '_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController:new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v1/clinics' => [
            [['_route' => 'api_clinics_list', '_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_clinics_new', '_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController:new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v1/veterinaries' => [
            [['_route' => 'api_veterinaries_list', '_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_veterinaries_new', '_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController:new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v1/pets' => [
            [['_route' => 'api_pets_list', '_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_pets_new', '_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController:new'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/user/(?'
                    .'|edit/([^/]++)(*:64)'
                    .'|remove/([^/]++)(*:86)'
                .')'
                .'|/veterinary/(?'
                    .'|edit/([^/]++)(*:122)'
                    .'|remove/([^/]++)(*:145)'
                .')'
                .'|/clinic/(?'
                    .'|edit/([^/]++)(*:178)'
                    .'|remove/([^/]++)(*:201)'
                .')'
                .'|/pet/(?'
                    .'|edit/([^/]++)(*:231)'
                    .'|remove/([^/]++)(*:254)'
                .')'
                .'|/api/v1/(?'
                    .'|users/([^/]++)(?'
                        .'|(*:291)'
                    .')'
                    .'|clinics/([^/]++)(?'
                        .'|(*:319)'
                        .'|/addresses(*:337)'
                        .'|(*:345)'
                    .')'
                    .'|veterinaries/([^/]++)(?'
                        .'|(*:378)'
                        .'|/addresses(*:396)'
                        .'|(*:404)'
                    .')'
                    .'|pets/([^/]++)(?'
                        .'|(*:429)'
                        .'|/owners(?'
                            .'|(*:447)'
                            .'|/addresses(*:465)'
                        .')'
                        .'|(*:474)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'user_remove', '_controller' => 'App\\Controller\\UserController::remove'], ['id'], null, null, false, true, null]],
        122 => [[['_route' => 'vet_edit', '_controller' => 'App\\Controller\\VeterinaryController::edit'], ['id'], null, null, false, true, null]],
        145 => [[['_route' => 'vet_remove', '_controller' => 'App\\Controller\\VeterinaryController::remove'], ['id'], null, null, false, true, null]],
        178 => [[['_route' => 'clinic_edit', '_controller' => 'App\\Controller\\ClinicController::edit'], ['id'], null, null, false, true, null]],
        201 => [[['_route' => 'clinic_remove', '_controller' => 'App\\Controller\\ClinicController::remove'], ['id'], null, null, false, true, null]],
        231 => [[['_route' => 'pet_edit', '_controller' => 'App\\Controller\\PetController::edit'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'pet_remove', '_controller' => 'App\\Controller\\PetController::remove'], ['id'], null, null, false, true, null]],
        291 => [
            [['_route' => 'api_users_show', '_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_edit', '_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_delete', '_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        319 => [[['_route' => 'api_clinics_show', '_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        337 => [[['_route' => 'api_clinics_show_veterinaries', '_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::showAddress'], ['id'], ['GET' => 0], null, false, false, null]],
        345 => [
            [['_route' => 'api_clinics_edit', '_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_clinics_delete', '_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        378 => [[['_route' => 'api_veterinaries_show', '_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        396 => [[['_route' => 'api_veterinaries_show_address', '_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::showAddress'], ['id'], ['GET' => 0], null, false, false, null]],
        404 => [
            [['_route' => 'api_veterinaries_edit', '_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_veterinaries_delete', '_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        429 => [[['_route' => 'api_pets_show', '_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'api_pets_show_owner', '_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::showOwner'], ['id'], ['GET' => 0], null, false, false, null]],
        465 => [[['_route' => 'api_pets_show_owner_address', '_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::showOwnerAddress'], ['id'], ['GET' => 0], null, false, false, null]],
        474 => [
            [['_route' => 'api_pets_edit', '_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_pets_delete', '_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
