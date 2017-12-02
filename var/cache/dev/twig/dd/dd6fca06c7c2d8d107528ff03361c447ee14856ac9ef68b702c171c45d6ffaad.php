<?php

/* PaymentBundle:Default:index.html.twig */
class __TwigTemplate_0d24431cb2ed05d84b544a48c5daea44f49b5852a942dbec77068dbb8ca576c3 extends Twig_Template
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
        $__internal_95dd52f4d7743f79461efb92d5a661a729bae93a340fa5f9113c4264f1a302f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95dd52f4d7743f79461efb92d5a661a729bae93a340fa5f9113c4264f1a302f9->enter($__internal_95dd52f4d7743f79461efb92d5a661a729bae93a340fa5f9113c4264f1a302f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaymentBundle:Default:index.html.twig"));

        $__internal_3335ed44a26ade799b28157bccb68fe9cfb87598ecefe66d4a77d773dfb380dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3335ed44a26ade799b28157bccb68fe9cfb87598ecefe66d4a77d773dfb380dd->enter($__internal_3335ed44a26ade799b28157bccb68fe9cfb87598ecefe66d4a77d773dfb380dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaymentBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_95dd52f4d7743f79461efb92d5a661a729bae93a340fa5f9113c4264f1a302f9->leave($__internal_95dd52f4d7743f79461efb92d5a661a729bae93a340fa5f9113c4264f1a302f9_prof);

        
        $__internal_3335ed44a26ade799b28157bccb68fe9cfb87598ecefe66d4a77d773dfb380dd->leave($__internal_3335ed44a26ade799b28157bccb68fe9cfb87598ecefe66d4a77d773dfb380dd_prof);

    }

    public function getTemplateName()
    {
        return "PaymentBundle:Default:index.html.twig";
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
", "PaymentBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/src/PaymentBundle/Resources/views/Default/index.html.twig");
    }
}
