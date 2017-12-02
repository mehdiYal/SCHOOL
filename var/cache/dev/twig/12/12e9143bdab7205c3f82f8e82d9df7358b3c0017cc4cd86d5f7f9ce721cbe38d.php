<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4a1898d70c31567b111acf4c8a96ad27394c0a650e21dbf2c6d3ba94f79b14f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef60d82cc686d39e1da7c4fc44b4fc4f38f8efb5bdd10e51dfcf08d5ff40a880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef60d82cc686d39e1da7c4fc44b4fc4f38f8efb5bdd10e51dfcf08d5ff40a880->enter($__internal_ef60d82cc686d39e1da7c4fc44b4fc4f38f8efb5bdd10e51dfcf08d5ff40a880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a6b5c5dbf9ca633d91b8199eaa0b64919d28333f53ddac46a442f8e589f58071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b5c5dbf9ca633d91b8199eaa0b64919d28333f53ddac46a442f8e589f58071->enter($__internal_a6b5c5dbf9ca633d91b8199eaa0b64919d28333f53ddac46a442f8e589f58071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef60d82cc686d39e1da7c4fc44b4fc4f38f8efb5bdd10e51dfcf08d5ff40a880->leave($__internal_ef60d82cc686d39e1da7c4fc44b4fc4f38f8efb5bdd10e51dfcf08d5ff40a880_prof);

        
        $__internal_a6b5c5dbf9ca633d91b8199eaa0b64919d28333f53ddac46a442f8e589f58071->leave($__internal_a6b5c5dbf9ca633d91b8199eaa0b64919d28333f53ddac46a442f8e589f58071_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8032d92946647c3f9231b677bbc1c66c3867a3ad8521bfbb1ff729f5230a6f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8032d92946647c3f9231b677bbc1c66c3867a3ad8521bfbb1ff729f5230a6f9->enter($__internal_e8032d92946647c3f9231b677bbc1c66c3867a3ad8521bfbb1ff729f5230a6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f23fe15385144b495db31e6ae30d8806b089a8c437d6209b5c9c321d33f90928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23fe15385144b495db31e6ae30d8806b089a8c437d6209b5c9c321d33f90928->enter($__internal_f23fe15385144b495db31e6ae30d8806b089a8c437d6209b5c9c321d33f90928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f23fe15385144b495db31e6ae30d8806b089a8c437d6209b5c9c321d33f90928->leave($__internal_f23fe15385144b495db31e6ae30d8806b089a8c437d6209b5c9c321d33f90928_prof);

        
        $__internal_e8032d92946647c3f9231b677bbc1c66c3867a3ad8521bfbb1ff729f5230a6f9->leave($__internal_e8032d92946647c3f9231b677bbc1c66c3867a3ad8521bfbb1ff729f5230a6f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
