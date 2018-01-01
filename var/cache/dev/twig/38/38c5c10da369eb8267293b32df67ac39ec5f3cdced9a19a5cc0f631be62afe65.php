<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_02c4d483da1147390f6b8099d7ba5e658532767464b635b91002e54b603e5b1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_e49066e4f8ddac7a19d9373edc55078ef177ce01776c87f1cdb2107b2066ec35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49066e4f8ddac7a19d9373edc55078ef177ce01776c87f1cdb2107b2066ec35->enter($__internal_e49066e4f8ddac7a19d9373edc55078ef177ce01776c87f1cdb2107b2066ec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_21e0e6b346e8e581aedab3bf2260e1f5f76dd14e74a6c0f0da07283d4907cb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e0e6b346e8e581aedab3bf2260e1f5f76dd14e74a6c0f0da07283d4907cb63->enter($__internal_21e0e6b346e8e581aedab3bf2260e1f5f76dd14e74a6c0f0da07283d4907cb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e49066e4f8ddac7a19d9373edc55078ef177ce01776c87f1cdb2107b2066ec35->leave($__internal_e49066e4f8ddac7a19d9373edc55078ef177ce01776c87f1cdb2107b2066ec35_prof);

        
        $__internal_21e0e6b346e8e581aedab3bf2260e1f5f76dd14e74a6c0f0da07283d4907cb63->leave($__internal_21e0e6b346e8e581aedab3bf2260e1f5f76dd14e74a6c0f0da07283d4907cb63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12531bfb3c0d3461ac1296cb73467d283b090a9097d4bc145ada856203647e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12531bfb3c0d3461ac1296cb73467d283b090a9097d4bc145ada856203647e7f->enter($__internal_12531bfb3c0d3461ac1296cb73467d283b090a9097d4bc145ada856203647e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b4b96f0dc983bac14f84005f0e818f566ab54b5ab0c83b095a79518a308cd6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b96f0dc983bac14f84005f0e818f566ab54b5ab0c83b095a79518a308cd6f4->enter($__internal_b4b96f0dc983bac14f84005f0e818f566ab54b5ab0c83b095a79518a308cd6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b4b96f0dc983bac14f84005f0e818f566ab54b5ab0c83b095a79518a308cd6f4->leave($__internal_b4b96f0dc983bac14f84005f0e818f566ab54b5ab0c83b095a79518a308cd6f4_prof);

        
        $__internal_12531bfb3c0d3461ac1296cb73467d283b090a9097d4bc145ada856203647e7f->leave($__internal_12531bfb3c0d3461ac1296cb73467d283b090a9097d4bc145ada856203647e7f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}