<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_66e64451c31cf2d7ec0ccb27a558f65782f039add1a6da24ec676e43d0f36261 extends Twig_Template
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
        $__internal_855ffb275a402f19ad95a33bf405ec543701eff66d6c62655b2e7139ae642f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855ffb275a402f19ad95a33bf405ec543701eff66d6c62655b2e7139ae642f5a->enter($__internal_855ffb275a402f19ad95a33bf405ec543701eff66d6c62655b2e7139ae642f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_8129050600c4a82fdfed8e0719847e6e5b13bec4f07b299492230c91209af29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8129050600c4a82fdfed8e0719847e6e5b13bec4f07b299492230c91209af29c->enter($__internal_8129050600c4a82fdfed8e0719847e6e5b13bec4f07b299492230c91209af29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_855ffb275a402f19ad95a33bf405ec543701eff66d6c62655b2e7139ae642f5a->leave($__internal_855ffb275a402f19ad95a33bf405ec543701eff66d6c62655b2e7139ae642f5a_prof);

        
        $__internal_8129050600c4a82fdfed8e0719847e6e5b13bec4f07b299492230c91209af29c->leave($__internal_8129050600c4a82fdfed8e0719847e6e5b13bec4f07b299492230c91209af29c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b676e147ccde9f53344ec8605ea97d8ba753d407215a97d6a90449fb506fc38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b676e147ccde9f53344ec8605ea97d8ba753d407215a97d6a90449fb506fc38a->enter($__internal_b676e147ccde9f53344ec8605ea97d8ba753d407215a97d6a90449fb506fc38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3e0de6a1dd6fe18004a98e30fe58b3c3d8f96d1a58ce66d00dee6064c4a4b946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0de6a1dd6fe18004a98e30fe58b3c3d8f96d1a58ce66d00dee6064c4a4b946->enter($__internal_3e0de6a1dd6fe18004a98e30fe58b3c3d8f96d1a58ce66d00dee6064c4a4b946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3e0de6a1dd6fe18004a98e30fe58b3c3d8f96d1a58ce66d00dee6064c4a4b946->leave($__internal_3e0de6a1dd6fe18004a98e30fe58b3c3d8f96d1a58ce66d00dee6064c4a4b946_prof);

        
        $__internal_b676e147ccde9f53344ec8605ea97d8ba753d407215a97d6a90449fb506fc38a->leave($__internal_b676e147ccde9f53344ec8605ea97d8ba753d407215a97d6a90449fb506fc38a_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
