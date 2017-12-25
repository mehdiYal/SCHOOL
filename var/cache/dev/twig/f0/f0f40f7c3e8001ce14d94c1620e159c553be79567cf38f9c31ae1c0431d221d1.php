<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a19818406d46269c5d79e23b997b58f1e3e6674efdd71ac35b595fb04ec5131d extends Twig_Template
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
        $__internal_123aea63d04eb146cda15305913cb299e91aa55409a16277c3c76f3ecc65ead9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_123aea63d04eb146cda15305913cb299e91aa55409a16277c3c76f3ecc65ead9->enter($__internal_123aea63d04eb146cda15305913cb299e91aa55409a16277c3c76f3ecc65ead9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_c7380c30207d4f6829e81df7e7eb59b24864fe91dfaff06df1ef3b3f7d0e31bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7380c30207d4f6829e81df7e7eb59b24864fe91dfaff06df1ef3b3f7d0e31bb->enter($__internal_c7380c30207d4f6829e81df7e7eb59b24864fe91dfaff06df1ef3b3f7d0e31bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_123aea63d04eb146cda15305913cb299e91aa55409a16277c3c76f3ecc65ead9->leave($__internal_123aea63d04eb146cda15305913cb299e91aa55409a16277c3c76f3ecc65ead9_prof);

        
        $__internal_c7380c30207d4f6829e81df7e7eb59b24864fe91dfaff06df1ef3b3f7d0e31bb->leave($__internal_c7380c30207d4f6829e81df7e7eb59b24864fe91dfaff06df1ef3b3f7d0e31bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7df2f06cac0d70a5ed8c820990ae2418079d432c84b7b0ce9ba4c13c5a5db93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7df2f06cac0d70a5ed8c820990ae2418079d432c84b7b0ce9ba4c13c5a5db93->enter($__internal_b7df2f06cac0d70a5ed8c820990ae2418079d432c84b7b0ce9ba4c13c5a5db93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4dcdcf3afc4fcdb91190e476eeab80ca79648a66ea6fc1571b946a2169486ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4dcdcf3afc4fcdb91190e476eeab80ca79648a66ea6fc1571b946a2169486ab->enter($__internal_a4dcdcf3afc4fcdb91190e476eeab80ca79648a66ea6fc1571b946a2169486ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_a4dcdcf3afc4fcdb91190e476eeab80ca79648a66ea6fc1571b946a2169486ab->leave($__internal_a4dcdcf3afc4fcdb91190e476eeab80ca79648a66ea6fc1571b946a2169486ab_prof);

        
        $__internal_b7df2f06cac0d70a5ed8c820990ae2418079d432c84b7b0ce9ba4c13c5a5db93->leave($__internal_b7df2f06cac0d70a5ed8c820990ae2418079d432c84b7b0ce9ba4c13c5a5db93_prof);

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
