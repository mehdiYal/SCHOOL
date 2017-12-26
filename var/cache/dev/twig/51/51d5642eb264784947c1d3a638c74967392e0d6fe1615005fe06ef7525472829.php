<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1827ab07c1151b43b419fba7e405c6d2e4551d3c313d93a4e44dbcb01daa1b06 extends Twig_Template
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
        $__internal_6936ff5ee75a39e365e20eec1a7817065c3f12ba8cfa0fb756eb79ac0138455f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6936ff5ee75a39e365e20eec1a7817065c3f12ba8cfa0fb756eb79ac0138455f->enter($__internal_6936ff5ee75a39e365e20eec1a7817065c3f12ba8cfa0fb756eb79ac0138455f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4d554270f428fc43a00b5b83ecdb8b5d2f0e2d839dae7a8ec50a7cebd1167901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d554270f428fc43a00b5b83ecdb8b5d2f0e2d839dae7a8ec50a7cebd1167901->enter($__internal_4d554270f428fc43a00b5b83ecdb8b5d2f0e2d839dae7a8ec50a7cebd1167901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6936ff5ee75a39e365e20eec1a7817065c3f12ba8cfa0fb756eb79ac0138455f->leave($__internal_6936ff5ee75a39e365e20eec1a7817065c3f12ba8cfa0fb756eb79ac0138455f_prof);

        
        $__internal_4d554270f428fc43a00b5b83ecdb8b5d2f0e2d839dae7a8ec50a7cebd1167901->leave($__internal_4d554270f428fc43a00b5b83ecdb8b5d2f0e2d839dae7a8ec50a7cebd1167901_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1000c063aedc4d47cb10f04ef645d6d642a5e90d09f290898766a314ccb65268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1000c063aedc4d47cb10f04ef645d6d642a5e90d09f290898766a314ccb65268->enter($__internal_1000c063aedc4d47cb10f04ef645d6d642a5e90d09f290898766a314ccb65268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf0a2c35c9e429c4f04ca226233e1a7cd75ee51f3743f9bab55de5880778fbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0a2c35c9e429c4f04ca226233e1a7cd75ee51f3743f9bab55de5880778fbd3->enter($__internal_bf0a2c35c9e429c4f04ca226233e1a7cd75ee51f3743f9bab55de5880778fbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bf0a2c35c9e429c4f04ca226233e1a7cd75ee51f3743f9bab55de5880778fbd3->leave($__internal_bf0a2c35c9e429c4f04ca226233e1a7cd75ee51f3743f9bab55de5880778fbd3_prof);

        
        $__internal_1000c063aedc4d47cb10f04ef645d6d642a5e90d09f290898766a314ccb65268->leave($__internal_1000c063aedc4d47cb10f04ef645d6d642a5e90d09f290898766a314ccb65268_prof);

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
