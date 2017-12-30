<?php

/* :enseignantsViews:enseignant.html.twig */
class __TwigTemplate_84caaf51864a5351576d797647200f1b3d8b1b5db750ef401b26facd93c84a77 extends Twig_Template
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
        $__internal_0c261779a4e53390a96d645ba555306207d685beae51458ae078ce0f138008ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c261779a4e53390a96d645ba555306207d685beae51458ae078ce0f138008ac->enter($__internal_0c261779a4e53390a96d645ba555306207d685beae51458ae078ce0f138008ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        $__internal_98a411120f0e5c1dfa9ee8ce69ea86ff82a96b8bbd86ebef4f233e7669c05e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a411120f0e5c1dfa9ee8ce69ea86ff82a96b8bbd86ebef4f233e7669c05e09->enter($__internal_98a411120f0e5c1dfa9ee8ce69ea86ff82a96b8bbd86ebef4f233e7669c05e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

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
        
        $__internal_0c261779a4e53390a96d645ba555306207d685beae51458ae078ce0f138008ac->leave($__internal_0c261779a4e53390a96d645ba555306207d685beae51458ae078ce0f138008ac_prof);

        
        $__internal_98a411120f0e5c1dfa9ee8ce69ea86ff82a96b8bbd86ebef4f233e7669c05e09->leave($__internal_98a411120f0e5c1dfa9ee8ce69ea86ff82a96b8bbd86ebef4f233e7669c05e09_prof);

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
", ":enseignantsViews:enseignant.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/enseignantsViews/enseignant.html.twig");
    }
}
