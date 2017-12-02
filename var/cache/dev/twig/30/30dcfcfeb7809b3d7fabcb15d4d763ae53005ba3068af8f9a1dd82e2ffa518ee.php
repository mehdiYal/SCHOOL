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
        $__internal_9683ccd9f908d626731b4e70a3905c5ab1e7573548490791cfa519455859e62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9683ccd9f908d626731b4e70a3905c5ab1e7573548490791cfa519455859e62b->enter($__internal_9683ccd9f908d626731b4e70a3905c5ab1e7573548490791cfa519455859e62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d867eb4573ecc13f6997832ce4e91bd0bca92283c0d21e0f128f559d068c2665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d867eb4573ecc13f6997832ce4e91bd0bca92283c0d21e0f128f559d068c2665->enter($__internal_d867eb4573ecc13f6997832ce4e91bd0bca92283c0d21e0f128f559d068c2665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9683ccd9f908d626731b4e70a3905c5ab1e7573548490791cfa519455859e62b->leave($__internal_9683ccd9f908d626731b4e70a3905c5ab1e7573548490791cfa519455859e62b_prof);

        
        $__internal_d867eb4573ecc13f6997832ce4e91bd0bca92283c0d21e0f128f559d068c2665->leave($__internal_d867eb4573ecc13f6997832ce4e91bd0bca92283c0d21e0f128f559d068c2665_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8a4ba66a978fc0e830c5e73e992c817259133fb138d916dc91e72f3a9dd9dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a4ba66a978fc0e830c5e73e992c817259133fb138d916dc91e72f3a9dd9dad->enter($__internal_e8a4ba66a978fc0e830c5e73e992c817259133fb138d916dc91e72f3a9dd9dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6f62d26a658559764bf8cedea87606e1a75878c5b70a9efb104e1e1427d52fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f62d26a658559764bf8cedea87606e1a75878c5b70a9efb104e1e1427d52fe->enter($__internal_b6f62d26a658559764bf8cedea87606e1a75878c5b70a9efb104e1e1427d52fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b6f62d26a658559764bf8cedea87606e1a75878c5b70a9efb104e1e1427d52fe->leave($__internal_b6f62d26a658559764bf8cedea87606e1a75878c5b70a9efb104e1e1427d52fe_prof);

        
        $__internal_e8a4ba66a978fc0e830c5e73e992c817259133fb138d916dc91e72f3a9dd9dad->leave($__internal_e8a4ba66a978fc0e830c5e73e992c817259133fb138d916dc91e72f3a9dd9dad_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
