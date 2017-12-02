<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_304ce1dacd745c05cd184a8dd7508af6e435c85202dae61f4f3f23c4903d6f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_482a8a00cd53e3a00defd0fba00a94692578f3fc63e9e230a5c983444c9bef54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482a8a00cd53e3a00defd0fba00a94692578f3fc63e9e230a5c983444c9bef54->enter($__internal_482a8a00cd53e3a00defd0fba00a94692578f3fc63e9e230a5c983444c9bef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_8b47b79736eeda545edb69960cfbe58af4c302a2c69d5e0b3ac31539369107c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b47b79736eeda545edb69960cfbe58af4c302a2c69d5e0b3ac31539369107c3->enter($__internal_8b47b79736eeda545edb69960cfbe58af4c302a2c69d5e0b3ac31539369107c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482a8a00cd53e3a00defd0fba00a94692578f3fc63e9e230a5c983444c9bef54->leave($__internal_482a8a00cd53e3a00defd0fba00a94692578f3fc63e9e230a5c983444c9bef54_prof);

        
        $__internal_8b47b79736eeda545edb69960cfbe58af4c302a2c69d5e0b3ac31539369107c3->leave($__internal_8b47b79736eeda545edb69960cfbe58af4c302a2c69d5e0b3ac31539369107c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2571f183abed3ef1a486c64cf1db775aad45f3da61b95baf1950fedbe9800ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2571f183abed3ef1a486c64cf1db775aad45f3da61b95baf1950fedbe9800ada->enter($__internal_2571f183abed3ef1a486c64cf1db775aad45f3da61b95baf1950fedbe9800ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1679d97098f2fc3b0918cb50b5dd69951f0746b68d19e45913f2212fffbbe99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1679d97098f2fc3b0918cb50b5dd69951f0746b68d19e45913f2212fffbbe99c->enter($__internal_1679d97098f2fc3b0918cb50b5dd69951f0746b68d19e45913f2212fffbbe99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1679d97098f2fc3b0918cb50b5dd69951f0746b68d19e45913f2212fffbbe99c->leave($__internal_1679d97098f2fc3b0918cb50b5dd69951f0746b68d19e45913f2212fffbbe99c_prof);

        
        $__internal_2571f183abed3ef1a486c64cf1db775aad45f3da61b95baf1950fedbe9800ada->leave($__internal_2571f183abed3ef1a486c64cf1db775aad45f3da61b95baf1950fedbe9800ada_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
