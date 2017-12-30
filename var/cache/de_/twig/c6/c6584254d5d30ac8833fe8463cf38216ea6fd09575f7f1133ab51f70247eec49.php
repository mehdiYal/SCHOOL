<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b81746e8291dac626b2852daa91d82a14bcd93888dcb32e957bdb3c9bd5ff9a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c32d570100afc959cce79236f85eb7e1a62c25de8663c8e3212f1789c146daff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32d570100afc959cce79236f85eb7e1a62c25de8663c8e3212f1789c146daff->enter($__internal_c32d570100afc959cce79236f85eb7e1a62c25de8663c8e3212f1789c146daff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_aab32924a74f1d7e6242042a561a50f6195cc814c0edb541e8fa326ab82f95d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab32924a74f1d7e6242042a561a50f6195cc814c0edb541e8fa326ab82f95d7->enter($__internal_aab32924a74f1d7e6242042a561a50f6195cc814c0edb541e8fa326ab82f95d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32d570100afc959cce79236f85eb7e1a62c25de8663c8e3212f1789c146daff->leave($__internal_c32d570100afc959cce79236f85eb7e1a62c25de8663c8e3212f1789c146daff_prof);

        
        $__internal_aab32924a74f1d7e6242042a561a50f6195cc814c0edb541e8fa326ab82f95d7->leave($__internal_aab32924a74f1d7e6242042a561a50f6195cc814c0edb541e8fa326ab82f95d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4a286b9db646ea79d7a3155aba670c7c65fa73fafc8d7cac6a89a7b15f3de78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a286b9db646ea79d7a3155aba670c7c65fa73fafc8d7cac6a89a7b15f3de78->enter($__internal_c4a286b9db646ea79d7a3155aba670c7c65fa73fafc8d7cac6a89a7b15f3de78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_02f4ba354721d79bd5041b8d6c4bff6e8a761ca5788ec933c8272f47bf098c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f4ba354721d79bd5041b8d6c4bff6e8a761ca5788ec933c8272f47bf098c68->enter($__internal_02f4ba354721d79bd5041b8d6c4bff6e8a761ca5788ec933c8272f47bf098c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_02f4ba354721d79bd5041b8d6c4bff6e8a761ca5788ec933c8272f47bf098c68->leave($__internal_02f4ba354721d79bd5041b8d6c4bff6e8a761ca5788ec933c8272f47bf098c68_prof);

        
        $__internal_c4a286b9db646ea79d7a3155aba670c7c65fa73fafc8d7cac6a89a7b15f3de78->leave($__internal_c4a286b9db646ea79d7a3155aba670c7c65fa73fafc8d7cac6a89a7b15f3de78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
