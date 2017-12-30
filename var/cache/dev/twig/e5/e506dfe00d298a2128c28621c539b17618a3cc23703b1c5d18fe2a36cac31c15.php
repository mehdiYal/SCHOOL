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
        $__internal_f1b7f472b6c30492f73e69f3ed25fd7c44d67b42de92268030d2f3c79be9abe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b7f472b6c30492f73e69f3ed25fd7c44d67b42de92268030d2f3c79be9abe4->enter($__internal_f1b7f472b6c30492f73e69f3ed25fd7c44d67b42de92268030d2f3c79be9abe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e9299a74407138803a0055c52ce26b1011582e6c9334ec8c79bb59a8615ce5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9299a74407138803a0055c52ce26b1011582e6c9334ec8c79bb59a8615ce5b1->enter($__internal_e9299a74407138803a0055c52ce26b1011582e6c9334ec8c79bb59a8615ce5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f1b7f472b6c30492f73e69f3ed25fd7c44d67b42de92268030d2f3c79be9abe4->leave($__internal_f1b7f472b6c30492f73e69f3ed25fd7c44d67b42de92268030d2f3c79be9abe4_prof);

        
        $__internal_e9299a74407138803a0055c52ce26b1011582e6c9334ec8c79bb59a8615ce5b1->leave($__internal_e9299a74407138803a0055c52ce26b1011582e6c9334ec8c79bb59a8615ce5b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e40ff974ec6ce9d586f777c477e32a3328c33ac5f23f3fe2e0ea6950146fb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e40ff974ec6ce9d586f777c477e32a3328c33ac5f23f3fe2e0ea6950146fb7f->enter($__internal_0e40ff974ec6ce9d586f777c477e32a3328c33ac5f23f3fe2e0ea6950146fb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_125e6840ba0810537cd613ebb20c32571faecc73faa70560fcb9672e09c7a1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125e6840ba0810537cd613ebb20c32571faecc73faa70560fcb9672e09c7a1fd->enter($__internal_125e6840ba0810537cd613ebb20c32571faecc73faa70560fcb9672e09c7a1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_125e6840ba0810537cd613ebb20c32571faecc73faa70560fcb9672e09c7a1fd->leave($__internal_125e6840ba0810537cd613ebb20c32571faecc73faa70560fcb9672e09c7a1fd_prof);

        
        $__internal_0e40ff974ec6ce9d586f777c477e32a3328c33ac5f23f3fe2e0ea6950146fb7f->leave($__internal_0e40ff974ec6ce9d586f777c477e32a3328c33ac5f23f3fe2e0ea6950146fb7f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_367282874d5b7ac48161620fd0c05ed5059510465e7eae835f5b90ebc20d5e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367282874d5b7ac48161620fd0c05ed5059510465e7eae835f5b90ebc20d5e4e->enter($__internal_367282874d5b7ac48161620fd0c05ed5059510465e7eae835f5b90ebc20d5e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_86f010c6634ec5d72213360fbcd74a75993d6a41defb0f0650bfa2cb3517000a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f010c6634ec5d72213360fbcd74a75993d6a41defb0f0650bfa2cb3517000a->enter($__internal_86f010c6634ec5d72213360fbcd74a75993d6a41defb0f0650bfa2cb3517000a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_86f010c6634ec5d72213360fbcd74a75993d6a41defb0f0650bfa2cb3517000a->leave($__internal_86f010c6634ec5d72213360fbcd74a75993d6a41defb0f0650bfa2cb3517000a_prof);

        
        $__internal_367282874d5b7ac48161620fd0c05ed5059510465e7eae835f5b90ebc20d5e4e->leave($__internal_367282874d5b7ac48161620fd0c05ed5059510465e7eae835f5b90ebc20d5e4e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8b0cbe4a8dd19e3b9ce0636989dd6b3004e1e734a78e19cad8a0ec6b29e083a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b0cbe4a8dd19e3b9ce0636989dd6b3004e1e734a78e19cad8a0ec6b29e083a->enter($__internal_e8b0cbe4a8dd19e3b9ce0636989dd6b3004e1e734a78e19cad8a0ec6b29e083a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d89ba5e3b385448a60944f001f7ae2d4bc07694ff6e570b2e0b99570c32b0007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89ba5e3b385448a60944f001f7ae2d4bc07694ff6e570b2e0b99570c32b0007->enter($__internal_d89ba5e3b385448a60944f001f7ae2d4bc07694ff6e570b2e0b99570c32b0007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d89ba5e3b385448a60944f001f7ae2d4bc07694ff6e570b2e0b99570c32b0007->leave($__internal_d89ba5e3b385448a60944f001f7ae2d4bc07694ff6e570b2e0b99570c32b0007_prof);

        
        $__internal_e8b0cbe4a8dd19e3b9ce0636989dd6b3004e1e734a78e19cad8a0ec6b29e083a->leave($__internal_e8b0cbe4a8dd19e3b9ce0636989dd6b3004e1e734a78e19cad8a0ec6b29e083a_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5eae6057e8f8d7978668866feb48e8ef1e6d16b16a9c7e324d061d2240d0badd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eae6057e8f8d7978668866feb48e8ef1e6d16b16a9c7e324d061d2240d0badd->enter($__internal_5eae6057e8f8d7978668866feb48e8ef1e6d16b16a9c7e324d061d2240d0badd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_470bf24269e0f9739e734842395cc4282005afee6c4f8f5858e27de1ad4df829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470bf24269e0f9739e734842395cc4282005afee6c4f8f5858e27de1ad4df829->enter($__internal_470bf24269e0f9739e734842395cc4282005afee6c4f8f5858e27de1ad4df829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_470bf24269e0f9739e734842395cc4282005afee6c4f8f5858e27de1ad4df829->leave($__internal_470bf24269e0f9739e734842395cc4282005afee6c4f8f5858e27de1ad4df829_prof);

        
        $__internal_5eae6057e8f8d7978668866feb48e8ef1e6d16b16a9c7e324d061d2240d0badd->leave($__internal_5eae6057e8f8d7978668866feb48e8ef1e6d16b16a9c7e324d061d2240d0badd_prof);

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
