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
        $__internal_5652f77dfad7d8f362900f097242d61b148a1b1552191b01fff72e59740c9fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5652f77dfad7d8f362900f097242d61b148a1b1552191b01fff72e59740c9fd3->enter($__internal_5652f77dfad7d8f362900f097242d61b148a1b1552191b01fff72e59740c9fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3aa014c234efa9b6274b6a48a0e88fe7fde1e8399cd876182abee0afc0bedb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa014c234efa9b6274b6a48a0e88fe7fde1e8399cd876182abee0afc0bedb99->enter($__internal_3aa014c234efa9b6274b6a48a0e88fe7fde1e8399cd876182abee0afc0bedb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5652f77dfad7d8f362900f097242d61b148a1b1552191b01fff72e59740c9fd3->leave($__internal_5652f77dfad7d8f362900f097242d61b148a1b1552191b01fff72e59740c9fd3_prof);

        
        $__internal_3aa014c234efa9b6274b6a48a0e88fe7fde1e8399cd876182abee0afc0bedb99->leave($__internal_3aa014c234efa9b6274b6a48a0e88fe7fde1e8399cd876182abee0afc0bedb99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_070d0c7d06b2484a2d56f0bb2f1a9f877d3a2526e2b56118cb455712d6ce9872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070d0c7d06b2484a2d56f0bb2f1a9f877d3a2526e2b56118cb455712d6ce9872->enter($__internal_070d0c7d06b2484a2d56f0bb2f1a9f877d3a2526e2b56118cb455712d6ce9872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_517651cb3987141c996b21c729631aaa6e0c7d21dc71732969a464d8a055063d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517651cb3987141c996b21c729631aaa6e0c7d21dc71732969a464d8a055063d->enter($__internal_517651cb3987141c996b21c729631aaa6e0c7d21dc71732969a464d8a055063d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_517651cb3987141c996b21c729631aaa6e0c7d21dc71732969a464d8a055063d->leave($__internal_517651cb3987141c996b21c729631aaa6e0c7d21dc71732969a464d8a055063d_prof);

        
        $__internal_070d0c7d06b2484a2d56f0bb2f1a9f877d3a2526e2b56118cb455712d6ce9872->leave($__internal_070d0c7d06b2484a2d56f0bb2f1a9f877d3a2526e2b56118cb455712d6ce9872_prof);

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
