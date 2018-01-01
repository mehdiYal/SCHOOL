<?php

/* baseParent.html.twig */
class __TwigTemplate_0eb4d41b520e4da339751459a9b6880153468e115039136af0877dd169998b56 extends Twig_Template
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
        $__internal_d319fa9c586fe2fd3b4ffd4636cc617a14e724262241f9695a1800191cd55ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d319fa9c586fe2fd3b4ffd4636cc617a14e724262241f9695a1800191cd55ac1->enter($__internal_d319fa9c586fe2fd3b4ffd4636cc617a14e724262241f9695a1800191cd55ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseParent.html.twig"));

        $__internal_4e864b111d708e8dc04650d8b6194a6c2fb7bd124aa5c2a3221361e8be2d4c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e864b111d708e8dc04650d8b6194a6c2fb7bd124aa5c2a3221361e8be2d4c27->enter($__internal_4e864b111d708e8dc04650d8b6194a6c2fb7bd124aa5c2a3221361e8be2d4c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseParent.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfileParental");
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

                    <!-- Messagerie -->
                    <li class=\"msg\">
                        <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
        echo "\">
                            <span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span>
                        </a>
                        <div class=\"informer informer-danger\">";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo "</div>
                    </li>
                    
                    <!-- Informations -->
                    <li class=\"info\">
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("travailParent");
        echo "\">
                            <span class=\"fa fa-info-circle\"></span> <span class=\"xn-text\">Informations</span>
                        </a>
                        <div class=\"informer informer-danger\">3</div>
                    </li>

                    <!-- Abonnements -->
                    <li>
                        <a href=\"\">
                            <span class=\"fa fa-money\"></span> <span class=\"xn-text\">Mes abonnements</span>
                        </a>
                    </li>
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
        // line 114
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo "</div>
                        <div class=\"panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><span class=\"fa fa-comments\"></span> Messages</h3>                                
                                <div class=\"pull-right\">
                                    <span class=\"label label-danger\">";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo " new</span>
                                </div>
                            </div>
                            <div class=\"panel-body list-group list-group-contacts scroll\" style=\"height: 200px;\">
                                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inbox"]) ? $context["inbox"] : $this->getContext($context, "inbox")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 124
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_show", array("id" => $this->getAttribute($context["msg"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">
                                        <div class=\"list-group-status status-online\"></div>
                                        <img src=\"";
            // line 126
            if ($this->getAttribute($this->getAttribute($context["msg"], "createdBy", array()), "photo", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute($context["msg"], "createdBy", array()), "photo", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
            }
            echo "\" class=\"pull-left\" alt=\"John Doe\"/>
                                        <span class=\"contacts-title\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "createdBy", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "createdBy", array()), "prenom", array()), "html", null, true);
            echo "</span>
                                        <p>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "subject", array()), "html", null, true);
            echo "</p>
                                    </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
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
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\"><span class=\"flag flag-fr\"></span> Français</a></li>
                            <li><a href=\"";
        // line 190
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
        // line 205
        $this->displayBlock('body', $context, $blocks);
        // line 206
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
        // line 221
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
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img"), "html", null, true);
        echo "\";
        </script>
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>        
        <script type=\"text/javascript\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/scrolltotop/scrolltopcontrol.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>       
        <!-- <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/rickshaw/d3.v3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/rickshaw/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
 -->
        <script type='text/javascript' src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>                
        <script type='text/javascript' src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>                
        <script type=\"text/javascript\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/owl/owl.carousel.min.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>        
        <script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
        
        <!-- <script type=\"text/javascript\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/demo_dashboard.js"), "html", null, true);
        echo "\"></script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        ";
        // line 282
        $this->displayBlock('javascripts', $context, $blocks);
        // line 284
        echo "
    </body>
</html>
";
        
        $__internal_d319fa9c586fe2fd3b4ffd4636cc617a14e724262241f9695a1800191cd55ac1->leave($__internal_d319fa9c586fe2fd3b4ffd4636cc617a14e724262241f9695a1800191cd55ac1_prof);

        
        $__internal_4e864b111d708e8dc04650d8b6194a6c2fb7bd124aa5c2a3221361e8be2d4c27->leave($__internal_4e864b111d708e8dc04650d8b6194a6c2fb7bd124aa5c2a3221361e8be2d4c27_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e583d87c9c1acfa37594955f4e1672c07cea2252a029598b42a61374da46fd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e583d87c9c1acfa37594955f4e1672c07cea2252a029598b42a61374da46fd74->enter($__internal_e583d87c9c1acfa37594955f4e1672c07cea2252a029598b42a61374da46fd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e714cb2f1b8db95fd143eb33d0d53fd00afd1f414c9ab1841d93409b3a204fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e714cb2f1b8db95fd143eb33d0d53fd00afd1f414c9ab1841d93409b3a204fe5->enter($__internal_e714cb2f1b8db95fd143eb33d0d53fd00afd1f414c9ab1841d93409b3a204fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e714cb2f1b8db95fd143eb33d0d53fd00afd1f414c9ab1841d93409b3a204fe5->leave($__internal_e714cb2f1b8db95fd143eb33d0d53fd00afd1f414c9ab1841d93409b3a204fe5_prof);

        
        $__internal_e583d87c9c1acfa37594955f4e1672c07cea2252a029598b42a61374da46fd74->leave($__internal_e583d87c9c1acfa37594955f4e1672c07cea2252a029598b42a61374da46fd74_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb22fb9847543369b4173f60e764a7fe0bcf353a5a1a42e1eccd0941a32e81b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb22fb9847543369b4173f60e764a7fe0bcf353a5a1a42e1eccd0941a32e81b3->enter($__internal_eb22fb9847543369b4173f60e764a7fe0bcf353a5a1a42e1eccd0941a32e81b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b1f5a717a8a14a1c11ac7169e8e20a30a105b1945cc4988f2efe44c8d4708466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f5a717a8a14a1c11ac7169e8e20a30a105b1945cc4988f2efe44c8d4708466->enter($__internal_b1f5a717a8a14a1c11ac7169e8e20a30a105b1945cc4988f2efe44c8d4708466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b1f5a717a8a14a1c11ac7169e8e20a30a105b1945cc4988f2efe44c8d4708466->leave($__internal_b1f5a717a8a14a1c11ac7169e8e20a30a105b1945cc4988f2efe44c8d4708466_prof);

        
        $__internal_eb22fb9847543369b4173f60e764a7fe0bcf353a5a1a42e1eccd0941a32e81b3->leave($__internal_eb22fb9847543369b4173f60e764a7fe0bcf353a5a1a42e1eccd0941a32e81b3_prof);

    }

    // line 205
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b585b081163ea8423fdfcffe98b278bb567613d884debc49fb5180b7c695c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b585b081163ea8423fdfcffe98b278bb567613d884debc49fb5180b7c695c8d->enter($__internal_6b585b081163ea8423fdfcffe98b278bb567613d884debc49fb5180b7c695c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_471cad092f8a7c12318d5062eed29121af9acb86a32833dbbb52a732fce22115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471cad092f8a7c12318d5062eed29121af9acb86a32833dbbb52a732fce22115->enter($__internal_471cad092f8a7c12318d5062eed29121af9acb86a32833dbbb52a732fce22115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_471cad092f8a7c12318d5062eed29121af9acb86a32833dbbb52a732fce22115->leave($__internal_471cad092f8a7c12318d5062eed29121af9acb86a32833dbbb52a732fce22115_prof);

        
        $__internal_6b585b081163ea8423fdfcffe98b278bb567613d884debc49fb5180b7c695c8d->leave($__internal_6b585b081163ea8423fdfcffe98b278bb567613d884debc49fb5180b7c695c8d_prof);

    }

    // line 282
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_727001d52877f95990ec0a04e785808b110865e2737869ea618b2f807391c16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727001d52877f95990ec0a04e785808b110865e2737869ea618b2f807391c16a->enter($__internal_727001d52877f95990ec0a04e785808b110865e2737869ea618b2f807391c16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c57a6ea4d92b0cfacd28e7ccf09f7ae37e4236d05addc4aab9ed3e4324ee334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c57a6ea4d92b0cfacd28e7ccf09f7ae37e4236d05addc4aab9ed3e4324ee334->enter($__internal_3c57a6ea4d92b0cfacd28e7ccf09f7ae37e4236d05addc4aab9ed3e4324ee334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 283
        echo "        ";
        
        $__internal_3c57a6ea4d92b0cfacd28e7ccf09f7ae37e4236d05addc4aab9ed3e4324ee334->leave($__internal_3c57a6ea4d92b0cfacd28e7ccf09f7ae37e4236d05addc4aab9ed3e4324ee334_prof);

        
        $__internal_727001d52877f95990ec0a04e785808b110865e2737869ea618b2f807391c16a->leave($__internal_727001d52877f95990ec0a04e785808b110865e2737869ea618b2f807391c16a_prof);

    }

    public function getTemplateName()
    {
        return "baseParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 283,  546 => 282,  529 => 205,  512 => 6,  494 => 5,  481 => 284,  479 => 282,  473 => 279,  468 => 277,  464 => 276,  459 => 274,  452 => 270,  448 => 269,  443 => 267,  439 => 266,  435 => 265,  431 => 264,  427 => 263,  422 => 261,  418 => 260,  414 => 259,  410 => 258,  405 => 256,  401 => 255,  397 => 254,  390 => 250,  386 => 249,  382 => 248,  376 => 245,  349 => 221,  332 => 206,  330 => 205,  312 => 190,  308 => 189,  248 => 131,  239 => 128,  233 => 127,  225 => 126,  219 => 124,  215 => 123,  208 => 119,  200 => 114,  148 => 65,  140 => 60,  134 => 57,  123 => 49,  114 => 43,  110 => 42,  104 => 39,  98 => 38,  88 => 35,  77 => 31,  57 => 13,  53 => 11,  51 => 10,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                                <a href=\"{{ path('myProfileParental') }}\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
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

                    <!-- Messagerie -->
                    <li class=\"msg\">
                        <a href=\"{{ path('message_inbox') }}\">
                            <span class=\"fa fa-envelope-o\"></span> <span class=\"xn-text\">Messagerie</span>
                        </a>
                        <div class=\"informer informer-danger\">{{newMessages}}</div>
                    </li>
                    
                    <!-- Informations -->
                    <li class=\"info\">
                        <a href=\"{{path('travailParent')}}\">
                            <span class=\"fa fa-info-circle\"></span> <span class=\"xn-text\">Informations</span>
                        </a>
                        <div class=\"informer informer-danger\">3</div>
                    </li>

                    <!-- Abonnements -->
                    <li>
                        <a href=\"\">
                            <span class=\"fa fa-money\"></span> <span class=\"xn-text\">Mes abonnements</span>
                        </a>
                    </li>
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
", "baseParent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/baseParent.html.twig");
    }
}
