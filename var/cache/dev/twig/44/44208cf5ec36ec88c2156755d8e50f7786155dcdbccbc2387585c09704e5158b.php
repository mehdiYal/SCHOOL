<?php

/* :enseignantsViews:enseignant.html.twig */
class __TwigTemplate_7107d440190b86ac4ff2f13d3b09dd4fd7b7e63aceaf3447d3a01f406e35d532 extends Twig_Template
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
        $__internal_3a4e0d935d0dcb5261bc67d54b2d751b76349004760d8e268987494ff8211750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4e0d935d0dcb5261bc67d54b2d751b76349004760d8e268987494ff8211750->enter($__internal_3a4e0d935d0dcb5261bc67d54b2d751b76349004760d8e268987494ff8211750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        $__internal_f7f9b1a680bf2c201c61c6f2a418d4b6fbc121e6065ba13cdf37ae840a66b665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f9b1a680bf2c201c61c6f2a418d4b6fbc121e6065ba13cdf37ae840a66b665->enter($__internal_f7f9b1a680bf2c201c61c6f2a418d4b6fbc121e6065ba13cdf37ae840a66b665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        // line 1
        echo "<<<<<<< HEAD
 <li class=\"\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
=======
 <li class=\"\"><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
";
        
        $__internal_3a4e0d935d0dcb5261bc67d54b2d751b76349004760d8e268987494ff8211750->leave($__internal_3a4e0d935d0dcb5261bc67d54b2d751b76349004760d8e268987494ff8211750_prof);

        
        $__internal_f7f9b1a680bf2c201c61c6f2a418d4b6fbc121e6065ba13cdf37ae840a66b665->leave($__internal_f7f9b1a680bf2c201c61c6f2a418d4b6fbc121e6065ba13cdf37ae840a66b665_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:enseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  28 => 2,  25 => 1,);
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
 <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>
=======
 <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
", ":enseignantsViews:enseignant.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/enseignantsViews/enseignant.html.twig");
    }
}
