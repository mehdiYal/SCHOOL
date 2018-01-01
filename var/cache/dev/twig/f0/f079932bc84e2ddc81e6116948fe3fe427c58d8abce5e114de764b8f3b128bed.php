<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2a7ec2fee1860fbd4ce682a6f70ff6e316712bf9f77104c63d52747a7d58748b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f3659076ccf8276bc8e1407e5340a79db49a63bc5a0c0239be023113842e51d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3659076ccf8276bc8e1407e5340a79db49a63bc5a0c0239be023113842e51d6->enter($__internal_f3659076ccf8276bc8e1407e5340a79db49a63bc5a0c0239be023113842e51d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_964ae5569ffda2215120088c33448434f5c673a82e4ea67085821ae4d18ddde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964ae5569ffda2215120088c33448434f5c673a82e4ea67085821ae4d18ddde9->enter($__internal_964ae5569ffda2215120088c33448434f5c673a82e4ea67085821ae4d18ddde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3659076ccf8276bc8e1407e5340a79db49a63bc5a0c0239be023113842e51d6->leave($__internal_f3659076ccf8276bc8e1407e5340a79db49a63bc5a0c0239be023113842e51d6_prof);

        
        $__internal_964ae5569ffda2215120088c33448434f5c673a82e4ea67085821ae4d18ddde9->leave($__internal_964ae5569ffda2215120088c33448434f5c673a82e4ea67085821ae4d18ddde9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_973bace3cc24606b92dfa29d96cff932fa168c373673fd45938c3cf04e5f1418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973bace3cc24606b92dfa29d96cff932fa168c373673fd45938c3cf04e5f1418->enter($__internal_973bace3cc24606b92dfa29d96cff932fa168c373673fd45938c3cf04e5f1418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5113ff7724964d6c84469666ebb0fd54c167f49e40b3fbba6bbb3fc1d43c13b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5113ff7724964d6c84469666ebb0fd54c167f49e40b3fbba6bbb3fc1d43c13b5->enter($__internal_5113ff7724964d6c84469666ebb0fd54c167f49e40b3fbba6bbb3fc1d43c13b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5113ff7724964d6c84469666ebb0fd54c167f49e40b3fbba6bbb3fc1d43c13b5->leave($__internal_5113ff7724964d6c84469666ebb0fd54c167f49e40b3fbba6bbb3fc1d43c13b5_prof);

        
        $__internal_973bace3cc24606b92dfa29d96cff932fa168c373673fd45938c3cf04e5f1418->leave($__internal_973bace3cc24606b92dfa29d96cff932fa168c373673fd45938c3cf04e5f1418_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
