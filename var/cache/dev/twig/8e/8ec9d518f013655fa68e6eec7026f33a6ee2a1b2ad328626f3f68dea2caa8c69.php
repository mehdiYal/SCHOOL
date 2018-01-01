<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e48c9128b9b6c9c5afc94045df4ad5058bf7d368c3136b7e34db74f17e3231ea extends Twig_Template
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
        $__internal_f8bf10491d5f7d2da5cfa21fa0c272f5426518b38a3d289e8e9aece236400e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8bf10491d5f7d2da5cfa21fa0c272f5426518b38a3d289e8e9aece236400e0a->enter($__internal_f8bf10491d5f7d2da5cfa21fa0c272f5426518b38a3d289e8e9aece236400e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2e40cf4504958e3e552d571fdc25847eac113a472b521c442760efa8ccf59d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e40cf4504958e3e552d571fdc25847eac113a472b521c442760efa8ccf59d1d->enter($__internal_2e40cf4504958e3e552d571fdc25847eac113a472b521c442760efa8ccf59d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f8bf10491d5f7d2da5cfa21fa0c272f5426518b38a3d289e8e9aece236400e0a->leave($__internal_f8bf10491d5f7d2da5cfa21fa0c272f5426518b38a3d289e8e9aece236400e0a_prof);

        
        $__internal_2e40cf4504958e3e552d571fdc25847eac113a472b521c442760efa8ccf59d1d->leave($__internal_2e40cf4504958e3e552d571fdc25847eac113a472b521c442760efa8ccf59d1d_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
