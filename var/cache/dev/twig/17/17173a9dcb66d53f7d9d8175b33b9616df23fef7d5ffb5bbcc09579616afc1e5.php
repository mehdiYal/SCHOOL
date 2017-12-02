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
        $__internal_4624f24f26b6253be2d65f39763761136ed482cd440656e9cca1cb7997235164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4624f24f26b6253be2d65f39763761136ed482cd440656e9cca1cb7997235164->enter($__internal_4624f24f26b6253be2d65f39763761136ed482cd440656e9cca1cb7997235164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e8e58a343b832f0e3dab03026f81d5f90de5c7bab8dd10a1904d764649080218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e58a343b832f0e3dab03026f81d5f90de5c7bab8dd10a1904d764649080218->enter($__internal_e8e58a343b832f0e3dab03026f81d5f90de5c7bab8dd10a1904d764649080218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4624f24f26b6253be2d65f39763761136ed482cd440656e9cca1cb7997235164->leave($__internal_4624f24f26b6253be2d65f39763761136ed482cd440656e9cca1cb7997235164_prof);

        
        $__internal_e8e58a343b832f0e3dab03026f81d5f90de5c7bab8dd10a1904d764649080218->leave($__internal_e8e58a343b832f0e3dab03026f81d5f90de5c7bab8dd10a1904d764649080218_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e721d86de91333a1f504bf299b8582b2f53b7f400a4b06919435b221ed0ca55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e721d86de91333a1f504bf299b8582b2f53b7f400a4b06919435b221ed0ca55->enter($__internal_8e721d86de91333a1f504bf299b8582b2f53b7f400a4b06919435b221ed0ca55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1b7a61e90ef4310e63f06659ad460faaac46aa719739a06f37bfc8eff59491ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7a61e90ef4310e63f06659ad460faaac46aa719739a06f37bfc8eff59491ef->enter($__internal_1b7a61e90ef4310e63f06659ad460faaac46aa719739a06f37bfc8eff59491ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_1b7a61e90ef4310e63f06659ad460faaac46aa719739a06f37bfc8eff59491ef->leave($__internal_1b7a61e90ef4310e63f06659ad460faaac46aa719739a06f37bfc8eff59491ef_prof);

        
        $__internal_8e721d86de91333a1f504bf299b8582b2f53b7f400a4b06919435b221ed0ca55->leave($__internal_8e721d86de91333a1f504bf299b8582b2f53b7f400a4b06919435b221ed0ca55_prof);

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
