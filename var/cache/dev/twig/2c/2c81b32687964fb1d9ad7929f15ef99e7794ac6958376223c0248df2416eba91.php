<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_0ce76abf968b1b253cc26f3e015d68e797208090f7e3198faeef914093b3a97f extends Twig_Template
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
        $__internal_cebc72a35e951ecba1d6bef618b7dbbb898a2ce98b4e5116e3a58c16829271e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cebc72a35e951ecba1d6bef618b7dbbb898a2ce98b4e5116e3a58c16829271e9->enter($__internal_cebc72a35e951ecba1d6bef618b7dbbb898a2ce98b4e5116e3a58c16829271e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5bd74bd559a9d217949d23904ffe14b22536be751218fb7e62c135d21d0423b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd74bd559a9d217949d23904ffe14b22536be751218fb7e62c135d21d0423b1->enter($__internal_5bd74bd559a9d217949d23904ffe14b22536be751218fb7e62c135d21d0423b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebc72a35e951ecba1d6bef618b7dbbb898a2ce98b4e5116e3a58c16829271e9->leave($__internal_cebc72a35e951ecba1d6bef618b7dbbb898a2ce98b4e5116e3a58c16829271e9_prof);

        
        $__internal_5bd74bd559a9d217949d23904ffe14b22536be751218fb7e62c135d21d0423b1->leave($__internal_5bd74bd559a9d217949d23904ffe14b22536be751218fb7e62c135d21d0423b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a73b44101b2645b5c600836858142fdcb938a0d5f92c6c81b4f5ff48b0b3820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a73b44101b2645b5c600836858142fdcb938a0d5f92c6c81b4f5ff48b0b3820->enter($__internal_9a73b44101b2645b5c600836858142fdcb938a0d5f92c6c81b4f5ff48b0b3820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_546bea5bda4ba78b8a02b923417e3330ea46956817b0c86f3878edf8da58a4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546bea5bda4ba78b8a02b923417e3330ea46956817b0c86f3878edf8da58a4b2->enter($__internal_546bea5bda4ba78b8a02b923417e3330ea46956817b0c86f3878edf8da58a4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_546bea5bda4ba78b8a02b923417e3330ea46956817b0c86f3878edf8da58a4b2->leave($__internal_546bea5bda4ba78b8a02b923417e3330ea46956817b0c86f3878edf8da58a4b2_prof);

        
        $__internal_9a73b44101b2645b5c600836858142fdcb938a0d5f92c6c81b4f5ff48b0b3820->leave($__internal_9a73b44101b2645b5c600836858142fdcb938a0d5f92c6c81b4f5ff48b0b3820_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
