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
        $__internal_0b8dda26b8402a60674355b265fc675ddbd6f9060a1cc7445bbe52cabcd0acc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8dda26b8402a60674355b265fc675ddbd6f9060a1cc7445bbe52cabcd0acc8->enter($__internal_0b8dda26b8402a60674355b265fc675ddbd6f9060a1cc7445bbe52cabcd0acc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_23735e5ec2b00719597764661eb4b9708c320fd115149d893049df7f55595cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23735e5ec2b00719597764661eb4b9708c320fd115149d893049df7f55595cd5->enter($__internal_23735e5ec2b00719597764661eb4b9708c320fd115149d893049df7f55595cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b8dda26b8402a60674355b265fc675ddbd6f9060a1cc7445bbe52cabcd0acc8->leave($__internal_0b8dda26b8402a60674355b265fc675ddbd6f9060a1cc7445bbe52cabcd0acc8_prof);

        
        $__internal_23735e5ec2b00719597764661eb4b9708c320fd115149d893049df7f55595cd5->leave($__internal_23735e5ec2b00719597764661eb4b9708c320fd115149d893049df7f55595cd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_115c282742f012a94572b7ea849ced7090bd078711f1bae09a4f6e3e8cb1b3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115c282742f012a94572b7ea849ced7090bd078711f1bae09a4f6e3e8cb1b3b8->enter($__internal_115c282742f012a94572b7ea849ced7090bd078711f1bae09a4f6e3e8cb1b3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3f347e51fe578eb2566a8bf1c58a9a1d3af0ccec1df8cf37bb7489fb55a24e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f347e51fe578eb2566a8bf1c58a9a1d3af0ccec1df8cf37bb7489fb55a24e8->enter($__internal_c3f347e51fe578eb2566a8bf1c58a9a1d3af0ccec1df8cf37bb7489fb55a24e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c3f347e51fe578eb2566a8bf1c58a9a1d3af0ccec1df8cf37bb7489fb55a24e8->leave($__internal_c3f347e51fe578eb2566a8bf1c58a9a1d3af0ccec1df8cf37bb7489fb55a24e8_prof);

        
        $__internal_115c282742f012a94572b7ea849ced7090bd078711f1bae09a4f6e3e8cb1b3b8->leave($__internal_115c282742f012a94572b7ea849ced7090bd078711f1bae09a4f6e3e8cb1b3b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d69511d2914ebe48bc2defccc3198bc30b94effceb1d7e4665ce699537308a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d69511d2914ebe48bc2defccc3198bc30b94effceb1d7e4665ce699537308a6->enter($__internal_4d69511d2914ebe48bc2defccc3198bc30b94effceb1d7e4665ce699537308a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b211bfa2e17aa934eb89095ba6444672c60d627f9866167fe67079c1b90b64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b211bfa2e17aa934eb89095ba6444672c60d627f9866167fe67079c1b90b64d->enter($__internal_7b211bfa2e17aa934eb89095ba6444672c60d627f9866167fe67079c1b90b64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b211bfa2e17aa934eb89095ba6444672c60d627f9866167fe67079c1b90b64d->leave($__internal_7b211bfa2e17aa934eb89095ba6444672c60d627f9866167fe67079c1b90b64d_prof);

        
        $__internal_4d69511d2914ebe48bc2defccc3198bc30b94effceb1d7e4665ce699537308a6->leave($__internal_4d69511d2914ebe48bc2defccc3198bc30b94effceb1d7e4665ce699537308a6_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
