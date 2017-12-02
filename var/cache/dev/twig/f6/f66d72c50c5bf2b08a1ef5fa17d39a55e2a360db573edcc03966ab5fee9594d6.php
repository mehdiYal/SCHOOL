<?php

/* :default:dashAdmin.html.twig */
class __TwigTemplate_87ee93e52c20670b97f63d90c56fef85fb00ebf3d2f0f425aeed181c6868227e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":default:dashAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48fe501655ab2a2dcd0d3f67b2d4009e3385ba3ed9b31edd53a58ebe300c4b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48fe501655ab2a2dcd0d3f67b2d4009e3385ba3ed9b31edd53a58ebe300c4b5b->enter($__internal_48fe501655ab2a2dcd0d3f67b2d4009e3385ba3ed9b31edd53a58ebe300c4b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashAdmin.html.twig"));

        $__internal_f564c33dabeefb763345f4a0552d75e2249b072d22fb90836f8f94a00b57e835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f564c33dabeefb763345f4a0552d75e2249b072d22fb90836f8f94a00b57e835->enter($__internal_f564c33dabeefb763345f4a0552d75e2249b072d22fb90836f8f94a00b57e835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48fe501655ab2a2dcd0d3f67b2d4009e3385ba3ed9b31edd53a58ebe300c4b5b->leave($__internal_48fe501655ab2a2dcd0d3f67b2d4009e3385ba3ed9b31edd53a58ebe300c4b5b_prof);

        
        $__internal_f564c33dabeefb763345f4a0552d75e2249b072d22fb90836f8f94a00b57e835->leave($__internal_f564c33dabeefb763345f4a0552d75e2249b072d22fb90836f8f94a00b57e835_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d847c122a1e61b3d02a11a0ab28d32291959206daedd41c8a967971d640fdd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d847c122a1e61b3d02a11a0ab28d32291959206daedd41c8a967971d640fdd2->enter($__internal_8d847c122a1e61b3d02a11a0ab28d32291959206daedd41c8a967971d640fdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_234d07bb7d7035c7d704da8cc8c8444bb7b939d32c4e38511e3903c1bdeae6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234d07bb7d7035c7d704da8cc8c8444bb7b939d32c4e38511e3903c1bdeae6ef->enter($__internal_234d07bb7d7035c7d704da8cc8c8444bb7b939d32c4e38511e3903c1bdeae6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-content-wrap\">
                    
        <!-- START WIDGETS -->                    
        <div class=\"row\">
            <div class=\"col-md-3\">
                
                <!-- START WIDGET SLIDER -->
                <div class=\"widget widget-default widget-carousel\">
                    <div class=\"owl-carousel\" id=\"owl-example\">
                        <div>                                    
                            <div class=\"widget-title\">Total Eleves</div>                                                                 
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array())), "html", null, true);
        echo "</div>
                        </div>
                        <div>                                    
                            <div class=\"widget-title\">Total Enseignants</div>
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array())), "html", null, true);
        echo "</div>
                        </div>
                        <div>                                    
                            <div class=\"widget-title\">Total Parents</div>
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array())), "html", null, true);
        echo "</div>
                        </div>
                    </div>                            
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                             
                </div>         
                <!-- END WIDGET SLIDER -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET MESSAGES -->
                <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                    <div class=\"widget-item-left\">
                        <span class=\"fa fa-envelope\"></span>
                    </div>                             
                    <div class=\"widget-data\">
                        <div class=\"widget-int num-count\">0</div>
                        <div class=\"widget-title\">New messages</div>
                        <div class=\"widget-subtitle\">In your mailbox</div>
                    </div>      
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>
                </div>                            
                <!-- END WIDGET MESSAGES -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET REGISTRED -->
                <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-address-book.html';\">
                    <div class=\"widget-item-left\">
                        <span class=\"fa fa-user\"></span>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"widget-int num-count\">";
        // line 63
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array())) + twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()))) + twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array()))), "html", null, true);
        echo "</div>
                        <div class=\"widget-title\">UTILISATEURS</div>
                        <div class=\"widget-subtitle\">pour ";
        // line 65
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "nom", array())), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                            
                </div>                            
                <!-- END WIDGET REGISTRED -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET CLOCK -->
                <div class=\"widget widget-danger widget-padding-sm\">
                    <div class=\"widget-big-int plugin-clock\">00:00</div>                            
                    <div class=\"widget-subtitle plugin-date\">Loading...</div>
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                            
                    <div class=\"widget-buttons widget-c3\">
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span></a>
                        </div>
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-bell\"></span></a>
                        </div>
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-calendar\"></span></a>
                        </div>
                    </div>                            
                </div>                        
                <!-- END WIDGET CLOCK -->
                
            </div>
        </div>
        <!-- END WIDGETS -->

";
        
        $__internal_234d07bb7d7035c7d704da8cc8c8444bb7b939d32c4e38511e3903c1bdeae6ef->leave($__internal_234d07bb7d7035c7d704da8cc8c8444bb7b939d32c4e38511e3903c1bdeae6ef_prof);

        
        $__internal_8d847c122a1e61b3d02a11a0ab28d32291959206daedd41c8a967971d640fdd2->leave($__internal_8d847c122a1e61b3d02a11a0ab28d32291959206daedd41c8a967971d640fdd2_prof);

    }

    public function getTemplateName()
    {
        return ":default:dashAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 65,  119 => 63,  79 => 26,  71 => 21,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"page-content-wrap\">
                    
        <!-- START WIDGETS -->                    
        <div class=\"row\">
            <div class=\"col-md-3\">
                
                <!-- START WIDGET SLIDER -->
                <div class=\"widget widget-default widget-carousel\">
                    <div class=\"owl-carousel\" id=\"owl-example\">
                        <div>                                    
                            <div class=\"widget-title\">Total Eleves</div>                                                                 
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">{{app.user.ecole.eleves|length}}</div>
                        </div>
                        <div>                                    
                            <div class=\"widget-title\">Total Enseignants</div>
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">{{app.user.ecole.enseignants|length}}</div>
                        </div>
                        <div>                                    
                            <div class=\"widget-title\">Total Parents</div>
                            <div class=\"widget-subtitle\">Visitors</div>
                            <div class=\"widget-int\">{{app.user.ecole.parents|length}}</div>
                        </div>
                    </div>                            
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                             
                </div>         
                <!-- END WIDGET SLIDER -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET MESSAGES -->
                <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                    <div class=\"widget-item-left\">
                        <span class=\"fa fa-envelope\"></span>
                    </div>                             
                    <div class=\"widget-data\">
                        <div class=\"widget-int num-count\">0</div>
                        <div class=\"widget-title\">New messages</div>
                        <div class=\"widget-subtitle\">In your mailbox</div>
                    </div>      
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>
                </div>                            
                <!-- END WIDGET MESSAGES -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET REGISTRED -->
                <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-address-book.html';\">
                    <div class=\"widget-item-left\">
                        <span class=\"fa fa-user\"></span>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"widget-int num-count\">{{(app.user.ecole.parents|length)+(app.user.ecole.eleves|length)+(app.user.ecole.enseignants|length)}}</div>
                        <div class=\"widget-title\">UTILISATEURS</div>
                        <div class=\"widget-subtitle\">pour {{app.user.ecole.nom|upper}}</div>
                    </div>
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                            
                </div>                            
                <!-- END WIDGET REGISTRED -->
                
            </div>
            <div class=\"col-md-3\">
                
                <!-- START WIDGET CLOCK -->
                <div class=\"widget widget-danger widget-padding-sm\">
                    <div class=\"widget-big-int plugin-clock\">00:00</div>                            
                    <div class=\"widget-subtitle plugin-date\">Loading...</div>
                    <div class=\"widget-controls\">                                
                        <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                    </div>                            
                    <div class=\"widget-buttons widget-c3\">
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span></a>
                        </div>
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-bell\"></span></a>
                        </div>
                        <div class=\"col\">
                            <a href=\"#\"><span class=\"fa fa-calendar\"></span></a>
                        </div>
                    </div>                            
                </div>                        
                <!-- END WIDGET CLOCK -->
                
            </div>
        </div>
        <!-- END WIDGETS -->

{% endblock %}", ":default:dashAdmin.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/dashAdmin.html.twig");
    }
}
