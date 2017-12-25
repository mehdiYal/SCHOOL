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
        $__internal_d05d5afa0566e1502857403b856cc19923423410fbf96b5fe8fac9554007797b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05d5afa0566e1502857403b856cc19923423410fbf96b5fe8fac9554007797b->enter($__internal_d05d5afa0566e1502857403b856cc19923423410fbf96b5fe8fac9554007797b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaymentBundle:Default:index.html.twig"));

        $__internal_cd9cd125b4d5bbabe58178413ea9df40281aeb1a58f08e128d1846c480b5601f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9cd125b4d5bbabe58178413ea9df40281aeb1a58f08e128d1846c480b5601f->enter($__internal_cd9cd125b4d5bbabe58178413ea9df40281aeb1a58f08e128d1846c480b5601f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaymentBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d05d5afa0566e1502857403b856cc19923423410fbf96b5fe8fac9554007797b->leave($__internal_d05d5afa0566e1502857403b856cc19923423410fbf96b5fe8fac9554007797b_prof);

        
        $__internal_cd9cd125b4d5bbabe58178413ea9df40281aeb1a58f08e128d1846c480b5601f->leave($__internal_cd9cd125b4d5bbabe58178413ea9df40281aeb1a58f08e128d1846c480b5601f_prof);

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
