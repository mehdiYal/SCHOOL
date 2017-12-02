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
        $__internal_8006953e502d32c8dd45334d4a7f8c9f1418ae600aa0184a303beac16d2138c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8006953e502d32c8dd45334d4a7f8c9f1418ae600aa0184a303beac16d2138c3->enter($__internal_8006953e502d32c8dd45334d4a7f8c9f1418ae600aa0184a303beac16d2138c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_d6d5f1de7f0f54671b3614a9479c58b5c872f78f11d4d3ceab48728d6dc36f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d5f1de7f0f54671b3614a9479c58b5c872f78f11d4d3ceab48728d6dc36f62->enter($__internal_d6d5f1de7f0f54671b3614a9479c58b5c872f78f11d4d3ceab48728d6dc36f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8006953e502d32c8dd45334d4a7f8c9f1418ae600aa0184a303beac16d2138c3->leave($__internal_8006953e502d32c8dd45334d4a7f8c9f1418ae600aa0184a303beac16d2138c3_prof);

        
        $__internal_d6d5f1de7f0f54671b3614a9479c58b5c872f78f11d4d3ceab48728d6dc36f62->leave($__internal_d6d5f1de7f0f54671b3614a9479c58b5c872f78f11d4d3ceab48728d6dc36f62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68a2f5e37dc7fd6c3964f806a5b777ae64187867e5c7d6cd20cd389a5471b814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a2f5e37dc7fd6c3964f806a5b777ae64187867e5c7d6cd20cd389a5471b814->enter($__internal_68a2f5e37dc7fd6c3964f806a5b777ae64187867e5c7d6cd20cd389a5471b814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2c36b325ced87dd6fb56479da0b1549ab0ca511e9af915f0fb44a8d4d6f63c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c36b325ced87dd6fb56479da0b1549ab0ca511e9af915f0fb44a8d4d6f63c6->enter($__internal_a2c36b325ced87dd6fb56479da0b1549ab0ca511e9af915f0fb44a8d4d6f63c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2c36b325ced87dd6fb56479da0b1549ab0ca511e9af915f0fb44a8d4d6f63c6->leave($__internal_a2c36b325ced87dd6fb56479da0b1549ab0ca511e9af915f0fb44a8d4d6f63c6_prof);

        
        $__internal_68a2f5e37dc7fd6c3964f806a5b777ae64187867e5c7d6cd20cd389a5471b814->leave($__internal_68a2f5e37dc7fd6c3964f806a5b777ae64187867e5c7d6cd20cd389a5471b814_prof);

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
{% endblock %}", ":default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/default/index.html.twig");
    }
}
