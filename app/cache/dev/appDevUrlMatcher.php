<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/images/example')) {
            // _assetic_e0c97ce
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e0c97ce',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_e0c97ce',);
            }

            // _assetic_e0c97ce_0
            if ($pathinfo === '/images/example_slide-01_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e0c97ce',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_e0c97ce_0',);
            }

            // _assetic_e8d2308
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8d2308',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_e8d2308',);
            }

            // _assetic_e8d2308_0
            if ($pathinfo === '/images/example_slide-02_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8d2308',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_e8d2308_0',);
            }

            // _assetic_b53d663
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b53d663',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_b53d663',);
            }

            // _assetic_b53d663_0
            if ($pathinfo === '/images/example_slide-03_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b53d663',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_b53d663_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/hall')) {
            // hall
            if (rtrim($pathinfo, '/') === '/hall') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hall');
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\HallController::indexAction',  '_route' => 'hall',);
            }

            // hall_show
            if (preg_match('#^/hall/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hall_show')), array (  '_controller' => 'uos\\uosBundle\\Controller\\HallController::showAction',));
            }

            // hall_new
            if ($pathinfo === '/hall/new') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\HallController::newAction',  '_route' => 'hall_new',);
            }

            // hall_create
            if ($pathinfo === '/hall/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_hall_create;
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\HallController::createAction',  '_route' => 'hall_create',);
            }
            not_hall_create:

            // hall_edit
            if (preg_match('#^/hall/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hall_edit')), array (  '_controller' => 'uos\\uosBundle\\Controller\\HallController::editAction',));
            }

            // hall_update
            if (preg_match('#^/hall/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_hall_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hall_update')), array (  '_controller' => 'uos\\uosBundle\\Controller\\HallController::updateAction',));
            }
            not_hall_update:

            // hall_delete
            if (preg_match('#^/hall/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_hall_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hall_delete')), array (  '_controller' => 'uos\\uosBundle\\Controller\\HallController::deleteAction',));
            }
            not_hall_delete:

        }

        if (0 === strpos($pathinfo, '/functions')) {
            // functions
            if (rtrim($pathinfo, '/') === '/functions') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'functions');
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\FunctionsController::indexAction',  '_route' => 'functions',);
            }

            if (0 === strpos($pathinfo, '/functions/check')) {
                // functions_checkin
                if ($pathinfo === '/functions/checkin') {
                    return array (  '_controller' => 'uos\\uosBundle\\Controller\\FunctionsController::checkinAction',  '_route' => 'functions_checkin',);
                }

                // functions_checkout
                if ($pathinfo === '/functions/checkout') {
                    return array (  '_controller' => 'uos\\uosBundle\\Controller\\FunctionsController::checkoutAction',  '_route' => 'functions_checkout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/room')) {
            // room
            if (rtrim($pathinfo, '/') === '/room') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'room');
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\RoomController::indexAction',  '_route' => 'room',);
            }

            // room_show
            if (preg_match('#^/room/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'room_show')), array (  '_controller' => 'uos\\uosBundle\\Controller\\RoomController::showAction',));
            }

            // room_new
            if ($pathinfo === '/room/new') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\RoomController::newAction',  '_route' => 'room_new',);
            }

            // room_create
            if ($pathinfo === '/room/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_room_create;
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\RoomController::createAction',  '_route' => 'room_create',);
            }
            not_room_create:

            // room_edit
            if (preg_match('#^/room/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'room_edit')), array (  '_controller' => 'uos\\uosBundle\\Controller\\RoomController::editAction',));
            }

            // room_update
            if (preg_match('#^/room/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_room_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'room_update')), array (  '_controller' => 'uos\\uosBundle\\Controller\\RoomController::updateAction',));
            }
            not_room_update:

            // room_delete
            if (preg_match('#^/room/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_room_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'room_delete')), array (  '_controller' => 'uos\\uosBundle\\Controller\\RoomController::deleteAction',));
            }
            not_room_delete:

        }

        if (0 === strpos($pathinfo, '/employee')) {
            // employee
            if (rtrim($pathinfo, '/') === '/employee') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'employee');
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\EmployeeController::indexAction',  '_route' => 'employee',);
            }

            // employee_show
            if (preg_match('#^/employee/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employee_show')), array (  '_controller' => 'uos\\uosBundle\\Controller\\EmployeeController::showAction',));
            }

            // employee_new
            if ($pathinfo === '/employee/new') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\EmployeeController::newAction',  '_route' => 'employee_new',);
            }

            // employee_create
            if ($pathinfo === '/employee/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_employee_create;
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\EmployeeController::createAction',  '_route' => 'employee_create',);
            }
            not_employee_create:

            // employee_edit
            if (preg_match('#^/employee/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employee_edit')), array (  '_controller' => 'uos\\uosBundle\\Controller\\EmployeeController::editAction',));
            }

            // employee_update
            if (preg_match('#^/employee/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_employee_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employee_update')), array (  '_controller' => 'uos\\uosBundle\\Controller\\EmployeeController::updateAction',));
            }
            not_employee_update:

            // employee_delete
            if (preg_match('#^/employee/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_employee_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employee_delete')), array (  '_controller' => 'uos\\uosBundle\\Controller\\EmployeeController::deleteAction',));
            }
            not_employee_delete:

        }

        if (0 === strpos($pathinfo, '/finance')) {
            // finance
            if (rtrim($pathinfo, '/') === '/finance') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'finance');
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\FinanceController::indexAction',  '_route' => 'finance',);
            }

            // finance_show
            if (preg_match('#^/finance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'finance_show')), array (  '_controller' => 'uos\\uosBundle\\Controller\\FinanceController::showAction',));
            }

            // finance_new
            if ($pathinfo === '/finance/new') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\FinanceController::newAction',  '_route' => 'finance_new',);
            }

            // finance_create
            if ($pathinfo === '/finance/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_finance_create;
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\FinanceController::createAction',  '_route' => 'finance_create',);
            }
            not_finance_create:

            // saveFinance
            if ($pathinfo === '/finance/n') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\FinanceController::saveFinanceAction',  '_route' => 'saveFinance',);
            }

            // finance_edit
            if (preg_match('#^/finance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'finance_edit')), array (  '_controller' => 'uos\\uosBundle\\Controller\\FinanceController::editAction',));
            }

            // finance_update
            if (preg_match('#^/finance/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_finance_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'finance_update')), array (  '_controller' => 'uos\\uosBundle\\Controller\\FinanceController::updateAction',));
            }
            not_finance_update:

            // finance_delete
            if (preg_match('#^/finance/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_finance_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'finance_delete')), array (  '_controller' => 'uos\\uosBundle\\Controller\\FinanceController::deleteAction',));
            }
            not_finance_delete:

        }

        if (0 === strpos($pathinfo, '/occupy')) {
            // occupy
            if (rtrim($pathinfo, '/') === '/occupy') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'occupy');
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::indexAction',  '_route' => 'occupy',);
            }

            // occupy_show
            if (preg_match('#^/occupy/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'occupy_show')), array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::showAction',));
            }

            if (0 === strpos($pathinfo, '/occupy/n')) {
                // occupy_new
                if ($pathinfo === '/occupy/new') {
                    return array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::newAction',  '_route' => 'occupy_new',);
                }

                // saveOccupy
                if ($pathinfo === '/occupy/n') {
                    return array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::saveOccupyAction',  '_route' => 'saveOccupy',);
                }

            }

            if (0 === strpos($pathinfo, '/occupy/c')) {
                if (0 === strpos($pathinfo, '/occupy/check')) {
                    // checkOutStudent
                    if ($pathinfo === '/occupy/checkOut') {
                        return array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::checkOutAction',  '_route' => 'checkOutStudent',);
                    }

                    // checkOut
                    if ($pathinfo === '/occupy/check') {
                        return array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::checkOutAction',  '_route' => 'checkOut',);
                    }

                }

                // occupy_create
                if ($pathinfo === '/occupy/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_occupy_create;
                    }

                    return array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::createAction',  '_route' => 'occupy_create',);
                }
                not_occupy_create:

            }

            // occupy_edit
            if (preg_match('#^/occupy/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'occupy_edit')), array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::editAction',));
            }

            // occupy_update
            if (preg_match('#^/occupy/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_occupy_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'occupy_update')), array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::updateAction',));
            }
            not_occupy_update:

            // occupy_delete
            if (preg_match('#^/occupy/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_occupy_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'occupy_delete')), array (  '_controller' => 'uos\\uosBundle\\Controller\\OccupyController::deleteAction',));
            }
            not_occupy_delete:

        }

        if (0 === strpos($pathinfo, '/student')) {
            // student
            if (rtrim($pathinfo, '/') === '/student') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'student');
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\StudentController::indexAction',  '_route' => 'student',);
            }

            // student_show
            if (preg_match('#^/student/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_show')), array (  '_controller' => 'uos\\uosBundle\\Controller\\StudentController::showAction',));
            }

            // student_new
            if ($pathinfo === '/student/new') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\StudentController::newAction',  '_route' => 'student_new',);
            }

            // student_create
            if ($pathinfo === '/student/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_student_create;
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\StudentController::createAction',  '_route' => 'student_create',);
            }
            not_student_create:

            // student_edit
            if (preg_match('#^/student/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_edit')), array (  '_controller' => 'uos\\uosBundle\\Controller\\StudentController::editAction',));
            }

            // student_update
            if (preg_match('#^/student/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_student_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_update')), array (  '_controller' => 'uos\\uosBundle\\Controller\\StudentController::updateAction',));
            }
            not_student_update:

            // student_delete
            if (preg_match('#^/student/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_student_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_delete')), array (  '_controller' => 'uos\\uosBundle\\Controller\\StudentController::deleteAction',));
            }
            not_student_delete:

        }

        if (0 === strpos($pathinfo, '/work')) {
            // work
            if (rtrim($pathinfo, '/') === '/work') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'work');
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\WorkController::indexAction',  '_route' => 'work',);
            }

            // work_show
            if (preg_match('#^/work/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'work_show')), array (  '_controller' => 'uos\\uosBundle\\Controller\\WorkController::showAction',));
            }

            // work_new
            if ($pathinfo === '/work/new') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\WorkController::newAction',  '_route' => 'work_new',);
            }

            // work_create
            if ($pathinfo === '/work/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_work_create;
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\WorkController::createAction',  '_route' => 'work_create',);
            }
            not_work_create:

            // work_edit
            if (preg_match('#^/work/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'work_edit')), array (  '_controller' => 'uos\\uosBundle\\Controller\\WorkController::editAction',));
            }

            // work_update
            if (preg_match('#^/work/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_work_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'work_update')), array (  '_controller' => 'uos\\uosBundle\\Controller\\WorkController::updateAction',));
            }
            not_work_update:

            // work_delete
            if (preg_match('#^/work/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_work_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'work_delete')), array (  '_controller' => 'uos\\uosBundle\\Controller\\WorkController::deleteAction',));
            }
            not_work_delete:

        }

        // uosuos_uos
        if ($pathinfo === '/uos') {
            return array (  '_controller' => 'uos\\uosBundle\\Controller\\DefaultController::uosAction',  '_route' => 'uosuos_uos',);
        }

        if (0 === strpos($pathinfo, '/h')) {
            // uosuos_home
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\DefaultController::homeAction',  '_route' => 'uosuos_home',);
            }

            // uosuos_hall_room
            if ($pathinfo === '/hall_room') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\DefaultController::hall_roomAction',  '_route' => 'uosuos_hall_room',);
            }

        }

        if (0 === strpos($pathinfo, '/users')) {
            // users
            if (rtrim($pathinfo, '/') === '/users') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'users');
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\UsersController::indexAction',  '_route' => 'users',);
            }

            // users_show
            if (preg_match('#^/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_show')), array (  '_controller' => 'uos\\uosBundle\\Controller\\UsersController::showAction',));
            }

            // users_new
            if ($pathinfo === '/users/new') {
                return array (  '_controller' => 'uos\\uosBundle\\Controller\\UsersController::newAction',  '_route' => 'users_new',);
            }

            // users_create
            if ($pathinfo === '/users/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_users_create;
                }

                return array (  '_controller' => 'uos\\uosBundle\\Controller\\UsersController::createAction',  '_route' => 'users_create',);
            }
            not_users_create:

            // users_edit
            if (preg_match('#^/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_edit')), array (  '_controller' => 'uos\\uosBundle\\Controller\\UsersController::editAction',));
            }

            // users_update
            if (preg_match('#^/users/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_users_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_update')), array (  '_controller' => 'uos\\uosBundle\\Controller\\UsersController::updateAction',));
            }
            not_users_update:

            // users_delete
            if (preg_match('#^/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_users_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_delete')), array (  '_controller' => 'uos\\uosBundle\\Controller\\UsersController::deleteAction',));
            }
            not_users_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
