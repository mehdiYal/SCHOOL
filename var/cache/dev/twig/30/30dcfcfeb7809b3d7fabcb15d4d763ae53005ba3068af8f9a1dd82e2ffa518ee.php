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
        $__internal_fa60466bd16750b32c0736d6e90ee3d8a093861c7362b58a1b3deea5212a1c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa60466bd16750b32c0736d6e90ee3d8a093861c7362b58a1b3deea5212a1c54->enter($__internal_fa60466bd16750b32c0736d6e90ee3d8a093861c7362b58a1b3deea5212a1c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_0030adb30e9de3bd17675dbfdeea07c32851dede8e2505a3aada028bb9ea356d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0030adb30e9de3bd17675dbfdeea07c32851dede8e2505a3aada028bb9ea356d->enter($__internal_0030adb30e9de3bd17675dbfdeea07c32851dede8e2505a3aada028bb9ea356d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa60466bd16750b32c0736d6e90ee3d8a093861c7362b58a1b3deea5212a1c54->leave($__internal_fa60466bd16750b32c0736d6e90ee3d8a093861c7362b58a1b3deea5212a1c54_prof);

        
        $__internal_0030adb30e9de3bd17675dbfdeea07c32851dede8e2505a3aada028bb9ea356d->leave($__internal_0030adb30e9de3bd17675dbfdeea07c32851dede8e2505a3aada028bb9ea356d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdd5567f752690aa1d086b12995f82edbd4c8fc2cfd81e1f347ce91e1033718a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd5567f752690aa1d086b12995f82edbd4c8fc2cfd81e1f347ce91e1033718a->enter($__internal_fdd5567f752690aa1d086b12995f82edbd4c8fc2cfd81e1f347ce91e1033718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_391acbcf83f7a048d73bb1595f1b2d06e362d446dafcc4048a4d987027e72329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391acbcf83f7a048d73bb1595f1b2d06e362d446dafcc4048a4d987027e72329->enter($__internal_391acbcf83f7a048d73bb1595f1b2d06e362d446dafcc4048a4d987027e72329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_391acbcf83f7a048d73bb1595f1b2d06e362d446dafcc4048a4d987027e72329->leave($__internal_391acbcf83f7a048d73bb1595f1b2d06e362d446dafcc4048a4d987027e72329_prof);

        
        $__internal_fdd5567f752690aa1d086b12995f82edbd4c8fc2cfd81e1f347ce91e1033718a->leave($__internal_fdd5567f752690aa1d086b12995f82edbd4c8fc2cfd81e1f347ce91e1033718a_prof);

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
