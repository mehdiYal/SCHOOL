<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d537e19f6c1d9b39aee1315d85a04e07b48d796b7cde79a70faee934d34d62f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0cdc6a272bbb052015463fb35cf5d4f5aa715dc5c0ef91291a59e1854342f007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdc6a272bbb052015463fb35cf5d4f5aa715dc5c0ef91291a59e1854342f007->enter($__internal_0cdc6a272bbb052015463fb35cf5d4f5aa715dc5c0ef91291a59e1854342f007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_464da7f5291ef47955bc3b582802d469e2d9ee5f8ea922834af5a365acec8951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464da7f5291ef47955bc3b582802d469e2d9ee5f8ea922834af5a365acec8951->enter($__internal_464da7f5291ef47955bc3b582802d469e2d9ee5f8ea922834af5a365acec8951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cdc6a272bbb052015463fb35cf5d4f5aa715dc5c0ef91291a59e1854342f007->leave($__internal_0cdc6a272bbb052015463fb35cf5d4f5aa715dc5c0ef91291a59e1854342f007_prof);

        
        $__internal_464da7f5291ef47955bc3b582802d469e2d9ee5f8ea922834af5a365acec8951->leave($__internal_464da7f5291ef47955bc3b582802d469e2d9ee5f8ea922834af5a365acec8951_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db4214e516a59c8a3cb76a1252e4f67802b9eac4957713aa76f75fd80c8c0e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4214e516a59c8a3cb76a1252e4f67802b9eac4957713aa76f75fd80c8c0e7f->enter($__internal_db4214e516a59c8a3cb76a1252e4f67802b9eac4957713aa76f75fd80c8c0e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_553f6fc9a7efff29ef36159606b485fa8c59a42b10b602f138ac53417c26c7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553f6fc9a7efff29ef36159606b485fa8c59a42b10b602f138ac53417c26c7b6->enter($__internal_553f6fc9a7efff29ef36159606b485fa8c59a42b10b602f138ac53417c26c7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_553f6fc9a7efff29ef36159606b485fa8c59a42b10b602f138ac53417c26c7b6->leave($__internal_553f6fc9a7efff29ef36159606b485fa8c59a42b10b602f138ac53417c26c7b6_prof);

        
        $__internal_db4214e516a59c8a3cb76a1252e4f67802b9eac4957713aa76f75fd80c8c0e7f->leave($__internal_db4214e516a59c8a3cb76a1252e4f67802b9eac4957713aa76f75fd80c8c0e7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
