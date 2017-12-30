<?php

/* base.html.twig */
class __TwigTemplate_d52d151140a90785d3b500689303aa7d534c30d41496121d48324edbf92dcdd5 extends Twig_Template
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
        $__internal_9da2f9cbef5f10616d5bf4eb6da74f92d3d0ca59a8b9f2094c29d20448592706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da2f9cbef5f10616d5bf4eb6da74f92d3d0ca59a8b9f2094c29d20448592706->enter($__internal_9da2f9cbef5f10616d5bf4eb6da74f92d3d0ca59a8b9f2094c29d20448592706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9601af5574fcdbeea1ce87e100fe552fdf2581f72d36c11c226fb0bbdc82b5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9601af5574fcdbeea1ce87e100fe552fdf2581f72d36c11c226fb0bbdc82b5cb->enter($__internal_9601af5574fcdbeea1ce87e100fe552fdf2581f72d36c11c226fb0bbdc82b5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9da2f9cbef5f10616d5bf4eb6da74f92d3d0ca59a8b9f2094c29d20448592706->leave($__internal_9da2f9cbef5f10616d5bf4eb6da74f92d3d0ca59a8b9f2094c29d20448592706_prof);

        
        $__internal_9601af5574fcdbeea1ce87e100fe552fdf2581f72d36c11c226fb0bbdc82b5cb->leave($__internal_9601af5574fcdbeea1ce87e100fe552fdf2581f72d36c11c226fb0bbdc82b5cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e671ee0d5ed1657a6b0c7d93b13dee495885567023544b116a279e4981b2ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e671ee0d5ed1657a6b0c7d93b13dee495885567023544b116a279e4981b2ff0->enter($__internal_0e671ee0d5ed1657a6b0c7d93b13dee495885567023544b116a279e4981b2ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3ee15939215ac4ad696ceb6a10db753b5d3666e286cd86ad8a8058e2a992d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ee15939215ac4ad696ceb6a10db753b5d3666e286cd86ad8a8058e2a992d6e->enter($__internal_b3ee15939215ac4ad696ceb6a10db753b5d3666e286cd86ad8a8058e2a992d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3ee15939215ac4ad696ceb6a10db753b5d3666e286cd86ad8a8058e2a992d6e->leave($__internal_b3ee15939215ac4ad696ceb6a10db753b5d3666e286cd86ad8a8058e2a992d6e_prof);

        
        $__internal_0e671ee0d5ed1657a6b0c7d93b13dee495885567023544b116a279e4981b2ff0->leave($__internal_0e671ee0d5ed1657a6b0c7d93b13dee495885567023544b116a279e4981b2ff0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37088b9ab86cdb38fd9e9ee371bbf95077cec779ff2d28cce3e0f11fc0774d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37088b9ab86cdb38fd9e9ee371bbf95077cec779ff2d28cce3e0f11fc0774d8b->enter($__internal_37088b9ab86cdb38fd9e9ee371bbf95077cec779ff2d28cce3e0f11fc0774d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d0c64cf95ab1e9f2dc6345df2dc40e0c5d0afa12ed4acaf283d446304b17ca23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c64cf95ab1e9f2dc6345df2dc40e0c5d0afa12ed4acaf283d446304b17ca23->enter($__internal_d0c64cf95ab1e9f2dc6345df2dc40e0c5d0afa12ed4acaf283d446304b17ca23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d0c64cf95ab1e9f2dc6345df2dc40e0c5d0afa12ed4acaf283d446304b17ca23->leave($__internal_d0c64cf95ab1e9f2dc6345df2dc40e0c5d0afa12ed4acaf283d446304b17ca23_prof);

        
        $__internal_37088b9ab86cdb38fd9e9ee371bbf95077cec779ff2d28cce3e0f11fc0774d8b->leave($__internal_37088b9ab86cdb38fd9e9ee371bbf95077cec779ff2d28cce3e0f11fc0774d8b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b229d0c780aa24d66d690829c607d79ab280f485e40e7a76bdf9321da44dc05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b229d0c780aa24d66d690829c607d79ab280f485e40e7a76bdf9321da44dc05c->enter($__internal_b229d0c780aa24d66d690829c607d79ab280f485e40e7a76bdf9321da44dc05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa53813abb7a7e2b51a61dee423c6d8745bff2423d67a0a0ba3faa3973c1d6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa53813abb7a7e2b51a61dee423c6d8745bff2423d67a0a0ba3faa3973c1d6bc->enter($__internal_fa53813abb7a7e2b51a61dee423c6d8745bff2423d67a0a0ba3faa3973c1d6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa53813abb7a7e2b51a61dee423c6d8745bff2423d67a0a0ba3faa3973c1d6bc->leave($__internal_fa53813abb7a7e2b51a61dee423c6d8745bff2423d67a0a0ba3faa3973c1d6bc_prof);

        
        $__internal_b229d0c780aa24d66d690829c607d79ab280f485e40e7a76bdf9321da44dc05c->leave($__internal_b229d0c780aa24d66d690829c607d79ab280f485e40e7a76bdf9321da44dc05c_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_50184ec8b93f09b9b10824063db96e0e74dca33853ed5d1fcc818713188e34c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50184ec8b93f09b9b10824063db96e0e74dca33853ed5d1fcc818713188e34c2->enter($__internal_50184ec8b93f09b9b10824063db96e0e74dca33853ed5d1fcc818713188e34c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7d083d83689c6239a54bf95d8fb7fec0d273988c932dbc5fc1e3f4624657b203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d083d83689c6239a54bf95d8fb7fec0d273988c932dbc5fc1e3f4624657b203->enter($__internal_7d083d83689c6239a54bf95d8fb7fec0d273988c932dbc5fc1e3f4624657b203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_7d083d83689c6239a54bf95d8fb7fec0d273988c932dbc5fc1e3f4624657b203->leave($__internal_7d083d83689c6239a54bf95d8fb7fec0d273988c932dbc5fc1e3f4624657b203_prof);

        
        $__internal_50184ec8b93f09b9b10824063db96e0e74dca33853ed5d1fcc818713188e34c2->leave($__internal_50184ec8b93f09b9b10824063db96e0e74dca33853ed5d1fcc818713188e34c2_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\base.html.twig");
    }
}
