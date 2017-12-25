<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_70e59212a33bbc3ba078a9c00406a1a9c76af612cf2fc2ce7394d717b59219da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_42df6813774799e3a8dfe4b03c74e5c07bbe2f1f4faaee3d57ab75d6f681fb19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42df6813774799e3a8dfe4b03c74e5c07bbe2f1f4faaee3d57ab75d6f681fb19->enter($__internal_42df6813774799e3a8dfe4b03c74e5c07bbe2f1f4faaee3d57ab75d6f681fb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_e7cd275191868eb17851d8332d7e25c6837eeb06f6b50120497244516ef3d7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cd275191868eb17851d8332d7e25c6837eeb06f6b50120497244516ef3d7da->enter($__internal_e7cd275191868eb17851d8332d7e25c6837eeb06f6b50120497244516ef3d7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42df6813774799e3a8dfe4b03c74e5c07bbe2f1f4faaee3d57ab75d6f681fb19->leave($__internal_42df6813774799e3a8dfe4b03c74e5c07bbe2f1f4faaee3d57ab75d6f681fb19_prof);

        
        $__internal_e7cd275191868eb17851d8332d7e25c6837eeb06f6b50120497244516ef3d7da->leave($__internal_e7cd275191868eb17851d8332d7e25c6837eeb06f6b50120497244516ef3d7da_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6e20589378cd51ccb98a6c92ced573b9dfbe3a5451ea36f07ac379b7ff12848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e20589378cd51ccb98a6c92ced573b9dfbe3a5451ea36f07ac379b7ff12848->enter($__internal_a6e20589378cd51ccb98a6c92ced573b9dfbe3a5451ea36f07ac379b7ff12848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_46b437b360aa139e519e4b02e0d18ee25c62a75226a073ac4a2fb0f34af6ce0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b437b360aa139e519e4b02e0d18ee25c62a75226a073ac4a2fb0f34af6ce0f->enter($__internal_46b437b360aa139e519e4b02e0d18ee25c62a75226a073ac4a2fb0f34af6ce0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_46b437b360aa139e519e4b02e0d18ee25c62a75226a073ac4a2fb0f34af6ce0f->leave($__internal_46b437b360aa139e519e4b02e0d18ee25c62a75226a073ac4a2fb0f34af6ce0f_prof);

        
        $__internal_a6e20589378cd51ccb98a6c92ced573b9dfbe3a5451ea36f07ac379b7ff12848->leave($__internal_a6e20589378cd51ccb98a6c92ced573b9dfbe3a5451ea36f07ac379b7ff12848_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
