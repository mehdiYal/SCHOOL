<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_06e1600ecf51c66b54c73a140cd4240249fa0211bc6c66755f6a6b07e5fa3748 extends Twig_Template
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
        $__internal_8453dd8dd27d9c4149fd8209e981b331b76e66292851460795ef32fc889b3e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8453dd8dd27d9c4149fd8209e981b331b76e66292851460795ef32fc889b3e15->enter($__internal_8453dd8dd27d9c4149fd8209e981b331b76e66292851460795ef32fc889b3e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_363b29c08e38c71d9e6a218842e50422f9185430fdfd3132ba4538925f8026de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363b29c08e38c71d9e6a218842e50422f9185430fdfd3132ba4538925f8026de->enter($__internal_363b29c08e38c71d9e6a218842e50422f9185430fdfd3132ba4538925f8026de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8453dd8dd27d9c4149fd8209e981b331b76e66292851460795ef32fc889b3e15->leave($__internal_8453dd8dd27d9c4149fd8209e981b331b76e66292851460795ef32fc889b3e15_prof);

        
        $__internal_363b29c08e38c71d9e6a218842e50422f9185430fdfd3132ba4538925f8026de->leave($__internal_363b29c08e38c71d9e6a218842e50422f9185430fdfd3132ba4538925f8026de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ef718231ff17d2cb7bc354ee7b1e15f20c39efbe959fd20b8e33baf029833d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef718231ff17d2cb7bc354ee7b1e15f20c39efbe959fd20b8e33baf029833d6->enter($__internal_4ef718231ff17d2cb7bc354ee7b1e15f20c39efbe959fd20b8e33baf029833d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3020a0e1c83e164ac894bac2aa24effba2ddf755a0f70c57cf3802f714467522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3020a0e1c83e164ac894bac2aa24effba2ddf755a0f70c57cf3802f714467522->enter($__internal_3020a0e1c83e164ac894bac2aa24effba2ddf755a0f70c57cf3802f714467522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3020a0e1c83e164ac894bac2aa24effba2ddf755a0f70c57cf3802f714467522->leave($__internal_3020a0e1c83e164ac894bac2aa24effba2ddf755a0f70c57cf3802f714467522_prof);

        
        $__internal_4ef718231ff17d2cb7bc354ee7b1e15f20c39efbe959fd20b8e33baf029833d6->leave($__internal_4ef718231ff17d2cb7bc354ee7b1e15f20c39efbe959fd20b8e33baf029833d6_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
