<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_88c720639f2a9ed5232ef77712eddd2510f62e96d4abcd79de26b460d780c0e9 extends Twig_Template
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
        $__internal_76149458f753630f5c70f7570e8c41383d6b89f9fab6e22abc876762a61a914d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76149458f753630f5c70f7570e8c41383d6b89f9fab6e22abc876762a61a914d->enter($__internal_76149458f753630f5c70f7570e8c41383d6b89f9fab6e22abc876762a61a914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7c8e967eaa1ae88031769f6b08a091a6a22541eb4c20aa8c824cd6c799941c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8e967eaa1ae88031769f6b08a091a6a22541eb4c20aa8c824cd6c799941c6b->enter($__internal_7c8e967eaa1ae88031769f6b08a091a6a22541eb4c20aa8c824cd6c799941c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_76149458f753630f5c70f7570e8c41383d6b89f9fab6e22abc876762a61a914d->leave($__internal_76149458f753630f5c70f7570e8c41383d6b89f9fab6e22abc876762a61a914d_prof);

        
        $__internal_7c8e967eaa1ae88031769f6b08a091a6a22541eb4c20aa8c824cd6c799941c6b->leave($__internal_7c8e967eaa1ae88031769f6b08a091a6a22541eb4c20aa8c824cd6c799941c6b_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
