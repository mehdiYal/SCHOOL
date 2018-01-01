<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b5ebb27c52895277e7ee38c38435c4a4aa772fddbbe6af7332aa55d4ff73da1c extends Twig_Template
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
        $__internal_b3bf480c144bb24c6f2e0149571050347b476af4efce1ddc00bf5ca137c8078d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bf480c144bb24c6f2e0149571050347b476af4efce1ddc00bf5ca137c8078d->enter($__internal_b3bf480c144bb24c6f2e0149571050347b476af4efce1ddc00bf5ca137c8078d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_56f123efe79fe815275dc32619a9b1c3333e55ee663f9a29c88602885d8077e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f123efe79fe815275dc32619a9b1c3333e55ee663f9a29c88602885d8077e0->enter($__internal_56f123efe79fe815275dc32619a9b1c3333e55ee663f9a29c88602885d8077e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b3bf480c144bb24c6f2e0149571050347b476af4efce1ddc00bf5ca137c8078d->leave($__internal_b3bf480c144bb24c6f2e0149571050347b476af4efce1ddc00bf5ca137c8078d_prof);

        
        $__internal_56f123efe79fe815275dc32619a9b1c3333e55ee663f9a29c88602885d8077e0->leave($__internal_56f123efe79fe815275dc32619a9b1c3333e55ee663f9a29c88602885d8077e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
