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
        $__internal_8b4895271be33ad7c6d52d692e04696b2cacac912258797d0cf0387a46288174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4895271be33ad7c6d52d692e04696b2cacac912258797d0cf0387a46288174->enter($__internal_8b4895271be33ad7c6d52d692e04696b2cacac912258797d0cf0387a46288174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        $__internal_8c876c445dc9352b0944f7605b74ba0bb9b3c8645b4142b410c6f2e4049231b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c876c445dc9352b0944f7605b74ba0bb9b3c8645b4142b410c6f2e4049231b0->enter($__internal_8c876c445dc9352b0944f7605b74ba0bb9b3c8645b4142b410c6f2e4049231b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

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
        
        $__internal_8b4895271be33ad7c6d52d692e04696b2cacac912258797d0cf0387a46288174->leave($__internal_8b4895271be33ad7c6d52d692e04696b2cacac912258797d0cf0387a46288174_prof);

        
        $__internal_8c876c445dc9352b0944f7605b74ba0bb9b3c8645b4142b410c6f2e4049231b0->leave($__internal_8c876c445dc9352b0944f7605b74ba0bb9b3c8645b4142b410c6f2e4049231b0_prof);

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
