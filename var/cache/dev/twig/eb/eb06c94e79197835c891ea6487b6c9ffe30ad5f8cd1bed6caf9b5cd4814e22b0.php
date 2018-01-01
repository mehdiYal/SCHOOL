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
        $__internal_872ba878cb2411b04a05b797f97c573283c8e6a7f814b906d825f0cb90c981ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872ba878cb2411b04a05b797f97c573283c8e6a7f814b906d825f0cb90c981ea->enter($__internal_872ba878cb2411b04a05b797f97c573283c8e6a7f814b906d825f0cb90c981ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1b406fcd4e0b6201e0303ceafb7093c03f7b3bfceb440c6bfa794c3d05c5ba0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b406fcd4e0b6201e0303ceafb7093c03f7b3bfceb440c6bfa794c3d05c5ba0b->enter($__internal_1b406fcd4e0b6201e0303ceafb7093c03f7b3bfceb440c6bfa794c3d05c5ba0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872ba878cb2411b04a05b797f97c573283c8e6a7f814b906d825f0cb90c981ea->leave($__internal_872ba878cb2411b04a05b797f97c573283c8e6a7f814b906d825f0cb90c981ea_prof);

        
        $__internal_1b406fcd4e0b6201e0303ceafb7093c03f7b3bfceb440c6bfa794c3d05c5ba0b->leave($__internal_1b406fcd4e0b6201e0303ceafb7093c03f7b3bfceb440c6bfa794c3d05c5ba0b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f5f85f88b0a809da68a01d829fdc59d8781e5ee3c8ed99c37eb9221288aff56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f85f88b0a809da68a01d829fdc59d8781e5ee3c8ed99c37eb9221288aff56d->enter($__internal_f5f85f88b0a809da68a01d829fdc59d8781e5ee3c8ed99c37eb9221288aff56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a48cc257d2311f1c19e0c7ec5030af4046a4fa0f800366531dfbfb6f15a2f2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48cc257d2311f1c19e0c7ec5030af4046a4fa0f800366531dfbfb6f15a2f2fb->enter($__internal_a48cc257d2311f1c19e0c7ec5030af4046a4fa0f800366531dfbfb6f15a2f2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a48cc257d2311f1c19e0c7ec5030af4046a4fa0f800366531dfbfb6f15a2f2fb->leave($__internal_a48cc257d2311f1c19e0c7ec5030af4046a4fa0f800366531dfbfb6f15a2f2fb_prof);

        
        $__internal_f5f85f88b0a809da68a01d829fdc59d8781e5ee3c8ed99c37eb9221288aff56d->leave($__internal_f5f85f88b0a809da68a01d829fdc59d8781e5ee3c8ed99c37eb9221288aff56d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e36e101e78c462efe8253cd0eeed59d08fc61fa1bfd6987d61c8cf3166b0f256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36e101e78c462efe8253cd0eeed59d08fc61fa1bfd6987d61c8cf3166b0f256->enter($__internal_e36e101e78c462efe8253cd0eeed59d08fc61fa1bfd6987d61c8cf3166b0f256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_649f1464ed44b0ca66012b148a9db290034f021fc8777c48bf4de6693b1a64e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649f1464ed44b0ca66012b148a9db290034f021fc8777c48bf4de6693b1a64e6->enter($__internal_649f1464ed44b0ca66012b148a9db290034f021fc8777c48bf4de6693b1a64e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_649f1464ed44b0ca66012b148a9db290034f021fc8777c48bf4de6693b1a64e6->leave($__internal_649f1464ed44b0ca66012b148a9db290034f021fc8777c48bf4de6693b1a64e6_prof);

        
        $__internal_e36e101e78c462efe8253cd0eeed59d08fc61fa1bfd6987d61c8cf3166b0f256->leave($__internal_e36e101e78c462efe8253cd0eeed59d08fc61fa1bfd6987d61c8cf3166b0f256_prof);

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
