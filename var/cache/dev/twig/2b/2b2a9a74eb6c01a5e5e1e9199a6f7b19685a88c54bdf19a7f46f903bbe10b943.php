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
        $__internal_5d091902503f4e905a23017dc0c34d381bbc696491e31171471e52f43fd7b1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d091902503f4e905a23017dc0c34d381bbc696491e31171471e52f43fd7b1d8->enter($__internal_5d091902503f4e905a23017dc0c34d381bbc696491e31171471e52f43fd7b1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        $__internal_a5c4d2709daa8f57db91d0e582a39b87a5cf589abc6ebcb3fc1b2900f7b55dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c4d2709daa8f57db91d0e582a39b87a5cf589abc6ebcb3fc1b2900f7b55dce->enter($__internal_a5c4d2709daa8f57db91d0e582a39b87a5cf589abc6ebcb3fc1b2900f7b55dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        // line 1
        echo " <li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
";
        
        $__internal_5d091902503f4e905a23017dc0c34d381bbc696491e31171471e52f43fd7b1d8->leave($__internal_5d091902503f4e905a23017dc0c34d381bbc696491e31171471e52f43fd7b1d8_prof);

        
        $__internal_a5c4d2709daa8f57db91d0e582a39b87a5cf589abc6ebcb3fc1b2900f7b55dce->leave($__internal_a5c4d2709daa8f57db91d0e582a39b87a5cf589abc6ebcb3fc1b2900f7b55dce_prof);

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
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>
", ":enseignantsViews:enseignant.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/enseignantsViews/enseignant.html.twig");
    }
}
