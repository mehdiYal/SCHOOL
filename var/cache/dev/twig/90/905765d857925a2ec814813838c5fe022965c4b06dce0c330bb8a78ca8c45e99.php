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
        $__internal_a71f055fd181b2feb0a94f43c79f730c0db84712c86d3b742eda18cda7b4998f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71f055fd181b2feb0a94f43c79f730c0db84712c86d3b742eda18cda7b4998f->enter($__internal_a71f055fd181b2feb0a94f43c79f730c0db84712c86d3b742eda18cda7b4998f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3dd17f71c2b5f80938917d0b89d5bb2d46865a520145a1b8178f483c1cc08b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd17f71c2b5f80938917d0b89d5bb2d46865a520145a1b8178f483c1cc08b50->enter($__internal_3dd17f71c2b5f80938917d0b89d5bb2d46865a520145a1b8178f483c1cc08b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a71f055fd181b2feb0a94f43c79f730c0db84712c86d3b742eda18cda7b4998f->leave($__internal_a71f055fd181b2feb0a94f43c79f730c0db84712c86d3b742eda18cda7b4998f_prof);

        
        $__internal_3dd17f71c2b5f80938917d0b89d5bb2d46865a520145a1b8178f483c1cc08b50->leave($__internal_3dd17f71c2b5f80938917d0b89d5bb2d46865a520145a1b8178f483c1cc08b50_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cb327926ec7ee5f0cfc1c9eecb06de18d16c74003df4093ff2eeaa8c6998030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb327926ec7ee5f0cfc1c9eecb06de18d16c74003df4093ff2eeaa8c6998030->enter($__internal_5cb327926ec7ee5f0cfc1c9eecb06de18d16c74003df4093ff2eeaa8c6998030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f872049022482ef178a939ce8d03471c0c151572d590aef03a5f41bbbe2fa84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f872049022482ef178a939ce8d03471c0c151572d590aef03a5f41bbbe2fa84->enter($__internal_3f872049022482ef178a939ce8d03471c0c151572d590aef03a5f41bbbe2fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3f872049022482ef178a939ce8d03471c0c151572d590aef03a5f41bbbe2fa84->leave($__internal_3f872049022482ef178a939ce8d03471c0c151572d590aef03a5f41bbbe2fa84_prof);

        
        $__internal_5cb327926ec7ee5f0cfc1c9eecb06de18d16c74003df4093ff2eeaa8c6998030->leave($__internal_5cb327926ec7ee5f0cfc1c9eecb06de18d16c74003df4093ff2eeaa8c6998030_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b717c1dade2f0d926984ed3af3594b17cfe33f56f3067a57ed0faa481420da2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b717c1dade2f0d926984ed3af3594b17cfe33f56f3067a57ed0faa481420da2a->enter($__internal_b717c1dade2f0d926984ed3af3594b17cfe33f56f3067a57ed0faa481420da2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d8877caaf7dabdcbb25cd573ff16bd25421736e27c18f3c99f8a5f7633f35cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8877caaf7dabdcbb25cd573ff16bd25421736e27c18f3c99f8a5f7633f35cfd->enter($__internal_d8877caaf7dabdcbb25cd573ff16bd25421736e27c18f3c99f8a5f7633f35cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8877caaf7dabdcbb25cd573ff16bd25421736e27c18f3c99f8a5f7633f35cfd->leave($__internal_d8877caaf7dabdcbb25cd573ff16bd25421736e27c18f3c99f8a5f7633f35cfd_prof);

        
        $__internal_b717c1dade2f0d926984ed3af3594b17cfe33f56f3067a57ed0faa481420da2a->leave($__internal_b717c1dade2f0d926984ed3af3594b17cfe33f56f3067a57ed0faa481420da2a_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_362460f5b12bddb71dac0c2bc9f5b99f8d611aa55fd0cf14331f2553ef62bd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362460f5b12bddb71dac0c2bc9f5b99f8d611aa55fd0cf14331f2553ef62bd10->enter($__internal_362460f5b12bddb71dac0c2bc9f5b99f8d611aa55fd0cf14331f2553ef62bd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e58318a6954c4a3571788137e87a367b82ba881f9446a63d29a0dfe42eb2e370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58318a6954c4a3571788137e87a367b82ba881f9446a63d29a0dfe42eb2e370->enter($__internal_e58318a6954c4a3571788137e87a367b82ba881f9446a63d29a0dfe42eb2e370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e58318a6954c4a3571788137e87a367b82ba881f9446a63d29a0dfe42eb2e370->leave($__internal_e58318a6954c4a3571788137e87a367b82ba881f9446a63d29a0dfe42eb2e370_prof);

        
        $__internal_362460f5b12bddb71dac0c2bc9f5b99f8d611aa55fd0cf14331f2553ef62bd10->leave($__internal_362460f5b12bddb71dac0c2bc9f5b99f8d611aa55fd0cf14331f2553ef62bd10_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d9b0fa49a1f59a4b9bcff7fe61d106096e72400a2167751f35be74a728296be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9b0fa49a1f59a4b9bcff7fe61d106096e72400a2167751f35be74a728296be->enter($__internal_4d9b0fa49a1f59a4b9bcff7fe61d106096e72400a2167751f35be74a728296be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66551984ffe042b15f17bab2d574e4ce8a511258601ef4c207a67e6976232edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66551984ffe042b15f17bab2d574e4ce8a511258601ef4c207a67e6976232edc->enter($__internal_66551984ffe042b15f17bab2d574e4ce8a511258601ef4c207a67e6976232edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_66551984ffe042b15f17bab2d574e4ce8a511258601ef4c207a67e6976232edc->leave($__internal_66551984ffe042b15f17bab2d574e4ce8a511258601ef4c207a67e6976232edc_prof);

        
        $__internal_4d9b0fa49a1f59a4b9bcff7fe61d106096e72400a2167751f35be74a728296be->leave($__internal_4d9b0fa49a1f59a4b9bcff7fe61d106096e72400a2167751f35be74a728296be_prof);

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
", "base.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/base.html.twig");
    }
}
