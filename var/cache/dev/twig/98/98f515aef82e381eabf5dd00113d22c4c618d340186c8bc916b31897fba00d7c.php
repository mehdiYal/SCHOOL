<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d419f92c55e03d031904800f7fa8114751b7cf13d159543da6b97755000b29c6 extends Twig_Template
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
        $__internal_d799507aa2fc63841edebad7a30aaa3c2c52a98cb5161b8949bdfff754ced31d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d799507aa2fc63841edebad7a30aaa3c2c52a98cb5161b8949bdfff754ced31d->enter($__internal_d799507aa2fc63841edebad7a30aaa3c2c52a98cb5161b8949bdfff754ced31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9faa4869c4fd81e4fda86b35cdc87fdeef043a77cf88932639036143a5ff7354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9faa4869c4fd81e4fda86b35cdc87fdeef043a77cf88932639036143a5ff7354->enter($__internal_9faa4869c4fd81e4fda86b35cdc87fdeef043a77cf88932639036143a5ff7354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d799507aa2fc63841edebad7a30aaa3c2c52a98cb5161b8949bdfff754ced31d->leave($__internal_d799507aa2fc63841edebad7a30aaa3c2c52a98cb5161b8949bdfff754ced31d_prof);

        
        $__internal_9faa4869c4fd81e4fda86b35cdc87fdeef043a77cf88932639036143a5ff7354->leave($__internal_9faa4869c4fd81e4fda86b35cdc87fdeef043a77cf88932639036143a5ff7354_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
