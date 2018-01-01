<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7d9d6d41afc8e8e37bb88220bf3a1e36e336cc1127744655cff5501e48396ef5 extends Twig_Template
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
        $__internal_4f453cc90547110aa99c99eb7ed977e1378e558adf33395a1622c83e71d37a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f453cc90547110aa99c99eb7ed977e1378e558adf33395a1622c83e71d37a32->enter($__internal_4f453cc90547110aa99c99eb7ed977e1378e558adf33395a1622c83e71d37a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f9ffdd30f26a9cb02be4b5a2ab0ab20654c44ad563f51559a092c464081b86ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ffdd30f26a9cb02be4b5a2ab0ab20654c44ad563f51559a092c464081b86ea->enter($__internal_f9ffdd30f26a9cb02be4b5a2ab0ab20654c44ad563f51559a092c464081b86ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4f453cc90547110aa99c99eb7ed977e1378e558adf33395a1622c83e71d37a32->leave($__internal_4f453cc90547110aa99c99eb7ed977e1378e558adf33395a1622c83e71d37a32_prof);

        
        $__internal_f9ffdd30f26a9cb02be4b5a2ab0ab20654c44ad563f51559a092c464081b86ea->leave($__internal_f9ffdd30f26a9cb02be4b5a2ab0ab20654c44ad563f51559a092c464081b86ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
