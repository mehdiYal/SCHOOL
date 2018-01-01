<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_837f0c5868c3cd5272a33d215585d95784be000548b8620d3b4a40d2f2daedd6 extends Twig_Template
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
        $__internal_673d988c7a3cd9d370a2cda248e75c6d3e725608a5dc7a24e2add74681327cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673d988c7a3cd9d370a2cda248e75c6d3e725608a5dc7a24e2add74681327cc8->enter($__internal_673d988c7a3cd9d370a2cda248e75c6d3e725608a5dc7a24e2add74681327cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_afb295601d92c63ceb59688326b58892d5ca887fe3934d2e7b54f4e96f6f2033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb295601d92c63ceb59688326b58892d5ca887fe3934d2e7b54f4e96f6f2033->enter($__internal_afb295601d92c63ceb59688326b58892d5ca887fe3934d2e7b54f4e96f6f2033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_673d988c7a3cd9d370a2cda248e75c6d3e725608a5dc7a24e2add74681327cc8->leave($__internal_673d988c7a3cd9d370a2cda248e75c6d3e725608a5dc7a24e2add74681327cc8_prof);

        
        $__internal_afb295601d92c63ceb59688326b58892d5ca887fe3934d2e7b54f4e96f6f2033->leave($__internal_afb295601d92c63ceb59688326b58892d5ca887fe3934d2e7b54f4e96f6f2033_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e835df9c12d22bc039d4b80dd185930e0156ca4ea16f2cbe2ec170cf2e9ceac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e835df9c12d22bc039d4b80dd185930e0156ca4ea16f2cbe2ec170cf2e9ceac->enter($__internal_0e835df9c12d22bc039d4b80dd185930e0156ca4ea16f2cbe2ec170cf2e9ceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd9efdeafbfe493221bb75c1d3444c808383a65c29af4c08244faf14b77262ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9efdeafbfe493221bb75c1d3444c808383a65c29af4c08244faf14b77262ab->enter($__internal_bd9efdeafbfe493221bb75c1d3444c808383a65c29af4c08244faf14b77262ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bd9efdeafbfe493221bb75c1d3444c808383a65c29af4c08244faf14b77262ab->leave($__internal_bd9efdeafbfe493221bb75c1d3444c808383a65c29af4c08244faf14b77262ab_prof);

        
        $__internal_0e835df9c12d22bc039d4b80dd185930e0156ca4ea16f2cbe2ec170cf2e9ceac->leave($__internal_0e835df9c12d22bc039d4b80dd185930e0156ca4ea16f2cbe2ec170cf2e9ceac_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_94833b7710804b4a46e07eeba6b6e914deaa0edc7da97b77fabf433e7bcab471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94833b7710804b4a46e07eeba6b6e914deaa0edc7da97b77fabf433e7bcab471->enter($__internal_94833b7710804b4a46e07eeba6b6e914deaa0edc7da97b77fabf433e7bcab471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac420cdee47cfe5bc7a1da29bd0cfa8114a8c9ec72b4b81d95133598a2dab0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac420cdee47cfe5bc7a1da29bd0cfa8114a8c9ec72b4b81d95133598a2dab0a9->enter($__internal_ac420cdee47cfe5bc7a1da29bd0cfa8114a8c9ec72b4b81d95133598a2dab0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac420cdee47cfe5bc7a1da29bd0cfa8114a8c9ec72b4b81d95133598a2dab0a9->leave($__internal_ac420cdee47cfe5bc7a1da29bd0cfa8114a8c9ec72b4b81d95133598a2dab0a9_prof);

        
        $__internal_94833b7710804b4a46e07eeba6b6e914deaa0edc7da97b77fabf433e7bcab471->leave($__internal_94833b7710804b4a46e07eeba6b6e914deaa0edc7da97b77fabf433e7bcab471_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_31f0381940952b76eef5e470bd2058dbc1ad6a14eb4c557494b83a4e6d25ffae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f0381940952b76eef5e470bd2058dbc1ad6a14eb4c557494b83a4e6d25ffae->enter($__internal_31f0381940952b76eef5e470bd2058dbc1ad6a14eb4c557494b83a4e6d25ffae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1e3d809d60e26332cf69930be0ae7cead1bbe40bb74b494961d0fe40005a613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e3d809d60e26332cf69930be0ae7cead1bbe40bb74b494961d0fe40005a613->enter($__internal_f1e3d809d60e26332cf69930be0ae7cead1bbe40bb74b494961d0fe40005a613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f1e3d809d60e26332cf69930be0ae7cead1bbe40bb74b494961d0fe40005a613->leave($__internal_f1e3d809d60e26332cf69930be0ae7cead1bbe40bb74b494961d0fe40005a613_prof);

        
        $__internal_31f0381940952b76eef5e470bd2058dbc1ad6a14eb4c557494b83a4e6d25ffae->leave($__internal_31f0381940952b76eef5e470bd2058dbc1ad6a14eb4c557494b83a4e6d25ffae_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
