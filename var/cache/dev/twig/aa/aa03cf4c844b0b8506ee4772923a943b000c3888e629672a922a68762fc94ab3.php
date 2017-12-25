<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e6006ab0fd67a67091cc229e417464def7d1f6febf4f03dca2ef9db823de18b5 extends Twig_Template
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
        $__internal_ca669aa3d462b05b23218602b0a6303e8c4a4ad3d79f1ecb228e7ef7db8f36e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca669aa3d462b05b23218602b0a6303e8c4a4ad3d79f1ecb228e7ef7db8f36e5->enter($__internal_ca669aa3d462b05b23218602b0a6303e8c4a4ad3d79f1ecb228e7ef7db8f36e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_260afc87c439649f8fddd870143d58bf0c8f4cf1cfe06fe5c48bb45d366051eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260afc87c439649f8fddd870143d58bf0c8f4cf1cfe06fe5c48bb45d366051eb->enter($__internal_260afc87c439649f8fddd870143d58bf0c8f4cf1cfe06fe5c48bb45d366051eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca669aa3d462b05b23218602b0a6303e8c4a4ad3d79f1ecb228e7ef7db8f36e5->leave($__internal_ca669aa3d462b05b23218602b0a6303e8c4a4ad3d79f1ecb228e7ef7db8f36e5_prof);

        
        $__internal_260afc87c439649f8fddd870143d58bf0c8f4cf1cfe06fe5c48bb45d366051eb->leave($__internal_260afc87c439649f8fddd870143d58bf0c8f4cf1cfe06fe5c48bb45d366051eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_989d9175b9c6c9682d1eea24d7508124f7b97de7658f3b2e894b314527951546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989d9175b9c6c9682d1eea24d7508124f7b97de7658f3b2e894b314527951546->enter($__internal_989d9175b9c6c9682d1eea24d7508124f7b97de7658f3b2e894b314527951546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_332500e0dfda2c3773766bde7c4acf245c1703cec904d4facb479270470d3a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332500e0dfda2c3773766bde7c4acf245c1703cec904d4facb479270470d3a2b->enter($__internal_332500e0dfda2c3773766bde7c4acf245c1703cec904d4facb479270470d3a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_332500e0dfda2c3773766bde7c4acf245c1703cec904d4facb479270470d3a2b->leave($__internal_332500e0dfda2c3773766bde7c4acf245c1703cec904d4facb479270470d3a2b_prof);

        
        $__internal_989d9175b9c6c9682d1eea24d7508124f7b97de7658f3b2e894b314527951546->leave($__internal_989d9175b9c6c9682d1eea24d7508124f7b97de7658f3b2e894b314527951546_prof);

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
