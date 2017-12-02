<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_edaf73c63603964fb658c57af8131b0c2cdc9036093ba63fa1e26ededaf215dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86d7a58f9f1abe95467d457a1c1fec9a55aa3d0e260f48b5cd3809cad0781f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d7a58f9f1abe95467d457a1c1fec9a55aa3d0e260f48b5cd3809cad0781f3c->enter($__internal_86d7a58f9f1abe95467d457a1c1fec9a55aa3d0e260f48b5cd3809cad0781f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fbf39fedf7cec15879b84b030357d8916ddaa2fcb9d886eb2410f9e489507d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf39fedf7cec15879b84b030357d8916ddaa2fcb9d886eb2410f9e489507d1d->enter($__internal_fbf39fedf7cec15879b84b030357d8916ddaa2fcb9d886eb2410f9e489507d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d7a58f9f1abe95467d457a1c1fec9a55aa3d0e260f48b5cd3809cad0781f3c->leave($__internal_86d7a58f9f1abe95467d457a1c1fec9a55aa3d0e260f48b5cd3809cad0781f3c_prof);

        
        $__internal_fbf39fedf7cec15879b84b030357d8916ddaa2fcb9d886eb2410f9e489507d1d->leave($__internal_fbf39fedf7cec15879b84b030357d8916ddaa2fcb9d886eb2410f9e489507d1d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2f7f08a5a80e2672476736cfff3e35c8d916387d28aecc6d30a61cffc425d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f7f08a5a80e2672476736cfff3e35c8d916387d28aecc6d30a61cffc425d2e->enter($__internal_b2f7f08a5a80e2672476736cfff3e35c8d916387d28aecc6d30a61cffc425d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eb68115aa70e792dda16b72f7f1dda4f194d5f63246b181961a9fb3ac396f613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb68115aa70e792dda16b72f7f1dda4f194d5f63246b181961a9fb3ac396f613->enter($__internal_eb68115aa70e792dda16b72f7f1dda4f194d5f63246b181961a9fb3ac396f613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_eb68115aa70e792dda16b72f7f1dda4f194d5f63246b181961a9fb3ac396f613->leave($__internal_eb68115aa70e792dda16b72f7f1dda4f194d5f63246b181961a9fb3ac396f613_prof);

        
        $__internal_b2f7f08a5a80e2672476736cfff3e35c8d916387d28aecc6d30a61cffc425d2e->leave($__internal_b2f7f08a5a80e2672476736cfff3e35c8d916387d28aecc6d30a61cffc425d2e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
