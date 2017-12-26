<?php

/* base.html.twig */
class __TwigTemplate_6d07904ac12aecfdd7d4d2742d42a2f0c29d74bea6460ddf5db7c0f5cdb97c4b extends Twig_Template
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
        $__internal_64f95b8b3b9638a3bad01270b9147e6f514afe20593a822d9e346ba8808cf00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f95b8b3b9638a3bad01270b9147e6f514afe20593a822d9e346ba8808cf00f->enter($__internal_64f95b8b3b9638a3bad01270b9147e6f514afe20593a822d9e346ba8808cf00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f2154e549744ba7b15e289f85f80460e528ea02f7e77d110f64e5b18b406b3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2154e549744ba7b15e289f85f80460e528ea02f7e77d110f64e5b18b406b3c9->enter($__internal_f2154e549744ba7b15e289f85f80460e528ea02f7e77d110f64e5b18b406b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_64f95b8b3b9638a3bad01270b9147e6f514afe20593a822d9e346ba8808cf00f->leave($__internal_64f95b8b3b9638a3bad01270b9147e6f514afe20593a822d9e346ba8808cf00f_prof);

        
        $__internal_f2154e549744ba7b15e289f85f80460e528ea02f7e77d110f64e5b18b406b3c9->leave($__internal_f2154e549744ba7b15e289f85f80460e528ea02f7e77d110f64e5b18b406b3c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_620deba16fe7225f816145eb1e96be1b3f6f3c66a34e866c47172431e7e100db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620deba16fe7225f816145eb1e96be1b3f6f3c66a34e866c47172431e7e100db->enter($__internal_620deba16fe7225f816145eb1e96be1b3f6f3c66a34e866c47172431e7e100db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51ff94dc6c786ac26ccd0fdf703e7813774d819fddb6e8a332d42a9b13deb4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ff94dc6c786ac26ccd0fdf703e7813774d819fddb6e8a332d42a9b13deb4e4->enter($__internal_51ff94dc6c786ac26ccd0fdf703e7813774d819fddb6e8a332d42a9b13deb4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_51ff94dc6c786ac26ccd0fdf703e7813774d819fddb6e8a332d42a9b13deb4e4->leave($__internal_51ff94dc6c786ac26ccd0fdf703e7813774d819fddb6e8a332d42a9b13deb4e4_prof);

        
        $__internal_620deba16fe7225f816145eb1e96be1b3f6f3c66a34e866c47172431e7e100db->leave($__internal_620deba16fe7225f816145eb1e96be1b3f6f3c66a34e866c47172431e7e100db_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c51fa42bbbbc289e78488deb38977af5d4a3113088404000fe7937e0412adc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c51fa42bbbbc289e78488deb38977af5d4a3113088404000fe7937e0412adc3->enter($__internal_7c51fa42bbbbc289e78488deb38977af5d4a3113088404000fe7937e0412adc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7d104b41b29d221f848c463f77bfccfadb519ce79f61f29dbb44949aa0ca8c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d104b41b29d221f848c463f77bfccfadb519ce79f61f29dbb44949aa0ca8c7d->enter($__internal_7d104b41b29d221f848c463f77bfccfadb519ce79f61f29dbb44949aa0ca8c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7d104b41b29d221f848c463f77bfccfadb519ce79f61f29dbb44949aa0ca8c7d->leave($__internal_7d104b41b29d221f848c463f77bfccfadb519ce79f61f29dbb44949aa0ca8c7d_prof);

        
        $__internal_7c51fa42bbbbc289e78488deb38977af5d4a3113088404000fe7937e0412adc3->leave($__internal_7c51fa42bbbbc289e78488deb38977af5d4a3113088404000fe7937e0412adc3_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_55782d4497cc883bd1f263b73cd67b17adbf3cfa1a2f4938a6f1d9f3268ee9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55782d4497cc883bd1f263b73cd67b17adbf3cfa1a2f4938a6f1d9f3268ee9b6->enter($__internal_55782d4497cc883bd1f263b73cd67b17adbf3cfa1a2f4938a6f1d9f3268ee9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f43c42637a99349ff67446f839291921fed3481705227f5e96bb6dc8e5246481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43c42637a99349ff67446f839291921fed3481705227f5e96bb6dc8e5246481->enter($__internal_f43c42637a99349ff67446f839291921fed3481705227f5e96bb6dc8e5246481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f43c42637a99349ff67446f839291921fed3481705227f5e96bb6dc8e5246481->leave($__internal_f43c42637a99349ff67446f839291921fed3481705227f5e96bb6dc8e5246481_prof);

        
        $__internal_55782d4497cc883bd1f263b73cd67b17adbf3cfa1a2f4938a6f1d9f3268ee9b6->leave($__internal_55782d4497cc883bd1f263b73cd67b17adbf3cfa1a2f4938a6f1d9f3268ee9b6_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_adea3b0fffec7f1be36d87687d78638d66da5c4339f8ef66e172473a8acd4bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adea3b0fffec7f1be36d87687d78638d66da5c4339f8ef66e172473a8acd4bd6->enter($__internal_adea3b0fffec7f1be36d87687d78638d66da5c4339f8ef66e172473a8acd4bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ddeb89695617bc883c8f5d962dc388e860b8578c3ad0a13a1f4dcdbf862e2f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddeb89695617bc883c8f5d962dc388e860b8578c3ad0a13a1f4dcdbf862e2f38->enter($__internal_ddeb89695617bc883c8f5d962dc388e860b8578c3ad0a13a1f4dcdbf862e2f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_ddeb89695617bc883c8f5d962dc388e860b8578c3ad0a13a1f4dcdbf862e2f38->leave($__internal_ddeb89695617bc883c8f5d962dc388e860b8578c3ad0a13a1f4dcdbf862e2f38_prof);

        
        $__internal_adea3b0fffec7f1be36d87687d78638d66da5c4339f8ef66e172473a8acd4bd6->leave($__internal_adea3b0fffec7f1be36d87687d78638d66da5c4339f8ef66e172473a8acd4bd6_prof);

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
