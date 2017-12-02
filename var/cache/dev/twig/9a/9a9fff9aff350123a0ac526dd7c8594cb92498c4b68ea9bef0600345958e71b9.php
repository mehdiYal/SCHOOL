<?php

/* :default:lock.html.twig */
class __TwigTemplate_71181ed9fc38c845713c4435626e040384fa1636cfa5a5a0803787e43daa5fa1 extends Twig_Template
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
        $__internal_9b46e84b030d98499a57515a620d8e7420679cc26017e4b4a49ba27614fe35a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b46e84b030d98499a57515a620d8e7420679cc26017e4b4a49ba27614fe35a8->enter($__internal_9b46e84b030d98499a57515a620d8e7420679cc26017e4b4a49ba27614fe35a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:lock.html.twig"));

        $__internal_887527d37c3d8abebca412ea2630a34f9ae8d236e3bb0d36d08bbe9ca9528e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887527d37c3d8abebca412ea2630a34f9ae8d236e3bb0d36d08bbe9ca9528e33->enter($__internal_887527d37c3d8abebca412ea2630a34f9ae8d236e3bb0d36d08bbe9ca9528e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:lock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b46e84b030d98499a57515a620d8e7420679cc26017e4b4a49ba27614fe35a8->leave($__internal_9b46e84b030d98499a57515a620d8e7420679cc26017e4b4a49ba27614fe35a8_prof);

        
        $__internal_887527d37c3d8abebca412ea2630a34f9ae8d236e3bb0d36d08bbe9ca9528e33->leave($__internal_887527d37c3d8abebca412ea2630a34f9ae8d236e3bb0d36d08bbe9ca9528e33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06be33cf5996da8f81db51d39d56901f5f1b5e93aa2ef39c6b50f0ec4d3bb50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06be33cf5996da8f81db51d39d56901f5f1b5e93aa2ef39c6b50f0ec4d3bb50e->enter($__internal_06be33cf5996da8f81db51d39d56901f5f1b5e93aa2ef39c6b50f0ec4d3bb50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ae9c673478e64dc58c6a256f142a7e1b15b565254cf6f6353ddf69e22de6f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae9c673478e64dc58c6a256f142a7e1b15b565254cf6f6353ddf69e22de6f50->enter($__internal_3ae9c673478e64dc58c6a256f142a7e1b15b565254cf6f6353ddf69e22de6f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ae9c673478e64dc58c6a256f142a7e1b15b565254cf6f6353ddf69e22de6f50->leave($__internal_3ae9c673478e64dc58c6a256f142a7e1b15b565254cf6f6353ddf69e22de6f50_prof);

        
        $__internal_06be33cf5996da8f81db51d39d56901f5f1b5e93aa2ef39c6b50f0ec4d3bb50e->leave($__internal_06be33cf5996da8f81db51d39d56901f5f1b5e93aa2ef39c6b50f0ec4d3bb50e_prof);

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

{% endblock %}", ":default:lock.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/default/lock.html.twig");
    }
}
