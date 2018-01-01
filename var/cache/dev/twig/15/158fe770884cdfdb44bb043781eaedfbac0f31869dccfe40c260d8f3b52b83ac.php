<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_5f76a267c3a2c046f59e6a3b62dc9568eaae5078975ad61fc7add28fdca7c9cb extends Twig_Template
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
        $__internal_75fb58de8b4ca82fac3a18ffbf50cd2e210c4e264a51e7c8f714c417b5244455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fb58de8b4ca82fac3a18ffbf50cd2e210c4e264a51e7c8f714c417b5244455->enter($__internal_75fb58de8b4ca82fac3a18ffbf50cd2e210c4e264a51e7c8f714c417b5244455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_4efac01eb8b17fb0ac12661d9cc34584a1bb619dee530282fb34e0d9ef8cff67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efac01eb8b17fb0ac12661d9cc34584a1bb619dee530282fb34e0d9ef8cff67->enter($__internal_4efac01eb8b17fb0ac12661d9cc34584a1bb619dee530282fb34e0d9ef8cff67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75fb58de8b4ca82fac3a18ffbf50cd2e210c4e264a51e7c8f714c417b5244455->leave($__internal_75fb58de8b4ca82fac3a18ffbf50cd2e210c4e264a51e7c8f714c417b5244455_prof);

        
        $__internal_4efac01eb8b17fb0ac12661d9cc34584a1bb619dee530282fb34e0d9ef8cff67->leave($__internal_4efac01eb8b17fb0ac12661d9cc34584a1bb619dee530282fb34e0d9ef8cff67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a28aff67c9bf05a62be3be353ba963a6e3096ebf690af39a9b23010f0afad63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28aff67c9bf05a62be3be353ba963a6e3096ebf690af39a9b23010f0afad63e->enter($__internal_a28aff67c9bf05a62be3be353ba963a6e3096ebf690af39a9b23010f0afad63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_205b4b18f84ec500405108fc84e21018cf06f44cad3ec7e459e994bd02448f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205b4b18f84ec500405108fc84e21018cf06f44cad3ec7e459e994bd02448f6f->enter($__internal_205b4b18f84ec500405108fc84e21018cf06f44cad3ec7e459e994bd02448f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_205b4b18f84ec500405108fc84e21018cf06f44cad3ec7e459e994bd02448f6f->leave($__internal_205b4b18f84ec500405108fc84e21018cf06f44cad3ec7e459e994bd02448f6f_prof);

        
        $__internal_a28aff67c9bf05a62be3be353ba963a6e3096ebf690af39a9b23010f0afad63e->leave($__internal_a28aff67c9bf05a62be3be353ba963a6e3096ebf690af39a9b23010f0afad63e_prof);

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
