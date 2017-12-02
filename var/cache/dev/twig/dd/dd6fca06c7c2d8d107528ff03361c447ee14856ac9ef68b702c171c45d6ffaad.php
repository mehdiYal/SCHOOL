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
        $__internal_86c18e6da6c817c6fea29454f5b8cf085b7785f1c174b4fa06b674917a3bfe4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c18e6da6c817c6fea29454f5b8cf085b7785f1c174b4fa06b674917a3bfe4e->enter($__internal_86c18e6da6c817c6fea29454f5b8cf085b7785f1c174b4fa06b674917a3bfe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaymentBundle:Default:index.html.twig"));

        $__internal_d5b0b7b1d0aeee48030d80bbfa6c763ed209d9e52c0e21c8aa96085462cbf19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b0b7b1d0aeee48030d80bbfa6c763ed209d9e52c0e21c8aa96085462cbf19f->enter($__internal_d5b0b7b1d0aeee48030d80bbfa6c763ed209d9e52c0e21c8aa96085462cbf19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaymentBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_86c18e6da6c817c6fea29454f5b8cf085b7785f1c174b4fa06b674917a3bfe4e->leave($__internal_86c18e6da6c817c6fea29454f5b8cf085b7785f1c174b4fa06b674917a3bfe4e_prof);

        
        $__internal_d5b0b7b1d0aeee48030d80bbfa6c763ed209d9e52c0e21c8aa96085462cbf19f->leave($__internal_d5b0b7b1d0aeee48030d80bbfa6c763ed209d9e52c0e21c8aa96085462cbf19f_prof);

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
", "PaymentBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Schoolium/src/PaymentBundle/Resources/views/Default/index.html.twig");
    }
}
