<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_01a16bb4f659be9addd18e3a33b2a1a9aab56ddabea244bec55050b1b0a0019d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_247334232945c468fb6626bb92d70a4a03a41225456f03ae1c592af0b08190c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247334232945c468fb6626bb92d70a4a03a41225456f03ae1c592af0b08190c6->enter($__internal_247334232945c468fb6626bb92d70a4a03a41225456f03ae1c592af0b08190c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fbdd10ce09ca5e73d161de3cd702b78f03a22c573a777c3d43a15ddf3cc9923b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdd10ce09ca5e73d161de3cd702b78f03a22c573a777c3d43a15ddf3cc9923b->enter($__internal_fbdd10ce09ca5e73d161de3cd702b78f03a22c573a777c3d43a15ddf3cc9923b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247334232945c468fb6626bb92d70a4a03a41225456f03ae1c592af0b08190c6->leave($__internal_247334232945c468fb6626bb92d70a4a03a41225456f03ae1c592af0b08190c6_prof);

        
        $__internal_fbdd10ce09ca5e73d161de3cd702b78f03a22c573a777c3d43a15ddf3cc9923b->leave($__internal_fbdd10ce09ca5e73d161de3cd702b78f03a22c573a777c3d43a15ddf3cc9923b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8f26b2431de380df5f30ee6af32311eee2ca0535d7c96847687341013a33727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f26b2431de380df5f30ee6af32311eee2ca0535d7c96847687341013a33727->enter($__internal_b8f26b2431de380df5f30ee6af32311eee2ca0535d7c96847687341013a33727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ed27b8ef8cfbfbd12561db40afc7849d5907b814e575f0b13dada4939320bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed27b8ef8cfbfbd12561db40afc7849d5907b814e575f0b13dada4939320bad->enter($__internal_5ed27b8ef8cfbfbd12561db40afc7849d5907b814e575f0b13dada4939320bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5ed27b8ef8cfbfbd12561db40afc7849d5907b814e575f0b13dada4939320bad->leave($__internal_5ed27b8ef8cfbfbd12561db40afc7849d5907b814e575f0b13dada4939320bad_prof);

        
        $__internal_b8f26b2431de380df5f30ee6af32311eee2ca0535d7c96847687341013a33727->leave($__internal_b8f26b2431de380df5f30ee6af32311eee2ca0535d7c96847687341013a33727_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce7be2ca0b5385206bbd85efcf209003490dddd2e8538ea2a5445c72c48cad9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7be2ca0b5385206bbd85efcf209003490dddd2e8538ea2a5445c72c48cad9d->enter($__internal_ce7be2ca0b5385206bbd85efcf209003490dddd2e8538ea2a5445c72c48cad9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04e2dba4e92558b3c99e3ca46a916b0b834c35d17568d6098c73919a3d148a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e2dba4e92558b3c99e3ca46a916b0b834c35d17568d6098c73919a3d148a90->enter($__internal_04e2dba4e92558b3c99e3ca46a916b0b834c35d17568d6098c73919a3d148a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_04e2dba4e92558b3c99e3ca46a916b0b834c35d17568d6098c73919a3d148a90->leave($__internal_04e2dba4e92558b3c99e3ca46a916b0b834c35d17568d6098c73919a3d148a90_prof);

        
        $__internal_ce7be2ca0b5385206bbd85efcf209003490dddd2e8538ea2a5445c72c48cad9d->leave($__internal_ce7be2ca0b5385206bbd85efcf209003490dddd2e8538ea2a5445c72c48cad9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
