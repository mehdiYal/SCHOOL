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
        $__internal_cbe38bc45cd8878a8f68d2eeaa7963cb194ad338161f93c83899dbe0c608c699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe38bc45cd8878a8f68d2eeaa7963cb194ad338161f93c83899dbe0c608c699->enter($__internal_cbe38bc45cd8878a8f68d2eeaa7963cb194ad338161f93c83899dbe0c608c699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        $__internal_dd28f0c2b905425798526261d9c2fc9cd96f4304084f4653d277bc8d604739fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd28f0c2b905425798526261d9c2fc9cd96f4304084f4653d277bc8d604739fa->enter($__internal_dd28f0c2b905425798526261d9c2fc9cd96f4304084f4653d277bc8d604739fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_cbe38bc45cd8878a8f68d2eeaa7963cb194ad338161f93c83899dbe0c608c699->leave($__internal_cbe38bc45cd8878a8f68d2eeaa7963cb194ad338161f93c83899dbe0c608c699_prof);

        
        $__internal_dd28f0c2b905425798526261d9c2fc9cd96f4304084f4653d277bc8d604739fa->leave($__internal_dd28f0c2b905425798526261d9c2fc9cd96f4304084f4653d277bc8d604739fa_prof);

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
", "SchoolBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/src/SchoolBundle/Resources/views/Default/index.html.twig");
    }
}
