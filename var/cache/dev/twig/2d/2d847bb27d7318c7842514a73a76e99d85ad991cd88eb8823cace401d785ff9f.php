<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_917feb25a95bd694c1b1ddad8588c29d22392220df3254b591d77da269cc3cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_21c5d0bd88d15223b5bd583921cabcf49fd049a210b19b91f3532bad2de61fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c5d0bd88d15223b5bd583921cabcf49fd049a210b19b91f3532bad2de61fef->enter($__internal_21c5d0bd88d15223b5bd583921cabcf49fd049a210b19b91f3532bad2de61fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_010a60d9990e61354ea349297b7424614695998d488ea50612ad0c573ac35ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010a60d9990e61354ea349297b7424614695998d488ea50612ad0c573ac35ca2->enter($__internal_010a60d9990e61354ea349297b7424614695998d488ea50612ad0c573ac35ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c5d0bd88d15223b5bd583921cabcf49fd049a210b19b91f3532bad2de61fef->leave($__internal_21c5d0bd88d15223b5bd583921cabcf49fd049a210b19b91f3532bad2de61fef_prof);

        
        $__internal_010a60d9990e61354ea349297b7424614695998d488ea50612ad0c573ac35ca2->leave($__internal_010a60d9990e61354ea349297b7424614695998d488ea50612ad0c573ac35ca2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6131baacc769374ad5b7f725ed73a4e586508235de8feea6f944d6c82fa9f19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6131baacc769374ad5b7f725ed73a4e586508235de8feea6f944d6c82fa9f19b->enter($__internal_6131baacc769374ad5b7f725ed73a4e586508235de8feea6f944d6c82fa9f19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8f3ff5a16e1f18fca2058e5968d6f2abe72b9f48c556a1bb0422d242b1144d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3ff5a16e1f18fca2058e5968d6f2abe72b9f48c556a1bb0422d242b1144d69->enter($__internal_8f3ff5a16e1f18fca2058e5968d6f2abe72b9f48c556a1bb0422d242b1144d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8f3ff5a16e1f18fca2058e5968d6f2abe72b9f48c556a1bb0422d242b1144d69->leave($__internal_8f3ff5a16e1f18fca2058e5968d6f2abe72b9f48c556a1bb0422d242b1144d69_prof);

        
        $__internal_6131baacc769374ad5b7f725ed73a4e586508235de8feea6f944d6c82fa9f19b->leave($__internal_6131baacc769374ad5b7f725ed73a4e586508235de8feea6f944d6c82fa9f19b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
