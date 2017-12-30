<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_03ea090837053c8cb345201f04fc98452e75110de2540b0482776f0b408fcc4f extends Twig_Template
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
        $__internal_d329587a9059fb4fb4e70a5b6cce2d5f7818f180db77d0653e1e8a4f1973c6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d329587a9059fb4fb4e70a5b6cce2d5f7818f180db77d0653e1e8a4f1973c6c6->enter($__internal_d329587a9059fb4fb4e70a5b6cce2d5f7818f180db77d0653e1e8a4f1973c6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a966705b86469b006a403be2446570305ded1a26957100d6eda2c6d00b6b39c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a966705b86469b006a403be2446570305ded1a26957100d6eda2c6d00b6b39c4->enter($__internal_a966705b86469b006a403be2446570305ded1a26957100d6eda2c6d00b6b39c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d329587a9059fb4fb4e70a5b6cce2d5f7818f180db77d0653e1e8a4f1973c6c6->leave($__internal_d329587a9059fb4fb4e70a5b6cce2d5f7818f180db77d0653e1e8a4f1973c6c6_prof);

        
        $__internal_a966705b86469b006a403be2446570305ded1a26957100d6eda2c6d00b6b39c4->leave($__internal_a966705b86469b006a403be2446570305ded1a26957100d6eda2c6d00b6b39c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5977d037540976a75924993df2e15d26c64e25c758f9032239580c27577604a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5977d037540976a75924993df2e15d26c64e25c758f9032239580c27577604a4->enter($__internal_5977d037540976a75924993df2e15d26c64e25c758f9032239580c27577604a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f2b642e95e2fb9e59cd5371a305436cf6f41b15034c92335e38c414d46a1993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2b642e95e2fb9e59cd5371a305436cf6f41b15034c92335e38c414d46a1993->enter($__internal_1f2b642e95e2fb9e59cd5371a305436cf6f41b15034c92335e38c414d46a1993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1f2b642e95e2fb9e59cd5371a305436cf6f41b15034c92335e38c414d46a1993->leave($__internal_1f2b642e95e2fb9e59cd5371a305436cf6f41b15034c92335e38c414d46a1993_prof);

        
        $__internal_5977d037540976a75924993df2e15d26c64e25c758f9032239580c27577604a4->leave($__internal_5977d037540976a75924993df2e15d26c64e25c758f9032239580c27577604a4_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
