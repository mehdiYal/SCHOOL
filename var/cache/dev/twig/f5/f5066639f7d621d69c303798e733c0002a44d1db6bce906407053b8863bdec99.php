<?php

/* message/adressBook.html.twig */
class __TwigTemplate_433fe8a098fb9c8d21361f25145dce98e4f0ea53ec6c6868ba16b80100236b3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "message/adressBook.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a750f117aa28431fc0d401b1d64d2d198e93dd46b7895add3ee102b6669d7b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a750f117aa28431fc0d401b1d64d2d198e93dd46b7895add3ee102b6669d7b76->enter($__internal_a750f117aa28431fc0d401b1d64d2d198e93dd46b7895add3ee102b6669d7b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/adressBook.html.twig"));

        $__internal_77175dec70fc01818f33814dfc58cd782e7e4339aa1132c8841b1fbf501cece0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77175dec70fc01818f33814dfc58cd782e7e4339aa1132c8841b1fbf501cece0->enter($__internal_77175dec70fc01818f33814dfc58cd782e7e4339aa1132c8841b1fbf501cece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/adressBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a750f117aa28431fc0d401b1d64d2d198e93dd46b7895add3ee102b6669d7b76->leave($__internal_a750f117aa28431fc0d401b1d64d2d198e93dd46b7895add3ee102b6669d7b76_prof);

        
        $__internal_77175dec70fc01818f33814dfc58cd782e7e4339aa1132c8841b1fbf501cece0->leave($__internal_77175dec70fc01818f33814dfc58cd782e7e4339aa1132c8841b1fbf501cece0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_309ec701cea948f4d800d2c35dd24ac47f8a1c2af5d6492f38cf34747df9e43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309ec701cea948f4d800d2c35dd24ac47f8a1c2af5d6492f38cf34747df9e43a->enter($__internal_309ec701cea948f4d800d2c35dd24ac47f8a1c2af5d6492f38cf34747df9e43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_291f2eb0fb256db5488fdd75471c3dcecf113574136e4554a29fe22003896c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291f2eb0fb256db5488fdd75471c3dcecf113574136e4554a29fe22003896c71->enter($__internal_291f2eb0fb256db5488fdd75471c3dcecf113574136e4554a29fe22003896c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ens"] ?? $this->getContext($context, "ens")));
        foreach ($context['_seq'] as $context["_key"] => $context["en"]) {
            // line 24
            echo "                                    <div class=\"col-md-3\">
                                        <!-- CONTACT ITEM -->
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body profile\">
                                                <div class=\"profile-image\">
                                                    <img src=\"";
            // line 29
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
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "prenom", array()), "html", null, true);
            echo "</div>
                                                    <div class=\"profile-data-title\">Enseignant</div>
                                                </div>
                                                <div class=\"profile-controls\">
                                                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["en"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new", array("id" => $this->getAttribute($context["en"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                                                </div>
                                            </div>                                
                                            <div class=\"panel-body\">                                    
                                                <div class=\"contact-info\">
                                                    <p><small>Mobile</small><br/>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "telephone", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Email</small><br/>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["en"], "email", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Address</small><br/>";
            // line 44
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
        // line 51
        echo "                                <div class=\"navigation\">
                                    ";
        // line 52
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["ens"] ?? $this->getContext($context, "ens")));
        echo "
                                </div>
                        </div>
                    
                    </div>
                    <div class=\"page-content-wrap page-tabs-item\" id=\"second-tab\">
                        <div class=\"row\">
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parents"] ?? $this->getContext($context, "parents")));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 60
            echo "                                    <div class=\"col-md-3\">
                                        <!-- CONTACT ITEM -->
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body profile\">
                                                <div class=\"profile-image\">
                                                    <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "nom", array()), "html", null, true);
            echo "\"/>
                                                </div>
                                                <div class=\"profile-data\">
                                                    <div class=\"profile-data-name\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "prenom", array()), "html", null, true);
            echo "</div>
                                                    <div class=\"profile-data-title\">Parent d' eleve</div>
                                                </div>
                                                <div class=\"profile-controls\">
                                                    <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                                    <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                                                </div>
                                            </div>                                
                                            <div class=\"panel-body\">                                    
                                                <div class=\"contact-info\">
                                                    <p><small>Mobile</small><br/>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "telephone", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Email</small><br/>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "email", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Address</small><br/>";
            // line 80
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
        // line 87
        echo "                                <div class=\"navigation\">
                                    ";
        // line 88
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["parents"] ?? $this->getContext($context, "parents")));
        echo "
                                </div>
                        </div>
                    </div>
                    <div class=\"page-content-wrap page-tabs-item\" id=\"third-tab\">
                    
                        <div class=\"row\">
                                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eleves"] ?? $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 96
            echo "                                    <div class=\"col-md-3\">
                                        <!-- CONTACT ITEM -->
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body profile\">
                                                <div class=\"profile-image\">
                                                    <img src=\"";
            // line 101
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
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</div>
                                                    <div class=\"profile-data-title\">Eleve</div>
                                                </div>
                                                <div class=\"profile-controls\">
                                                    <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-left\"><span class=\"fa fa-info\"></span></a>
                                                    <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\" class=\"profile-control-right\"><span class=\"fa fa-phone\"></span></a>
                                                </div>
                                            </div>                                
                                            <div class=\"panel-body\">                                    
                                                <div class=\"contact-info\">
                                                    <p><small>Mobile</small><br/>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "telephone", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Email</small><br/>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "email", array()), "html", null, true);
            echo "</p>
                                                    <p><small>Address</small><br/>";
            // line 116
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
        // line 123
        echo "                                <div class=\"navigation\">
                                    ";
        // line 124
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["parents"] ?? $this->getContext($context, "parents")));
        echo "
                                </div>
                        </div>
                    
                    </div>
                    <!-- END PAGE CONTENT TABBED -->
                </div>            
                <!-- END PAGE CONTENT -->
            </div>
            <!-- END PAGE CONTAINER -->
                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->             
                
";
        
        $__internal_291f2eb0fb256db5488fdd75471c3dcecf113574136e4554a29fe22003896c71->leave($__internal_291f2eb0fb256db5488fdd75471c3dcecf113574136e4554a29fe22003896c71_prof);

        
        $__internal_309ec701cea948f4d800d2c35dd24ac47f8a1c2af5d6492f38cf34747df9e43a->leave($__internal_309ec701cea948f4d800d2c35dd24ac47f8a1c2af5d6492f38cf34747df9e43a_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4042b35c93028a75a095d609b8ab1a1db0187485370547753a4be6f511ac8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4042b35c93028a75a095d609b8ab1a1db0187485370547753a4be6f511ac8f7->enter($__internal_e4042b35c93028a75a095d609b8ab1a1db0187485370547753a4be6f511ac8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b0f7e41cf950072ce9de9b2bc809a4f0392072c8fe9e8aacc09cf7c0dbed69c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f7e41cf950072ce9de9b2bc809a4f0392072c8fe9e8aacc09cf7c0dbed69c5->enter($__internal_b0f7e41cf950072ce9de9b2bc809a4f0392072c8fe9e8aacc09cf7c0dbed69c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "           

";
        
        $__internal_b0f7e41cf950072ce9de9b2bc809a4f0392072c8fe9e8aacc09cf7c0dbed69c5->leave($__internal_b0f7e41cf950072ce9de9b2bc809a4f0392072c8fe9e8aacc09cf7c0dbed69c5_prof);

        
        $__internal_e4042b35c93028a75a095d609b8ab1a1db0187485370547753a4be6f511ac8f7->leave($__internal_e4042b35c93028a75a095d609b8ab1a1db0187485370547753a4be6f511ac8f7_prof);

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
        return array (  328 => 143,  319 => 142,  293 => 124,  290 => 123,  277 => 116,  273 => 115,  269 => 114,  261 => 109,  257 => 108,  248 => 104,  234 => 101,  227 => 96,  223 => 95,  213 => 88,  210 => 87,  197 => 80,  193 => 79,  189 => 78,  181 => 73,  177 => 72,  168 => 68,  160 => 65,  153 => 60,  149 => 59,  139 => 52,  136 => 51,  123 => 44,  119 => 43,  115 => 42,  107 => 37,  103 => 36,  94 => 32,  82 => 29,  75 => 24,  71 => 23,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

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
            </div>
            <!-- END PAGE CONTAINER -->
                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->             
                
{% endblock %}


{% block javascripts %}
           

{% endblock %}", "message/adressBook.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/message/adressBook.html.twig");
    }
}
