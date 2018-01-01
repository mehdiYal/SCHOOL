<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_29cca654a486c6a2bbb68eb1e1f4bbcde8a50a47e74a1c2b180ca4693530b149 extends Twig_Template
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
        $__internal_585c668138c9e400ecad0da0f58b8204874235229a1360e27f3bc1e7af1c0b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585c668138c9e400ecad0da0f58b8204874235229a1360e27f3bc1e7af1c0b40->enter($__internal_585c668138c9e400ecad0da0f58b8204874235229a1360e27f3bc1e7af1c0b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_9df959541ceb650833213a03f0c76a927d9beb4548fc460a57fa5aceb463dd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df959541ceb650833213a03f0c76a927d9beb4548fc460a57fa5aceb463dd4a->enter($__internal_9df959541ceb650833213a03f0c76a927d9beb4548fc460a57fa5aceb463dd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585c668138c9e400ecad0da0f58b8204874235229a1360e27f3bc1e7af1c0b40->leave($__internal_585c668138c9e400ecad0da0f58b8204874235229a1360e27f3bc1e7af1c0b40_prof);

        
        $__internal_9df959541ceb650833213a03f0c76a927d9beb4548fc460a57fa5aceb463dd4a->leave($__internal_9df959541ceb650833213a03f0c76a927d9beb4548fc460a57fa5aceb463dd4a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9d8f319d14e29782802e8f33f31480613f7d4a9e2cdbb67ea53681a3d8ea7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d8f319d14e29782802e8f33f31480613f7d4a9e2cdbb67ea53681a3d8ea7b8->enter($__internal_f9d8f319d14e29782802e8f33f31480613f7d4a9e2cdbb67ea53681a3d8ea7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1112cf98ff3dd809beacc0964cb46243dc365a02a605a2bbcb60c70633b7b7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1112cf98ff3dd809beacc0964cb46243dc365a02a605a2bbcb60c70633b7b7cf->enter($__internal_1112cf98ff3dd809beacc0964cb46243dc365a02a605a2bbcb60c70633b7b7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1112cf98ff3dd809beacc0964cb46243dc365a02a605a2bbcb60c70633b7b7cf->leave($__internal_1112cf98ff3dd809beacc0964cb46243dc365a02a605a2bbcb60c70633b7b7cf_prof);

        
        $__internal_f9d8f319d14e29782802e8f33f31480613f7d4a9e2cdbb67ea53681a3d8ea7b8->leave($__internal_f9d8f319d14e29782802e8f33f31480613f7d4a9e2cdbb67ea53681a3d8ea7b8_prof);

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
