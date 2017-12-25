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
        $__internal_83cadc5b28f0388ce6578d3aa9a7849c92525399a1ca9c73b1f04de1e10a7391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cadc5b28f0388ce6578d3aa9a7849c92525399a1ca9c73b1f04de1e10a7391->enter($__internal_83cadc5b28f0388ce6578d3aa9a7849c92525399a1ca9c73b1f04de1e10a7391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_73e82df2acbe8c9d5990ec62e83229ac1c60621b6b54fa57e45f8a09c00705d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e82df2acbe8c9d5990ec62e83229ac1c60621b6b54fa57e45f8a09c00705d1->enter($__internal_73e82df2acbe8c9d5990ec62e83229ac1c60621b6b54fa57e45f8a09c00705d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_83cadc5b28f0388ce6578d3aa9a7849c92525399a1ca9c73b1f04de1e10a7391->leave($__internal_83cadc5b28f0388ce6578d3aa9a7849c92525399a1ca9c73b1f04de1e10a7391_prof);

        
        $__internal_73e82df2acbe8c9d5990ec62e83229ac1c60621b6b54fa57e45f8a09c00705d1->leave($__internal_73e82df2acbe8c9d5990ec62e83229ac1c60621b6b54fa57e45f8a09c00705d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03131e16f9ed338cdb925239a6874affbe3c2e800c147f66cf467ec0616db33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03131e16f9ed338cdb925239a6874affbe3c2e800c147f66cf467ec0616db33e->enter($__internal_03131e16f9ed338cdb925239a6874affbe3c2e800c147f66cf467ec0616db33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93aeb5725c4e720c2f4127a90634dc9688975a288a48b920ef48a6d5aeb1d1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93aeb5725c4e720c2f4127a90634dc9688975a288a48b920ef48a6d5aeb1d1b9->enter($__internal_93aeb5725c4e720c2f4127a90634dc9688975a288a48b920ef48a6d5aeb1d1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_93aeb5725c4e720c2f4127a90634dc9688975a288a48b920ef48a6d5aeb1d1b9->leave($__internal_93aeb5725c4e720c2f4127a90634dc9688975a288a48b920ef48a6d5aeb1d1b9_prof);

        
        $__internal_03131e16f9ed338cdb925239a6874affbe3c2e800c147f66cf467ec0616db33e->leave($__internal_03131e16f9ed338cdb925239a6874affbe3c2e800c147f66cf467ec0616db33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f4b23c6d8e02e28d230c4e85758081dd40bea56cc6f21f4641a93f4202859ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4b23c6d8e02e28d230c4e85758081dd40bea56cc6f21f4641a93f4202859ec->enter($__internal_0f4b23c6d8e02e28d230c4e85758081dd40bea56cc6f21f4641a93f4202859ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77006e184472107f7056dbb51e3ca62b664a4801449112e53fbb10d88faa12e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77006e184472107f7056dbb51e3ca62b664a4801449112e53fbb10d88faa12e5->enter($__internal_77006e184472107f7056dbb51e3ca62b664a4801449112e53fbb10d88faa12e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_77006e184472107f7056dbb51e3ca62b664a4801449112e53fbb10d88faa12e5->leave($__internal_77006e184472107f7056dbb51e3ca62b664a4801449112e53fbb10d88faa12e5_prof);

        
        $__internal_0f4b23c6d8e02e28d230c4e85758081dd40bea56cc6f21f4641a93f4202859ec->leave($__internal_0f4b23c6d8e02e28d230c4e85758081dd40bea56cc6f21f4641a93f4202859ec_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b12c2a0a4ff8fac05aac2a39f7277daa44e46a832b78d05c086fd758e4652f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12c2a0a4ff8fac05aac2a39f7277daa44e46a832b78d05c086fd758e4652f13->enter($__internal_b12c2a0a4ff8fac05aac2a39f7277daa44e46a832b78d05c086fd758e4652f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77cd1d493da453a514bca9ed831fab49eba542286645583d42786d4a40c57788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cd1d493da453a514bca9ed831fab49eba542286645583d42786d4a40c57788->enter($__internal_77cd1d493da453a514bca9ed831fab49eba542286645583d42786d4a40c57788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77cd1d493da453a514bca9ed831fab49eba542286645583d42786d4a40c57788->leave($__internal_77cd1d493da453a514bca9ed831fab49eba542286645583d42786d4a40c57788_prof);

        
        $__internal_b12c2a0a4ff8fac05aac2a39f7277daa44e46a832b78d05c086fd758e4652f13->leave($__internal_b12c2a0a4ff8fac05aac2a39f7277daa44e46a832b78d05c086fd758e4652f13_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9dbb59a3d5cd159d60df4dca0b22fc262a56a6081daecc23fdfb0bf5386b4a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dbb59a3d5cd159d60df4dca0b22fc262a56a6081daecc23fdfb0bf5386b4a63->enter($__internal_9dbb59a3d5cd159d60df4dca0b22fc262a56a6081daecc23fdfb0bf5386b4a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2f4766992596f730b1c721ce70e6571fd1c0343f27d6a228886b25c78c0f6319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4766992596f730b1c721ce70e6571fd1c0343f27d6a228886b25c78c0f6319->enter($__internal_2f4766992596f730b1c721ce70e6571fd1c0343f27d6a228886b25c78c0f6319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_2f4766992596f730b1c721ce70e6571fd1c0343f27d6a228886b25c78c0f6319->leave($__internal_2f4766992596f730b1c721ce70e6571fd1c0343f27d6a228886b25c78c0f6319_prof);

        
        $__internal_9dbb59a3d5cd159d60df4dca0b22fc262a56a6081daecc23fdfb0bf5386b4a63->leave($__internal_9dbb59a3d5cd159d60df4dca0b22fc262a56a6081daecc23fdfb0bf5386b4a63_prof);

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
