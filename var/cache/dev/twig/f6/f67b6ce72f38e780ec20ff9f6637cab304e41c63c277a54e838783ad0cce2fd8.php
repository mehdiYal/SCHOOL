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
        $__internal_6af379939069848e19294240bc63a91bb1ed2d9db70ea71119c69c2b9ad9754c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af379939069848e19294240bc63a91bb1ed2d9db70ea71119c69c2b9ad9754c->enter($__internal_6af379939069848e19294240bc63a91bb1ed2d9db70ea71119c69c2b9ad9754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1dd68e7c39d22e91418c375f5dc908ed3fdcd59bc85fc0fbe9503b6b87363bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd68e7c39d22e91418c375f5dc908ed3fdcd59bc85fc0fbe9503b6b87363bf3->enter($__internal_1dd68e7c39d22e91418c375f5dc908ed3fdcd59bc85fc0fbe9503b6b87363bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6af379939069848e19294240bc63a91bb1ed2d9db70ea71119c69c2b9ad9754c->leave($__internal_6af379939069848e19294240bc63a91bb1ed2d9db70ea71119c69c2b9ad9754c_prof);

        
        $__internal_1dd68e7c39d22e91418c375f5dc908ed3fdcd59bc85fc0fbe9503b6b87363bf3->leave($__internal_1dd68e7c39d22e91418c375f5dc908ed3fdcd59bc85fc0fbe9503b6b87363bf3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ea1a125f3f3d843b9a5893d76db95b2c70e3a33266b990ced25b4a41815c99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea1a125f3f3d843b9a5893d76db95b2c70e3a33266b990ced25b4a41815c99e->enter($__internal_0ea1a125f3f3d843b9a5893d76db95b2c70e3a33266b990ced25b4a41815c99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc599bfa32178221edd5e20937a8f30203dd37144dcffbeb4aa2bf17a2b868ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc599bfa32178221edd5e20937a8f30203dd37144dcffbeb4aa2bf17a2b868ab->enter($__internal_bc599bfa32178221edd5e20937a8f30203dd37144dcffbeb4aa2bf17a2b868ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bc599bfa32178221edd5e20937a8f30203dd37144dcffbeb4aa2bf17a2b868ab->leave($__internal_bc599bfa32178221edd5e20937a8f30203dd37144dcffbeb4aa2bf17a2b868ab_prof);

        
        $__internal_0ea1a125f3f3d843b9a5893d76db95b2c70e3a33266b990ced25b4a41815c99e->leave($__internal_0ea1a125f3f3d843b9a5893d76db95b2c70e3a33266b990ced25b4a41815c99e_prof);

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
