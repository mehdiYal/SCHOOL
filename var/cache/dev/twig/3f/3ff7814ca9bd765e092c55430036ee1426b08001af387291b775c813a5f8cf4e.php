<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2737ae4ca8ab0b632fb1fea27043503e5c31b3a6b4894c8f53dac3b88b282023 extends Twig_Template
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
        $__internal_e182f6614056f63c9d4f0f709421b919099d5f82961a88be548dd3ceb05c93dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e182f6614056f63c9d4f0f709421b919099d5f82961a88be548dd3ceb05c93dc->enter($__internal_e182f6614056f63c9d4f0f709421b919099d5f82961a88be548dd3ceb05c93dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_cb81d6b05880d8f15f22891d4c0208b98f4e182d3325a79b70e7c731b3a870e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb81d6b05880d8f15f22891d4c0208b98f4e182d3325a79b70e7c731b3a870e8->enter($__internal_cb81d6b05880d8f15f22891d4c0208b98f4e182d3325a79b70e7c731b3a870e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e182f6614056f63c9d4f0f709421b919099d5f82961a88be548dd3ceb05c93dc->leave($__internal_e182f6614056f63c9d4f0f709421b919099d5f82961a88be548dd3ceb05c93dc_prof);

        
        $__internal_cb81d6b05880d8f15f22891d4c0208b98f4e182d3325a79b70e7c731b3a870e8->leave($__internal_cb81d6b05880d8f15f22891d4c0208b98f4e182d3325a79b70e7c731b3a870e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
