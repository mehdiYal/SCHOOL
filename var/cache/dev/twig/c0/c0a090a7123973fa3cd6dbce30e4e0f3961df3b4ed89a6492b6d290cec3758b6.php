<?php

/* :default:lock.html.twig */
class __TwigTemplate_cfd4addccfb1e87069f1aa308759b643721e25a7d782503683acb6bcc3453941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:lock.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c94513cb2a5fd2f8cc01657674928f8c0f0da251dde7984aebdeb55be487423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c94513cb2a5fd2f8cc01657674928f8c0f0da251dde7984aebdeb55be487423->enter($__internal_1c94513cb2a5fd2f8cc01657674928f8c0f0da251dde7984aebdeb55be487423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:lock.html.twig"));

        $__internal_4f82674b1aa37f6e1e9b204457dcfa1fbcdf2633d88634899c94b990e8d4b317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f82674b1aa37f6e1e9b204457dcfa1fbcdf2633d88634899c94b990e8d4b317->enter($__internal_4f82674b1aa37f6e1e9b204457dcfa1fbcdf2633d88634899c94b990e8d4b317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:lock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c94513cb2a5fd2f8cc01657674928f8c0f0da251dde7984aebdeb55be487423->leave($__internal_1c94513cb2a5fd2f8cc01657674928f8c0f0da251dde7984aebdeb55be487423_prof);

        
        $__internal_4f82674b1aa37f6e1e9b204457dcfa1fbcdf2633d88634899c94b990e8d4b317->leave($__internal_4f82674b1aa37f6e1e9b204457dcfa1fbcdf2633d88634899c94b990e8d4b317_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_719e2f6a286498affa962ef80d7dfa271aacee211e3a34f5ad20f5300c8d91a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719e2f6a286498affa962ef80d7dfa271aacee211e3a34f5ad20f5300c8d91a3->enter($__internal_719e2f6a286498affa962ef80d7dfa271aacee211e3a34f5ad20f5300c8d91a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31fbf19d6aa97db26b0bf2077796b2100e11ce188bbaedfc32c5b077193ece45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fbf19d6aa97db26b0bf2077796b2100e11ce188bbaedfc32c5b077193ece45->enter($__internal_31fbf19d6aa97db26b0bf2077796b2100e11ce188bbaedfc32c5b077193ece45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"lockscreen-container\">
            
            <div class=\"lockscreen-box animated fadeInDown\">
                
                <div class=\"lsb-access\">
                    <div class=\"lsb-box\">
                        <div class=\"fa fa-lock\"></div>
                        <div class=\"user animated fadeIn\">
                            <img src=\"";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "\"/>
                            <div class=\"user_signin animated fadeIn\">
                                <div class=\"fa fa-sign-in\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"lsb-form animated fadeInDown\">
                    <form action=\"#\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"form-group sign-in animated fadeInDown\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span class=\"fa fa-user\"></span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Your login\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span class=\"fa fa-lock\"></span>
                                    </div>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                                </div>
                            </div>
                        </div>
                        <input type=\"submit\" class=\"hidden\"/>
                    </form>
                </div>
                
            </div>
            
        </div>
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>        
        <!-- END PLUGINS -->

        <!-- START TEMPLATE -->                
        <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 

";
        
        $__internal_31fbf19d6aa97db26b0bf2077796b2100e11ce188bbaedfc32c5b077193ece45->leave($__internal_31fbf19d6aa97db26b0bf2077796b2100e11ce188bbaedfc32c5b077193ece45_prof);

        
        $__internal_719e2f6a286498affa962ef80d7dfa271aacee211e3a34f5ad20f5300c8d91a3->leave($__internal_719e2f6a286498affa962ef80d7dfa271aacee211e3a34f5ad20f5300c8d91a3_prof);

    }

    public function getTemplateName()
    {
        return ":default:lock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  123 => 58,  116 => 54,  112 => 53,  108 => 52,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"lockscreen-container\">
            
            <div class=\"lockscreen-box animated fadeInDown\">
                
                <div class=\"lsb-access\">
                    <div class=\"lsb-box\">
                        <div class=\"fa fa-lock\"></div>
                        <div class=\"user animated fadeIn\">
                            <img src=\"{% if app.user.photo %}{{ asset('uploads/photos/' ~ app.user.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"{{app.user.nom}}\"/>
                            <div class=\"user_signin animated fadeIn\">
                                <div class=\"fa fa-sign-in\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"lsb-form animated fadeInDown\">
                    <form action=\"#\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"form-group sign-in animated fadeInDown\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span class=\"fa fa-user\"></span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Your login\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span class=\"fa fa-lock\"></span>
                                    </div>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                                </div>
                            </div>
                        </div>
                        <input type=\"submit\" class=\"hidden\"/>
                    </form>
                </div>
                
            </div>
            
        </div>
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/jquery/jquery.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/jquery/jquery-ui.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins/bootstrap/bootstrap.min.js')}}\"></script>        
        <!-- END PLUGINS -->

        <!-- START TEMPLATE -->                
        <script type=\"text/javascript\" src=\"{{ asset('js/plugins.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/actions.js')}}\"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 

{% endblock %}", ":default:lock.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/lock.html.twig");
    }
}
