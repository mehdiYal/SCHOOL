<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d537e19f6c1d9b39aee1315d85a04e07b48d796b7cde79a70faee934d34d62f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_dc266e7dae3f9f123a7a63107ec4d5bacc6460e4aa2c91d2c92852aa123e1f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc266e7dae3f9f123a7a63107ec4d5bacc6460e4aa2c91d2c92852aa123e1f51->enter($__internal_dc266e7dae3f9f123a7a63107ec4d5bacc6460e4aa2c91d2c92852aa123e1f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_a0e76a27ee27c0b39680c7ef5bc062a8c3213ee6133e42055dc30271e67fdae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e76a27ee27c0b39680c7ef5bc062a8c3213ee6133e42055dc30271e67fdae4->enter($__internal_a0e76a27ee27c0b39680c7ef5bc062a8c3213ee6133e42055dc30271e67fdae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc266e7dae3f9f123a7a63107ec4d5bacc6460e4aa2c91d2c92852aa123e1f51->leave($__internal_dc266e7dae3f9f123a7a63107ec4d5bacc6460e4aa2c91d2c92852aa123e1f51_prof);

        
        $__internal_a0e76a27ee27c0b39680c7ef5bc062a8c3213ee6133e42055dc30271e67fdae4->leave($__internal_a0e76a27ee27c0b39680c7ef5bc062a8c3213ee6133e42055dc30271e67fdae4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2b88cf5789c32c2d573776468cadf620540fa91882d0c29aa28eac0c65251ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b88cf5789c32c2d573776468cadf620540fa91882d0c29aa28eac0c65251ce->enter($__internal_f2b88cf5789c32c2d573776468cadf620540fa91882d0c29aa28eac0c65251ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b8f9671476bd6c975e82b8387ddd43ffe17fc0c299268dd53080c052c9a456f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8f9671476bd6c975e82b8387ddd43ffe17fc0c299268dd53080c052c9a456f->enter($__internal_6b8f9671476bd6c975e82b8387ddd43ffe17fc0c299268dd53080c052c9a456f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6b8f9671476bd6c975e82b8387ddd43ffe17fc0c299268dd53080c052c9a456f->leave($__internal_6b8f9671476bd6c975e82b8387ddd43ffe17fc0c299268dd53080c052c9a456f_prof);

        
        $__internal_f2b88cf5789c32c2d573776468cadf620540fa91882d0c29aa28eac0c65251ce->leave($__internal_f2b88cf5789c32c2d573776468cadf620540fa91882d0c29aa28eac0c65251ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
