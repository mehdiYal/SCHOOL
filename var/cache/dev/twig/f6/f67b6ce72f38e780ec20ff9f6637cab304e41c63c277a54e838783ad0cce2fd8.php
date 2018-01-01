<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6e27b7575ce4c5fb494e8dcb6652bec3d62676ec69c5a8dbf382dd3db6b8649f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_717b8c03ec7ccfa611273d6e1aeb188858585f69c514039521941cf1084d1eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717b8c03ec7ccfa611273d6e1aeb188858585f69c514039521941cf1084d1eb2->enter($__internal_717b8c03ec7ccfa611273d6e1aeb188858585f69c514039521941cf1084d1eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_d07963fc97c0cb68ee21b9855cde15b67c1e0eefb5d1b2ed246c248c994368bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07963fc97c0cb68ee21b9855cde15b67c1e0eefb5d1b2ed246c248c994368bd->enter($__internal_d07963fc97c0cb68ee21b9855cde15b67c1e0eefb5d1b2ed246c248c994368bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_717b8c03ec7ccfa611273d6e1aeb188858585f69c514039521941cf1084d1eb2->leave($__internal_717b8c03ec7ccfa611273d6e1aeb188858585f69c514039521941cf1084d1eb2_prof);

        
        $__internal_d07963fc97c0cb68ee21b9855cde15b67c1e0eefb5d1b2ed246c248c994368bd->leave($__internal_d07963fc97c0cb68ee21b9855cde15b67c1e0eefb5d1b2ed246c248c994368bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcfa89f9e620fa1ae2af064cd81bbfa34a4848adf946d2dc8e5e04fce8aa4369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfa89f9e620fa1ae2af064cd81bbfa34a4848adf946d2dc8e5e04fce8aa4369->enter($__internal_dcfa89f9e620fa1ae2af064cd81bbfa34a4848adf946d2dc8e5e04fce8aa4369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c24037258d5a875ce27305ca302d541d38d5a942e0f3b7bd2b34ccdeab240b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24037258d5a875ce27305ca302d541d38d5a942e0f3b7bd2b34ccdeab240b08->enter($__internal_c24037258d5a875ce27305ca302d541d38d5a942e0f3b7bd2b34ccdeab240b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c24037258d5a875ce27305ca302d541d38d5a942e0f3b7bd2b34ccdeab240b08->leave($__internal_c24037258d5a875ce27305ca302d541d38d5a942e0f3b7bd2b34ccdeab240b08_prof);

        
        $__internal_dcfa89f9e620fa1ae2af064cd81bbfa34a4848adf946d2dc8e5e04fce8aa4369->leave($__internal_dcfa89f9e620fa1ae2af064cd81bbfa34a4848adf946d2dc8e5e04fce8aa4369_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
