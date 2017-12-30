<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6b17992dbea47ae6d2bab8f5c436072f2e908bd1af3ce771df9b216310892d07 extends Twig_Template
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
        $__internal_dd56a0f058a547b77ca64015db8e58243c16825aea1f147011ecbd0e0e2f34f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd56a0f058a547b77ca64015db8e58243c16825aea1f147011ecbd0e0e2f34f6->enter($__internal_dd56a0f058a547b77ca64015db8e58243c16825aea1f147011ecbd0e0e2f34f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a01ba5adfe833c31429d09671f25d7b9188ef9c63f343d2f11ec2bbf256ac5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01ba5adfe833c31429d09671f25d7b9188ef9c63f343d2f11ec2bbf256ac5e3->enter($__internal_a01ba5adfe833c31429d09671f25d7b9188ef9c63f343d2f11ec2bbf256ac5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd56a0f058a547b77ca64015db8e58243c16825aea1f147011ecbd0e0e2f34f6->leave($__internal_dd56a0f058a547b77ca64015db8e58243c16825aea1f147011ecbd0e0e2f34f6_prof);

        
        $__internal_a01ba5adfe833c31429d09671f25d7b9188ef9c63f343d2f11ec2bbf256ac5e3->leave($__internal_a01ba5adfe833c31429d09671f25d7b9188ef9c63f343d2f11ec2bbf256ac5e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1391ef1dd3172e7bd8fbe97032ecc3c422edc6468279e85a3d51a967466d8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1391ef1dd3172e7bd8fbe97032ecc3c422edc6468279e85a3d51a967466d8c6->enter($__internal_b1391ef1dd3172e7bd8fbe97032ecc3c422edc6468279e85a3d51a967466d8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d8dd16113da159109166f3bae6efaeec4fe52a4056d43e4d73d11ac966b2453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8dd16113da159109166f3bae6efaeec4fe52a4056d43e4d73d11ac966b2453->enter($__internal_1d8dd16113da159109166f3bae6efaeec4fe52a4056d43e4d73d11ac966b2453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_1d8dd16113da159109166f3bae6efaeec4fe52a4056d43e4d73d11ac966b2453->leave($__internal_1d8dd16113da159109166f3bae6efaeec4fe52a4056d43e4d73d11ac966b2453_prof);

        
        $__internal_b1391ef1dd3172e7bd8fbe97032ecc3c422edc6468279e85a3d51a967466d8c6->leave($__internal_b1391ef1dd3172e7bd8fbe97032ecc3c422edc6468279e85a3d51a967466d8c6_prof);

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
