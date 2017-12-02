<?php

/* base.html.twig */
class __TwigTemplate_0ece4e24c3c79246bde713514b3e0c5ef137f6f29c92a214a7c50585135842f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bb2a9a029ccf7a2c011209ae9e229902fc3e9b83e193438b382bb501324ca46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb2a9a029ccf7a2c011209ae9e229902fc3e9b83e193438b382bb501324ca46->enter($__internal_7bb2a9a029ccf7a2c011209ae9e229902fc3e9b83e193438b382bb501324ca46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a82c8b976bb0669bf90150b2aabe7970157200f3e80d894f579b1a60e995dab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82c8b976bb0669bf90150b2aabe7970157200f3e80d894f579b1a60e995dab0->enter($__internal_a82c8b976bb0669bf90150b2aabe7970157200f3e80d894f579b1a60e995dab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-default.css"), "html", null, true);
        echo "\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
    </body>
</html>
";
        
        $__internal_7bb2a9a029ccf7a2c011209ae9e229902fc3e9b83e193438b382bb501324ca46->leave($__internal_7bb2a9a029ccf7a2c011209ae9e229902fc3e9b83e193438b382bb501324ca46_prof);

        
        $__internal_a82c8b976bb0669bf90150b2aabe7970157200f3e80d894f579b1a60e995dab0->leave($__internal_a82c8b976bb0669bf90150b2aabe7970157200f3e80d894f579b1a60e995dab0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b0268d50ba4e410b08703b81365368df11ea694e860e272ecb6b344920d7745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0268d50ba4e410b08703b81365368df11ea694e860e272ecb6b344920d7745->enter($__internal_8b0268d50ba4e410b08703b81365368df11ea694e860e272ecb6b344920d7745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90ede094c7250a323aa6324fb09cf91685766003624c816e6b25eea4cf1cb7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ede094c7250a323aa6324fb09cf91685766003624c816e6b25eea4cf1cb7ae->enter($__internal_90ede094c7250a323aa6324fb09cf91685766003624c816e6b25eea4cf1cb7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_90ede094c7250a323aa6324fb09cf91685766003624c816e6b25eea4cf1cb7ae->leave($__internal_90ede094c7250a323aa6324fb09cf91685766003624c816e6b25eea4cf1cb7ae_prof);

        
        $__internal_8b0268d50ba4e410b08703b81365368df11ea694e860e272ecb6b344920d7745->leave($__internal_8b0268d50ba4e410b08703b81365368df11ea694e860e272ecb6b344920d7745_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56b765d2971a591e98ba99f5aacb2af72ecc6ffe8b27ad7c703fe4ce1f124bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b765d2971a591e98ba99f5aacb2af72ecc6ffe8b27ad7c703fe4ce1f124bce->enter($__internal_56b765d2971a591e98ba99f5aacb2af72ecc6ffe8b27ad7c703fe4ce1f124bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ca45afa25a2dd5b9c8c7806827101f9c739f0e1584181449fa2a95f88cc5b039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca45afa25a2dd5b9c8c7806827101f9c739f0e1584181449fa2a95f88cc5b039->enter($__internal_ca45afa25a2dd5b9c8c7806827101f9c739f0e1584181449fa2a95f88cc5b039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca45afa25a2dd5b9c8c7806827101f9c739f0e1584181449fa2a95f88cc5b039->leave($__internal_ca45afa25a2dd5b9c8c7806827101f9c739f0e1584181449fa2a95f88cc5b039_prof);

        
        $__internal_56b765d2971a591e98ba99f5aacb2af72ecc6ffe8b27ad7c703fe4ce1f124bce->leave($__internal_56b765d2971a591e98ba99f5aacb2af72ecc6ffe8b27ad7c703fe4ce1f124bce_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b696ba24749d2d5b7fe2698f79f8415c8563aeaff4278e25f005502fba028a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b696ba24749d2d5b7fe2698f79f8415c8563aeaff4278e25f005502fba028a8f->enter($__internal_b696ba24749d2d5b7fe2698f79f8415c8563aeaff4278e25f005502fba028a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_626602e4e523f082bc3270955877803219fedf9add54aac82fecfea72efbbfc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626602e4e523f082bc3270955877803219fedf9add54aac82fecfea72efbbfc6->enter($__internal_626602e4e523f082bc3270955877803219fedf9add54aac82fecfea72efbbfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_626602e4e523f082bc3270955877803219fedf9add54aac82fecfea72efbbfc6->leave($__internal_626602e4e523f082bc3270955877803219fedf9add54aac82fecfea72efbbfc6_prof);

        
        $__internal_b696ba24749d2d5b7fe2698f79f8415c8563aeaff4278e25f005502fba028a8f->leave($__internal_b696ba24749d2d5b7fe2698f79f8415c8563aeaff4278e25f005502fba028a8f_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04413e6482839dec985755a72e902655420a6434915a32ec66d8296ce4bfdb5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04413e6482839dec985755a72e902655420a6434915a32ec66d8296ce4bfdb5d->enter($__internal_04413e6482839dec985755a72e902655420a6434915a32ec66d8296ce4bfdb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3bf1808628180a059186f7c420674d3345c28c3cda882842872e3134adac924d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf1808628180a059186f7c420674d3345c28c3cda882842872e3134adac924d->enter($__internal_3bf1808628180a059186f7c420674d3345c28c3cda882842872e3134adac924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_3bf1808628180a059186f7c420674d3345c28c3cda882842872e3134adac924d->leave($__internal_3bf1808628180a059186f7c420674d3345c28c3cda882842872e3134adac924d_prof);

        
        $__internal_04413e6482839dec985755a72e902655420a6434915a32ec66d8296ce4bfdb5d->leave($__internal_04413e6482839dec985755a72e902655420a6434915a32ec66d8296ce4bfdb5d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 16,  126 => 15,  109 => 13,  92 => 6,  74 => 5,  61 => 17,  59 => 15,  56 => 14,  54 => 13,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"{{ asset('css/theme-default.css') }}\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        {% block body %}{% endblock %}

        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/base.html.twig");
    }
}
