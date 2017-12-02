<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ab0d1599d6fabc4058bc359f1f626bef78779911e18157e59cabab6d769661f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d453dae5eb358d5b67eaaaa83c9bd7e3219df7efb97c92a8a8d80bce4f1cb86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d453dae5eb358d5b67eaaaa83c9bd7e3219df7efb97c92a8a8d80bce4f1cb86->enter($__internal_7d453dae5eb358d5b67eaaaa83c9bd7e3219df7efb97c92a8a8d80bce4f1cb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a7211754c4b044de784a1de5b012c38e4b861336bd657344b4d49bfda22eec5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7211754c4b044de784a1de5b012c38e4b861336bd657344b4d49bfda22eec5a->enter($__internal_a7211754c4b044de784a1de5b012c38e4b861336bd657344b4d49bfda22eec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7d453dae5eb358d5b67eaaaa83c9bd7e3219df7efb97c92a8a8d80bce4f1cb86->leave($__internal_7d453dae5eb358d5b67eaaaa83c9bd7e3219df7efb97c92a8a8d80bce4f1cb86_prof);

        
        $__internal_a7211754c4b044de784a1de5b012c38e4b861336bd657344b4d49bfda22eec5a->leave($__internal_a7211754c4b044de784a1de5b012c38e4b861336bd657344b4d49bfda22eec5a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_672d3ba75b50e5e21073cc3917be172c0ee3bcfeb3e2d0d2889aa1bf064bf7d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672d3ba75b50e5e21073cc3917be172c0ee3bcfeb3e2d0d2889aa1bf064bf7d2->enter($__internal_672d3ba75b50e5e21073cc3917be172c0ee3bcfeb3e2d0d2889aa1bf064bf7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_785d1591a395e7b08afb08e3ba26379a56fe7d055c4011b94e67ec2e84db2899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785d1591a395e7b08afb08e3ba26379a56fe7d055c4011b94e67ec2e84db2899->enter($__internal_785d1591a395e7b08afb08e3ba26379a56fe7d055c4011b94e67ec2e84db2899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_785d1591a395e7b08afb08e3ba26379a56fe7d055c4011b94e67ec2e84db2899->leave($__internal_785d1591a395e7b08afb08e3ba26379a56fe7d055c4011b94e67ec2e84db2899_prof);

        
        $__internal_672d3ba75b50e5e21073cc3917be172c0ee3bcfeb3e2d0d2889aa1bf064bf7d2->leave($__internal_672d3ba75b50e5e21073cc3917be172c0ee3bcfeb3e2d0d2889aa1bf064bf7d2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d2411e35d15d284dee28b7e0ee441d62e3115975f0531527ef8f7a50e48f94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2411e35d15d284dee28b7e0ee441d62e3115975f0531527ef8f7a50e48f94d->enter($__internal_3d2411e35d15d284dee28b7e0ee441d62e3115975f0531527ef8f7a50e48f94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_361bdc03cffbcc624c318f32dacb411ba0ac1852cb9aa5994fc663ff04e1b0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361bdc03cffbcc624c318f32dacb411ba0ac1852cb9aa5994fc663ff04e1b0a4->enter($__internal_361bdc03cffbcc624c318f32dacb411ba0ac1852cb9aa5994fc663ff04e1b0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_361bdc03cffbcc624c318f32dacb411ba0ac1852cb9aa5994fc663ff04e1b0a4->leave($__internal_361bdc03cffbcc624c318f32dacb411ba0ac1852cb9aa5994fc663ff04e1b0a4_prof);

        
        $__internal_3d2411e35d15d284dee28b7e0ee441d62e3115975f0531527ef8f7a50e48f94d->leave($__internal_3d2411e35d15d284dee28b7e0ee441d62e3115975f0531527ef8f7a50e48f94d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_97b74480d09fcd905e73ff7e6a8a9b49c496d935c33cc1639d39cc0820581556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b74480d09fcd905e73ff7e6a8a9b49c496d935c33cc1639d39cc0820581556->enter($__internal_97b74480d09fcd905e73ff7e6a8a9b49c496d935c33cc1639d39cc0820581556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96803c288a5f5dcc2856b8a543e34abe88bdbd9d5fb67a5d5e779119dad97c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96803c288a5f5dcc2856b8a543e34abe88bdbd9d5fb67a5d5e779119dad97c8e->enter($__internal_96803c288a5f5dcc2856b8a543e34abe88bdbd9d5fb67a5d5e779119dad97c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96803c288a5f5dcc2856b8a543e34abe88bdbd9d5fb67a5d5e779119dad97c8e->leave($__internal_96803c288a5f5dcc2856b8a543e34abe88bdbd9d5fb67a5d5e779119dad97c8e_prof);

        
        $__internal_97b74480d09fcd905e73ff7e6a8a9b49c496d935c33cc1639d39cc0820581556->leave($__internal_97b74480d09fcd905e73ff7e6a8a9b49c496d935c33cc1639d39cc0820581556_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
