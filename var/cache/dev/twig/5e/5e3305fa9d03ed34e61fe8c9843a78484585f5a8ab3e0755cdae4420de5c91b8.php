<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a5f9c64f9852860a5200e02bc60eff39256fd10b82e3fac883acaafd1f6c6b54 extends Twig_Template
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
        $__internal_628816d1b39967b18a79834288c21fd27b191cb92afdfc455bff5da838eae2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628816d1b39967b18a79834288c21fd27b191cb92afdfc455bff5da838eae2d6->enter($__internal_628816d1b39967b18a79834288c21fd27b191cb92afdfc455bff5da838eae2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_642693b4699051fb50f3604d2cb1eb754d0b36199b84d704dce5cb38fbd0f466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642693b4699051fb50f3604d2cb1eb754d0b36199b84d704dce5cb38fbd0f466->enter($__internal_642693b4699051fb50f3604d2cb1eb754d0b36199b84d704dce5cb38fbd0f466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628816d1b39967b18a79834288c21fd27b191cb92afdfc455bff5da838eae2d6->leave($__internal_628816d1b39967b18a79834288c21fd27b191cb92afdfc455bff5da838eae2d6_prof);

        
        $__internal_642693b4699051fb50f3604d2cb1eb754d0b36199b84d704dce5cb38fbd0f466->leave($__internal_642693b4699051fb50f3604d2cb1eb754d0b36199b84d704dce5cb38fbd0f466_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4486edf02149eaa52cd35a215ab127eab2817f23e001cffd59199283e8e14ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4486edf02149eaa52cd35a215ab127eab2817f23e001cffd59199283e8e14ab->enter($__internal_f4486edf02149eaa52cd35a215ab127eab2817f23e001cffd59199283e8e14ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5b74d8a3f37a9e57bfb551479f8e2f1b4d2c5e3bc7e7161c245c655b2f396fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b74d8a3f37a9e57bfb551479f8e2f1b4d2c5e3bc7e7161c245c655b2f396fa5->enter($__internal_5b74d8a3f37a9e57bfb551479f8e2f1b4d2c5e3bc7e7161c245c655b2f396fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5b74d8a3f37a9e57bfb551479f8e2f1b4d2c5e3bc7e7161c245c655b2f396fa5->leave($__internal_5b74d8a3f37a9e57bfb551479f8e2f1b4d2c5e3bc7e7161c245c655b2f396fa5_prof);

        
        $__internal_f4486edf02149eaa52cd35a215ab127eab2817f23e001cffd59199283e8e14ab->leave($__internal_f4486edf02149eaa52cd35a215ab127eab2817f23e001cffd59199283e8e14ab_prof);

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
