<?php

$labelPrefix = 'LLL:EXT:calendar/Resources/Private/Language/Database.xlf:tx_calendar_event';
return [
    'ctrl' => [
        'title' => $labelPrefix,
        'label' => 'title',
        'default_sortby' => 'ORDER BY start DESC',

        // enable fields and meta data:
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
        'iconfile' => \TYPO3\CMS\Core\Utility\PathUtility::getAbsoluteWebPath('calendar')
            . 'Resources/Public/Icons/tx_calendar_event.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'title, ' .
            '--palette--;' . $labelPrefix . '.palette.date;dates, categories, hashtags,' .
            '--div--;' . $labelPrefix . '.palette.location, ;;location, location_address,' .
            '']
    ],
    'palettes' => [
        'dates' => ['showitem' => 'start,end,timezone'],
        'location' => ['showitem' => 'location_name,location_zip,location_city,location_country'],
    ],
    'columns' => [
        'title' => [
            'label' => $labelPrefix . '.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ]
        ],
        'start' => [
            'label' => $labelPrefix . '.start',
            'config' => [
                'type' => 'input',
                'dbType' => 'datetime',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,required',
            ]
        ],
        'end' => [
            'label' => $labelPrefix . '.end',
            'config' => [
                'type' => 'input',
                'dbType' => 'datetime',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,required',
            ]
        ],
        'timezone' => [
            'label' => $labelPrefix . '.timezone',
            'config' => [
                'type' => 'select',
                'items' => [
                    ['UTC', 0]
                ],
                'eval' => 'required',
                'default' => ''
            ]
        ],
        'categories' => [
            'label' => $labelPrefix . '.categories',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectTree',
                'foreign_table' => 'sys_category',
                'foreign_table_where' => 'AND sys_category.sys_language_uid IN (0,-1) ORDER BY sys_category.title ASC',
                'size' => 20,
                'treeConfig' => [
                    'parentField' => 'parent',
                    'appearance' => [
                        'expandAll' => true,
                        'showHeader' => true,
                    ],
                ],
            ]
        ],
        'location_name' => [
            'label' => $labelPrefix . '.location_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ]
        ],
        'location_address' => [
            'label' => $labelPrefix . '.location_address',
            'config' => [
                'type' => 'text',
                'cols' => '80',
                'rows' => '5',
                'eval' => 'trim,required'
            ]
        ],
        'location_city' => [
            'label' => $labelPrefix . '.location_city',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ]
        ],
        'location_zip' => [
            'label' => $labelPrefix . '.location_zip',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim'
            ]
        ],
        'location_country' => [
            'label' => $labelPrefix . '.location_country',
            'config' => [
                'type' => 'select',
                'items' => [
                    ['', 0],
                ],
                // this lets the cn_iso_3 value work as an index; without it, RelationHandler will unset the value because
                // it cannot find the value
                'allowNonIdValues' => true,
                'foreign_table' => 'static_countries',
                'itemsProcFunc' => \SJBR\StaticInfoTables\Hook\Backend\Form\FormDataProvider\TcaSelectItemsProcessor::class
                    . '->translateCountriesSelector',
                'itemsProcFunc_config' => [
                    'indexField' => 'cn_iso_3',
                ],
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'hashtags' => [
            'label' => $labelPrefix . '.hashtags',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ]
    ],
];

