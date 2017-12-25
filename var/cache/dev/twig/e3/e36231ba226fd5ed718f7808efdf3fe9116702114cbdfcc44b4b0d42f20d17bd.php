<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e8a4d2f5ffc0824be4849e2a7308600ec1b8244575199887552a4b43278d9727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b8e8914e1e9abc32d7ff218ce5f1bcc28aca105a2807e92749b8227643c53e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e8914e1e9abc32d7ff218ce5f1bcc28aca105a2807e92749b8227643c53e1e->enter($__internal_b8e8914e1e9abc32d7ff218ce5f1bcc28aca105a2807e92749b8227643c53e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_0ef1c1d0b739a98b850238279d24b6c35b096158288872c0d317d27256a9f714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef1c1d0b739a98b850238279d24b6c35b096158288872c0d317d27256a9f714->enter($__internal_0ef1c1d0b739a98b850238279d24b6c35b096158288872c0d317d27256a9f714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8e8914e1e9abc32d7ff218ce5f1bcc28aca105a2807e92749b8227643c53e1e->leave($__internal_b8e8914e1e9abc32d7ff218ce5f1bcc28aca105a2807e92749b8227643c53e1e_prof);

        
        $__internal_0ef1c1d0b739a98b850238279d24b6c35b096158288872c0d317d27256a9f714->leave($__internal_0ef1c1d0b739a98b850238279d24b6c35b096158288872c0d317d27256a9f714_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddbb231c276d1584868d27906a3902bb023f8dffa0bc1d3f6d05bf8d9ac6a544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddbb231c276d1584868d27906a3902bb023f8dffa0bc1d3f6d05bf8d9ac6a544->enter($__internal_ddbb231c276d1584868d27906a3902bb023f8dffa0bc1d3f6d05bf8d9ac6a544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_40096b578ea9e737d5ec1d9e77060894b6ab69d72c80d10d70f06e342d09b587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40096b578ea9e737d5ec1d9e77060894b6ab69d72c80d10d70f06e342d09b587->enter($__internal_40096b578ea9e737d5ec1d9e77060894b6ab69d72c80d10d70f06e342d09b587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_40096b578ea9e737d5ec1d9e77060894b6ab69d72c80d10d70f06e342d09b587->leave($__internal_40096b578ea9e737d5ec1d9e77060894b6ab69d72c80d10d70f06e342d09b587_prof);

        
        $__internal_ddbb231c276d1584868d27906a3902bb023f8dffa0bc1d3f6d05bf8d9ac6a544->leave($__internal_ddbb231c276d1584868d27906a3902bb023f8dffa0bc1d3f6d05bf8d9ac6a544_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
