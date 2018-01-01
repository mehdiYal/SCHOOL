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
        $__internal_6481cef3917de474cb7022a00164daa6b9b2c65495df3b84ccf4e68c420ed019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6481cef3917de474cb7022a00164daa6b9b2c65495df3b84ccf4e68c420ed019->enter($__internal_6481cef3917de474cb7022a00164daa6b9b2c65495df3b84ccf4e68c420ed019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_763c32e504b6deb90baff4945e9cefa37855199715403a84c9c75b3462133d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763c32e504b6deb90baff4945e9cefa37855199715403a84c9c75b3462133d16->enter($__internal_763c32e504b6deb90baff4945e9cefa37855199715403a84c9c75b3462133d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6481cef3917de474cb7022a00164daa6b9b2c65495df3b84ccf4e68c420ed019->leave($__internal_6481cef3917de474cb7022a00164daa6b9b2c65495df3b84ccf4e68c420ed019_prof);

        
        $__internal_763c32e504b6deb90baff4945e9cefa37855199715403a84c9c75b3462133d16->leave($__internal_763c32e504b6deb90baff4945e9cefa37855199715403a84c9c75b3462133d16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42dfb7a1dbd68164696572a1c72a7e1cfb465fc291c0eb9190e98b1f92998f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dfb7a1dbd68164696572a1c72a7e1cfb465fc291c0eb9190e98b1f92998f32->enter($__internal_42dfb7a1dbd68164696572a1c72a7e1cfb465fc291c0eb9190e98b1f92998f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_70c94e615c384dcd649e1779f7632c59cb98c20da67b85408f1d0ffb02bcf1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c94e615c384dcd649e1779f7632c59cb98c20da67b85408f1d0ffb02bcf1a3->enter($__internal_70c94e615c384dcd649e1779f7632c59cb98c20da67b85408f1d0ffb02bcf1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_70c94e615c384dcd649e1779f7632c59cb98c20da67b85408f1d0ffb02bcf1a3->leave($__internal_70c94e615c384dcd649e1779f7632c59cb98c20da67b85408f1d0ffb02bcf1a3_prof);

        
        $__internal_42dfb7a1dbd68164696572a1c72a7e1cfb465fc291c0eb9190e98b1f92998f32->leave($__internal_42dfb7a1dbd68164696572a1c72a7e1cfb465fc291c0eb9190e98b1f92998f32_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b9f276e2ab440799e3203e403b8912b6e09429fa2ce53f60f444e82e33184a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9f276e2ab440799e3203e403b8912b6e09429fa2ce53f60f444e82e33184a3->enter($__internal_3b9f276e2ab440799e3203e403b8912b6e09429fa2ce53f60f444e82e33184a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_063019211a3c7eaea6ad913fe2616e47e1ee7bf429874a8ffe08ab72de7c536b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063019211a3c7eaea6ad913fe2616e47e1ee7bf429874a8ffe08ab72de7c536b->enter($__internal_063019211a3c7eaea6ad913fe2616e47e1ee7bf429874a8ffe08ab72de7c536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_063019211a3c7eaea6ad913fe2616e47e1ee7bf429874a8ffe08ab72de7c536b->leave($__internal_063019211a3c7eaea6ad913fe2616e47e1ee7bf429874a8ffe08ab72de7c536b_prof);

        
        $__internal_3b9f276e2ab440799e3203e403b8912b6e09429fa2ce53f60f444e82e33184a3->leave($__internal_3b9f276e2ab440799e3203e403b8912b6e09429fa2ce53f60f444e82e33184a3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c317758d3d892919c59add0f5e66fe8094b2e0587e391d0a52523c19d21e9c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c317758d3d892919c59add0f5e66fe8094b2e0587e391d0a52523c19d21e9c19->enter($__internal_c317758d3d892919c59add0f5e66fe8094b2e0587e391d0a52523c19d21e9c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a85760ad0339fcd1ca34060bc873f08febabe755074e2f69820a4d5f153a116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a85760ad0339fcd1ca34060bc873f08febabe755074e2f69820a4d5f153a116->enter($__internal_1a85760ad0339fcd1ca34060bc873f08febabe755074e2f69820a4d5f153a116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1a85760ad0339fcd1ca34060bc873f08febabe755074e2f69820a4d5f153a116->leave($__internal_1a85760ad0339fcd1ca34060bc873f08febabe755074e2f69820a4d5f153a116_prof);

        
        $__internal_c317758d3d892919c59add0f5e66fe8094b2e0587e391d0a52523c19d21e9c19->leave($__internal_c317758d3d892919c59add0f5e66fe8094b2e0587e391d0a52523c19d21e9c19_prof);

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
