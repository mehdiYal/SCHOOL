<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_576c773e18a6a5ac8c77fbb7b5934d7422f8d2ff5ad6c63673555c53aa5d38b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_c5307fa358fc9ec86bea83e45ec78a27169f709a177f82811fbdcad0d22282a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5307fa358fc9ec86bea83e45ec78a27169f709a177f82811fbdcad0d22282a8->enter($__internal_c5307fa358fc9ec86bea83e45ec78a27169f709a177f82811fbdcad0d22282a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_cd2ec8da68e43e294df54541f4f14c5f3d4727300b8a1c7113d0c605d68c632a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2ec8da68e43e294df54541f4f14c5f3d4727300b8a1c7113d0c605d68c632a->enter($__internal_cd2ec8da68e43e294df54541f4f14c5f3d4727300b8a1c7113d0c605d68c632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5307fa358fc9ec86bea83e45ec78a27169f709a177f82811fbdcad0d22282a8->leave($__internal_c5307fa358fc9ec86bea83e45ec78a27169f709a177f82811fbdcad0d22282a8_prof);

        
        $__internal_cd2ec8da68e43e294df54541f4f14c5f3d4727300b8a1c7113d0c605d68c632a->leave($__internal_cd2ec8da68e43e294df54541f4f14c5f3d4727300b8a1c7113d0c605d68c632a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b16646d328be3b9f5169b34f9a232e7ea078cf24144b1a373432c26e966fd4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16646d328be3b9f5169b34f9a232e7ea078cf24144b1a373432c26e966fd4d4->enter($__internal_b16646d328be3b9f5169b34f9a232e7ea078cf24144b1a373432c26e966fd4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4ec136c8168d2a5835628fdd2adb24c7a7496f24f7c6a0b65e46a5ae4d875a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec136c8168d2a5835628fdd2adb24c7a7496f24f7c6a0b65e46a5ae4d875a8a->enter($__internal_4ec136c8168d2a5835628fdd2adb24c7a7496f24f7c6a0b65e46a5ae4d875a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4ec136c8168d2a5835628fdd2adb24c7a7496f24f7c6a0b65e46a5ae4d875a8a->leave($__internal_4ec136c8168d2a5835628fdd2adb24c7a7496f24f7c6a0b65e46a5ae4d875a8a_prof);

        
        $__internal_b16646d328be3b9f5169b34f9a232e7ea078cf24144b1a373432c26e966fd4d4->leave($__internal_b16646d328be3b9f5169b34f9a232e7ea078cf24144b1a373432c26e966fd4d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
