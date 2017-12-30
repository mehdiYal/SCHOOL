<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_fb5185a8d4de6b6a91b0abfe31fdc73a594186448219381e839a7fb27e083c70 extends Twig_Template
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
        $__internal_b0c93d44fd869e32a8581e356bb850548549265931e4c100e8819f4905d6a6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c93d44fd869e32a8581e356bb850548549265931e4c100e8819f4905d6a6b0->enter($__internal_b0c93d44fd869e32a8581e356bb850548549265931e4c100e8819f4905d6a6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_278afa54ea70a81e49ef2109c3deab62dc1a104815a1d4fc864c77b0aaacc627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278afa54ea70a81e49ef2109c3deab62dc1a104815a1d4fc864c77b0aaacc627->enter($__internal_278afa54ea70a81e49ef2109c3deab62dc1a104815a1d4fc864c77b0aaacc627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0c93d44fd869e32a8581e356bb850548549265931e4c100e8819f4905d6a6b0->leave($__internal_b0c93d44fd869e32a8581e356bb850548549265931e4c100e8819f4905d6a6b0_prof);

        
        $__internal_278afa54ea70a81e49ef2109c3deab62dc1a104815a1d4fc864c77b0aaacc627->leave($__internal_278afa54ea70a81e49ef2109c3deab62dc1a104815a1d4fc864c77b0aaacc627_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee9a4e581e17f6e279673a662dc7cbdf037eedcb62532458ce0aa4a5a4e08228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9a4e581e17f6e279673a662dc7cbdf037eedcb62532458ce0aa4a5a4e08228->enter($__internal_ee9a4e581e17f6e279673a662dc7cbdf037eedcb62532458ce0aa4a5a4e08228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b8e947f6465df1107131f5c87955d338f67cbb52f2a2e7a4fe675b6b85678184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e947f6465df1107131f5c87955d338f67cbb52f2a2e7a4fe675b6b85678184->enter($__internal_b8e947f6465df1107131f5c87955d338f67cbb52f2a2e7a4fe675b6b85678184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b8e947f6465df1107131f5c87955d338f67cbb52f2a2e7a4fe675b6b85678184->leave($__internal_b8e947f6465df1107131f5c87955d338f67cbb52f2a2e7a4fe675b6b85678184_prof);

        
        $__internal_ee9a4e581e17f6e279673a662dc7cbdf037eedcb62532458ce0aa4a5a4e08228->leave($__internal_ee9a4e581e17f6e279673a662dc7cbdf037eedcb62532458ce0aa4a5a4e08228_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
