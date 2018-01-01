<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_da550f4183ee6ef35f2279ecf89f49d39edf9fd7d8bbc619a8e8b64712bd3edd extends Twig_Template
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
        $__internal_979c643194e60eeee695b9a8193b808fc13a626ac78b3edd2ac10d30a4016d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979c643194e60eeee695b9a8193b808fc13a626ac78b3edd2ac10d30a4016d8f->enter($__internal_979c643194e60eeee695b9a8193b808fc13a626ac78b3edd2ac10d30a4016d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b887c7294648e5bf831e85437502d13dc4bcd3bc4f29af6e3f085db5e25a5f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b887c7294648e5bf831e85437502d13dc4bcd3bc4f29af6e3f085db5e25a5f07->enter($__internal_b887c7294648e5bf831e85437502d13dc4bcd3bc4f29af6e3f085db5e25a5f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_979c643194e60eeee695b9a8193b808fc13a626ac78b3edd2ac10d30a4016d8f->leave($__internal_979c643194e60eeee695b9a8193b808fc13a626ac78b3edd2ac10d30a4016d8f_prof);

        
        $__internal_b887c7294648e5bf831e85437502d13dc4bcd3bc4f29af6e3f085db5e25a5f07->leave($__internal_b887c7294648e5bf831e85437502d13dc4bcd3bc4f29af6e3f085db5e25a5f07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
