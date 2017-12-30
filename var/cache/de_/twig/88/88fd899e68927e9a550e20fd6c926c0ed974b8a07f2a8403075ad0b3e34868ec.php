<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac198e66f14758c76d4a808978e181ce9116eeab057a3d103784365913ec9761 extends Twig_Template
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
        $__internal_ad6bdcf2eefcf1f79e8abbf33252bd98dc4c5cf5063a898211ffbf2bc0c06ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6bdcf2eefcf1f79e8abbf33252bd98dc4c5cf5063a898211ffbf2bc0c06ed0->enter($__internal_ad6bdcf2eefcf1f79e8abbf33252bd98dc4c5cf5063a898211ffbf2bc0c06ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7ff04947c501407a76bb2c7d4dfc3c0e78a1d1b2719a3b13cb20f108558dd294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff04947c501407a76bb2c7d4dfc3c0e78a1d1b2719a3b13cb20f108558dd294->enter($__internal_7ff04947c501407a76bb2c7d4dfc3c0e78a1d1b2719a3b13cb20f108558dd294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ad6bdcf2eefcf1f79e8abbf33252bd98dc4c5cf5063a898211ffbf2bc0c06ed0->leave($__internal_ad6bdcf2eefcf1f79e8abbf33252bd98dc4c5cf5063a898211ffbf2bc0c06ed0_prof);

        
        $__internal_7ff04947c501407a76bb2c7d4dfc3c0e78a1d1b2719a3b13cb20f108558dd294->leave($__internal_7ff04947c501407a76bb2c7d4dfc3c0e78a1d1b2719a3b13cb20f108558dd294_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
