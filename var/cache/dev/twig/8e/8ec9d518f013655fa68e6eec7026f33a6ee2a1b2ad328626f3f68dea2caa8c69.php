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
        $__internal_1a5760eb487749d0f22d83f60c92ce1983d6011f4941adced4547411307435b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5760eb487749d0f22d83f60c92ce1983d6011f4941adced4547411307435b6->enter($__internal_1a5760eb487749d0f22d83f60c92ce1983d6011f4941adced4547411307435b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_771472b0e3375c9744ef519879a900fbddc73f0e34e7a87907fc7cd0c332ad8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771472b0e3375c9744ef519879a900fbddc73f0e34e7a87907fc7cd0c332ad8a->enter($__internal_771472b0e3375c9744ef519879a900fbddc73f0e34e7a87907fc7cd0c332ad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1a5760eb487749d0f22d83f60c92ce1983d6011f4941adced4547411307435b6->leave($__internal_1a5760eb487749d0f22d83f60c92ce1983d6011f4941adced4547411307435b6_prof);

        
        $__internal_771472b0e3375c9744ef519879a900fbddc73f0e34e7a87907fc7cd0c332ad8a->leave($__internal_771472b0e3375c9744ef519879a900fbddc73f0e34e7a87907fc7cd0c332ad8a_prof);

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
