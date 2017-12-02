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
        $__internal_ad09e965ef5fc749d7a2b960e63023afc2332e4875f4bf88ebe5571b7e05c7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad09e965ef5fc749d7a2b960e63023afc2332e4875f4bf88ebe5571b7e05c7ae->enter($__internal_ad09e965ef5fc749d7a2b960e63023afc2332e4875f4bf88ebe5571b7e05c7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0ec5dc0c80e77dd8a92dd8721de3202250fc8404bf9ed004b17d67778d9f0f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec5dc0c80e77dd8a92dd8721de3202250fc8404bf9ed004b17d67778d9f0f9a->enter($__internal_0ec5dc0c80e77dd8a92dd8721de3202250fc8404bf9ed004b17d67778d9f0f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad09e965ef5fc749d7a2b960e63023afc2332e4875f4bf88ebe5571b7e05c7ae->leave($__internal_ad09e965ef5fc749d7a2b960e63023afc2332e4875f4bf88ebe5571b7e05c7ae_prof);

        
        $__internal_0ec5dc0c80e77dd8a92dd8721de3202250fc8404bf9ed004b17d67778d9f0f9a->leave($__internal_0ec5dc0c80e77dd8a92dd8721de3202250fc8404bf9ed004b17d67778d9f0f9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53be22f7a3e39c274a870a6a8300c3fc498c2fe1deeb311ef5cb7ab154d65897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53be22f7a3e39c274a870a6a8300c3fc498c2fe1deeb311ef5cb7ab154d65897->enter($__internal_53be22f7a3e39c274a870a6a8300c3fc498c2fe1deeb311ef5cb7ab154d65897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5bc5f6ca236485f6060c57b08b4999db4f4984a0f6d9d0fd4a246302a6c352a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc5f6ca236485f6060c57b08b4999db4f4984a0f6d9d0fd4a246302a6c352a5->enter($__internal_5bc5f6ca236485f6060c57b08b4999db4f4984a0f6d9d0fd4a246302a6c352a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5bc5f6ca236485f6060c57b08b4999db4f4984a0f6d9d0fd4a246302a6c352a5->leave($__internal_5bc5f6ca236485f6060c57b08b4999db4f4984a0f6d9d0fd4a246302a6c352a5_prof);

        
        $__internal_53be22f7a3e39c274a870a6a8300c3fc498c2fe1deeb311ef5cb7ab154d65897->leave($__internal_53be22f7a3e39c274a870a6a8300c3fc498c2fe1deeb311ef5cb7ab154d65897_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_806edb05c9a03af4f513d3e61964318906654eeb7729fa6d6f1a277c5fcea5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806edb05c9a03af4f513d3e61964318906654eeb7729fa6d6f1a277c5fcea5d7->enter($__internal_806edb05c9a03af4f513d3e61964318906654eeb7729fa6d6f1a277c5fcea5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f154c5d01352fc0de3e2c515bd20c9c04504b5e746c6127eda10ae0ec7e21d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f154c5d01352fc0de3e2c515bd20c9c04504b5e746c6127eda10ae0ec7e21d5->enter($__internal_8f154c5d01352fc0de3e2c515bd20c9c04504b5e746c6127eda10ae0ec7e21d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8f154c5d01352fc0de3e2c515bd20c9c04504b5e746c6127eda10ae0ec7e21d5->leave($__internal_8f154c5d01352fc0de3e2c515bd20c9c04504b5e746c6127eda10ae0ec7e21d5_prof);

        
        $__internal_806edb05c9a03af4f513d3e61964318906654eeb7729fa6d6f1a277c5fcea5d7->leave($__internal_806edb05c9a03af4f513d3e61964318906654eeb7729fa6d6f1a277c5fcea5d7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f04e6a2b36f69460e33729b528db0b847135d1591cf14519a2ad3d6633442e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04e6a2b36f69460e33729b528db0b847135d1591cf14519a2ad3d6633442e3c->enter($__internal_f04e6a2b36f69460e33729b528db0b847135d1591cf14519a2ad3d6633442e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edd5786de543bb9c660400ce37c915e15db5fc4a1fd3b375ac61831ad35305c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd5786de543bb9c660400ce37c915e15db5fc4a1fd3b375ac61831ad35305c8->enter($__internal_edd5786de543bb9c660400ce37c915e15db5fc4a1fd3b375ac61831ad35305c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_edd5786de543bb9c660400ce37c915e15db5fc4a1fd3b375ac61831ad35305c8->leave($__internal_edd5786de543bb9c660400ce37c915e15db5fc4a1fd3b375ac61831ad35305c8_prof);

        
        $__internal_f04e6a2b36f69460e33729b528db0b847135d1591cf14519a2ad3d6633442e3c->leave($__internal_f04e6a2b36f69460e33729b528db0b847135d1591cf14519a2ad3d6633442e3c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
