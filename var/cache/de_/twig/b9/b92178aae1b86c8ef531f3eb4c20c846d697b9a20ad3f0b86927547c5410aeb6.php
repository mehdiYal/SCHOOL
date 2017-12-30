<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_ac2477475b24970aea5c11b9c3da3c569ea47dc0e2313af4b9890736dbc290f7 extends Twig_Template
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
        $__internal_3a2a174babc518716cda0a15b9460f2f4c682039b9b23aa7475c8febf2f326fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2a174babc518716cda0a15b9460f2f4c682039b9b23aa7475c8febf2f326fe->enter($__internal_3a2a174babc518716cda0a15b9460f2f4c682039b9b23aa7475c8febf2f326fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_ce4ce647737e10007460833927afd7d00d70ca9c3fd959c9e7f99f6acdb8c9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4ce647737e10007460833927afd7d00d70ca9c3fd959c9e7f99f6acdb8c9ee->enter($__internal_ce4ce647737e10007460833927afd7d00d70ca9c3fd959c9e7f99f6acdb8c9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2a174babc518716cda0a15b9460f2f4c682039b9b23aa7475c8febf2f326fe->leave($__internal_3a2a174babc518716cda0a15b9460f2f4c682039b9b23aa7475c8febf2f326fe_prof);

        
        $__internal_ce4ce647737e10007460833927afd7d00d70ca9c3fd959c9e7f99f6acdb8c9ee->leave($__internal_ce4ce647737e10007460833927afd7d00d70ca9c3fd959c9e7f99f6acdb8c9ee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe9e02f926be5dc6a527741812935c6b8d8aa2c7c52164db3b059f0beed82377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9e02f926be5dc6a527741812935c6b8d8aa2c7c52164db3b059f0beed82377->enter($__internal_fe9e02f926be5dc6a527741812935c6b8d8aa2c7c52164db3b059f0beed82377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_633c3e0117e4efbf373108684d7760a03dc78b51cc5d5e1122268f6ad6a45084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633c3e0117e4efbf373108684d7760a03dc78b51cc5d5e1122268f6ad6a45084->enter($__internal_633c3e0117e4efbf373108684d7760a03dc78b51cc5d5e1122268f6ad6a45084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_633c3e0117e4efbf373108684d7760a03dc78b51cc5d5e1122268f6ad6a45084->leave($__internal_633c3e0117e4efbf373108684d7760a03dc78b51cc5d5e1122268f6ad6a45084_prof);

        
        $__internal_fe9e02f926be5dc6a527741812935c6b8d8aa2c7c52164db3b059f0beed82377->leave($__internal_fe9e02f926be5dc6a527741812935c6b8d8aa2c7c52164db3b059f0beed82377_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
