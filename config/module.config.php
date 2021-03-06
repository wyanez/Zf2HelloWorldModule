<?php
return array(

    'controllers' => array(
      'invokables' => array(
        'Zf2HelloWorldModule' => 'Zf2HelloWorldModule\Controller\IndexController'
      ),
    ),


    'service_manager' => array(

        'factories' => array(
        ),

        'initializers' => array(
        ),
    ),


    'view_manager' => array(
        /*
        'template_map' => array(
            'zf2-hello-world-module/index' => __DIR__ . '/../view/zf2-hello-world-module/index.phtml',
        ),*/
        'template_path_stack' => array(
            'zf2-hello-world-module' => __DIR__ . '/../view',
        ),
    ),


    'router' => array(

        'routes' => array(

            'zf2-hello-world' => array(

                'type' => 'Literal',
                'priority' => 1000,
                'options' => array(
                    'route' => '/zf2helloworld',
                    'defaults' => array(
                        'controller' => 'Zf2HelloWorldModule',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                
            ),
        ),
    ),
);