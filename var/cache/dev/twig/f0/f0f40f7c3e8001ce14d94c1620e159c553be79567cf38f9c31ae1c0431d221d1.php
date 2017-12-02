<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a19818406d46269c5d79e23b997b58f1e3e6674efdd71ac35b595fb04ec5131d extends Twig_Template
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
        $__internal_6e17316f836095e756d1e0332586439ed03a95238a8b6b9e10c7291b802fb4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e17316f836095e756d1e0332586439ed03a95238a8b6b9e10c7291b802fb4dc->enter($__internal_6e17316f836095e756d1e0332586439ed03a95238a8b6b9e10c7291b802fb4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_3bfd9e764bbecd50de57fab3aac4e77cdcc342cf2e85e2def6485417c9a6ed90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfd9e764bbecd50de57fab3aac4e77cdcc342cf2e85e2def6485417c9a6ed90->enter($__internal_3bfd9e764bbecd50de57fab3aac4e77cdcc342cf2e85e2def6485417c9a6ed90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e17316f836095e756d1e0332586439ed03a95238a8b6b9e10c7291b802fb4dc->leave($__internal_6e17316f836095e756d1e0332586439ed03a95238a8b6b9e10c7291b802fb4dc_prof);

        
        $__internal_3bfd9e764bbecd50de57fab3aac4e77cdcc342cf2e85e2def6485417c9a6ed90->leave($__internal_3bfd9e764bbecd50de57fab3aac4e77cdcc342cf2e85e2def6485417c9a6ed90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6a32fc049e70ee535b2902e9890e79c5712dcdfc94deaa2cd4c908164f85e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a32fc049e70ee535b2902e9890e79c5712dcdfc94deaa2cd4c908164f85e1f->enter($__internal_a6a32fc049e70ee535b2902e9890e79c5712dcdfc94deaa2cd4c908164f85e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99fae15235af814a815e26d3225ce92afcb55394307a843b6ecc0980e0d3acb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fae15235af814a815e26d3225ce92afcb55394307a843b6ecc0980e0d3acb5->enter($__internal_99fae15235af814a815e26d3225ce92afcb55394307a843b6ecc0980e0d3acb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_99fae15235af814a815e26d3225ce92afcb55394307a843b6ecc0980e0d3acb5->leave($__internal_99fae15235af814a815e26d3225ce92afcb55394307a843b6ecc0980e0d3acb5_prof);

        
        $__internal_a6a32fc049e70ee535b2902e9890e79c5712dcdfc94deaa2cd4c908164f85e1f->leave($__internal_a6a32fc049e70ee535b2902e9890e79c5712dcdfc94deaa2cd4c908164f85e1f_prof);

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
