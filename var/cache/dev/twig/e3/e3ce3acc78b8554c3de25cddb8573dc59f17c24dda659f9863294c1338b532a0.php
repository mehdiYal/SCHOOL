<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b964da1325ae884a1f447fe3c8df597790502a6dccfd41523dd06e14843801a6 extends Twig_Template
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
        $__internal_5057686b88da85186adec78fc0309b9e4b2d5970cb5d09d83d3f80ef276a7f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5057686b88da85186adec78fc0309b9e4b2d5970cb5d09d83d3f80ef276a7f81->enter($__internal_5057686b88da85186adec78fc0309b9e4b2d5970cb5d09d83d3f80ef276a7f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_44b89950e765a2536dc7bcb97c874b829a786a1d7ab8ce4e0ce830594941ce54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b89950e765a2536dc7bcb97c874b829a786a1d7ab8ce4e0ce830594941ce54->enter($__internal_44b89950e765a2536dc7bcb97c874b829a786a1d7ab8ce4e0ce830594941ce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5057686b88da85186adec78fc0309b9e4b2d5970cb5d09d83d3f80ef276a7f81->leave($__internal_5057686b88da85186adec78fc0309b9e4b2d5970cb5d09d83d3f80ef276a7f81_prof);

        
        $__internal_44b89950e765a2536dc7bcb97c874b829a786a1d7ab8ce4e0ce830594941ce54->leave($__internal_44b89950e765a2536dc7bcb97c874b829a786a1d7ab8ce4e0ce830594941ce54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_001fa1f6391cbdcdbc6b384a4d32ebd9805231e1a0785c1b83044af31d438908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001fa1f6391cbdcdbc6b384a4d32ebd9805231e1a0785c1b83044af31d438908->enter($__internal_001fa1f6391cbdcdbc6b384a4d32ebd9805231e1a0785c1b83044af31d438908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_775d18e4140b9cbbad2c444852ef6893389c1b80b943d404039a321d712c0a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775d18e4140b9cbbad2c444852ef6893389c1b80b943d404039a321d712c0a36->enter($__internal_775d18e4140b9cbbad2c444852ef6893389c1b80b943d404039a321d712c0a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_775d18e4140b9cbbad2c444852ef6893389c1b80b943d404039a321d712c0a36->leave($__internal_775d18e4140b9cbbad2c444852ef6893389c1b80b943d404039a321d712c0a36_prof);

        
        $__internal_001fa1f6391cbdcdbc6b384a4d32ebd9805231e1a0785c1b83044af31d438908->leave($__internal_001fa1f6391cbdcdbc6b384a4d32ebd9805231e1a0785c1b83044af31d438908_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dc3a4de0994510cf537604d0df1b9400d83b8b0b87e52690e286d5085346885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc3a4de0994510cf537604d0df1b9400d83b8b0b87e52690e286d5085346885->enter($__internal_9dc3a4de0994510cf537604d0df1b9400d83b8b0b87e52690e286d5085346885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5bcacb6e9e4c7c140d50f2394f23ca63a009aa868f62f2a9baafddad78043eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcacb6e9e4c7c140d50f2394f23ca63a009aa868f62f2a9baafddad78043eaa->enter($__internal_5bcacb6e9e4c7c140d50f2394f23ca63a009aa868f62f2a9baafddad78043eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5bcacb6e9e4c7c140d50f2394f23ca63a009aa868f62f2a9baafddad78043eaa->leave($__internal_5bcacb6e9e4c7c140d50f2394f23ca63a009aa868f62f2a9baafddad78043eaa_prof);

        
        $__internal_9dc3a4de0994510cf537604d0df1b9400d83b8b0b87e52690e286d5085346885->leave($__internal_9dc3a4de0994510cf537604d0df1b9400d83b8b0b87e52690e286d5085346885_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a792b96e080635f472524f155e87160a569d3919b1a3ba72fd00fa44316a9b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a792b96e080635f472524f155e87160a569d3919b1a3ba72fd00fa44316a9b74->enter($__internal_a792b96e080635f472524f155e87160a569d3919b1a3ba72fd00fa44316a9b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25518122a212875912812da1bc72889c325e7e5e172ed8acfe0890cd416d68b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25518122a212875912812da1bc72889c325e7e5e172ed8acfe0890cd416d68b3->enter($__internal_25518122a212875912812da1bc72889c325e7e5e172ed8acfe0890cd416d68b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_25518122a212875912812da1bc72889c325e7e5e172ed8acfe0890cd416d68b3->leave($__internal_25518122a212875912812da1bc72889c325e7e5e172ed8acfe0890cd416d68b3_prof);

        
        $__internal_a792b96e080635f472524f155e87160a569d3919b1a3ba72fd00fa44316a9b74->leave($__internal_a792b96e080635f472524f155e87160a569d3919b1a3ba72fd00fa44316a9b74_prof);

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
