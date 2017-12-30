<?php

/* message/adressBook.html.twig */
class __TwigTemplate_433fe8a098fb9c8d21361f25145dce98e4f0ea53ec6c6868ba16b80100236b3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((twig_in_filter("ROLE_PARENT", $this->getAttribute($this->getAttribute(        // line 1
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) ? ("baseParent.html.twig") : ("base2.html.twig")), "message/adressBook.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6394d6c0a1ea47a153623e29013402fb5e4d7760f1c5351deb29ea875263648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6394d6c0a1ea47a153623e29013402fb5e4d7760f1c5351deb29ea875263648->enter($__internal_a6394d6c0a1ea47a153623e29013402fb5e4d7760f1c5351deb29ea875263648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/adressBook.html.twig"));

        $__internal_86e99320e311b32cd41f1159efee372d8d7a5278e6392448e4633c5dbba5a3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e99320e311b32cd41f1159efee372d8d7a5278e6392448e4633c5dbba5a3fc->enter($__internal_86e99320e311b32cd41f1159efee372d8d7a5278e6392448e4633c5dbba5a3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/adressBook.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6394d6c0a1ea47a153623e29013402fb5e4d7760f1c5351deb29ea875263648->leave($__internal_a6394d6c0a1ea47a153623e29013402fb5e4d7760f1c5351deb29ea875263648_prof);

        
        $__internal_86e99320e311b32cd41f1159efee372d8d7a5278e6392448e4633c5dbba5a3fc->leave($__internal_86e99320e311b32cd41f1159efee372d8d7a5278e6392448e4633c5dbba5a3fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1de5675fbadec2b859369b3a3b7ae30d2014101a43d01c90325ea19d247ee66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de5675fbadec2b859369b3a3b7ae30d2014101a43d01c90325ea19d247ee66f->enter($__internal_1de5675fbadec2b859369b3a3b7ae30d2014101a43d01c90325ea19d247ee66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a8695939c998fdc390de367d3ca62b0f2a2912aff4c0b8f07cae640deae4fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8695939c998fdc390de367d3ca62b0f2a2912aff4c0b8f07cae640deae4fe2->enter($__internal_3a8695939c998fdc390de367d3ca62b0f2a2912aff4c0b8f07cae640deae4fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!-- PAGE TITLE -->
                <div class=\"page-title\">                    
                    <h2><span class=\"fa fa-users\"></span> Contacts</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class=\"page-content-wrap\">
                    
                    <!-- PAGE CONTENT TABBED -->
                    <div class=\"page-tabs\">
                        <a href=\"#first-tab\" class=\"active\">Enseignants</a>
                        <a href=\"#second-tab\">Parents</a>
                        <a href=\"#third-tab\">Eleves</a>
                    </div>
                    
                    <div class=\"page-content-wrap page-tabs-item active\" id=\"first-tab\">
                    
                        <div class=\"row\">
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ens"] ?? $this->getContext($context, "ens")));
        foreach ($context['_seq'] as $context["_key"] => $context["en"]) {
            // line 26
            echo "                                    <div class=\"col-md-3\">
                                        <!-- CONTACT ITEM -->
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body profile\">
                                                <div class=\"profile-image\">
                                                    <img src=\"";
            // line 31
            if ($this->getAttribute($context["en"], "photo", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["en"], "photo", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "nom", array()), "html", null, true);
            echo "\"/>
                                                </div>
                                                <div class=\"profile-data\">
                                                    <div class=\"profile-data-name\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "prenom", array()), "html", null, true);
            echo "</div>
                                                    <div class=\"profile-data-title\">Enseignant</div>
                                                </div>
                                                <div class=\"profile-controls\">
                                                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["en"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new", array("id" => $this->getAttribute($context["en"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                                                </div>
                                            </div>                                
                                            <div class=\"panel-body\">                                    
                                                <div class=\"contact-info\">
                                                    <p><small>Mobile</small><br/>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "telephone", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Email</small><br/>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "email", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Address</small><br/>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "adresse", array()), "html", null, true);
            echo "</p>                                   
                                                </div>
                                            </div>                                
                                        </div>
                                        <!-- END CONTACT ITEM -->
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['en'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                <div class=\"navigation\">
                                    ";
        // line 54
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["ens"] ?? $this->getContext($context, "ens")));
        echo "
                                </div>
                        </div>
                    
                    </div>
                    <div class=\"page-content-wrap page-tabs-item\" id=\"second-tab\">
                        <div class=\"row\">
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parents"] ?? $this->getContext($context, "parents")));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 62
            echo "                                    <div class=\"col-md-3\">
                                        <!-- CONTACT ITEM -->
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body profile\">
                                                <div class=\"profile-image\">
                                                    <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "nom", array()), "html", null, true);
            echo "\"/>
                                                </div>
                                                <div class=\"profile-data\">
                                                    <div class=\"profile-data-name\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "prenom", array()), "html", null, true);
            echo "</div>
                                                    <div class=\"profile-data-title\">Parent d' eleve</div>
                                                </div>
                                                <div class=\"profile-controls\">
                                                    <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                                                </div>
                                            </div>                                
                                            <div class=\"panel-body\">                                    
                                                <div class=\"contact-info\">
                                                    <p><small>Mobile</small><br/>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "telephone", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Email</small><br/>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "email", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Address</small><br/>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "adresse", array()), "html", null, true);
            echo "</p>                                   
                                                </div>
                                            </div>                                
                                        </div>
                                        <!-- END CONTACT ITEM -->
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                <div class=\"navigation\">
                                    ";
        // line 90
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["parents"] ?? $this->getContext($context, "parents")));
        echo "
                                </div>
                        </div>
                    </div>
                    <div class=\"page-content-wrap page-tabs-item\" id=\"third-tab\">
                    
                        <div class=\"row\">
                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eleves"] ?? $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 98
            echo "                                    <div class=\"col-md-3\">
                                        <!-- CONTACT ITEM -->
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body profile\">
                                                <div class=\"profile-image\">
                                                    <img src=\"";
            // line 103
            if ($this->getAttribute($context["eleve"], "photo", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["eleve"], "photo", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo "\"/>
                                                </div>
                                                <div class=\"profile-data\">
                                                    <div class=\"profile-data-name\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</div>
                                                    <div class=\"profile-data-title\">Eleve</div>
                                                </div>
                                                <div class=\"profile-controls\">
                                                    <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                                    <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                                                </div>
                                            </div>                                
                                            <div class=\"panel-body\">                                    
                                                <div class=\"contact-info\">
                                                    <p><small>Mobile</small><br/>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "telephone", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Email</small><br/>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "email", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Address</small><br/>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "adresse", array()), "html", null, true);
            echo "</p>                                   
                                                </div>
                                            </div>                                
                                        </div>
                                        <!-- END CONTACT ITEM -->
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                <div class=\"navigation\">
                                    ";
        // line 126
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["parents"] ?? $this->getContext($context, "parents")));
        echo "
                                </div>
                        </div>
                    
                    </div>
                    <!-- END PAGE CONTENT TABBED -->
                </div>            
                <!-- END PAGE CONTENT -->    
                
";
        
        $__internal_3a8695939c998fdc390de367d3ca62b0f2a2912aff4c0b8f07cae640deae4fe2->leave($__internal_3a8695939c998fdc390de367d3ca62b0f2a2912aff4c0b8f07cae640deae4fe2_prof);

        
        $__internal_1de5675fbadec2b859369b3a3b7ae30d2014101a43d01c90325ea19d247ee66f->leave($__internal_1de5675fbadec2b859369b3a3b7ae30d2014101a43d01c90325ea19d247ee66f_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1b8921fc85e85deb80015352ef3a026cc60e3fa0f2c3bac8d981f3ef12b4a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b8921fc85e85deb80015352ef3a026cc60e3fa0f2c3bac8d981f3ef12b4a0f->enter($__internal_e1b8921fc85e85deb80015352ef3a026cc60e3fa0f2c3bac8d981f3ef12b4a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e58ae1a1cdfe5045033f13e1c990dd6eefe5b55e71378ece2e94bbde1100c57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58ae1a1cdfe5045033f13e1c990dd6eefe5b55e71378ece2e94bbde1100c57c->enter($__internal_e58ae1a1cdfe5045033f13e1c990dd6eefe5b55e71378ece2e94bbde1100c57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "    <script>
        \$('.page-sidebar .active').removeClass('active');
        \$('.msg').addClass('active');
    </script>
";
        
        $__internal_e58ae1a1cdfe5045033f13e1c990dd6eefe5b55e71378ece2e94bbde1100c57c->leave($__internal_e58ae1a1cdfe5045033f13e1c990dd6eefe5b55e71378ece2e94bbde1100c57c_prof);

        
        $__internal_e1b8921fc85e85deb80015352ef3a026cc60e3fa0f2c3bac8d981f3ef12b4a0f->leave($__internal_e1b8921fc85e85deb80015352ef3a026cc60e3fa0f2c3bac8d981f3ef12b4a0f_prof);

    }

    public function getTemplateName()
    {
        return "message/adressBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 139,  314 => 138,  294 => 126,  291 => 125,  278 => 118,  274 => 117,  270 => 116,  262 => 111,  258 => 110,  249 => 106,  235 => 103,  228 => 98,  224 => 97,  214 => 90,  211 => 89,  198 => 82,  194 => 81,  190 => 80,  182 => 75,  178 => 74,  169 => 70,  161 => 67,  154 => 62,  150 => 61,  140 => 54,  137 => 53,  124 => 46,  120 => 45,  116 => 44,  108 => 39,  104 => 38,  95 => 34,  83 => 31,  76 => 26,  72 => 25,  51 => 6,  42 => 5,  32 => 3,  20 => 1,  19 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ROLE_PARENT' in app.user.roles 
    ? 'baseParent.html.twig' 
    : 'base2.html.twig' %}

{% block body %}
<!-- PAGE TITLE -->
                <div class=\"page-title\">                    
                    <h2><span class=\"fa fa-users\"></span> Contacts</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class=\"page-content-wrap\">
                    
                    <!-- PAGE CONTENT TABBED -->
                    <div class=\"page-tabs\">
                        <a href=\"#first-tab\" class=\"active\">Enseignants</a>
                        <a href=\"#second-tab\">Parents</a>
                        <a href=\"#third-tab\">Eleves</a>
                    </div>
                    
                    <div class=\"page-content-wrap page-tabs-item active\" id=\"first-tab\">
                    
                        <div class=\"row\">
                                {% for en in ens %}
                                    <div class=\"col-md-3\">
                                        <!-- CONTACT ITEM -->
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body profile\">
                                                <div class=\"profile-image\">
                                                    <img src=\"{% if en.photo %}{{ asset('uploads/photos/' ~ en.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"{{en.nom}}\"/>
                                                </div>
                                                <div class=\"profile-data\">
                                                    <div class=\"profile-data-name\">{{en.nom}} {{en.prenom}}</div>
                                                    <div class=\"profile-data-title\">Enseignant</div>
                                                </div>
                                                <div class=\"profile-controls\">
                                                    <a href=\"{{ path('profileParental',{'id':en.id})}}\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                                    <a href=\"{{ path('message_new',{'id':en.id}) }}\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                                                </div>
                                            </div>                                
                                            <div class=\"panel-body\">                                    
                                                <div class=\"contact-info\">
                                                    <p><small>Mobile</small><br/>{{en.telephone}}</p>
                                                    <p><small>Email</small><br/>{{en.email}}</p>
                                                    <p><small>Address</small><br/>{{en.adresse}}</p>                                   
                                                </div>
                                            </div>                                
                                        </div>
                                        <!-- END CONTACT ITEM -->
                                    </div>
                                {% endfor %}
                                <div class=\"navigation\">
                                    {{ knp_pagination_render(ens) }}
                                </div>
                        </div>
                    
                    </div>
                    <div class=\"page-content-wrap page-tabs-item\" id=\"second-tab\">
                        <div class=\"row\">
                                {% for parent in parents %}
                                    <div class=\"col-md-3\">
                                        <!-- CONTACT ITEM -->
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body profile\">
                                                <div class=\"profile-image\">
                                                    <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"{{parent.nom}}\"/>
                                                </div>
                                                <div class=\"profile-data\">
                                                    <div class=\"profile-data-name\">{{parent.nom}} {{parent.prenom}}</div>
                                                    <div class=\"profile-data-title\">Parent d' eleve</div>
                                                </div>
                                                <div class=\"profile-controls\">
                                                    <a href=\"{{ path('profileParental',{'id':parent.id})}}\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                                    <a href=\"{{ path('message_new',{'id':parent.id}) }}\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                                                </div>
                                            </div>                                
                                            <div class=\"panel-body\">                                    
                                                <div class=\"contact-info\">
                                                    <p><small>Mobile</small><br/>{{parent.telephone}}</p>
                                                    <p><small>Email</small><br/>{{parent.email}}</p>
                                                    <p><small>Address</small><br/>{{parent.adresse}}</p>                                   
                                                </div>
                                            </div>                                
                                        </div>
                                        <!-- END CONTACT ITEM -->
                                    </div>
                                {% endfor %}
                                <div class=\"navigation\">
                                    {{ knp_pagination_render(parents) }}
                                </div>
                        </div>
                    </div>
                    <div class=\"page-content-wrap page-tabs-item\" id=\"third-tab\">
                    
                        <div class=\"row\">
                                {% for eleve in eleves %}
                                    <div class=\"col-md-3\">
                                        <!-- CONTACT ITEM -->
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body profile\">
                                                <div class=\"profile-image\">
                                                    <img src=\"{% if eleve.photo %}{{ asset('uploads/photos/' ~ eleve.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"{{eleve.nom}}\" alt=\"{{eleve.nom}}\"/>
                                                </div>
                                                <div class=\"profile-data\">
                                                    <div class=\"profile-data-name\">{{eleve.nom}} {{eleve.prenom}}</div>
                                                    <div class=\"profile-data-title\">Eleve</div>
                                                </div>
                                                <div class=\"profile-controls\">
                                                    <a href=\"{{ path('profileParental',{'id':eleve.id})}}\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                                    <a href=\"{{ path('message_new',{'id':eleve.id}) }}\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                                                </div>
                                            </div>                                
                                            <div class=\"panel-body\">                                    
                                                <div class=\"contact-info\">
                                                    <p><small>Mobile</small><br/>{{eleve.telephone}}</p>
                                                    <p><small>Email</small><br/>{{eleve.email}}</p>
                                                    <p><small>Address</small><br/>{{eleve.adresse}}</p>                                   
                                                </div>
                                            </div>                                
                                        </div>
                                        <!-- END CONTACT ITEM -->
                                    </div>
                                {% endfor %}
                                <div class=\"navigation\">
                                    {{ knp_pagination_render(parents) }}
                                </div>
                        </div>
                    
                    </div>
                    <!-- END PAGE CONTENT TABBED -->
                </div>            
                <!-- END PAGE CONTENT -->    
                
{% endblock %}


{% block javascripts %}
    <script>
        \$('.page-sidebar .active').removeClass('active');
        \$('.msg').addClass('active');
    </script>
{% endblock %}", "message/adressBook.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/message/adressBook.html.twig");
    }
}