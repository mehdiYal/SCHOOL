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
        $__internal_c96f9288a42acb980ce4dfd48949a8a5d6be5151994385537bacda11c5da8ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96f9288a42acb980ce4dfd48949a8a5d6be5151994385537bacda11c5da8ec3->enter($__internal_c96f9288a42acb980ce4dfd48949a8a5d6be5151994385537bacda11c5da8ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_bab8f1fb972acec88c333700749de906781ea97cbba276798708338f8df6fe2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab8f1fb972acec88c333700749de906781ea97cbba276798708338f8df6fe2b->enter($__internal_bab8f1fb972acec88c333700749de906781ea97cbba276798708338f8df6fe2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96f9288a42acb980ce4dfd48949a8a5d6be5151994385537bacda11c5da8ec3->leave($__internal_c96f9288a42acb980ce4dfd48949a8a5d6be5151994385537bacda11c5da8ec3_prof);

        
        $__internal_bab8f1fb972acec88c333700749de906781ea97cbba276798708338f8df6fe2b->leave($__internal_bab8f1fb972acec88c333700749de906781ea97cbba276798708338f8df6fe2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_562c2aa49c4c122d23114a803ac98eb85dce78a423ca78845fba70e2621aea52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562c2aa49c4c122d23114a803ac98eb85dce78a423ca78845fba70e2621aea52->enter($__internal_562c2aa49c4c122d23114a803ac98eb85dce78a423ca78845fba70e2621aea52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_14aba4f0a256a3dea8506a3c5ce7fa775f67829dc9ae12dcc6aabd14250000be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14aba4f0a256a3dea8506a3c5ce7fa775f67829dc9ae12dcc6aabd14250000be->enter($__internal_14aba4f0a256a3dea8506a3c5ce7fa775f67829dc9ae12dcc6aabd14250000be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_14aba4f0a256a3dea8506a3c5ce7fa775f67829dc9ae12dcc6aabd14250000be->leave($__internal_14aba4f0a256a3dea8506a3c5ce7fa775f67829dc9ae12dcc6aabd14250000be_prof);

        
        $__internal_562c2aa49c4c122d23114a803ac98eb85dce78a423ca78845fba70e2621aea52->leave($__internal_562c2aa49c4c122d23114a803ac98eb85dce78a423ca78845fba70e2621aea52_prof);

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
