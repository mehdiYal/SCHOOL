<?php

/* :parentsViews:parent.html.twig */
class __TwigTemplate_e284ca3890028ef2e1cd793f8eaaaca88a331c986bd537c74ae60bdf9dea6711 extends Twig_Template
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
        $__internal_7130543dbffd60ea0cc6b6f9d23fb9d096706c4424d87db29be5df5ae82c2713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7130543dbffd60ea0cc6b6f9d23fb9d096706c4424d87db29be5df5ae82c2713->enter($__internal_7130543dbffd60ea0cc6b6f9d23fb9d096706c4424d87db29be5df5ae82c2713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        $__internal_7f56a53ad967bd5bb039f0857d8c22ce963ffb856963888345f2e0cc0b3447e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f56a53ad967bd5bb039f0857d8c22ce963ffb856963888345f2e0cc0b3447e6->enter($__internal_7f56a53ad967bd5bb039f0857d8c22ce963ffb856963888345f2e0cc0b3447e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

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
        
        $__internal_7130543dbffd60ea0cc6b6f9d23fb9d096706c4424d87db29be5df5ae82c2713->leave($__internal_7130543dbffd60ea0cc6b6f9d23fb9d096706c4424d87db29be5df5ae82c2713_prof);

        
        $__internal_7f56a53ad967bd5bb039f0857d8c22ce963ffb856963888345f2e0cc0b3447e6->leave($__internal_7f56a53ad967bd5bb039f0857d8c22ce963ffb856963888345f2e0cc0b3447e6_prof);

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
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", ":parentsViews:parent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/parentsViews/parent.html.twig");
    }
}
