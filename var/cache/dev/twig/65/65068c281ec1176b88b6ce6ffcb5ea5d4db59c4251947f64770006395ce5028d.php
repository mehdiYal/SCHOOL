<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1b4f3ee06d9025a7795bacf893808e9205fe703a36748ce45d17a23955e5c8dc extends Twig_Template
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
        $__internal_6c3d15b4c67e3706e52e033d8eec3716859a228fec7b165c5349d8aab4b3bbaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3d15b4c67e3706e52e033d8eec3716859a228fec7b165c5349d8aab4b3bbaf->enter($__internal_6c3d15b4c67e3706e52e033d8eec3716859a228fec7b165c5349d8aab4b3bbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f0111f13d0bc0c64387a6e07cc5eea2bcd8baef1fa48d513a189952570fbbcf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0111f13d0bc0c64387a6e07cc5eea2bcd8baef1fa48d513a189952570fbbcf4->enter($__internal_f0111f13d0bc0c64387a6e07cc5eea2bcd8baef1fa48d513a189952570fbbcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6c3d15b4c67e3706e52e033d8eec3716859a228fec7b165c5349d8aab4b3bbaf->leave($__internal_6c3d15b4c67e3706e52e033d8eec3716859a228fec7b165c5349d8aab4b3bbaf_prof);

        
        $__internal_f0111f13d0bc0c64387a6e07cc5eea2bcd8baef1fa48d513a189952570fbbcf4->leave($__internal_f0111f13d0bc0c64387a6e07cc5eea2bcd8baef1fa48d513a189952570fbbcf4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
