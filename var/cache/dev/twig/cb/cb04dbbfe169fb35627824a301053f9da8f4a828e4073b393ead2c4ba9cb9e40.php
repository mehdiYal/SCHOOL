<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_86750157d0519fd72a3db7fd920c36d99a656614ab5aeb5da0af2fc58ff41c7b extends Twig_Template
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
        $__internal_0c5a953d36b89db9e42d7f96e6188df6158217a1cdb8d312f7bcd5a2697678fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5a953d36b89db9e42d7f96e6188df6158217a1cdb8d312f7bcd5a2697678fe->enter($__internal_0c5a953d36b89db9e42d7f96e6188df6158217a1cdb8d312f7bcd5a2697678fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_6811c5ce6a2271404e88df3e6292dd448f43c09bff9a32f82498a01aae0453f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6811c5ce6a2271404e88df3e6292dd448f43c09bff9a32f82498a01aae0453f7->enter($__internal_6811c5ce6a2271404e88df3e6292dd448f43c09bff9a32f82498a01aae0453f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0c5a953d36b89db9e42d7f96e6188df6158217a1cdb8d312f7bcd5a2697678fe->leave($__internal_0c5a953d36b89db9e42d7f96e6188df6158217a1cdb8d312f7bcd5a2697678fe_prof);

        
        $__internal_6811c5ce6a2271404e88df3e6292dd448f43c09bff9a32f82498a01aae0453f7->leave($__internal_6811c5ce6a2271404e88df3e6292dd448f43c09bff9a32f82498a01aae0453f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
