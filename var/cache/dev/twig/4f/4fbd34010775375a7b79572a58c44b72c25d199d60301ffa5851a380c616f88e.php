<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_363efce88b1186c0b8e8c2d15c000cce837e04d640e63669f87178ae11a85f4a extends Twig_Template
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
        $__internal_069077ea11e67d6f7d29950369614498e788a7d2c2b4020c5ee7eb58e0419768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069077ea11e67d6f7d29950369614498e788a7d2c2b4020c5ee7eb58e0419768->enter($__internal_069077ea11e67d6f7d29950369614498e788a7d2c2b4020c5ee7eb58e0419768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_e01cb4716466f46c9e62acec4c645f42a4582191ba2749337458a8b376a606b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01cb4716466f46c9e62acec4c645f42a4582191ba2749337458a8b376a606b6->enter($__internal_e01cb4716466f46c9e62acec4c645f42a4582191ba2749337458a8b376a606b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_069077ea11e67d6f7d29950369614498e788a7d2c2b4020c5ee7eb58e0419768->leave($__internal_069077ea11e67d6f7d29950369614498e788a7d2c2b4020c5ee7eb58e0419768_prof);

        
        $__internal_e01cb4716466f46c9e62acec4c645f42a4582191ba2749337458a8b376a606b6->leave($__internal_e01cb4716466f46c9e62acec4c645f42a4582191ba2749337458a8b376a606b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fba311e799e8d7455bd8983a84dc4c1ee114936dca5a7ccf7a5202e00211d285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba311e799e8d7455bd8983a84dc4c1ee114936dca5a7ccf7a5202e00211d285->enter($__internal_fba311e799e8d7455bd8983a84dc4c1ee114936dca5a7ccf7a5202e00211d285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f601793522984a351934dfd987d543c003176d31d4a1c77955580d92f060be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f601793522984a351934dfd987d543c003176d31d4a1c77955580d92f060be2->enter($__internal_6f601793522984a351934dfd987d543c003176d31d4a1c77955580d92f060be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6f601793522984a351934dfd987d543c003176d31d4a1c77955580d92f060be2->leave($__internal_6f601793522984a351934dfd987d543c003176d31d4a1c77955580d92f060be2_prof);

        
        $__internal_fba311e799e8d7455bd8983a84dc4c1ee114936dca5a7ccf7a5202e00211d285->leave($__internal_fba311e799e8d7455bd8983a84dc4c1ee114936dca5a7ccf7a5202e00211d285_prof);

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
