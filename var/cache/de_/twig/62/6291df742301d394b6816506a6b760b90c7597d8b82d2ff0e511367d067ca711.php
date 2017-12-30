<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fe13195934a9d3f362846cf2c4171a0dcac356bd714bc8153a5d4a03b19107c0 extends Twig_Template
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
        $__internal_e0df804c891e233a715d632050e3a3241b8a1be606d32a08424074c012fa7b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0df804c891e233a715d632050e3a3241b8a1be606d32a08424074c012fa7b48->enter($__internal_e0df804c891e233a715d632050e3a3241b8a1be606d32a08424074c012fa7b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8485b453ee7dc8e753751d94b5c8d5053778bb3be44cd0350ad7a7f5fc96512c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8485b453ee7dc8e753751d94b5c8d5053778bb3be44cd0350ad7a7f5fc96512c->enter($__internal_8485b453ee7dc8e753751d94b5c8d5053778bb3be44cd0350ad7a7f5fc96512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0df804c891e233a715d632050e3a3241b8a1be606d32a08424074c012fa7b48->leave($__internal_e0df804c891e233a715d632050e3a3241b8a1be606d32a08424074c012fa7b48_prof);

        
        $__internal_8485b453ee7dc8e753751d94b5c8d5053778bb3be44cd0350ad7a7f5fc96512c->leave($__internal_8485b453ee7dc8e753751d94b5c8d5053778bb3be44cd0350ad7a7f5fc96512c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d2b9100feab12476041b14bd7e59696375610302c4ef0fbfee8fc87467f86cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2b9100feab12476041b14bd7e59696375610302c4ef0fbfee8fc87467f86cf->enter($__internal_7d2b9100feab12476041b14bd7e59696375610302c4ef0fbfee8fc87467f86cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b5893a9ebe336b804d1cbbd537e4ef10f10c7c7811e2380544b52abd61f8957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5893a9ebe336b804d1cbbd537e4ef10f10c7c7811e2380544b52abd61f8957->enter($__internal_3b5893a9ebe336b804d1cbbd537e4ef10f10c7c7811e2380544b52abd61f8957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3b5893a9ebe336b804d1cbbd537e4ef10f10c7c7811e2380544b52abd61f8957->leave($__internal_3b5893a9ebe336b804d1cbbd537e4ef10f10c7c7811e2380544b52abd61f8957_prof);

        
        $__internal_7d2b9100feab12476041b14bd7e59696375610302c4ef0fbfee8fc87467f86cf->leave($__internal_7d2b9100feab12476041b14bd7e59696375610302c4ef0fbfee8fc87467f86cf_prof);

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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
