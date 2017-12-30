<?php

/* :default:index.html.twig */
class __TwigTemplate_d4dafea7f7c7be0ad8f43716899f9c2647fe09f222349ec602c204cf0e488731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_b8a685ff369d1a6e3d369be197f8cd00aed7a73bd8729d2421dd33d50bc1b9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a685ff369d1a6e3d369be197f8cd00aed7a73bd8729d2421dd33d50bc1b9e2->enter($__internal_b8a685ff369d1a6e3d369be197f8cd00aed7a73bd8729d2421dd33d50bc1b9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_8f9a9417b2b298753a6d2ac5bf03891864bda9b0e5744314ec05da486d5dd6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9a9417b2b298753a6d2ac5bf03891864bda9b0e5744314ec05da486d5dd6ab->enter($__internal_8f9a9417b2b298753a6d2ac5bf03891864bda9b0e5744314ec05da486d5dd6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a685ff369d1a6e3d369be197f8cd00aed7a73bd8729d2421dd33d50bc1b9e2->leave($__internal_b8a685ff369d1a6e3d369be197f8cd00aed7a73bd8729d2421dd33d50bc1b9e2_prof);

        
        $__internal_8f9a9417b2b298753a6d2ac5bf03891864bda9b0e5744314ec05da486d5dd6ab->leave($__internal_8f9a9417b2b298753a6d2ac5bf03891864bda9b0e5744314ec05da486d5dd6ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84d51d5d74e9648132ec55f1130bd077f9e839f86827769a8dea20f63134c215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d51d5d74e9648132ec55f1130bd077f9e839f86827769a8dea20f63134c215->enter($__internal_84d51d5d74e9648132ec55f1130bd077f9e839f86827769a8dea20f63134c215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31465a8cc8ed99dfcef457d84ad3b8beb768f3e90a83d06095b1e0f3ac1a9ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31465a8cc8ed99dfcef457d84ad3b8beb768f3e90a83d06095b1e0f3ac1a9ae0->enter($__internal_31465a8cc8ed99dfcef457d84ad3b8beb768f3e90a83d06095b1e0f3ac1a9ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_31465a8cc8ed99dfcef457d84ad3b8beb768f3e90a83d06095b1e0f3ac1a9ae0->leave($__internal_31465a8cc8ed99dfcef457d84ad3b8beb768f3e90a83d06095b1e0f3ac1a9ae0_prof);

        
        $__internal_84d51d5d74e9648132ec55f1130bd077f9e839f86827769a8dea20f63134c215->leave($__internal_84d51d5d74e9648132ec55f1130bd077f9e839f86827769a8dea20f63134c215_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            {% if  app.user %}
            <h1>{{app.user.nom}}</h1>
            {% endif %}
        </div>
    </div>
{% endblock %}", ":default:index.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/default/index.html.twig");
    }
}
