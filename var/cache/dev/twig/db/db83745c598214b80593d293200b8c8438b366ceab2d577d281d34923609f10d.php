<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_db981745479cac9450bb7c4639df7a45a05e39e875b2be790d5ebf47495d8862 extends Twig_Template
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
        $__internal_47e972000195d922ba525b74c303d0a46902abbab32f11bbd9e9cd4cb35a17eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e972000195d922ba525b74c303d0a46902abbab32f11bbd9e9cd4cb35a17eb->enter($__internal_47e972000195d922ba525b74c303d0a46902abbab32f11bbd9e9cd4cb35a17eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_55916352edd8c9dbf73fc1c4306338cc6aa2c4c39f53d917a42c853dc414cd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55916352edd8c9dbf73fc1c4306338cc6aa2c4c39f53d917a42c853dc414cd6b->enter($__internal_55916352edd8c9dbf73fc1c4306338cc6aa2c4c39f53d917a42c853dc414cd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47e972000195d922ba525b74c303d0a46902abbab32f11bbd9e9cd4cb35a17eb->leave($__internal_47e972000195d922ba525b74c303d0a46902abbab32f11bbd9e9cd4cb35a17eb_prof);

        
        $__internal_55916352edd8c9dbf73fc1c4306338cc6aa2c4c39f53d917a42c853dc414cd6b->leave($__internal_55916352edd8c9dbf73fc1c4306338cc6aa2c4c39f53d917a42c853dc414cd6b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d32a7a92c065be30cd24041b0280b5a4f68de5f419d69d8f1b8907b7ef71fe2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32a7a92c065be30cd24041b0280b5a4f68de5f419d69d8f1b8907b7ef71fe2b->enter($__internal_d32a7a92c065be30cd24041b0280b5a4f68de5f419d69d8f1b8907b7ef71fe2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_153d0c761b6eb6747787275d5d99642973d0926b9511270f87c9b74947bcb9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153d0c761b6eb6747787275d5d99642973d0926b9511270f87c9b74947bcb9da->enter($__internal_153d0c761b6eb6747787275d5d99642973d0926b9511270f87c9b74947bcb9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_153d0c761b6eb6747787275d5d99642973d0926b9511270f87c9b74947bcb9da->leave($__internal_153d0c761b6eb6747787275d5d99642973d0926b9511270f87c9b74947bcb9da_prof);

        
        $__internal_d32a7a92c065be30cd24041b0280b5a4f68de5f419d69d8f1b8907b7ef71fe2b->leave($__internal_d32a7a92c065be30cd24041b0280b5a4f68de5f419d69d8f1b8907b7ef71fe2b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_191efdf14f3c94a83a9fb1436116d3dfb21ae94e8830b723de47ce6d0ece04e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191efdf14f3c94a83a9fb1436116d3dfb21ae94e8830b723de47ce6d0ece04e9->enter($__internal_191efdf14f3c94a83a9fb1436116d3dfb21ae94e8830b723de47ce6d0ece04e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_efca602573c9df644d622315f7ec1a3d65db5bdd69088f85a3031359f6662649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efca602573c9df644d622315f7ec1a3d65db5bdd69088f85a3031359f6662649->enter($__internal_efca602573c9df644d622315f7ec1a3d65db5bdd69088f85a3031359f6662649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_efca602573c9df644d622315f7ec1a3d65db5bdd69088f85a3031359f6662649->leave($__internal_efca602573c9df644d622315f7ec1a3d65db5bdd69088f85a3031359f6662649_prof);

        
        $__internal_191efdf14f3c94a83a9fb1436116d3dfb21ae94e8830b723de47ce6d0ece04e9->leave($__internal_191efdf14f3c94a83a9fb1436116d3dfb21ae94e8830b723de47ce6d0ece04e9_prof);

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
