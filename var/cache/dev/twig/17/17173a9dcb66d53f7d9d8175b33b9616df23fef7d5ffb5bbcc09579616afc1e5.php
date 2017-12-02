<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ad70f29241a284d520f0e5bbb34960fdaa6a9a50373849a457b5cb36d38425ee extends Twig_Template
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
        $__internal_898c9a0855ce288161e77649a08dd26d6b224b0841cfae8bbe229aa6a6b9ad40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898c9a0855ce288161e77649a08dd26d6b224b0841cfae8bbe229aa6a6b9ad40->enter($__internal_898c9a0855ce288161e77649a08dd26d6b224b0841cfae8bbe229aa6a6b9ad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_5ca406359c297cfc31f1832f84f3dfbfa10015ffb8f265aee1c3423cb1c8f739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca406359c297cfc31f1832f84f3dfbfa10015ffb8f265aee1c3423cb1c8f739->enter($__internal_5ca406359c297cfc31f1832f84f3dfbfa10015ffb8f265aee1c3423cb1c8f739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_898c9a0855ce288161e77649a08dd26d6b224b0841cfae8bbe229aa6a6b9ad40->leave($__internal_898c9a0855ce288161e77649a08dd26d6b224b0841cfae8bbe229aa6a6b9ad40_prof);

        
        $__internal_5ca406359c297cfc31f1832f84f3dfbfa10015ffb8f265aee1c3423cb1c8f739->leave($__internal_5ca406359c297cfc31f1832f84f3dfbfa10015ffb8f265aee1c3423cb1c8f739_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3316a6919911de49a94fe6684a518b8f3b2f52160d783c500639bc5e3ef3b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3316a6919911de49a94fe6684a518b8f3b2f52160d783c500639bc5e3ef3b7b->enter($__internal_f3316a6919911de49a94fe6684a518b8f3b2f52160d783c500639bc5e3ef3b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_342e3ac248e5cddf7324334b51a67749ca530a40ed042c6fd891e33e62c315e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342e3ac248e5cddf7324334b51a67749ca530a40ed042c6fd891e33e62c315e4->enter($__internal_342e3ac248e5cddf7324334b51a67749ca530a40ed042c6fd891e33e62c315e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_342e3ac248e5cddf7324334b51a67749ca530a40ed042c6fd891e33e62c315e4->leave($__internal_342e3ac248e5cddf7324334b51a67749ca530a40ed042c6fd891e33e62c315e4_prof);

        
        $__internal_f3316a6919911de49a94fe6684a518b8f3b2f52160d783c500639bc5e3ef3b7b->leave($__internal_f3316a6919911de49a94fe6684a518b8f3b2f52160d783c500639bc5e3ef3b7b_prof);

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
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
