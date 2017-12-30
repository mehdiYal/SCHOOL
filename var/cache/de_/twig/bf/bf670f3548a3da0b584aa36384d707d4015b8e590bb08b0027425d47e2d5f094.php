<?php

/* :parentsViews:parent.html.twig */
class __TwigTemplate_4d17c35a344c1e5b514097bec19663d4af48fae35942a7e1e18fcb0a7e4e27ee extends Twig_Template
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
        $__internal_3d674bc377f355205d7cf408f75f222eb4ca50ce60e21d56b0bbab9995827310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d674bc377f355205d7cf408f75f222eb4ca50ce60e21d56b0bbab9995827310->enter($__internal_3d674bc377f355205d7cf408f75f222eb4ca50ce60e21d56b0bbab9995827310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        $__internal_1cc1c21a1f8117713d69659e48180d5c94fc487d2f223f990eed6b0cfa377d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc1c21a1f8117713d69659e48180d5c94fc487d2f223f990eed6b0cfa377d26->enter($__internal_1cc1c21a1f8117713d69659e48180d5c94fc487d2f223f990eed6b0cfa377d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        // line 1
        echo "<<<<<<< HEAD

=======

>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
  <li class=\"\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>";
        
        $__internal_3d674bc377f355205d7cf408f75f222eb4ca50ce60e21d56b0bbab9995827310->leave($__internal_3d674bc377f355205d7cf408f75f222eb4ca50ce60e21d56b0bbab9995827310_prof);

        
        $__internal_1cc1c21a1f8117713d69659e48180d5c94fc487d2f223f990eed6b0cfa377d26->leave($__internal_1cc1c21a1f8117713d69659e48180d5c94fc487d2f223f990eed6b0cfa377d26_prof);

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
        return array (  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<<<<<<< HEAD

=======

>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", ":parentsViews:parent.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/parentsViews/parent.html.twig");
    }
}
