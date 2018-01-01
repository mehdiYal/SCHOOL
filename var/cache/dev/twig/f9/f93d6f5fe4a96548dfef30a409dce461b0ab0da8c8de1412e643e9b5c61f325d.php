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
        $__internal_061d4f478f98b9d0731c7a95b1694719afc46b9ef603998cedf879498048ddb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061d4f478f98b9d0731c7a95b1694719afc46b9ef603998cedf879498048ddb4->enter($__internal_061d4f478f98b9d0731c7a95b1694719afc46b9ef603998cedf879498048ddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5a0c24d7d67fe0cf20afccbebd60cc987d53e7d19921b97e282efeda4bd2e1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0c24d7d67fe0cf20afccbebd60cc987d53e7d19921b97e282efeda4bd2e1c5->enter($__internal_5a0c24d7d67fe0cf20afccbebd60cc987d53e7d19921b97e282efeda4bd2e1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_061d4f478f98b9d0731c7a95b1694719afc46b9ef603998cedf879498048ddb4->leave($__internal_061d4f478f98b9d0731c7a95b1694719afc46b9ef603998cedf879498048ddb4_prof);

        
        $__internal_5a0c24d7d67fe0cf20afccbebd60cc987d53e7d19921b97e282efeda4bd2e1c5->leave($__internal_5a0c24d7d67fe0cf20afccbebd60cc987d53e7d19921b97e282efeda4bd2e1c5_prof);

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
