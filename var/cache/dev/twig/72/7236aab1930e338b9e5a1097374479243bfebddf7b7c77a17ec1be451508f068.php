<?php

/* SchoolBundle:Default:index.html.twig */
class __TwigTemplate_136a17ea5ee39cc86fb54faa68ac8c8d01157d90a7cda8c201e3ef29e2f3ee87 extends Twig_Template
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
        $__internal_b646bde44abc10f6bad41c36f38ec959d03e4f3553ddb587d562cd681cb1b95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b646bde44abc10f6bad41c36f38ec959d03e4f3553ddb587d562cd681cb1b95d->enter($__internal_b646bde44abc10f6bad41c36f38ec959d03e4f3553ddb587d562cd681cb1b95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        $__internal_1b92aa27b1858db2d60013a565f1b378602492ee6388f308738f3aba866f5f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b92aa27b1858db2d60013a565f1b378602492ee6388f308738f3aba866f5f41->enter($__internal_1b92aa27b1858db2d60013a565f1b378602492ee6388f308738f3aba866f5f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_b646bde44abc10f6bad41c36f38ec959d03e4f3553ddb587d562cd681cb1b95d->leave($__internal_b646bde44abc10f6bad41c36f38ec959d03e4f3553ddb587d562cd681cb1b95d_prof);

        
        $__internal_1b92aa27b1858db2d60013a565f1b378602492ee6388f308738f3aba866f5f41->leave($__internal_1b92aa27b1858db2d60013a565f1b378602492ee6388f308738f3aba866f5f41_prof);

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
