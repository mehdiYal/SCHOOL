<?php

/* :parentsViews:parent.html.twig */
class __TwigTemplate_70f841b10bf6f160a58a2032ba00da46c91c61fe3bddc8f1b691e33f1ba70632 extends Twig_Template
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
        $__internal_addfb89301d09018342b4ef688c7a157dd12c5fae78d31d53f04cacf1086b510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addfb89301d09018342b4ef688c7a157dd12c5fae78d31d53f04cacf1086b510->enter($__internal_addfb89301d09018342b4ef688c7a157dd12c5fae78d31d53f04cacf1086b510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        $__internal_d804c616b74c9eccca0f6a06fdbb78affbbc65fc9b8b56952840f74f00844bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d804c616b74c9eccca0f6a06fdbb78affbbc65fc9b8b56952840f74f00844bad->enter($__internal_d804c616b74c9eccca0f6a06fdbb78affbbc65fc9b8b56952840f74f00844bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        // line 1
        echo "
  <li class=\"\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>";
        
        $__internal_addfb89301d09018342b4ef688c7a157dd12c5fae78d31d53f04cacf1086b510->leave($__internal_addfb89301d09018342b4ef688c7a157dd12c5fae78d31d53f04cacf1086b510_prof);

        
        $__internal_d804c616b74c9eccca0f6a06fdbb78affbbc65fc9b8b56952840f74f00844bad->leave($__internal_d804c616b74c9eccca0f6a06fdbb78affbbc65fc9b8b56952840f74f00844bad_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:parent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", ":parentsViews:parent.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/parentsViews/parent.html.twig");
    }
}
