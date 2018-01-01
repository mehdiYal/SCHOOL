<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_477976d48833ae19ea6cd1c14017c1326b491551cd2e5e1e8fe631dd939fa17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce14a49a1df21767d5032b122edeeb48b52be6f7404d56cfda7362eaefe41620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce14a49a1df21767d5032b122edeeb48b52be6f7404d56cfda7362eaefe41620->enter($__internal_ce14a49a1df21767d5032b122edeeb48b52be6f7404d56cfda7362eaefe41620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_bd6ada54849d09f114eac1ee003ee32ca1f22f72fdab73200668cb1face6dbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6ada54849d09f114eac1ee003ee32ca1f22f72fdab73200668cb1face6dbc3->enter($__internal_bd6ada54849d09f114eac1ee003ee32ca1f22f72fdab73200668cb1face6dbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce14a49a1df21767d5032b122edeeb48b52be6f7404d56cfda7362eaefe41620->leave($__internal_ce14a49a1df21767d5032b122edeeb48b52be6f7404d56cfda7362eaefe41620_prof);

        
        $__internal_bd6ada54849d09f114eac1ee003ee32ca1f22f72fdab73200668cb1face6dbc3->leave($__internal_bd6ada54849d09f114eac1ee003ee32ca1f22f72fdab73200668cb1face6dbc3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3f79fce6f702a08e59a9c52ebe454df61d966f18124d112f99975ed650c5e9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f79fce6f702a08e59a9c52ebe454df61d966f18124d112f99975ed650c5e9af->enter($__internal_3f79fce6f702a08e59a9c52ebe454df61d966f18124d112f99975ed650c5e9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_59cfa7ae663597532acbcda3cb6a07370844e9d78736107319958e76d5329a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cfa7ae663597532acbcda3cb6a07370844e9d78736107319958e76d5329a26->enter($__internal_59cfa7ae663597532acbcda3cb6a07370844e9d78736107319958e76d5329a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_59cfa7ae663597532acbcda3cb6a07370844e9d78736107319958e76d5329a26->leave($__internal_59cfa7ae663597532acbcda3cb6a07370844e9d78736107319958e76d5329a26_prof);

        
        $__internal_3f79fce6f702a08e59a9c52ebe454df61d966f18124d112f99975ed650c5e9af->leave($__internal_3f79fce6f702a08e59a9c52ebe454df61d966f18124d112f99975ed650c5e9af_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38cdcfcb727e3023a2bc5ca34d983c02b9e34de58ce9ce49fefee507bdb3c9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38cdcfcb727e3023a2bc5ca34d983c02b9e34de58ce9ce49fefee507bdb3c9c5->enter($__internal_38cdcfcb727e3023a2bc5ca34d983c02b9e34de58ce9ce49fefee507bdb3c9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64e9c68603998cc811c984ae27618f33cbf4b4965913dc64fb5fe5efda071067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e9c68603998cc811c984ae27618f33cbf4b4965913dc64fb5fe5efda071067->enter($__internal_64e9c68603998cc811c984ae27618f33cbf4b4965913dc64fb5fe5efda071067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_64e9c68603998cc811c984ae27618f33cbf4b4965913dc64fb5fe5efda071067->leave($__internal_64e9c68603998cc811c984ae27618f33cbf4b4965913dc64fb5fe5efda071067_prof);

        
        $__internal_38cdcfcb727e3023a2bc5ca34d983c02b9e34de58ce9ce49fefee507bdb3c9c5->leave($__internal_38cdcfcb727e3023a2bc5ca34d983c02b9e34de58ce9ce49fefee507bdb3c9c5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
