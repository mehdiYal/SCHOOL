<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4a2e1187368a9b6ded589cdac028c772101227fe92e1cb3665726aafc0d123db extends Twig_Template
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
        $__internal_c986013bd97a745f7f3ac825582241c3da1d03d256d8423f6c039923148962a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c986013bd97a745f7f3ac825582241c3da1d03d256d8423f6c039923148962a9->enter($__internal_c986013bd97a745f7f3ac825582241c3da1d03d256d8423f6c039923148962a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1b00e34eeacaebcf165784bd7ea2a8f570fcab303e6266b2c56590d88935aee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b00e34eeacaebcf165784bd7ea2a8f570fcab303e6266b2c56590d88935aee3->enter($__internal_1b00e34eeacaebcf165784bd7ea2a8f570fcab303e6266b2c56590d88935aee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c986013bd97a745f7f3ac825582241c3da1d03d256d8423f6c039923148962a9->leave($__internal_c986013bd97a745f7f3ac825582241c3da1d03d256d8423f6c039923148962a9_prof);

        
        $__internal_1b00e34eeacaebcf165784bd7ea2a8f570fcab303e6266b2c56590d88935aee3->leave($__internal_1b00e34eeacaebcf165784bd7ea2a8f570fcab303e6266b2c56590d88935aee3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
