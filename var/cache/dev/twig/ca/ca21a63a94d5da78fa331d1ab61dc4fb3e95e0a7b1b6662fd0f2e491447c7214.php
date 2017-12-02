<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9a92024f757c65d9974a3ea6d9d57aa60ec8d50559862acc3058792d84f9ec81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d60ad22781bb1fa14afa9a8b96caf4db6f056f0b58bb7d5369f35052c97798dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60ad22781bb1fa14afa9a8b96caf4db6f056f0b58bb7d5369f35052c97798dd->enter($__internal_d60ad22781bb1fa14afa9a8b96caf4db6f056f0b58bb7d5369f35052c97798dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_73c3dd9a4f6bd0f544d1a382249d23beb9232823b39b7121045008ea9ca9a71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c3dd9a4f6bd0f544d1a382249d23beb9232823b39b7121045008ea9ca9a71c->enter($__internal_73c3dd9a4f6bd0f544d1a382249d23beb9232823b39b7121045008ea9ca9a71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d60ad22781bb1fa14afa9a8b96caf4db6f056f0b58bb7d5369f35052c97798dd->leave($__internal_d60ad22781bb1fa14afa9a8b96caf4db6f056f0b58bb7d5369f35052c97798dd_prof);

        
        $__internal_73c3dd9a4f6bd0f544d1a382249d23beb9232823b39b7121045008ea9ca9a71c->leave($__internal_73c3dd9a4f6bd0f544d1a382249d23beb9232823b39b7121045008ea9ca9a71c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f0a02203620685d07600990cafc1b72195bdedefa17f557c9482cee1b5e9458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0a02203620685d07600990cafc1b72195bdedefa17f557c9482cee1b5e9458->enter($__internal_7f0a02203620685d07600990cafc1b72195bdedefa17f557c9482cee1b5e9458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c4489cc9dd5e2ffe170d70a201953375ecb21d89605ce82e197e97885c24b9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4489cc9dd5e2ffe170d70a201953375ecb21d89605ce82e197e97885c24b9cf->enter($__internal_c4489cc9dd5e2ffe170d70a201953375ecb21d89605ce82e197e97885c24b9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c4489cc9dd5e2ffe170d70a201953375ecb21d89605ce82e197e97885c24b9cf->leave($__internal_c4489cc9dd5e2ffe170d70a201953375ecb21d89605ce82e197e97885c24b9cf_prof);

        
        $__internal_7f0a02203620685d07600990cafc1b72195bdedefa17f557c9482cee1b5e9458->leave($__internal_7f0a02203620685d07600990cafc1b72195bdedefa17f557c9482cee1b5e9458_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
