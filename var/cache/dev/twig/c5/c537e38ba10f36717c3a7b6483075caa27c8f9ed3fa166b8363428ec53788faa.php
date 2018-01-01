<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_90e4d9497feff6d9392362e965ab946b1c34cbaac7b3381edb54d27490b5e6c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_39a9a009b8fb65232f559353748812123379194e2b2368d5a0c2e1c77e9bba97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a9a009b8fb65232f559353748812123379194e2b2368d5a0c2e1c77e9bba97->enter($__internal_39a9a009b8fb65232f559353748812123379194e2b2368d5a0c2e1c77e9bba97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_36cc16986c0f1120133a1b3550f3d0edbb51e840dfd5403e007c889c3607982f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cc16986c0f1120133a1b3550f3d0edbb51e840dfd5403e007c889c3607982f->enter($__internal_36cc16986c0f1120133a1b3550f3d0edbb51e840dfd5403e007c889c3607982f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a9a009b8fb65232f559353748812123379194e2b2368d5a0c2e1c77e9bba97->leave($__internal_39a9a009b8fb65232f559353748812123379194e2b2368d5a0c2e1c77e9bba97_prof);

        
        $__internal_36cc16986c0f1120133a1b3550f3d0edbb51e840dfd5403e007c889c3607982f->leave($__internal_36cc16986c0f1120133a1b3550f3d0edbb51e840dfd5403e007c889c3607982f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e214434858d3be1bd7d3e826f0e7d89afb284d8836359adb569247ac27a35f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e214434858d3be1bd7d3e826f0e7d89afb284d8836359adb569247ac27a35f63->enter($__internal_e214434858d3be1bd7d3e826f0e7d89afb284d8836359adb569247ac27a35f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_205b4644f29b529c326f1dbff61ca9239822623d4058a42dcb961ab0758d1fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205b4644f29b529c326f1dbff61ca9239822623d4058a42dcb961ab0758d1fe3->enter($__internal_205b4644f29b529c326f1dbff61ca9239822623d4058a42dcb961ab0758d1fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_205b4644f29b529c326f1dbff61ca9239822623d4058a42dcb961ab0758d1fe3->leave($__internal_205b4644f29b529c326f1dbff61ca9239822623d4058a42dcb961ab0758d1fe3_prof);

        
        $__internal_e214434858d3be1bd7d3e826f0e7d89afb284d8836359adb569247ac27a35f63->leave($__internal_e214434858d3be1bd7d3e826f0e7d89afb284d8836359adb569247ac27a35f63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
