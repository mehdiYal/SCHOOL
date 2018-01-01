<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5381cf77231d24b7d4b091669e16166f2c642bb0bdb5642c3533597534b4e086 extends Twig_Template
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
        $__internal_37b59818a612a2691e016b1bb4831299229f36c3c35431f64b15d5168ff827fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b59818a612a2691e016b1bb4831299229f36c3c35431f64b15d5168ff827fe->enter($__internal_37b59818a612a2691e016b1bb4831299229f36c3c35431f64b15d5168ff827fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_79fcc6d7c8c92c0a44b3f9325340cf2b64cdebc9e4ffc0c5954ab0751a5039e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fcc6d7c8c92c0a44b3f9325340cf2b64cdebc9e4ffc0c5954ab0751a5039e8->enter($__internal_79fcc6d7c8c92c0a44b3f9325340cf2b64cdebc9e4ffc0c5954ab0751a5039e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_37b59818a612a2691e016b1bb4831299229f36c3c35431f64b15d5168ff827fe->leave($__internal_37b59818a612a2691e016b1bb4831299229f36c3c35431f64b15d5168ff827fe_prof);

        
        $__internal_79fcc6d7c8c92c0a44b3f9325340cf2b64cdebc9e4ffc0c5954ab0751a5039e8->leave($__internal_79fcc6d7c8c92c0a44b3f9325340cf2b64cdebc9e4ffc0c5954ab0751a5039e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
