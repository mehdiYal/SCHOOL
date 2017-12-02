<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
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
        $__internal_01a8b1ae2c8a341c7033a196f06a927b0d39f741cd4af6b68a5242699c72d5b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a8b1ae2c8a341c7033a196f06a927b0d39f741cd4af6b68a5242699c72d5b2->enter($__internal_01a8b1ae2c8a341c7033a196f06a927b0d39f741cd4af6b68a5242699c72d5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4efc54495687dc4fe64a2ec1229468d5191d9c7e8d5ba9c85f72f8d4cf756bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efc54495687dc4fe64a2ec1229468d5191d9c7e8d5ba9c85f72f8d4cf756bd3->enter($__internal_4efc54495687dc4fe64a2ec1229468d5191d9c7e8d5ba9c85f72f8d4cf756bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01a8b1ae2c8a341c7033a196f06a927b0d39f741cd4af6b68a5242699c72d5b2->leave($__internal_01a8b1ae2c8a341c7033a196f06a927b0d39f741cd4af6b68a5242699c72d5b2_prof);

        
        $__internal_4efc54495687dc4fe64a2ec1229468d5191d9c7e8d5ba9c85f72f8d4cf756bd3->leave($__internal_4efc54495687dc4fe64a2ec1229468d5191d9c7e8d5ba9c85f72f8d4cf756bd3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21d77c40e1a864e13fc8e7eb63418896cb19f5ba9f7b6e7890cc0dbec0aad80d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d77c40e1a864e13fc8e7eb63418896cb19f5ba9f7b6e7890cc0dbec0aad80d->enter($__internal_21d77c40e1a864e13fc8e7eb63418896cb19f5ba9f7b6e7890cc0dbec0aad80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20f33320b3089dbda76557f60c328c20b0e3834405a4c0f5d26ddb34ca30f033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f33320b3089dbda76557f60c328c20b0e3834405a4c0f5d26ddb34ca30f033->enter($__internal_20f33320b3089dbda76557f60c328c20b0e3834405a4c0f5d26ddb34ca30f033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_20f33320b3089dbda76557f60c328c20b0e3834405a4c0f5d26ddb34ca30f033->leave($__internal_20f33320b3089dbda76557f60c328c20b0e3834405a4c0f5d26ddb34ca30f033_prof);

        
        $__internal_21d77c40e1a864e13fc8e7eb63418896cb19f5ba9f7b6e7890cc0dbec0aad80d->leave($__internal_21d77c40e1a864e13fc8e7eb63418896cb19f5ba9f7b6e7890cc0dbec0aad80d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c231d96f3d4fb5e6755b20df7afe59595033574dc7cff25570fcfb6cf8143ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c231d96f3d4fb5e6755b20df7afe59595033574dc7cff25570fcfb6cf8143ef7->enter($__internal_c231d96f3d4fb5e6755b20df7afe59595033574dc7cff25570fcfb6cf8143ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22468d8d209655c732fad981c1795c9cd90dc6cb1b1ce5f452f67a0654974215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22468d8d209655c732fad981c1795c9cd90dc6cb1b1ce5f452f67a0654974215->enter($__internal_22468d8d209655c732fad981c1795c9cd90dc6cb1b1ce5f452f67a0654974215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_22468d8d209655c732fad981c1795c9cd90dc6cb1b1ce5f452f67a0654974215->leave($__internal_22468d8d209655c732fad981c1795c9cd90dc6cb1b1ce5f452f67a0654974215_prof);

        
        $__internal_c231d96f3d4fb5e6755b20df7afe59595033574dc7cff25570fcfb6cf8143ef7->leave($__internal_c231d96f3d4fb5e6755b20df7afe59595033574dc7cff25570fcfb6cf8143ef7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1362cf653deda5f0cae7e1b8d0fd81ee157a81745d6898d408f4b02108676549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1362cf653deda5f0cae7e1b8d0fd81ee157a81745d6898d408f4b02108676549->enter($__internal_1362cf653deda5f0cae7e1b8d0fd81ee157a81745d6898d408f4b02108676549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f6771b9f12d8e8749b4c1b752156109f8417c06c9b2cee28594fc5e4112426e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6771b9f12d8e8749b4c1b752156109f8417c06c9b2cee28594fc5e4112426e->enter($__internal_9f6771b9f12d8e8749b4c1b752156109f8417c06c9b2cee28594fc5e4112426e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9f6771b9f12d8e8749b4c1b752156109f8417c06c9b2cee28594fc5e4112426e->leave($__internal_9f6771b9f12d8e8749b4c1b752156109f8417c06c9b2cee28594fc5e4112426e_prof);

        
        $__internal_1362cf653deda5f0cae7e1b8d0fd81ee157a81745d6898d408f4b02108676549->leave($__internal_1362cf653deda5f0cae7e1b8d0fd81ee157a81745d6898d408f4b02108676549_prof);

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
