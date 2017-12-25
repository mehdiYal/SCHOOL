<?php

/* :default:index.html.twig */
class __TwigTemplate_5979ee791d4b96b1df90daa28ae5681340c1f71c32ca1e118713ae242dd98bfc extends Twig_Template
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
        $__internal_050ed6bbabb7b84fa17572cf16673d2d45b20f623aae9916a5273cc63b6d8d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050ed6bbabb7b84fa17572cf16673d2d45b20f623aae9916a5273cc63b6d8d11->enter($__internal_050ed6bbabb7b84fa17572cf16673d2d45b20f623aae9916a5273cc63b6d8d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_1a6c8ac544ea87ec3e2df6058f47742a2fffdc22a72b73f7e036f2d695d1e52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6c8ac544ea87ec3e2df6058f47742a2fffdc22a72b73f7e036f2d695d1e52d->enter($__internal_1a6c8ac544ea87ec3e2df6058f47742a2fffdc22a72b73f7e036f2d695d1e52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_050ed6bbabb7b84fa17572cf16673d2d45b20f623aae9916a5273cc63b6d8d11->leave($__internal_050ed6bbabb7b84fa17572cf16673d2d45b20f623aae9916a5273cc63b6d8d11_prof);

        
        $__internal_1a6c8ac544ea87ec3e2df6058f47742a2fffdc22a72b73f7e036f2d695d1e52d->leave($__internal_1a6c8ac544ea87ec3e2df6058f47742a2fffdc22a72b73f7e036f2d695d1e52d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd8a8c7b80ec860a1c93179c2742b800e4427967d5905b3ac8ae4bae46930b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8a8c7b80ec860a1c93179c2742b800e4427967d5905b3ac8ae4bae46930b87->enter($__internal_fd8a8c7b80ec860a1c93179c2742b800e4427967d5905b3ac8ae4bae46930b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c987b8735a7813d0312e3057a111fe2da72a33f3bc1fda00fd6cdd82a7894896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c987b8735a7813d0312e3057a111fe2da72a33f3bc1fda00fd6cdd82a7894896->enter($__internal_c987b8735a7813d0312e3057a111fe2da72a33f3bc1fda00fd6cdd82a7894896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c987b8735a7813d0312e3057a111fe2da72a33f3bc1fda00fd6cdd82a7894896->leave($__internal_c987b8735a7813d0312e3057a111fe2da72a33f3bc1fda00fd6cdd82a7894896_prof);

        
        $__internal_fd8a8c7b80ec860a1c93179c2742b800e4427967d5905b3ac8ae4bae46930b87->leave($__internal_fd8a8c7b80ec860a1c93179c2742b800e4427967d5905b3ac8ae4bae46930b87_prof);

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
{% endblock %}", ":default:index.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/index.html.twig");
    }
}
