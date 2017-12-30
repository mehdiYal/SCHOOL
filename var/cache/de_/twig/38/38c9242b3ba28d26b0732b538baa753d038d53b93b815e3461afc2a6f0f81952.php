<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_db30177f504c1c17e137db43bd5dca2bdd5f0b96847c61b6fa43ed17e5384f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_96b99026d3cdc23d6182d12f79eb1b824014831f51ffc8c95703618b6b2d6b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b99026d3cdc23d6182d12f79eb1b824014831f51ffc8c95703618b6b2d6b42->enter($__internal_96b99026d3cdc23d6182d12f79eb1b824014831f51ffc8c95703618b6b2d6b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_55175d981595c72f03fb15e1e3087d6f95434937964282850271195aa91939fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55175d981595c72f03fb15e1e3087d6f95434937964282850271195aa91939fb->enter($__internal_55175d981595c72f03fb15e1e3087d6f95434937964282850271195aa91939fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96b99026d3cdc23d6182d12f79eb1b824014831f51ffc8c95703618b6b2d6b42->leave($__internal_96b99026d3cdc23d6182d12f79eb1b824014831f51ffc8c95703618b6b2d6b42_prof);

        
        $__internal_55175d981595c72f03fb15e1e3087d6f95434937964282850271195aa91939fb->leave($__internal_55175d981595c72f03fb15e1e3087d6f95434937964282850271195aa91939fb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_633e6aa699b3024ed35a1fae9a7ebca84bf5b24f7ef433d5ca741443ceb81874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633e6aa699b3024ed35a1fae9a7ebca84bf5b24f7ef433d5ca741443ceb81874->enter($__internal_633e6aa699b3024ed35a1fae9a7ebca84bf5b24f7ef433d5ca741443ceb81874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6bd2f8a283979070623f1c34a234ec3f5119b2ed3bffefa62056c860ad84496c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd2f8a283979070623f1c34a234ec3f5119b2ed3bffefa62056c860ad84496c->enter($__internal_6bd2f8a283979070623f1c34a234ec3f5119b2ed3bffefa62056c860ad84496c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6bd2f8a283979070623f1c34a234ec3f5119b2ed3bffefa62056c860ad84496c->leave($__internal_6bd2f8a283979070623f1c34a234ec3f5119b2ed3bffefa62056c860ad84496c_prof);

        
        $__internal_633e6aa699b3024ed35a1fae9a7ebca84bf5b24f7ef433d5ca741443ceb81874->leave($__internal_633e6aa699b3024ed35a1fae9a7ebca84bf5b24f7ef433d5ca741443ceb81874_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
