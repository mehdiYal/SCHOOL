<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_dda72213d2b38b6d300e81de78f74e1d539259eaba21f4d84abf4ea6011cccd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc2dd308782eeae8d0e9d8e6fe58ff4af835ce74dd4518d355cfa34df792fe0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2dd308782eeae8d0e9d8e6fe58ff4af835ce74dd4518d355cfa34df792fe0b->enter($__internal_dc2dd308782eeae8d0e9d8e6fe58ff4af835ce74dd4518d355cfa34df792fe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_4b7efae4a819651078213a903b99f38b6aa94c68ca4ef0b7ee7a26bd6e2ff931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7efae4a819651078213a903b99f38b6aa94c68ca4ef0b7ee7a26bd6e2ff931->enter($__internal_4b7efae4a819651078213a903b99f38b6aa94c68ca4ef0b7ee7a26bd6e2ff931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_dc2dd308782eeae8d0e9d8e6fe58ff4af835ce74dd4518d355cfa34df792fe0b->leave($__internal_dc2dd308782eeae8d0e9d8e6fe58ff4af835ce74dd4518d355cfa34df792fe0b_prof);

        
        $__internal_4b7efae4a819651078213a903b99f38b6aa94c68ca4ef0b7ee7a26bd6e2ff931->leave($__internal_4b7efae4a819651078213a903b99f38b6aa94c68ca4ef0b7ee7a26bd6e2ff931_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
