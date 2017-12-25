<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_304ce1dacd745c05cd184a8dd7508af6e435c85202dae61f4f3f23c4903d6f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5d5b72577cd72142f8d537d44e94918eaf08f6bc804944017ca0fe7d10cc8f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5b72577cd72142f8d537d44e94918eaf08f6bc804944017ca0fe7d10cc8f1a->enter($__internal_5d5b72577cd72142f8d537d44e94918eaf08f6bc804944017ca0fe7d10cc8f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_85013881416db22290af9a68d04cdde6ccee8139d3b5fef276b521624423a984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85013881416db22290af9a68d04cdde6ccee8139d3b5fef276b521624423a984->enter($__internal_85013881416db22290af9a68d04cdde6ccee8139d3b5fef276b521624423a984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5b72577cd72142f8d537d44e94918eaf08f6bc804944017ca0fe7d10cc8f1a->leave($__internal_5d5b72577cd72142f8d537d44e94918eaf08f6bc804944017ca0fe7d10cc8f1a_prof);

        
        $__internal_85013881416db22290af9a68d04cdde6ccee8139d3b5fef276b521624423a984->leave($__internal_85013881416db22290af9a68d04cdde6ccee8139d3b5fef276b521624423a984_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edbd6544b6a5602f0fb3eb7804a028feb88a2883189dec7442c26c31c3da5243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbd6544b6a5602f0fb3eb7804a028feb88a2883189dec7442c26c31c3da5243->enter($__internal_edbd6544b6a5602f0fb3eb7804a028feb88a2883189dec7442c26c31c3da5243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f1a1db1224cb61d669804565bf63ab995284ba016a4a932d5da743a75079eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1a1db1224cb61d669804565bf63ab995284ba016a4a932d5da743a75079eec->enter($__internal_3f1a1db1224cb61d669804565bf63ab995284ba016a4a932d5da743a75079eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3f1a1db1224cb61d669804565bf63ab995284ba016a4a932d5da743a75079eec->leave($__internal_3f1a1db1224cb61d669804565bf63ab995284ba016a4a932d5da743a75079eec_prof);

        
        $__internal_edbd6544b6a5602f0fb3eb7804a028feb88a2883189dec7442c26c31c3da5243->leave($__internal_edbd6544b6a5602f0fb3eb7804a028feb88a2883189dec7442c26c31c3da5243_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
