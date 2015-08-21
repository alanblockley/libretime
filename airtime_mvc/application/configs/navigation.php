<?php

/*
* Navigation container (config/array)

* Each element in the array will be passed to
* Zend_Navigation_Page::factory() when constructing
* the navigation container below.
*/
$pages = array(
    array(
        'label' => "<i class='icon-globe icon-white'></i>"._('Radio Page'),
        'uri' => '/',
        'resource' => '',
        'pages' => array(
        )
    ),
    array(
        'label'      => "<i class='icon-calendar icon-white'></i>"._('Calendar'),
        'module'     => 'default',
        'controller' => 'Schedule',
        'action'     => 'index',
        'resource'   =>    'schedule'
    ),
    array(
        'label'      =>  "<i class='icon-wrench icon-white'></i>"._('Widgets'),
        'module'     => 'default',
        'controller' => 'embeddablewidgets',
        'action'     => 'player',
        'title' => 'Widgets',
        'pages' => array(
            array(
                'label'      => _('Player'),
                'module'     => 'default',
                'controller' => 'embeddablewidgets',
                'action'     => 'player',
            ),
            array(
                'label'      => _('Weekly Schedule'),
                'module'     => 'default',
                'controller' => 'embeddablewidgets',
                'action'     => 'schedule',
            )
        )
    ),
    array(
        'label' => "<i class='icon-cog icon-white'></i>"._("Settings"),
        'resource' => 'preference',
        'action' => 'index',
        'module' => 'default',
        'controller' => 'preference',
        'title' => 'Settings',
        'pages' => array(
            array(
                'label'      => _('General'),
                'module'     => 'default',
                'controller' => 'Preference'
            ),
            array(
                'label' => _('My Profile'),
                'controller' => 'user',
                'action' => 'edit-user',
                'resource' => 'user'
            ),
            array(
                'label'      => _('Users'),
                'module'     => 'default',
                'controller' => 'user',
                'action'     => 'add-user',
                'resource'   =>    'user'
            ),
            array(
                'label'      => _('Streams'),
                'module'     => 'default',
                'controller' => 'Preference',
                'action'     => 'stream-setting'
            )
        )
    ),
    array(
        'label' =>  "<i class='icon-signal icon-white'></i>"._("Analytics"),
        'module'     => 'default',
        'controller' => 'listenerstat',
        'action'     => 'index',
        'resource'   => 'listenerstat',
        'title' => 'Analytics',
        'pages' => array(
            array(
                'label'      => _('Listener Stats'),
                'module'     => 'default',
                'controller' => 'listenerstat',
                'action'     => 'index',
                'resource'   => 'listenerstat'
            ),
            array(
                'label'      => _('Playout History'),
                'module'     => 'default',
                'controller' => 'playouthistory',
                'action'     => 'index',
                'resource'   => 'playouthistory'
            ),
            array(
                'label'      => _('History Templates'),
                'module'     => 'default',
                'controller' => 'playouthistorytemplate',
                'action'     => 'index',
                'resource'   => 'playouthistorytemplate'
            )
        )
    ),
    array(
        'label' =>  "<i class='icon-briefcase icon-white'></i>"._('Billing'),
        'controller' => 'billing',
        'action' => 'client',
        'resource' => 'billing',
        'title' => 'Billing',
        'pages' => array(
            array(
                'label' => _('Account Details'),
                'module' => 'default',
                'controller' => 'billing',
                'action' => 'client',
                'resource' => 'billing'
            ),
            array(
                'label' => _('Account Plans'),
                'module' => 'default',
                'controller' => 'billing',
                'action' => 'upgrade',
                'resource' => 'billing'
            ),
            array(
                'label' => _('View Invoices'),
                'module' => 'default',
                'controller' => 'billing',
                'action' => 'invoices',
                'resource' => 'billing'
            )
        )
    ),
    array(
        'label'      =>  "<i class='icon-question-sign icon-white'></i>"._('Help'),
        'controller' => 'dashboard',
        'action'     => 'help',
        'resource'    =>    'dashboard',
        'title' => 'Help',
        'pages'      => array(
            array(
                'label'      => _('Getting Started'),
                'module'     => 'default',
                'controller' => 'dashboard',
                'action'     => 'help',
                'resource'   =>    'dashboard'
            ),
            array(
                'label'      => _('Help Center'),
                'uri'        => HELP_URL,
                'target'     => "_blank"
            ),
            array(
                'label'      => _('FAQ'),
                'uri'        => FAQ_URL,
                'target'     => "_blank"
            ),
            array(
                'label'      => _('User Manual'),
                'uri'        => USER_MANUAL_URL,
                'target'     => "_blank"
            ),
            array(
                'label'      => _(sprintf("About %s", PRODUCT_NAME)),
                'uri'        => ABOUT_AIRTIME_URL,
                'target'     => "_blank"
            ),
            array(
                'label'      => _(sprintf("Help Translate %s", PRODUCT_NAME)),
                'uri'        => AIRTIME_TRANSIFEX_URL,
                'target'     => "_blank"
            )
        )
    ),
);


// Create container from array
$container = new Zend_Navigation($pages);
$container->id = "nav";

//store it in the registry:
Zend_Registry::set('Zend_Navigation', $container);
