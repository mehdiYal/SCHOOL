<?php

/* SchoolBundle:Default:index.html.twig */
class __TwigTemplate_1d983b8ccc2709b34bdebd5b5482658036ca33e8e2531acb67bce42c57d8a81e extends Twig_Template
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
        $__internal_20a4b57ccc4a5e5aa726e37bfe38be44f0147b93897247aace5fa3a07df79408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a4b57ccc4a5e5aa726e37bfe38be44f0147b93897247aace5fa3a07df79408->enter($__internal_20a4b57ccc4a5e5aa726e37bfe38be44f0147b93897247aace5fa3a07df79408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        $__internal_4a8cb5e4316325d10d8d0240fa1153446388ad26491d021990146d270f78587a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8cb5e4316325d10d8d0240fa1153446388ad26491d021990146d270f78587a->enter($__internal_4a8cb5e4316325d10d8d0240fa1153446388ad26491d021990146d270f78587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_20a4b57ccc4a5e5aa726e37bfe38be44f0147b93897247aace5fa3a07df79408->leave($__internal_20a4b57ccc4a5e5aa726e37bfe38be44f0147b93897247aace5fa3a07df79408_prof);

        
        $__internal_4a8cb5e4316325d10d8d0240fa1153446388ad26491d021990146d270f78587a->leave($__internal_4a8cb5e4316325d10d8d0240fa1153446388ad26491d021990146d270f78587a_prof);

    }

    public function getTemplateName()
    {
        return "SchoolBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "SchoolBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Schoolium/src/SchoolBundle/Resources/views/Default/index.html.twig");
    }
}
