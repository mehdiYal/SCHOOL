<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5e93d5e3a429ea82cc5e671f8331b5b453268563aaa38cfc38e349a13569248b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2724e267f7b453b22b6126e500ff3f30f629603b1f98b06dd8d4706b9ca33ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2724e267f7b453b22b6126e500ff3f30f629603b1f98b06dd8d4706b9ca33ea0->enter($__internal_2724e267f7b453b22b6126e500ff3f30f629603b1f98b06dd8d4706b9ca33ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_64bdbe7060a4cedbdfa1ce7129434c53279a2eda674797ee857aca7bce190e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bdbe7060a4cedbdfa1ce7129434c53279a2eda674797ee857aca7bce190e89->enter($__internal_64bdbe7060a4cedbdfa1ce7129434c53279a2eda674797ee857aca7bce190e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2724e267f7b453b22b6126e500ff3f30f629603b1f98b06dd8d4706b9ca33ea0->leave($__internal_2724e267f7b453b22b6126e500ff3f30f629603b1f98b06dd8d4706b9ca33ea0_prof);

        
        $__internal_64bdbe7060a4cedbdfa1ce7129434c53279a2eda674797ee857aca7bce190e89->leave($__internal_64bdbe7060a4cedbdfa1ce7129434c53279a2eda674797ee857aca7bce190e89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a51b9f5d1609d3a4310135be5b8a969a7b321a4acb126ef3b5eb542b671659cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51b9f5d1609d3a4310135be5b8a969a7b321a4acb126ef3b5eb542b671659cb->enter($__internal_a51b9f5d1609d3a4310135be5b8a969a7b321a4acb126ef3b5eb542b671659cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa9a5958d6d4f60e417f4e02e9024bbd17422c4a1985f3c58b65c49e9a75cb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9a5958d6d4f60e417f4e02e9024bbd17422c4a1985f3c58b65c49e9a75cb26->enter($__internal_aa9a5958d6d4f60e417f4e02e9024bbd17422c4a1985f3c58b65c49e9a75cb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aa9a5958d6d4f60e417f4e02e9024bbd17422c4a1985f3c58b65c49e9a75cb26->leave($__internal_aa9a5958d6d4f60e417f4e02e9024bbd17422c4a1985f3c58b65c49e9a75cb26_prof);

        
        $__internal_a51b9f5d1609d3a4310135be5b8a969a7b321a4acb126ef3b5eb542b671659cb->leave($__internal_a51b9f5d1609d3a4310135be5b8a969a7b321a4acb126ef3b5eb542b671659cb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_75ae5b6df1f431c6bdb597792bc106380a83d87991d20f99953f304f58ebcd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ae5b6df1f431c6bdb597792bc106380a83d87991d20f99953f304f58ebcd32->enter($__internal_75ae5b6df1f431c6bdb597792bc106380a83d87991d20f99953f304f58ebcd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b12d73752a4a3f3e158c3028abf3baa5bb73c9a8f1034af2f3bfbd98d807977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b12d73752a4a3f3e158c3028abf3baa5bb73c9a8f1034af2f3bfbd98d807977->enter($__internal_7b12d73752a4a3f3e158c3028abf3baa5bb73c9a8f1034af2f3bfbd98d807977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b12d73752a4a3f3e158c3028abf3baa5bb73c9a8f1034af2f3bfbd98d807977->leave($__internal_7b12d73752a4a3f3e158c3028abf3baa5bb73c9a8f1034af2f3bfbd98d807977_prof);

        
        $__internal_75ae5b6df1f431c6bdb597792bc106380a83d87991d20f99953f304f58ebcd32->leave($__internal_75ae5b6df1f431c6bdb597792bc106380a83d87991d20f99953f304f58ebcd32_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca218fbf88f9953584256f9b38f03ccf97f6f03ce2c7fd450cf1ba65a79e9bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca218fbf88f9953584256f9b38f03ccf97f6f03ce2c7fd450cf1ba65a79e9bb2->enter($__internal_ca218fbf88f9953584256f9b38f03ccf97f6f03ce2c7fd450cf1ba65a79e9bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4fa4c02d61cc48fed08de6829ed81ab94b299840458fe850e2b01d010a4c017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fa4c02d61cc48fed08de6829ed81ab94b299840458fe850e2b01d010a4c017->enter($__internal_e4fa4c02d61cc48fed08de6829ed81ab94b299840458fe850e2b01d010a4c017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e4fa4c02d61cc48fed08de6829ed81ab94b299840458fe850e2b01d010a4c017->leave($__internal_e4fa4c02d61cc48fed08de6829ed81ab94b299840458fe850e2b01d010a4c017_prof);

        
        $__internal_ca218fbf88f9953584256f9b38f03ccf97f6f03ce2c7fd450cf1ba65a79e9bb2->leave($__internal_ca218fbf88f9953584256f9b38f03ccf97f6f03ce2c7fd450cf1ba65a79e9bb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
