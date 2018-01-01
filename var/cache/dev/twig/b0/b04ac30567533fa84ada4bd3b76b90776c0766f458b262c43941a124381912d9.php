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
        $__internal_ade32246a1735438e1b1b28f22dba140e8b0dcac59740c68b8f4acb978f7ce51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade32246a1735438e1b1b28f22dba140e8b0dcac59740c68b8f4acb978f7ce51->enter($__internal_ade32246a1735438e1b1b28f22dba140e8b0dcac59740c68b8f4acb978f7ce51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_7e2ddf7cc506a5852a44519679719b6762bda0d96f83554c1337860a837f2c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2ddf7cc506a5852a44519679719b6762bda0d96f83554c1337860a837f2c46->enter($__internal_7e2ddf7cc506a5852a44519679719b6762bda0d96f83554c1337860a837f2c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ade32246a1735438e1b1b28f22dba140e8b0dcac59740c68b8f4acb978f7ce51->leave($__internal_ade32246a1735438e1b1b28f22dba140e8b0dcac59740c68b8f4acb978f7ce51_prof);

        
        $__internal_7e2ddf7cc506a5852a44519679719b6762bda0d96f83554c1337860a837f2c46->leave($__internal_7e2ddf7cc506a5852a44519679719b6762bda0d96f83554c1337860a837f2c46_prof);

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
