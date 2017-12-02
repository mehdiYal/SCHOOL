<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_06bf7abd870e59d0b825b8a9b67d0560509d1c88830d6753364528aec4b616e7 extends Twig_Template
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
        $__internal_1df8d004cafb5c6f4e5d77edfb18962f49b38258b490d415bae869d54d1ac0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df8d004cafb5c6f4e5d77edfb18962f49b38258b490d415bae869d54d1ac0a8->enter($__internal_1df8d004cafb5c6f4e5d77edfb18962f49b38258b490d415bae869d54d1ac0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1ac8b43d0d851102a73723ccc4709f051dbe415c355db9db61aefe16a2e7c0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac8b43d0d851102a73723ccc4709f051dbe415c355db9db61aefe16a2e7c0f9->enter($__internal_1ac8b43d0d851102a73723ccc4709f051dbe415c355db9db61aefe16a2e7c0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1df8d004cafb5c6f4e5d77edfb18962f49b38258b490d415bae869d54d1ac0a8->leave($__internal_1df8d004cafb5c6f4e5d77edfb18962f49b38258b490d415bae869d54d1ac0a8_prof);

        
        $__internal_1ac8b43d0d851102a73723ccc4709f051dbe415c355db9db61aefe16a2e7c0f9->leave($__internal_1ac8b43d0d851102a73723ccc4709f051dbe415c355db9db61aefe16a2e7c0f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
