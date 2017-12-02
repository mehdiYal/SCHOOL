<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_563c8178ce716715c5cb7fa74629c3431ab5f7b025a474b3b1a6e71f7c7510f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563c8178ce716715c5cb7fa74629c3431ab5f7b025a474b3b1a6e71f7c7510f9->enter($__internal_563c8178ce716715c5cb7fa74629c3431ab5f7b025a474b3b1a6e71f7c7510f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6c44d8c053992adab33967e955b5ef298005b18bc5bc1a0072ba05621172d68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c44d8c053992adab33967e955b5ef298005b18bc5bc1a0072ba05621172d68c->enter($__internal_6c44d8c053992adab33967e955b5ef298005b18bc5bc1a0072ba05621172d68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_563c8178ce716715c5cb7fa74629c3431ab5f7b025a474b3b1a6e71f7c7510f9->leave($__internal_563c8178ce716715c5cb7fa74629c3431ab5f7b025a474b3b1a6e71f7c7510f9_prof);

        
        $__internal_6c44d8c053992adab33967e955b5ef298005b18bc5bc1a0072ba05621172d68c->leave($__internal_6c44d8c053992adab33967e955b5ef298005b18bc5bc1a0072ba05621172d68c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95c1bb4456e5f4a5363a85ed6843982a77e93f59b3d9eb1f969a8752da919226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c1bb4456e5f4a5363a85ed6843982a77e93f59b3d9eb1f969a8752da919226->enter($__internal_95c1bb4456e5f4a5363a85ed6843982a77e93f59b3d9eb1f969a8752da919226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b13a0e352a52fa8367a680ddae622de23f83911f266777eb13a01819429d852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b13a0e352a52fa8367a680ddae622de23f83911f266777eb13a01819429d852->enter($__internal_9b13a0e352a52fa8367a680ddae622de23f83911f266777eb13a01819429d852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b13a0e352a52fa8367a680ddae622de23f83911f266777eb13a01819429d852->leave($__internal_9b13a0e352a52fa8367a680ddae622de23f83911f266777eb13a01819429d852_prof);

        
        $__internal_95c1bb4456e5f4a5363a85ed6843982a77e93f59b3d9eb1f969a8752da919226->leave($__internal_95c1bb4456e5f4a5363a85ed6843982a77e93f59b3d9eb1f969a8752da919226_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10c019402244fd8c306f607baaa75e7e01d982f9efa542ee4563e55107ccac18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c019402244fd8c306f607baaa75e7e01d982f9efa542ee4563e55107ccac18->enter($__internal_10c019402244fd8c306f607baaa75e7e01d982f9efa542ee4563e55107ccac18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f12c229fc2f589b57df1f4babb06de3e9aa086437f0ce1362acfe4b431743521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12c229fc2f589b57df1f4babb06de3e9aa086437f0ce1362acfe4b431743521->enter($__internal_f12c229fc2f589b57df1f4babb06de3e9aa086437f0ce1362acfe4b431743521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f12c229fc2f589b57df1f4babb06de3e9aa086437f0ce1362acfe4b431743521->leave($__internal_f12c229fc2f589b57df1f4babb06de3e9aa086437f0ce1362acfe4b431743521_prof);

        
        $__internal_10c019402244fd8c306f607baaa75e7e01d982f9efa542ee4563e55107ccac18->leave($__internal_10c019402244fd8c306f607baaa75e7e01d982f9efa542ee4563e55107ccac18_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_2716ff5c2facfcf5ffb4e200fa54383840e92206dc946cfeb0e2d9921efebf9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2716ff5c2facfcf5ffb4e200fa54383840e92206dc946cfeb0e2d9921efebf9c->enter($__internal_2716ff5c2facfcf5ffb4e200fa54383840e92206dc946cfeb0e2d9921efebf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d00d9bf4ea377e9703f305db9c292b2b58e9d8f43880f87aaafff6879deb5474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00d9bf4ea377e9703f305db9c292b2b58e9d8f43880f87aaafff6879deb5474->enter($__internal_d00d9bf4ea377e9703f305db9c292b2b58e9d8f43880f87aaafff6879deb5474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d00d9bf4ea377e9703f305db9c292b2b58e9d8f43880f87aaafff6879deb5474->leave($__internal_d00d9bf4ea377e9703f305db9c292b2b58e9d8f43880f87aaafff6879deb5474_prof);

        
        $__internal_2716ff5c2facfcf5ffb4e200fa54383840e92206dc946cfeb0e2d9921efebf9c->leave($__internal_2716ff5c2facfcf5ffb4e200fa54383840e92206dc946cfeb0e2d9921efebf9c_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56ccc16275d48c460ba3f480b97301c68824dc08a1812c128040f3a9968666f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ccc16275d48c460ba3f480b97301c68824dc08a1812c128040f3a9968666f8->enter($__internal_56ccc16275d48c460ba3f480b97301c68824dc08a1812c128040f3a9968666f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_72cb02d30a28d45cd86550dbd1bdb2f43c45d57a16cd9cb10306aa02fdf0f885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cb02d30a28d45cd86550dbd1bdb2f43c45d57a16cd9cb10306aa02fdf0f885->enter($__internal_72cb02d30a28d45cd86550dbd1bdb2f43c45d57a16cd9cb10306aa02fdf0f885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_72cb02d30a28d45cd86550dbd1bdb2f43c45d57a16cd9cb10306aa02fdf0f885->leave($__internal_72cb02d30a28d45cd86550dbd1bdb2f43c45d57a16cd9cb10306aa02fdf0f885_prof);

        
        $__internal_56ccc16275d48c460ba3f480b97301c68824dc08a1812c128040f3a9968666f8->leave($__internal_56ccc16275d48c460ba3f480b97301c68824dc08a1812c128040f3a9968666f8_prof);

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
