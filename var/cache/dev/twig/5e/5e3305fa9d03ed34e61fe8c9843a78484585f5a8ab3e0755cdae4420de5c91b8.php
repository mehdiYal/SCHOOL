<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a5f9c64f9852860a5200e02bc60eff39256fd10b82e3fac883acaafd1f6c6b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0397b12ad908d1c11ad7844a4e184b307764b75eb7929aaf3f4c6bf1942827b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0397b12ad908d1c11ad7844a4e184b307764b75eb7929aaf3f4c6bf1942827b0->enter($__internal_0397b12ad908d1c11ad7844a4e184b307764b75eb7929aaf3f4c6bf1942827b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_7ee687f0581ffcaf2c7cd0bee76aa99eb778a63b58dca448afc180940aa47de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee687f0581ffcaf2c7cd0bee76aa99eb778a63b58dca448afc180940aa47de1->enter($__internal_7ee687f0581ffcaf2c7cd0bee76aa99eb778a63b58dca448afc180940aa47de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0397b12ad908d1c11ad7844a4e184b307764b75eb7929aaf3f4c6bf1942827b0->leave($__internal_0397b12ad908d1c11ad7844a4e184b307764b75eb7929aaf3f4c6bf1942827b0_prof);

        
        $__internal_7ee687f0581ffcaf2c7cd0bee76aa99eb778a63b58dca448afc180940aa47de1->leave($__internal_7ee687f0581ffcaf2c7cd0bee76aa99eb778a63b58dca448afc180940aa47de1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6165784dd8ff2abfc6d208a8feaa703cc6e25d7b9a0aa3a6d0151b222fa80cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6165784dd8ff2abfc6d208a8feaa703cc6e25d7b9a0aa3a6d0151b222fa80cd->enter($__internal_c6165784dd8ff2abfc6d208a8feaa703cc6e25d7b9a0aa3a6d0151b222fa80cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61a382b68980205a8a98725235a1746b89cc68d3e5501b5e0e336424a1214fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a382b68980205a8a98725235a1746b89cc68d3e5501b5e0e336424a1214fd0->enter($__internal_61a382b68980205a8a98725235a1746b89cc68d3e5501b5e0e336424a1214fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_61a382b68980205a8a98725235a1746b89cc68d3e5501b5e0e336424a1214fd0->leave($__internal_61a382b68980205a8a98725235a1746b89cc68d3e5501b5e0e336424a1214fd0_prof);

        
        $__internal_c6165784dd8ff2abfc6d208a8feaa703cc6e25d7b9a0aa3a6d0151b222fa80cd->leave($__internal_c6165784dd8ff2abfc6d208a8feaa703cc6e25d7b9a0aa3a6d0151b222fa80cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
