<?php

/* base2.html.twig */
class __TwigTemplate_9345fae4198f00f631008603cd692f9c0930e765f89d7a2d0f3e900e7ce4aed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f84d4b2aeb7bdb932064a4e13cecb9dc010cbfffc6a306c8292630ebae6a4f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84d4b2aeb7bdb932064a4e13cecb9dc010cbfffc6a306c8292630ebae6a4f30->enter($__internal_f84d4b2aeb7bdb932064a4e13cecb9dc010cbfffc6a306c8292630ebae6a4f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_696124e9988e9b69e1a062092a290d6d5b6c82412b538fa69eb0a1f0e244fbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696124e9988e9b69e1a062092a290d6d5b6c82412b538fa69eb0a1f0e244fbcc->enter($__internal_696124e9988e9b69e1a062092a290d6d5b6c82412b538fa69eb0a1f0e244fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-default.css"), "html", null, true);
        echo "\"/>
        ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == "ar")) {
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-flipped.css\">
        ";
        }
        // line 13
        echo "        
    </head>
    <body>


      <!-- START PAGE CONTAINER -->
        <div class=\"page-container\">
            
            <!-- START PAGE SIDEBAR -->
            <div class=\"page-sidebar\">
                <!-- START X-NAVIGATION -->
                <ul class=\"x-navigation\">
                    <li class=\"xn-logo\">
                        <a href=\"#\">SCHOOLIUM</a>
                        <a href=\"#\" class=\"x-navigation-control\"></a>
                    </li>
                    <li class=\"xn-profile\">
                        <a href=\"#\" class=\"profile-mini\">
                            <img src=\"";
        // line 31
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"Photo de profile\"/>
                        </a>
                        <div class=\"profile\">
                            <div class=\"profile-image\">
                                <img src=\"";
        // line 35
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"Photo de profile\"/>
                            </div>
                            <div class=\"profile-data\">
                                <div class=\"profile-data-name\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</div>
                                <div class=\"profile-data-title\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "typeUser", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"profile-controls\">
                                <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfileAdmin");
        echo "\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
        echo "\" class=\"profile-control-right\"><span class=\"fa fa-envelope\"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li class=\"active\" >
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logpage");
        echo "\">
                            <span class=\"fa fa-dashboard\"></span> 
                            <span class=\"xn-text\">Dashboard</span>
                        </a>
                    </li>

                    <!-- Menu Navigation pour Administrateur -->

                    ";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 58
            echo "                        ";
            if (twig_in_filter("ROLE_ENSEIGNANT", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 59
                echo "                           
                            <!-- Gestion des classes -->
                            <li class=\"xn-openable GC\">
                                <a href=\"#\">
                                    <span class=\"fa fa-users\"></span> 
                                    <span class=\"xn-text\">Gestion des Classes</span>
                                </a>
                                <ul>
                                    <li class=\"listClasse\">
                                        <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enseignant_liste_classes", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                            <span class=\"xn-text\">Liste des Classes </span>
                                        </a>
                                    </li>
                                    <li class=\"prgmAnn\">
                                        <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("matiere_program_annual_add", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                            <span class=\"xn-text\">Programme Annuel </span>
                                        </a>
                                    </li>
                                    <li class=\"showTravail\">
                                        <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_travail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                            <span class=\"xn-text\">Travail à réaliser </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Gestion des absences/retard -->
                            <li class=\"abs\">
                                <a href=\"";
                // line 86
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_index");
                echo "\">
                                    <span class=\"fa fa-check-square-o\"></span> 
                                    <span class=\"xn-text\">Gestion des Retards et absences</span>
                                </a>
                            </li>
                            <!-- Gestion des emplois du temps -->
                            <li class=\"xn-openable plan\">
                                <a href=\"#\">
                                    <span class=\"fa fa-table\">
                                    </span> 
                                    <span class=\"xn-text\">Gestion des Emplois de temps</span>
                                </a>
                                <ul>
                                    <li class=\"pl\">
                                        <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("program_show_enseignant", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                            <span class=\"xn-text\">Mon Emploi du temps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                             <!-- Messagerie -->
                            <li class=\"msg\">
                                <a href=\"";
                // line 108
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
                echo "\">
                                    <span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span>
                                </a>
                                <div class=\"informer informer-danger\">";
                // line 111
                echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
                echo "</div>
                            </li>
                           
                        ";
            }
            // line 115
            echo "                    ";
        }
        // line 116
        echo "
                    <!-- Fin Menu Navigation pour Enseignant -->

                    <!-- Menu Navigation pour Administrateur -->

                    ";
        // line 121
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 122
            echo "                        ";
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 123
                echo "                            <!-- Gestion des élèves -->
                            <li class=\"xn-openable eleve\">
                                <a href=\"#\"><span class=\"fa fa-graduation-cap\"></span> <span class=\"xn-text\">Gestion des Eleves</span></a>
                                <ul>
                                    <li class=\"addEl\"><a href=\"";
                // line 127
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addEleve");
                echo "\"><span class=\"xn-text\">Ajouter Eleve</span></a></li>
                                    <li class=\"listEl\"><a href=\"";
                // line 128
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEleves");
                echo "\"><span class=\"xn-text\">Liste des eleves </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des parents -->
                            <li class=\"xn-openable parent\">
                                <a href=\"#\"><span class=\"fa fa-male\"></span> <span class=\"xn-text\">Gestion des Parents</span></a>
                                <ul>
                                    <li class=\"addPar\"><a href=\"";
                // line 136
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addParental");
                echo "\"><span class=\"xn-text\">Ajouter Parent</span></a></li>
                                    <li class=\"listPar\"><a href=\"";
                // line 137
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listParentals");
                echo "\"><span class=\"xn-text\">Liste des Parents </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des enseignants -->
                            <li class=\"xn-openable ens\">
                                <a href=\"#\"><span class=\"fa fa-briefcase\"></span> <span class=\"xn-text\">Gestion des Enseignants</span></a>
                                <ul>
                                    <li class=\"addEns\"><a href=\"";
                // line 145
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addEnseignant");
                echo "\"><span class=\"xn-text\">Ajouter Enseignant</span></a></li>
                                    <li class=\"listEns\"><a href=\"";
                // line 146
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
                echo "\"><span class=\"xn-text\">Liste des Enseignants </span></a></li>
                                </ul>
                            </li>
                            <!-- <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-book\"></span> <span class=\"xn-text\">Gestion des Matieres</span></a>
                                <ul>
                                    <li><a href=\"#\"><span class=\"xn-text\">Ajouter Matiere</span></a></li>
                                    <li><a href=\"dashboard.html\"><span class=\"xn-text\">Liste des Matieres </span></a></li>
                                </ul>
                            </li> -->

                            <!-- Gestion des classes -->
                            <li class=\"xn-openable classe\">
                                <a href=\"#\"><span class=\"fa fa-users\"></span> <span class=\"xn-text\">Gestion des Classes</span></a>
                                <ul>
                                    <li class=\"addCl\"><a href=\"";
                // line 161
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addClasse");
                echo "\"><span class=\"xn-text\">Ajouter Classe</span></a></li>
                                    <li class=\"listCl\"><a href=\"";
                // line 162
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listClasses");
                echo "\"><span class=\"xn-text\">Liste des Classes </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des emplois du temps -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Gestion des Emplois de temps</span></a>
                                <ul>
                                    <li><a href=\"#\"><span class=\"xn-text\">Ajouter Emploi de temps</span></a></li>
                                    <li><a href=\"#\"><span class=\"xn-text\">Liste des Emplois de temps </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des salles -->
                            <li class=\"xn-openable salle\">
                                <a href=\"#\"><span class=\"fa fa-th\"></span> <span class=\"xn-text\">Gestion des Salles</span></a>
                                <ul>
                                    <li class=\"addSalle\"><a href=\"";
                // line 179
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addSalle");
                echo "\"><span class=\"xn-text\">Ajouter Salle</span></a></li>
                                    <li class=\"listSalle\"><a href=\"";
                // line 180
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listSalles");
                echo "\"><span class=\"xn-text\">Liste des Salles </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des absences/retard -->
                            <li><a href=\"#\"><span class=\"fa fa-check-square-o\"></span> <span class=\"xn-text\">Gestion des Retards et absences</span></a></li>

                            <!-- Transport -->
                            <li class=\"xn-openable trans\">
                                <a href=\"#\"><span class=\"fa fa-bus\"></span> <span class=\"xn-text\">Transport</span></a>
                                <ul>
                                    <li class=\"addTrans\"><a href=\"";
                // line 191
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addTransport");
                echo "\"><span class=\"xn-text\">Ajouter Transport</span></a></li>
                                    <li class=\"listTrans\"><a href=\"";
                // line 192
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listTransports");
                echo "\"><span class=\"xn-text\">Liste des Transports </span></a></li>
                                </ul>
                            </li>

                            <!-- Paiement -->
                            <li><a href=\"#\"><span class=\"fa fa-money\"></span> <span class=\"xn-text\">Payement</span></a></li>

                            <!-- Messagerie -->
                            <li class=\"msg\"><a href=\"";
                // line 200
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
                echo "\"><span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span></a><div class=\"informer informer-danger\">";
                echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
                echo "</div></li>

                            <!-- Ressources pédagogiques -->
                            <li><a href=\"#\"><span class=\"fa fa-leanpub\"></span> <span class=\"xn-text\">Ressources pédagogiques</span></a></li>

                            <!-- Planning des examens -->
                            <li><a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Plannings des examens</span></a></li>

                            <!-- Menu cantine -->
                            <li class=\"xn-openable menu\">
                                <a href=\"#\"><span class=\"fa fa-cutlery\"></span> <span class=\"xn-text\">Menu de cantine</span></a>
                                <ul>
                                    <li class=\"addMenu\"><a href=\"";
                // line 212
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMenu");
                echo "\"><span class=\"xn-text\">Ajouter Menu</span></a></li>
                                    <li class=\"listMenu\"><a href=\"";
                // line 213
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMenus");
                echo "\"><span class=\"xn-text\">Liste des Menus </span></a></li>
                                </ul>
                            </li>

                            <!-- Bulletin -->
                            <li><a href=\"#\"><span class=\"fa fa-check\"></span> <span class=\"xn-text\">Bulletin</span></a></li>
                        ";
            }
            // line 219
            echo "        
                    ";
        }
        // line 221
        echo "                    
                    <!-- Fin Menu Navigation pour Administrateur -->
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->




            <!-- PAGE CONTENT -->
            <div class=\"page-content\">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class=\"x-navigation x-navigation-horizontal x-navigation-panel\">
                    <!-- TOGGLE NAVIGATION -->
                    <li class=\"xn-icon-button\">
                        <a href=\"#\" class=\"x-navigation-minimize\"><span class=\"fa fa-dedent\"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class=\"xn-search\">
                        <form role=\"form\">
                            <input type=\"text\" name=\"search\" placeholder=\"Search...\"/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->                    
                    <!-- POWER OFF -->
                    <li class=\"xn-icon-button pull-right last\">
                        <a href=\"#\"><span class=\"fa fa-power-off\"></span></a>
                        <ul class=\"xn-drop-left animated zoomIn\">
                            <li><a href=\"lockScreen\"><span class=\"fa fa-lock\"></span> Lock Screen</a></li>
                            <li><a href=\"#\" class=\"mb-control\" data-box=\"#mb-signout\"><span class=\"fa fa-sign-out\"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                    <!-- MESSAGES -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"fa fa-comments\"></span></a>
                        <div class=\"informer informer-danger\">";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo "</div>
                        <div class=\"panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><span class=\"fa fa-comments\"></span> Messages</h3>                                
                                <div class=\"pull-right\">
                                    <span class=\"label label-danger\">";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo " new</span>
                                </div>
                            </div>
                            <div class=\"panel-body list-group list-group-contacts scroll\" style=\"height: 200px;\">
                                ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inbox"]) ? $context["inbox"] : $this->getContext($context, "inbox")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 270
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_show", array("id" => $this->getAttribute($context["msg"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">
                                        <div class=\"list-group-status status-online\"></div>
                                        <img src=\"";
            // line 272
            if ($this->getAttribute($this->getAttribute($context["msg"], "createdBy", array()), "photo", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute($context["msg"], "createdBy", array()), "photo", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
            }
            echo "\" class=\"pull-left\" alt=\"John Doe\"/>
                                        <span class=\"contacts-title\">";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "createdBy", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "createdBy", array()), "prenom", array()), "html", null, true);
            echo "</span>
                                        <p>";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "subject", array()), "html", null, true);
            echo "</p>
                                    </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                            </div>     
                            <div class=\"panel-footer text-center\">
                                <a href=\"pages-messages.html\">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"fa fa-tasks\"></span></a>
                        <div class=\"informer informer-warning\">3</div>
                        <div class=\"panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><span class=\"fa fa-tasks\"></span> Tasks</h3>                                
                                <div class=\"pull-right\">
                                    <span class=\"label label-warning\">3 active</span>
                                </div>
                            </div>
                            <div class=\"panel-body list-group scroll\" style=\"height: 200px;\">                                
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%;\">50%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 25 Sep 2015 / 50%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Aenean ac cursus</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%;\">80%</div>
                                    </div>
                                    <small class=\"text-muted\">Dmitry Ivaniuk, 24 Sep 2015 / 80%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%;\">95%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 23 Sep 2015 / 95%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class=\"progress progress-small\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\">100%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 21 Sep 2015 /</small><small class=\"text-success\"> Done</small>
                                </a>                                
                            </div>     
                            <div class=\"panel-footer text-center\">
                                <a href=\"pages-tasks.html\">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                    <!-- LANG BAR -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"flag flag-fr\"></span></a>
                        <ul class=\"xn-drop-left xn-drop-white animated zoomIn\">
                            <li><a href=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\"><span class=\"flag flag-fr\"></span> Français</a></li>
                            <li><a href=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "ar"))), "html", null, true);
        echo "\"><span class=\"flag flag-ar\"></span> العربية</a></li>
                        </ul>                        
                    </li> 
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class=\"breadcrumb\">
                    <li><a href=\"#\">Accueil</a></li>                    
                    <li class=\"active\">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->     

                
                ";
        // line 351
        $this->displayBlock('body', $context, $blocks);
        // line 352
        echo "
            </div>
            </div>                  

            <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"";
        // line 367
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->





            
            

        
        <!-- ********************************************* -->



        <!-- START SCRIPTS -->

        <script type=\"text/javascript\">
            var path = \"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img"), "html", null, true);
        echo "\";
        </script>
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>        
        <script type=\"text/javascript\" src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/scrolltotop/scrolltopcontrol.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>       
        <!-- <script type=\"text/javascript\" src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/rickshaw/d3.v3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/rickshaw/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
 -->
        <script type='text/javascript' src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>                
        <script type='text/javascript' src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>                
        <script type=\"text/javascript\" src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/owl/owl.carousel.min.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type=\"text/javascript\" src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>        
        <script type=\"text/javascript\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
        
        <!-- <script type=\"text/javascript\" src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/demo_dashboard.js"), "html", null, true);
        echo "\"></script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        ";
        // line 428
        $this->displayBlock('javascripts', $context, $blocks);
        // line 430
        echo "
    </body>
</html>
";
        
        $__internal_f84d4b2aeb7bdb932064a4e13cecb9dc010cbfffc6a306c8292630ebae6a4f30->leave($__internal_f84d4b2aeb7bdb932064a4e13cecb9dc010cbfffc6a306c8292630ebae6a4f30_prof);

        
        $__internal_696124e9988e9b69e1a062092a290d6d5b6c82412b538fa69eb0a1f0e244fbcc->leave($__internal_696124e9988e9b69e1a062092a290d6d5b6c82412b538fa69eb0a1f0e244fbcc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4daee81cbc283670916f353402a0e7df56308e93076d2cea82bab9b27c63486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4daee81cbc283670916f353402a0e7df56308e93076d2cea82bab9b27c63486->enter($__internal_b4daee81cbc283670916f353402a0e7df56308e93076d2cea82bab9b27c63486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_162d73954255b4dd1ed56542e26cff8a995e7f492de7e603bfb8fff5a341d57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162d73954255b4dd1ed56542e26cff8a995e7f492de7e603bfb8fff5a341d57f->enter($__internal_162d73954255b4dd1ed56542e26cff8a995e7f492de7e603bfb8fff5a341d57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_162d73954255b4dd1ed56542e26cff8a995e7f492de7e603bfb8fff5a341d57f->leave($__internal_162d73954255b4dd1ed56542e26cff8a995e7f492de7e603bfb8fff5a341d57f_prof);

        
        $__internal_b4daee81cbc283670916f353402a0e7df56308e93076d2cea82bab9b27c63486->leave($__internal_b4daee81cbc283670916f353402a0e7df56308e93076d2cea82bab9b27c63486_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_007216cc9463ff615883ba195802752f48661bdc7641b61158e4c8e153ace007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007216cc9463ff615883ba195802752f48661bdc7641b61158e4c8e153ace007->enter($__internal_007216cc9463ff615883ba195802752f48661bdc7641b61158e4c8e153ace007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac72577f8364ef202fc28add5f4c155342e9dd0fca5210e5087ff3b1deaf13f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac72577f8364ef202fc28add5f4c155342e9dd0fca5210e5087ff3b1deaf13f0->enter($__internal_ac72577f8364ef202fc28add5f4c155342e9dd0fca5210e5087ff3b1deaf13f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac72577f8364ef202fc28add5f4c155342e9dd0fca5210e5087ff3b1deaf13f0->leave($__internal_ac72577f8364ef202fc28add5f4c155342e9dd0fca5210e5087ff3b1deaf13f0_prof);

        
        $__internal_007216cc9463ff615883ba195802752f48661bdc7641b61158e4c8e153ace007->leave($__internal_007216cc9463ff615883ba195802752f48661bdc7641b61158e4c8e153ace007_prof);

    }

    // line 351
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ee7a37e63ffdffaf0f36c7c27dfd0048d5524c85f60fec4bc2c0a0d2374ac63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee7a37e63ffdffaf0f36c7c27dfd0048d5524c85f60fec4bc2c0a0d2374ac63->enter($__internal_3ee7a37e63ffdffaf0f36c7c27dfd0048d5524c85f60fec4bc2c0a0d2374ac63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d65bc3dc562474465d009693e4f4c56ba651e0cf9138fdf64ee2c9e5a56a095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d65bc3dc562474465d009693e4f4c56ba651e0cf9138fdf64ee2c9e5a56a095->enter($__internal_2d65bc3dc562474465d009693e4f4c56ba651e0cf9138fdf64ee2c9e5a56a095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d65bc3dc562474465d009693e4f4c56ba651e0cf9138fdf64ee2c9e5a56a095->leave($__internal_2d65bc3dc562474465d009693e4f4c56ba651e0cf9138fdf64ee2c9e5a56a095_prof);

        
        $__internal_3ee7a37e63ffdffaf0f36c7c27dfd0048d5524c85f60fec4bc2c0a0d2374ac63->leave($__internal_3ee7a37e63ffdffaf0f36c7c27dfd0048d5524c85f60fec4bc2c0a0d2374ac63_prof);

    }

    // line 428
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5c270118c49ca30dd26356bf6b56edc5c5000b4f0d47b971ab2e782f2060719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c270118c49ca30dd26356bf6b56edc5c5000b4f0d47b971ab2e782f2060719->enter($__internal_a5c270118c49ca30dd26356bf6b56edc5c5000b4f0d47b971ab2e782f2060719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb028e00ac3dd2947c225232a0be8f53973cc19a12a765b3a340904da62616d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb028e00ac3dd2947c225232a0be8f53973cc19a12a765b3a340904da62616d4->enter($__internal_eb028e00ac3dd2947c225232a0be8f53973cc19a12a765b3a340904da62616d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 429
        echo "        ";
        
        $__internal_eb028e00ac3dd2947c225232a0be8f53973cc19a12a765b3a340904da62616d4->leave($__internal_eb028e00ac3dd2947c225232a0be8f53973cc19a12a765b3a340904da62616d4_prof);

        
        $__internal_a5c270118c49ca30dd26356bf6b56edc5c5000b4f0d47b971ab2e782f2060719->leave($__internal_a5c270118c49ca30dd26356bf6b56edc5c5000b4f0d47b971ab2e782f2060719_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  779 => 429,  770 => 428,  753 => 351,  736 => 6,  718 => 5,  705 => 430,  703 => 428,  697 => 425,  692 => 423,  688 => 422,  683 => 420,  676 => 416,  672 => 415,  667 => 413,  663 => 412,  659 => 411,  655 => 410,  651 => 409,  646 => 407,  642 => 406,  638 => 405,  634 => 404,  629 => 402,  625 => 401,  621 => 400,  614 => 396,  610 => 395,  606 => 394,  600 => 391,  573 => 367,  556 => 352,  554 => 351,  536 => 336,  532 => 335,  472 => 277,  463 => 274,  457 => 273,  449 => 272,  443 => 270,  439 => 269,  432 => 265,  424 => 260,  383 => 221,  379 => 219,  369 => 213,  365 => 212,  348 => 200,  337 => 192,  333 => 191,  319 => 180,  315 => 179,  295 => 162,  291 => 161,  273 => 146,  269 => 145,  258 => 137,  254 => 136,  243 => 128,  239 => 127,  233 => 123,  230 => 122,  228 => 121,  221 => 116,  218 => 115,  211 => 111,  205 => 108,  194 => 100,  177 => 86,  166 => 78,  158 => 73,  150 => 68,  139 => 59,  136 => 58,  134 => 57,  123 => 49,  114 => 43,  110 => 42,  104 => 39,  98 => 38,  88 => 35,  77 => 31,  57 => 13,  53 => 11,  51 => 10,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"{{ asset('css/theme-default.css') }}\"/>
        {% if (app.request.locale == 'ar') %}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-flipped.css\">
        {% endif %}
        
    </head>
    <body>


      <!-- START PAGE CONTAINER -->
        <div class=\"page-container\">
            
            <!-- START PAGE SIDEBAR -->
            <div class=\"page-sidebar\">
                <!-- START X-NAVIGATION -->
                <ul class=\"x-navigation\">
                    <li class=\"xn-logo\">
                        <a href=\"#\">SCHOOLIUM</a>
                        <a href=\"#\" class=\"x-navigation-control\"></a>
                    </li>
                    <li class=\"xn-profile\">
                        <a href=\"#\" class=\"profile-mini\">
                            <img src=\"{% if app.user.photo %}{{ asset('uploads/photos/' ~ app.user.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"Photo de profile\"/>
                        </a>
                        <div class=\"profile\">
                            <div class=\"profile-image\">
                                <img src=\"{% if app.user.photo %}{{ asset('uploads/photos/' ~ app.user.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"Photo de profile\"/>
                            </div>
                            <div class=\"profile-data\">
                                <div class=\"profile-data-name\">{{app.user.nom}} {{app.user.prenom}}</div>
                                <div class=\"profile-data-title\">{{app.user.typeUser}}</div>
                            </div>
                            <div class=\"profile-controls\">
                                <a href=\"{{ path('myProfileAdmin') }}\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                <a href=\"{{ path('message_inbox') }}\" class=\"profile-control-right\"><span class=\"fa fa-envelope\"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li class=\"active\" >
                        <a href=\"{{path('logpage')}}\">
                            <span class=\"fa fa-dashboard\"></span> 
                            <span class=\"xn-text\">Dashboard</span>
                        </a>
                    </li>

                    <!-- Menu Navigation pour Administrateur -->

                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {% if 'ROLE_ENSEIGNANT' in app.user.roles %}
                           
                            <!-- Gestion des classes -->
                            <li class=\"xn-openable GC\">
                                <a href=\"#\">
                                    <span class=\"fa fa-users\"></span> 
                                    <span class=\"xn-text\">Gestion des Classes</span>
                                </a>
                                <ul>
                                    <li class=\"listClasse\">
                                        <a href=\"{{ path('enseignant_liste_classes', {'id': app.user.id}) }}\">
                                            <span class=\"xn-text\">Liste des Classes </span>
                                        </a>
                                    </li>
                                    <li class=\"prgmAnn\">
                                        <a href=\"{{path('matiere_program_annual_add',{ 'id': app.user.id})}}\">
                                            <span class=\"xn-text\">Programme Annuel </span>
                                        </a>
                                    </li>
                                    <li class=\"showTravail\">
                                        <a href=\"{{path('show_travail',{ 'id': app.user.id})}}\">
                                            <span class=\"xn-text\">Travail à réaliser </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Gestion des absences/retard -->
                            <li class=\"abs\">
                                <a href=\"{{path('absence_index')}}\">
                                    <span class=\"fa fa-check-square-o\"></span> 
                                    <span class=\"xn-text\">Gestion des Retards et absences</span>
                                </a>
                            </li>
                            <!-- Gestion des emplois du temps -->
                            <li class=\"xn-openable plan\">
                                <a href=\"#\">
                                    <span class=\"fa fa-table\">
                                    </span> 
                                    <span class=\"xn-text\">Gestion des Emplois de temps</span>
                                </a>
                                <ul>
                                    <li class=\"pl\">
                                        <a href=\"{{ path('program_show_enseignant', { 'id': app.user.id}) }}\">
                                            <span class=\"xn-text\">Mon Emploi du temps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                             <!-- Messagerie -->
                            <li class=\"msg\">
                                <a href=\"{{ path('message_inbox') }}\">
                                    <span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span>
                                </a>
                                <div class=\"informer informer-danger\">{{newMessages}}</div>
                            </li>
                           
                        {% endif %}
                    {% endif %}

                    <!-- Fin Menu Navigation pour Enseignant -->

                    <!-- Menu Navigation pour Administrateur -->

                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                            <!-- Gestion des élèves -->
                            <li class=\"xn-openable eleve\">
                                <a href=\"#\"><span class=\"fa fa-graduation-cap\"></span> <span class=\"xn-text\">Gestion des Eleves</span></a>
                                <ul>
                                    <li class=\"addEl\"><a href=\"{{ path('addEleve') }}\"><span class=\"xn-text\">Ajouter Eleve</span></a></li>
                                    <li class=\"listEl\"><a href=\"{{ path('listEleves') }}\"><span class=\"xn-text\">Liste des eleves </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des parents -->
                            <li class=\"xn-openable parent\">
                                <a href=\"#\"><span class=\"fa fa-male\"></span> <span class=\"xn-text\">Gestion des Parents</span></a>
                                <ul>
                                    <li class=\"addPar\"><a href=\"{{ path('addParental') }}\"><span class=\"xn-text\">Ajouter Parent</span></a></li>
                                    <li class=\"listPar\"><a href=\"{{ path('listParentals') }}\"><span class=\"xn-text\">Liste des Parents </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des enseignants -->
                            <li class=\"xn-openable ens\">
                                <a href=\"#\"><span class=\"fa fa-briefcase\"></span> <span class=\"xn-text\">Gestion des Enseignants</span></a>
                                <ul>
                                    <li class=\"addEns\"><a href=\"{{ path('addEnseignant') }}\"><span class=\"xn-text\">Ajouter Enseignant</span></a></li>
                                    <li class=\"listEns\"><a href=\"{{ path('listEnseignants') }}\"><span class=\"xn-text\">Liste des Enseignants </span></a></li>
                                </ul>
                            </li>
                            <!-- <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-book\"></span> <span class=\"xn-text\">Gestion des Matieres</span></a>
                                <ul>
                                    <li><a href=\"#\"><span class=\"xn-text\">Ajouter Matiere</span></a></li>
                                    <li><a href=\"dashboard.html\"><span class=\"xn-text\">Liste des Matieres </span></a></li>
                                </ul>
                            </li> -->

                            <!-- Gestion des classes -->
                            <li class=\"xn-openable classe\">
                                <a href=\"#\"><span class=\"fa fa-users\"></span> <span class=\"xn-text\">Gestion des Classes</span></a>
                                <ul>
                                    <li class=\"addCl\"><a href=\"{{ path('addClasse') }}\"><span class=\"xn-text\">Ajouter Classe</span></a></li>
                                    <li class=\"listCl\"><a href=\"{{ path('listClasses') }}\"><span class=\"xn-text\">Liste des Classes </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des emplois du temps -->
                            <li class=\"xn-openable\">
                                <a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Gestion des Emplois de temps</span></a>
                                <ul>
                                    <li><a href=\"#\"><span class=\"xn-text\">Ajouter Emploi de temps</span></a></li>
                                    <li><a href=\"#\"><span class=\"xn-text\">Liste des Emplois de temps </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des salles -->
                            <li class=\"xn-openable salle\">
                                <a href=\"#\"><span class=\"fa fa-th\"></span> <span class=\"xn-text\">Gestion des Salles</span></a>
                                <ul>
                                    <li class=\"addSalle\"><a href=\"{{ path('addSalle') }}\"><span class=\"xn-text\">Ajouter Salle</span></a></li>
                                    <li class=\"listSalle\"><a href=\"{{ path('listSalles') }}\"><span class=\"xn-text\">Liste des Salles </span></a></li>
                                </ul>
                            </li>

                            <!-- Gestion des absences/retard -->
                            <li><a href=\"#\"><span class=\"fa fa-check-square-o\"></span> <span class=\"xn-text\">Gestion des Retards et absences</span></a></li>

                            <!-- Transport -->
                            <li class=\"xn-openable trans\">
                                <a href=\"#\"><span class=\"fa fa-bus\"></span> <span class=\"xn-text\">Transport</span></a>
                                <ul>
                                    <li class=\"addTrans\"><a href=\"{{ path('addTransport') }}\"><span class=\"xn-text\">Ajouter Transport</span></a></li>
                                    <li class=\"listTrans\"><a href=\"{{ path('listTransports') }}\"><span class=\"xn-text\">Liste des Transports </span></a></li>
                                </ul>
                            </li>

                            <!-- Paiement -->
                            <li><a href=\"#\"><span class=\"fa fa-money\"></span> <span class=\"xn-text\">Payement</span></a></li>

                            <!-- Messagerie -->
                            <li class=\"msg\"><a href=\"{{ path('message_inbox') }}\"><span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span></a><div class=\"informer informer-danger\">{{newMessages}}</div></li>

                            <!-- Ressources pédagogiques -->
                            <li><a href=\"#\"><span class=\"fa fa-leanpub\"></span> <span class=\"xn-text\">Ressources pédagogiques</span></a></li>

                            <!-- Planning des examens -->
                            <li><a href=\"#\"><span class=\"fa fa-table\"></span> <span class=\"xn-text\">Plannings des examens</span></a></li>

                            <!-- Menu cantine -->
                            <li class=\"xn-openable menu\">
                                <a href=\"#\"><span class=\"fa fa-cutlery\"></span> <span class=\"xn-text\">Menu de cantine</span></a>
                                <ul>
                                    <li class=\"addMenu\"><a href=\"{{ path('addMenu') }}\"><span class=\"xn-text\">Ajouter Menu</span></a></li>
                                    <li class=\"listMenu\"><a href=\"{{ path('listMenus') }}\"><span class=\"xn-text\">Liste des Menus </span></a></li>
                                </ul>
                            </li>

                            <!-- Bulletin -->
                            <li><a href=\"#\"><span class=\"fa fa-check\"></span> <span class=\"xn-text\">Bulletin</span></a></li>
                        {% endif %}        
                    {% endif %}
                    
                    <!-- Fin Menu Navigation pour Administrateur -->
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->




            <!-- PAGE CONTENT -->
            <div class=\"page-content\">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class=\"x-navigation x-navigation-horizontal x-navigation-panel\">
                    <!-- TOGGLE NAVIGATION -->
                    <li class=\"xn-icon-button\">
                        <a href=\"#\" class=\"x-navigation-minimize\"><span class=\"fa fa-dedent\"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class=\"xn-search\">
                        <form role=\"form\">
                            <input type=\"text\" name=\"search\" placeholder=\"Search...\"/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->                    
                    <!-- POWER OFF -->
                    <li class=\"xn-icon-button pull-right last\">
                        <a href=\"#\"><span class=\"fa fa-power-off\"></span></a>
                        <ul class=\"xn-drop-left animated zoomIn\">
                            <li><a href=\"lockScreen\"><span class=\"fa fa-lock\"></span> Lock Screen</a></li>
                            <li><a href=\"#\" class=\"mb-control\" data-box=\"#mb-signout\"><span class=\"fa fa-sign-out\"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                    <!-- MESSAGES -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"fa fa-comments\"></span></a>
                        <div class=\"informer informer-danger\">{{newMessages}}</div>
                        <div class=\"panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><span class=\"fa fa-comments\"></span> Messages</h3>                                
                                <div class=\"pull-right\">
                                    <span class=\"label label-danger\">{{newMessages}} new</span>
                                </div>
                            </div>
                            <div class=\"panel-body list-group list-group-contacts scroll\" style=\"height: 200px;\">
                                {% for msg in inbox %}
                                    <a href=\"{{ path('message_show',{'id':msg.id})}}\" class=\"list-group-item\">
                                        <div class=\"list-group-status status-online\"></div>
                                        <img src=\"{% if msg.createdBy.photo %}{{asset('uploads/photos/'~ msg.createdBy.photo)}}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" class=\"pull-left\" alt=\"John Doe\"/>
                                        <span class=\"contacts-title\">{{msg.createdBy.nom}} {{msg.createdBy.prenom}}</span>
                                        <p>{{msg.subject}}</p>
                                    </a>
                                {% endfor %}
                            </div>     
                            <div class=\"panel-footer text-center\">
                                <a href=\"pages-messages.html\">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"fa fa-tasks\"></span></a>
                        <div class=\"informer informer-warning\">3</div>
                        <div class=\"panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><span class=\"fa fa-tasks\"></span> Tasks</h3>                                
                                <div class=\"pull-right\">
                                    <span class=\"label label-warning\">3 active</span>
                                </div>
                            </div>
                            <div class=\"panel-body list-group scroll\" style=\"height: 200px;\">                                
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%;\">50%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 25 Sep 2015 / 50%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Aenean ac cursus</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%;\">80%</div>
                                    </div>
                                    <small class=\"text-muted\">Dmitry Ivaniuk, 24 Sep 2015 / 80%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%;\">95%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 23 Sep 2015 / 95%</small>
                                </a>
                                <a class=\"list-group-item\" href=\"#\">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class=\"progress progress-small\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\">100%</div>
                                    </div>
                                    <small class=\"text-muted\">John Doe, 21 Sep 2015 /</small><small class=\"text-success\"> Done</small>
                                </a>                                
                            </div>     
                            <div class=\"panel-footer text-center\">
                                <a href=\"pages-tasks.html\">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                    <!-- LANG BAR -->
                    <li class=\"xn-icon-button pull-right\">
                        <a href=\"#\"><span class=\"flag flag-fr\"></span></a>
                        <ul class=\"xn-drop-left xn-drop-white animated zoomIn\">
                            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\"><span class=\"flag flag-fr\"></span> Français</a></li>
                            <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'ar'})) }}\"><span class=\"flag flag-ar\"></span> العربية</a></li>
                        </ul>                        
                    </li> 
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class=\"breadcrumb\">
                    <li><a href=\"#\">Accueil</a></li>                    
                    <li class=\"active\">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->     

                
                {% block body %}{% endblock %}

            </div>
            </div>                  

            <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->





            
            

        
        <!-- ********************************************* -->



        <!-- START SCRIPTS -->

        <script type=\"text/javascript\">
            var path = \"{{ asset(\"img\") }}\";
        </script>
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/jquery/jquery.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/jquery/jquery-ui.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/bootstrap/bootstrap.min.js') }}\"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src=\"{{ asset('js/plugins/icheck/icheck.min.js') }}\"></script>        
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/scrolltotop/scrolltopcontrol.js') }}\"></script>
        
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/morris/raphael-min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/morris/morris.min.js') }}\"></script>       
        <!-- <script type=\"text/javascript\" src=\"{{ asset('js/plugins/rickshaw/d3.v3.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/rickshaw/rickshaw.min.js') }}\"></script>
 -->
        <script type='text/javascript' src=\"{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
        <script type='text/javascript' src=\"{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>                
        <script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-datepicker.js') }}\"></script>                
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/owl/owl.carousel.min.js') }}\"></script> 
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
        
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/moment.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}\"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type=\"text/javascript\" src=\"{{ asset('js/settings.js') }}\"></script>
        
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins.js') }}\"></script>        
        <script type=\"text/javascript\" src=\"{{ asset('js/actions.js') }}\"></script>
        
        <!-- <script type=\"text/javascript\" src=\"{{ asset('js/demo_dashboard.js') }}\"></script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "base2.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/base2.html.twig");
    }
}
