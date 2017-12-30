<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_10177ff28e7e1c49a26764e2b4ea6777d56341f88952c5b8fc5913f3e6b10b26 extends Twig_Template
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
        $__internal_77f7d42997f0c5a26114ca6ab9b11af2c5081e64001a36f2f61e2ebc5740edf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f7d42997f0c5a26114ca6ab9b11af2c5081e64001a36f2f61e2ebc5740edf0->enter($__internal_77f7d42997f0c5a26114ca6ab9b11af2c5081e64001a36f2f61e2ebc5740edf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_38bfbfa80301e573ab93fa74cc5fef958196a14ecb79e0b18caf7bf5ac8a8e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bfbfa80301e573ab93fa74cc5fef958196a14ecb79e0b18caf7bf5ac8a8e13->enter($__internal_38bfbfa80301e573ab93fa74cc5fef958196a14ecb79e0b18caf7bf5ac8a8e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_77f7d42997f0c5a26114ca6ab9b11af2c5081e64001a36f2f61e2ebc5740edf0->leave($__internal_77f7d42997f0c5a26114ca6ab9b11af2c5081e64001a36f2f61e2ebc5740edf0_prof);

        
        $__internal_38bfbfa80301e573ab93fa74cc5fef958196a14ecb79e0b18caf7bf5ac8a8e13->leave($__internal_38bfbfa80301e573ab93fa74cc5fef958196a14ecb79e0b18caf7bf5ac8a8e13_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
