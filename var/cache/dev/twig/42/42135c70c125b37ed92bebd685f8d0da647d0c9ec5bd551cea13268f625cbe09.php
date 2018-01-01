<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_1f3d2acc6fd82b72bdb11f9032cb3fd25fd4a3f2171b366abebe96e5fd6abf2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_a97585adfc976191c762d400953e14ded30767fe83f02e85b23d8b4c74478eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97585adfc976191c762d400953e14ded30767fe83f02e85b23d8b4c74478eac->enter($__internal_a97585adfc976191c762d400953e14ded30767fe83f02e85b23d8b4c74478eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_5637e9a1ab3bfcdf3f3de7c44747778aa9a9c907dbfe6b6b056278b4a3713992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5637e9a1ab3bfcdf3f3de7c44747778aa9a9c907dbfe6b6b056278b4a3713992->enter($__internal_5637e9a1ab3bfcdf3f3de7c44747778aa9a9c907dbfe6b6b056278b4a3713992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97585adfc976191c762d400953e14ded30767fe83f02e85b23d8b4c74478eac->leave($__internal_a97585adfc976191c762d400953e14ded30767fe83f02e85b23d8b4c74478eac_prof);

        
        $__internal_5637e9a1ab3bfcdf3f3de7c44747778aa9a9c907dbfe6b6b056278b4a3713992->leave($__internal_5637e9a1ab3bfcdf3f3de7c44747778aa9a9c907dbfe6b6b056278b4a3713992_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03c1c0b91cffe20e2b04a09173befdf189e6747b81c1e99bdf6adb47e3fcb2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c1c0b91cffe20e2b04a09173befdf189e6747b81c1e99bdf6adb47e3fcb2fc->enter($__internal_03c1c0b91cffe20e2b04a09173befdf189e6747b81c1e99bdf6adb47e3fcb2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_172b5ee9fcf70701de9f5ec81eff40b5dcbdb83f72159590a4c0fb5e7abd5367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172b5ee9fcf70701de9f5ec81eff40b5dcbdb83f72159590a4c0fb5e7abd5367->enter($__internal_172b5ee9fcf70701de9f5ec81eff40b5dcbdb83f72159590a4c0fb5e7abd5367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_172b5ee9fcf70701de9f5ec81eff40b5dcbdb83f72159590a4c0fb5e7abd5367->leave($__internal_172b5ee9fcf70701de9f5ec81eff40b5dcbdb83f72159590a4c0fb5e7abd5367_prof);

        
        $__internal_03c1c0b91cffe20e2b04a09173befdf189e6747b81c1e99bdf6adb47e3fcb2fc->leave($__internal_03c1c0b91cffe20e2b04a09173befdf189e6747b81c1e99bdf6adb47e3fcb2fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
