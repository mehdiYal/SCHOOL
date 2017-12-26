<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_01150052c9d905258c77f33943a59859b592eddba9cb93b710fc99c49dd79fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_ac086afdb4f40c56a6f8ad8a1c7f0984442389c96a4c1941f5c8eb3db30a1fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac086afdb4f40c56a6f8ad8a1c7f0984442389c96a4c1941f5c8eb3db30a1fba->enter($__internal_ac086afdb4f40c56a6f8ad8a1c7f0984442389c96a4c1941f5c8eb3db30a1fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_d8d03f77d0c66712e2ac485088193eb8d889f8c2008250e01b3de785372ab23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d03f77d0c66712e2ac485088193eb8d889f8c2008250e01b3de785372ab23a->enter($__internal_d8d03f77d0c66712e2ac485088193eb8d889f8c2008250e01b3de785372ab23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac086afdb4f40c56a6f8ad8a1c7f0984442389c96a4c1941f5c8eb3db30a1fba->leave($__internal_ac086afdb4f40c56a6f8ad8a1c7f0984442389c96a4c1941f5c8eb3db30a1fba_prof);

        
        $__internal_d8d03f77d0c66712e2ac485088193eb8d889f8c2008250e01b3de785372ab23a->leave($__internal_d8d03f77d0c66712e2ac485088193eb8d889f8c2008250e01b3de785372ab23a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8015f102486f00b0c7add99e87ce02a20b999571f91b5c7c035fce8be8c38d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8015f102486f00b0c7add99e87ce02a20b999571f91b5c7c035fce8be8c38d9f->enter($__internal_8015f102486f00b0c7add99e87ce02a20b999571f91b5c7c035fce8be8c38d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e1cf9b9ed33cfa7ac2c22af868e2dcd1c907b3a444d4817122db155e7819624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1cf9b9ed33cfa7ac2c22af868e2dcd1c907b3a444d4817122db155e7819624->enter($__internal_6e1cf9b9ed33cfa7ac2c22af868e2dcd1c907b3a444d4817122db155e7819624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6e1cf9b9ed33cfa7ac2c22af868e2dcd1c907b3a444d4817122db155e7819624->leave($__internal_6e1cf9b9ed33cfa7ac2c22af868e2dcd1c907b3a444d4817122db155e7819624_prof);

        
        $__internal_8015f102486f00b0c7add99e87ce02a20b999571f91b5c7c035fce8be8c38d9f->leave($__internal_8015f102486f00b0c7add99e87ce02a20b999571f91b5c7c035fce8be8c38d9f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
