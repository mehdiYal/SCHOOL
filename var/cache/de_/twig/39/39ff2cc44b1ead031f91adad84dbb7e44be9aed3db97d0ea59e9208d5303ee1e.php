<?php

/* base.html.twig */
class __TwigTemplate_7d385a9ea17e5837fd50ba40c1499af7bbc8d6c5a71ee6bdabd2210998d40cf6 extends Twig_Template
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
        $__internal_24a78ffa95b841e7c331e98b3a6ae3fc108f7353a5a8ae2efda1310ea8e5aa44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a78ffa95b841e7c331e98b3a6ae3fc108f7353a5a8ae2efda1310ea8e5aa44->enter($__internal_24a78ffa95b841e7c331e98b3a6ae3fc108f7353a5a8ae2efda1310ea8e5aa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_92d40b26dc9074da2bd589b5d88b7102b996d9026e774ec4b669480cfce72bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d40b26dc9074da2bd589b5d88b7102b996d9026e774ec4b669480cfce72bf1->enter($__internal_92d40b26dc9074da2bd589b5d88b7102b996d9026e774ec4b669480cfce72bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_24a78ffa95b841e7c331e98b3a6ae3fc108f7353a5a8ae2efda1310ea8e5aa44->leave($__internal_24a78ffa95b841e7c331e98b3a6ae3fc108f7353a5a8ae2efda1310ea8e5aa44_prof);

        
        $__internal_92d40b26dc9074da2bd589b5d88b7102b996d9026e774ec4b669480cfce72bf1->leave($__internal_92d40b26dc9074da2bd589b5d88b7102b996d9026e774ec4b669480cfce72bf1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92616aec5115da2c55a698e374e3208fc51b879c93e69f198fcfe7f5e61af472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92616aec5115da2c55a698e374e3208fc51b879c93e69f198fcfe7f5e61af472->enter($__internal_92616aec5115da2c55a698e374e3208fc51b879c93e69f198fcfe7f5e61af472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_943e7e1ea830e6125877c0fd9477065d6ec9cf1a0edc58c968547c30314eb893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943e7e1ea830e6125877c0fd9477065d6ec9cf1a0edc58c968547c30314eb893->enter($__internal_943e7e1ea830e6125877c0fd9477065d6ec9cf1a0edc58c968547c30314eb893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_943e7e1ea830e6125877c0fd9477065d6ec9cf1a0edc58c968547c30314eb893->leave($__internal_943e7e1ea830e6125877c0fd9477065d6ec9cf1a0edc58c968547c30314eb893_prof);

        
        $__internal_92616aec5115da2c55a698e374e3208fc51b879c93e69f198fcfe7f5e61af472->leave($__internal_92616aec5115da2c55a698e374e3208fc51b879c93e69f198fcfe7f5e61af472_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b46628fc348172fcf359577b8a8deb4b5db3202b3842ba2c642ee4112bcc48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b46628fc348172fcf359577b8a8deb4b5db3202b3842ba2c642ee4112bcc48f->enter($__internal_1b46628fc348172fcf359577b8a8deb4b5db3202b3842ba2c642ee4112bcc48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f1c1929013d6ee1db85b0677ede2fe6dd853e5b66924ae364252fcaf11930b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c1929013d6ee1db85b0677ede2fe6dd853e5b66924ae364252fcaf11930b40->enter($__internal_f1c1929013d6ee1db85b0677ede2fe6dd853e5b66924ae364252fcaf11930b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f1c1929013d6ee1db85b0677ede2fe6dd853e5b66924ae364252fcaf11930b40->leave($__internal_f1c1929013d6ee1db85b0677ede2fe6dd853e5b66924ae364252fcaf11930b40_prof);

        
        $__internal_1b46628fc348172fcf359577b8a8deb4b5db3202b3842ba2c642ee4112bcc48f->leave($__internal_1b46628fc348172fcf359577b8a8deb4b5db3202b3842ba2c642ee4112bcc48f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9d395cfafb16ef17ea0217a96820f1d4d144b5a0f2fc11ef65290d0833ea7c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d395cfafb16ef17ea0217a96820f1d4d144b5a0f2fc11ef65290d0833ea7c4->enter($__internal_e9d395cfafb16ef17ea0217a96820f1d4d144b5a0f2fc11ef65290d0833ea7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a113184b39ec769cd6c703e2391228ecd1f124704f9c41226e7189640d460196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a113184b39ec769cd6c703e2391228ecd1f124704f9c41226e7189640d460196->enter($__internal_a113184b39ec769cd6c703e2391228ecd1f124704f9c41226e7189640d460196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a113184b39ec769cd6c703e2391228ecd1f124704f9c41226e7189640d460196->leave($__internal_a113184b39ec769cd6c703e2391228ecd1f124704f9c41226e7189640d460196_prof);

        
        $__internal_e9d395cfafb16ef17ea0217a96820f1d4d144b5a0f2fc11ef65290d0833ea7c4->leave($__internal_e9d395cfafb16ef17ea0217a96820f1d4d144b5a0f2fc11ef65290d0833ea7c4_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fefaef1e3dcb89a8ef7cd36423e5a551e9977a348a0c104c45037645c1952b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefaef1e3dcb89a8ef7cd36423e5a551e9977a348a0c104c45037645c1952b5a->enter($__internal_fefaef1e3dcb89a8ef7cd36423e5a551e9977a348a0c104c45037645c1952b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_513ede231e8c034e8c55253dae2895018a02c927a8dfbf4ca3528a769620dcf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513ede231e8c034e8c55253dae2895018a02c927a8dfbf4ca3528a769620dcf7->enter($__internal_513ede231e8c034e8c55253dae2895018a02c927a8dfbf4ca3528a769620dcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_513ede231e8c034e8c55253dae2895018a02c927a8dfbf4ca3528a769620dcf7->leave($__internal_513ede231e8c034e8c55253dae2895018a02c927a8dfbf4ca3528a769620dcf7_prof);

        
        $__internal_fefaef1e3dcb89a8ef7cd36423e5a551e9977a348a0c104c45037645c1952b5a->leave($__internal_fefaef1e3dcb89a8ef7cd36423e5a551e9977a348a0c104c45037645c1952b5a_prof);

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
