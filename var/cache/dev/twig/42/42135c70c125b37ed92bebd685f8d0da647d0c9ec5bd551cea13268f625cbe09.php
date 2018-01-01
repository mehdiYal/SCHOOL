<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_1f3d2acc6fd82b72bdb11f9032cb3fd25fd4a3f2171b366abebe96e5fd6abf2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_25cd18741be17c5a6c3fdca2d60cfc0181c2ba08f0e648dfa943a395245c683a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25cd18741be17c5a6c3fdca2d60cfc0181c2ba08f0e648dfa943a395245c683a->enter($__internal_25cd18741be17c5a6c3fdca2d60cfc0181c2ba08f0e648dfa943a395245c683a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_55c8b6afbf635e629285d37ca7a882fda223167e1fd8df61ef8560797904d3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c8b6afbf635e629285d37ca7a882fda223167e1fd8df61ef8560797904d3d5->enter($__internal_55c8b6afbf635e629285d37ca7a882fda223167e1fd8df61ef8560797904d3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25cd18741be17c5a6c3fdca2d60cfc0181c2ba08f0e648dfa943a395245c683a->leave($__internal_25cd18741be17c5a6c3fdca2d60cfc0181c2ba08f0e648dfa943a395245c683a_prof);

        
        $__internal_55c8b6afbf635e629285d37ca7a882fda223167e1fd8df61ef8560797904d3d5->leave($__internal_55c8b6afbf635e629285d37ca7a882fda223167e1fd8df61ef8560797904d3d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_965ec14d7c76bc341ac0fea7a1db84835c5b9cffc28eca1e46c6ac4e463767c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965ec14d7c76bc341ac0fea7a1db84835c5b9cffc28eca1e46c6ac4e463767c7->enter($__internal_965ec14d7c76bc341ac0fea7a1db84835c5b9cffc28eca1e46c6ac4e463767c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9a1ae38fd9def1a3d0fcba9e7c36fcd0391ee81489f66a9d8d9d0d2f5f7f401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a1ae38fd9def1a3d0fcba9e7c36fcd0391ee81489f66a9d8d9d0d2f5f7f401->enter($__internal_b9a1ae38fd9def1a3d0fcba9e7c36fcd0391ee81489f66a9d8d9d0d2f5f7f401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_b9a1ae38fd9def1a3d0fcba9e7c36fcd0391ee81489f66a9d8d9d0d2f5f7f401->leave($__internal_b9a1ae38fd9def1a3d0fcba9e7c36fcd0391ee81489f66a9d8d9d0d2f5f7f401_prof);

        
        $__internal_965ec14d7c76bc341ac0fea7a1db84835c5b9cffc28eca1e46c6ac4e463767c7->leave($__internal_965ec14d7c76bc341ac0fea7a1db84835c5b9cffc28eca1e46c6ac4e463767c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
