<?php

/* base.html.twig */
class __TwigTemplate_d545b1c2bd14dac19057333657c442f43f97e3e560d150ce2cc1cdad10d3e9cd extends Twig_Template
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
        $__internal_addbc971e5a42e68471649951bd06c2e7692527e7779b92fa770cb2a6d15bd55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addbc971e5a42e68471649951bd06c2e7692527e7779b92fa770cb2a6d15bd55->enter($__internal_addbc971e5a42e68471649951bd06c2e7692527e7779b92fa770cb2a6d15bd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_42831e661433d720618ef900e43975dad50e517f05f907d3ba8e494afe10cc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42831e661433d720618ef900e43975dad50e517f05f907d3ba8e494afe10cc5a->enter($__internal_42831e661433d720618ef900e43975dad50e517f05f907d3ba8e494afe10cc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_addbc971e5a42e68471649951bd06c2e7692527e7779b92fa770cb2a6d15bd55->leave($__internal_addbc971e5a42e68471649951bd06c2e7692527e7779b92fa770cb2a6d15bd55_prof);

        
        $__internal_42831e661433d720618ef900e43975dad50e517f05f907d3ba8e494afe10cc5a->leave($__internal_42831e661433d720618ef900e43975dad50e517f05f907d3ba8e494afe10cc5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1397d13e4b282e1ba38eb76193bf49fec01248c1154da096aba23e99b2eb4484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1397d13e4b282e1ba38eb76193bf49fec01248c1154da096aba23e99b2eb4484->enter($__internal_1397d13e4b282e1ba38eb76193bf49fec01248c1154da096aba23e99b2eb4484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1be7f1c7c09bef28fd625740f5cc37a6ee28459893b5c0f793764342be62580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1be7f1c7c09bef28fd625740f5cc37a6ee28459893b5c0f793764342be62580->enter($__internal_d1be7f1c7c09bef28fd625740f5cc37a6ee28459893b5c0f793764342be62580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d1be7f1c7c09bef28fd625740f5cc37a6ee28459893b5c0f793764342be62580->leave($__internal_d1be7f1c7c09bef28fd625740f5cc37a6ee28459893b5c0f793764342be62580_prof);

        
        $__internal_1397d13e4b282e1ba38eb76193bf49fec01248c1154da096aba23e99b2eb4484->leave($__internal_1397d13e4b282e1ba38eb76193bf49fec01248c1154da096aba23e99b2eb4484_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8870f2c10c92fccb787de7b311ccce66e6aa485cf9a10cc04d5ea78b02904d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8870f2c10c92fccb787de7b311ccce66e6aa485cf9a10cc04d5ea78b02904d32->enter($__internal_8870f2c10c92fccb787de7b311ccce66e6aa485cf9a10cc04d5ea78b02904d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_037a5f3b3a203e3d2dcc0d977a5d7f5e2408bfe22eb84e1433327d14509e8b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037a5f3b3a203e3d2dcc0d977a5d7f5e2408bfe22eb84e1433327d14509e8b65->enter($__internal_037a5f3b3a203e3d2dcc0d977a5d7f5e2408bfe22eb84e1433327d14509e8b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_037a5f3b3a203e3d2dcc0d977a5d7f5e2408bfe22eb84e1433327d14509e8b65->leave($__internal_037a5f3b3a203e3d2dcc0d977a5d7f5e2408bfe22eb84e1433327d14509e8b65_prof);

        
        $__internal_8870f2c10c92fccb787de7b311ccce66e6aa485cf9a10cc04d5ea78b02904d32->leave($__internal_8870f2c10c92fccb787de7b311ccce66e6aa485cf9a10cc04d5ea78b02904d32_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_e55df0f689777b22382812fe803b4c49df5e5725030792d0703dce1e63a03c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55df0f689777b22382812fe803b4c49df5e5725030792d0703dce1e63a03c15->enter($__internal_e55df0f689777b22382812fe803b4c49df5e5725030792d0703dce1e63a03c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e778588ec6646409355a4e7079343847ebe2e57bb2cff5acf7895d2192c98b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e778588ec6646409355a4e7079343847ebe2e57bb2cff5acf7895d2192c98b0->enter($__internal_3e778588ec6646409355a4e7079343847ebe2e57bb2cff5acf7895d2192c98b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e778588ec6646409355a4e7079343847ebe2e57bb2cff5acf7895d2192c98b0->leave($__internal_3e778588ec6646409355a4e7079343847ebe2e57bb2cff5acf7895d2192c98b0_prof);

        
        $__internal_e55df0f689777b22382812fe803b4c49df5e5725030792d0703dce1e63a03c15->leave($__internal_e55df0f689777b22382812fe803b4c49df5e5725030792d0703dce1e63a03c15_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_449813579db1936fb65135507527a9cd177c1e8e5d5ae606a249a170394c6cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449813579db1936fb65135507527a9cd177c1e8e5d5ae606a249a170394c6cff->enter($__internal_449813579db1936fb65135507527a9cd177c1e8e5d5ae606a249a170394c6cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c50c0faa50e99f64f206eb489ecf9085d088cc43a1186961bfe79371ca8ed9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c50c0faa50e99f64f206eb489ecf9085d088cc43a1186961bfe79371ca8ed9e->enter($__internal_8c50c0faa50e99f64f206eb489ecf9085d088cc43a1186961bfe79371ca8ed9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_8c50c0faa50e99f64f206eb489ecf9085d088cc43a1186961bfe79371ca8ed9e->leave($__internal_8c50c0faa50e99f64f206eb489ecf9085d088cc43a1186961bfe79371ca8ed9e_prof);

        
        $__internal_449813579db1936fb65135507527a9cd177c1e8e5d5ae606a249a170394c6cff->leave($__internal_449813579db1936fb65135507527a9cd177c1e8e5d5ae606a249a170394c6cff_prof);

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
