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
        $__internal_923ecffe1446693a201c8ae6ac178dbea44e013506ad66393b5ccc80519c560f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923ecffe1446693a201c8ae6ac178dbea44e013506ad66393b5ccc80519c560f->enter($__internal_923ecffe1446693a201c8ae6ac178dbea44e013506ad66393b5ccc80519c560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_3941ce9d0152407032e231020115c252c83fb51d936a1a49d0f69035621ee3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3941ce9d0152407032e231020115c252c83fb51d936a1a49d0f69035621ee3bd->enter($__internal_3941ce9d0152407032e231020115c252c83fb51d936a1a49d0f69035621ee3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_923ecffe1446693a201c8ae6ac178dbea44e013506ad66393b5ccc80519c560f->leave($__internal_923ecffe1446693a201c8ae6ac178dbea44e013506ad66393b5ccc80519c560f_prof);

        
        $__internal_3941ce9d0152407032e231020115c252c83fb51d936a1a49d0f69035621ee3bd->leave($__internal_3941ce9d0152407032e231020115c252c83fb51d936a1a49d0f69035621ee3bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a79584fee435bd6cc75627a865b58e0ff6a827c7d44f8fedd623f47383266b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79584fee435bd6cc75627a865b58e0ff6a827c7d44f8fedd623f47383266b06->enter($__internal_a79584fee435bd6cc75627a865b58e0ff6a827c7d44f8fedd623f47383266b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b64c4a89d737a7bc633228cc4f838d0ace10ac998c23d30fe98f4306c4f85f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b64c4a89d737a7bc633228cc4f838d0ace10ac998c23d30fe98f4306c4f85f4->enter($__internal_0b64c4a89d737a7bc633228cc4f838d0ace10ac998c23d30fe98f4306c4f85f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b64c4a89d737a7bc633228cc4f838d0ace10ac998c23d30fe98f4306c4f85f4->leave($__internal_0b64c4a89d737a7bc633228cc4f838d0ace10ac998c23d30fe98f4306c4f85f4_prof);

        
        $__internal_a79584fee435bd6cc75627a865b58e0ff6a827c7d44f8fedd623f47383266b06->leave($__internal_a79584fee435bd6cc75627a865b58e0ff6a827c7d44f8fedd623f47383266b06_prof);

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
