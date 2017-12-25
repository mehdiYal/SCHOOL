<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fe6b53e5eec613050f162a9691fd7dfc714f7e828fef0245e71f9a36a6886608 extends Twig_Template
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
        $__internal_375f9a4d7c36617cf2db69b3b9d242335e1bee3d5296679fcba94ddf8aed658c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375f9a4d7c36617cf2db69b3b9d242335e1bee3d5296679fcba94ddf8aed658c->enter($__internal_375f9a4d7c36617cf2db69b3b9d242335e1bee3d5296679fcba94ddf8aed658c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_1970a9b897c54c2ff6a5e0c80623c4cec259282391f100568d616e0876c80bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1970a9b897c54c2ff6a5e0c80623c4cec259282391f100568d616e0876c80bbb->enter($__internal_1970a9b897c54c2ff6a5e0c80623c4cec259282391f100568d616e0876c80bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_375f9a4d7c36617cf2db69b3b9d242335e1bee3d5296679fcba94ddf8aed658c->leave($__internal_375f9a4d7c36617cf2db69b3b9d242335e1bee3d5296679fcba94ddf8aed658c_prof);

        
        $__internal_1970a9b897c54c2ff6a5e0c80623c4cec259282391f100568d616e0876c80bbb->leave($__internal_1970a9b897c54c2ff6a5e0c80623c4cec259282391f100568d616e0876c80bbb_prof);

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
