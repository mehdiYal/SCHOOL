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
        $__internal_651c26b3b1fd118907e066f2f8da0602fde412fb30be9f3de3c1c4e412b0ee8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651c26b3b1fd118907e066f2f8da0602fde412fb30be9f3de3c1c4e412b0ee8e->enter($__internal_651c26b3b1fd118907e066f2f8da0602fde412fb30be9f3de3c1c4e412b0ee8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_538ea5d524e7b690091950a0216410ded1cf12564c42f816333221b58d01e7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538ea5d524e7b690091950a0216410ded1cf12564c42f816333221b58d01e7ed->enter($__internal_538ea5d524e7b690091950a0216410ded1cf12564c42f816333221b58d01e7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651c26b3b1fd118907e066f2f8da0602fde412fb30be9f3de3c1c4e412b0ee8e->leave($__internal_651c26b3b1fd118907e066f2f8da0602fde412fb30be9f3de3c1c4e412b0ee8e_prof);

        
        $__internal_538ea5d524e7b690091950a0216410ded1cf12564c42f816333221b58d01e7ed->leave($__internal_538ea5d524e7b690091950a0216410ded1cf12564c42f816333221b58d01e7ed_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0f18f14c5f4a9f55b6c132b5e077072dbec77c346b3d4b29e84c2e14631a6985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f18f14c5f4a9f55b6c132b5e077072dbec77c346b3d4b29e84c2e14631a6985->enter($__internal_0f18f14c5f4a9f55b6c132b5e077072dbec77c346b3d4b29e84c2e14631a6985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_87a3edf4a5667f549cf27f9cf9431affe0b21377408e15be69459b55a21727dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a3edf4a5667f549cf27f9cf9431affe0b21377408e15be69459b55a21727dc->enter($__internal_87a3edf4a5667f549cf27f9cf9431affe0b21377408e15be69459b55a21727dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_87a3edf4a5667f549cf27f9cf9431affe0b21377408e15be69459b55a21727dc->leave($__internal_87a3edf4a5667f549cf27f9cf9431affe0b21377408e15be69459b55a21727dc_prof);

        
        $__internal_0f18f14c5f4a9f55b6c132b5e077072dbec77c346b3d4b29e84c2e14631a6985->leave($__internal_0f18f14c5f4a9f55b6c132b5e077072dbec77c346b3d4b29e84c2e14631a6985_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7503379c5e3c5a0aa90dfa9aad3bed5fcb96b225a5862d5f8264b24a87f18c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7503379c5e3c5a0aa90dfa9aad3bed5fcb96b225a5862d5f8264b24a87f18c19->enter($__internal_7503379c5e3c5a0aa90dfa9aad3bed5fcb96b225a5862d5f8264b24a87f18c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_300246a4e808f83f28e8a8549b4d05cbc83f8ee39929ea6b5e58346759ddb047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300246a4e808f83f28e8a8549b4d05cbc83f8ee39929ea6b5e58346759ddb047->enter($__internal_300246a4e808f83f28e8a8549b4d05cbc83f8ee39929ea6b5e58346759ddb047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_300246a4e808f83f28e8a8549b4d05cbc83f8ee39929ea6b5e58346759ddb047->leave($__internal_300246a4e808f83f28e8a8549b4d05cbc83f8ee39929ea6b5e58346759ddb047_prof);

        
        $__internal_7503379c5e3c5a0aa90dfa9aad3bed5fcb96b225a5862d5f8264b24a87f18c19->leave($__internal_7503379c5e3c5a0aa90dfa9aad3bed5fcb96b225a5862d5f8264b24a87f18c19_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
