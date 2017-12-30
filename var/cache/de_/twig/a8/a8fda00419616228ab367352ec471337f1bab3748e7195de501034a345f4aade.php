<?php

/* parentsViews/parent.html.twig */
class __TwigTemplate_e59d10e982db4cbaf907185d0f26ca35a12ecd08b66b9c5e1ca715109878b4f0 extends Twig_Template
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
        $__internal_0cd8272e5fe2fc2c22f9b56f3709c6c56d79ad6d4d77d39c47e65ac91d651aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd8272e5fe2fc2c22f9b56f3709c6c56d79ad6d4d77d39c47e65ac91d651aa3->enter($__internal_0cd8272e5fe2fc2c22f9b56f3709c6c56d79ad6d4d77d39c47e65ac91d651aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/parent.html.twig"));

        $__internal_3eba0e1ab02696753af31c7c49fa334eb741a08534bb8b3b2846e315c74b76d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eba0e1ab02696753af31c7c49fa334eb741a08534bb8b3b2846e315c74b76d4->enter($__internal_3eba0e1ab02696753af31c7c49fa334eb741a08534bb8b3b2846e315c74b76d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/parent.html.twig"));

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
        
        $__internal_0cd8272e5fe2fc2c22f9b56f3709c6c56d79ad6d4d77d39c47e65ac91d651aa3->leave($__internal_0cd8272e5fe2fc2c22f9b56f3709c6c56d79ad6d4d77d39c47e65ac91d651aa3_prof);

        
        $__internal_3eba0e1ab02696753af31c7c49fa334eb741a08534bb8b3b2846e315c74b76d4->leave($__internal_3eba0e1ab02696753af31c7c49fa334eb741a08534bb8b3b2846e315c74b76d4_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/parent.html.twig";
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
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", "parentsViews/parent.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\parentsViews\\parent.html.twig");
    }
}
