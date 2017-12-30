<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b82bf06c593fad37838901a2677d82fa44240f88202231028179d1d571476a2b extends Twig_Template
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
        $__internal_b1a1977ad9228a29aeed9a1d732231ee28d65647f022f21f86fec321696ab895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a1977ad9228a29aeed9a1d732231ee28d65647f022f21f86fec321696ab895->enter($__internal_b1a1977ad9228a29aeed9a1d732231ee28d65647f022f21f86fec321696ab895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_77f74899bf9e289ca0b228b292800ea2088eb46a03d9df988750d41f4716e964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f74899bf9e289ca0b228b292800ea2088eb46a03d9df988750d41f4716e964->enter($__internal_77f74899bf9e289ca0b228b292800ea2088eb46a03d9df988750d41f4716e964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a1977ad9228a29aeed9a1d732231ee28d65647f022f21f86fec321696ab895->leave($__internal_b1a1977ad9228a29aeed9a1d732231ee28d65647f022f21f86fec321696ab895_prof);

        
        $__internal_77f74899bf9e289ca0b228b292800ea2088eb46a03d9df988750d41f4716e964->leave($__internal_77f74899bf9e289ca0b228b292800ea2088eb46a03d9df988750d41f4716e964_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e68cdfd8c00520fab1b64b31611a748b9707e9de0561cb263cc152713b00f43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68cdfd8c00520fab1b64b31611a748b9707e9de0561cb263cc152713b00f43b->enter($__internal_e68cdfd8c00520fab1b64b31611a748b9707e9de0561cb263cc152713b00f43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_93cfe75fc024895c49f9d84928b659b58a5c3ceee31f2904570f442e512f91f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cfe75fc024895c49f9d84928b659b58a5c3ceee31f2904570f442e512f91f7->enter($__internal_93cfe75fc024895c49f9d84928b659b58a5c3ceee31f2904570f442e512f91f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_93cfe75fc024895c49f9d84928b659b58a5c3ceee31f2904570f442e512f91f7->leave($__internal_93cfe75fc024895c49f9d84928b659b58a5c3ceee31f2904570f442e512f91f7_prof);

        
        $__internal_e68cdfd8c00520fab1b64b31611a748b9707e9de0561cb263cc152713b00f43b->leave($__internal_e68cdfd8c00520fab1b64b31611a748b9707e9de0561cb263cc152713b00f43b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0864f7faab562ed533b97b8058ded087b43b9a58e5d162da05f4b0606971465c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0864f7faab562ed533b97b8058ded087b43b9a58e5d162da05f4b0606971465c->enter($__internal_0864f7faab562ed533b97b8058ded087b43b9a58e5d162da05f4b0606971465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f75925b289c6a65b32c37dac71eed8c7535f8f284124f308dc575f8828d4b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f75925b289c6a65b32c37dac71eed8c7535f8f284124f308dc575f8828d4b1e->enter($__internal_1f75925b289c6a65b32c37dac71eed8c7535f8f284124f308dc575f8828d4b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1f75925b289c6a65b32c37dac71eed8c7535f8f284124f308dc575f8828d4b1e->leave($__internal_1f75925b289c6a65b32c37dac71eed8c7535f8f284124f308dc575f8828d4b1e_prof);

        
        $__internal_0864f7faab562ed533b97b8058ded087b43b9a58e5d162da05f4b0606971465c->leave($__internal_0864f7faab562ed533b97b8058ded087b43b9a58e5d162da05f4b0606971465c_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
