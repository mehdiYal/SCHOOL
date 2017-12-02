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
        $__internal_811c9e92baaf63a48b15c4b0985e0e5ee8a3ffa2b2cad477fb4b9145ec9b5d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811c9e92baaf63a48b15c4b0985e0e5ee8a3ffa2b2cad477fb4b9145ec9b5d2a->enter($__internal_811c9e92baaf63a48b15c4b0985e0e5ee8a3ffa2b2cad477fb4b9145ec9b5d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_f5b67422f0b8390ecd94c00ceb10a07ae101ff223a73db7f22d8cebbddf53e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b67422f0b8390ecd94c00ceb10a07ae101ff223a73db7f22d8cebbddf53e63->enter($__internal_f5b67422f0b8390ecd94c00ceb10a07ae101ff223a73db7f22d8cebbddf53e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_811c9e92baaf63a48b15c4b0985e0e5ee8a3ffa2b2cad477fb4b9145ec9b5d2a->leave($__internal_811c9e92baaf63a48b15c4b0985e0e5ee8a3ffa2b2cad477fb4b9145ec9b5d2a_prof);

        
        $__internal_f5b67422f0b8390ecd94c00ceb10a07ae101ff223a73db7f22d8cebbddf53e63->leave($__internal_f5b67422f0b8390ecd94c00ceb10a07ae101ff223a73db7f22d8cebbddf53e63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbe29e448bdadf8fc260dd6296fcff651841861dada15081bdd3fb2ac007ff33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe29e448bdadf8fc260dd6296fcff651841861dada15081bdd3fb2ac007ff33->enter($__internal_fbe29e448bdadf8fc260dd6296fcff651841861dada15081bdd3fb2ac007ff33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ef313a57d0171b9a6613128ac0c41487e0e2609d447cba2e72387cf5e4d19251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef313a57d0171b9a6613128ac0c41487e0e2609d447cba2e72387cf5e4d19251->enter($__internal_ef313a57d0171b9a6613128ac0c41487e0e2609d447cba2e72387cf5e4d19251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ef313a57d0171b9a6613128ac0c41487e0e2609d447cba2e72387cf5e4d19251->leave($__internal_ef313a57d0171b9a6613128ac0c41487e0e2609d447cba2e72387cf5e4d19251_prof);

        
        $__internal_fbe29e448bdadf8fc260dd6296fcff651841861dada15081bdd3fb2ac007ff33->leave($__internal_fbe29e448bdadf8fc260dd6296fcff651841861dada15081bdd3fb2ac007ff33_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
