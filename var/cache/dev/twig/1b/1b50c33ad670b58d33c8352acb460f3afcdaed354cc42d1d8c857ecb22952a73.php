<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3b83e6298930c3d52313c1421c2cacf7f20a3651b7b442a2e59d6df562dbea9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b5a56d8f6ff4f5e4c3dd56fcc41ec561d1d3be73177bcb2d28fab5dc17a1dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5a56d8f6ff4f5e4c3dd56fcc41ec561d1d3be73177bcb2d28fab5dc17a1dc7->enter($__internal_1b5a56d8f6ff4f5e4c3dd56fcc41ec561d1d3be73177bcb2d28fab5dc17a1dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b207db85df6daeb4067eaae6bdb49971acfbe7a21d148868590ad9e1ded0ebab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b207db85df6daeb4067eaae6bdb49971acfbe7a21d148868590ad9e1ded0ebab->enter($__internal_b207db85df6daeb4067eaae6bdb49971acfbe7a21d148868590ad9e1ded0ebab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b5a56d8f6ff4f5e4c3dd56fcc41ec561d1d3be73177bcb2d28fab5dc17a1dc7->leave($__internal_1b5a56d8f6ff4f5e4c3dd56fcc41ec561d1d3be73177bcb2d28fab5dc17a1dc7_prof);

        
        $__internal_b207db85df6daeb4067eaae6bdb49971acfbe7a21d148868590ad9e1ded0ebab->leave($__internal_b207db85df6daeb4067eaae6bdb49971acfbe7a21d148868590ad9e1ded0ebab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dec269577836aa227e5a83d7f307af042e9867d69623b0a532d1a52bb3090e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec269577836aa227e5a83d7f307af042e9867d69623b0a532d1a52bb3090e4c->enter($__internal_dec269577836aa227e5a83d7f307af042e9867d69623b0a532d1a52bb3090e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be0751d03dab0b837248bd126ae3f30e53879b7a2d142bafd979088972d79514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0751d03dab0b837248bd126ae3f30e53879b7a2d142bafd979088972d79514->enter($__internal_be0751d03dab0b837248bd126ae3f30e53879b7a2d142bafd979088972d79514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_be0751d03dab0b837248bd126ae3f30e53879b7a2d142bafd979088972d79514->leave($__internal_be0751d03dab0b837248bd126ae3f30e53879b7a2d142bafd979088972d79514_prof);

        
        $__internal_dec269577836aa227e5a83d7f307af042e9867d69623b0a532d1a52bb3090e4c->leave($__internal_dec269577836aa227e5a83d7f307af042e9867d69623b0a532d1a52bb3090e4c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_468937d685e71c5162d6cad9894210af525aadb65742a4ddfd2cac280b457326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468937d685e71c5162d6cad9894210af525aadb65742a4ddfd2cac280b457326->enter($__internal_468937d685e71c5162d6cad9894210af525aadb65742a4ddfd2cac280b457326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9459ee3154cd466adee8cf6f19a157d1241f46c094fd19d9c846140cd7876526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9459ee3154cd466adee8cf6f19a157d1241f46c094fd19d9c846140cd7876526->enter($__internal_9459ee3154cd466adee8cf6f19a157d1241f46c094fd19d9c846140cd7876526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9459ee3154cd466adee8cf6f19a157d1241f46c094fd19d9c846140cd7876526->leave($__internal_9459ee3154cd466adee8cf6f19a157d1241f46c094fd19d9c846140cd7876526_prof);

        
        $__internal_468937d685e71c5162d6cad9894210af525aadb65742a4ddfd2cac280b457326->leave($__internal_468937d685e71c5162d6cad9894210af525aadb65742a4ddfd2cac280b457326_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_76f57a664a377d96dfde7bb29743b23c72dd5cf2d336fd283abf20af6a367639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f57a664a377d96dfde7bb29743b23c72dd5cf2d336fd283abf20af6a367639->enter($__internal_76f57a664a377d96dfde7bb29743b23c72dd5cf2d336fd283abf20af6a367639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24af7f489b4b6a088958dcfc8686747783847a78af275fbe2383d25df6df860a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24af7f489b4b6a088958dcfc8686747783847a78af275fbe2383d25df6df860a->enter($__internal_24af7f489b4b6a088958dcfc8686747783847a78af275fbe2383d25df6df860a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_24af7f489b4b6a088958dcfc8686747783847a78af275fbe2383d25df6df860a->leave($__internal_24af7f489b4b6a088958dcfc8686747783847a78af275fbe2383d25df6df860a_prof);

        
        $__internal_76f57a664a377d96dfde7bb29743b23c72dd5cf2d336fd283abf20af6a367639->leave($__internal_76f57a664a377d96dfde7bb29743b23c72dd5cf2d336fd283abf20af6a367639_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
