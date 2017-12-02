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
        $__internal_df4f483130c4f2f9e229d3759483e9b14438d9839769664b28796fc7c6f1a771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4f483130c4f2f9e229d3759483e9b14438d9839769664b28796fc7c6f1a771->enter($__internal_df4f483130c4f2f9e229d3759483e9b14438d9839769664b28796fc7c6f1a771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2e375c15ffa6ead82dd891cb5eb600b540615d39272cf3929a9f7f227e873500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e375c15ffa6ead82dd891cb5eb600b540615d39272cf3929a9f7f227e873500->enter($__internal_2e375c15ffa6ead82dd891cb5eb600b540615d39272cf3929a9f7f227e873500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4f483130c4f2f9e229d3759483e9b14438d9839769664b28796fc7c6f1a771->leave($__internal_df4f483130c4f2f9e229d3759483e9b14438d9839769664b28796fc7c6f1a771_prof);

        
        $__internal_2e375c15ffa6ead82dd891cb5eb600b540615d39272cf3929a9f7f227e873500->leave($__internal_2e375c15ffa6ead82dd891cb5eb600b540615d39272cf3929a9f7f227e873500_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2dc94ec199c1ddfe55b5621fecf183a0c87b7d24ee95233654c21ba864d91f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc94ec199c1ddfe55b5621fecf183a0c87b7d24ee95233654c21ba864d91f1d->enter($__internal_2dc94ec199c1ddfe55b5621fecf183a0c87b7d24ee95233654c21ba864d91f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5b82d55470c7f34e3fdc818d0948f152515108d92f651af019698898f62e6d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b82d55470c7f34e3fdc818d0948f152515108d92f651af019698898f62e6d34->enter($__internal_5b82d55470c7f34e3fdc818d0948f152515108d92f651af019698898f62e6d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5b82d55470c7f34e3fdc818d0948f152515108d92f651af019698898f62e6d34->leave($__internal_5b82d55470c7f34e3fdc818d0948f152515108d92f651af019698898f62e6d34_prof);

        
        $__internal_2dc94ec199c1ddfe55b5621fecf183a0c87b7d24ee95233654c21ba864d91f1d->leave($__internal_2dc94ec199c1ddfe55b5621fecf183a0c87b7d24ee95233654c21ba864d91f1d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7274fe9d37ab79eb9fd6688b597fe9122b9b3321ac9b26932fa0a8cbcef036c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7274fe9d37ab79eb9fd6688b597fe9122b9b3321ac9b26932fa0a8cbcef036c->enter($__internal_f7274fe9d37ab79eb9fd6688b597fe9122b9b3321ac9b26932fa0a8cbcef036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12861f357c1680a5ba260402224888f364a9a614efce4118fb1ade33fbe49cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12861f357c1680a5ba260402224888f364a9a614efce4118fb1ade33fbe49cbc->enter($__internal_12861f357c1680a5ba260402224888f364a9a614efce4118fb1ade33fbe49cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_12861f357c1680a5ba260402224888f364a9a614efce4118fb1ade33fbe49cbc->leave($__internal_12861f357c1680a5ba260402224888f364a9a614efce4118fb1ade33fbe49cbc_prof);

        
        $__internal_f7274fe9d37ab79eb9fd6688b597fe9122b9b3321ac9b26932fa0a8cbcef036c->leave($__internal_f7274fe9d37ab79eb9fd6688b597fe9122b9b3321ac9b26932fa0a8cbcef036c_prof);

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
