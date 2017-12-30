<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6b963c8efbeadd84addb54f0fe9b8b2f3745c2c52013b9de05a2d51385c77ed2 extends Twig_Template
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
        $__internal_92bd68a8bfffcde851e8d9653d1e8992934b5496ad3f79b2aaf7f41803aad834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92bd68a8bfffcde851e8d9653d1e8992934b5496ad3f79b2aaf7f41803aad834->enter($__internal_92bd68a8bfffcde851e8d9653d1e8992934b5496ad3f79b2aaf7f41803aad834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_aa2446c5ee3e404e3c2ceebfd768c065ea49ca1aaed20b3732e68920346a7801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2446c5ee3e404e3c2ceebfd768c065ea49ca1aaed20b3732e68920346a7801->enter($__internal_aa2446c5ee3e404e3c2ceebfd768c065ea49ca1aaed20b3732e68920346a7801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92bd68a8bfffcde851e8d9653d1e8992934b5496ad3f79b2aaf7f41803aad834->leave($__internal_92bd68a8bfffcde851e8d9653d1e8992934b5496ad3f79b2aaf7f41803aad834_prof);

        
        $__internal_aa2446c5ee3e404e3c2ceebfd768c065ea49ca1aaed20b3732e68920346a7801->leave($__internal_aa2446c5ee3e404e3c2ceebfd768c065ea49ca1aaed20b3732e68920346a7801_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afbaabe0e4a9cedc449c075161324d83ec1619bc324133e13347d54d364ae8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afbaabe0e4a9cedc449c075161324d83ec1619bc324133e13347d54d364ae8e1->enter($__internal_afbaabe0e4a9cedc449c075161324d83ec1619bc324133e13347d54d364ae8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_254f7ab8af204ba85743b5ea09eac5a6a36d9db9ac413926789a07f791be97e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254f7ab8af204ba85743b5ea09eac5a6a36d9db9ac413926789a07f791be97e9->enter($__internal_254f7ab8af204ba85743b5ea09eac5a6a36d9db9ac413926789a07f791be97e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_254f7ab8af204ba85743b5ea09eac5a6a36d9db9ac413926789a07f791be97e9->leave($__internal_254f7ab8af204ba85743b5ea09eac5a6a36d9db9ac413926789a07f791be97e9_prof);

        
        $__internal_afbaabe0e4a9cedc449c075161324d83ec1619bc324133e13347d54d364ae8e1->leave($__internal_afbaabe0e4a9cedc449c075161324d83ec1619bc324133e13347d54d364ae8e1_prof);

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
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
