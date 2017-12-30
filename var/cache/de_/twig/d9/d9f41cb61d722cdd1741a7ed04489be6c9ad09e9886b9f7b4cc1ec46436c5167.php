<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_65638ced4107c40a901155cb2f842f2f1d6d1467110ae58e769b3bfb1a38a046 extends Twig_Template
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
        $__internal_a400ec29bd7c4b1119fd3fd06fc850d9b2c92a3e9ed40b6211e6f9c26cdad02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a400ec29bd7c4b1119fd3fd06fc850d9b2c92a3e9ed40b6211e6f9c26cdad02a->enter($__internal_a400ec29bd7c4b1119fd3fd06fc850d9b2c92a3e9ed40b6211e6f9c26cdad02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b98c026f3e4f82fbf8944c740a9539b9b0e47102e7573bf718f5ccc30e781bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98c026f3e4f82fbf8944c740a9539b9b0e47102e7573bf718f5ccc30e781bf0->enter($__internal_b98c026f3e4f82fbf8944c740a9539b9b0e47102e7573bf718f5ccc30e781bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_a400ec29bd7c4b1119fd3fd06fc850d9b2c92a3e9ed40b6211e6f9c26cdad02a->leave($__internal_a400ec29bd7c4b1119fd3fd06fc850d9b2c92a3e9ed40b6211e6f9c26cdad02a_prof);

        
        $__internal_b98c026f3e4f82fbf8944c740a9539b9b0e47102e7573bf718f5ccc30e781bf0->leave($__internal_b98c026f3e4f82fbf8944c740a9539b9b0e47102e7573bf718f5ccc30e781bf0_prof);

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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
