<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_97764e27f893ac18923b7b03cfe126061af3f211891b1af41fb5e388994846c8 extends Twig_Template
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
        $__internal_ba662a0c88d5993e0057622ee3387ded92a8eaa919cd9a51a4e9ecea7681dc11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba662a0c88d5993e0057622ee3387ded92a8eaa919cd9a51a4e9ecea7681dc11->enter($__internal_ba662a0c88d5993e0057622ee3387ded92a8eaa919cd9a51a4e9ecea7681dc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_05cf22ebc9ea9e25dfe6f79072cab02dcf7cf67fa6e1323642212540e4400184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cf22ebc9ea9e25dfe6f79072cab02dcf7cf67fa6e1323642212540e4400184->enter($__internal_05cf22ebc9ea9e25dfe6f79072cab02dcf7cf67fa6e1323642212540e4400184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ba662a0c88d5993e0057622ee3387ded92a8eaa919cd9a51a4e9ecea7681dc11->leave($__internal_ba662a0c88d5993e0057622ee3387ded92a8eaa919cd9a51a4e9ecea7681dc11_prof);

        
        $__internal_05cf22ebc9ea9e25dfe6f79072cab02dcf7cf67fa6e1323642212540e4400184->leave($__internal_05cf22ebc9ea9e25dfe6f79072cab02dcf7cf67fa6e1323642212540e4400184_prof);

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
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
