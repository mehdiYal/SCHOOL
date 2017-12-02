<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1a69f75182c96cd1202580092463d1b6442c2c96b16d11a045bd19c6785ba20e extends Twig_Template
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
        $__internal_049688e34a7d2c86b20e0e5e78fd5cd7348b4a3db75a00547ed4ed33e6402e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049688e34a7d2c86b20e0e5e78fd5cd7348b4a3db75a00547ed4ed33e6402e98->enter($__internal_049688e34a7d2c86b20e0e5e78fd5cd7348b4a3db75a00547ed4ed33e6402e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_ee73143c3d17339d7273c6dca7875cf14c7565d36eb6bc80ccf766e670d93549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee73143c3d17339d7273c6dca7875cf14c7565d36eb6bc80ccf766e670d93549->enter($__internal_ee73143c3d17339d7273c6dca7875cf14c7565d36eb6bc80ccf766e670d93549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_049688e34a7d2c86b20e0e5e78fd5cd7348b4a3db75a00547ed4ed33e6402e98->leave($__internal_049688e34a7d2c86b20e0e5e78fd5cd7348b4a3db75a00547ed4ed33e6402e98_prof);

        
        $__internal_ee73143c3d17339d7273c6dca7875cf14c7565d36eb6bc80ccf766e670d93549->leave($__internal_ee73143c3d17339d7273c6dca7875cf14c7565d36eb6bc80ccf766e670d93549_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
