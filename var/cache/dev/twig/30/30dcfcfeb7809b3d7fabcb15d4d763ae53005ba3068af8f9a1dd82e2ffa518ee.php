<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_356956d143e733f463e776eceb20aeb9881293d3a98a7f9845462e4217ca7c4e extends Twig_Template
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
        $__internal_fe86194a78ae29ed487c16132669faaac2affe2e86319cd7963c4168f89c6e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe86194a78ae29ed487c16132669faaac2affe2e86319cd7963c4168f89c6e5d->enter($__internal_fe86194a78ae29ed487c16132669faaac2affe2e86319cd7963c4168f89c6e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_632fcfedab30b39cede66c5420e519d580702ecb717c3e12b3fae4143b29ca27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632fcfedab30b39cede66c5420e519d580702ecb717c3e12b3fae4143b29ca27->enter($__internal_632fcfedab30b39cede66c5420e519d580702ecb717c3e12b3fae4143b29ca27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe86194a78ae29ed487c16132669faaac2affe2e86319cd7963c4168f89c6e5d->leave($__internal_fe86194a78ae29ed487c16132669faaac2affe2e86319cd7963c4168f89c6e5d_prof);

        
        $__internal_632fcfedab30b39cede66c5420e519d580702ecb717c3e12b3fae4143b29ca27->leave($__internal_632fcfedab30b39cede66c5420e519d580702ecb717c3e12b3fae4143b29ca27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ab66da4928feefd6d0cf5d72ffe2fb6ed6ed84a4afa3640301f5a52f49d0bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab66da4928feefd6d0cf5d72ffe2fb6ed6ed84a4afa3640301f5a52f49d0bfe->enter($__internal_6ab66da4928feefd6d0cf5d72ffe2fb6ed6ed84a4afa3640301f5a52f49d0bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f73053195bb101a0179944fe188f078fc9a1ed003d3e506650d6c1d23efe446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f73053195bb101a0179944fe188f078fc9a1ed003d3e506650d6c1d23efe446->enter($__internal_7f73053195bb101a0179944fe188f078fc9a1ed003d3e506650d6c1d23efe446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7f73053195bb101a0179944fe188f078fc9a1ed003d3e506650d6c1d23efe446->leave($__internal_7f73053195bb101a0179944fe188f078fc9a1ed003d3e506650d6c1d23efe446_prof);

        
        $__internal_6ab66da4928feefd6d0cf5d72ffe2fb6ed6ed84a4afa3640301f5a52f49d0bfe->leave($__internal_6ab66da4928feefd6d0cf5d72ffe2fb6ed6ed84a4afa3640301f5a52f49d0bfe_prof);

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
