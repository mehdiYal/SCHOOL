<?php

/* enseignantsViews/enseignant.html.twig */
class __TwigTemplate_115f5225e427097fc2ae11250fdbdd7c627e0d6e6f51f507a7555b22cd23fdae extends Twig_Template
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
        $__internal_a64cd328054ab087e6c15e3183d94249345ff04f26e7057baa307d7f0e5a4cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64cd328054ab087e6c15e3183d94249345ff04f26e7057baa307d7f0e5a4cac->enter($__internal_a64cd328054ab087e6c15e3183d94249345ff04f26e7057baa307d7f0e5a4cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/enseignant.html.twig"));

        $__internal_13f35dc8b44c063a52223ce052bbbec911f4489c66213bfa42776b8c5b360ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f35dc8b44c063a52223ce052bbbec911f4489c66213bfa42776b8c5b360ea3->enter($__internal_13f35dc8b44c063a52223ce052bbbec911f4489c66213bfa42776b8c5b360ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/enseignant.html.twig"));

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
        
        $__internal_a64cd328054ab087e6c15e3183d94249345ff04f26e7057baa307d7f0e5a4cac->leave($__internal_a64cd328054ab087e6c15e3183d94249345ff04f26e7057baa307d7f0e5a4cac_prof);

        
        $__internal_13f35dc8b44c063a52223ce052bbbec911f4489c66213bfa42776b8c5b360ea3->leave($__internal_13f35dc8b44c063a52223ce052bbbec911f4489c66213bfa42776b8c5b360ea3_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/enseignant.html.twig";
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
", "enseignantsViews/enseignant.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\enseignantsViews\\enseignant.html.twig");
    }
}
