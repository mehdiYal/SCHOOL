<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_35d4db2935275eee8d7f30cae7575d87fcfbda5df013f5b2972a01e898b883ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_9e23403bd61c81d6434b1f5127e867038dbf1981224ec60ad169cea456c0a43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e23403bd61c81d6434b1f5127e867038dbf1981224ec60ad169cea456c0a43c->enter($__internal_9e23403bd61c81d6434b1f5127e867038dbf1981224ec60ad169cea456c0a43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e76b070d34272859f049da6f9e1edd2670cb09a77367488f3dfc24439c18a716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76b070d34272859f049da6f9e1edd2670cb09a77367488f3dfc24439c18a716->enter($__internal_e76b070d34272859f049da6f9e1edd2670cb09a77367488f3dfc24439c18a716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e23403bd61c81d6434b1f5127e867038dbf1981224ec60ad169cea456c0a43c->leave($__internal_9e23403bd61c81d6434b1f5127e867038dbf1981224ec60ad169cea456c0a43c_prof);

        
        $__internal_e76b070d34272859f049da6f9e1edd2670cb09a77367488f3dfc24439c18a716->leave($__internal_e76b070d34272859f049da6f9e1edd2670cb09a77367488f3dfc24439c18a716_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bc8a74ada222536cda48e3aa075ba39f77fac2c045507c8475f228ab14de934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc8a74ada222536cda48e3aa075ba39f77fac2c045507c8475f228ab14de934->enter($__internal_3bc8a74ada222536cda48e3aa075ba39f77fac2c045507c8475f228ab14de934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b09f5314f35da3076ffcde8095a3fe344f0fa5a02824fbfa648f5bc6444a669b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09f5314f35da3076ffcde8095a3fe344f0fa5a02824fbfa648f5bc6444a669b->enter($__internal_b09f5314f35da3076ffcde8095a3fe344f0fa5a02824fbfa648f5bc6444a669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b09f5314f35da3076ffcde8095a3fe344f0fa5a02824fbfa648f5bc6444a669b->leave($__internal_b09f5314f35da3076ffcde8095a3fe344f0fa5a02824fbfa648f5bc6444a669b_prof);

        
        $__internal_3bc8a74ada222536cda48e3aa075ba39f77fac2c045507c8475f228ab14de934->leave($__internal_3bc8a74ada222536cda48e3aa075ba39f77fac2c045507c8475f228ab14de934_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
