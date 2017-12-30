<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_27fca72c8bbc69ff322a60874b2dee438222aeafb12eb7e9fafb6843df3229a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_8c247e84614bd96d0d842ac27cbca76e995ba132712fb9e6e1310f632ef6e43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c247e84614bd96d0d842ac27cbca76e995ba132712fb9e6e1310f632ef6e43a->enter($__internal_8c247e84614bd96d0d842ac27cbca76e995ba132712fb9e6e1310f632ef6e43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8232f4a001a8b489eddb476d2b49a1ae50e6eb4989100d152528649593bde971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8232f4a001a8b489eddb476d2b49a1ae50e6eb4989100d152528649593bde971->enter($__internal_8232f4a001a8b489eddb476d2b49a1ae50e6eb4989100d152528649593bde971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c247e84614bd96d0d842ac27cbca76e995ba132712fb9e6e1310f632ef6e43a->leave($__internal_8c247e84614bd96d0d842ac27cbca76e995ba132712fb9e6e1310f632ef6e43a_prof);

        
        $__internal_8232f4a001a8b489eddb476d2b49a1ae50e6eb4989100d152528649593bde971->leave($__internal_8232f4a001a8b489eddb476d2b49a1ae50e6eb4989100d152528649593bde971_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a836523359b45996d55b5c821444e3c0dbad46706ba39071b437fbae89a8104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a836523359b45996d55b5c821444e3c0dbad46706ba39071b437fbae89a8104->enter($__internal_6a836523359b45996d55b5c821444e3c0dbad46706ba39071b437fbae89a8104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f52525fd9cfd4a10c9905f90285d554adaa50561c29bb9bea01a71cce9a5393d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52525fd9cfd4a10c9905f90285d554adaa50561c29bb9bea01a71cce9a5393d->enter($__internal_f52525fd9cfd4a10c9905f90285d554adaa50561c29bb9bea01a71cce9a5393d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f52525fd9cfd4a10c9905f90285d554adaa50561c29bb9bea01a71cce9a5393d->leave($__internal_f52525fd9cfd4a10c9905f90285d554adaa50561c29bb9bea01a71cce9a5393d_prof);

        
        $__internal_6a836523359b45996d55b5c821444e3c0dbad46706ba39071b437fbae89a8104->leave($__internal_6a836523359b45996d55b5c821444e3c0dbad46706ba39071b437fbae89a8104_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
