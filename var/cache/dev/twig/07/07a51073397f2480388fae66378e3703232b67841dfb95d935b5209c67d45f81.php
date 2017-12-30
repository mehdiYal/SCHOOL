<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bbcbd6b2ea0c02d3c8af905476019a46238d446e4a41f92b5bc27190f9579549 extends Twig_Template
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
        $__internal_c3d012b093914ee986f46a4ff266235ad299319207c78b2a55a58321cbd37cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d012b093914ee986f46a4ff266235ad299319207c78b2a55a58321cbd37cce->enter($__internal_c3d012b093914ee986f46a4ff266235ad299319207c78b2a55a58321cbd37cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e151695dfdac91b579896691ded68f7f75d0c7fb074c572d098f2a9745dca49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e151695dfdac91b579896691ded68f7f75d0c7fb074c572d098f2a9745dca49d->enter($__internal_e151695dfdac91b579896691ded68f7f75d0c7fb074c572d098f2a9745dca49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d012b093914ee986f46a4ff266235ad299319207c78b2a55a58321cbd37cce->leave($__internal_c3d012b093914ee986f46a4ff266235ad299319207c78b2a55a58321cbd37cce_prof);

        
        $__internal_e151695dfdac91b579896691ded68f7f75d0c7fb074c572d098f2a9745dca49d->leave($__internal_e151695dfdac91b579896691ded68f7f75d0c7fb074c572d098f2a9745dca49d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_caff1b477af0965e5ebcb8bdfc6f3c847d35964ba99fdbeffcc3cb13b7948821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caff1b477af0965e5ebcb8bdfc6f3c847d35964ba99fdbeffcc3cb13b7948821->enter($__internal_caff1b477af0965e5ebcb8bdfc6f3c847d35964ba99fdbeffcc3cb13b7948821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2262436ce4ee35c8ef5e85eff5ac3ba074ee35c71c610c3a8a18eb321518213d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2262436ce4ee35c8ef5e85eff5ac3ba074ee35c71c610c3a8a18eb321518213d->enter($__internal_2262436ce4ee35c8ef5e85eff5ac3ba074ee35c71c610c3a8a18eb321518213d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2262436ce4ee35c8ef5e85eff5ac3ba074ee35c71c610c3a8a18eb321518213d->leave($__internal_2262436ce4ee35c8ef5e85eff5ac3ba074ee35c71c610c3a8a18eb321518213d_prof);

        
        $__internal_caff1b477af0965e5ebcb8bdfc6f3c847d35964ba99fdbeffcc3cb13b7948821->leave($__internal_caff1b477af0965e5ebcb8bdfc6f3c847d35964ba99fdbeffcc3cb13b7948821_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
