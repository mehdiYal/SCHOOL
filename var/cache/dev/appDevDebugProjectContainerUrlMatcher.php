<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // payment
        if ('/payment/payment' === $pathinfo) {
            return array (  '_controller' => 'PaymentBundle\\Controller\\PaymentController::paymentAction',  '_route' => 'payment',);
        }

        // getPayements
        if ('/payment/getPayements' === $pathinfo) {
            return array (  '_controller' => 'PaymentBundle\\Controller\\PaymentController::getPayementsAction',  '_route' => 'getPayements',);
        }

        // addAnnee
        if (preg_match('#^/(?P<_locale>[^/]++)/annee/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addAnnee')), array (  '_controller' => 'SchoolBundle\\Controller\\AnneeController::addAction',));
        }

        // listAnnees
        if (preg_match('#^/(?P<_locale>[^/]++)/annee/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listAnnees')), array (  '_controller' => 'SchoolBundle\\Controller\\AnneeController::showAction',));
        }

        // editAnnee
        if (preg_match('#^/(?P<_locale>[^/]++)/annee/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editAnnee')), array (  '_controller' => 'SchoolBundle\\Controller\\AnneeController::editAction',));
        }

        // removeAnnee
        if (preg_match('#^/(?P<_locale>[^/]++)/annee/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeAnnee')), array (  '_controller' => 'SchoolBundle\\Controller\\AnneeController::removeAction',));
        }

        // addClasse
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addClasse')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::addAction',));
        }

        // listClasses
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listClasses')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::showAction',));
        }

        // editClasse
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editClasse')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::editAction',));
        }

        // removeClasse
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeClasse')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::removeAction',));
        }

        // affectProf
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/affectProf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectProf')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::affectProf',));
        }

        // affectEleves
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/affectEleves/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectEleves')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::affectEleves',));
        }

        // affectEleveClasse
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/affectEleveClasse/(?P<id>[^/]++)/(?P<eleveID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectEleveClasse')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::affectEleveClasse',));
        }

        // remettreEleveClasse
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/remettreEleveClasse/(?P<id>[^/]++)/(?P<eleveID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remettreEleveClasse')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::remettreEleveClasse',));
        }

        // classe_listeEns
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/listeEns/(?P<id>[^/]+)\\}$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_listeEns')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::listeEnsAction',));
        }

        // new_cours
        if (preg_match('#^/(?P<_locale>[^/]++)/cours/new/classe/(?P<idClasse>[^/]++)/matiere/(?P<idMatiere>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_new_cours;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_cours')), array (  '_controller' => 'SchoolBundle\\Controller\\CoursController::addAction',));
        }
        not_new_cours:

        // edit_cours
        if (preg_match('#^/(?P<_locale>[^/]++)/cours/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_edit_cours;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_cours')), array (  '_controller' => 'SchoolBundle\\Controller\\CoursController::editAction',));
        }
        not_edit_cours:

        // delete_cours
        if (preg_match('#^/(?P<_locale>[^/]++)/cours/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_cours')), array (  '_controller' => 'SchoolBundle\\Controller\\CoursController::deleteAction',));
        }

        // new_examen
        if (preg_match('#^/(?P<_locale>[^/]++)/examen/new$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_new_examen;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_examen')), array (  '_controller' => 'SchoolBundle\\Controller\\ExamenController::addAction',));
        }
        not_new_examen:

        // show_examen
        if (preg_match('#^/(?P<_locale>[^/]++)/examen/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_show_examen;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_examen')), array (  '_controller' => 'SchoolBundle\\Controller\\ExamenController::showAction',));
        }
        not_show_examen:

        // addMatiere
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addMatiere')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::addAction',));
        }

        // listMatieres
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listMatieres')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::showAction',));
        }

        // editMatiere
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editMatiere')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::editAction',));
        }

        // removeMatiere
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeMatiere')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::removeAction',));
        }

        // showEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/show/classe/(?P<idClasse>[^/]++)/matiere/(?P<idMatiere>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_showEleve;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showEleve')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::showEleveAction',));
        }
        not_showEleve:

        // addNote
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/addNote$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_addNote;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addNote')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::addNoteAction',));
        }
        not_addNote:

        // delete_note
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_note')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::deleteAction',));
        }

        // matiere_program_annual_add
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/program/annual/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_program_annual_add')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::programAction',));
        }

        // matiere_program_annual_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/program/annual/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_program_annual_delete')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::programDeleteAction',));
        }

        // addMatiereEvaluation
        if (preg_match('#^/(?P<_locale>[^/]++)/matierevaluation/add/classe/(?P<idClasse>[^/]++)/matiere/(?P<idMatiere>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_addMatiereEvaluation;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addMatiereEvaluation')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereEvaluationController::addAction',));
        }
        not_addMatiereEvaluation:

        // addMenu
        if (preg_match('#^/(?P<_locale>[^/]++)/menu/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addMenu')), array (  '_controller' => 'SchoolBundle\\Controller\\MenuController::addAction',));
        }

        // listMenus
        if (preg_match('#^/(?P<_locale>[^/]++)/menu/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listMenus')), array (  '_controller' => 'SchoolBundle\\Controller\\MenuController::showAction',));
        }

        // editMenu
        if (preg_match('#^/(?P<_locale>[^/]++)/menu/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editMenu')), array (  '_controller' => 'SchoolBundle\\Controller\\MenuController::editAction',));
        }

        // removeMenu
        if (preg_match('#^/(?P<_locale>[^/]++)/menu/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeMenu')), array (  '_controller' => 'SchoolBundle\\Controller\\MenuController::removeAction',));
        }

        // program_new
        if (preg_match('#^/(?P<_locale>[^/]++)/program/new$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_program_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_new')), array (  '_controller' => 'SchoolBundle\\Controller\\ProgrammeController::newAction',));
        }
        not_program_new:

        // program_show_class
        if (preg_match('#^/(?P<_locale>[^/]++)/program/show/class/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_show_class')), array (  '_controller' => 'SchoolBundle\\Controller\\ProgrammeController::showClasseAction',));
        }

        // program_show_enseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/program/show/enseignant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_show_enseignant')), array (  '_controller' => 'SchoolBundle\\Controller\\ProgrammeController::showEnseignantAction',));
        }

        // new_ressource
        if (preg_match('#^/(?P<_locale>[^/]++)/ressource/new$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_new_ressource;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_ressource')), array (  '_controller' => 'SchoolBundle\\Controller\\RessourceController::addAction',));
        }
        not_new_ressource:

        // show_ressource
        if (preg_match('#^/(?P<_locale>[^/]++)/ressource/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_show_ressource;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_ressource')), array (  '_controller' => 'SchoolBundle\\Controller\\RessourceController::showAction',));
        }
        not_show_ressource:

        // delete_ressource
        if (preg_match('#^/(?P<_locale>[^/]++)/ressource/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_ressource')), array (  '_controller' => 'SchoolBundle\\Controller\\RessourceController::deleteAction',));
        }

        // edit_ressource
        if (preg_match('#^/(?P<_locale>[^/]++)/ressource/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_edit_ressource;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_ressource')), array (  '_controller' => 'SchoolBundle\\Controller\\RessourceController::editAction',));
        }
        not_edit_ressource:

        // addSalle
        if (preg_match('#^/(?P<_locale>[^/]++)/salle/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addSalle')), array (  '_controller' => 'SchoolBundle\\Controller\\SalleController::addAction',));
        }

        // listSalles
        if (preg_match('#^/(?P<_locale>[^/]++)/salle/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listSalles')), array (  '_controller' => 'SchoolBundle\\Controller\\SalleController::showAction',));
        }

        // editSalle
        if (preg_match('#^/(?P<_locale>[^/]++)/salle/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editSalle')), array (  '_controller' => 'SchoolBundle\\Controller\\SalleController::editAction',));
        }

        // removeSalle
        if (preg_match('#^/(?P<_locale>[^/]++)/salle/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeSalle')), array (  '_controller' => 'SchoolBundle\\Controller\\SalleController::removeAction',));
        }

        // addSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::addAction',));
        }

        // listSchools
        if (preg_match('#^/(?P<_locale>[^/]++)/school/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listSchools')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::showAction',));
        }

        // editSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::editAction',));
        }

        // editMySchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/editMy/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editMySchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::editMyAction',));
        }

        // removeSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::removeAction',));
        }

        // profileSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::profileAction',));
        }

        // mySchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/mySchool$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mySchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::mySchoolAction',));
        }

        // ecole_cantineTrans
        if (preg_match('#^/(?P<_locale>[^/]++)/school/cantineTrans/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecole_cantineTrans')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::cantineTransAction',));
        }

        // addTransport
        if (preg_match('#^/(?P<_locale>[^/]++)/transport/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addTransport')), array (  '_controller' => 'SchoolBundle\\Controller\\TransportController::addAction',));
        }

        // listTransports
        if (preg_match('#^/(?P<_locale>[^/]++)/transport/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listTransports')), array (  '_controller' => 'SchoolBundle\\Controller\\TransportController::showAction',));
        }

        // editTransport
        if (preg_match('#^/(?P<_locale>[^/]++)/transport/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editTransport')), array (  '_controller' => 'SchoolBundle\\Controller\\TransportController::editAction',));
        }

        // removeTransport
        if (preg_match('#^/(?P<_locale>[^/]++)/transport/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeTransport')), array (  '_controller' => 'SchoolBundle\\Controller\\TransportController::removeAction',));
        }

        // new_travail
        if (preg_match('#^/(?P<_locale>[^/]++)/travailrealise/new$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_new_travail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_travail')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailRealiseController::addAction',));
        }
        not_new_travail:

        // show_travail
        if (preg_match('#^/(?P<_locale>[^/]++)/travailrealise/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_show_travail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_travail')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailRealiseController::showAction',));
        }
        not_show_travail:

        // delete_travail
        if (preg_match('#^/(?P<_locale>[^/]++)/travailrealise/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_travail')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailRealiseController::deleteAction',));
        }

        // edit_travail
        if (preg_match('#^/(?P<_locale>[^/]++)/travailrealise/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_edit_travail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_travail')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailRealiseController::editAction',));
        }
        not_edit_travail:

<<<<<<< Updated upstream
        // travailParent
        if (preg_match('#^/(?P<_locale>[^/]++)/travailrealise/travailParent$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'travailParent')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailRealiseController::travailParentAction',));
        }
=======
        // new_travailafaire
        if (preg_match('#^/(?P<_locale>[^/]++)/travailaFaire/new$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_new_travailafaire;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_travailafaire')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailaFaireController::addAction',));
        }
        not_new_travailafaire:

        // show_travailafaire
        if (preg_match('#^/(?P<_locale>[^/]++)/travailaFaire/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_show_travailafaire;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_travailafaire')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailaFaireController::showAction',));
        }
        not_show_travailafaire:

        // delete_travailafaire
        if (preg_match('#^/(?P<_locale>[^/]++)/travailaFaire/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_travailafaire')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailaFaireController::deleteAction',));
        }

        // edit_travailafaire
        if (preg_match('#^/(?P<_locale>[^/]++)/travailaFaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_edit_travailafaire;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_travailafaire')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailaFaireController::editAction',));
        }
        not_edit_travailafaire:
>>>>>>> Stashed changes

        // absence_index
        if (preg_match('#^/(?P<_locale>[^/]++)/absence/?$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_absence_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'absence_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_index')), array (  '_controller' => 'UserBundle\\Controller\\AbsenceController::indexAction',));
        }
        not_absence_index:

        // absence_new
        if (preg_match('#^/(?P<_locale>[^/]++)/absence/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_absence_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_new')), array (  '_controller' => 'UserBundle\\Controller\\AbsenceController::newAction',));
        }
        not_absence_new:

        // delete_absence
        if (preg_match('#^/(?P<_locale>[^/]++)/absence/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_absence')), array (  '_controller' => 'UserBundle\\Controller\\AbsenceController::deleteAction',));
        }

        // edit_absence
        if (preg_match('#^/(?P<_locale>[^/]++)/absence/(?P<id>[^/]++)/edit/(?P<idClasse>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_absence')), array (  '_controller' => 'UserBundle\\Controller\\AbsenceController::editAction',));
        }

        // addAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::addAction',));
        }

        // editAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::editAction',));
        }

        // removeAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::removeAction',));
        }

        // profileAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::profileAction',));
        }

        // myProfileAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/myProfileAdmin$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myProfileAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::myProfileAction',));
        }

        // listAdmins
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listAdmins')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::showAction',));
        }

        // schoolAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/school/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'schoolAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::schoolAction',));
        }

        // assoSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/asso/(?P<id>[^/]++)/(?P<idp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'assoSchool')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::assoSchoolAction',));
        }

        // homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // logpage
        if (preg_match('#^/(?P<_locale>[^/]++)/logpage$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'logpage')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::dashAction',));
        }

        // lockScreen
        if (preg_match('#^/(?P<_locale>[^/]++)/lockScreen$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lockScreen')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::lockAction',));
        }

        // addEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::addAction',));
        }

        // editEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::editAction',));
        }

        // retardEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/retard/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'retardEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::retardAction',));
        }

        // absenceEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/absence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'absenceEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::absenceAction',));
        }

        // removeEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::removeAction',));
        }

        // profileEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::profileAction',));
        }

        // myProfileEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/myProfile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myProfileEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::myProfileAction',));
        }

        // listEleves
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listEleves')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::showAction',));
        }

        // parentEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/parent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'parentEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::parentAction',));
        }

        // assoParent
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/asso/(?P<id>[^/]++)/(?P<idp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'assoParent')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::assoParentAction',));
        }

        // eleve_absence
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/absence_eleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eleve_absence')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::absenceEleveAction',));
        }

        // addEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::addAction',));
        }

        // editEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::editAction',));
        }

        // removeEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::removeAction',));
        }

        // profileEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::profileAction',));
        }

        // myProfileEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/myProfile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myProfileEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::myProfileAction',));
        }

        // listEnseignants
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listEnseignants')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::showAction',));
        }

        // enseignant_liste_classes
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/list/class/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseignant_liste_classes')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::showClasseAction',));
        }

        // message_show
        if (preg_match('#^/(?P<_locale>[^/]++)/message/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_message_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_show')), array (  '_controller' => 'UserBundle\\Controller\\MessageController::showAction',));
        }
        not_message_show:

        // message_inbox
        if (preg_match('#^/(?P<_locale>[^/]++)/message/inbox$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_message_inbox;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_inbox')), array (  '_controller' => 'UserBundle\\Controller\\MessageController::inboxAction',));
        }
        not_message_inbox:

        // message_sentbox
        if (preg_match('#^/(?P<_locale>[^/]++)/message/sentbox$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_message_sentbox;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_sentbox')), array (  '_controller' => 'UserBundle\\Controller\\MessageController::sentboxAction',));
        }
        not_message_sentbox:

        // message_adressBook
        if (preg_match('#^/(?P<_locale>[^/]++)/message/adressBook$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_message_adressBook;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_adressBook')), array (  '_controller' => 'UserBundle\\Controller\\MessageController::adressBookAction',));
        }
        not_message_adressBook:

        // message_new
        if (preg_match('#^/(?P<_locale>[^/]++)/message/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_message_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_new')), array (  '_controller' => 'UserBundle\\Controller\\MessageController::newAction',));
        }
        not_message_new:

        // message_send
        if (preg_match('#^/(?P<_locale>[^/]++)/message/send$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_message_send;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_send')), array (  '_controller' => 'UserBundle\\Controller\\MessageController::sendAction',));
        }
        not_message_send:

        // addParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::addAction',));
        }

        // editParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::editAction',));
        }

        // removeParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::removeAction',));
        }

        // profileParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::profileAction',));
        }

        // myProfileParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/myProfile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myProfileParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::myProfileAction',));
        }

        // listParentals
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listParentals')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::showAction',));
        }

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>[^/]++)/login$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_login;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_login')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',));
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>[^/]++)/login_check$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_check')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',));
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>[^/]++)/logout$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_logout')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',));
        }
        not_fos_user_security_logout:

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',));
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_profile_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',));
        }
        not_fos_user_profile_edit:

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>[^/]++)/register/?$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_registration_register;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',));
        }
        not_fos_user_registration_register:

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>[^/]++)/register/check\\-email$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',));
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>[^/]++)/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>[^/]++)/register/confirmed$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_confirmed;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirmed')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',));
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/request$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_resetting_request;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_request')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',));
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/send\\-email$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_send_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',));
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/check\\-email$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_resetting_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',));
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_change_password')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',));
        }
        not_fos_user_change_password:

        // fos_message_inbox
        if (preg_match('#^/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_message_inbox');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_inbox')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',));
        }

        // fos_message_sent
        if (preg_match('#^/(?P<_locale>[^/]++)/sent$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_sent')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',));
        }

        // fos_message_deleted
        if (preg_match('#^/(?P<_locale>[^/]++)/deleted$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_deleted')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',));
        }

        // fos_message_search
        if (preg_match('#^/(?P<_locale>[^/]++)/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_search')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',));
        }

        // fos_message_thread_new
        if (preg_match('#^/(?P<_locale>[^/]++)/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_new')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',));
        }

        // fos_message_thread_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($requestMethod, array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_fos_message_thread_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_delete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',));
        }
        not_fos_message_thread_delete:

        // fos_message_thread_undelete
        if (preg_match('#^/(?P<_locale>[^/]++)/(?P<threadId>[^/]++)/undelete$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_message_thread_undelete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_undelete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',));
        }
        not_fos_message_thread_undelete:

        // fos_message_thread_view
        if (preg_match('#^/(?P<_locale>[^/]++)/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_view')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
