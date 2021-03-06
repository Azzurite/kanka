<?php

return [
    'create'        => [
        'description'   => 'Új menühivatkozás létrehozása',
        'success'       => '\':name\' menühivatkozást létrehoztuk.',
        'title'         => 'Új menühivatkozás',
    ],
    'destroy'       => [
        'success'   => '\':name\' menühivatkozást töröltük.',
    ],
    'edit'          => [
        'description'   => 'Menüelem szerkesztése',
        'success'       => '\':name\' menühivatkozást frissítettük.',
        'title'         => ':name menühivatkozás',
    ],
    'fields'        => [
        'entity'    => 'Entitás',
        'filters'   => 'Szűrők',
        'menu'      => 'Menü',
        'name'      => 'Név',
        'position'  => 'Elhelyezés',
        'tab'       => 'Lapfül',
        'type'      => 'Entitás típusa',
    ],
    'helpers'       => [
        'position'  => 'Használd ezt a mezőt, a menühivatkozások sorrendjének meghatározásához. A rendezés az itt beállított számok alapján, növekvő sorrendben történik majd.',
    ],
    'index'         => [
        'add'           => 'Új menühivatkozás',
        'description'   => ':name menühivatkozásainak kezelése',
        'header'        => ':name menühivatkozása',
        'title'         => 'Menühivatkozások',
    ],
    'placeholders'  => [
        'entity'    => 'Válassz ki egy entitást',
        'filters'   => 'location_id=15&type=város',
        'menu'      => 'Menü aloldal (az url utolsó szöveges része)',
        'name'      => 'A menühivatkozás neve',
        'tab'       => 'bejegyzés, hivatkozások, jegyzetek',
    ],
    'show'          => [
        'description'   => 'A menühivatkozás részletes nézete',
        'tabs'          => [
            'information'   => 'Információ',
        ],
        'title'         => ':name menühivatkozás',
    ],
];
