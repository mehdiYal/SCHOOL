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
        $__internal_3b0f24f34276afc10229e5ba623c699901f4f8046c8ceaf72957117cbe5bc092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0f24f34276afc10229e5ba623c699901f4f8046c8ceaf72957117cbe5bc092->enter($__internal_3b0f24f34276afc10229e5ba623c699901f4f8046c8ceaf72957117cbe5bc092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        $__internal_91939018d391b2e933c338a13dece468490e06a83dff4c2ed552bdcf3a7d03b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91939018d391b2e933c338a13dece468490e06a83dff4c2ed552bdcf3a7d03b7->enter($__internal_91939018d391b2e933c338a13dece468490e06a83dff4c2ed552bdcf3a7d03b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3b0f24f34276afc10229e5ba623c699901f4f8046c8ceaf72957117cbe5bc092->leave($__internal_3b0f24f34276afc10229e5ba623c699901f4f8046c8ceaf72957117cbe5bc092_prof);

        
        $__internal_91939018d391b2e933c338a13dece468490e06a83dff4c2ed552bdcf3a7d03b7->leave($__internal_91939018d391b2e933c338a13dece468490e06a83dff4c2ed552bdcf3a7d03b7_prof);

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
