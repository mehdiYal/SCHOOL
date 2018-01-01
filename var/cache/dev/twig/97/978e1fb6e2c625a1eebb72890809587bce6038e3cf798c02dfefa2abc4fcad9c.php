<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_16a0b82e98a46138ce0cba12cd344176c66c2c06988592fd3b51723d1623bdfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0bd866e80918263115d231ab826fc3e317aba8839f7a076b22fafc79abd7c043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd866e80918263115d231ab826fc3e317aba8839f7a076b22fafc79abd7c043->enter($__internal_0bd866e80918263115d231ab826fc3e317aba8839f7a076b22fafc79abd7c043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_0411dbc14e0a59a8f3a60bc1456539b21033ef0e700b32f32cd40e8185f338f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0411dbc14e0a59a8f3a60bc1456539b21033ef0e700b32f32cd40e8185f338f0->enter($__internal_0411dbc14e0a59a8f3a60bc1456539b21033ef0e700b32f32cd40e8185f338f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bd866e80918263115d231ab826fc3e317aba8839f7a076b22fafc79abd7c043->leave($__internal_0bd866e80918263115d231ab826fc3e317aba8839f7a076b22fafc79abd7c043_prof);

        
        $__internal_0411dbc14e0a59a8f3a60bc1456539b21033ef0e700b32f32cd40e8185f338f0->leave($__internal_0411dbc14e0a59a8f3a60bc1456539b21033ef0e700b32f32cd40e8185f338f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3712ca8e45099c26108e4203688864ff9ba663fc63fde3d40da0943e699b7d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3712ca8e45099c26108e4203688864ff9ba663fc63fde3d40da0943e699b7d36->enter($__internal_3712ca8e45099c26108e4203688864ff9ba663fc63fde3d40da0943e699b7d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_da5f7e69dc2a2bdf35997b4e423b956d7f9c97fe100f0cc604ae772ff3d8c757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5f7e69dc2a2bdf35997b4e423b956d7f9c97fe100f0cc604ae772ff3d8c757->enter($__internal_da5f7e69dc2a2bdf35997b4e423b956d7f9c97fe100f0cc604ae772ff3d8c757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_da5f7e69dc2a2bdf35997b4e423b956d7f9c97fe100f0cc604ae772ff3d8c757->leave($__internal_da5f7e69dc2a2bdf35997b4e423b956d7f9c97fe100f0cc604ae772ff3d8c757_prof);

        
        $__internal_3712ca8e45099c26108e4203688864ff9ba663fc63fde3d40da0943e699b7d36->leave($__internal_3712ca8e45099c26108e4203688864ff9ba663fc63fde3d40da0943e699b7d36_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
