<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_72d873f0650bbde042254214a8328251a17c90201660f1bf37bd95fc0903ea41 extends Twig_Template
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
        $__internal_6db1b496396b3e08b92aa739e5d617ead23c1b92e295ec3b2aeb3a1b04c5004a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db1b496396b3e08b92aa739e5d617ead23c1b92e295ec3b2aeb3a1b04c5004a->enter($__internal_6db1b496396b3e08b92aa739e5d617ead23c1b92e295ec3b2aeb3a1b04c5004a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ea11adfe4ba98da8b2e9c427c098e4e9f28a5398db0903093fc2946f073127b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea11adfe4ba98da8b2e9c427c098e4e9f28a5398db0903093fc2946f073127b7->enter($__internal_ea11adfe4ba98da8b2e9c427c098e4e9f28a5398db0903093fc2946f073127b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db1b496396b3e08b92aa739e5d617ead23c1b92e295ec3b2aeb3a1b04c5004a->leave($__internal_6db1b496396b3e08b92aa739e5d617ead23c1b92e295ec3b2aeb3a1b04c5004a_prof);

        
        $__internal_ea11adfe4ba98da8b2e9c427c098e4e9f28a5398db0903093fc2946f073127b7->leave($__internal_ea11adfe4ba98da8b2e9c427c098e4e9f28a5398db0903093fc2946f073127b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5606fec7a5aef597a96e4b17e34b0c21fdf54c507795eeca53f7d1cdac38d2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5606fec7a5aef597a96e4b17e34b0c21fdf54c507795eeca53f7d1cdac38d2e6->enter($__internal_5606fec7a5aef597a96e4b17e34b0c21fdf54c507795eeca53f7d1cdac38d2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a67b2208db3a78ebaa322ea67d8564975c955a0cfd202f70454b36812899338f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67b2208db3a78ebaa322ea67d8564975c955a0cfd202f70454b36812899338f->enter($__internal_a67b2208db3a78ebaa322ea67d8564975c955a0cfd202f70454b36812899338f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a67b2208db3a78ebaa322ea67d8564975c955a0cfd202f70454b36812899338f->leave($__internal_a67b2208db3a78ebaa322ea67d8564975c955a0cfd202f70454b36812899338f_prof);

        
        $__internal_5606fec7a5aef597a96e4b17e34b0c21fdf54c507795eeca53f7d1cdac38d2e6->leave($__internal_5606fec7a5aef597a96e4b17e34b0c21fdf54c507795eeca53f7d1cdac38d2e6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_497bc72b39e12d195bd61254c8226769b2a072d412f32baa2ecaca0bdec47c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497bc72b39e12d195bd61254c8226769b2a072d412f32baa2ecaca0bdec47c63->enter($__internal_497bc72b39e12d195bd61254c8226769b2a072d412f32baa2ecaca0bdec47c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ccc72a77ac3e117a94751cb8446937158ea416cd03c0df1692f7b38dcce9141d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc72a77ac3e117a94751cb8446937158ea416cd03c0df1692f7b38dcce9141d->enter($__internal_ccc72a77ac3e117a94751cb8446937158ea416cd03c0df1692f7b38dcce9141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ccc72a77ac3e117a94751cb8446937158ea416cd03c0df1692f7b38dcce9141d->leave($__internal_ccc72a77ac3e117a94751cb8446937158ea416cd03c0df1692f7b38dcce9141d_prof);

        
        $__internal_497bc72b39e12d195bd61254c8226769b2a072d412f32baa2ecaca0bdec47c63->leave($__internal_497bc72b39e12d195bd61254c8226769b2a072d412f32baa2ecaca0bdec47c63_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e08b140fb9e981469284364e9b1ecc884f4cf16530f519bf3083af10dfc8997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e08b140fb9e981469284364e9b1ecc884f4cf16530f519bf3083af10dfc8997->enter($__internal_5e08b140fb9e981469284364e9b1ecc884f4cf16530f519bf3083af10dfc8997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6819551b4e0a49c4144f0319b31c63bbcf28f3f11be2901576c778a58fe396c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6819551b4e0a49c4144f0319b31c63bbcf28f3f11be2901576c778a58fe396c8->enter($__internal_6819551b4e0a49c4144f0319b31c63bbcf28f3f11be2901576c778a58fe396c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6819551b4e0a49c4144f0319b31c63bbcf28f3f11be2901576c778a58fe396c8->leave($__internal_6819551b4e0a49c4144f0319b31c63bbcf28f3f11be2901576c778a58fe396c8_prof);

        
        $__internal_5e08b140fb9e981469284364e9b1ecc884f4cf16530f519bf3083af10dfc8997->leave($__internal_5e08b140fb9e981469284364e9b1ecc884f4cf16530f519bf3083af10dfc8997_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
