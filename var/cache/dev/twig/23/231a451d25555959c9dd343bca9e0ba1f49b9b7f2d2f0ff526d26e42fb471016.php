<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_576c773e18a6a5ac8c77fbb7b5934d7422f8d2ff5ad6c63673555c53aa5d38b6 extends Twig_Template
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
        $__internal_0db3c5628a198776bb35eb37dca5af7a99b7142250c41a0866e9af757667bc7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db3c5628a198776bb35eb37dca5af7a99b7142250c41a0866e9af757667bc7f->enter($__internal_0db3c5628a198776bb35eb37dca5af7a99b7142250c41a0866e9af757667bc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_c24c7fb58eb685c63be8b606f4d6b860d9c74db5521de64aa2c155dc31f54536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24c7fb58eb685c63be8b606f4d6b860d9c74db5521de64aa2c155dc31f54536->enter($__internal_c24c7fb58eb685c63be8b606f4d6b860d9c74db5521de64aa2c155dc31f54536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db3c5628a198776bb35eb37dca5af7a99b7142250c41a0866e9af757667bc7f->leave($__internal_0db3c5628a198776bb35eb37dca5af7a99b7142250c41a0866e9af757667bc7f_prof);

        
        $__internal_c24c7fb58eb685c63be8b606f4d6b860d9c74db5521de64aa2c155dc31f54536->leave($__internal_c24c7fb58eb685c63be8b606f4d6b860d9c74db5521de64aa2c155dc31f54536_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_187f63ac394c0f5f10d66800b547b080ff9172f80b74a37c1bb046aeb28b78cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187f63ac394c0f5f10d66800b547b080ff9172f80b74a37c1bb046aeb28b78cd->enter($__internal_187f63ac394c0f5f10d66800b547b080ff9172f80b74a37c1bb046aeb28b78cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f140176e97e04301b522e2379059de772ef88aa47433f37b22e174d2064bc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f140176e97e04301b522e2379059de772ef88aa47433f37b22e174d2064bc61->enter($__internal_4f140176e97e04301b522e2379059de772ef88aa47433f37b22e174d2064bc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4f140176e97e04301b522e2379059de772ef88aa47433f37b22e174d2064bc61->leave($__internal_4f140176e97e04301b522e2379059de772ef88aa47433f37b22e174d2064bc61_prof);

        
        $__internal_187f63ac394c0f5f10d66800b547b080ff9172f80b74a37c1bb046aeb28b78cd->leave($__internal_187f63ac394c0f5f10d66800b547b080ff9172f80b74a37c1bb046aeb28b78cd_prof);

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
