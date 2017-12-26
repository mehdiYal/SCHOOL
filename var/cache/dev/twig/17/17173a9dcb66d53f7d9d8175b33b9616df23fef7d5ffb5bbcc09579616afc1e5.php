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
        $__internal_16f122a967d618e3aeb4bdcb1ad279d0685fbd7605834368a34ad06268e676c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f122a967d618e3aeb4bdcb1ad279d0685fbd7605834368a34ad06268e676c0->enter($__internal_16f122a967d618e3aeb4bdcb1ad279d0685fbd7605834368a34ad06268e676c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_525a58909dbb9dc9f41df4f492af8f6116088453284eafd50e9060a3b49a4190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525a58909dbb9dc9f41df4f492af8f6116088453284eafd50e9060a3b49a4190->enter($__internal_525a58909dbb9dc9f41df4f492af8f6116088453284eafd50e9060a3b49a4190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f122a967d618e3aeb4bdcb1ad279d0685fbd7605834368a34ad06268e676c0->leave($__internal_16f122a967d618e3aeb4bdcb1ad279d0685fbd7605834368a34ad06268e676c0_prof);

        
        $__internal_525a58909dbb9dc9f41df4f492af8f6116088453284eafd50e9060a3b49a4190->leave($__internal_525a58909dbb9dc9f41df4f492af8f6116088453284eafd50e9060a3b49a4190_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfc3bcaf7ea3469a98805415310597c974c13d96887db1fe7e0a6ef38ab03b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc3bcaf7ea3469a98805415310597c974c13d96887db1fe7e0a6ef38ab03b0c->enter($__internal_dfc3bcaf7ea3469a98805415310597c974c13d96887db1fe7e0a6ef38ab03b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f03f56175a118da3d101067b55940ff64445e553769a1c6e2cb412349ba4e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f03f56175a118da3d101067b55940ff64445e553769a1c6e2cb412349ba4e15->enter($__internal_1f03f56175a118da3d101067b55940ff64445e553769a1c6e2cb412349ba4e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_1f03f56175a118da3d101067b55940ff64445e553769a1c6e2cb412349ba4e15->leave($__internal_1f03f56175a118da3d101067b55940ff64445e553769a1c6e2cb412349ba4e15_prof);

        
        $__internal_dfc3bcaf7ea3469a98805415310597c974c13d96887db1fe7e0a6ef38ab03b0c->leave($__internal_dfc3bcaf7ea3469a98805415310597c974c13d96887db1fe7e0a6ef38ab03b0c_prof);

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
