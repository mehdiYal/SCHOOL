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
        $__internal_67a3d7851f3cb79f45678decd62a17b79012f4e1fb2503aff5f8f1db71ee2013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a3d7851f3cb79f45678decd62a17b79012f4e1fb2503aff5f8f1db71ee2013->enter($__internal_67a3d7851f3cb79f45678decd62a17b79012f4e1fb2503aff5f8f1db71ee2013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:lock.html.twig"));

        $__internal_39fd77dd6da6628806b46881f5ec18038012ef401198a14536fc10f444b89d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fd77dd6da6628806b46881f5ec18038012ef401198a14536fc10f444b89d68->enter($__internal_39fd77dd6da6628806b46881f5ec18038012ef401198a14536fc10f444b89d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:lock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67a3d7851f3cb79f45678decd62a17b79012f4e1fb2503aff5f8f1db71ee2013->leave($__internal_67a3d7851f3cb79f45678decd62a17b79012f4e1fb2503aff5f8f1db71ee2013_prof);

        
        $__internal_39fd77dd6da6628806b46881f5ec18038012ef401198a14536fc10f444b89d68->leave($__internal_39fd77dd6da6628806b46881f5ec18038012ef401198a14536fc10f444b89d68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5659fa61385f55e338cb2dffa75972a4672ed9aebb872d5614fdf0eed9bad851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5659fa61385f55e338cb2dffa75972a4672ed9aebb872d5614fdf0eed9bad851->enter($__internal_5659fa61385f55e338cb2dffa75972a4672ed9aebb872d5614fdf0eed9bad851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d4a81d5dba662cd68529cd56b547f4d6ccb36f0d66d05d400920ae4750ceb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4a81d5dba662cd68529cd56b547f4d6ccb36f0d66d05d400920ae4750ceb33->enter($__internal_8d4a81d5dba662cd68529cd56b547f4d6ccb36f0d66d05d400920ae4750ceb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d4a81d5dba662cd68529cd56b547f4d6ccb36f0d66d05d400920ae4750ceb33->leave($__internal_8d4a81d5dba662cd68529cd56b547f4d6ccb36f0d66d05d400920ae4750ceb33_prof);

        
        $__internal_5659fa61385f55e338cb2dffa75972a4672ed9aebb872d5614fdf0eed9bad851->leave($__internal_5659fa61385f55e338cb2dffa75972a4672ed9aebb872d5614fdf0eed9bad851_prof);

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
