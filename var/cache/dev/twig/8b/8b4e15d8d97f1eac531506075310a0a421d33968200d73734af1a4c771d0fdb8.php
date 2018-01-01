<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f423ded1251fd19c3bb4f5b9f3ec68fef2d7334c74853cb449603e0746daf82b extends Twig_Template
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
        $__internal_e40e65b85e636048c6eda254b4a2c58cd5cd070623d1fd2096fbf1b39c2ed7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40e65b85e636048c6eda254b4a2c58cd5cd070623d1fd2096fbf1b39c2ed7c9->enter($__internal_e40e65b85e636048c6eda254b4a2c58cd5cd070623d1fd2096fbf1b39c2ed7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_1c12e329d9c74e14299f814881e7ff80bb74ea9ebab56995b2545531d9a25283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c12e329d9c74e14299f814881e7ff80bb74ea9ebab56995b2545531d9a25283->enter($__internal_1c12e329d9c74e14299f814881e7ff80bb74ea9ebab56995b2545531d9a25283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e40e65b85e636048c6eda254b4a2c58cd5cd070623d1fd2096fbf1b39c2ed7c9->leave($__internal_e40e65b85e636048c6eda254b4a2c58cd5cd070623d1fd2096fbf1b39c2ed7c9_prof);

        
        $__internal_1c12e329d9c74e14299f814881e7ff80bb74ea9ebab56995b2545531d9a25283->leave($__internal_1c12e329d9c74e14299f814881e7ff80bb74ea9ebab56995b2545531d9a25283_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
