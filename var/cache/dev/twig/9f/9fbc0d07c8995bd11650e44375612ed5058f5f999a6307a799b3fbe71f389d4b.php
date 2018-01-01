<?php

/* base.html.twig */
class __TwigTemplate_c52452f58948892e08c8a0c14ddf4d785bd71a280f182d95460daa43a8e2ab7b extends Twig_Template
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
        $__internal_2ff5ab0849652d0ff9c9ac914327cced2b6fdb598989c97512d70568c0196b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff5ab0849652d0ff9c9ac914327cced2b6fdb598989c97512d70568c0196b16->enter($__internal_2ff5ab0849652d0ff9c9ac914327cced2b6fdb598989c97512d70568c0196b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dcff087d59c2210040423a3228f8b876813d94b91ffaed46fea2d4f9c097c820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcff087d59c2210040423a3228f8b876813d94b91ffaed46fea2d4f9c097c820->enter($__internal_dcff087d59c2210040423a3228f8b876813d94b91ffaed46fea2d4f9c097c820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2ff5ab0849652d0ff9c9ac914327cced2b6fdb598989c97512d70568c0196b16->leave($__internal_2ff5ab0849652d0ff9c9ac914327cced2b6fdb598989c97512d70568c0196b16_prof);

        
        $__internal_dcff087d59c2210040423a3228f8b876813d94b91ffaed46fea2d4f9c097c820->leave($__internal_dcff087d59c2210040423a3228f8b876813d94b91ffaed46fea2d4f9c097c820_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b927ae9507db2deea2c8290e77e1e32266d2f80d393c15e93515ff8fc6db019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b927ae9507db2deea2c8290e77e1e32266d2f80d393c15e93515ff8fc6db019->enter($__internal_0b927ae9507db2deea2c8290e77e1e32266d2f80d393c15e93515ff8fc6db019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e1f137662810694f15bb78ab48acf46854da746522b0333252a706f2fe64ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1f137662810694f15bb78ab48acf46854da746522b0333252a706f2fe64ec4->enter($__internal_2e1f137662810694f15bb78ab48acf46854da746522b0333252a706f2fe64ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2e1f137662810694f15bb78ab48acf46854da746522b0333252a706f2fe64ec4->leave($__internal_2e1f137662810694f15bb78ab48acf46854da746522b0333252a706f2fe64ec4_prof);

        
        $__internal_0b927ae9507db2deea2c8290e77e1e32266d2f80d393c15e93515ff8fc6db019->leave($__internal_0b927ae9507db2deea2c8290e77e1e32266d2f80d393c15e93515ff8fc6db019_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37d1ed8c439877a3eae537b19fd17a6867aabed6fb4a64b937072385ab47034e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d1ed8c439877a3eae537b19fd17a6867aabed6fb4a64b937072385ab47034e->enter($__internal_37d1ed8c439877a3eae537b19fd17a6867aabed6fb4a64b937072385ab47034e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_33bf7b6c1e9664abb48ab6a98805d42c62f2727e9ab59b17af474b97f27b7a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bf7b6c1e9664abb48ab6a98805d42c62f2727e9ab59b17af474b97f27b7a6e->enter($__internal_33bf7b6c1e9664abb48ab6a98805d42c62f2727e9ab59b17af474b97f27b7a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_33bf7b6c1e9664abb48ab6a98805d42c62f2727e9ab59b17af474b97f27b7a6e->leave($__internal_33bf7b6c1e9664abb48ab6a98805d42c62f2727e9ab59b17af474b97f27b7a6e_prof);

        
        $__internal_37d1ed8c439877a3eae537b19fd17a6867aabed6fb4a64b937072385ab47034e->leave($__internal_37d1ed8c439877a3eae537b19fd17a6867aabed6fb4a64b937072385ab47034e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b382aac988e54a8294d38ad7b23abfc955a24f118d15d7cbae505828eefd8426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b382aac988e54a8294d38ad7b23abfc955a24f118d15d7cbae505828eefd8426->enter($__internal_b382aac988e54a8294d38ad7b23abfc955a24f118d15d7cbae505828eefd8426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9addde09f6c91d2f33d5e85bc8d351fe8a23ab632cda906072d7354d7dd1c7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9addde09f6c91d2f33d5e85bc8d351fe8a23ab632cda906072d7354d7dd1c7d9->enter($__internal_9addde09f6c91d2f33d5e85bc8d351fe8a23ab632cda906072d7354d7dd1c7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9addde09f6c91d2f33d5e85bc8d351fe8a23ab632cda906072d7354d7dd1c7d9->leave($__internal_9addde09f6c91d2f33d5e85bc8d351fe8a23ab632cda906072d7354d7dd1c7d9_prof);

        
        $__internal_b382aac988e54a8294d38ad7b23abfc955a24f118d15d7cbae505828eefd8426->leave($__internal_b382aac988e54a8294d38ad7b23abfc955a24f118d15d7cbae505828eefd8426_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8754fd34e4da8a08090cebdb16e08d6b00715d9049076158e2e9f113ab35c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8754fd34e4da8a08090cebdb16e08d6b00715d9049076158e2e9f113ab35c79->enter($__internal_c8754fd34e4da8a08090cebdb16e08d6b00715d9049076158e2e9f113ab35c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_28ec9132f6220cdfe0821cc6c97d22d16fd28aedb85de31907965aea46f92a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ec9132f6220cdfe0821cc6c97d22d16fd28aedb85de31907965aea46f92a37->enter($__internal_28ec9132f6220cdfe0821cc6c97d22d16fd28aedb85de31907965aea46f92a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_28ec9132f6220cdfe0821cc6c97d22d16fd28aedb85de31907965aea46f92a37->leave($__internal_28ec9132f6220cdfe0821cc6c97d22d16fd28aedb85de31907965aea46f92a37_prof);

        
        $__internal_c8754fd34e4da8a08090cebdb16e08d6b00715d9049076158e2e9f113ab35c79->leave($__internal_c8754fd34e4da8a08090cebdb16e08d6b00715d9049076158e2e9f113ab35c79_prof);

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
