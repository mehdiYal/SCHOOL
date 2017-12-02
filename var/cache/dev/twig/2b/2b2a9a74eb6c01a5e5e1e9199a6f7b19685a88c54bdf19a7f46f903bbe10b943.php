<?php

/* :enseignantsViews:enseignant.html.twig */
class __TwigTemplate_8f8822dd60787f2f41874a8d930689e221c3d4dc2871ed75d60a84fddfa26b33 extends Twig_Template
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
        $__internal_f6732142e22dd19b11e840f91ae8a1e06d128816bfaf3683d26592c589a752a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6732142e22dd19b11e840f91ae8a1e06d128816bfaf3683d26592c589a752a7->enter($__internal_f6732142e22dd19b11e840f91ae8a1e06d128816bfaf3683d26592c589a752a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        $__internal_3266839fa06c60385eba3514f18f698c67bfcb742a80abc2fb157e76fdd5ee5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3266839fa06c60385eba3514f18f698c67bfcb742a80abc2fb157e76fdd5ee5f->enter($__internal_3266839fa06c60385eba3514f18f698c67bfcb742a80abc2fb157e76fdd5ee5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

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
        
        $__internal_f6732142e22dd19b11e840f91ae8a1e06d128816bfaf3683d26592c589a752a7->leave($__internal_f6732142e22dd19b11e840f91ae8a1e06d128816bfaf3683d26592c589a752a7_prof);

        
        $__internal_3266839fa06c60385eba3514f18f698c67bfcb742a80abc2fb157e76fdd5ee5f->leave($__internal_3266839fa06c60385eba3514f18f698c67bfcb742a80abc2fb157e76fdd5ee5f_prof);

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
